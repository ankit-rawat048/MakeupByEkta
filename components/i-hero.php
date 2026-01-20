<div class="hero-container">
    <div class="hero-content">
        <h2>About</h2>
        <hr>
        <div class="content-para">
            <h1>I've transformed my life and can do the same for you</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="content-img">
            <img src="images/MACost2.jpg" alt="">
        </div>
    </div>
</div>

<style>/* ===== HERO SECTION : LUXURY NUDE & GOLD ===== */
.hero-container{
    display:flex;
    align-items:center;
    gap:60px;
    padding:100px 8%;
    background:linear-gradient(135deg, #f5ede6, #fff);
    color:#3a2e25;
    min-height:100vh;
}

/* ===== SECTION LABEL ===== */
.hero-content h2{
    font-size:16px;
    letter-spacing:3px;
    text-transform:uppercase;
    color:#c9a24d; /* gold */
    margin-bottom:10px;
    font-weight:600;
}

/* ===== GOLD LINE ===== */
.hero-content hr{
    width:60px;
    height:3px;
    border:none;
    background:#c9a24d;
    margin-bottom:30px;
}

/* ===== TEXT CONTENT ===== */
.content-para{
    display:flex;
    gap:30px;
}

.content-para h1{
    width:50%;
    font-size:42px;
    line-height:1.3;
    margin-bottom:25px;
    font-weight:700;
    color:#2f241d;
}

.content-para p{
    width:50%;
    padding:10px;
    font-size:16px;
    line-height:1.8;
    color:#6b5c4f;
}

/* ===== IMAGE AREA ===== */
.content-img{
    width:100%;
    padding:30px;
}

.content-img img{
    width:100%;
    height:320px;
    border-radius:20px;
    object-fit:cover;
    box-shadow:0 25px 60px rgba(201,162,77,0.25);
    border:4px solid #f5ede6;
}

/* ===== RESPONSIVE DESIGN ===== */
@media(max-width:992px){
    .hero-container{
        flex-direction:column;
        text-align:center;
        padding:80px 6%;
    }

    .content-para{
        flex-direction:column;
    }

    .content-para h1,
    .content-para p{
        width:100%;
    }

    .hero-content hr{
        margin:20px auto 30px;
    }

    .content-para h1{
        font-size:34px;
    }
}

@media(max-width:576px){
    .content-para h1{
        font-size:26px;
    }

    .content-para p{
        font-size:15px;
    }
}

</style>
