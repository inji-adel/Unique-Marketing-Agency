
 <div class="wrapper">
    <header>
       <nav >
          <div class="menu-icon">
             <i class="fa fa-bars fa-2x"></i>
          </div>
          <div class="logo">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="logo" style="width:100px;">
              </a>
          </div>
          <div class="menu">
             <ul>
                <li id="navbar-list1"><a href="#About Us">About Us</a></li>
                <li id="navbar-list2"><a href="#Contact Us">Contact Us</a></li>
                <li id="navbar-list3"><a href="#Our Work">Our Work</a></li>
                <li id="navbar-list4"><a href="#Services">Services</a></li>
             </ul>
             <div class="image">
                <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: chttps:over; background-image: url(pexels-fauxels-3183132.jpg);">
                    <div class="container-fluid">
                       <div class="row  justify-content-center align-items-center d-flex text-center h-100">
                         <div class="col-12 col-md-8  h-50 ">
                             <h1 class="display-2  text-light mb-2 mt-5"><strong>Unique Marketing Agency</strong> </h1>
                         </div>
                       </div>
                     </div>
                     </section>
               </div>
          </div>
       </nav>
    </header>
 </div>

     <style>
         html{
            scroll-behavior: smooth;
         }

header {
      width: 100%;
      height: 100vh;
      margin-bottom: 350px;

}


.content {
      width: 100%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      top: 0;
      float: left;
      margin-top:-20px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;

}

nav {
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 50px;
      list-style: none;
      overflow: hidden;
      color: rgb(14, 13, 13);
      padding: 0;
      text-align: right;



}
nav ul li {
      display: inline-block;
      padding: 16px 40px;

}

nav ul li a {
      text-decoration: none;
      color: rgb(10, 9, 9);
      font-size: 16px;

}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: transparent;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #ebc179;
      display: none;

}
.menu li a{
    text-decoration: none;

}
nav ul li a:hover{
    color: rgb(255, 255, 255);
    background-color:#ebc179;
    padding: 15px;
    margin: 10px;
    border: 6px solid#ebc179;
    border-radius: 15px;
    opacity: .6;

}


@media(max-width: 786px) {

      .logo {
            top: 0;
            margin-top: -109px;
            margin-left: 10px;

      }

      nav ul {
            max-height: 0px;
            background: transparent;

      }

      nav.black ul {
            background: #000;
            max-height: 0;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}
     </style>
     <script>
          $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      $(document)

      var navbarList = document.querySelector('#navbar__list');
     </script>

