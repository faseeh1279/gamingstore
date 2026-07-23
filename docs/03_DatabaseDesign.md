# 03 - Database Design

# Database Design

## Overview

GamingStore uses a relational database designed according to normalization principles to minimize data duplication and maintain data integrity. The database stores information about games, their developers, publishers, platforms, hardware requirements, and descriptive tags.

The design uses primary keys, foreign keys, and relationship tables to model real-world associations between entities.

---

# Database Engine

* **Database:** MySQL
* **ORM:** Laravel Eloquent
* **Migration System:** Laravel Migrations

---

# Design Goals

The database was designed to:

* Reduce duplicate data.
* Enforce referential integrity.
* Support future expansion.
* Improve query performance.
* Maintain consistent relationships.
* Follow normalization principles.

---

# Entity Overview

The current version of GamingStore contains the following tables:

| Table                    | Purpose                                          |
| ------------------------ | ------------------------------------------------ |
| users                    | Administrator authentication                     |
| games                    | Stores game information                          |
| categories               | Game categories                                  |
| developers               | Game developers                                  |
| publishers               | Game publishers                                  |
| platforms                | Supported operating systems                      |
| cpus                     | CPU specifications                               |
| gpus                     | GPU specifications                               |
| tags                     | Game tags                                        |
| game_tag                 | Many-to-many relationship between games and tags |
| minimum_requirements     | Minimum hardware requirements                    |
| recommended_requirements | Recommended hardware requirements                |

---

# Table: games

Stores general information about each game.

## Columns

| Column           | Type      | Description           |
| ---------------- | --------- | --------------------- |
| id               | BIGINT    | Primary Key           |
| title            | VARCHAR   | Game title            |
| slug             | VARCHAR   | SEO-friendly URL      |
| developer_id     | BIGINT    | References developers |
| publisher_id     | BIGINT    | References publishers |
| category_id      | BIGINT    | References categories |
| platform_id      | BIGINT    | References platforms  |
| release_date     | DATE      | Game release date     |
| cover_image      | VARCHAR   | Cover image path      |
| banner_image     | VARCHAR   | Banner image path     |
| description      | TEXT      | Game description      |
| official_website | VARCHAR   | Official website      |
| is_active        | BOOLEAN   | Active status         |
| created_at       | TIMESTAMP | Creation time         |
| updated_at       | TIMESTAMP | Last update           |
| deleted_at       | TIMESTAMP | Soft delete timestamp |

---

# Table: categories

Stores game categories.

## Columns

* id
* name
* slug
* icon
* description
* is_active
* created_at
* updated_at

---

# Table: developers

Stores developer companies.

## Columns

* id
* name
* slug
* logo
* website
* description
* is_active
* created_at
* updated_at

---

# Table: publishers

Stores game publishers.

## Columns

* id
* name
* website
* description
* is_active
* created_at
* updated_at

---

# Table: platforms

Stores supported operating systems.

## Columns

* id
* name
* slug
* created_at
* updated_at

Examples:

* Windows
* Linux
* macOS

---

# Table: cpus

Stores processor specifications.

## Columns

* id
* manufacturer
* model
* cores
* threads
* base_clock
* boost_clock
* score
* release_year
* is_active
* created_at
* updated_at

---

# Table: gpus

Stores graphics card specifications.

## Columns

* id
* manufacturer
* model
* vram
* score
* release_year
* is_active
* created_at
* updated_at

---

# Table: tags

Stores descriptive labels assigned to games.

## Columns

* id
* name
* slug
* created_at
* updated_at

Examples include:

* Open World
* Multiplayer
* Story Rich
* Horror
* Controller Support
* Fantasy

---

# Table: game_tag

Acts as the pivot table connecting games and tags.

## Columns

| Column  | Description      |
| ------- | ---------------- |
| game_id | References games |
| tag_id  | References tags  |

This table allows one game to have multiple tags and one tag to belong to multiple games.

---

# Table: minimum_requirements

Stores the minimum hardware requirements for each game.

## Columns

| Column           | Description              |
| ---------------- | ------------------------ |
| game_id          | Game reference           |
| cpu_id           | Minimum CPU              |
| gpu_id           | Minimum GPU              |
| operating_system | Required OS              |
| ram              | Required RAM (GB)        |
| storage          | Required Storage (GB)    |
| directx_version  | Required DirectX version |
| sound_card       | Sound card requirement   |
| additional_notes | Extra notes              |

Each game has one minimum requirement record.

---

# Table: recommended_requirements

Stores recommended hardware requirements for optimal gameplay.

## Columns

* game_id
* cpu_id
* gpu_id
* operating_system
* ram
* storage
* directx_version
* sound_card
* additional_notes

Each game has one recommended requirement record.

---

# Relationships

## One-to-Many

Category → Games

Developer → Games

Publisher → Games

Platform → Games

CPU → Minimum Requirements

CPU → Recommended Requirements

GPU → Minimum Requirements

GPU → Recommended Requirements

---

## One-to-One

Game → Minimum Requirement

Game → Recommended Requirement

---

## Many-to-Many

Games ↔ Tags

Implemented using the `game_tag` pivot table.

---

# Foreign Key Constraints

The database uses foreign key constraints to maintain referential integrity.

Examples include:

* `games.developer_id → developers.id`
* `games.publisher_id → publishers.id`
* `games.category_id → categories.id`
* `games.platform_id → platforms.id`
* `minimum_requirements.cpu_id → cpus.id`
* `minimum_requirements.gpu_id → gpus.id`
* `recommended_requirements.cpu_id → cpus.id`
* `recommended_requirements.gpu_id → gpus.id`
* `game_tag.game_id → games.id`
* `game_tag.tag_id → tags.id`

---

# Soft Deletes

The `games` table implements Laravel Soft Deletes.

Benefits include:

* Accidental deletions can be recovered.
* Historical data remains available.
* Better auditing capabilities.

---

# Normalization

The database follows normalization principles:

## First Normal Form (1NF)

* Atomic values
* No repeating groups

## Second Normal Form (2NF)

* Every non-key attribute depends on the whole primary key

## Third Normal Form (3NF)

* Non-key attributes depend only on the primary key
* Related entities are stored in separate tables

---

# Performance Considerations

The schema is optimized through:

* Primary keys
* Foreign keys
* Unique slugs
* Indexed relationships (via foreign keys)
* Separate lookup tables for developers, publishers, categories, CPUs, GPUs, and platforms

---

# Future Database Enhancements

Future versions may introduce additional tables such as:

* reviews
* ratings
* wishlists
* favorites
* user_systems
* compatibility_results
* achievements
* screenshots
* game_news
* notifications
* audit_logs

These can be integrated without requiring major changes to the existing schema because the current design is modular and extensible.

---

# Summary

The GamingStore database is designed to provide a normalized, scalable, and maintainable structure for managing game information. By separating related entities into dedicated tables and defining clear relationships, the system minimizes redundancy while supporting future growth and additional functionality.
