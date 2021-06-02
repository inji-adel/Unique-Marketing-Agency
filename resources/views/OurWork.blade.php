    <!--SLIDER-->
<div id="Our Work">
<div class="carousel fade-carousel slide"  data-ride="carousel" data-interval="false" id="bs-carousel">
  <!-- Overlay 'make shade' -->
 <!-- <div class="overlay"></div>-->
  <!-- Indicators -->
  <div class="hero-text">
  <h2>Our Work</h2>
</div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button href="{{ route('normindex') }}" type="button" class="btn btn-default">More Information</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>We are smart</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button href="{{ route('normindex') }}" type="button" class="btn btn-default">More Information</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>We are amazing</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button href="{{ route('normindex') }}" type="button" class="btn btn-default">More Information</button>
      </div>
    </div>
  </div>
  </div>


<!--END SLIDER-->

<!--Start Client review-->
<div class="container">
    <div class="row">
      <div class='col-md-offset-2 col-md-8 text-center'>
          <div class="hero-text">
      <h2>Clients Review </h2>
    </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-offset-2 col-md-8'>
        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
          <!-- Bottom Carousel Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#quote-carousel" data-slide-to="1"></li>
            <li data-target="#quote-carousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner">
            <!-- Review 1 -->
            <div class="item active">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="girl1.jpg" style="width: 100px;height:100px;">
                  </div>
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    <a href="#" class="">Anita Richards</a>,
                    <span class="_tm-user-role">HR Manager</span>
                  </div>
                </div>
              </blockquote>
            </div>
            <!-- Review 2 -->
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="girl2.jpg" style="width: 100px;height:100px;">
                  </div>
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                   <a href="#" class="">Vicky Pundit</a>,
                   <span class="_tm-user-role">Sales Executive</span>
                 </div>
                </div>
              </blockquote>
            </div>
            <!-- Review 3 -->
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center">
                    <img class="img-circle" src="boy1.png" style="width: 100px;height:100px;">
                  </div>
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                     <a href="#" class="">Charlie Brown</a>,
                     <span class="_tm-user-role">Factory Owner</span>
                   </div>
                </div>
              </blockquote>
            </div>
          </div>
          <!-- Carousel Buttons Next/Prev -->
          <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
          <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
<!--end Client review-->

<html>
  <style>

      .fade-carousel .carousel-indicators{
         margin-top: 100px;
      }
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #e9b55c;
    border-color: #e9b55c;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;
    font-weight: bold;
    margin: 0;
    padding: 0;
}
.hero-text{
    color: #e9b55c;
    font-weight: 40px;
    font-family:;
    font-size: 40px ;
        text-align: center;
        margin-bottom: 50px;
        margin-top: 50px;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
         -o-transition: 2s all ease-in-out .1s;
            transition: 2s all ease-in-out .1s;
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
         -o-transition: 2s all ease-in-out .1s;
            transition: 2s all ease-in-out .1s;
}
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;

}
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}
.fade-carousel .slides .slide-1,
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(first.jpg);
}
.fade-carousel .slides .slide-2 {
  background-image: url(second.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(third.jpg);
}

@media screen and (min-width: 980px){
    .hero { width: 980px; }
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }
}



/* start client review*/
#quote-carousel
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
#quote-carousel .carousel-indicators li
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}

/* end client review*/

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
/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) {
    #quote-carousel
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }

}
/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) {
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

  <Script>
$(document).ready(function() {
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});

$(document).ready(function () {
$(".player").mb_YTPlayer();
});
  </Script>
</html>





