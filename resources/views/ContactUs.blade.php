<!--
<div id="Contact Us">
<div class="big">
    <section id="contact " class="contact">

        <div class="content">
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"> <i class="fas fa-location-arrow"></i> </div>
                    <div class="text">
                        <p>4671 sugar Camp Road,<br>Owtonna,Minnesota,<br>55060</p>
                    </div>
                </div>


                <div class="box">
                    <div class="icon"> <i class="fa fa-phone"></i></div>
                    <div class="text">
                        <p><a href="phoneto:01284891754?subject=Contact">01284891754</a></p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"> <i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <p><a href="mailto:engy.1998@outlook.com?subject=Contact">engy.1998@outlook.com</a> </p>
                        <div class="dream row">
                            <div class="high col">
                                <p>GET IN TOUCH</p>
                                <a class="ghl"
                                    href="https://m.facebook.com/profile.php?id=101540202005107&ref=content_filter"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="ghl" href="https://www.linkedin.com/company/72379370/admin/"><i
                                        class="fab fa-linkedin"></i></i></a>
                                <a class="ghl"
                                    href="https://instagram.com/unique1.marketingagency?igshid=1lvlmp0bs78wp"><i
                                        class="fab fa-instagram"></i></a>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="contactForm">
                <form>
                    <h2>Recomendations</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <textarea type="text" name="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>

        <p class="copy">Copyright ©️ 2021 All rights reserved </p>
</div>
</div>
</section>

