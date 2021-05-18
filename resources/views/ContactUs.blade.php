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
