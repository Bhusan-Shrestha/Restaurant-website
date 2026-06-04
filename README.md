# Restaurant Website

Simple PHP-based restaurant site (static pages + reservation form).

## Prerequisites
- XAMPP (Apache + MySQL) on Windows
- PHP 7.4 or newer
- A web browser

## Install & Run (Windows / XAMPP)
1. Ensure the project folder is located at `C:\xampp\htdocs\Restaurant` (already placed).
2. Open the XAMPP Control Panel and start **Apache** (and **MySQL** if your site uses a database).
3. Open your browser and visit:
   - http://localhost/Restaurant/
   - or http://localhost/Restaurant/index.php

## Database (optional)
If the site uses a database for reservations:
- Create a MySQL database using phpMyAdmin or the MySQL CLI.
- Import any provided `.sql` file if present.
- Update your database connection settings in your project's DB config file (for example, `components/header.php` or wherever your connection is defined).

## Project Structure
- index.php — homepage
- about.php — about page
- menus.php — menus page
- reserve.php — reservation form
- components/
  - header.php
  - footer.php
- css/ — styles (style.css)
- js/ — scripts (script.js)
- images/ — image assets

## Common Tasks
- Stop/start Apache: use the XAMPP Control Panel
- Change PHP version: configure XAMPP to use a different PHP build
- Troubleshooting: if `http://localhost/` doesn't load, check that port 80/443 are free and Apache is running.

## Git
To commit and push changes:

```powershell
cd C:\xampp\htdocs\Restaurant
git add README.md
git commit -m "Add README with running instructions"
git push
```

## Need help?
If you want, I can:
- Add a sample database SQL file
- Create a `config.php` for DB connections
- Add deployment instructions

