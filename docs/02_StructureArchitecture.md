# 02 - System Architecture

# System Architecture

## Overview

GamingStore follows the Model-View-Controller (MVC) architectural pattern provided by the Laravel framework. This architecture separates business logic, presentation logic, and data access into independent layers, improving maintainability, scalability, and testability.

The application is designed using Laravel's built-in features such as Eloquent ORM, Routing, Middleware, Validation, and Blade templating.

---

# Architecture Diagram

```
                User
                  │
                  ▼
             Web Browser
                  │
                  ▼
          Laravel Routes (web.php)
                  │
                  ▼
            Middleware Layer
                  │
                  ▼
             Controller Layer
                  │
         ┌────────┴────────┐
         ▼                 ▼
 Validation          Business Logic
         │                 │
         └────────┬────────┘
                  ▼
            Eloquent Models
                  │
                  ▼
             MySQL Database
                  │
                  ▼
            Retrieved Data
                  │
                  ▼
            Blade Templates
                  │
                  ▼
             HTML Response
                  │
                  ▼
                 User
```

---

# Architectural Pattern

GamingStore uses the MVC (Model-View-Controller) design pattern.

The three major layers are:

* Models
* Views
* Controllers

Each layer has a specific responsibility.

---

# Model Layer

The Model layer is responsible for interacting with the database.

Models represent database tables and define relationships between entities using Eloquent ORM.

Examples include:

* Game
* Category
* Developer
* Publisher
* Platform
* CPU
* GPU
* Tag
* MinimumRequirement
* RecommendedRequirement

Responsibilities:

* Database queries
* Relationships
* Attribute casting
* Mass assignment
* Business rules related to data

---

# Controller Layer

Controllers receive HTTP requests from users, process input, validate requests, communicate with models, and return responses.

Examples include:

* GameController
* CategoryController
* DeveloperController
* PublisherController
* PlatformController
* CpuController
* GpuController
* TagController

Responsibilities:

* Receive requests
* Validate user input
* Execute CRUD operations
* Load relationships
* Return Blade views

---

# View Layer

Views are created using Laravel Blade.

Responsibilities:

* Display data
* Render forms
* Show validation errors
* Display success messages
* Present tables and cards

Views are located inside:

```
resources/views/
```

Example:

```
resources/views/admin/games
resources/views/admin/categories
resources/views/admin/developers
```

---

# Routing

All web requests enter through Laravel routes.

```
routes/web.php
```

Routes map URLs to controller methods.

Example:

```
GET     /games
GET     /games/create
POST    /games
GET     /games/{game}
GET     /games/{game}/edit
PUT     /games/{game}
DELETE  /games/{game}
```

---

# Middleware

Middleware filters requests before they reach controllers.

Examples include:

* Authentication
* Guest
* CSRF Protection
* Session Handling

Responsibilities:

* Verify logged-in users
* Protect routes
* Handle sessions
* Prevent unauthorized access

---

# Eloquent ORM

GamingStore uses Laravel Eloquent ORM to communicate with MySQL.

Advantages include:

* Object-oriented syntax
* Relationship management
* Query builder
* Lazy loading
* Eager loading
* Mass assignment
* Automatic timestamps

Example:

```php
$game->developer
$game->publisher
$game->category
$game->tags
```

---

# Database Layer

The application stores data inside MySQL.

Major tables include:

* games
* categories
* developers
* publishers
* platforms
* cpus
* gpus
* tags
* game_tag
* minimum_requirements
* recommended_requirements

Relationships are maintained using foreign keys.

---

# Relationships

Game

* belongsTo Developer
* belongsTo Publisher
* belongsTo Category
* belongsTo Platform

Game

* belongsToMany Tags

Game

* hasOne MinimumRequirement

Game

* hasOne RecommendedRequirement

MinimumRequirement

* belongsTo CPU
* belongsTo GPU

RecommendedRequirement

* belongsTo CPU
* belongsTo GPU

---

# Request Lifecycle

When a user requests a page, Laravel processes it in the following order:

1. User sends an HTTP request.
2. Request reaches `public/index.php`.
3. Laravel bootstraps the application.
4. Route is matched.
5. Middleware executes.
6. Controller receives the request.
7. Controller interacts with models.
8. Eloquent queries the database.
9. Data is returned to the controller.
10. Controller passes data to a Blade view.
11. Blade renders HTML.
12. Browser displays the response.

---

# File Structure

```
app/
│
├── Http/
│   ├── Controllers
│   ├── Middleware
│   └── Requests
│
├── Models
│
database/
│
├── migrations
├── seeders
│
resources/
│
├── views
│   ├── admin
│   └── layouts
│
routes/
│
└── web.php
```

---

# Design Principles

The project follows several software engineering principles:

* Separation of Concerns
* Single Responsibility Principle
* Convention over Configuration
* Reusable Components
* Database Normalization
* MVC Architecture

---

# Scalability

The current architecture allows future integration of:

* REST APIs
* React frontend
* Mobile applications
* Queue jobs
* Notifications
* Redis caching
* Full-text search
* Game recommendation engine
* PC hardware compatibility service

---

# Security Considerations

The application uses Laravel's built-in security features, including:

* CSRF protection
* Password hashing
* Route middleware
* Form validation
* Mass assignment protection
* SQL injection protection through Eloquent
* XSS protection via Blade escaping

---

# Summary

GamingStore is built on Laravel's MVC architecture with a modular design. Each component has a clearly defined responsibility, allowing the application to remain organized, maintainable, and scalable as additional features are introduced.
