<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>e_cart login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- form section start -->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html">E cart</a></h1>
                    <div class="alert alert-danger">
                        <?php echo  '<label class="text-danger">' . $this->session->flashdata("error") . '</label>';
                        ?>
                    </div>

                </div>
                <div class="workinghny-block-grid">
                    <div class="form-right-inf">
                       
                        <div class="login-form-content">
                            <h2>Admin Login</h2>
                            <form action="<?php echo base_url().'SigninController/account_access' ?>" class="signin-form" method="post">
                                <div class="one-frm">
                                    <input type="text" name="name" placeholder="Name" required="" autofocus>
                                </div>
                                <div class="one-frm">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>
                                <label class="check-remaind">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="remember">Remember Me</p>

                                </label>
                                <button type="submit" class="btn btn-style mt-3">Login </button>
                                <p class="already">Don't have an account? <a href="#">Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="copyright text-center">
            <div class="wrapper">

            </div>
        </div>

    </section>

</body>

</html>
