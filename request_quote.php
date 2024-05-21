<!DOCTYPE html>
<html lang="eng">


<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $city = isset($_GET['city']) ? $_GET['city'] : "Patna"; ?>

    <!--====== Title ======-->
    <title>Contact Us | Microfinance website development company in <?php echo $city; ?></title>
    <meta name="description" content="contact us for online demo ! Camwel Solution LLP">
    <meta name="keywords"
        content="Website development company in India, Microfinance billing software, Microfinance software minimum cost, Microfinance Software Companies, Multi branch microfinance software, Microfinance software high cost, No.1 software company in Patna, Best Microfinance software near me, Loan management software,Microfinance software">
    <?php include ('include/css.php'); ?>
    <meta name="google-site-verification" content="eYtpGVh3TiUeL2gnEE_t-33Pc3FBZawJwFUYymkRZrA" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q13M4GJ9M7"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q13M4GJ9M7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Q13M4GJ9M7');
    </script>
    <style>
        .outer-box{
            border:0.5px solid black;
        }
        .in-colo {
            /* background-color: #03658c; */
            color: black;
            padding: 8px;
        }

        .inner-box1 {
            font-size: 22px;
            padding: 8px;
            /* background: black; */
            /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
            /* border-radius: 8px; */
        }
    </style>


</head>

