<?php

if(!empty($_POST['value']))
    {
    	$value = $_POST['value'];
    }
?>

<html>
    <head>
        <meta http-equiv="refresh" content="5">
    </head>
    <body>
        <h4 style="color: white; text-align: center; font-size: 4rem; padding-bottom: 0; padding-top: 0;" id="auto"><?php echo $value; ?><span style="font-size: 2rem">pH</span></h4>
    </body>
</html>
