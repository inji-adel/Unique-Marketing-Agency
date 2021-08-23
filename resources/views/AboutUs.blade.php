<!--About Us-->
<div id="AboutUs">
    <div class="how-section1">
        <div class="text">
            <h1>ABOUT US</h1>
        </div>
        <div class="row">
            <div class="col-md-6 how-img">
                <img src="team.jpg" class="rounded-circle img-fluid" />
            </div>
            <div class="col-md-6">
                <h4>Who We Are</h4>
                <h3>Customer Satisfaction</h3>
                <p>We are flexible and dynamic with our clients and we offer them tailored solutions in all our ongoing
                    projects We always seek to exceed our clients’ expectations.</p>

                <h3>Insights</h3>
                <p>With a mindset that customer drives the center stage of any business establishment, we bring an inner
                    insight to you about your customers because we understand the criticality of business success in
                    this digital age.</p>
                <h3>Creativity that works</h3>
                <p>Working in an environment where challenges are faced at every step, we bring diversity in an
                    unconventional way to the problems our clients face by providing them out of the box solutions with
                    the most relevant and optimum approach.</p>

                <h3>We work hard</h3>
                <p>There’s no substitute for hard work and we do everything in our power to ensure our clients have what
                    they need, when they need it with an exceptional quality, hard to be found anywhere. </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Why Choose Us</h4>
                <p class="text2">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re
                    a great fit for.
                    Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious
                    programs.
                    Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for
                    repeat relationships with their clients.</p>
            </div>
            <div class="col-md-6 how-img">
                <img src="team1.jpg" class="rounded-circle img-fluid" alt="" />
            </div>
        </div>

    </div>
    <hr>
    <!--Quotes-->

    {{-- <div class="container">
        <div class="row">
            <!--
            <div class='col-md-offset-2 col-md-8 text-center'>
                <h2>Slogan</h2>
            </div>
        -->
        </div>
        <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                        <li data-target="#quote-carousel" data-slide-to="3"></li>
                        <li data-target="#quote-carousel" data-slide-to="4"></li>
                        <li data-target="#quote-carousel" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">

                            <div class="row">
                                <div class="col-lg-10">
                                    <p> “Your goals are our goals and we will stop at nothing to align and reach them”.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="item">

                            <div class="row">
                                <div class="col-lg-10">
                                    <p>A great team with the same vision loving communication. </p>
                                </div>
                            </div>

                        </div>
                        <div class="item">

                            <div class="row">
                                <div class="col-lg-10">
                                    <p>We love what we do everyday. (Our services)</p>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p>We’d love to hear about your project. (Contact us) </p>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p>Cherish your visions and your dreams as they are the children of your soul, the
                                        blueprints of your ultimate achievements.</p>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p>Think the Design, Design the Thinking. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                            class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                            class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!--LOGOS-->
{{-- @include('logos') --}}
{{-- <hr> --}}
<!---End LOGOS-->
<!--START VIDEO-->
<div class="iframe-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/qj4FzCkSsLc" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
</div>
<!--END VIDEO-->

<hr>
<html>
<style>
    #AboutUs {
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }

    /*About Us*/
    .col-md-6 {
        margin-top: 40px;
    }

    .rounded-circle {
        margin-top: 45px;
    }

    .text h1 {
        color: white;
        text-shadow: 2px 2px 5px rgb(233, 220, 150);
        border-radius: 100px;
        width: 300px;
        height: 45px;
        text-align: center;
        margin-bottom: 100px;
        text-shadow: 2px 2px 5px rgb(233, 220, 150);

    }

    .text2 {
        color: white;
    }

    .how-section1 {
        padding: 3%;
        margin-top: 30px;
    }

    .how-section1 h4 {
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 25px;
    }

    .how-section1 .row {
        margin-top: 5%;
    }

    .how-img {
        text-align: center;
    }

    .how-img img {
        width: 76%;
    }

    /*Quotes*/
    #row h2 {
        font: 30px;
    }

    #quote-carousel {

        margin-top: 140px;
    }

    /* Control buttons  */
    #quote-carousel .carousel-control {
        color: white;
        margin-top: 20px;
    }

    /* Previous button  */
    #quote-carousel .carousel-control.left {
        left: -20px;

    }

    /* Next button  */
    #quote-carousel .carousel-control.right {
        right: -20px !important;

    }

    /* Changes the position of the indicators */
    #quote-carousel .carousel-indicators {
        right: 90%;
        margin-right: -19px;
    }

    /* Changes the color of the indicators */
    #quote-carousel .carousel-indicators li {
        background: #ffffff;
    }

    #quote-carousel .carousel-indicators .active {
        background: #080808;
    }


    /* End carousel */

    .item blockquote {
        border-left: none;
        margin: 0;
    }

    .item blockquote img {
        margin-bottom: 10px;
    }

    .item blockquote p:before {
        content: "\f10d";
        font-family: Arial, Helvetica, sans-serif;
        float: left;
        margin-right: 10px;
    }

    /*START video*/
    .iframe-container {
        position: relative;
        width: 100%;
        padding-bottom: 45%;
        margin-top: 10%;
        height: 0;

    }

    .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /*End Video*/


    /*MEDIA QUERIES*/

    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        #quote-carousel {
            margin-bottom: 0;
            padding: 0 40px 30px 40px;
        }

    }

    /* Small devices (tablets, up to 768px) */
    @media (max-width: 768px) {

        /* Make the indicators larger for easier clicking with fingers/thumb on mobile */

        #quote-carousel .carousel-indicators {
            bottom: -20px !important;
        }

        #quote-carousel .carousel-indicators li {
            display: inline-block;
            margin: 0px 5px;
            width: 15px;
            height: 15px;
        }

        #quote-carousel .carousel-indicators li.active {
            margin: 0px 5px;
            width: 20px;
            height: 20px;
        }
    }

</style>
<script>
    $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 4000,
        });
    });
</script>

</html>
