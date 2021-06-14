<header>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex ">
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/logo.png" alt="logo" style="width:100px;">
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

    header {
        width: 100%;
        height: 100vh;
        margin-bottom: 350px;
        background-image: url(/fox.jpg);
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
