<?php
include("includes/db.php");

$query = "SELECT * FROM gallery ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    
    <title>Smart Juniors</title>
    
    <!-- Fonts and CSS -->
    <link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->
</head>
<body>
<div id="site-content">
    <!-- Header -->
    <header class="site-header">
        <div class="primary-header">
            <div class="container">
                <a href="index.php" id="branding">
                    <img src="dummy/logo.png" alt="">
                    <h1 class="site-title"></h1>
                </a>
                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="course.php">Course Us</a></li>
                        <li class="menu-item"><a href="event.php">Event</a></li>
                        <li class="menu-item current-menu-item"><a href="gallery.php">Gallery</a></li>
                        <li class="menu-item"><a href="contact.php">Contact</a></li>
                        <li class="menu-item"><a href="why-smart-juniors.php">Why Smart Juniors</a></li>
                        <li class="menu-item"><a href="admin/login.php" class="admin-login">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Title -->
    <div class="fullwidth-blockac">
        <div class="container">
            <h2 class="section-title text-center">Our Gallery</h2>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="tabs">
        <ul class="filter-controls">
            <li><a href="#" data-filter="*" class="selected">Show All</a></li>
            <li><a href="#" data-filter=".kids">Kids</a></li>
            <li><a href="#" data-filter=".meeting">Meetings</a></li>
            <li><a href="#" data-filter=".parties">Parties</a></li>
            <li><a href="#" data-filter=".print">Print</a></li>
        </ul>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="grid-item <?php echo $row['category']; ?>">
                <a href="javascript:void(0);" onclick="openPopup('<?php echo $row['type']; ?>','uploads/<?php echo $row['image']; ?>')">
                    <div class="thumb-wrapper">
                        <?php if($row['type'] == 'image') { ?>
                            <img src="uploads/<?php echo $row['image']; ?>" class="thumb">
                        <?php } else { ?>
                            <video class="thumb" muted autoplay loop playsinline>
                                <source src="uploads/<?php echo $row['image']; ?>" type="video/mp4">
                            </video>
                            <div class="play-icon">▶</div>
                        <?php } ?>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-3">
                    <div class="widget">
                        <h3 class="widget-title">Contact us</h3>
                        <address>Smart Juniors<br>F-19, P.C. COLONY, KANKARBAGH, PATNA  <br>Pin Code:-800020</address>
                        <a href="mailto:smartjuniors.info@gmail.com">smartjuniors.info@gmail.com</a> <br>
                        <a href="tel:9162672174">(+91) 9162672174</a>
                    </div>
                </div>
                <!-- Social -->
                <div class="col-md-3">
                    <div class="widget">
                        <h3 class="widget-title">Social media</h3>
                        <p>Connect us here.</p>
                        <div class="social-links circle">
                            <a href="https://www.facebook.com/smartschoolkankarbaghpatna?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/@manishasuhasini1858"><i class="fa fa-youtube"></i></a>
                            <a href="https://x.com/juniors_sm42381"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Featured Students -->
                <div class="col-md-3">
                    <div class="widget">
                        <h3 class="widget-title">Featured Students</h3>
                        <ul class="student-list">
                            <li><a href="#">
                                <img src="dummy/img1.jpg" alt="" class="avatar">
                                <span class="fn">Saloni kumari</span>
                                <span class="average">Playgroup</span>
                            </a></li>
                            <li><a href="#">
                                <img src="dummy/img2.jpg" alt="" class="avatar">
                                <span class="fn">Amit kumar</span>
                                <span class="average"><br>LKG</span>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <!-- Map -->
                <div class="col-md-3">
                    <div class="widget">
                        <h3 class="widget-title">Reach us</h3>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.4355496806043!2d85.1532333!3d25.590439399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed588e99b8ae33%3A0xefe1986bddedec4b!2sSmart%20Juniors%2C%20Play%20%26%20Preparatory%20School!5e0!3m2!1sen!2sin!4v1773851713149!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="copy">Copyright 2026 ,Smart Juniors. All rights reserved.</div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

<script>
// Filter buttons
document.querySelectorAll(".filter-controls a").forEach(btn=>{
    btn.addEventListener("click",function(e){
        e.preventDefault();
        let filter = this.getAttribute("data-filter");
        document.querySelectorAll(".grid-item").forEach(item=>{
            if(filter=="*") item.style.display="block";
            else item.style.display = item.classList.contains(filter.substring(1)) ? "block" : "none";
        });
        document.querySelectorAll(".filter-controls a").forEach(b=>b.classList.remove("selected"));
        this.classList.add("selected");
    });
});

// Popup functions
function openPopup(type, src){
    let popup = document.getElementById("galleryPopup");
    let img = document.getElementById("popupImg");
    let video = document.getElementById("popupVideo");
    let source = document.getElementById("popupSource");

    popup.style.display = "flex";

    if(type === "image"){
        img.style.display = "block";
        video.style.display = "none";
        img.src = src;
    } else {
        img.style.display = "none";
        video.style.display = "block";
        source.src = src;
        video.load();
    }
}

function closePopup(){
    let popup = document.getElementById("galleryPopup");
    let video = document.getElementById("popupVideo");
    popup.style.display = "none";
    video.pause();
}
</script>

<!-- Gallery Popup -->
<div id="galleryPopup" class="gallery-popup">
    <span class="gallery-close" onclick="closePopup()">&times;</span>
    <img id="popupImg" style="display:none;">
    <video id="popupVideo" controls style="display:none;">
        <source id="popupSource" src="" type="video/mp4">
    </video>
</div>

</body>
</html>
