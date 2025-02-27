<?php
    include './connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Events</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="main-body">
        <?php
        include './src/components/Navbar.php'
        ?>
        <div class="hero-section">
            <div class="arrow">
                <i class="fa-solid fa-angle-down fa-2xl" style="color: rgb(196, 196, 196);"></i>
            </div>
        </div>
        <div class="about-us">
            <h1>About Us</h1>
            <div class="underline"></div>
            <p>Excellent Commitment</p>
            <div class="about-us-desc">
                We craft breathtaking and unforgettable events, bringing your love story to life with elegance and a
                personal touch. <br>
                Our team is committed to turning your vision into reality with impeccable attention to detail, ensuring
                nothing is overlooked. <br>
                As a team of passionate professionals, we offer customized services that align with your <br>
                budget—covering
                everything from concept creation and design to event promotion and flawless execution.
            </div>
        </div>
        <div class="services">
            <div class="row">
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/cropped_ashley-pigott-events-header_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>Event Styling
                    Conceptualize, strategize, design, refine, and bring your vision to life.</div>
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/cropped_clearwater-events-and-weddings-thumb_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>Decor & Ambiance
                    Elevate any space into a breathtaking and memorable setting.</div>
            </div>

            <div class="row">
                <div>Culinary & Catering
                    Great food isn’t just a meal, it’s an experience that brings people together.</div>
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/diane-davidson-weddings-crop-4925205d_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/cropped_1512775624_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>Photography & Film
                    Moments fade, but beautifully captured memories last a lifetime.</div>
            </div>

            <div class="row">
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/cropped_rebel-events-thumbnail_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>Guest Experience & Entertainment
                    Crafting immersive experiences that keep your guests engaged and entertained.</div>
                <div>
                    <img src="https://caratsandcake.com/_images/webcache3/cropped_1392741225_-_abcdef_-_03a9de1d955b364df3ec704af30a2c98e952cead.webp"
                        alt="" srcset="">
                </div>
                <div>Lighting & Sound
                    Creating the perfect atmosphere with exceptional audio and visuals.</div>
            </div>

            <div class="responsive-container-block big-container">
                <div class="responsive-container-block bg">
                    <p class="text-blk title">
                        Testimonials
                    </p>
                    <p class="text-blk desc">
                        Real experiences, real stories. Hear from our clients who have entrusted us with their special
                        moments. From seamless planning to flawless execution, their words reflect our commitment to
                        making every event unforgettable.
                    </p>
                    <div class="responsive-container-block blocks">
                        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
                            <p class="text-blk info-block">
                                "We had the best experience with the event planning team. They took care of everything,
                                from decorations to timing, so we could just enjoy the moment. Everything was
                                beautifully done, and we didn’t have to stress about a thing!"
                            </p>
                            <div class="responsive-container-block person">
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                                    <img class="profile-img"
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
                                </div>
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                                    <p class="text-blk name">
                                        Hari
                                    </p>
                                    <p class="text-blk desig">
                                        Kannur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
                            <p class="text-blk info-block">
                                "Our corporate event was a huge success, thanks to the amazing planning. The team
                                handled all the details, kept things running smoothly, and made sure everyone had a
                                great time. It was professional, well-organized, and exactly what we wanted."
                            </p>
                            <div class="responsive-container-block person">
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                                    <img class="profile-img"
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
                                </div>
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                                    <p class="text-blk name">
                                        Sergie Barsukov
                                    </p>
                                    <p class="text-blk desig">
                                        Mangalore
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content bottom">
                            <p class="text-blk info-block">
                                "I wanted to throw a surprise birthday party, and it turned out perfect! The
                                decorations, the food, and even the little details were all taken care of. My family and
                                friends were so impressed, and the birthday person was beyond happy!"
                            </p>
                            <div class="responsive-container-block person">
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
                                    <img class="profile-img"
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
                                </div>
                                <div
                                    class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
                                    <p class="text-blk name">
                                        Alfred
                                    </p>
                                    <p class="text-blk desig">
                                        Kochi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://kit.fontawesome.com/84bdf781cb.js" crossorigin="anonymous"></script>
</body>

</html>