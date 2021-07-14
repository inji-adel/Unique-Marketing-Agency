<div id="ContactUs">
    <hr>
    <div class="container">
        <div class="row grid-divider ">
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Mission</h3>
                    <p>We are committed to creating a strong digital presence for our partners, in order to keep up with
                        today’s fast-moving digital world, we continuously strive to promote our partners’ growth. at
                        competitive prices through working faster, smarter and in partnership with our clients.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Vision</h3>
                    <p>We make this possible by continuously enriching our portfolio, hiring the best resources, and by
                        continuing to grow and adapt to new industry developments to be number one in the region and
                        build long, profitable relationships with our customers.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Values</h3>
                    <p>Integrity & Trust, Commitment to Quality, Customer Focus and Innovation.
                        Customer satisfaction will always be our primary objective in UNIQUE In all our projects, our
                        aim is to exceed our clients’ expectations by offering high-quality services at average market
                        prices.
                    </p>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row square">
        <div class="col-sm-3">
            <a class="ghl" href="https://www.facebook.com/unique1.marketingagency"><i class="fab fa-facebook-f"></i></a>
            <a class="ghl" href=" https://www.instagram.com/unique1.marketingagency/"><i
                    class="fab fa-instagram"></i></a>
            <a class="ghl" href="https://www.linkedin.com/company/72379370/admin/"><i
                    class="fab fa-linkedin"></i></i></a>
            <a class="ghl" href="https://www.youtube.com/channel/UC7VbEzqJL-aebkdMqfymxug"><i
                    class="fab fa-youtube"></i></a>
            <a class="ghl" href=" https://twitter.com/unique1_agency"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="col-sm-6">
            <div class="icon"> <i class="fa fa-phone"></i> <a href="phoneto:01284891754?subject=Contact"
                    style="color: white;">+201284090766</a></div>
            <div class="icon"> <i class="fas fa-envelope"></i> <a
                    href="mailto:unique1.marketingagency@gmail.com?subject=Contact"
                    style="color: white;">Unique1.marketingagency@gmail.com</a>
            </div>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-default"><a href="{{ url('/contact/form') }}">Get In Touch</button>
        </div>

    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+201284090766&text=Hello." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</div>
</div>
<style>
    #ContactUs {
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        color: white;
    }

    .icon {
        color: white;
    }

    .btn {
        background-color: white;
    }

    .btn a {
        color: black;
    }

    .col-padding h3 {
        text-shadow: 2px 2px 5px rgb(233, 220, 150);
        font-family: serif;
        margin-top: auto;
        margin-bottom: 20px;
    }

    .ghl {
        color: white;
        font-size: 30px;
    }

    .dream {
        letter-spacing: 3px;
    }

    .square {
        width: 1000px;
        border: 7px solid peru;
        padding: 20px;
        margin: 20px;
    }

    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: white;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        /* box-shadow: 2px 2px 3px #999; */
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }

    @media (min-width: 768px) {
        .grid-divider {
            position: relative;
            padding: 0;
        }

        .grid-divider>[class*='col-'] {
            position: static;
        }

        .grid-divider>[class*='col-']:nth-child(n+2):before {
            content: "";
            border-left: 1px solid #DDD;
            position: absolute;
            top: 0;
            bottom: 0;
        }

        .col-padding {
            padding: 0 15px;
        }
    }

    @media(max-width:576px) {

        .container {
            width: 100%;
        }
    }

</style>
