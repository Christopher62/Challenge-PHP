<?php
include_once("connexionExo.php");
$query = mysqli_query($cnx, 'SELECT * FROM custom');
$color = mysqli_fetch_assoc($query);
?>
<style media="screen">
  #btnlog{
    <?php if($_SESSION['login']=="yes"){echo "display: none";} ?>
  }
  #admin, #adminform{
    margin: auto;
    text-align: center;
  }
  #bodyadmin{
    background-image: url("../img/ubuntux.jpg");
    background-repeat: no-repeat;
    background-size: 100% 980px; /* compatibilité avec grand écran non garanti pour le résultat */
  }
  #adminform{
    margin-top: 30%;
  }
  .navbar{
    background-color: <?php echo $color['navbar'];?>!important;
    border: none!important; /* important pour la page adminform */
  }
  .myinputs{
    margin: 10px auto;
    display: block;
    text-align: center;
    color: <?php echo $color['bouton'];?>;
  }
  button{
    color: <?php echo $color['bouton'];?>!important;
  }
  h1, h2, h3, h4, h5, h6{
    color: <?php echo $color['titre'];?>;
  }
  a{
    color: <?php echo $color['url'];?>!important;
  }
  #colour{
    margin: 10px auto;
    background-color: darkorchid;
    width: 500px;
    height: 285px;
    border-radius: 35px;
  }
  .form2 p{
    margin-top: 10px;
    text-align: center;
    font-weight: bold;
  }
  #toTop{
      position: fixed;
      bottom: 10px;
      right: 10px;
      text-decoration: none;
      display: none;
      color: purple;
  }
</style>
