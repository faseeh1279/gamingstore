# 🎮 GamingStore

GamingStore is a modern Laravel-based game management system that allows administrators to manage games, developers, publishers, categories, platforms, hardware requirements, and tags from an intuitive admin dashboard.

The project is designed with scalability in mind and serves as a foundation for a complete game catalog and PC compatibility platform similar to Steam or PCGameBenchmark.

---

# Features

## Authentication

- Admin Login
- Secure Authentication
- Protected Admin Routes

---

## Dashboard

- Total Games
- Categories
- Developers
- Publishers
- Platforms
- Active / Inactive Games
- Statistics Cards

---

## Game Management

- Create Game
- Update Game
- Delete Game
- View Game Details
- Upload Cover Image
- Upload Banner Image
- Game Description
- Official Website
- Release Date
- Active / Inactive Status

---

## Categories

- Create Category
- Update Category
- Delete Category
- Category Icons
- Category Description

---

## Developers

- Create Developer
- Edit Developer
- Delete Developer
- Company Website
- Logo Upload

---

## Publishers

- Create Publisher
- Edit Publisher
- Delete Publisher

---

## Platforms

- Windows
- Linux
- macOS

(Multiple platforms can be added later.)

---

## CPU Management

Store CPU information including

- Manufacturer
- Model
- Cores
- Threads
- Base Clock
- Boost Clock
- Benchmark Score

---

## GPU Management

Store GPU information including

- Manufacturer
- Model
- VRAM
- Benchmark Score

---

## Game Requirements

### Minimum Requirements

- CPU
- GPU
- RAM
- Storage
- Operating System
- DirectX
- Sound Card

### Recommended Requirements

- CPU
- GPU
- RAM
- Storage
- Operating System
- DirectX
- Sound Card

---

## Tags

Supports many-to-many relationship between Games and Tags.

Examples

- Open World
- Multiplayer
- Single Player
- Horror
- Fantasy
- Souls-like
- RPG
- Story Rich

---

# Tech Stack

Backend

- Laravel 13
- PHP 8.3+
- MySQL

Frontend

- Blade
- Bootstrap 5
- Bootstrap Icons

Storage

- Laravel Storage

Development

- Composer
- Artisan
- Git

---

# Database Structure

Main Tables

- users
- games
- categories
- developers
- publishers
- platforms
- tags
- game_tag
- cpus
- gpus
- minimum_requirements
- recommended_requirements

---

# Relationships

Game

- belongsTo Category
- belongsTo Developer
- belongsTo Publisher
- belongsTo Platform

Game

- belongsToMany Tags

Game

- hasOne MinimumRequirement

Game

- hasOne RecommendedRequirement

MinimumRequirement

- belongsTo CPU
- belongsTo GPU

RecommendedRequirement

- belongsTo CPU
- belongsTo GPU

---

# Installation

Clone the repository

```bash
git clone https://github.com/yourusername/gamingstore.git
```

Go inside project

```bash
cd gamingstore
```

Install dependencies

```bash
composer install
```

Create environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure database in

```
.env
```

Run migrations

```bash
php artisan migrate
```

Seed database

```bash
php artisan db:seed
```

Create storage link

```bash
php artisan storage:link
```

Run server

```bash
php artisan serve
```

---

# Seeder

The project includes sample data for

- Categories
- Developers
- Publishers
- Platforms
- CPUs
- GPUs
- Tags
- Games

---

# Folder Structure

```
app
 ├── Models
 ├── Http
 ├── Services
 ├── Providers

database
 ├── migrations
 ├── seeders

resources
 ├── views
 │    ├── admin
 │    ├── layouts

routes
 ├── web.php

public

storage
```

---

# Future Features

- User Accounts
- Game Reviews
- Ratings
- Wishlist
- Favorites
- Hardware Compatibility Checker
- Search
- Filters
- API
- REST API
- React Frontend
- Recommendation Engine

---

# Screenshots

Add screenshots here.

Example

```
docs/screenshots/dashboard.png
docs/screenshots/games.png
docs/screenshots/game-view.png
```

---

# License

This project is developed for educational and portfolio purposes.

```

---

## I also recommend creating a `docs/` folder

Professional projects usually keep documentation separate from the README.

```
gamingstore
│
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
├── routes
├── storage
│
├── docs
│   ├── 01-Project-Overview.md
│   ├── 02-System-Architecture.md
│   ├── 03-Database-Design.md
│   ├── 04-ERD.md
│   ├── 05-Installation.md
│   ├── 06-Features.md
│   ├── 07-API.md
│   ├── 08-Coding-Standards.md
│   ├── 09-Future-Roadmap.md
│   └── screenshots/
│
└── README.md
```

## Documentation roadmap

Since this is becoming a substantial Laravel project, I'd suggest documenting it in this order:

1. **README.md** — Project overview and setup (start here).
2. **Project Overview** — Purpose, goals, target users, and scope.
3. **System Architecture** — High-level architecture, request flow, MVC structure, and component interactions.
4. **Database Design** — Tables, relationships, and design rationale.
5. **ER Diagram (ERD)** — Visual entity relationship diagram.
6. **Features Documentation** — Explain each module (Games, Categories, Developers, Publishers, Platforms, Tags, Requirements).
7. **Installation & Deployment Guide** — Local setup and production deployment steps.
8. **Future Roadmap** — Planned features and improvements.
9. **Developer Guide** — Coding conventions, naming standards, folder organization, and contribution guidelines.

This progression mirrors how many professional software teams structure project documentation and will make your repository much easier to understand and maintain.