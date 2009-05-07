<?php
  require "template.php";
  headers("AppuntiEsame - Chimica Organica - Status");
?>

<table class="wikitable" width="100%" style="text-align:center">
  <tr>
    <td><b>Pagina</b></td>
    <td><b>Presente</b></td>
    <td><b>Fatta</b></td>
    <td><b>Completa</b></td>
    <td><b>Perfetta</b></td>
  </tr>
  <tr>
    <td>Home Page</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/pa.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Famiglie</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Gruppi</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Isomeri</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/pa.png"></img></td>
    <td><img src="images/png/simboli/pa.png"></img></td>
  </tr>
  <tr>
    <td>Alcani e cicloalcani</td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/ok.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Alcheni ed alchini</td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
  <tr>
    <td>Composti aromatici</td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
    <td><img src="images/png/simboli/no.png"></img></td>
  </tr>
</table>
<br />
<h3>Symbols means</h3>
<table>
  <tr>
    <td><img src="images/png/ok.png"></img></td>
    <td>Done</td>
  </tr>
  <tr>
    <td><img src="images/png/pa.png"></img></td>
    <td>Partial</td>
  </tr>
  <tr>
    <td><img src="images/png/no.png"></img></td>
    <td>To do</td>
  </tr>
  <tr>
    <td><img src="images/png/ol.png"></img></td>
    <td>Old, to be checked and/or upadated</td>
  </tr>
  <tr>
    <td><img src="images/png/uk.png"></img></td>
    <td>Unknown (To be consider as no)</td>
  </tr>
</table>

<?php
  footer();
?>