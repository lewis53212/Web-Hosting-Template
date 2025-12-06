<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Responsive Web Hosting and WHMCS Template</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto%7COswald:300,400,700' rel='stylesheet'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive-style.css" rel="stylesheet">
    <link href="css/colors/theme-color-1.css" rel="stylesheet" id="changeColorScheme">
    <link href="css/custom-style.css" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="preloader--spinners">
            <div class="preloader--spinner preloader--spinner-1"></div>
            <div class="preloader--spinner preloader--spinner-2"></div>
        </div>
    </div>
    <div class="wrapper">
        <header id="header">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        <a href="login.html" class="header--custom-btn btn--default hover">LOGIN</a>
                        <a href="index.html" class="navbar-brand">
                            <h1><span><i class="fa fm fa-server"></i>COLOR</span>HOST</h1>
                        </a>
                    </div>
                    <a href="login.html" class="header--custom-btn btn--default hover">LOGIN</a>
                    <div id="headerNav" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">HOME</a></li>
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">HOSTING<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shared-hosting.html">SHARED HOSTING</a></li>
                                    <li><a href="reseller-hosting.html">RESELLER HOSTING</a></li>
                                    <li><a href="vps-hosting.html">VPS HOSTING</a></li>
                                    <li><a href="dedicated-hosting.html">DEDICATED HOSTING</a></li>
                                </ul>
                            </li>
                            <li><a href="domain.html">DOMAIN</a></li>
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">PAGES<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">ABOUT</a></li>
                                    <li><a href="testimonial.html">TESTIMONIAL</a></li>
                                    <li><a href="login.html">LOGIN</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">BLOG</a></li>
                            <li class="active"><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="pageHeader" class="bg--overlay" data-bg-img="img/page-header-img/bg.png">
            <div class="container">
                <div class="page-header--title">
                    <h2>CONTACT PAGE</h2>
                </div>
                <div class="page-header--breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">HOME</a></li>
                        <li class="active">CONTACT</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="contact">
            <div class="container">
                <div class="contact--form">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = strip_tags(trim($_POST["contactName"]));
                        $email = filter_var(trim($_POST["contactEmail"]), FILTER_SANITIZE_EMAIL);
                        $subject = strip_tags(trim($_POST["contactSubject"]));
                        $message = strip_tags(trim($_POST["contactMessage"]));

                        $to = "help@lchosting.uk";
                        $headers = "From: $name <$email>\r\n";
                        $headers .= "Reply-To: $email\r\n";

                        if (mail($to, $subject, $message, $headers)) {
                            echo '<div class="alert alert-success">Thank you! Your message has been sent.</div>';
                        } else {
                            echo '<div class="alert alert-danger">Oops! Something went wrong. Please try again.</div>';
                        }
                    }
                    ?>

                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="contactName" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="contactEmail" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contactSubject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contactMessage" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn--default hover">SEND</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Your contact info, map, footer, etc. remain unchanged -->

    </div>

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-color-switcher.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
