<section class="gallery-preview">
    <h2>Our Work</h2>
    <p class="gallery-subtitle">A glimpse of our beautiful transformations</p>

    <div class="gallery-wrapper">
        <div class="gallery-track">
            <img src="images/IMG_5556.JPG" alt="">
            <img src="images/IMG_5557.JPG" alt="">
            <img src="images/IMG_5560.JPG" alt="">
            <img src="images/IMG_5561.JPG" alt="">
            <img src="images/IMG_5562.JPG" alt="">
            <img src="images/IMG_5564.JPG" alt="">

            <!-- Duplicate images for smooth infinite scroll -->
            <img src="images/IMG_5565.JPG" alt="">
            <img src="images/IMG_5569.JPG" alt="">
            <img src="images/IMG_5570.JPG" alt="">
            <img src="images/IMG_5577.JPG" alt="">
            <img src="images/IMG_5578.JPG" alt="">
            <img src="images/IMG_5579.JPG" alt="">
        </div>
    </div>
</section>

<style>
/* ===== GALLERY PREVIEW ===== */
.gallery-preview{
    padding:90px 0;
    background:#fff7f0;
    text-align:center;
    overflow:hidden;
}

.gallery-preview h2{
    font-size:36px;
    margin-bottom:10px;
    color:#2b2b2b;
}

.gallery-subtitle{
    font-size:16px;
    color:#777;
    margin-bottom:50px;
}

/* ===== WRAPPER ===== */
.gallery-wrapper{
    width:100%;
    overflow:hidden;
    position:relative;
}

/* ===== TRACK ===== */
.gallery-track{
    display:flex;
    width:max-content;
    animation: scrollGallery 30s linear infinite;
}

/* ===== IMAGES ===== */
.gallery-track img{
    width:280px;
    height:200px;
    object-fit:cover;
    margin:0 12px;
    border-radius:15px;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
    transition:0.3s ease;
}

.gallery-track img:hover{
    transform:scale(1.05);
}

/* ===== ANIMATION ===== */
@keyframes scrollGallery{
    0%{
        transform:translateX(0);
    }
    100%{
        transform:translateX(-50%);
    }
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .gallery-track img{
        width:220px;
        height:160px;
    }
}

@media(max-width:480px){
    .gallery-track img{
        width:180px;
        height:140px;
    }
}
</style>
