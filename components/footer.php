<footer class="site-footer">
    <div class="footer-container">

        <!-- About -->
        <div class="footer-box">
            <h3>Glow Beauty Parlour</h3>
            <p>
                We provide professional beauty and bridal services using premium products
                to make every client feel confident and beautiful.
            </p>
        </div>

        <!-- Services -->
        <div class="footer-box">
            <h3>Our Services</h3>
            <ul>
                <li><a href="#">Bridal Makeup</a></li>
                <li><a href="#">Hair Styling</a></li>
                <li><a href="#">Facial & Skincare</a></li>
                <li><a href="#">Mehndi Design</a></li>
                <li><a href="#">Waxing & Threading</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-box">
            <h3>Contact Us</h3>
            <p>📍 Dehradun, Uttarakhand</p>
            <p>📞 +91 81266 97764</p>
            <p>✉️ info@glowbeauty.com</p>
        </div>

        <!-- Social -->
        <div class="footer-box">
            <h3>Follow Us</h3>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">WhatsApp</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Glow Beauty Parlour. All Rights Reserved.</p>
    </div>
</footer>

<style>
/* ===== FOOTER ===== */
.site-footer{
    background:#2b2b2b;
    color:#cccccc;
    padding:80px 8% 30px;
}

/* ===== FOOTER GRID ===== */
.footer-container{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
    gap:40px;
    margin-bottom:40px;
}

/* ===== FOOTER BOX ===== */
.footer-box h3{
    font-size:20px;
    margin-bottom:20px;
    color:#ffffff;
}

.footer-box p{
    font-size:14px;
    line-height:1.8;
    color:#bbbbbb;
}

.footer-box ul{
    list-style:none;
    padding:0;
}

.footer-box ul li{
    margin-bottom:10px;
}

.footer-box ul li a{
    color:#bbbbbb;
    text-decoration:none;
    font-size:14px;
    transition:0.3s ease;
}

.footer-box ul li a:hover{
    color:#b76e79;
}

/* ===== SOCIAL LINKS ===== */
.social-links a{
    display:inline-block;
    margin-right:15px;
    color:#bbbbbb;
    text-decoration:none;
    font-size:14px;
    transition:0.3s ease;
}

.social-links a:hover{
    color:#b76e79;
}

/* ===== FOOTER BOTTOM ===== */
.footer-bottom{
    border-top:1px solid #444;
    padding-top:20px;
    text-align:center;
}

.footer-bottom p{
    font-size:13px;
    color:#999999;
}

/* ===== RESPONSIVE ===== */
@media(max-width:576px){
    .site-footer{
        text-align:center;
    }

    .social-links a{
        margin-right:10px;
    }
}
</style>
