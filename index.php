<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .navbar .logo {
            font-size: 1.5em;
            color: #f2f2f2;
            text-decoration: none;
        }

        .navbar .menu {
            display: flex;
        }

        .navbar a {
            color: #f2f2f2;
            text-decoration: none;
            padding: 10px 20px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .menu-toggle {
            display: none;
            font-size: 1.5em;
            color: #fff;
            cursor: pointer;
        }

        .section {
            padding: 60px;
        }

        .home {
            background-image: url('img/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .home h1 {
            font-size: 2em;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            padding: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 15px;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .order-button, .whatsapp-btn {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            background-color: maroon;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .order-button:hover, .whatsapp-btn:hover {
            background-color: darkred;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #333;
                width: 100%;
                text-align: center;
            }

            .menu a {
                padding: 15px;
                display: block;
            }

            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="#" class="logo">Hijab Store</a>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#product">Product</a>
            <a href="#contact">Contact</a>
        </div>
    </div>

    <div id="home" class="section home">
        <h1>Selamat Datang di Hijab Store</h1>
    </div>

    <div id="product" class="section">
        <h1 style="text-align:center;">Products</h1>
        <div class="card-container">
            <div class="card">
                <img src="img/pasminaceruty.jpeg" alt="Pasmina Ceruty">
                <p>Pasmina Ceruty - Hijab segi empat panjang dari kain ceruty.</p>
                <button class="order-button">Pesan Sekarang</button>
            </div>
            <div class="card">
                <img src="img/instant.jpeg" alt="Pasmina Instan">
                <p>Pasmina Instan - Bahan Jersey yang stretch, adem & ringan.</p>
                <button class="order-button">Pesan Sekarang</button>
            </div>
            <div class="card">
                <img src="img/jilbabbella.png" alt="Jilbab Bella">
                <p>Jilbab Bella Square - Tipis tapi tetap mudah diatur.</p>
                <button class="order-button">Pesan Sekarang</button>
            </div>
            <div class="card">
                <img src="img/bergoo.jpeg" alt="Jilbab Bergo">
                <p>Jilbab Bergo - Simple, tidak perlu peniti atau jarum pentul.</p>
                <button class="order-button">Pesan Sekarang</button>
            </div>
        </div>
    </div>

    <div id="contact" class="section" style="text-align: center;">
        <h1>Contact Us</h1>
        <button class="whatsapp-btn" onclick="window.location.href='https://wa.me/6285248181313?text=Halo,%20saya%20tertarik%20untuk%20membeli%20produk%20anda.'">Hubungi Sekarang</button>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</body>
</html>
