<!--Image Slider-->
<header>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"</li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/assets/img/1.jpg')">
                <div class="carousel-caption d-none d-md-block h-100">
                    <div class="row h-100 justify-content-center align-items-center text-dark">
                        <h2 class="display-2">First Slide</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/assets/img/2.jpg')">
                <div class="carousel-caption d-none d-md-block h-100">
                    <div class="row h-100 justify-content-center align-items-center text-dark">
                        <h2 class="display-2">Second Slide</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/assets/img/3.jpg')">
                <div class="carousel-caption d-none d-md-block h-100">
                    <div class="row h-100 justify-content-center align-items-center text-dark">
                        <h2 class="display-2">Third Slide</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!--Image Slider ends-->

<!--About-->
<section id="about">
    <div class="container">
        <div class="container text-center py-5 mb-4">
            <h1 class="font-weight-light">About</h1>
        </div>
        <p> Bandfish ocean sunfish rock beauty southern grayling armoured catfish: zebrafish gianttail carpsucker triplespine lemon shark whitebait, largemouth bass elephantnose fish. Prowfish deepwater stingray firefish: clownfish morid cod? Bonefish, Bombay duck arowana longjaw mudsucker yellowtail barracuda scat. </p>
          <p>  Emperor blackchin round stingray spiderfish yellowtail snapper Bombay duck, firefish Atlantic herring ridgehead yellowfin tuna straptail rudderfish. Yellowbanded perch cod icefish striped burrfish temperate perch porbeagle shark, snipefish frilled shark. Titan triggerfish lagena, northern pike Colorado squawfish píntano barracuda. Flyingfish sarcastic fringehead blackfish silverside Sacramento splittail. Spinefoot baikal oilfish smooth dogfish mosquitofish Steve fish? </p>
    </div>
</section>
<!--About ends-->

<!-- Features -->
<section id="features" class="mt-5">
    <div class="container text-center py-5 mb-4">
        <h1 class="font-weight-light">Features</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Item 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="/assets/img/001.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">We have this</h5>
                        <div class="card-text text-black-50">Some thing</div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="/assets/img/002.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">And this</h5>
                        <div class="card-text text-black-50">We don't actually know what is this</div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="/assets/img/003.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">And also this</h5>
                        <div class="card-text text-black-50">Hm...</div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="/assets/img/004.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">And this</h5>
                        <div class="card-text text-black-50">I'm not a painter, I'm backend developer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features end -->

<!--Contact form-->
<section id="contact">
<div class="container contact-form">
    <form action="/" method="POST">
        <h1 class="font-weight-light">Drop Us a Message</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" maxlength="20" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" maxlength="500" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact" value="Send Message" />
                </div>
            </div>
        </div>
    </form>
</div>
</section>
<!--Contact form ends-->

<script src="/assets/form.js"></script>

