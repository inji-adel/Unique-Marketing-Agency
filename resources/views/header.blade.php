<div class="wrapper">
    <header>
        <nav>
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
                    <li class="scroll-to-section"><a href="#About Us" class="menu-item">About Us</a></li>
                    <li class="scroll-to-section"><a href="#Contact Us" class="menu-item">Contact Us</a></li>
                    {{-- <li class="scroll-to-section"><a href="#Our Work" class="menu-item">Our Work</a> --}}
                    <li class="scroll-to-section"><a href="#services" class="menu-item">Services</a>
                </ul>
                <hr>
                <div class="image">

                    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
                        style="height:100vh; background-size: chttps:over; background-image: url(pexels-fauxels-3183132.jpg);">
                        <div class="container-fluid">
                            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
                                <div class="col-12 col-md-8  h-50 ">
                                    <h1 class="display-2  mb-2 mt-5"><strong>Unique Marketing Agency</strong> </h1>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </nav>
        <hr>
    </header>

</div>


<style>
    html {
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
        margin-top: -20px;
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
        color: #aaa9ad;
        padding: 0;
        text-align: right;



    }

    nav ul li {
        display: inline-block;
        padding: 16px 40px;

    }

    nav ul li a {
        text-decoration: none;
        color: #aaa9ad;
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
        color: #aaa9ad;
        display: none;

    }

    .menu li a {
        text-decoration: none;

    }

    nav ul li a:hover {
        color: #aaa9ad;
        background-color: black;
        padding: 15px;
        margin: 10px;
        border: 6px solid black;
        border-radius: 15px;
        opacity: .6;
    }

    .image h1 {
        color: #aaa9ad;
        font-family: serif;
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
            background: black;
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

    @media (max-width: 991.98px) {
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
            background: black;
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

</script>
