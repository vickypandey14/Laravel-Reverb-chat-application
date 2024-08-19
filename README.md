# Laravel Reverb Chat Application

Welcome to the Laravel Reverb Chat Application! This project demonstrates how to build a real-time chat application using Laravel Reverb. 

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Features

- Real-time messaging using Laravel Reverb.
- Simple and clean user interface built with Laravel Blade templates.
- No need for external WebSocket servers or third-party services.
- Easy to set up and extend for further real-time applications.

## Installation

To get started with this project, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/vickypandey14/Laravel-Reverb-chat-application.git
   cd Laravel-Reverb-chat-application
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up environment variables**:
   Copy `.env.example` to `.env` and configure your database and other environment variables as needed.

4. **Run migrations**:
   ```bash
   php artisan migrate
   ```

5. **Install Laravel Reverb**:
   ```bash
   php artisan reverb:install
   ```

6. **Start the WebSocket server**:
   ```bash
   php artisan reverb:start
   ```

7. **Serve the application**:
   ```bash
   php artisan serve
   ```

   Your application should now be running on `http://localhost:8000`.

## Usage

After following the installation steps, you can start using the chat application by registering a user and navigating to the chat interface. 

### Chat Interface

- **Real-time messaging**: Send and receive messages in real-time without needing to refresh the page.
- **Responsive UI**: The chat interface is designed to be responsive and works well on both desktop and mobile devices.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
