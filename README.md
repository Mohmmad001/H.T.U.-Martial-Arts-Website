# H.T.U. Martial Arts Website

A fully functional, multi-page web application developed as a university project for **H.T.U. Martial Arts** gym. The system is built using a robust full-stack architecture (**HTML5, CSS3, JavaScript, PHP, and MySQL**) to provide a seamless digital experience for potential customers, registered members, and site administrators.

---

## Project Overview & Features

The website bridges promotional content and operational management, catering to different user roles with distinct access layers:

* **Public Information Portal:** Features a professional landing page, a weekly class timetable, comprehensive details on martial arts categories, pricing plans, instructor qualifications, and a dedicated contact form with backend database integration.


* **User Membership & Account Management:** Allows new users to securely sign up, log in, manage their membership accounts, view eligible services, and book appointments.


* **Administrative Control Panel:** Restricted solely to authorized admin users, allowing complete CRUD (Create, Read, Update, Delete) operations over user accounts, gym services, class timetables, and instructor profiles.


* **Search Engine Optimization (SEO):** Fully optimized with semantic HTML5 elements (`<header>`, `<nav>`, `<section>`, `<article>`), clean URL structures, an XML sitemap submitted via Google Search Console, and mobile responsiveness.



---

## Technology Stack

* **Front-End:** HTML5, CSS3, JavaScript


* **Back-End:** PHP (handling server-side logic, session management, and form processing)


* **Database Management System (DBMS):** MySQL / phpMyAdmin (`htu_gym.sql`)


* **Hosting Platform:** InfinityFree (deployed with domain and live URL configuration)



---

## Database Schema (`htu_gym.sql`)

The underlying MySQL database (`htu_gym`) consists of the following relational tables:

1. **`users`**: Stores user credentials, names, usernames, emails, and passwords.
2. **`instructors`**: Details professional trainers, their roles, and martial arts backgrounds.
3. **`membership`**: Outlines membership options, details, and pricing structures.
4. **`member_user`**: Links registered users to their chosen memberships.
5. **`services`**: Manages additional gym offerings (e.g., self-defense courses, personal training).
6. **`user_service`**: Tracks auxiliary services booked by specific users.
7. **`timetable`**: Stores weekly class schedules categorized by time slots and days.
8. **`appointments`**: Records user-specific class bookings and timetable associations.
9. **`messages`**: Captures user inquiries submitted through the contact page.

---

## Quality Assurance & Testing

A comprehensive manual test plan comprising 30 structured test cases was executed to validate front-end responsiveness, form input validation, role-based navigation security, and back-end database operations:

* **Pass Rate:** Successfully passed over 90% of test cases, confirming robust performance across desktop and tablet viewports, secure session handling, and reliable database synchronization.


* **Identified Improvements:** Documented minor edge-case handling for mobile responsiveness, real-time form error messaging, and advanced admin record deletion logging for version 2.0.



---

## Project Structure & Setup

```text
H.T.U-Martial-Arts-Website/
│
├── database/
│   └── htu_gym.sql          # Complete MySQL database dump
├── docs/
│   ├── Design_Document.docx # Full requirements, wireframes, and architecture specs
│   └── Test_Plan.docx       # QA testing methodology and test case matrices
├── src/                     # Source code files (HTML/CSS/JS/PHP pages)
└── README.md                # Project documentation

```

### Getting Started Locally

1. Clone the repository to your local machine.
2. Import the `database/htu_gym.sql` file into your local MySQL server (e.g., via phpMyAdmin, configured on port `3307` or standard `3306`).


3. Configure your local server environment (such as XAMPP or WMP) with PHP support.
4. Point your local web server root to the `src/` directory and access `index.php` through your browser.
