<?php
require_once("config.php");

$scriptsURL = $harviewer_base."scripts/";
$cssURL = $harviewer_base."css/";

setcookie("searchJsonQuery", "true");
?>

<!doctype html>
<html>
<head>
    <title>HTTP Archive Viewer Test</title>
</head>
<body class="harBody">
    <div id="content" version="Test"></div>
    <!--[if IE]><script type="text/javascript" src="<?php echo $scriptsURL; ?>excanvas/excanvas.js"></script><![endif]-->
    <script src="<?php echo $scriptsURL; ?>jquery.js"></script>
    <script data-main="<?php echo $scriptsURL; ?>harViewer" src="<?php echo $scriptsURL; ?>require.js"></script>
    <link rel="stylesheet" href="<?php echo $cssURL; ?>harViewer.css" type="text/css"/>
</body>
</html>