<header>
    <!-- Top bar -->
    <div class="top-header">
        <span>+91-82181 48842 | +91-82181 48842</span>
    </div>

    <!-- Logo / Hero section -->
    <div class="logo">
        <img src="images/099f1ab7-bfd2-44d3-a545-a073d0b5c6d5.png" alt="" height="100px">
        <!-- <div class="overlay"></div>
        <h1>MakeupWithEkta</h1> -->

        <!-- Navigation -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="divider">|</li>
            <!-- <li><a href="#">About Me</a></li>
            <li class="divider">|</li> -->
            <li><a href="contactus.php">Contact Me</a></li>
        </ul>
    </nav>
    </div>

    
</header>

<style>

header{
    display:flex;
    flex-direction:column;
    font-family:Poppins, Arial, sans-serif;
}

/* ===== TOP HEADER ===== */
.top-header{
    display:flex;
    justify-content:flex-end;
    padding:10px;
    font-size:14px;
    background:#3a2e25; /* dark brown */
    color:#f5ede6;      /* nude */
    font-weight:600;
    letter-spacing:1px;
}

/* ===== LOGO SECTION ===== */
.logo{
    position:relative;
    height:15vh;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 8%;
    background:#ffdfc3;
}

/* Optional overlay (kept soft luxury) */
.logo .overlay{
    position:absolute;
    inset:0;
    background:rgba(201,162,77,0.08);
    z-index:1;
}

/* LOGO IMAGE */
.logo img{
    position:relative;
    z-index:2;
    filter: drop-shadow(0 6px 12px rgba(0,0,0,0.15));
}

/* ===== NAVBAR ===== */
.navbar{
    position:relative;
    z-index:2;
    background:transparent;
}

.navbar ul{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:18px;
    padding:20px 0;
}

/* NAV ITEMS */
.navbar li{
    list-style:none;
    text-transform:uppercase;
    font-size:13px;
    letter-spacing:1.5px;
}

.navbar a{
    text-decoration:none;
    color:#3a2e25;
    font-weight:600;
    position:relative;
    transition:0.3s ease;
}

/* GOLD HOVER EFFECT */
.navbar a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-6px;
    width:0%;
    height:2px;
    background:#c9a24d;
    transition:0.3s ease;
}

.navbar a:hover{
    color:#c9a24d;
}

.navbar a:hover::after{
    width:100%;
}

.divider{
    color:#c9a24d;
    opacity:0.5;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .logo{
        flex-direction:column;
        height:auto;
        padding:20px 6%;
        gap:15px;
    }

    .navbar ul{
        flex-wrap:wrap;
        gap:10px;
    }
}


</style>