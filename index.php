<!DOCTYPE html>

<html lang="de">
<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Home" />
<meta property="og:url" content="https://www.das-kleine-1x1-des-htmls.de/index.php" />
<meta property="og:image" content="https://www.das-kleine-1x1-des-htmls.de/favicon.png"/>
<title>1x1 des HTML's - Home</title>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="stylesheet" href="main_style_front.css">
</head>

<body>
    <div id="welcome-message"> <!-- Grüne Fläche mit "1x1 des HTML's" -->
        <div id="ws-inside">
            <h1>Wir präsentieren</h1>
            <h2>Das kleine 1x1 des HTML's</h2>
        </div>        
    </div>

        <div id="navigation"> <!-- Nav Leiste auf Landing Page -->
            <nav>
            <div class="navBar_box1">
                <a class="navBar_a" href="about-html.php">Über HTML</a>
            </div>
            <div class="navBar_box2">
                <a class="navBar_a" href="grundlagen.php">Grundlagen</a>
            </div>
            <div class="navBar_box3">
                <a class="navBar_a" href="data-entrys.php">Tag's</a>
            </div>
            <div class="navBar_box4">
                <a class="navBar_a" href="beispiele.php">Anwendungsbeispiele</a>
            </div>
        </nav>
        </div>
    <div id="maincontent"> 
    <!-- Main Content -->
    <br/>
    <h2 class="site-h2">Herzlich Willkommen bei unserem HTML-Wiki!</h2><br />
        <p>
            Ich möchte euch ganz herzlich begrüßen und ich freue mich das ihr hier seit!<br />
            Ihr findet auf dieser Seite alles was für den Einstieg in HTML wichtig ist, und was ihr benötigt um eure eigene Website zu schreiben.<br />
            Um zu demonstrieren was so alles möglich ist, habe ich dieses Wiki hier auch komplett selbst, in HTML, geschrieben. <br />
            Insgesamt sind es mehr als 850 Codezeilen welche ich von Hand eingetippt habe.<br />
            <br />
            <span id="zu_menues">Kommen wir nun zu den Menüs:</span><br /><br />
            <div id="show_m">Unter "Über HTML" findet ihr generelle Infos zur Sprache selbst, wie sie entstanden ist, wer sie entwicklet hat etc.<br />  Dies könnt nützlich sein, wenn wir mal einen Test über generelle Infos über das Thema Webprogrammierung schreiben.<br /><br /></div>
            <div id="show_m"> Unter "Grundlagen" findet ihr Infos wie eine HTML Seite grundlegend aufgebaut ist, was ihr tun müsst um eine<br /> eigene Webseite schreiben zu können und was ihr dabei zu beachten habt.<br /><br /></div>
            <div id="show_m">Im Menü "Tag's" findet ihr eine große Liste mit Kürzeln, die ihr später in eurem Code brauchen werdet.<br /> Ihr findet dort Definitionen, den Syntax und Bilder welche verdeutlichen sollen, was dieser Tag nun genau bewirkt.<br /><br /></div>
            <div id="show_m">Bei den "Anwendungsbeispielen" gibt es direkt einen Code der schon vorgeschrieben da steht.<br /> Mit Hilfe von Bildern könnt ihr euch anschauen, was genau <br />diese Zeile Code bewirkt.<br /> Außerderm findet ihr dort schon vorgefertigte Listen und Tabellen,<br />bis hin zu fertigen CSS Angaben.<br /><br /><br /></div>
            Ich hoffe das ich euch mit diesem Wiki weiterhelfen kann und freue mich sehr über eurer Feedback!
        <br /><br /></p>
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