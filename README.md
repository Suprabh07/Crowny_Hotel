# Crowny Hotel — Simple Booking Example

Small PHP + MySQL demo for a hotel booking UI.

## Requirements
- PHP (7.x or 8.x)
- MySQL / MariaDB
- Web server (Apache / built-in PHP server)

## Quick setup
1. Create a database named `hotel_management`.
2. Run the setup script to create tables and seed rooms:
   - [setup.php](setup.php) (creates `rooms`, `subscribers`, `bookings`)
   - Tables created: `rooms`, `subscribers`, `bookings` (see [`rooms`](setup.php), [`subscribers`](setup.php), [`bookings`](setup.php))
3. Serve the project root from your web server and open:
   - [index.php](index.php) — main site and availability check
   - [booking.php](booking.php) — booking form
   - [book_confirm.php](book_confirm.php) — booking handler and confirmation

To clear all bookings and reset room availability:
- [clear.php](clear.php)

## Files of interest
- Frontend
  - [index.php](index.php)
  - [booking.php](booking.php)
- Backend handlers
  - [book_confirm.php](book_confirm.php)
  - [setup.php](setup.php)
  - [clear.php](clear.php)
- Styles
  - [style.css](style.css)
  - [booking_style.css](booking_style.css)
  - [bookconfirm.css](bookconfirm.css)

## How booking works (overview)
- Availability check on [index.php](index.php) queries `rooms` for `avaliability = 'YES'`.
- Booking via [booking.php](booking.php) posts to [book_confirm.php](book_confirm.php), which:
  - inserts into `bookings`
  - updates `rooms` (`avaliability`, `in_date`, `out_date`)
  - optionally inserts into `subscribers` when newsletter checked

## Security & improvements
- Current code uses raw SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.
- Add server-side validation and stronger email validation.
- Use transactions when inserting booking + updating room to avoid race conditions.
- Add proper error handling and logging instead of echoing raw DB errors.

## Notes
- This repository is a simple demo and not production-ready.
- Images and assets are in the project root (e.g. `banner-1.png`, `room-1.png`, `logo.png`).

## License
Use as needed. No explicit license provided.

```// filepath: c:\Users\supra\Desktop\Programers\Projects\Crowny\README.md

# Crowny Hotel — Simple Booking Example

Small PHP + MySQL demo for a hotel booking UI.

## Requirements
- PHP (7.x or 8.x)
- MySQL / MariaDB
- Web server (Apache / built-in PHP server)

## Quick setup
1. Create a database named `hotel_management`.
2. Run the setup script to create tables and seed rooms:
   - [setup.php](setup.php) (creates `rooms`, `subscribers`, `bookings`)
   - Tables created: `rooms`, `subscribers`, `bookings` (see [`rooms`](setup.php), [`subscribers`](setup.php), [`bookings`](setup.php))
3. Serve the project root from your web server and open:
   - [index.php](index.php) — main site and availability check
   - [booking.php](booking.php) — booking form
   - [book_confirm.php](book_confirm.php) — booking handler and confirmation

To clear all bookings and reset room availability:
- [clear.php](clear.php)

## Files of interest
- Frontend
  - [index.php](index.php)
  - [booking.php](booking.php)
- Backend handlers
  - [book_confirm.php](book_confirm.php)
  - [setup.php](setup.php)
  - [clear.php](clear.php)
- Styles
  - [style.css](style.css)
  - [booking_style.css](booking_style.css)
  - [bookconfirm.css](bookconfirm.css)

## How booking works (overview)
- Availability check on [index.php](index.php) queries `rooms` for `avaliability = 'YES'`.
- Booking via [booking.php](booking.php) posts to [book_confirm.php](book_confirm.php), which:
  - inserts into `bookings`
  - updates `rooms` (`avaliability`, `in_date`, `out_date`)
  - optionally inserts into `subscribers` when newsletter checked

## Security & improvements
- Current code uses raw SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.
- Add server-side validation and stronger email validation.
- Use transactions when inserting booking + updating room to avoid race conditions.
- Add proper error handling and logging instead of echoing raw DB errors.

## Notes
- This repository is a simple demo and not production-ready.
- Images and assets are in the project root (e.g. `banner-1.png`, `room-1.png`, `logo.png`).

## License
Use as needed. No explicit