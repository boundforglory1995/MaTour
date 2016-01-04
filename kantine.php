
<?php



echo '<div class="row">';
 echo ' <div class="small-12 large-12 columns banner panel">';
   echo ' <h3 class="contenttitel">Kantine</h3>';
    echo '<img class="contentimg" src="Fotos/kantine.jpg" height="300px" width="300px">';
   echo ' <div class="contexttext">';
     echo ' <p>
     Kantine.
   De kantine van het Media College heeft een breed assortiment aan broodjes en andere eet-drinkenswaar. Ook kun je zelf broodjes samenstellen.
De prijs kwaliteit is goed, omdat het elke dag verse broodjes zijn.
Er zijn warme dranken en soepen te koop. Onderandere koffie, een dagsoep, een noodlesoup en thee. 

  Ga naar de Administratie  </p>';

  echo 'Wat is je favoriete broodje?';
  echo '</br>';
 echo '<div class="large-2 medium-12 small-12 columns panel">';

echo '<input type="text" name="kantine">';





echo '</div>';


echo  '<div data-role="popup" id="popupPhotoPortrait" class="photopopup" data-overlay-theme="a" data-corners="false" data-tolerance="30,15">';
   echo '<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="Fotos/receptie.jpg" alt="Photo portrait">';
echo '</div>';


  
   echo ' </div> ';


?>