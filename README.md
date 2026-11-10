# FixIt

FixIt is a small web app for finding trusted local professionals like carpenters, plumbers, electricians and barbers. You can browse them by service, see their profiles and reviews, and leave reviews yourself. It started as a hackathon project.

## Features

- **Accounts:** sign up, sign in and log out. Passwords are hashed with `password_hash` and sessions are regenerated on login.
- **Services:** 8 categories, each with its own list of professionals sorted by rating.
- **Profiles:** each professional has a profile with contact details, a bio, an average rating and reviews.
- **Reviews:** signed-in users can rate a professional (1–5 stars) and leave a comment.
- **Become a pro:** any user can turn their account into a professional listing with a category, phone, bio and photo upload.
- **Service requests:** customers send a job request (details, address, phone, preferred date) from a profile. Professionals accept, decline or mark it completed from their dashboard, and customers can track or cancel it.
- **Dashboard:** one page for your requests and, for professionals, incoming jobs and profile editing.
- **Gorkhey chatbot:** the assistant on the home page reads plain questions like "my tap is leaking" and suggests the top-rated professionals from the database.
- **Contact form:** messages are saved to the database.
- Works on mobile, with a hamburger menu.
- Every form has CSRF protection, and everything shown on a page is escaped.

## Tech stack

- PHP 8.1 or newer (no framework, no Composer)
- SQLite through PDO
- Tailwind CSS (CDN), Swiper, Remix Icon

## Running locally

You need PHP 8.1+ with the `pdo_sqlite` extension, which most PHP installs include.

```bash
git clone <this-repo>
cd hackthon
php -S localhost:8000
```

Then open http://localhost:8000.

The first time a page loads, the app creates `data/fixit.sqlite` and fills it with sample professionals. To start over with fresh data, delete that file. Uploaded profile photos go in `uploads/`.

**Demo account:** `demo@fixit.test` / `demo1234`. You can also just sign up for a new account.

## Project structure

```
includes/db.php      database connection, schema and sample data
includes/auth.php    sessions, login helpers, CSRF, flash messages
includes/provider_*.php   shared form and validation for professional listings
home.php             landing page
services.php         list of service categories
providers.php        professionals in one category (?category=plumber)
profile.php          one professional's profile, reviews and request form (?id=1)
become_pro.php       create a professional listing
dashboard.php        my requests, incoming jobs, edit my listing
chatbot.php          JSON endpoint for the home page chatbot
signin.php / signup.php / logout.php
contact.php          contact form
header.php / footer.php   shared layout
```

## Not done yet

- The chatbot matches keywords. It doesn't use an AI model.
- The Google, Apple and X sign-in buttons don't work yet.
- There is no in-app messaging between customers and professionals. They contact each other by phone or email.
