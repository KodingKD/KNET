<?php
/**
 * KNET AI Assistant Widget
 * Embedded site-wide for 24/7 lead capture, coverage lookup, hardware guidance, and troubleshooting
 */
$wa_number = defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : (defined('SITE_WHATSAPP') ? SITE_WHATSAPP : '254743820177');
$wa_clean = str_replace(['+', ' '], '', $wa_number);
?>

<div x-data="{
    aiOpen: false,
    messages: [
        {
            sender: 'bot',
            text: '👋 **Hello! I\'m your KNET 24/7 Assistant.**\n\nHow can I help you today? Ask me about **coverage in your town**, **fiber packages**, **Vestwoods & Mini-UPS batteries**, or **troubleshooting connection issues**!',
            actions: [
                { label: '⚡ Check Coverage', prompt: 'Is KNET available in my area?' },
                { label: '🔋 Blackout Batteries', prompt: 'What battery backup do you recommend for blackouts?' },
                { label: '🔴 Red LOS Light', prompt: 'My router is blinking a red LOS light' },
                { label: '🏗️ Subcontracting', prompt: 'Tell me about telecom subcontracting' }
            ]
        }
    ],
    userInput: '',
    isThinking: false,

    toggleChat() {
        this.aiOpen = !this.aiOpen;
        if (this.aiOpen) {
            this.$nextTick(() => {
                this.scrollToBottom();
                if (this.$refs.aiInput) this.$refs.aiInput.focus();
            });
        }
    },

    scrollToBottom() {
        if (this.$refs.chatBox) {
            this.$refs.chatBox.scrollTop = this.$refs.chatBox.scrollHeight;
        }
    },

    formatMessage(text) {
        if (!text) return '';
        // Bold
        let formatted = text.replace(/\*\*(.*?)\*\*/g, '<strong class=\'text-white font-bold\'>$1</strong>');
        // Bullets
        formatted = formatted.replace(/^[•\-\*]\s+(.*)$/gm, '<div class=\'flex items-start gap-2 my-1\'><span class=\'text-accent font-bold mt-0.5\'>&bull;</span><span>$1</span></div>');
        // Linebreaks
        formatted = formatted.replace(/\n/g, '<br>');
        return formatted;
    },

    sendMessage(textToSend = null) {
        const text = textToSend || this.userInput.trim();
        if (!text || this.isThinking) return;

        // Add user message
        this.messages.push({
            sender: 'user',
            text: text
        });

        this.userInput = '';
        this.isThinking = true;
        this.$nextTick(() => this.scrollToBottom());

        fetch('api/ai-chat.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: text })
        })
        .then(res => res.json())
        .then(data => {
            this.isThinking = false;
            if (data.success) {
                this.messages.push({
                    sender: 'bot',
                    text: data.reply,
                    actions: data.actions || []
                });
            } else {
                this.messages.push({
                    sender: 'bot',
                    text: '⚠️ ' + (data.message || 'I couldn\'t process that. Please tap below to chat with our operations desk directly on WhatsApp.'),
                    actions: [
                        { label: 'Chat on WhatsApp', url: 'https://wa.me/<?php echo $wa_clean; ?>?text=' + encodeURIComponent('Hello KNET, I have an inquiry: ' + text) }
                    ]
                });
            }
            this.$nextTick(() => {
                this.scrollToBottom();
                lucide.createIcons();
            });
        })
        .catch(() => {
            this.isThinking = false;
            this.messages.push({
                sender: 'bot',
                text: 'Network hiccup! You can reach our engineering team directly on WhatsApp anytime.',
                actions: [
                    { label: 'Chat on WhatsApp', url: 'https://wa.me/<?php echo $wa_clean; ?>?text=' + encodeURIComponent('Hello KNET, I have an inquiry: ' + text) }
                ]
            });
            this.$nextTick(() => this.scrollToBottom());
        });
    }
}" class="relative z-50">

    <!-- Floating Launcher Pill (Bottom-Left) -->
    <div class="fixed bottom-8 left-6 md:left-8 z-40">
        <button @click="toggleChat()"
            class="group bg-gradient-to-r from-primary to-blue-600 hover:from-primary-hover hover:to-blue-700 text-white px-4 py-3.5 rounded-full flex items-center gap-3 shadow-2xl shadow-primary/30 transition-all hover:scale-105 active:scale-95 border border-white/20">
            
            <div class="relative flex items-center justify-center">
                <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-white">
                    <i data-lucide="bot" class="w-5 h-5"></i>
                </div>
                <!-- Pulsing Online Indicator -->
                <span class="absolute -top-0.5 -right-0.5 w-3 h-3 bg-accent rounded-full border-2 border-dark-bg animate-pulse"></span>
            </div>

            <div class="text-left hidden sm:block">
                <span class="block text-xs font-black tracking-tight leading-none text-white">KNET AI</span>
                <span class="text-[10px] text-accent font-semibold leading-none">Online 24/7</span>
            </div>

            <span class="sm:hidden text-xs font-bold text-white pr-1">AI Help</span>
        </button>
    </div>

    <!-- AI Chat Drawer / Modal -->
    <div x-show="aiOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-8 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-8 scale-95"
        x-cloak
        class="fixed bottom-24 left-4 md:left-8 w-[calc(100vw-2rem)] sm:w-[400px] h-[550px] max-h-[80vh] bg-dark-bg/95 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl flex flex-col overflow-hidden z-50">

        <!-- Chat Header -->
        <div class="bg-card-bg/90 p-4 border-b border-white/10 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-primary to-blue-600 flex items-center justify-center text-white shadow-md">
                    <i data-lucide="bot" class="w-5 h-5"></i>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <h4 class="font-black text-sm text-white">KNET AI Assistant</h4>
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    </div>
                    <p class="text-[11px] text-slate-400">Coverage &bull; Hardware &bull; 24/7 Triage</p>
                </div>
            </div>

            <div class="flex items-center gap-1.5">
                <!-- WhatsApp Quick Handoff -->
                <a href="https://wa.me/<?php echo $wa_clean; ?>?text=<?php echo urlencode("Hello KNET Support, I'm reaching out from the website AI chat for assistance."); ?>"
                    target="_blank" rel="noopener noreferrer"
                    title="Switch to WhatsApp"
                    class="w-8 h-8 rounded-lg bg-[#25D366]/20 hover:bg-[#25D366] text-[#25D366] hover:text-white flex items-center justify-center transition-all">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                </a>
                
                <button @click="aiOpen = false"
                    title="Close"
                    class="w-8 h-8 rounded-lg bg-white/5 hover:bg-white/10 text-slate-400 hover:text-white flex items-center justify-center transition-all">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
        </div>

        <!-- Messages Body -->
        <div x-ref="chatBox" class="flex-1 overflow-y-auto p-4 space-y-4 no-scrollbar">
            <template x-for="(msg, index) in messages" :key="index">
                <div :class="msg.sender === 'user' ? 'flex justify-end' : 'flex justify-start'">
                    
                    <!-- Bot Message Card -->
                    <div x-show="msg.sender === 'bot'" class="max-w-[88%] space-y-2.5">
                        <div class="bg-card-bg border border-white/10 text-slate-200 text-xs md:text-sm p-4 rounded-2xl rounded-tl-sm leading-relaxed shadow-lg">
                            <div x-html="formatMessage(msg.text)"></div>
                        </div>

                        <!-- Action Chips -->
                        <template x-if="msg.actions && msg.actions.length > 0">
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <template x-for="(act, aIdx) in msg.actions" :key="aIdx">
                                    <div>
                                        <!-- Prompt Chip -->
                                        <template x-if="act.prompt">
                                            <button @click="sendMessage(act.prompt)"
                                                class="text-[11px] bg-white/5 hover:bg-primary/20 hover:border-primary/40 border border-white/10 text-slate-300 hover:text-white px-2.5 py-1.5 rounded-xl font-medium transition-all text-left">
                                                <span x-text="act.label"></span>
                                            </button>
                                        </template>

                                        <!-- URL / WhatsApp Chip -->
                                        <template x-if="act.url">
                                            <a :href="act.url" target="_blank"
                                                class="text-[11px] bg-accent/10 hover:bg-accent/20 border border-accent/30 text-accent hover:text-white px-2.5 py-1.5 rounded-xl font-bold transition-all flex items-center gap-1.5">
                                                <span x-text="act.label"></span>
                                                <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                                            </a>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>

                    <!-- User Message Bubble -->
                    <div x-show="msg.sender === 'user'"
                        class="max-w-[85%] bg-primary text-white text-xs md:text-sm px-4 py-2.5 rounded-2xl rounded-tr-sm shadow-md font-medium leading-relaxed">
                        <span x-text="msg.text"></span>
                    </div>
                </div>
            </template>

            <!-- Thinking Indicator -->
            <div x-show="isThinking" class="flex items-center gap-2 text-slate-400 text-xs py-2">
                <div class="w-6 h-6 rounded-lg bg-card-bg border border-white/10 flex items-center justify-center">
                    <span class="animate-spin w-3 h-3 border-2 border-primary border-t-transparent rounded-full"></span>
                </div>
                <span>Checking KNET systems...</span>
            </div>
        </div>

        <!-- Input Bar -->
        <div class="p-3 bg-card-bg/95 border-t border-white/10">
            <form @submit.prevent="sendMessage()" class="flex items-center gap-2">
                <input type="text"
                    x-ref="aiInput"
                    x-model="userInput"
                    :disabled="isThinking"
                    placeholder="Ask about packages, batteries, red light..."
                    class="flex-1 bg-white/5 border border-white/10 focus:border-primary rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none transition-all">
                
                <button type="submit"
                    :disabled="!userInput.trim() || isThinking"
                    class="w-10 h-10 rounded-xl bg-primary hover:bg-primary-hover disabled:opacity-40 text-white flex items-center justify-center transition-all shrink-0 shadow-md shadow-primary/20">
                    <i data-lucide="send" class="w-4 h-4"></i>
                </button>
            </form>
            <div class="flex items-center justify-between text-[10px] text-slate-500 px-1 pt-2">
                <span>Instant 24/7 AI Guidance</span>
                <span>Terms: Cash With Order</span>
            </div>
        </div>
    </div>
</div>
