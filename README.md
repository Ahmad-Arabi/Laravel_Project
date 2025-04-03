# 🏨 JoHotels - Hotel Booking Services 🛎️

Welcome to **JoHotels**, your one-stop solution for booking the best hotels and managing stays! JoHotels is a fully functional web application designed to simplify hotel booking for users while providing admins with powerful tools to manage hotels, rooms, bookings, and more.

---

## 🌟 Features

### 🧑‍💻 **Admin Dashboard**
- Full CRUD functionality for managing:
  - 🏨 Hotels
  - 🚪 Rooms
  - 🎟️ Bookings
  - 💬 Reviews
  - 💳 Coupons
  - 👥 Users
- Easy-to-use interface for smooth operations.
- Secure role-based access control via Laravel Breeze.

### ⭐ **Rating System**
- Users can leave reviews with star ratings to help others make informed decisions.
- Admin moderation for maintaining high-quality feedback.

### 💳 **Checkout System**
- Streamlined booking process with integrated coupon discounts.

### 📊 **Dynamic User Experience**
- Fully responsive design using Bootstrap for beautiful layouts on any screen size.
- Fast and efficient data handling with AJAX-powered interactions.

---

## 🚀 Technologies Used

| Technology    | Purpose                                  |
|---------------|------------------------------------------|
| **HTML**      | Structuring web pages                   |
| **CSS**       | Styling for a polished UI               |
| **Bootstrap** | Responsive, mobile-first designs        |
| **Blade**     | Templating engine for Laravel           |
| **PHP**       | Backend logic for dynamic functionality |
| **MySQL**     | Database to manage all app data         |
| **Laravel**   | Robust framework for web development    |
| **Breeze**    | Authentication and starter kit setup    |

---

## 🛠️ How to Run the Project

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-repo/booking.git
   cd booking

2. **composer install**
   
3. **cp .env.example .env**
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
  DB_PASSWORD=your_database_password

4.php artisan key:generate

5.php artisan migrate

6.npm run dev

7.php artisan serve


