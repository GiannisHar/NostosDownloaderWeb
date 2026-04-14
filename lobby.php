<!DOCTYPE html>
<html>

<?php session_start();

if (!isset($_SESSION['ID'])) {
    header("Location: logger.php");
    exit;
}?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Lobby</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php include "nav.php"?>
<?php include 'topnav.php'?>


<div class="content-view">
    <div class="headdivers">
    <h1>NGASoft's Nostos</h1>
    <h2>Welcome <?php echo $_SESSION['ID'] ?></h2>
</div>
<ul class = "downloader">
    
   <li onclick="window.location.href='https://github.com/GiannisHar/NostosDownloaderWeb/releases/download/nostos/app-release.apk'">Download APK</li>
   <li onclick="window.location.href='https://nostos-web.vercel.app/'">Download WEB</li>
   <li onclick="window.location.href='https://github.com/GiannisHar/NostosDownloaderWeb/releases/download/nostos/NostosWindows.zip'">Download Windows</li>
</ul>
</div>
</body>

</html>