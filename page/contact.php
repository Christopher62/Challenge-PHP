<?php
session_start();
include_once("connexionExo.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de Christopher</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include_once("style.php");?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Left -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <?php if($_SESSION['login']=="yes"){echo "<a href='admin.php'>Administration</a>";} ?>
                    </li>
                    <!-- <?php echo "<button type='button' class='btn btn-default navbar-btn' id='btnlog' onclick=window.location.href='admincheck.php'>Log In</button>";?> -->
                    <li>
                        <a id="btnlog" href="admincheck.php">Log In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-4">
                <!-- Contact form -->
                <form enctype="multipart/form-data" action="admin.php" method="POST" onsubmit="return verifForm(this)">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Pseudo:</label>
                            <input type="text" class="form-control" name="pseudo" onsubmit="verifPseudo(this)">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="firstname" onsubmit="verifFname(this)">
                        </div>
                    </div>
                    <!-- <div class="control-group form-group">
                        <div class="controls">
                            <label>Profil picture:</label>
                            <input type="file" class="form-control" name="profpic">
                        </div>
                    </div> -->
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" name="email" value="@" onsubmit="verifMail(this)">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Game play:</label>
                            <input type="text" class="form-control" name="game">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Birth Date:</label>
                            <input type="text" class="form-control" name="date" onsubmit="verifDate(this)">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="80" class="form-control" name="msg"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="submit1" class="btn btn-primary" value="Send Message">
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <a href="#" id="toTop" class="fa fa-chevron-circle-up fa-2x"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>
