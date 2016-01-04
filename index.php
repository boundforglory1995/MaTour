

<?php

include('views/header.php');
include('views/head.html');
include('views/searchbalk.html');
include('views/footer.html');




if(isset($_POST["codebalk"])){
 
$code = $_POST["codebalk"];
$kantine="J1B";
$Receptie = "AZ5";
$trappen= "7JQ";
$wcs="LSD";
$acteurs="Y3K";
$AVO="XTC";
$MD="A4M";
$Factory= "JS6";
$Artist="9DM";
$Grafisch="H8C"; 
$ICT="G7D";
$IVG="GHB";
$Podium="R1V";




switch ($code) {
  case "J1B":

  include ('kantine.php');
 
 
    break;
  case "AZ5":
    include('administratie.php');
  
    break;
  case "7JQ":


    include('trappen.php');
    
    break;
  case "LSD":

    Include('wc.php');
    break;

  case "G7D":
    Include('ICT.php');
    break;
  case "H8C":
    Include('grafisch.php');
    break;

  case "Y3K":
    Include('acteurs.php');
    break;

  case "R1V":
   Include('podiumtechniek.php');
   break;

   case "XTC":
   include('avo.php');
   break;

   case "GHB":
   include('ivg.php');
   break;

   case "A4M":
   include('md.php');
   break;

   case "9DM":
   include('artist.php');
   break;

  case "JS6":
  Include('Factory.php');
  break;  

  default :
  echo'<h1 class="wrong">'; 
  echo  "Voer een code in";
  echo '</h1>';


}



}



?>