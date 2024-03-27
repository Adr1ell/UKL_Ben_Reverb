<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store - Nuansa Putih</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 100px 0;
        }
        h1 {
            font-size: 60px;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            font-size: 24px;
            margin-bottom: 40px;
            color: #666;
            line-height: 1.6;
        }
        .cta-btn {
            display: inline-block;
            padding: 20px 40px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-size: 30px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .cta-btn:hover {
            background-color: #555;
        }
        .fa-shopping-cart {
            margin-right: 10px;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
        .product-card {
            width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .product-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }
        .product-card p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #666;
            text-align: center;
        }
        .product-card .btn {
            display: block;
            padding: 15px 30px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin: 0 auto;
            width: 80%;
        }
        .product-card .btn:hover {
            background-color: #555;
        }
        /* Added styles for landing page */
        .landing-content {
            text-align: center;
            padding: 50px 0;
        }
        .landing-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }
        .landing-content p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Music Store</h1>
            <p>Discover a wide range of musical instruments in our collection.</p>
            <a href="#shop" class="cta-btn"><i class="fas fa-shopping-cart"></i> Shop Now</a>
        </div>
    </div>
    <div id="shop" class="container">
        <h2 style="text-align: center; margin-bottom: 50px;">Featured Products</h2>
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            <!-- Example product cards -->
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Product Image">
                <h3>Product Name</h3>
                <p>$99.99</p>
                <a href="#" class="btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Product Image">
                <h3>Product Name</h3>
                <p>$99.99</p>
                <a href="#" class="btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Product Image">
                <h3>Product Name</h3>
                <p>$99.99</p>
                <a href="#" class="btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </div>
    </div>
    <div class="landing-content">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec elementum massa ac elit accumsan, at fringilla arcu aliquam. Curabitur ac lectus sit amet enim vehicula euismod. Morbi semper nisl nec ultricies venenatis.</p>
    </div>
    <div class="footer">
        <p>&copy; 2024 Music Store. All rights 
