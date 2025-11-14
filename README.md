## Introduction

Tinker1984 is a powerful REPL for the Laravel framework with built-in session recording and auditing capabilities.

This project is inspired by [Rails console1984](https://github.com/basecamp/console1984), which brings security and accountability to Rails console sessions. Tinker1984 aims to provide similar functionality for Laravel applications by:

- **Recording console sessions** - Every command executed in Tinker is logged with timestamps and user information
- **Auditing capabilities** - Track who accessed the console, when, and what commands they ran
- **Enhanced security** - Maintain accountability and compliance in production environments
- **User tracking** - Associate console sessions with users

## Why Tinker1984?

Just like console1984 helps Rails teams maintain security and accountability in their console sessions, Tinker1984 extends Laravel's Tinker with the same philosophy.

## Features

- All standard Laravel Tinker functionality
- Automatic session recording to database
- Command history tracking
- User association for audit trails

## Installation

```bash
composer require mikicaivosevic/tinker1984
```

After installation run migrations:

```bash
php artisan migrate
```

## Usage

Use Tinker1984 just like regular Tinker:

```bash
php artisan tinker
```

All your commands will be automatically recorded for auditing purposes.

## License

Tinker1984 is open-sourced software licensed under the [MIT license](LICENSE.md).
