<!--About Us-->
<div id="About Us">
    <div class="how-section1">
        <div class="text">
            <h1>ABOUT US</h1>
        </div>
        <div class="row">
            <div class="col-md-6 how-img">
                <img src="team.jpg" class="rounded-circle img-fluid" alt="" />
            </div>
            <div class="col-md-6">
                <h4>Who We Are</h4>

                <p class="text2">UNIQUE Marketing Agency, it’s not just our name it’s our Aim to shine your brand
                    under our professional guidance based on transparency. </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Our Vision</h4>
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
    <!--
    <div class="container">
        <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
                <h2>Slogan</h2>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>


                    <div class="carousel-inner">


                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Think About Things Differently!</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Social Change is a Team Effort</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Fear Kills more dreams than failure ever will.</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>


                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                            class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                            class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
-->
</div>

<html>
<style>
    /*About Us*/

    .text h1{
        color:#aaa9ad;
        margin-bottom: 100px;
        font-family: serif;

    }
    .text2{
        color: white;
    }
    .how-section1 {
        padding: 10%;
        margin-top: 30px;
    }

    .how-section1 h4 {
        color: #aaa9ad;
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 25px;
        font-family: serif;
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
        padding: 0 10px 30px 10px;
        margin-top: 50px;
    }

    /* Control buttons  */
    #quote-carousel .carousel-control {
        background: none;
        color: #222;
        font-size: 1.3em;
        text-shadow: none;
        margin-top: 30px;
    }

    /* Previous button  */
    #quote-carousel .carousel-control.left {
        left: -10px;
    }

    /* Next button  */
    #quote-carousel .carousel-control.right {
        right: -10px !important;
    }

    /* Changes the position of the indicators */
    #quote-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }

    /* Changes the color of the indicators */
    #quote-carousel .carousel-indicators li {
        background: #c0c0c0;
    }

    #quote-carousel .carousel-indicators .active {
        background: #333333;
    }

    #quote-carousel img {
        width: 250px;
        height: 100px
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
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }



    /**
  MEDIA QUERIES
*/

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
