<!DOCTYPE html>

<html lang="de">

<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Kontakt" />
<meta property="og:url" content="https://www.das-kleine-1x1-des-htmls.de/kontakt.php" />
<meta property="og:image" content="https://www.das-kleine-1x1-des-htmls.de/favicon.png"/>
<title>1x1 des HTML's - Kontakt</title>
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
            <div id="maincontent">
                <br />
                <h2 class="site-h2">Falls ihr Feedback oder Probleme habt könnt ihr mich hier erreichen :)</h2><br /><br />
        <form id="contactform" name="contactform" action="formmailer.php" method="post">
            <label for="name">Ihr Name:</label><br />
            <input id="name" name="name" type="text" placeholder="Ihr Name"><br /><br />
            <label for="email">Ihre Emailadresse:</label><br />
            <input type="email" id="email" name="email" placeholder="Ihre Emailadresse"><br /><br />
            <label for="message">Ihre Nachricht an Uns:</label><br />
            <input type="text" name="message" id="contactform_message" placeholder="Nachricht"><br /><br />
            <input type="button" id="submitbtn_form" value="Absenden">
            <br />                


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