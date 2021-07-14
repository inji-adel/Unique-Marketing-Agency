<div id="services">
    <div class="service">
        <div class="text">
            <h1>OUR SERVICES</h1>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class=" big col-md-4">
                                        <div class="img-text" id="branding">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/branding') }}">Read More</a></div>
                                        </div>
                                    </div>

                                    <div class=" big col-md-4">

                                        <div class="img-text" id="MS">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/marketing-strategy') }}">Read More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" big col-md-4">
                                        <div class="img-text" id="SMM">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/social-media-management') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class=" big col-md-4">
                                        <div class="img-text" id="SEM">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/search-engine-marketing') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="big col-md-4">
                                        <div class="img-text" id="CCM">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/content-creation-management') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="big col-md-4">
                                        <div class="img-text" id="WDD">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/website-design-development') }}">Read
                                                    More</a>
                                            </div>
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
                                        <div class="img-text" id="PV">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/photography-videography') }}">Read
                                                    More</a>
                                            </div>
                                        </div>

                                        </a>
                                    </div>
                                    <div class="big col-md-4">
                                        <!--<a href="#">-->
                                        <div class="img-text" id="events">
                                            <br><br><br><br><br><br>
                                            <div class="btn btn-light"><a style="color: #1b1e21; font-size: 10px;"
                                                    href="{{ url('/services/events') }}">Read More</a></div>
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
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <!--.container-->
    </div>
    <hr>
</div>



<style>
    .big {
        margin-top: 15px;
        padding-bottom: 50px;
        padding-right: 30px;
    }

    .service {
        margin-top: -200px;
    }

    .container {
        margin top: 15%;

    }

    .img-text {
        width: 100%;
        height: 350px;
        display: block;
        text-align: center;
        padding: 40% 5%;
        color: black;
        border-radius: 15px;
    }

    #serviceText {
        color: rgb(255, 254, 254);
        text-shadow: 2px 2px 5px rgb(233, 220, 150);
        
        margin-left: 400px
    }

    #branding {
        background-image: url('/images/services/branding.jpg');
        background-size: 310px;
    }

    #MS {
        background-image: url('/images/services/MS.jpg');
        background-size: 310px;
    }

    #events {
        background-image: url('/images/services/events.jpg');
        background-size: 310px;
    }

    #CCM {
        background-image: url('/images/services/CCM.jpg');
        background-size: 310px;
    }

    #PV {
        background-image: url('/images/services/PV.jpg');
        background-size: 310px;
    }

    #SEM {
        background-image: url('/images/services/SEM.jpg');
        background-size: 310px;
    }

    #SMM {
        background-image: url('/images/services/SMM.jpg');
        background-size: 310px;
    }

    #WDD {
        background-image: url('/images/services/WDD.jpg');
        background-size: 310px;
    }

    .img-text h2 {

        font-size: 25px;
        
        margin: -15px;
        font: bold;
    }

    .img-text p {
        font-size: 14px;
        margin-top: 30px;
    }

    .carousel {
        margin-bottom: 100px;
        padding: 0 40px 30px 40px;
    }

    .text h1 {
        color: #aaa9ad;
        margin-bottom: 100px;
        font-family: serif;
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
        background: #080808;
    }

    @media(max-width:500px) {

        .container {
            align-items: center;

        }

        .service {
            margin-top: 690px;

        }

        .big {
            margin-top: 10px;
        }

        .text h1 {
            padding-left: 40px;
        }

        #branding {
            background-size: 220px 350px;
            
        }

        #MS {
            background-size: 220px 350px;
        }

        #events {
            background-size: 220px 350px;
        }

        #CCM {
            background-size: 200px 350px;
        }

        #PV {
            background-size: 200px 350px;
        }

        #SEM {
            background-size: 210px 350px;
        }

        #SMM {
            background-size: 220px 350px;
        }

        #WDD {
            background-size: 200px 350px;
        }

    }

    @media(max-width:768px) {

        .container {
            align-items: center;

        }

        .service {
            margin-top: 690px;

        }

        .big {
            margin-top: 10px;
        }

        .text h1 {
            padding-left: 40px;
            margin-right: 70px;
        }

        #branding {
            background-size: 310px;
        }

        #MS {
            background-size: 290px 350px;
        }

        #events {
            background-size: 290px 350px;
        }

        #CCM {
            background-size: 290px 350px;
        }

        #PV {
            background-size: 290px 350px;
        }

        #SEM {
            background-size: 290px 350px;
        }

        #SMM {
            background-size: 290px 350px;
        }

        #WDD {
            background-size: 290px 350px;
        }

    }

</style>
