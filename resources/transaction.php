<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">ScrApp  </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
  
                    <li>
                        <a href="shop_page.php">Notification <i class="fa fa-user fa-fw"></i>
                        <span id="badge_shop" class="badge">2</span></a>
                    </li>
                    <li>
                        <a href="transaction.php">Transaction
                         <i class="fa fa-list-alt" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#contact">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
    <div class="col-sm-6 col-sm-offset-3" id="trans_iconHistory">
                <div class="col-sm-12" id="history">
                    <div class="col-sm-12">
                        <h5><i id="trans_icon" class="fa fa-list-alt" aria-hidden="true"></i> TRANSACTION HISTORY</h5>
                        <div class="table-responsive"> 
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>TRANSACTION DATE</th>
                                    <th>TYPE</th>
                                    <th>JUNKSHOP</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>DEC 25,2016</td>
                                    <td>BOTE</td>
                                    <td>Scrapper Junk</td>
                                </tr>
                                <tr>
                                    <td>DEC 25,2016</td>
                                    <td>BOTE</td>
                                    <td>Scrapper Junk</td>
                                </tr>
                                    <td>DEC 25,2016</td>
                                    <td>BOTE</td>
                                    <td>Scrapper Junk</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>




        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>


    </body>
    </html>