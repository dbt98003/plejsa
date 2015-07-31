<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

if(isset($_POST['submit'])) {

	/* Author: Hawkan Bergman */

	/* Require our JSON class */
	require_once("classes/class_json.php");

	/* Create a new JSON Object */
	$json = new json();

	/* Insert data into our JSON file */
	/* Make sure the last array is populated witht the correct values and data */
	$json->insert('plejsa.json', 'plejses', 'plejs', array('plejs_name' => $_POST["plejs_name"], 'plejs_desc' => $_POST["plejs_desc"], 'plejs_long' => $_POST["plejs_long"], 'plejs_lat' => $_POST["plejs_lat"]));
	
}
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="long">Long</div>
        <div id="lat">Lat</div>

        <form id="plejsForm" method="post" action="">
            <div class="field">
                <input type="text" placeholder="Name of place" id="plejs_name" name="plejs_name" />                
            </div>
            <div class="field">
                <textarea placeholder="Description" id="plejs_desc" name="plejs_desc"></textarea>                
            </div>
            <div class="field">
                <input type="text" value="" placeholder="Longitud" id="plejs_long" name="plejs_long" />                
            </div>
            <div class="field">
                <input type="text" value="" placeholder="Latitud" id="plejs_lat" name="plejs_lat" />                
            </div>
            <div class="field button-field">
                <input type="submit" name="submit" id="submit" value="Submit">
            </div>
        </form>
        

        <div id="jsonData">JSON</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
