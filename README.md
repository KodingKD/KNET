# KNET ISP Website - Production Ready

A conversion-focused, professional ISP website for **KNET NETWORK SOLUTIONS LIMITED**.

## 🚀 Technical Stack
- **Backend:** PHP 8.x (Vanilla)
- **Database:** MySQL 8.x
- **Frontend:** Tailwind CSS, Alpine.js, Lucide Icons
- **Deployment:** GitHub Actions -> cPanel

## 📁 Project Structure
```
/ public /             # Document Root
  / api /              # JSON Handlers
/ includes /           # Core Logic & UI Components
/ database /           # SQL Schema
/ .github /            # Deployment Workflow
```

## 🛠️ Setup Instructions

### 1. Database Setup
1. Log in to your cPanel.
2. Go to **MySQL® Databases** and create a new database named `knet_db`.
3. Create a user and assign it to the database with all privileges.
4. Go to **phpMyAdmin**, select your database, and import the `database/schema.sql` file.

### 2. Configuration
1. Open `includes/config.php`.
2. Update the following constants with your production details:
   - `APP_ENV`: change to `'production'`
   - `DB_USER`: your cPanel DB username
   - `DB_PASS`: your cPanel DB password
   - `DB_NAME`: your database name

### 3. cPanel Deployment
1. Use cPanel's **Git Version Control**.
2. Clone your repository.
3. Set the **Document Root** to the `/public` folder of the project.
4. Configure the **Deployment Hook** in GitHub Secrets as `CPANEL_DEPLOY_HOOK` to enable automatic updates on push.

## 📱 Conversion Features
- **WhatsApp Floating Button:** Constant access to sales.
- **Coverage Checker:** Lead generation via WhatsApp.
- **Contact Form:** AJAX-powered with DB persistence.
- **Mobile Responsive:** Pixel-perfect on all devices.

## 📄 License
Registered to KNET NETWORK SOLUTIONS LIMITED.
