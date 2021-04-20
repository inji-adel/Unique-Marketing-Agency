<div class="big">
    <section id="contact" class="contact">

                 <div class="content">
                 <h2>Contact US</h2>
                 </div>
                 <div class="container">
                 <div class="contactInfo">
                  <div class="box">
                  <div class="icon"> <i class="fas fa-location-arrow"></i> </div>
                  <div class="text">
                   <h3>Address</h3>
                   <p>4671 sugar Camp Road,<br>Owtonna,Minnesota,<br>55060</p>
                  </div>
                  </div>


                  <div class="box">
                  <div class="icon"> <i class="fa fa-phone"></i></div>
                  <div class="text">
                   <h3>Phone</h3>
                   <p><a href="phoneto:01284891754?subject=Contact">01284891754</a></p>
                  </div>
                  </div>

                  <div class="box">
                  <div class="icon"> <i class="fas fa-envelope"></i></div>
                  <div class="text">
                   <h3>Email</h3>
                   <p><a href="mailto:engy.1998@outlook.com?subject=Contact">engy.1998@outlook.com</a> </p>
                  </div>
                  </div>

                 </div>
                 <div class="contactForm">
                  <form >
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

                 <div class="footer">
        <div class="container">
            <div class=" dream row text-center">
                <div class="high col">
                    <!--logo image-->
                  <img src="" alt="" srcset="">
                  <p>Connect With Us!</p>
                  <a class="ghl" href="https://m.facebook.com/profile.php?id=101540202005107&ref=content_filter"><i class="fab fa-facebook-f"></i></a>
                  <a class="ghl" href="https://www.linkedin.com/company/72379370/admin/"><i class="fab fa-linkedin"></i></i></a>
                  <a class="ghl" href="https://instagram.com/unique1.marketingagency?igshid=1lvlmp0bs78wp"><i class="fab fa-instagram"></i></a>

                  <div class="img-logo">
                  <img src="logo.png "width="100" height="100" alt="">
                  <p>Copyright ©️ 2021 All rights reserved<a class="colarlib" href="#"> Unique</a></p>
                  </div>

                </div>
              </div>
        </div>
    </div>
    </div>
      </section>
    </div>

    <html>
        <style>
            /**contact us*/

.big{

    margin-top: 50px;
    box-sizing: border-box;
    font-family:'Poppins',sans-serif;
}
.contact{
    position: relative;
    min-height:100vh;
    padding: 50px 100px;
    display: flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background-image: url('pexels-pixabay-235985.jpg');
     background-size:cover;

}
.contact .content
{
    max-width:800px;
    text-align:center;
}
.contact .content h2{
    font-size:36px;
    font-weight:500;
    color:black;
}

.container{
    width:100%;
    display: flex;
    justify-content:center;
    align-items:center;
    margin-top:30px;

}

.container .contactInfo{
    width:50%;
    display:flex;
    flex-direction:column;


}
.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon{
    min-width:60px;
    height:60px;
    color:#fce28e;
    display: flex;
    justify-content:center;
    align-items:center;
    font-size:10px;

}
.container .contactInfo .box .text {
    display: flex;
    margin-left:20px;
    font-size:16px;
    color:#fff;
    flex-direction:column;
    font-weight:300;
}
.container .contactInfo .box .text h3{
    font-weight:300;
    color:#fce28e;
}
.container .contactInfo .box .text p,.container .contactInfo .box .text p a{
    color:#ffffff;

}

.contactForm{
    width: 40%;
    padding: 40px;
    background:#fff;
    -webkit-box-shadow: 0px 5px 30px rgba(53, 53, 53, 0.06);
    box-shadow: 0px 5px 30px rgba(53, 53, 53, 0.06);

}
.contactForm h2{
    font-size:30px;
    color:rgb(17, 17, 17);
    font-weight:500;
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top:10px ;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 5px 0;
    font-size:16px;
    margin:10px 0;
    border:none;
    border-bottom:2px solid rgb(20, 19, 19);
    outline:none;
    resize:none;
}
.contactForm .inputBox span{
     position: relative;
     left:0;
     padding: 5px 0;
     font-size:16px;
     margin:10px 0;
     pointer-events:none;
     transition:0.5s;
     color:rgb(17, 15, 15);
}
.contactForm .inputBox input:focus ~span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
 color:#fce28e;
 font-size:12px;
 transform:translateY(-20px);

}


.contactForm .inputBox input[type="submit"]
{
    width: 100px;
    background:#fce28e;
    color: #fff;
    border:none;
    cursor: pointer;
    padding: 10px;
    font-size:18px;
}
@media (max-width:991px)
{
    .contact{
        padding: 50px;
    }
    .container{
        flex-direction:column;
    }
    .container .contactInfo{
        margin-bottom:40px;
    }
    .container .contactInfo,
    .contactForm{
        width: 100%;
    }

}
/****contact us */

/*Footer**/
.footer{
    margin-top: 30px;
}
.footer .high p {
    color: rgb(8, 8, 8);
    font-size:24px;
    margin-top: 20px;
    word-spacing: 2px;
    margin-bottom: 30px;
}

.footer .high .colarlib{
    color:#fce28e ;
    text-decoration: none;
}

.footer .high .ghl{
    display: inline-block;
	height: 40px;
	width: 40px;
	border: 1px solid#fce28e;
	font-size: 15px;
	color: #0d0d0e;
	line-height: 40px;
	text-align: center;
	border-radius: 50%;
	margin-right: 11px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
    transition: all, 0.3s;
    margin-bottom: 100px;

}.footer .high .ghl:hover{
    border-color: #fce28e;
    background-color:#fce28e;
    color: #fff;
}
.footer .high .img-logo{
    margin-top:-50px;
    border-radius:50%;
    margin-bottom:20px;
    size: 40px;
}
/**Footer */
        </style>
    </html>
