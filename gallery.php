<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
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

        /* Mobile optimization */
        @media (max-width: 600px) {
            .img-grid {
                gap: 10px;
                padding: 10px;
            }

            .img-grid img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <?php include('components/header.php'); ?>
    <main class="img-grid">
        <img src="images/15kjkjkjkjkjkjk37e224e3ac4ad986de4116fa5df467e5.jpg" alt="">
<img src="images/28d39c_39fee459703c4ddcb33b511055322794~mv2.jpg" alt="">
<img src="images/71ziq-uO0vL._AC_UF350,350_QL80_.jpg" alt="">
<img src="images/099f1ab7-bfd2-44d3-a545-a073d0b5c6d5.png" alt="">
<img src="images/36842923-58ab-4d7e-bf2b-62509f867654.jpg" alt="">
<img src="images/And-One-1-1568x1232.jpg" alt="">
<img src="images/b5069073a5ae4c2b91c597513989896c.jpg" alt="">
<img src="images/bridal-special.jpg" alt="">
<img src="images/bridle-makeup.jpg" alt="">
<img src="images/ChatGPT Image Jan 15, 2026, 12_26_19 PM.png" alt="">
<img src="images/Face Clean up Image.webp" alt="">
<img src="images/facial-waxing.jpg" alt="">
<img src="images/facial.webp" alt="">
<img src="images/FEW.jpg" alt="">
<img src="images/hair.jpg" alt="">
<img src="images/images (2).jpg" alt="">
<img src="images/images (3).jpg" alt="">
<img src="images/images (4).jpg" alt="">
<img src="images/images (5).jpg" alt="">
<img src="images/images (7).jpg" alt="">
<img src="images/images (8).jpg" alt="">
<img src="images/images.jpg" alt="">
<img src="images/IMG_5556.JPG" alt="">
<img src="images/IMG_5557.JPG" alt="">
<img src="images/IMG_5560.JPG" alt="">
<img src="images/IMG_5561.JPG" alt="">
<img src="images/IMG_5562.JPG" alt="">
<img src="images/IMG_5564.JPG" alt="">
<img src="images/IMG_5565.JPG" alt="">
<img src="images/IMG_5569.JPG" alt="">
<img src="images/IMG_5570.JPG" alt="">
<img src="images/IMG_5577.JPG" alt="">
<img src="images/IMG_5578.JPG" alt="">
<img src="images/IMG_5579.JPG" alt="">
<img src="images/IMG_5580.JPG" alt="">
<img src="images/IMG_5581.JPG" alt="">
<img src="images/IMG_5584.JPG" alt="">
<img src="images/IMG_5587.JPG" alt="">
<img src="images/IMG_5591.JPG" alt="">
<img src="images/IMG_6042.JPG" alt="">
<img src="images/istockphoto-1678701754-612x612.jpg" alt="">
<img src="images/MACost2.jpg" alt="">
<img src="images/mehndi1.webp" alt="">
<img src="images/menicour.jpg" alt="">
<img src="images/MixCollage-15-Jan-2026-01-54-PM-1619.jpg" alt="">
<img src="images/MixCollage-15-Jan-2026-01-54-PM-1619.png" alt="">
<img src="images/Most-Desired-Engagement-Makeup-Look.jpg" alt="">
<img src="images/waxing.webp" alt="">
<img src="images/zHOVCPrPbcPu749eEy55oDLYJv1H2IHAex71fLpW.svg" alt="">

    </main>
    <?php include('components/footer.php'); ?>
</body>
</html>