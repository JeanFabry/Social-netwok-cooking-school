<?php
session_start();

include('secret.php');


try{
    $bdd= new PDO("mysql:host=localhost;dbname=MyBocus;charset=utf8", "$user", "$pwd", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pointage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
    <div class="attendanceSec">
        <div class="date">w
            <p>coucou</p>
        </div>
        <div class="attendances">
            <div class="attendanceLeft">
                <p>Morning</p>
                <button class="buttonAttendanceLeft"> 09:00 </button>
                <p>Active from 08:45 to 09:00.</p>
            </div>
            <div class="attendanceRight">
                <p>Evening</p>
                <button class="buttonAttendanceRight"> 17:00 </button>
                <!-- <form action="./pointage.php" method="POST">
                    <input type="submit" name="buttonAttendanceRight" class="buttonAttendanceRight" value="17:00"> </input>
                </form> -->
                <p>Active from 17/00 to 21:00.</p>
            </div>
        </div>

    </div>

    <script src="./pointage.js"></script>
</body>

</html>