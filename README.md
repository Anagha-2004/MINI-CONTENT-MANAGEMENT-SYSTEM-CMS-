# MINI CONTENT MANAGEMENT SYSTEM (CMS) 📝

A lightweight and beginner-friendly **Content Management System (CMS)** built using **PHP**, **MongoDB**, and **HTML/CSS** — mimicking basic WordPress functionalities like creating, editing, deleting, and displaying blog posts.



## 🚀 Features

- ✅ Create, Edit, Delete blog posts (Admin functionality)
- 📄 View all posts in a clean dashboard
- 🌈 Stylish UI with background image and center-aligned layout
- 📦 Posts stored in MongoDB (No MySQL needed)
- 🧠 Inspired by WordPress post management system



## 🛠 Tech Stack

- **Frontend**: HTML5, CSS3
- **Backend**: PHP 8.3
- **Database**: MongoDB
- **Composer**: For PHP dependency management



## 🔗 WordPress Connection

This project draws inspiration from WordPress’s core functionality:

| WordPress            | Mini CMS Equivalent                 |
|----------------------|-------------------------------------|
| Admin Panel          | `dashboard.php`                    |
| Post Editor          | `create.php`, `edit.php`           |
| CRUD with DB         | PHP + MongoDB (`functions.php`)    |
| wp-admin/post.php    | `index.php` for public listing      |

It’s a simplified, educational implementation of WordPress-style content management using pure PHP and MongoDB.


## 📁 Folder Structure

php-mini-cms/
│
├── index.php → Lists all blog posts
├── create.php → Form to create a post
├── edit.php → Form to edit a post
├── delete.php → Deletes a post
├── dashboard.php → Admin dashboard view
├── db.php → MongoDB connection
├── functions.php → All CRUD operations
├── style.css → Page styling and layout
└── vendor/ → Composer packages (includes MongoDB driver)


## 🧰 Prerequisites

- PHP 8.0 or higher
- MongoDB installed and running locally (or Atlas)
- Composer installed (to install PHP MongoDB library)



