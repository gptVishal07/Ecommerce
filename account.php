<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CYCLE SHOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container" width="auto">
        <div class="navbar">
            <div class="logo">
                <img src="https://www.logomoose.com/wp-content/uploads/2017/04/Travel-Cycle.jpg" alt="cycle logo" width="145px">
            </div>
            <nav> 
                <ul id="MenuItem">
                <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Product</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="account.php">Account</a></li>
            </ul>
            </nav>
            <img src="https://www.clker.com/cliparts/w/2/7/Z/F/P/cart-icon.svg.med.png" alt="cart image" height="30px" width="30px">
            <img src="https://tse2.mm.bing.net/th?id=OIP.gNMGg2NeHo5cW4ZgVQHYJwHaHa&pid=Api&P=0&h=180" class="menu-icon" alt="cart image" height="30px" width="30px" onclick="menutoggle()">
        </div>
    </div>
    <div class="account-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">

                    <img src="https://www.herocycles.com/dw/image/v2/BGQH_PRD/on/demandware.static/-/Sites-cycles-master/default/dw1abd5398/Products/Thorn/BSTHO24BLOR002/02.png?sh=523&sfrm=png" width="100%">
                </div>
                <div class="col-lg-6">

                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                        <form id="login-form" method="POST" action="login.php">
                            <?php if (isset($error)) { ?>
                                <p class="error-message"><?php echo $error; ?></p>
                            <?php } ?>
                            <input id="Name" type="text" placeholder="username" name="Name" >
                            <input id="password" type="password" placeholder="password" name="password">
                            <button type="submit" class="btn" name="submit">Login
                           
                            
                        </button>
                            <a href="">Forget Password</a>

                        </form>
                        <form id="reg-form"  method="POST" action="register.php">
                            <?php if (isset($error)) { ?>
                                <p class="error-message"><?php echo $error; ?></p>
                            <?php } ?>
                            <input id="Name" type="text" placeholder="username" name="u">
                            <input id="email" type="email" placeholder="email" name="e">
                            <input id="password" type="password" placeholder="password" name="pa">
                            <button type="submit" class="btn" name="button">Register
                           
                            
                        </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--------------------footer-------------------------------->
<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>1010 Avenue, sw 54321, chandigarh</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>9876543210 0</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>mail@info.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="https://www.logomoose.com/wp-content/uploads/2017/04/Travel-Cycle.jpg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                            elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fa fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fa fa-paper-plane" ></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023, All Right Reserved <a href="https://codepen.io/anupkumar92/">Vishal</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!--------------------js for toggle menu--------------------->
    <script>
        var MenuItem=document.getElementById("MenuItem");
        MenuItem.style.maxHeight="0px";
        function menutoggle(){
            if(MenuItem.style.maxHeight=="0px")
            {
                MenuItem.style.maxHeight="200px";
            }
            else{
                MenuItem.style.maxHeight="0px";
            }
        }
    </script>
     <!--js for toggle menu-->
     <script>
        var LoginForm = document.getElementById("login-form")
        var RegForm = document.getElementById("reg-form")
        var Indicator = document.getElementById("indicator")

        function register() {
            RegForm.style.transform = "translate(0px)";
            LoginForm.style.transform = "translate(0px)";
            Indicator.style.transform = "translate(100px)";
        }

        function login() {
            RegForm.style.transform = "translate(300px)";
            LoginForm.style.transform = "translate(300px)";
            Indicator.style.transform = "translate(0px)";
        }
        </script>
</body>
</html>