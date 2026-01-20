<section class="testimonials">
    <h2>Testimonials</h2>
    <p class="testimonials-subtitle">What our happy clients say</p>

    <div class="testimonial-grid">
        <div class="testimonial-card">
            <p>
                “The bridal makeup was absolutely flawless. Everyone praised my look.
                Thank you for making my wedding day so special!”
            </p>
            <h4>— Neha Sharma</h4>
            <span>Bride</span>
        </div>

        <div class="testimonial-card">
            <p>
                “Very professional staff and relaxing atmosphere. My skin feels fresh
                and glowing after the facial service.”
            </p>
            <h4>— Pooja Rawat</h4>
            <span>Facial Client</span>
        </div>

        <div class="testimonial-card">
            <p>
                “Loved the hair styling and mehndi design. Perfect detailing and
                long-lasting results. Highly recommended!”
            </p>
            <h4>— Anjali Verma</h4>
            <span>Regular Client</span>
        </div>
    </div>
</section>

<style>
/* ===== TESTIMONIALS ===== */
.testimonials{
    padding:100px 8%;
    background:#ffffff;
    text-align:center;
}

.testimonials h2{
    font-size:36px;
    margin-bottom:10px;
    color:#2b2b2b;
}

.testimonials-subtitle{
    font-size:16px;
    color:#777;
    margin-bottom:60px;
}

/* ===== GRID ===== */
.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
    gap:30px;
}

/* ===== CARD ===== */
.testimonial-card{
    background:#fff7f0;
    padding:40px 30px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    position:relative;
}

.testimonial-card::before{
    content:"“";
    font-size:80px;
    position:absolute;
    top:-20px;
    left:20px;
    color:#b76e79;
    opacity:0.3;
}

.testimonial-card p{
    font-size:15px;
    line-height:1.8;
    color:#555;
    margin-bottom:25px;
}

.testimonial-card h4{
    font-size:18px;
    margin-bottom:5px;
    color:#2b2b2b;
}

.testimonial-card span{
    font-size:14px;
    color:#999;
}

/* ===== RESPONSIVE ===== */
@media(max-width:576px){
    .testimonials h2{
        font-size:28px;
    }
}
</style>
