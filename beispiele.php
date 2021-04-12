<!DOCTYPE html>

<html lang="de">

<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Anwendungsbeispiele" />
<meta property="og:url" content="https://www.das-kleine-1x1-des-htmls.de/beispiele.php" />
<meta property="og:image" content="https://www.das-kleine-1x1-des-htmls.de/favicon.png"/>
<title>1x1 des HTML's - Anwendungsbeispiele</title>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="stylesheet" href="main_style_front.css">
</head>

<body>
<div class="navBar_name_sub">
        <a class="navBar_a" href="index.php">HTML-Wiki</a>
    </div>
        <div id="navigation_sub">  
            <nav> 
            <div class="navBar_box1_sub">
                <a class="navBar_a" href="about-html.php">Über HTML</a>
            </div>
            <div class="navBar_box2_sub">
                <a class="navBar_a" href="grundlagen.php">Grundlagen</a>
            </div>
            <div class="navBar_box3_sub">
                <a class="navBar_a" href="data-entrys.php">Tag's</a>
            </div>
            <div class="navBar_box4_sub">
                <a class="navBar_a" href="beispiele.php">Anwendungsbeispiele</a>
            </div>
        </nav>
        </div> 
            <div id="maincontent"><br /><br />
                <h2 class="site-h2">Anwendungsbeispiele</h2><br /><br />
                <p>Auf dieser Seite findet ihr bereits vorhandenen Code und genau darunter sehr ihr was dieser Code bewirkt. <br />
                So könnt ihr hoffentlich nachvollziehen wie der Code mit dem Geschehen im Zusammenhang steht.<br /><br />
                Links seht ihr die HTML Angaben, und links die Stylevorgaben. Da HTML und CSS auf englisch aufbaut ist es recht logisch und schnell zu durchschauen </p><br /><br />
                <img src="images/1.png" alt="1" height="450px" width="900px"><br /><br /><br />
                <br /><br />
                <img src="images/1-1.png" alt="1-1" height="450px" width="900px"><br /><br /><hr><br />
                <img src="images/2.png" alt="2" height="450px" width="900px"><br /><br /><br />
                <br /><br />
                <img src="images/2-2.png" alt="2-2" height="450px" width="900px"><br /><br /><hr><br />
                <img src="images/3.png" alt="3" height="450px" width="900px"><br /><br /><br />
                <br /><br />
                <img src="images/3-3.png" alt="3-3" height="450px" width="900px"><br /><br /><hr><br />
                <img src="images/4.png" alt="4" height="450px" width="900px"><br /><br /><br />
                <br /><br />
                <img src="images/4-4.png" alt="4-4" height="450px" width="900px"><br /><br /><br />

                Bei Fragen meldet euch gern und stellt eure Frage!<br /><br />


                


            </div>

            <footer id="footer">
                <hr>
                <p class="footer_info_left_name">Programmierung & Design: Elias Müller</p>
            <a href="kontakt.php" class="footer_a" target="_blank">Kontakt</a>
            <a class="footer_a" href="https://github.com/HTML-Wiki/HTML-Wiki" target="_blank">Quellcode auf GitHub</a>
            <p class="footer_info_date">Datum: 
                <?php
                $datum = date("d.m.Y");
                $uhrzeit = date("H:i");
                echo $datum," - ",$uhrzeit," Uhr";
                ?>
                </p>
            </footer>       
</body>
</html>