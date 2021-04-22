<div id="services">
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">


                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>
                        <h1 class="text-center">Our Services</h1>
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class=" big col-md-4">
                                        <div class="img-text">
                                            <h2>Branding</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>
                                    </div>

                                    <div class=" big col-md-4">

                                        <div class="img-text">
                                            <h2>Marketing Strategy</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>

                                    </div>
                                    <div class=" big col-md-4">
                                        <div class="img-text">
                                            <h2>Social Media Management</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 18px;"
                                                    href="{{ route('services') }}">Add Name</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class=" big col-md-4">
                                        <div class="img-text">
                                            <h2>Content Creation & Management</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>
                                    </div>
                                    <div class="big col-md-4">
                                        <div class="img-text">
                                            <h2>Creative & Experience Design</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>
                                    </div>
                                    <div class="big col-md-4">
                                        <div class="img-text">
                                            <h2>Website Design & Development</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="big col-md-4">
                                        <!--<a href="#">-->
                                        <div class="img-text">
                                            <h2>Occasion planning</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>

                                        </a>
                                    </div>
                                    <div class="big col-md-4">
                                        <!--<a href="#">-->
                                        <div class="img-text">
                                            <h2>Occasion planning</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>

                                        </a>
                                    </div>
                                    <div class="big col-md-4">
                                        <!--<a href="#">-->
                                        <div class="img-text">
                                            <h2>Occasion planning</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio
                                                dolore est magnam dolor ut mollitia maiores, eius error obcaecati?</p>
                                        </div>

                                        </a>
                                    </div>

                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
        <!--.container-->

    </div>
</div>

<html>
<style>
    .service {
        height: 70vh;

    }

    .container {
        margin top: 15%;
    }

    .big {
        margin-top: 20px;
    }

    .img-text {
        width: 100%;
        height: 300px;
        display: block;
        text-align: center;
        padding: 40% 5%;
        background: #ebc076;
        color: #fff;
        border-radius: 15px;
    }

    .img-text h2 {
        margin-top: 0px;
        font-size: 25px;
        letter-spacing: 2px;
    }

    .img-text p {
        font-size: 14px;
    }

    .carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
    }

    /* The controlsy */
    .carousel-control {
        left: -12px;
        height: 40px;
        width: 40px;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px 23px 23px 23px;
        margin-top: 90px;
    }

    .carousel-control.right {
        right: -12px;
    }

    /* The indicators */
    .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: -10px;
        margin-right: -19px;
    }

    /* The colour of the indicators */
    .carousel-indicators li {
        background: #cecece;
    }

    .carousel-indicators .active {
        background: #428bca;
    }


    @media screen and (min-width: 576px) {

        .img-text h2 {
            font-size: 19px;
        }

    }

</style>

</html>
