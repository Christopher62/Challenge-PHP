<?php
session_start();
include_once("connexionExo.php");
if( isset($_SESSION['login']) )
{
  if($_SESSION['login']=="yes"){
    // echo "Bonjour ".$_SESSION['data']['pseudo']."<br>";
    header("location:../index.php");
    // echo "<input type='button' name='button' value='Log Out' onclick=window.location.href='adminDestroy.php'>";
  }else{
    echo '<form action="admincheck.php" method="POST" id="adminform">
          <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off"><br>
          <input type="password" name="password" placeholder="Password" autocomplete="off"><br>
          <input type="submit" name="submit" value="Connexion">
          </form>';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <?php include_once("style.php");?>
  </head>
  <body>
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
  </body>
</html>
<body id="bodyadmin">

</body>
