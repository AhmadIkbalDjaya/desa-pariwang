# Desa Pariwang - Village Profile Website 🚜🌾

The **Desa Pariwang** website is the official platform for Desa Pariwang. This website provides essential information about the village, including its profile, the latest news and activities, administrative information, and village potential. The project is built using **Laravel** for the backend and **Tailwind CSS** for a responsive user interface.

This website also includes an **admin feature**, enabling the village administration to manage and update the content.

## Visit the Website 🌐

Access the live version of the Desa Pariwang website at:  
[**pariwang.com**](https://pariwang.com)

## Features ✨

-   **Village Profile**: Displays general information about the village, including vision, mission, village officials, and village status.
-   **News and Activities**: Publishes the latest news and events in the village.
-   **Resident Administration**: Administrative information and resident data.
-   **Village-Owned Enterprises (BUMDes)**: Information about village-owned enterprises and their activities.
-   **Village Institutions**: Displays village organizations and their members.
-   **Village Map**: Highlights important locations, village boundaries, and geographical data.
-   **Number of Hamlets**: Information on the number and distribution of hamlets in the village.
-   **Village Potential**: Data on village potentials, including natural, human, and economic resources.
-   **Admin Panel**: Allows administrators to manage the content and update the website.

## Tech Stack 🛠️

-   **Backend**: Laravel
-   **Frontend (Public)**: Tailwind CSS, Livewire, Alpine.js
-   **Frontend (Admin)**: Bootstrap CSS
-   **Database**: MySQL
-   **Mapping**: MapLibre

## Prerequisites 🛠️

Before you begin, ensure you have the following installed:

-   **PHP >= 8.0**
-   **Composer** for dependency management
-   **Node.js >= 16** and **npm** for frontend asset management
-   **MySQL** or a compatible database

## Installation 🛠️

Follow these steps to install and run the project:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/AhmadIkbalDjaya/desa-pariwang.git
    ```
2. **Navigate to the project directory**:
    ```bash
    cd desa-pariwang
    ```
3. **Install backend dependencies**:
    ```bash
    composer install
    ```
4. **Install frontend dependencies**:
    ```bash
    npm install
    ```
5. **Copy the .env file and configure it**:
    ```bash
    cp .env.example .env
    ```
    - Configure the database settings based on your local setup.
    - Set the APP_URL for local development (e.g., http://localhost:8000).
6. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```
7. **Run migrations and seed the database**:
    ```bash
    php artisan migrate --seed
    ```
8. **Compile frontend assets**:
    ```bash
    npm run dev
    ```
9. **Start the local server**:
    ```bash
    php artisan serve
    ```

## Usage💻

-   Public Website: Access the public website at the root URL to view all village information.
-   Admin Panel: Access the admin dashboard at /admin to manage village data, news, and more.

## Screenshots 📸
