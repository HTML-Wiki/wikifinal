<!DOCTYPE html>

<html lang="de">

<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Grundlagen" />
<meta property="og:url" content="https://www.das-kleine-1x1-des-htmls.de/grundlagen.php" />
<meta property="og:image" content="https://www.das-kleine-1x1-des-htmls.de/favicon.png"/>
<title>1x1 des HTML's - Grundlagen</title>
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
            <div id="maincontent-align-left">
                <br />
                <h2 class="site-h2">Die Grundlagen</h2><br /><br />
                <p class="p-center">Um Eine Webseite überhaupt programmieren zu können muss erstmal eine HTML-Datei erstellt und bearbeitet werden.<br />
                    Hier wird gezeigt was die ersten Schritte sind und wie man überhaupt anfängt einen Webseitencode zu schreiben.
                </p>
                    <hr><br />
                   
                    <i><h2 class="site-h2" style="text-decoration: underline;">Seitennavigation</h2></i>
                    <nav class="site-nav">
                        <ol name="site-nav-ol" class="site-nav-ol">
                            <h4>Dateien erstellen & bearbeiten</h4>
                            <li><a href="#vscode">VisualStudio Code installieren</a></li>
                            <li><a href="#bearbeiten">Eine HTML Datei erstellen & bearbeiten</a></li>
                            <li><a href="#ansehen">Eine HTML Datei im Browser ansehen</a></li>
                        </ol>
                        <ol name="site-nav-ol" class="site-nav-ol">
                            <h4>Das HTML Grundgerüst</h4>
                            <li><a href="#headerinfo">Der Header</a></li>
                            <li><a href="#bodyinfo">Der Body</a></li>
                        </ol>
                        <ol name="site-nav-ol" class="site-nav-ol">
                            <h4>Wie es weiter geht</h4>
                            <li><a href="#weiter">Wie es weiter geht</a></li>
                        </ol>
                    </nav><br /><br /><br /><br /><br />
                    <br /><br /><br /><p class="p-center"><i><b class="improve_h">Basics</b></i></p>
                <hr><br />
                <h3 class="abschnittsunterteilung-h3" id="vscode">  1. VisualStudio Code installieren</h3>
                <p>
                VisualStudio Code ist das Programm mit dem wir programmieren werden.<br /> Es bietet den Vorteil das es automatisch Fehler erkennt & markiert,<br />
                sowie den Code automatisch vervollständigt. Dies ist sehr hilfreich. <br />Hinweise zur Verwendung gibt es im nächsten Artikel. Beginnen wir also mit der Installation.
                <br />
                Als erstes öffnen wir die Installationsdatei, welche ihr <a href="VSCodeUserSetup-x64-1.54.3.exe">Hier</a> noch einmal herunterladen könnt.<br /><br />
                <img src="images/setupdatei.png" alt="setupdatei" height="50px" width="900px">
                <br /><br />
                Anschließend klicken wir auf Lizenzbedingungen "akzeptieren", weiter, weiter und installieren.<br /> Solltet ihr nach einem Installationsverzeichnis gefragt werden<br /> erstellt einfach unter eurem Dokumenordner einen Neuen Ordner und installiert es dort hinein.<br />
                Nach der Installation könnt ihr das Fenster schließen und das Programm öffnen.
            </p><br /><br />
                <h3 class="abschnittsunterteilung-h3" id="bearbeiten">  2. Eine HTML Datei erstellen & bearbeiten</h3>
                <p>
                1. Nach Öffnen von VisualStudio Code geht man oben links auf "File" und dann auf "Open Folder".<br />
                Anschließend navigiert ihr bis zu euerem Projektordner und wählt diesen aus.<br />
                2. Ihr geht wieder auf das kleine Symbol mit dem Dokument und dem + (siehe Bild), <br /> 
                Neben dem nun erschienen Ordnernamen, welcher auf der linken Seite zu sehen ist.<br /><br />
                    <img src="images/erstellen.png" alt="Auf das + Symbol drücken" height="250px" width="900px">
                <br /><br />
                3. Dort gebt ihr nun "index.html" ein um eine neue HTML Datei zu erstellen.<br />
                Bei dieser Gelegenheit könnt ihr auch gleich noch eine "style.css" Datei erstellen.<br />Nachdem ihr beide Dateien erstellt habt sollte es so aussehen:<br /><br />
                    <img src="images/beide_dateien.png" alt="Fertiges Bild" height="350" width="900">
                <br /><br />
                4. Fertig! Ihr könnt nun euren Code in die .html Datei schreiben.

                </p><br /><br />
                <h3 class="abschnittsunterteilung-h3" id="ansehen">  3. Eine HTML Datei im Browser öffnen und ansehen</h3>
                <br />
                <p>
                    1. Rechtsklick auf HTML Datei in eurem Projektordner<br />
                    2. Öffnen mit<br />
                    3. -> Firefox<br />
                    4. Nun könnt ihr eure Webseite ansehen<br />
                    <b>TIPP: Zum Umschalten zwischen dem Editor und Firefox könt ihr ganz einfach gleichzeitig die <br />Taste "Alt" + "Tab" drücken um zwischen den Fenstern zu wechseln</b>
                </p>
                <div id="gdh"><br /><br />
                <p id="grundlage" class="p-center"><br /><i><b class="improve_h">Grundlagen des HTML's</b></i></p><br />
                <h3 class="abschnittsunterteilung-h3" style="text-align: center;"> 4. Das HTML-Grundgerüst</h3>
                <p class="p-center">
                Ein HTML Code besteht aus 2 Bestandteilen. Den sogennanten Header (head Bereich) und den Body. <br />Im Header stehen die Details wie den Seitentitel, die Sprache der Seite, die Tastaturbelegungen und andere Sachen die für den Besucher der Seite<br /> unwichtig / unsichtbar sind. Im Body Bereich steht alles was der Besucher der Seite sieht.        
            <br /> In diese 2 Bereiche schreibt man dann seinen Webseitencode.<br /><br />
        </p> </div>
        <hr>
        <div id="headerinfo">
        <h3 id="headerinfo" class="abschnittsunterteilung-h3">Der Header</h3>
        <p>
            Der Header, im Code als < head > und "< /head >"" (ohne Lerzeichen)<br /> geschrieben, beinhaltet wie bereits erwähnt alle Infos die für den Nutzer nur geringfügig <br />oder gar nicht wichtig sind. <br /><br />
            Folgende Codezeilen stehen meist im Header:<br /><br />
            Unter anderem:<br />
            "< title >< /title >"<br />
            ->Gibt den Seitentitel im Browsertab an<br /><br />
            < meta charset="UTF-8" ><br />
            -> Gibt an, das das Tastaturlayout das Deutsche ist und Sonderzeichen erlaubt sind<br /><br />
            < link rel="stylesheet" href="style.css" ><br />
            -> Verbindet die Index.html mit einer externen <a href="#css">Style-Datei</a><br /><br />
            < link rel="shortcut icon" href="BILD.DATEIENDUNG" type="image/x-icon" ><br />
            -> Gibt das kleine Bild das im Browsertab zu sehen ist an<br />
        </p>
    </div>
        <hr>
        <div id="bodyinfo">
        <h3 id="bodyinfo" class="abschnittsunterteilung-h3">Der Body</h3>
        <p>
            In den Body schreibt man alles was der Besucher der Seite sehen soll. <br />Ob Überschriften, Texten, Bildern, Links oder Tabellen. Alles schreibt man dort rein.<br />
            <br /> <b><i>Grundlegende Regeln innerhalb des Bodys</i></b><br /><br />
            • Entertaste hat keine Auswirkung bei der Ausrichtung von Texten im Body<br />