<style>

    .contact {

        position: relative;
        min-height: 10vh;
        padding: 20px 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #000;
        background-size: cover;

    }

    .contact .content {
        max-width: 800px;
        text-align: center;
    }

    .contact .content p {
        font-weight: 300;

        color: #fff;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -100px;

    }

    .container .contactInfo {
        width: 50%;
        display: flex;
        flex-direction: column;


    }

    .container .contactInfo .box {
        position: relative;
        padding: 0;
        display: flex;
    }

    .container .contactInfo .box .icon {
        min-width: 50px;
        height: 50px;
        color: #aaa9ad;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }

    .container .contactInfo .box .text {
        display: flex;
        margin-left: 5px;
        font-size: 16px;
        color: #fff;
        flex-direction: column;
        font-weight: 300;
    }

    .container .contactInfo .box .text h3 {
        font-weight: 500;
        color: #000000;
    }

    .container .contactInfo .box .text p,
    .container .contactInfo .box .text p a {
        color: #ffffff;
        text-decoration: none;


    }

    .contactForm {
        width: 30%;
        padding: 30px 30px 10px;
        background: #fff;
        -webkit-box-shadow: 0px 5px 30px rgba(53, 53, 53, 0.06);
        box-shadow: 0px 5px 30px rgba(53, 53, 53, 0.06);
        border-radius:  10%;

    }

    .contactForm h2 {
        font-size: 20px;
        color: #aaa9ad;
        font-weight: bold;
        font-family: serif;
    }

    .contactForm .inputBox {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .contactForm .inputBox input,
    .contactForm .inputBox textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        resize: none;
    }

    .contactForm .inputBox span {
        position: relative;
        left: 0;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }

    .contactForm .inputBox input:focus~span,
    .contactForm .inputBox input:valid~span,
    .contactForm .inputBox textarea:focus~span,
    .contactForm .inputBox textarea:valid~span {
        color:#aaa9ad;
        font-size: 12px;
        transform: translateY(-20px);

    }


    .contactForm .inputBox input[type="submit"] {
        width: 100px;
        background: #000;
        color: #aaa9ad;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
    }

    @media (max-width:991px) {
        .contact {
            padding: 50px;
        }

        .container {
            flex-direction: column;
        }

        .container .contactInfo {
            margin-bottom: 40px;
        }

        .container .contactInfo,
        .contactForm {
            width: 100%;
        }

    }

    /****contact us */

    /*Footer**/

    .high {
        margin-top: 30px;
    }

    .high p {
        color: #aaa9ad;
        font-size: 24px;
        margin-top: 20px;
        word-spacing: 2px;
        margin-bottom: 30px;
    }

    .high p span {
        color: #aaa9ad;
    }

    .high .colarlib {
        color: #aaa9ad;
        text-decoration: none;
    }

    .ghl {
        display: inline-block;
        height: 40px;
        width: 40px;
        border: 1px solid #e1e1e1;
        font-size: 15px;
        color: #747e8c;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        margin-right: 11px;
        -webkit-transition: all, 0.3s;
        -o-transition: all, 0.3s;
        transition: all, 0.3s;
        margin-bottom: 100px;

    }

    .high .ghl:hover {
        border-color: #aaa9ad;
        background-color: #aaa9ad;
        color: #fff;
    }

    hr.new1 {
        border: 2px solid #000;
        background-color: none;
    }

    .copy {
        margin-top: 60px;
        color: #aaa9ad;
    }

    /**Footer */

</style>
-->
<div id="ContactUs">
<hr>
<div class="container">

    <div class="row grid-divider ">
    <div class="col-lg-3">
      <div class="col-padding">
        <h3>Our Mission (Small Tactics)</h3>
        <p>We are committed to creating a strong digital presence for our partners, in order to keep up with today’s fast-moving digital world, we continuously strive to promote our partners’ growth. at competitive prices through working faster, smarter and in partnership with our clients.</p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="col-padding">
        <h3>Our Vision (Plan, Then Do)</h3>
        <p>We make this possible by continuously enriching our portfolio, hiring the best resources, and by continuing to grow and adapt to new industry developments to be number one in the region and build long, profitable relationships with our customers.</p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="col-padding">
        <h3>Our Values (Proof, Not promises)</h3>
        <p>Integrity & Trust, Commitment to Quality, Customer Focus and Innovation.
            Customer satisfaction will always be our primary objective in UNIQUE In all our projects, our aim is to exceed our clients’ expectations by offering high-quality services at average market prices.
            </p>
      </div>
    </div>
    <div class="col-lg-3">
        <div class="col-padding">
          <h3>Contact Us</h3>
          <!--
          <div class="box">
            <div class="icon"> <i class="fas fa-location-arrow"></i> </div>
            <div class="text">
                <p>4671 sugar Camp Road,<br>Owtonna,Minnesota,<br>55060</p>
            </div>
        </div>
    -->
        <div class="box">
            <div class="icon"> <i class="fa fa-phone"></i></div>
            <div class="text">
                <p><a href="phoneto:01284891754?subject=Contact">+201284090766</a></p>
            </div>
        </div>
        <div class="box">
            <div class="icon"> <i class="fas fa-envelope"></i></div>
            <div class="text">
                <p><a href="mailto:engy.1998@outlook.com?subject=Contact">Unique1.marketingagency@gmail.com</a> </p>
                <div class="dream row">
                    <div class="high col">
                        <p class="text">GET IN TOUCH</p>
                        <a class="ghl"
                            href="https://www.facebook.com/unique1.marketingagency"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="ghl" href="https://www.linkedin.com/company/72379370/admin/"><i
                                class="fab fa-linkedin"></i></i></a>
                        <a class="ghl"
                            href=" https://www.instagram.com/unique1.marketingagency/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="ghl"
                            href=" https://twitter.com/unique1_agency"><i
                                class="fab fa-twitter"></i></a>
                        <a class="ghl"
                            href="https://www.youtube.com/channel/UC7VbEzqJL-aebkdMqfymxug"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-default">Default</button>
    </div>
        </div>
      </div>
    </div>
</div>
</div>
<style>
    .btn{
        margin-top: 20px;
    }
    h3{
        color:#aaa9ad;
        font-family: serif;
        margin-top: auto;
        margin-bottom: 20px;
    }
    p{
        color: rgb(223, 222, 222);

    }
    p a{
        color: rgb(223, 222, 222);
    }
    .text p {
        color: #aaa9ad;
    }

    .ghl{
        color: #aaa9ad;
        font-size: 16px;
    }
    .ghl:hover{
        color: #DDD;
    }



   @media ( min-width: 768px ) {
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
@media(max-width:576px){

.container{
    width: 100%;
}
}
</style>
