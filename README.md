# 💰 Finance Tracker

A full-stack **Finance Tracker** web application built with **PHP, MySQL, HTML, CSS, and JavaScript**.  
It allows users to register, log in, and manage their income and expenses efficiently.

---

## 🚀 Features
- 🔐 User Authentication (Register, Login, Logout)
- ➕ Add Transactions (Income/Expense)
- 🗑️ Manage and Delete Transactions
- 📊 View Balance, Income, and Expense
- 📂 Organized project structure (actions, includes, assets, charts, etc.)
- 💾 Data stored in **MySQL** (schema included in `schema.sql`)

---

## 🛠️ Tech Stack
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  

---

## 📂 Project Structure
finance-tracker/
│── actions/ # PHP actions (form handlers)
│ ├── add-transaction-action.php
│ ├── login-action.php
│ └── register-action.php
│
│── assets/ # Static assets (images, icons, etc.)
│── charts/ # (future) chart visualizations
│── css/ # Stylesheets
│ └── styles.css
│
│── includes/ # Common includes
│ ├── auth.php
│ ├── db.php
│ └── header.php
│
│── js/ # JavaScript files
│
│── add-transaction.php # Add transaction page
│── index.php # Dashboard / Home
│── login.php # Login page
│── logout.php # Logout page
│── register.php # Register page
│── schema.sql # Database schema
│── README.md # Documentation
