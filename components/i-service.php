<section class="services-preview">
    <h2>Our Services</h2>
    <p class="services-subtitle">Enhancing your beauty with care & perfection</p>

    <div class="services-grid">
        <div class="service-card">
            <img src="images/bridle-makeup.jpg" alt="Bridal Makeup">
            <h3>Bridal Makeup</h3>
            <p>Professional bridal makeup to make your special day truly unforgettable.</p>
        </div>

        <div class="service-card">
            <img src="images/hair.jpg" alt="Hair Styling">
            <h3>Hair Styling</h3>
            <p>Trendy haircuts, smoothening, curls, and elegant hairstyles for all occasions.</p>
        </div>

        <div class="service-card">
            <img src="images/facial.webp" alt="Facial & Skincare">
            <h3>Facial & Skincare</h3>
            <p>Relaxing facials and skin treatments for a glowing, healthy look.</p>
        </div>

        <div class="service-card">
            <img src="images/mehndi1.webp" alt="Mehndi Design">
            <h3>Mehndi Design</h3>
            <p>Beautiful traditional and modern mehndi designs for weddings and festivals.</p>
        </div>

        <div class="service-card">
            <img src="images/menicour.jpg" alt="Manicure & Pedicure">
            <h3>Manicure & Pedicure</h3>
            <p>Complete hand and foot care for a polished and refreshed appearance.</p>
        </div>

        <div class="service-card">
            <img src="images/waxing.webp" alt="Waxing & Threading">
            <h3>Waxing & Threading</h3>
            <p>Gentle and hygienic waxing & threading services for smooth skin.</p>
        </div>
    </div>
</section>

<style>
/* ===== SERVICES PREVIEW ===== */
.services-preview{
    padding:100px 8%;
    background:#fff7f0;
    text-align:center;
}

.services-preview h2{
    font-size:38px;
    margin-bottom:10px;
    color:#2b2b2b;
}

.services-subtitle{
    font-size:16px;
    color:#777;
    margin-bottom:60px;
}

/* ===== GRID ===== */
.services-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));
    gap:30px;
}

/* ===== SERVICE CARD ===== */
.service-card{
    background:#ffffff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    transition:0.3s ease;
}

.service-card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.service-card h3{
    font-size:22px;
    margin:20px 0 10px;
    color:#b76e79;
}

.service-card p{
    font-size:15px;
    color:#555;
    line-height:1.6;
    padding:0 20px 25px;
}

/* ===== HOVER EFFECT ===== */
.service-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 60px rgba(0,0,0,0.15);
}

/* ===== RESPONSIVE ===== */
@media(max-width:576px){
    .services-preview h2{
        font-size:28px;
    }

    .service-card img{
        height:180px;
    }
}
</style>
