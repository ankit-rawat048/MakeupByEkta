<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
/* ===== CONTACT PAGE ===== */
.contact-page{
    padding:100px 8%;
    background:#fff7f0;
    font-family:'Poppins', Arial, sans-serif;
}

/* ===== HEADER ===== */
.contact-header{
    text-align:center;
    margin-bottom:70px;
}

.contact-header h1{
    font-family:'Playfair Display', serif;
    font-size:42px;
    color:#7B1E1E;
    margin-bottom:10px;
}

.contact-header p{
    color:#666;
    font-size:16px;
}

/* ===== WRAPPER ===== */
.contact-wrapper{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:flex-start;
}

/* ===== CONTACT INFO ===== */
.contact-info {
    display:flex;
    flex-direction:column;

}
.contact-info h2{
    font-size:28px;
    color:#2b2b2b;
    margin-bottom:15px;
}

.contact-info p{
    color:#555;
    line-height:1.8;
    margin-bottom:25px;
}

.contact-info ul{
    list-style:none;
    padding:0;
}

.contact-info ul li{
    margin-bottom:12px;
    font-size:15px;
    color:#444;
}

.maps-i iframe{
    width:600px;
}

/* ===== FORM ===== */
.contact-form{
    background:#ffffff;
    padding:40px;
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,0.1);
}

.contact-form h2{
    font-size:28px;
    color:#7B1E1E;
    margin-bottom:30px;
}

/* ===== INPUTS ===== */
.form-group{
    margin-bottom:20px;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:14px 16px;
    border-radius:10px;
    border:1px solid #ddd;
    font-size:14px;
    outline:none;
    transition:0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus{
    border-color:#C9A24D;
}

/* ===== BUTTON ===== */
.contact-form button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:30px;
    background:#7B1E1E;
    color:#fff;
    font-size:16px;
    cursor:pointer;
    transition:0.3s ease;
}

.contact-form button:hover{
    background:#C9A24D;
    color:#2b2b2b;
}

/* ===== RESPONSIVE ===== */
@media(max-width:992px){
    .contact-wrapper{
        grid-template-columns:1fr;
    }
    .maps-i iframe {
    width:auto;
}
}

@media(max-width:576px){
    .contact-header h1{
        font-size:30px;
    }
    .maps-i iframe {
    width:auto;
}
}
</style>

</head>
<body>
    <?php include('components/header.php'); ?>
    <section class="contact-page">
    <div class="contact-header">
        <h1>Contact Me</h1>
        <p>Let’s connect and make your special moments beautiful</p>
    </div>

    <div class="contact-wrapper">

        <!-- Contact Info -->
        <div class="contact-info">
            <div>
                <h2>Get In Touch</h2>
            <p>
                Feel free to reach out for bridal bookings, party makeup,
                or any beauty-related queries.
            </p>

            <ul>
                <li><strong>📍 Location:</strong> Swarg Ashram, Rishikesh, Uttarakhand 249304</li>
                <li><strong>📞 Phone:</strong> +91 82181 48842</li>
                <li><strong>📧 Email:</strong> makeupwithekta@gmail.com</li>
                <li><strong>⏰ Working Hours:</strong> 9:00 AM – 8:00 PM</li>
            </ul>
            </div>

            <div class="maps-i">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13804.772674099151!2d78.30668935740445!3d30.117285548188434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39091640191e054b%3A0x236ce46615c0a13b!2sSwarg%20Ashram%2C%20Rishikesh%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1768886457356!5m2!1sen!2sin" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send a Message</h2>

            <form>
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <input type="tel" placeholder="Your Phone Number" required>
                </div>

                <div class="form-group">
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>
        </div>

    </div>
</section>

<?php include('components/footer.php'); ?>

</body>
</html>