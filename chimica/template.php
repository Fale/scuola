<?php
function headers($title)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo( $title ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css" media="screen,projection">/*<![CDATA[*/
        @import "http://<?php echo $_SERVER['HTTP_HOST']; ?>/style.css";
    /*]]>*/</style>

  </head>
  <body class="mediawiki">
    <div id="globalWrapper">
      <div id="column-content">
        <div id="content">
<?php
}

function navigation()
{
  $site = $_SERVER["HTTP_HOST"];
  ?>
  <div id="p-navigation" class="portlet">
    <h5>Pagine</h5>
    <div class="pBody">
      <ul>
        <li><a href="http://<?php echo $site ?>">Home Page</a></li>
        <li><a href="http://<?php echo $site ?>/famiglie.php">Famiglie</a></li>
        <li><a href="http://<?php echo $site ?>/gruppi.php">Gruppi</a></li>
      </ul>
    </div>
    <h5>Gruppi</h5>
    <div class="pBody">
      <ul>
        <li><a href="http://<?php echo $site ?>/alcani.php">Alcani e cicloalcani</a></li>
        <li><a href="http://<?php echo $site ?>/alcheniini.php">Alcheni ed alchini</a></li>
        <li><a href="http://<?php echo $site ?>/compostiaromatici.php">Composti aromatici</a></li>
      </ul>
    </div>
  </div>
  <?php
}

function footer()
{
  ?>
        </div><!--content-->
      </div><!--column-content-->
      <div id="column-one">
        <div id="p-logo" class="portlet">
          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" style="background-image: url(http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/png/logo.png);"></a>
        </div><!--p-logo-->
        <?php navigation(); ?>
      </div><!--column-one-->
      <div class="visualClear" />
      <div id="footer">
        © Fabio Alessandro Locati<br /><br />
        <a href="http://validator.w3.org/check?uri=referer">
          <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
        </a>
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
          <img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" />
        </a>
      </div><!--footer-->
    </div><!--globalWrapper-->	
  </body>
</html>
<?php
}
