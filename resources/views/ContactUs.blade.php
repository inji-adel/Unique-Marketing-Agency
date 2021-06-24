<div id="ContactUs">
    <hr>
    <div class="container">

        <div class="row grid-divider ">
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Mission <br> (Small Tactics)</h3>
                    <p>We are committed to creating a strong digital presence for our partners, in order to keep up with
                        today’s fast-moving digital world, we continuously strive to promote our partners’ growth. at
                        competitive prices through working faster, smarter and in partnership with our clients.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Vision <br> (Plan, Then Do)</h3>
                    <p>We make this possible by continuously enriching our portfolio, hiring the best resources, and by
                        continuing to grow and adapt to new industry developments to be number one in the region and
                        build long, profitable relationships with our customers.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Our Values <br> (Proof, Not promises)</h3>
                    <p>Integrity & Trust, Commitment to Quality, Customer Focus and Innovation.
                        Customer satisfaction will always be our primary objective in UNIQUE In all our projects, our
                        aim is to exceed our clients’ expectations by offering high-quality services at average market
                        prices.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-padding">
                    <h3>Contact Us</h3>
                    <div class="box">
                        <div class="icon"> <i class="fa fa-phone" style="transform: rotate(90deg);"></i></div>
                        <div class="text">
                            <p><a href="phoneto:01284891754?subject=Contact">+201284090766</a></p>
                        </div>
                        <div class="icon"> <i class="fas fa-envelope"></i></div>
                        <div class="text">
                            <p>
                                <a href="mailto:unique1.marketingagency@gmail.com?subject=Contact">Unique1.marketingagency@gmail.com
                            </p>
                            <div class="dream row">
                                <div class="high col">
                                    <a class="ghl" style="color: #3B5998;"
                                        href="https://www.facebook.com/unique1.marketingagency"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="ghl" style="color: #dd2a7b;"
                                        href=" https://www.instagram.com/unique1.marketingagency/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="ghl" style="color: #0077B5;"
                                        href="https://www.linkedin.com/company/72379370/admin/"><i
                                            class="fab fa-linkedin"></i></i></a>
                                    <a class="ghl"
                                        style="color: red;"="https://www.youtube.com/channel/UC7VbEzqJL-aebkdMqfymxug"><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="ghl" style="color: #08a0e9;" href=" https://twitter.com/unique1_agency"><i
                                            class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-default"><a href="{{ url('/contact/form') }}">Get In Touch</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .icon {
        color: white;
    }

    .btn {
        margin-top: 20px;
        background-color: #1087cc;
    }

    h3 {
        color: #aaa9ad;
        font-family: serif;
        margin-top: auto;
        margin-bottom: 20px;
    }

    p {
        color: rgb(223, 222, 222);

    }

    p a {
        color: rgb(223, 222, 222);
    }

    .text p {
        color: #aaa9ad;
    }

    .ghl {
        color: lightseagreen;
        font-size: 30px;
    }

    .ghl:hover {
        color: #DDD;
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