• Mehr als ein Leerzeichen wird ignoriert<br />
• Textumbruch von Browserfenstergröße bestimmt<br />
• Standartschrift der Browser: Times oder Times New Roman<br /><br />
<b><i>Grundlegende Tag's innerhalb des Bodys - Gestaltung immer in <a href="#css">CSS-Datei</a></i></b><br /><br />
<b>Überschriften:</b><br /><br />
• Hauptüberschrift: < h1 > (größtmögliche Schrift Heading 1)<br />
• Überschrift zweiter Ordnung: < h2 ><br />
• Insgesamt 6 Größen: < h1 > bis < h6 ><br /><br />
<b>Absätze: (Absatzausrichtung wird in .css Datei definiert)</b><br /><br />
• Jeder Absatz in < p > ... < /p ><br />
• Jeder neue Absatz beginnt mit neuer Zeile<br /><br /><br />
<b>Verlinkungen</b><br />
•Jeder Link wird mit < a href="LINKZIEL (Kann Datei sein -> Dann z.b. unterseite.html |<br />  Kann aber auch Webseite sein, -> Dann http://ZIELADRESSE.de">TEXT WO MAN DRAUFDRÜCKEN KANN< /a >
<br /><br />
<b>Listen</b><br /><br />
•Es gibt Ungeordnete Listen < ul > und Geordnete Listen < ol ><br />
•Einen Listeneintrag macht man mit < li >TEXT< /li ><br />
•Man kann auch eine Link-Liste bzw. eine Navigationsleiste erstellen.<br />
-> Einfach einen Listeneintrag erstellen und statt dem Text ein < a > Tag benutzen<br />
 -> < li >< a >TEXT< /a >< /li >
        </p>
    </div>
           <hr><br />
           <p id="code_schreiben" class="p-center"><br /><i><b class="improve_h">Den Code schreiben</b></i></p>
           <br />
           <p class="p-center">
               <b>Der allererste Schritt ist sich einen genauen Plan zu machen!<br />
               <i>---Idee---Thema---Inhalt---Layout---Skizze---</b></i><br /><br /><br />
               Anschließend erstellt man sich, wie weiter oben beschrieben, eine HTML Datei und beginnt mit folgendem Grundgerüst:<br />
               <span class="syntax">Kann übernommen werden - Aber es müssen die Leerzeichen vor und nach der spitzen Klammer entfernt werden!</span><br /><br />
               <div class="code">
                   <p id="grundcode">
                       <code>
                           < !DOCTYPE HTML ><br />
                           < html lang="de" ><br />
                       < head><br />
                       < meta charset="UTF-8" ><br />
                       < title>EUER SEITENTITEL< /title ><br />
                       < link rel="stylesheet" href="style.css" ><br />
                       < /head ><br /><br />
                       
                       < body ><br />
                       <br />
                       < /body ><br />    
                    < /html >
                        </code></p>
                       </div>
           </p>
           <p> <br /><br />
            <p id="weiter" class="p-center"><br /><i><b class="improve_h">Wie es weiter geht</b></i></p>
            <p class="p-center">Um zu beginnen öffnet ihr einfach das weiter oben bereits installierte Programm <a href="#vscode">VisualStudio Code von Microsoft</a>,<br /> oder den einfachen Editor welchen ihr über ganz einfach über die Windows Suche öffnen könnt.</p>
            <p class="p-center">Im Menü <a href="data-entrys.php">Tag's</a> findet ihr in der Seitennavigation verschiedene Arten von Inhalten die ihr <br />in eure Seite einfügen könnt. Kopiert sie euch einfach oder <br />schreibt sie ab. Kleien Anpassungen sind da notwendig und natürlich müsst ihr eure Inhalt <br /> selber eintragen.</p>
   </p>
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