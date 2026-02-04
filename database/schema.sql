-- KNET ISP Website Database Schema

-- Contact form submissions
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20) NOT NULL,
    service_interest VARCHAR(100),
    message TEXT,
    ip_address VARCHAR(45),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Coverage areas
CREATE TABLE IF NOT EXISTS coverage_areas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    region VARCHAR(100) NOT NULL,
    area_name VARCHAR(100) NOT NULL,
    coverage_type ENUM('fiber', 'wireless', 'both') DEFAULT 'wireless',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Testimonials
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    location VARCHAR(100),
    client_type ENUM('home', 'business', 'institution') DEFAULT 'home',
    testimonial TEXT NOT NULL,
    rating TINYINT DEFAULT 5,
    is_featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- FAQs
CREATE TABLE IF NOT EXISTS faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    sort_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Initial Seed Data
INSERT INTO coverage_areas (region, area_name, coverage_type) VALUES 
('Vihiga', 'Mbale Town', 'both'),
('Vihiga', 'Chavakali', 'wireless'),
('Kakamega', 'Kakamega Town', 'both'),
('Kakamega', 'Mumias', 'wireless'),
('Nairobi', 'Westlands', 'fiber'),
('Nairobi', 'Kilimani', 'fiber');

INSERT INTO faqs (category, question, answer, sort_order) VALUES 
('General', 'What is KNET?', 'KNET is a premium ISP providing high-speed internet in Vihiga, Kakamega, and Nairobi.', 1),
('Technical', 'Do you provide fiber to the home?', 'Yes, we provide FTTH in selected areas of Nairobi and major towns in Western Kenya.', 2),
('Billing', 'How do I pay my bill?', 'You can pay via M-Pesa Paybill or through our online portal.', 3);
