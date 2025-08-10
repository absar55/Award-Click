# Award Click

---

## Table of Contents

1. [Project Overview](#project-overview)  
2. [Motivation and Purpose](#motivation-and-purpose)  
3. [Key Features](#key-features)  
4. [Technologies Used](#technologies-used)  
5. [System Architecture](#system-architecture)  
6. [Detailed Modules Description](#detailed-modules-description)  
7. [Frontend Design and User Experience](#frontend-design-and-user-experience)  
8. [Installation and Setup Guide](#installation-and-setup-guide)  
9. [Usage and User Flow](#usage-and-user-flow)  
10. [Security Considerations](#security-considerations)  
11. [Performance Optimization](#performance-optimization)  
12. [Future Enhancements](#future-enhancements)  
13. [Contributing](#contributing)  
14. [License](#license)  
15. [Contact Information](#contact-information)  

---

## Project Overview

**Award Click** is a comprehensive affiliate marketing platform inspired by ShareSale, designed to connect advertisers and publishers through a seamless and transparent system built on the robust LAMP stack (Linux, Apache, MySQL, PHP). 

This platform empowers advertisers to promote their products and services by recruiting publishers (affiliates) who earn commissions by driving sales or leads through tracked clicks and conversions. Meanwhile, publishers get access to a diverse marketplace of affiliate programs where they can select campaigns to promote and monetize their digital presence.

Award Click focuses on providing an intuitive user interface, real-time tracking, detailed analytics, and flexible commission structures—all wrapped in a beautiful, responsive frontend designed to enhance user engagement and usability.

---

## Motivation and Purpose

Affiliate marketing is a vital pillar of the modern digital economy, enabling businesses to increase sales via performance-based partnerships, and offering individuals and content creators ways to monetize their audiences. However, many existing affiliate platforms suffer from complexity, poor user experience, or lack transparency in tracking and payments.

The purpose of **Award Click** is to create an open, user-friendly, and efficient affiliate marketplace that:

- Simplifies the onboarding process for advertisers and publishers.
- Provides real-time tracking and transparent reporting of clicks, conversions, and commissions.
- Supports customizable commission models (CPC, CPA, CPS).
- Offers powerful analytics for optimizing campaigns.
- Delivers a beautiful, modern frontend to ensure ease of use and increase adoption.
- Leverages the proven LAMP stack for stability, scalability, and ease of deployment.

---

## Key Features

- **Multi-User Roles:** Separate dashboards and functionalities for Advertisers, Publishers, and Admins.
- **Affiliate Program Management:** Advertisers can create and manage campaigns with customizable commission structures.
- **Publisher Marketplace:** Publishers can browse and apply to affiliate programs based on niche, commission, and performance.
- **Click and Conversion Tracking:** Reliable tracking of user clicks, conversions, and attribution using unique tracking links.
- **Real-Time Analytics:** Detailed reports on traffic sources, conversion rates, commissions earned, and campaign performance.
- **Payment Management:** Admin-controlled commission payouts with flexible payment scheduling and methods.
- **User Registration and Authentication:** Secure sign-up/login system with email verification and password reset.
- **Referral Program:** Publishers can refer other affiliates and earn bonuses.
- **Responsive Design:** Fully mobile-friendly frontend optimized for desktops, tablets, and smartphones.
- **Admin Panel:** Comprehensive admin dashboard to manage users, campaigns, disputes, and system settings.
- **Notification System:** Email and in-app notifications for important updates, such as new approvals, payments, or alerts.
- **SEO Optimized:** Frontend built with SEO best practices to attract organic traffic.
- **Security Best Practices:** Implementation of data validation, encryption, and secure session management.

---

## Technologies Used

- **Operating System:** Linux (Ubuntu/Debian recommended for deployment)  
- **Web Server:** Apache HTTP Server  
- **Database:** MySQL (or MariaDB)  
- **Backend Language:** PHP (7.x or 8.x)  
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap 5 (or another modern CSS framework)  
- **Tracking & Analytics:** Custom PHP scripts with MySQL for data storage  
- **Authentication:** PHP sessions, password hashing (bcrypt)  
- **Email Notifications:** PHPMailer or similar libraries for transactional emails  
- **Version Control:** Git/GitHub for source code management  
- **Optional:** Redis or Memcached for caching (future scalability)  

---

## System Architecture

Award Click follows a classic LAMP stack layered architecture:

1. **Presentation Layer (Frontend):**  
   The user-facing part consisting of beautifully crafted HTML, CSS, and JavaScript interfaces. Responsive design ensures a smooth experience on any device.

2. **Application Layer (Backend):**  
   PHP scripts handle business logic including user authentication, campaign management, click tracking, commission calculation, and payment processing.

3. **Data Layer (Database):**  
   MySQL stores all persistent data — user profiles, campaigns, clicks, conversions, transactions, notifications, and system logs.

4. **Web Server:**  
   Apache processes HTTP requests, routes them to appropriate PHP handlers, and serves static assets efficiently.

5. **Security Layer:**  
   Multiple layers of input validation, session handling, and encrypted communication ensure data integrity and user privacy.

---

## Detailed Modules Description

### 1. User Management Module

- Handles registration, login, password recovery, and profile management.
- Supports role-based access for Advertisers, Publishers, and Admins.
- Implements email verification for new users.
- Enables profile editing with options to add payment information and tax details.

### 2. Advertiser Dashboard

- Allows advertisers to create and manage affiliate campaigns.
- Set commission types: Cost Per Click (CPC), Cost Per Action (CPA), or Cost Per Sale (CPS).
- Upload marketing creatives and tracking links.
- View detailed statistics on campaign performance and payouts.
- Approve or reject publisher applications to their campaigns.

### 3. Publisher Dashboard

- Browse and filter available affiliate programs by category, commission, and popularity.
- Apply to join campaigns with a simple click.
- Access unique affiliate tracking links and marketing materials.
- Monitor clicks, conversions, commissions earned, and payout history.
- Request withdrawals once a minimum payout threshold is met.

### 4. Click and Conversion Tracking System

- Generates unique tracking URLs for each publisher-campaign pair.
- Records every click with timestamp, IP address, and referral source.
- Tracks conversions based on advertiser-defined rules (purchase, signup, download).
- Prevents fraud with IP filtering, cookie expiration, and validation techniques.

### 5. Payment and Commission Module

- Calculates commissions dynamically based on campaign settings.
- Logs all transactions and commission payouts.
- Admin panel controls payment schedules and processes bulk payouts.
- Supports payment gateways like PayPal, bank transfer, or manual payouts.

### 6. Admin Panel

- Centralized control for managing users, campaigns, disputes, and system settings.
- Generates reports on overall platform usage, revenue, and affiliate performance.
- Handles user complaints and suspicious activities.
- Manages content such as FAQs, terms, and privacy policies.

### 7. Notifications Module

- Sends email and in-app notifications for new campaign invitations, payment confirmations, or system alerts.
- Configurable notification preferences for users.

---

## Frontend Design and User Experience

The frontend is crafted with a focus on simplicity, elegance, and responsiveness to accommodate diverse user devices.

- **Landing Page:** Clean, visually appealing landing page showcasing platform features, testimonials, and calls to action for registration.
- **User Dashboards:** Role-specific dashboards display relevant KPIs, quick links, and notifications.
- **Campaign Marketplace:** Searchable, filterable marketplace with attractive campaign cards highlighting commission rates and descriptions.
- **Responsive Navigation:** Mobile-friendly menus and touch interactions ensure smooth browsing.
- **Forms and Validation:** User-friendly forms with inline validation reduce errors and improve usability.
- **Real-Time Updates:** AJAX and JavaScript provide seamless dynamic updates without full page reloads.
- **Visual Analytics:** Interactive charts and graphs illustrate performance metrics clearly.

---

## Installation and Setup Guide

### Prerequisites

- A Linux server with Apache, MySQL, PHP installed (LAMP stack).
- Composer (optional) for PHP package management.
- Access to a MySQL database and user with appropriate privileges.
- SMTP server or email sending service for notifications.

### Steps

1. **Clone Repository:**  
   ```bash
   git clone https://github.com/absar55/Award-Click.git
   cd award-click
