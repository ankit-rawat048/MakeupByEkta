<section class="bridal-special">
    <div class="bridal-content">
        <h2>Bridal Special</h2>
        <h1>Make Your Wedding Day Truly Magical</h1>
        <p>
            Every bride deserves to look stunning on her big day. Our bridal special services
            are crafted with love, perfection, and premium products to enhance your natural beauty.
        </p>

        <ul class="bridal-services">
            <li>💄 HD & Airbrush Bridal Makeup</li>
            <li>💇‍♀️ Bridal Hairstyling & Hair Accessories</li>
            <li>🌸 Pre-Bridal Skincare & Glow Packages</li>
            <li>🌿 Traditional Mehndi & Bridal Designs</li>
            <li>✨ Saree / Lehenga Draping</li>
        </ul>

        <a href="contactus.php" class="bridal-btn">Book Bridal Package</a>
    </div>

    <div class="bridal-image">
        <img src="images/IMG_6042.JPG" alt="Bridal Makeup">
    </div>
</section>

<style>
/* ===== BRIDAL SPECIAL SECTION ===== */
.bridal-special{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:60px;
    padding:100px 8%;
    background:linear-gradient(to right, #fff0f3, #fff);
    box-sizing:border-box;
}

/* ===== CONTENT ===== */
.bridal-content{
    max-width:550px;
}

.bridal-content h2{
    font-size:20px;
    text-transform:uppercase;
    letter-spacing:2px;
    color:#b76e79;
    margin-bottom:15px;
}

.bridal-content h1{
    font-size:42px;
    line-height:1.2;
    margin-bottom:20px;
    color:#2b2b2b;
}

.bridal-content p{
    font-size:16px;
    line-height:1.8;
    color:#555;
    margin-bottom:30px;
}

/* ===== LIST ===== */
.bridal-services{
    list-style:none;
    padding:0;
    margin-bottom:40px;
}

.bridal-services li{
    font-size:16px;
    margin-bottom:12px;
    color:#444;
}

/* ===== BUTTON ===== */
.bridal-btn{
    display:inline-block;
    padding:14px 36px;
    background:#b76e79;
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-size:16px;
    transition:0.3s ease;
}

.bridal-btn:hover{
    background:#9e5c65;
}

/* ===== IMAGE ===== */
.bridal-image{
    max-width:500px;
    width:100%;
}

.bridal-image img{
    width:100%;
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,0.15);
}

/* ===== RESPONSIVE ===== */
@media(max-width:992px){
    .bridal-special{
        flex-direction:column;
        text-align:center;
    }

    .bridal-content h1{
        font-size:34px;
    }
}

@media(max-width:576px){
    .bridal-content h1{
        font-size:28px;
    }
}
</style>