<body>
    <div class="page-wrapper">

        <?php include ('include/header.php'); ?>

        <!-- Page Banner Start -->
        <section class="page-banner bgs-cover overlay pt-50"
            style="background-image: url(assets/images/more/contact_2.jpg);">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title">Request a Quote</h1>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Contact Section Start -->
        <section class="contact-page py-120 rpy-100">
            <div class="container">
                <div class="contact-info-area mb-80">
                    <div class="contact-info-item wow fadeInUp delay-0-2s">
                        <i class="far fa-map"></i>
                        <p>Janki Market, Bhagwat Nagar Chauraha,Kumhrar, Patna-800026, Bihar, India</p>
                    </div>
                    <div class="contact-info-item wow fadeInUp delay-0-4s">
                        <i class="far fa-envelope"></i>
                        <p><a href="mailto:info@camwel.com">info@camwel.com</a></p>
                    </div>
                    <div class="contact-info-item wow fadeInUp delay-0-6s">
                        <i class="fas fa-phone-alt"></i>
                        <p><a href="callto:9572852742">+91-9572852742</a> <br><a
                                href="callto:9028388889">+91-9028388889</a></p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="contact-form ml-40 rml-0 rmt-55 wow fadeInRight delay-0-2s">
                            <h3 class="comment-title mb-35">Send A Message</h3>
                            <p>We’re eager to work with you. Please share your project goals and contact information. We
                                respond to 97% of queries within 1-2 business days. Really!</p>
                            <form class="comment-form mt-35" action="request_handler.php" id="contact_form"
                                method="post">
                                <!-- <form class="comment-form mt-35" method="post" id="contact_form" > -->

                                <div class="row clearfix justify-content-center">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="full-name"><i class="far fa-user"></i></label>
                                            <input type="text" id="name" name="name" class="form-control" value=""
                                                placeholder="Your Full Name">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email"><i class="far fa-envelope"></i></label>
                                            <input type="email" id="email" name="email" class="form-control" value=""
                                                placeholder="Your Email">
                                            <!-- <span id="emailError">Error</span> -->

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Mobile Number"><i class="fas fa-mobile"></i></label>
                                            <input type="number" id="mobile" name="mobile" class="form-control"
                                                placeholder="Your Mobile Number" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Whatsapp Number"><i class="fas fa-mobile"></i></label>
                                            <input type="number" id="wat_mobile" name="wat_mobile" class="form-control"
                                                placeholder="Your Whatsapp Number" maxlength="10">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="location"><i class="fas fa-map"></i></label>
                                            <input type="text" id="location" name="location" class="form-control"
                                                value="" placeholder="Your Location">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pin code"><i class="fas fa-mobile"></i></label>
                                            <input type="number" id="pincode" name="pincode" class="form-control"
                                                placeholder="Enter Pin Code *" maxlength="10">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comments"><i class="fas fa-pencil-alt"></i></label>
                                            <textarea name="message" id="message" class="form-control" rows="4"
                                                placeholder="Write Message" maxlength="150"></textarea>
                                        </div>
                                    </div>




                                    <div class="col-md-12 text-center">
                                        <p
                                            style="font-size: 20px; font-style:normal; font-weight:bolder; color:#104cba;">
                                            TELL US ABOUT YOUR PROJECT</p>
                                    </div>
                                    <div class="col-md-12">

                                        <label for="fname">WHATS YOUR PROJECT ALL ABOUT</label>

                                        <input type="text"
                                        oninput="this.value = this.value.replace(/[^A-Za-z0-9 ]/g, '').replace(/ +/g, ' ')"
                                            class="form-control" name="about" id="about" aria-describedby="name"
                                            placeholder="">
                                    </div>
                                    <div class="col-md-12" style="padding-top:25px;">
                                        <div class="row" style="margin-bottom:15px;">
                                            <div class="col-md-12">
                                                <label for="fname" class="text-danger text-5"
                                                    style="font-size: 15px; font-weight:bolder;">What Are You Looking
                                                    For?*</label>
                                            </div>
                                        </div>
                                        <div class="row" style="padding:15px;">
                                            <div class="col-md-4">
                                                <input type="radio" name="nidhi_company" id="about"
                                                    value="trademark registration">
                                                <span>Microfinance Software</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="nidhi_reg" id="about"
                                                    value="private company Registration">
                                                <span>Microfinance Website</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="nbfc" id="about"
                                                    value="Nidhi company Registration">
                                                <span>Microfinance company Registration</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="financial_sec" id="about"
                                                    value="NGO registration">
                                                <span>Microfinance Company Audit Compliance</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="education" id="about"
                                                    value="Limited Company Registration">
                                                <span>Limited Company Registration</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="mlm" id="about"
                                                    value="Partnership company registration">
                                                <span>Partnership company registration</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:20px;">
                                        <label for="fname">WHEN DO YOU WANT TO GET STARTED? *</label>
                                        <select name="select" id="" class="formCont" style="margin-top:20px;">
                                            <option value="not selected">WHEN DO YOU WANT TO GET STARTED? *</option>
                                            <option value="Immediately">Immediately</option>
                                            <option value="Within a month">Within a month</option>
                                            <option value="1 - 3 Months">1 - 3 Months</option>
                                        </select>
                                    </div>
                                   <div class="col-12 d-md-flex align-items-md-center mt-3 ">
                                   <div  class="col-sm-12 col-md-6 mt-2">
                                        <div class="outer-box">
                                            <div class="inner-box1 d-flex justify-content-around  align-items-center ">
                                                <!-- <span class="text-primary">Enter Captcha:-</span> -->
                                                <div class="captcha-box-in d-flex align-items-center ">
                                                    <div class="in-colo">
                                                        <span id="first"></span>
                                                        <span id="plus">+</span>
                                                        <span id="second"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mt-3">
                                        <input type="text" id="num" placeholder="Enter Captcha Here" class="set-sum"
                                            onkeyup="myFunction()" />
                                    </div>
                                   </div>

                                    <div class="col-sm-12 mt-3 ">
                                        <div class="form-group mb-0">
                                            <button type="submit" name="submit_contact" class="theme-btn"
                                                onclick=" return isValidation()">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->




        <script>


            var firstNu = document.getElementById("first");
            var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
            // console.log("number1", num1);
            var secNum = document.getElementById("second");
            var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));


            function myFunction() {
                var userInput = document.getElementById("num");

                // var inputValu = parseInt(userInput.value);
                var inputValu = userInput.value;

                // console.log(typeof inputValu);
                return inputValu;
            }


            var storeRandomValue = parseInt(num1) + parseInt(num2);





            function isValidation() {

                // alert("form check");

                var name = $('#name').val();
                var lan = name.length;


                var email = $('#email').val();
                var mobile = $('#mobile').val();
                var wat_mobile = $('#wat_mobile').val();
                var location = $('#location').val();
                var pincode = $('#pincode').val();
                var message = $('#message').val();
                var about = $('#about').val();
                var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                var phoneRegex = /^\d{10}$/;
                var namePattern = /^[A-Za-z\s\-]+$/;
                var dued = myFunction();

                if (!name) {
                    alert("Enter Name First");
                    $('#name').focus();
                    return false;
                } else if (lan <= 3) {
                    alert("First name must be max 3 letters *");
                    $('#name').focus();
                    return false;
                } else if (!email) {
                    alert("Please Enter Email");
                    $("#email").focus();
                    return false;
                } else if (!emailRegex.test(email)) {
                    alert("Enter Valid Email");
                    $("#email").focus();
                    return false;
                } else if (!mobile) {
                    alert("Enter mobile number *");
                    $('#mobile').focus();
                    return false;
                } else if (!phoneRegex.test(mobile)) {
                    alert("Enter Valid number *");
                    $('#mobile').focus();
                    return false;
                }
               
                else if (message.length <= 30) {
                    alert("Message must be max 30 letters *");
                    $('#message').focus();
                    return false;
                }
                else if (about.length == "") {
                    alert("Write about your project *");
                    $('#about').focus();
                    return false;
                }
                else if (!dued) {
                    alert("Please Enter Captcha");
                    return false;
                } else if (namePattern.test(dued)) {
                    alert("Enter Only Number");
                    return false;
                }
                else if (dued != storeRandomValue) {
                    alert("Enter Correct Captcha");
                    return false;
                } else {
                    return true;
                }
            }


        </script>




















        <!--======== Map =========-->
        <div class="contact-page-map">
            <div class="our-location">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.3478440400727!2d85.17795211488385!3d25.59335518371349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58af9724643f%3A0x374894e117e7ef84!2sCamwel%20Corporate%20Solution%20Private%20Limited!5e0!3m2!1sen!2sin!4v1650629801589!5m2!1sen!2sin"
                    height="650" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--======== Map =========-->









        <div class="container">
            <div style="color:#FFF; font-size:1px; text-align:justify;">
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=India">India</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Maharashtra">Maharashtra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ahmadnagar">Ahmadnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Akola">Akola</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amravati">Amravati</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Aurangabad">Aurangabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhandara">Bhandara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhusawal">Bhusawal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bid">Bid</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Buldana">Buldana</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chandrapur">Chandrapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Daulatabad">Daulatabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhule">Dhule</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jalgaon">Jalgaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kalyan">Kalyan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Karli">Karli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kolhapur">Kolhapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mahabaleshwar">Mahabaleshwar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Malegaon">Malegaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Matheran">Matheran</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mumbai">Mumbai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nagpur">Nagpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nanded">Nanded</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nashik">Nashik</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Osmanabad">Osmanabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Pandharpur">Pandharpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Parbhani">Parbhani</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pune">Pune</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ratnagiri">Ratnagiri</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sangli">Sangli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Satara">Satara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sevagram">Sevagram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Solapur">Solapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Thane">Thane</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ulhasnagar">Ulhasnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Vasai Vasai">Vasai
                    Vasai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Wardha">Wardha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Yavatmal">Yavatmal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Karnataka">Karnataka</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Badami">Badami</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ballari">Ballari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bangalore">Bangalore</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Belgavi">Belgavi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bhadravati">Bhadravati</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bidar">Bidar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chikkamagaluru">Chikkamagaluru</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chitradurga">Chitradurga</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Davangere">Davangere</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Halebid">Halebid</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hassan">Hassan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=HubballiDharwad">HubballiDharwad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kalaburagi">Kalaburagi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kolar">Kolar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Madikeri">Madikeri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mandya">Mandya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mangaluru">Mangaluru</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mysuru">Mysuru</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Raichur">Raichur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shivamogga">Shivamogga</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shravanabelagola">Shravanabelagola</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shrirangapattana">Shrirangapattana</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tumkuru">Tumkuru</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bihar">Bihar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ara">Ara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Baruni">Baruni</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Begusarai">Begusarai</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bettiah">Bettiah</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhagalpur">Bhagalpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bihar Sharif">Bihar
                    Sharif</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bodh Gaya">Bodh Gaya</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Buxar">Buxar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chapra">Chapra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Darbhanga">Darbhanga</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dehri">Dehri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dinapur Nizamat">Dinapur
                    Nizamat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gaya">Gaya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hajipur">Hajipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jamalpur">Jamalpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Katihar">Katihar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Madhubani">Madhubani</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Motihari">Motihari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Munger">Munger</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Muzaffarpur">Muzaffarpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Patna">Patna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Nageshwar Colony">Nageshwar Colony </a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bailey Road">Bailey
                    Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kankarbagh">Kankarbagh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Boring Road">Boring
                    Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Exhibition Road">Exhibition Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=New Patliputra Colony">New Patliputra Colony</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kadamkuan">Kadamkuan</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ghrounda">Ghrounda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Anandpuri">Anandpuri</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Fraser Road Area">Fraser
                    Road Area</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kidwaipuri">Kidwaipuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajendra Naga">Rajendra
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Anisabad">Anisabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Samanpura">Samanpura</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Punaichak">Punaichak</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lohanipur">Lohanipur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Keshri Nagar">Keshri
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jagdeo Path">Jagdeo
                    Path</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Digha">Digha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Budha Colony">Budha
                    Colony</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Danapur Road">
                    Danapur Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Gardanibagh">Gardanibagh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Patliputra Road">Patliputra Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=North Sri Krishna Puri">North Sri Krishna Puri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Vijay Nagar">Vijay
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Indira Nagar">Indira
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hanuman Nagar">Hanuman
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khajpura">Khajpura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lalji Tola">Lalji
                    Tola</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kankarbagh Road">Kankarbagh Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mithapur">Mithapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Haji Ganj">Haji Ganj</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chajju Bagh">Chajju
                    Bagh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ashok Nagar">Ashok
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sri Krishna Pur">Sri
                    Krishna Puri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajapur">Rajapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rupaspu">Rupaspur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ashiana-Digha Road">Ashiana-Digha Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ganga Vihar Colony">Ganga
                    Vihar Colony</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Raja bazar">Raja
                    bazar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Haroon Nagar">Haroon
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Phulwari Sharif">Phulwari
                    Sharif</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khagaul Road">Khagaul
                    Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khagaul Road">Khagaul
                    Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Patel Nagar">Patel
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Patliputra Colony">Patliputra Colony</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Paijawa">Paijawa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gola Road">Gola Road</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Sheikhpura">Sheikhpura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Saguna More">Saguna
                    More</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sabzibagh">Sabzibagh</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shastri Nagar">Shastri
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jakkanpur">Jakkanpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shivpuri">Shivpuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Muhammadpur">Muhammadpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sri Krishna Nagar">Sri
                    Krishna Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ramjaipal Naga">Ramjaipal
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pahari">Pahari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chitrakut Nagar">Chitrakut Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jai Prakash Nagar">Jai
                    Prakash Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chhoti Pahari">Chhoti
                    Pahari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hajipur">Hajipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Sultangunj">Sultangunj</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kumhrar">Kumhrar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ashiana Nagar">Ashiana
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kurthoul">Kurthoul</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Indrapuri">Indrapuri</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhogipur">Bhogipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lalbagh">Lalbagh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Rajbansi NagarBihta">Rajbansi NagarBihta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bihta">Bihta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kanhauli">Kanhauli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Parsa">Parsa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gopalpu">Gopalpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajeev Nagar">Rajeev
                    Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Punpun">Punpun</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lodipur">Lodipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Muhammadpur Korji">Muhammadpur Korji</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Alampur Gonpura">Alampur
                    Gonpura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sadikpu">Sadikpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Begampur">Begampur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kurji">Kurji</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Beldari Chak">Beldari
                    Chak</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bairiya">Bairiya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bakhtiyarpur Road">Bakhtiyarpur Road</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khagaul">Khagaul</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chitragupta Nagar">Chitragupta Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Muradpur">Muradpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chitkohra">Chitkohra</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rukanpura">Rukanpura</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bahadurpur">Bahadurpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ramkrishan Nagar">Ramkrishan Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bakerganj">Bakerganj</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ranipur">Ranipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Janipur">Janipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Machhua Toli">Machhua
                    Toli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dulhin Bazar">
                    Dulhin Bazar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shikarpur">Shikarpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=North Shastri Nagar">North Shastri Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=East Lakshmi Nagar">East
                    Lakshmi Nagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sonepur">Sonepur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Danapur">Danapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sipara">Sipara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Painal">Painal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Naubatpur">Naubatpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Maranchi">Maranchi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Purnia">Purnia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pusa">Pusa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Saharsa">Saharsa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Samastipur">Samastipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sasaram">Sasaram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sitamarhi">Sitamarhi</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Siwan">Siwan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gujarat">Gujarat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ahmadabad">Ahmadabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amreli">Amreli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bharuch">Bharuch</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhavnagar">Bhavnagar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhuj">Bhuj</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dwarka">Dwarka</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Gandhinagar">Gandhinagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Godhra">Godhra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jamnagar">Jamnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Junagadh">Junagadh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kandla">Kandla</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khambhat">Khambhat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kheda">Kheda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mahesana">Mahesana</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Morvi">Morvi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nadiad">Nadiad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Navsari">Navsari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Okha">Okha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Palanpur">Palanpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Patan">Patan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Porbandar">Porbandar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajkot">Rajkot</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Surat">Surat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Surendranagar">Surendranagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Valsad">Valsad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Veraval">Veraval</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Silvassa">Silvassa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Daman">Daman</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Diu">Diu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Delhi">Delhi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=New Delhi">New Delhi</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jharkhand">Jharkhand</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bokaro">Bokaro</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chaibasa">Chaibasa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Deoghar">Deoghar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhanbad">Dhanbad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dumka">Dumka</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Giridih">Giridih</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hazaribag">Hazaribag</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Jamshedpur">Jamshedpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jharia">Jharia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajmahal">Rajmahal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ranchi">Ranchi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Saraikela">Saraikela</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Uttar Pradesh">Uttar
                    Pradesh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Agra">Agra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Aligarh">Aligarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Allahabad">Allahabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amroha">Amroha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ayodhya">Ayodhya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Azamgarh">Azamgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bahraich">Bahraich</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ballia">Ballia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Banda">Banda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bara Banki">Bara
                    Banki</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bareilly">Bareilly</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Basti">Basti</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bijnor">Bijnor</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bithur">Bithur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Budaun">Budaun</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bulandshahr">Bulandshahr</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Deoria">Deoria</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Etah">Etah</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Etawah">Etawah</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Faizabad">Faizabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Fatehpur">Fatehpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Fatehpur Sikri">Fatehpur
                    Sikri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ghaziabad">Ghaziabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ghazipur">Ghazipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gonda">Gonda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gorakhpur">Gorakhpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hamirpur">Hamirpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hardoi">Hardoi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hathras">Hathras</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jalaun">Jalaun</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jaunpur">Jaunpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jhansi">Jhansi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kannauj">Kannauj</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kanpur">Kanpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lakhimpur">Lakhimpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lalitpur">Lalitpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lucknow">Lucknow</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mainpuri">Mainpuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mathura">Mathura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Meerut">Meerut</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mirzapur">Mirzapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Moradabad">Moradabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Muzaffarnagar">Muzaffarnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Partapgarh">Partapgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pilibhit">Pilibhit</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rae Bareli">Rae
                    Bareli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rampur">Rampur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Saharanpur">Saharanpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sambhal">Sambhal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shahjahanpur">Shahjahanpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sitapur">Sitapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sultanpur">Sultanpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tehri">Tehri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Varanasi">Varanasi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=West Bengal">West
                    Bengal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Alipore">Alipore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Alipur Duar">Alipur
                    Duar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Asansol">Asansol</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Baharampur">Baharampur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bally">Bally</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Balurghat">Balurghat</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bankura">Bankura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Baranagar">Baranagar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Barasat">Barasat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Barrackpore">Barrackpore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Basirhat">Basirhat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhatpara">Bhatpara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bishnupur">Bishnupur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Budge Budge">Budge
                    Budge</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Burdwan">Burdwan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chandernagore">Chandernagore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Darjiling">Darjiling</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Diamond Harbour">Diamond
                    Harbour</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dum Dum">Dum Dum</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Durgapur">Durgapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Halisahar">Halisahar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Haora">Haora</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hugli">Hugli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ingraj Bazar">Ingraj
                    Bazar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Jalpaiguri">Jalpaiguri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kalimpong">Kalimpong</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kamarhati">Kamarhati</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kanchrapara">Kanchrapara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kharagpur">Kharagpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Koch Bihar">Koch
                    Bihar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kolkata">Kolkata</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Krishnanagar">Krishnanagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Malda">Malda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Midnapore">Midnapore</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Murshidabad">Murshidabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Navadwip">Navadwip</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Palashi">Palashi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Panihati">Panihati</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Purulia">Purulia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Raiganj">Raiganj</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Santipur">Santipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shantiniketan">Shantiniketan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Shrirampur">Shrirampur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Siliguri">Siliguri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Siuri">Siuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tamluk">Tamluk</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Titagarh">Titagarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Port Blair">Port
                    Blair</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Andhra Pradesh">Andhra
                    Pradesh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Adoni">Adoni</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amaravati">Amaravati</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Anantapur">Anantapur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chandragiri">Chandragiri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chittoor">Chittoor</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Dowlaiswaram">Dowlaiswaram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Eluru">Eluru</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Guntur">Guntur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kadapa">Kadapa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kakinada">Kakinada</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kurnool">Kurnool</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Machilipatnam">Machilipatnam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Nagarjunakoṇḍa">Nagarjunakoṇḍa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Rajahmundry">Rajahmundry</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Srikakulam">Srikakulam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tirupati">Tirupati</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Vijayawada">Vijayawada</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Visakhapatnam">Visakhapatnam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Vizianagaram">Vizianagaram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Yemmiganur">Yemmiganur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Arunachal Pradesh">Arunachal Pradesh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Itanagar">Itanagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Assam">Assam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhuburi">Dhuburi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dibrugarh">Dibrugarh</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dispur">Dispur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Guwahati">Guwahati</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jorhat">Jorhat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nagaon">Nagaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sibsagar">Sibsagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Silchar">Silchar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tezpur">Tezpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tinsukia">Tinsukia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chandigar">Chandigar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chhattisgarh">Chhattisgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ambikapur">Ambikapur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhilai">Bhilai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bilaspur">Bilaspur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhamtari">Dhamtari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Durg">Durg</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jagdalpur">Jagdalpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Raipur">Raipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Rajnandgaon">Rajnandgaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Goa">Goa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Madgaon">Madgaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Panaji">Panaji</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Haryana">Haryana</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ambala">Ambala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhiwani">Bhiwani</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chandigarh">Chandigarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Faridabad">Faridabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Firozpur Jhirka">Firozpur
                    Jhirka</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gurgaon">Gurgaon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hansi">Hansi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hisar">Hisar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jind">Jind</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kaithal">Kaithal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Karnal">Karnal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kurukshetra">Kurukshetra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Panipat">Panipat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pehowa">Pehowa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rewari">Rewari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rohtak">Rohtak</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sirsa">Sirsa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sonipat">Sonipat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Himachal Pradesh">Himachal Pradesh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bilaspur">Bilaspur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chamba">Chamba</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dalhousie">Dalhousie</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Dharmshala">Dharmshala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hamirpur">Hamirpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kangra">Kangra</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kullu">Kullu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mandi">Mandi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nahan">Nahan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shimla">Shimla</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Una">Una</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jammu And Kashmir">Jammu
                    And Kashmir</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Anantnag">Anantnag</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Baramula">Baramula</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Doda">Doda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gulmarg">Gulmarg</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jammu">Jammu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kathua">Kathua</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Leh">Leh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Punch">Punch</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajauri">Rajauri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Srinagar">Srinagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Udhampur">Udhampur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kerala">Kerala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Alappuzha">Alappuzha</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Badagara">Badagara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Idukki">Idukki</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kannur">Kannur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kochi">Kochi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kollam">Kollam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kottayam">Kottayam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kozhikode">Kozhikode</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mattancheri">Mattancheri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Palakkad">Palakkad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Thalassery">Thalassery</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Thiruvananthapuram">Thiruvananthapuram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Thrissur">Thrissur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Madhya Pradesh">Madhya
                    Pradesh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Balaghat">Balaghat</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Barwani">Barwani</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Betul">Betul</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bharhut">Bharhut</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhind">Bhind</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhojpur">Bhojpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhopal">Bhopal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Burhanpur">Burhanpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chhatarpur">Chhatarpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chhindwara">Chhindwara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Damoh">Damoh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Datia">Datia</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dewas">Dewas</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhar">Dhar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Guna">Guna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gwalior">Gwalior</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Hoshangabad">Hoshangabad</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Indore">Indore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Itarsi">Itarsi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jabalpur">Jabalpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jhabua">Jhabua</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khajuraho">Khajuraho</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khandwa">Khandwa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khargon">Khargon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Maheshwar">Maheshwar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mandla">Mandla</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mandsaur">Mandsaur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mhow">Mhow</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Morena">Morena</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Murwara">Murwara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Narsimhapur">Narsimhapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Narsinghgarh">Narsinghgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Narwar">Narwar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Neemuch">Neemuch</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nowgong">Nowgong</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Orchha">Orchha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Panna">Panna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Raisen">Raisen</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajgarh">Rajgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ratlam">Ratlam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rewa">Rewa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sagar">Sagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sarangpur">Sarangpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Satna">Satna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sehore">Sehore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Seoni">Seoni</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shahdol">Shahdol</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shajapur">Shajapur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sheopur">Sheopur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shivpuri">Shivpuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ujjain">Ujjain</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Vidisha">Vidisha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Manipur">Manipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Imphal">Imphal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Meghalaya">Meghalaya</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Cherrapunji">Cherrapunji</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shillong">Shillong</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mizoram">Mizoram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Aizawl">Aizawl</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lunglei">Lunglei</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nagaland">Nagaland</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kohima">Kohima</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mon">Mon</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Phek">Phek</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Wokha">Wokha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Zunheboto">Zunheboto</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Odisha">Odisha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Balangir">Balangir</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Baleshwar">Baleshwar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Baripada">Baripada</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bhubaneshwar">Bhubaneshwar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Brahmapur">Brahmapur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Cuttack">Cuttack</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhenkanal">Dhenkanal</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Keonjhar">Keonjhar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Konark">Konark</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Koraput">Koraput</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Paradip">Paradip</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Phulabani">Phulabani</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Puri">Puri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sambalpur">Sambalpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Udayagiri">Udayagiri</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Puducherry ">Puducherry
                </a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Karaikal">Karaikal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mahe">Mahe</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Puducherry">Puducherry</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Yanam">Yanam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Punjab">Punjab</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amritsar">Amritsar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Batala">Batala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chandigarh">Chandigarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Faridkot">Faridkot</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Firozpur">Firozpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gurdaspur">Gurdaspur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Hoshiarpur">Hoshiarpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jalandhar">Jalandhar</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kapurthala">Kapurthala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ludhiana">Ludhiana</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nabha">Nabha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Patiala">Patiala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rupnagar">Rupnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sangrur">Sangrur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Rajasthan">Rajasthan</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Abu">Abu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ajmer">Ajmer</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Alwar">Alwar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Amer">Amer</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Barmer">Barmer</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Beawar">Beawar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bharatpur">Bharatpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bhilwara">Bhilwara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bikaner">Bikaner</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bundi">Bundi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chittaurgarh">Chittaurgarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Churu">Churu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhaulpur">Dhaulpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dungarpur">Dungarpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ganganagar">Ganganagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Hanumangarh">Hanumangarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jaipur">Jaipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jaisalmer">Jaisalmer</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jalor">Jalor</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jhalawar">Jhalawar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jhunjhunu">Jhunjhunu</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jodhpur">Jodhpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kishangarh">Kishangarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kota">Kota</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Merta">Merta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nagaur">Nagaur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nathdwara">Nathdwara</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pali">Pali</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Phalodi">Phalodi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pushkar">Pushkar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sawai Madhopur">Sawai
                    Madhopur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shahpura">Shahpura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sikar">Sikar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sirohi">Sirohi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tonk">Tonk</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Udaipur">Udaipur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sikkim">Sikkim</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gangtok">Gangtok</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gyalsing">Gyalsing</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lachung">Lachung</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mangan">Mangan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tamil Nadu">Tamil
                    Nadu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Arcot">Arcot</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chengalpattu">Chengalpattu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Chennai">Chennai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Chidambaram">Chidambaram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Coimbatore">Coimbatore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Cuddalore">Cuddalore</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Dharmapuri">Dharmapuri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dindigul">Dindigul</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Erode">Erode</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kanchipuram">Kanchipuram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kanniyakumari">Kanniyakumari</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kodaikanal">Kodaikanal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kumbakonam">Kumbakonam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Madurai">Madurai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mamallapuram">Mamallapuram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Nagappattinam">Nagappattinam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nagercoil">Nagercoil</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Palayankottai">Palayankottai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Pudukkottai">Pudukkottai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Rajapalaiyam">Rajapalaiyam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Ramanathapuram">Ramanathapuram</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Salem">Salem</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Thanjavur">Thanjavur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Tiruchchirappalli">Tiruchchirappalli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Tirunelveli">Tirunelveli</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tiruppur">Tiruppur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tuticorin">Tuticorin</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Udhagamandalam">Udhagamandalam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Vellore">Vellore</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Telangana">Telangana</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hyderabad">Hyderabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Karimnagar">Karimnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Khammam">Khammam</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mahbubnagar">Mahbubnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nizamabad">Nizamabad</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Sangareddi">Sangareddi</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Warangal">Warangal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Tripura">Tripura</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Agartala">Agartala</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Uttarakhand">Uttarakhand</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Almora">Almora</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dehra Dun">Dehra Dun</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Haridwar">Haridwar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Mussoorie">Mussoorie</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nainital">Nainital</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Pithoragarh">Pithoragarh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Manila">Manila</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Quezon City">Quezon
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Budta">Budta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Davao">Davao</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Malingao">Malingao</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Cebu City">Cebu City</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=General Santos">General
                    Santos</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Taguig">Taguig</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pasig City">Pasig
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Antipolo">Antipolo</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Makati City">Makati
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Zamboanga">Zamboanga</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bacolod City">Bacolod
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mansilingan">Mansilingan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Cagayan de Oro">Cagayan
                    de Oro</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Dasmarinas">Dasmarinas</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Iloilo">Iloilo</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=San Jose del Monte">San
                    Jose del Monte</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bacoor">Bacoor</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lapu-Lapu City">Lapu-Lapu
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Lagos">Lagos</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kano">Kano</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ibadan">Ibadan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kaduna">Kaduna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Port Harcourt">Port
                    Harcourt</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Benin City">Benin
                    City</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Maiduguri">Maiduguri</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Zaria">Zaria</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Aba">Aba</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jos">Jos</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ilorin">Ilorin</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Oyo">Oyo</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Enugu">Enugu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Abeokuta">Abeokuta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Abuja">Abuja</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Sokoto">Sokoto</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Onitsha">Onitsha</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Warri">Warri</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ebute Ikorodu">Ebute
                    Ikorodu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Okene">Okene</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Colombo">Colombo</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Galkissa">Galkissa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Moratuwa">Moratuwa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Jaffna">Jaffna</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Negombo">Negombo</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pita Kotte">Pita
                    Kotte</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kandy">Kandy</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Trincomalee">Trincomalee</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kalmunai">Kalmunai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Galle">Galle</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Point Pedro">Point
                    Pedro</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Batticaloa">Batticaloa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Katunayaka">Katunayaka</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Valvedditturai">Valvedditturai</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Matara">Matara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Battaramulla South">Battaramulla South</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dambulla">Dambulla</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Maharagama">Maharagama</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Kotikawatta">Kotikawatta</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kathmandu">Kathmandu</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Pokhara">Pokhara</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Patan">Patan</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Biratnagar">Biratnagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Birganj">Birganj</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dharan Bazar">Dharan
                    Bazar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Bharatpur">Bharatpur</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Janakpur">Janakpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Dhangarhi">Dhangarhi</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Butwal">Butwal</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Mahendranagar">Mahendranagar</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Hetauda">Hetauda</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Nepalgunj">Nepalgunj</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;"
                    href="index.php?city=Bhairahawa">Bhairahawa</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Gulariya">Gulariya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Singapore">Singapore</a>
                |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kota Bharu">Kota
                    Bharu</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kuala Lumpur">Kuala
                    Lumpur</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Klang">Klang</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Johor Bahru">Johor
                    Bahru</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Subang Jaya">Subang
                    Jaya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Ipoh">Ipoh</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Kuching">Kuching</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Petaling Jaya">Petaling
                    Jaya</a> |
                <a style="text-decoration:none; color:#FFF; cursor:text;" href="index.php?city=Shah Alam">Shah Alam</a>
            </div>
        </div>



        <?php include ('include/footer.php'); ?>
        <!-- <?php include ('include/contact.php'); ?> -->

    </div>
    <!--End pagewrapper-->


    <?php include ('include/js.php'); ?>





</body>



</html>