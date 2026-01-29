<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .filter-buttons {
            text-align: center;
            margin: 30px 0 10px;
        }

        .filter-buttons button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            background: #222;
            color: #fff;
            font-size: 14px;
            transition: background 0.3s;
        }

        .filter-buttons button:hover,
        .filter-buttons button.active {
            background: #c59d5f;
        }

        .img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
            padding: 20px;
            max-width: 1400px;
            margin: auto;
        }

        .img-grid img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
        }

        .img-grid img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 600px) {
            .img-grid img {
                height: 200px;
            }
        }
    </style>
</head>
<body>

<?php include('components/header.php'); ?>

<!-- CATEGORY BUTTONS -->
<div class="filter-buttons">
    <button class="active" onclick="filterImages('all')">All</button>
    <button onclick="filterImages('wedding')">Wedding</button>
    <button onclick="filterImages('prewedding')">Prewedding</button>
    <button onclick="filterImages('function')">Function</button>
    <button onclick="filterImages('party')">Party</button>
</div>

<!-- IMAGE GRID -->
<main class="img-grid">

    <!-- WEDDING -->
    <img src="images/bridal-special.jpg" data-category="wedding">
    <img src="images/bridle-makeup.jpg" data-category="wedding">
    <img src="images/Most-Desired-Engagement-Makeup-Look.jpg" data-category="wedding">
    <img src="images/IMG_5560.JPG" data-category="wedding">

    <!-- PREWEDDING -->
    <img src="images/And-One-1-1568x1232.jpg" data-category="prewedding">
    <img src="images/IMG_5556.JPG" data-category="prewedding">
    <img src="images/IMG_5557.JPG" data-category="prewedding">

    <!-- FUNCTION -->
    <img src="images/mehndi1.webp" data-category="function">
    <img src="images/FEW.jpg" data-category="function">
    <img src="images/IMG_5580.JPG" data-category="function">
    <img src="images/IMG_5581.JPG" data-category="function">

    <!-- PARTY -->
    <img src="images/MACost2.jpg" data-category="party">
    <img src="images/hair.jpg" data-category="party">
    <img src="images/images (5).jpg" data-category="party">
    <img src="images/IMG_5591.JPG" data-category="party">

</main>

<?php include('components/footer.php'); ?>

<!-- FILTER SCRIPT -->
<script>
    function filterImages(category) {
        const images = document.querySelectorAll('.img-grid img');
        const buttons = document.querySelectorAll('.filter-buttons button');

        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');

        images.forEach(img => {
            if (category === 'all' || img.dataset.category === category) {
                img.style.display = 'block';
            } else {
                img.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>
