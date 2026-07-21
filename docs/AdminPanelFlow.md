# GameBench Admin Panel Workflow

## Overview

The admin panel should follow a logical workflow where all master data is created before games are added. Since a game depends on categories, developers, publishers, platforms, CPUs, GPUs, and tags, these records should exist beforehand.

---

# Overall Admin Flow

```text
Login
│
▼
Dashboard
│
├── Hardware
│   ├── CPUs
│   └── GPUs
│
├── Game Management
│   ├── Categories
│   ├── Developers
│   ├── Publishers
│   ├── Platforms
│   ├── Tags
│   └── Games
│
├── Content
│   ├── News
│   └── Documents
│
├── Community
│   ├── Users
│   └── Reviews
│
└── Settings
    ├── Mail Settings
    ├── Roles
    └── Permissions
```

---

# Initial System Setup

When the application is installed for the first time, the administrator should populate the master data in the following order.

```text
Dashboard
    │
    ▼
Categories
    │
    ▼
Developers
    │
    ▼
Publishers
    │
    ▼
Platforms
    │
    ▼
Tags
    │
    ▼
CPUs
    │
    ▼
GPUs
    │
    ▼
Games
```

This ensures that all required relationships already exist before a game is created.

---

# Why This Order?

When creating a game, the administrator should be able to select existing records instead of typing everything manually.

Example:

- Developer → Rockstar Games
- Publisher → Rockstar Games
- Category → Action
- Platform → Windows
- Tags → Open World, Multiplayer
- Minimum CPU → Intel Core i5-3470
- Recommended CPU → Intel Core i7-4770
- Minimum GPU → NVIDIA GTX 660
- Recommended GPU → NVIDIA GTX 1060

---

# Recommended Sidebar Structure

```text
Dashboard

Game Library
    Categories
    Developers
    Publishers
    Platforms
    Tags
    Games

Hardware
    CPUs
    GPUs

Content
    News
    Documents

Community
    Users
    Reviews

Settings
    Mail Settings
    Roles
    Permissions
```

---

# Game Creation Workflow

Instead of one very large form, use a multi-step wizard.

```text
Step 1
Basic Information

↓

Step 2
Images

↓

Step 3
Minimum Requirements

↓

Step 4
Recommended Requirements

↓

Step 5
Tags

↓

Step 6
Preview

↓

Publish
```

---

# Step 1 — Basic Information

Fields

- Title
- Slug
- Developer
- Publisher
- Category
- Platform
- Release Date
- Official Website
- Description
- Status (Active / Inactive)

Action

- Save & Continue

---

# Step 2 — Images

Fields

- Cover Image
- Banner Image

Features

- Image Preview
- Replace Image
- Remove Image

Action

- Save & Continue

---

# Step 3 — Minimum Requirements

Fields

- Operating System
- CPU
- GPU
- RAM
- Storage
- DirectX Version
- Sound Card
- Additional Notes

Action

- Save & Continue

---

# Step 4 — Recommended Requirements

Fields

- Operating System
- CPU
- GPU
- RAM
- Storage
- DirectX Version
- Sound Card
- Additional Notes

Action

- Save & Continue

---

# Step 5 — Tags

Display all available tags using checkboxes.

Example

- Action
- Adventure
- Open World
- Multiplayer
- RPG
- Horror
- Survival

Action

- Save & Continue

---

# Step 6 — Preview

Display everything exactly as the user will see it.

Preview should include

- Banner Image
- Cover Image
- Game Title
- Developer
- Publisher
- Category
- Platform
- Description
- Minimum Requirements
- Recommended Requirements
- Tags

Buttons

- Back
- Publish

---

# Publish Process

When the administrator clicks **Publish**, perform the following operations inside a single database transaction.

```text
Begin Transaction

↓

Create Game

↓

Upload Images

↓

Create Minimum Requirements

↓

Create Recommended Requirements

↓

Attach Tags

↓

Commit Transaction
```

If any operation fails, roll back the transaction so that no partial data is saved.

---

# Edit Game Workflow

Editing a game should reuse the same wizard.

```text
General Information

↓

Images

↓

Minimum Requirements

↓

Recommended Requirements

↓

Tags

↓

Preview

↓

Save Changes
```

This provides a consistent experience for administrators.

---

# Complete Admin Workflow

```text
Login

↓

Dashboard

↓

Create Categories

↓

Create Developers

↓

Create Publishers

↓

Create Platforms

↓

Create Tags

↓

Create CPUs

↓

Create GPUs

↓

Create Game
    ├── Basic Information
    ├── Images
    ├── Minimum Requirements
    ├── Recommended Requirements
    ├── Tags
    └── Publish

↓

Users Check Compatibility

↓

Compatibility Results Saved

↓

Users Submit Reviews

↓

Admin Moderates Reviews

↓

Admin Publishes News

↓

Application Continues Growing
```

---

# Database Relationships

```text
Category
    │
    ├── hasMany Games

Developer
    │
    ├── hasMany Games

Publisher
    │
    ├── hasMany Games

Platform
    │
    ├── hasMany Games

Game
    │
    ├── belongsTo Category
    ├── belongsTo Developer
    ├── belongsTo Publisher
    ├── belongsTo Platform
    ├── hasOne Minimum Requirement
    ├── hasOne Recommended Requirement
    ├── belongsToMany Tags
    ├── hasMany Reviews
    ├── hasMany Compatibility Results
    └── hasMany Favorites

User
    │
    ├── hasMany User Systems
    ├── hasMany Reviews
    ├── hasMany Favorites
    └── hasMany Compatibility Results

User System
    │
    ├── belongsTo User
    ├── belongsTo CPU
    └── belongsTo GPU
```

---

# Best Practices

- Populate master data before creating games.
- Use dropdowns instead of free-text fields where relationships exist.
- Validate every step before allowing the user to continue.
- Wrap the entire publish process in a database transaction.
- Show image previews before publishing.
- Allow saving drafts for incomplete games.
- Keep game editing consistent with game creation by using the same wizard.
- Log important administrative actions for auditing.
- Design the workflow to be scalable as more game metadata and features are added.