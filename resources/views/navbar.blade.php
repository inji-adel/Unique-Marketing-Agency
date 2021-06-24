<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>unique marketing agency</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
    <!--Coursel links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Warming Up -->
    <link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
    <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>

    <!--fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style>
        body {
            background-color: black;
        }

    </style>
</head>

<header>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex ">
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/navbar/logo.png" alt="logo" style="width:100px;">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li class="scroll-to-section"><a href="#AboutUs" class="menu-item">About Us</a></li>
                    <li class="scroll-to-section"><a href="#services" class="menu-item">Services</a>
                    <li class="scroll-to-section"><a href="#logos" class="menu-item">Clients</a>
                    <li class="scroll-to-section"><a href="#OurTeam" class="menu-item">Team</a>
                    <li class="scroll-to-section"><a href="#ContactUs" class="menu-item">Contact Us</a></li>
                    {{-- <li class="scroll-to-section"><a href="#Our Work" class="menu-item">Our Work</a> --}}
                </ul>
            </div>
        </nav>
    </section>
    </div>
</header>

<style>
    html {
        scroll-behavior: smooth;
        overflow-x: hidden;

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
