# E-Legal

A web application for lawyers' practice management, with a legal advisory portal that connects lawyers and clients.

I built E-Legal as my undergraduate software-engineering semester project. The idea was to bring lawyers and clients onto one platform in Pakistan: clients can register, ask legal questions, and browse answers, while lawyers can register, answer those questions, publish articles, and manage their case load. It's a classic PHP/MySQL server-rendered app — every page is a PHP script that talks to a single MySQL database and renders HTML.

## Tech stack

- **PHP** (server-side, no framework) with **PDO** for database access
- **MySQL** (schema and seed data in [`elegal2.sql`](elegal2.sql))
- **HTML / CSS / JavaScript** with **Bootstrap** and **jQuery** on the front end
- Designed to run on a stock **Apache + MySQL** stack (e.g. XAMPP / phpMyAdmin)

## Features

- **Two account types** — lawyers and clients register and log in through their own forms; the session keeps them on the right dashboard.
- **Legal advisory Q&A** — clients post questions to a shared board; lawyers browse the board and post answers against each question.
- **Articles** — lawyers publish short articles, whose body text is stored alongside the database record.
- **Case management** — lawyers add, edit, and delete cases (progress, tasks done/remaining, appointments, and notes) from a single dashboard.
- **Profiles** — each lawyer and client has a profile page that pulls their details from the session and lists their questions, answers, articles, and cases.
- **Marketing site** — home, about, contact, services, and pricing pages wrap the app for visitors.

## Screenshots

> _Screenshots go here. Drop images into a `docs/screenshots/` folder and link them, e.g._ `![Lawyer dashboard](docs/screenshots/dashboard.png)`

## Prerequisites

- PHP 5.5+ (the app is written against the PHP 5.x / early-7.x era it was built in)
- MySQL 5.6+
- A web server such as Apache — the simplest path is an all-in-one [XAMPP](https://www.apachefriends.org/) install, which bundles Apache, MySQL, and phpMyAdmin

## Installation & running

1. Clone this repository into your web server's document root (for XAMPP that's `htdocs/`):
   ```bash
   git clone https://github.com/faizanzafar40/E-Legal.git
   ```
2. Start Apache and MySQL (from the XAMPP control panel, or your own services).
3. Create the database and load the schema + seed data. Either import [`elegal2.sql`](elegal2.sql) through phpMyAdmin into a database named `elegal2`, or from the command line:
   ```bash
   mysql -u root -e "CREATE DATABASE elegal2"
   mysql -u root elegal2 < elegal2.sql
   ```
4. Check the connection settings in [`connectdb.php`](connectdb.php). They default to a stock XAMPP setup (`localhost`, user `root`, empty password, database `elegal2`) — change them if yours differ.
5. Open the app in your browser:
   - Landing / marketing site: `http://localhost/E-Legal/index.php`
   - Login (lawyer & client): `http://localhost/E-Legal/indexlogin.php`

   The seed data ships with sample logins — for example lawyer `faizan` / `123` and client `murtaza` / `123`.

## Tests

This project has no automated test suite; I verified it by hand against the seeded database while building it.

## Project structure

```
.
├── index.php, indexlogin.php      # Marketing landing page and the login page
├── login_submit.php               # Authenticates lawyers and clients
├── clientregister.php,            # Registration forms + handlers
│   lawyerregister.php
├── connectdb.php                  # Single shared PDO connection (DB config lives here)
├── cases.php, addcase.php,        # Lawyer case management (list + CRUD)
│   editcase.php, savecase.php,
│   saveeditcase.php, deletecase.php
├── client/                        # Client dashboard: profile, questions, answers
├── lawyer/                        # Lawyer dashboard: profile, articles, questions, answers
├── about.php, contact.php,        # Static marketing pages
│   services.php, price.php, ...
├── header.php, footer.php         # Shared layout fragments
├── articles/                      # Article body text + images
├── css/, _css/, js/, _js/,        # Front-end assets and third-party libraries
│   font/, fonts/, img/, vendors/
├── elegal2.sql                    # Database schema and seed data
└── docs/                          # Original project description & installation guide
```

## Context / what I learned

This was one of my first full-stack projects, and it taught me how a server-rendered PHP app fits together end to end: sessions and authentication, modelling a small relational schema, routing all data access through a single PDO connection with prepared statements, and wiring CRUD screens on top of it.

## License

This project is licensed under the MIT License — see the [LICENSE](LICENSE) file for details.
