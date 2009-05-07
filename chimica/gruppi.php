<?php
  require "template.php";
  headers("AppuntiEsame - Chimica Organica - Gruppi");
?>

<table class="wikitable" width="100%" style="text-align:center">
  <tr>
    <td>Tipo</td>
    <td>Orientamento</td>
    <td>Gruppi</td>
    <td>Sostanza</td>
  </tr>
  <tr>
    <td rowspan="4">Attivanti</td>
    <td rowspan="4">Orto/para orinanti</td>
    <td>-NH<small><sub>2</sub></small></td>
    <td>Ammino</td>
  </tr>
  <tr>
    <td>-OH</td>
    <td>Idrossi</td>
  </tr>
  <tr>
    <td>-OCH<small><sub>3</sub></small></td>
    <td>Alossi</td>
  </tr>
  <tr>
    <td>-C<small><sub>6</sub></small>H<small><sub>5</sub></small></td>
    <td>Alossi</td>
  </tr>
  <tr>
    <td rowspan="8">Disattivanti</td>
    <td rowspan="4">Meta orinanti</td>
    <td>-NO<small><sub>2</sub></small></td>
    <td>Ammino</td>
  </tr>
  <tr>
    <td>-SO<small><sub>3</sub></small>H</td>
    <td>Idrossi</td>
  </tr>
  <tr>
    <td>-COOH</td>
    <td>Alossi</td>
  </tr>
  <tr>
    <td>-CHO</td>
    <td>Alossi</td>
  </tr>
  <tr>
    <td rowspan="4">Orto/para orinanti</td>
    <td>-F</td>
    <td rowspan="4">Alo</td>
  </tr>
  <tr>
    <td>-Cl</td>
  </tr>
  <tr>
    <td>-Br</td>
  </tr>
  <tr>
    <td>-I</td>
  </tr>
</table>

<?php
  footer();
?>
