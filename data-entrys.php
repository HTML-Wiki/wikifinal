<!DOCTYPE html>

<html lang="de">

<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Tag's" />
<meta property="og:url" content="https://www.das-kleine-1x1-des-htmls.de/data-entrys.php" />
<meta property="og:image" content="https://www.das-kleine-1x1-des-htmls.de/favicon.png"/>
<title>1x1 des HTML's - Tag's</title>
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
                <table id="grundgeruesthtml5" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">HTML5-Grundgerüst</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="html-seitenaufbau.htm">&#60;!DOCTYPE html&#62;</a></td>
                            <td>HTML5-Doctype, erste Zeile der HTML-Datei</td>
                        </tr>
                    
                        <tr>
                          <td><a href="html-seitenaufbau.htm">&#60;html lang="de"&#62;</a></td>
                            <td>Umschließt den kompletten Inhalt und es wird im Inhalt als Sprache Deutsch verwendet</td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;head&#62;</a></td>
                            <td>Head-Bereich, der Metainformationen über die Webseite enthält (werden nicht im Browserfenster angezeigt)</td>
                        </tr>
                    
                        <tr>
                            <td><a href="metatags-metaelemente.htm">&#60;meta charset="UTF-8"&#62;</a></td>
                            <td>Verwendete Codierung - mit UTF-8 können Sonderzeichen direkt genutzt werden (im Deutschen z.B. Umlaute öäü)</td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;title&#62;HTML5-Grundgerüst&#60;/title&#62;</a></td>
                            <td>
                <!--             
                Titel der Seite: wird im Browserkopf und bei Suchmaschinen in der ersten Zeile angezeigt
                 -->
                Wichtig! Titel der Seite - hat mehrere wichtige Funktionen:
                <ul>
                    <li>Titelzeile im Browserfenster</li>
                    <li>Namen von gesetzten Lesezeichen/Bookmarks</li>
                    <li>Liste der bereits besuchten Seiten</li>
                    <li>für den Eintrag bei Suchmaschinen in der ersten Zeile</li>
                </ul>
                (engl. title=Titel)            
                            </td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;/head&#62;</a></td>
                            <td></td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;body&#62;</a></td>
                            <td>Umschließt den Inhalt, der im Browserfenster angezeigt wird </td>
                        </tr>
                    
                        <tr>
                            <td class="quellcode_einr1">INHALT</td>
                            <td>Hier kommt nun der Inhalt (und alle weiteren HTML-Befehle, die den Inhalt strukturieren)</td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;/body&#62;</a></td>
                            <td></td>
                        </tr>
                    
                        <tr>
                            <td><a href="html-seitenaufbau.htm">&#60;/html&#62;</a></td>
                            <td>Ende der HTML-Seite</td>
                        </tr>
                    </tbody>
                </table>
                        
                  
                
                
                
                <table id="bereiche_html5" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Bereiche einteilen über HTML5</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML5-Befehle</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="html-5-strukturierende-elemente.htm">&#60;header&#62; ... &#60;/header&#62;</a></td>
                            <td>Bereich für Kopf (nicht verwechseln mit &#60;head&#62;!)</td>
                        </tr>
                
                        <tr>
                            <td><a href="html-5-strukturierende-elemente.htm">&#60;nav&#62; ... &#60;/nav&#62;</a></td>
                            <td>Bereich Navigation (Steuerung)</td>
                        </tr>
                
                        <tr>
                            <td><a href="html-5-strukturierende-elemente.htm">&#60;section&#62; ... &#60;/section&#62;</a></td>
                            <td>Gruppiert Elemente</td>
                        </tr>
                
                        <tr>
                            <td><a href="html-5-strukturierende-elemente.htm">&#60;article&#62; ... &#60;/article&#62;</a></td>
                            <td>Bereich für Inhalt</td>
                        </tr>
                
                        <tr>
                            <td><a href="html-5-strukturierende-elemente.htm">&#60;aside&#62; ... &#60;/aside&#62;</a></td>
                            <td>Bereich für Zusatzinformationen zum Inhalt</td>
                        </tr>
                
                        <tr>
                            <td><a href="html-5-strukturierende-elemente.htm">&#60;footer&#62; ... &#60;/footer&#62;</a></td>
                            <td>Bereich für Fuß</td>
                        </tr>
                
                    </tbody>
                </table>
                
                
                
                
                
                
                
                <table id="bereich_textstruktur" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Text strukturieren</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="html-ueberschriften.htm">&#60;h1&#62; … &#60;/h1&#62;</a></td>
                            <td>Hauptüberschrift - wichtig, sollte einmal auf jeder einzelnen Seite kommen<br />
                                (engl. h = headline = Überschrift)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="html-ueberschriften.htm">&#60;h2&#62; … &#60;/h2&#62;</a><br />
                                bis<br />
                                <a href="html-ueberschriften.htm">&#60;h6&#62; … &#60;/h6&#62;</a><br />
                            
                            </td>
                            <td>Unterüberschriften - sollten in der logischen Reihenfolge verwendet werden. Nach &#60;h2&#62; kommt &#60;h3&#62;</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;"><a href="html-absatz-p-tag.htm">&#60;p&#62; … &#60;/p&#62;</a></td>
                            <td>Absatz - nach dem Absatz wird automatisch Platz gehalten<br />
                                (engl. p = paragraph = Absatz)</td>
                        </tr>
                        <tr>
                            <td><a href="html-umbruch.htm">&#60;br&#62;</a></td>
                            <td>erzwungener Zeilenumbruch (Zeilenende)<br />
                                (engl. br = break = Umbruch)</td>
                        </tr>
                        <tr>
                            <td><a href="html-trennlinie.htm">&#60;hr&#62;</a></td>
                            <td>Trennlinie - trennt unterschiedliche Inhalte<br />
                                (engl. hr = horizontal ruler = horizontale Linie)</td>
                        </tr>
                
                    </tbody>
                </table>
                
                
                
                
                
                
                
                
                
                
                
                
                <table id="bereich_textstellen" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Textstellen hervorheben</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="html-texte-formatieren.htm">&#60;b&#62; … &#60;/b&#62;</a></td>
                            <td>Schrift wird fett angezeigt<br />
                                (engl. b = bold = fett)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="html-texte-formatieren.htm">&#60;strong&#62; … &#60;/strong&#62;</a></td>
                            <td>wichtiger Bereich, Schrift wird fett angezeigt<br />
                                (engl. strong = kräftig, überzeugend)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="text-kursiv-html-tag-i-em.htm">&#60;i&#62; … &#60;/i&#62;</a></td>
                            <td>Schrift wird kursiv angezeigt<br />
                                (engl. i = italic = kursiv, schräg)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="text-kursiv-html-tag-i-em.htm">&#60;em&#62; … &#60;/em&#62;</a></td>
                            <td>hervorgehobener Bereich, Schrift wird kursiv dargestellt<br />
                                (engl. em = emphasis = betont, Hervorhebung)
                            </td>
                        </tr>
                
                        <tr>
                            <td><a href="hochstellung-sup-tiefstellung-sub.htm">&#60;sup&#62; … &#60;/sup&#62;</a></td>
                            <td>hochgestellte Schrift, z.B. Fußnote<sup>2</sup><br />
                                (engl. sup = superscript, zu Deutsch hochstellen)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="hochstellung-sup-tiefstellung-sub.htm">&#60;sub&#62; … &#60;/sub&#62;</a></td>
                            <td>tiefgestellte Schrift, z.B. H<sub>2</sub>O<br />
                                (engl. sub = subscript, zu Deutsch tiefstellen)
                            </td>
                        </tr>
                
                        <tr>
                            <td>&#60;del&#62; … &#60;/del&#62;</a></td>
                            <td>durchstrichener Text, sprich Inhalt gilt nicht mehr<br />
                                (engl. del = deleted = gelöscht)
                            </td>
                        </tr>
                        <tr>
                            <td>&#60;ins&#62; … &#60;/ins&#62;</a></td>
                            <td>neuer Inhalt im Text (gut um Änderungen hervorzuheben)<br />
                                (engl. ins = inserted = neu eingefügt)
                            </td>
                        </tr>
                        <tr>
                            <td>&#60;small&#62; … &#60;/small&#62;</a></td>
                            <td>für das "Kleingedruckte" im Text<br />
                                (engl. small = klein)
                            </td>
                        </tr>
                
                
                    </tbody>
                </table>
                
                
                
                <table id="bereich_links" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Links, Verweise</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="interne-links.htm">&#60;a href="URL"&#62;BESCHREIBUNG&#60;/a&#62;</a></td>
                            <td>für interne und externe Links. <br />"Beschreibung" wird später im Browser
                
                          als Link (blau unterstrichen) angezeigt und kann angeklickt werden. 
                          Die URL innerhalb des Attributs href wird aufgerufen<br />
                          (engl. a = anchor = Anker)<br />
                          (engl. href = hyper reference = Hypertext-Referenz)
                            </td>
                        </tr>
                        
                        <tr>
                            <td><a href="dateinamen.htm">&#60;a href="<b>index.htm</b>"&#62;STARTSEITE&#60;/a&#62;</a><br />
                            <a href="dateinamen.htm">&#60;a href="<b>index.html</b>"&#62;STARTSEITE&#60;/a&#62;</a>
                            </td>
                            <td>interner Link (als Endung kann sowohl .html wie auch .htm genutzt werden)
                            </td>
                        </tr>
                        
                        <tr>
                            <td><a href="externe-links.htm">&#60;a href="<b>https://www.php-kurs.com/</b>"&#62; …&#60;/a&#62;</a></td>
                            <td>externer Link
                            </td>
                        </tr>
                
                        <tr>
                            <td><a href="externe-links.htm">&#60;a href="https://www.php-kurs.com/" <b>target="_blank"</b>&#62; … &#60;/a&#62;</a></td>
                            <td>neues (leeres) Browserfenster wird beim Anklicken geöffnet<br />
                            (engl. target = Ziel, blank = leer)
                            </td>
                        </tr>
                
                        <tr>
                            <td><a href="link-als-sprungmarke.htm">&#60;a href="<b>#xy</b>"&#62; … &#60;/a&#62;</a></td>
                            <td>Sprungmarke (wird durch # gekennzeichnet) zu einem bestimmten Punkt gesprungen,
                          hier "xy". Der Punkt muss über das Attribut id definiert sein 
                            </td>
                        </tr>
                
                        <tr>
                            <td><a href="email-verlinken.htm">&#60;a href="<b>mailto:axl@uxl.de</b>"&#62;axl@uxl.de&#60;/a&#62;</a></td>
                            <td>So kann eine E-Mail-Adresse eingegeben werden. Durch Anklicken
                          öffnet sich ein E-Mail-Programm (sofern installiert) und die
                          E-Mail-Adresse ist bereits eingegeben.<br />
                          (engl. mailto = sende E-Mail an)
                            </td>
                        </tr>        
                    </tbody>
                </table>
                
                
                
                
                <table id="bereich_auszaehlungen" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Aufzählungen</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="html-listen.htm">&#60;li&#62;AUFZÄHLUNGSPUNKT&#60;/li&#62;</a></td>
                            <td>Jeder einzelne Punkt bei einer Aufzählung muss von diesem HTML-Befehl umschlossen werden.<br />
                                (engl. li = list item = Listeneintrag)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="html-listen.htm">&#60;ul&#62; … &#60;/ul&#62;</a></td>
                            <td>Art der Auflistung. Umschließt alle einzelnen &#60;li&#62;<br />
                                Wird für Aufbau der Seitennavigation benötigt und andere Aufzählungen 
                                (engl. ul = unordered list = unsortierte Liste)
                            </td>
                        </tr>
                        <tr>
                            <td><a href="html-listen.htm">&#60;ol&#62; … &#60;/ol&#62;</a></td>
                            <td>Art der Auflistung. Umschließt alle einzelnen &#60;li&#62;<br />
                                Die einzelnen Listenpunkte bekommen dann entsprechende Nummerierung 1., 2., 3. usw.
                                (engl. ol = ordered list = nummerierte Liste)
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                
                
                <table id="bereich_div_span" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Bereiche definieren</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><a href="div-span-bereiche-definieren.htm">&#60;div id="NAME"&#62;BEREICH&#60;/div&#62;</a></td>
                            <td>Über DIV wird ein Bereich definiert. Diesen Bereich kann man über CSS dann ein Design „überstülpen“. Angesprochen wird der Bereich über seinen ID-Namen. Bei DIV handelt es sich um ein Blockelement - das Blockelement nutzt die komplette Bildschirmbreite.<br />
                            (engl. div = division = Bereich, Gruppierung von Elementen)
                            </td>
                        </tr>
                
                        <tr>
                            <td>&#60;div <b>class="NAME"</b>&#62;BEREICH&#60;/div&#62;</td>
                            <td>Der DIV-Bereich kann per CSS über seinen Klassen-Namen angesprochen werden.<br />
                            (engl. class = Klasse)
                            </td>
                        </tr>
                
                        <tr>
                            <td><a href="div-span-bereiche-definieren.htm">&#60;span id="NAME"&#62;BEREICH&#60;/span&#62;</a></td>
                            <td>Mit SPAN können Textstellen markiert werden und diese dann über CSS mit Design versehen werden. Das SPAN-Element ist ein Inline-Element, was den Unterschied zum DIV-Element ausmacht. <br />
                            (engl. span = Abgrenzung, Bereich)
                            </td>
                        </tr>
                        <tr>
                            <td>&#60;span class="NAME"&#62;BEREICH&#60;/span&#62;</td>
                            <td>Kann über den Klassennamen und CSS mit Design versehen werden.
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                
                
                
                <table id="bereich_sonstiges" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Kommentieren, Auskommentieren</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;">&#60;!-- KOMMENTAR --&#62;<br /><br />
                            <a href="html-code-deaktivieren.htm">&#60;!--</a><br /> 
                            QUELLCODE ohne Wirkung<br /> 
                            <a href="html-code-deaktivieren.htm">--&#62;</a>
                            
                            </td>
                            <td>Über diese Anweisung können Kommentare im HTML-Code gemacht werden bzw. Teile des HTML-Codes auskommentiert werden. Somit sind diese Teile für einen Browser nicht existent. Das ist z.B. gut zum Testen von HTML-Befehlen.
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                
                <table id="bereich_farben" class="befehlsdarstellung">
                    <thead>
                        <tr>
                            <th colspan="2">Farben in HTML</th>
                        </tr>
                        <tr class="spaltenbes">
                            <th>HTML-Befehle (HTML-TAG)</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td style="width: 50%;"> - </td>
                            <td>Farben werden über CSS genutzt!<br />
                            Früher wurden auch mit Attributen bei HTML-TAGs Farben festgelegt, was aber im Sinne der Trennung von Inhalt und Design heutzutage keinen Sinn mehr macht! Daher gehören Farben (Design) in den CSS-Bereich (zur Übersicht von <a href="css-definitionen-uebersicht.htm"> CSS-Anweisungen</a>)!
                            </td>
                        </tr>
                    </tbody>
                </table><br /><hr>

                <h2 class="site-h2">CSS Vorgaben</h2><br /><br />
                <table width="100%" border="0">
                    <thead>
                          <tr >
                              <th>Befehl</th>
                              <th>Bedeutung</th>
                              <th>weitere mögliche Angaben</th>
                          </tr>
                    </thead>
                          <tbody>
                          <tr>
                              <td class="tabelle_hervorhebung" colspan="3">Schrift </td>
                          </tr>
                            
                  
                          <tr>
                              <td><a href="css-font-family.htm">font-family</a></td>
                              <td>Schriftart</td>
                              <td>Arial, Times New Roman, etc.</td>
                          </tr>
                          <tr>
                            <td><a href="css-font-size.htm">font-size</a></td>
                              <td>Schriftgröße</td>
                              <td>numerischer Wert in pt (Punkt) mm oder cm</td>
                          </tr>
                          <tr>
                              <td><a href="css-einsetzen.htm">color</a></td>
                              <td>Schriftfarbe</td>
                              <td>red, green, white usw. oder HTML Farbangabe</td>
                          </tr>
                          <tr>
                              <td>font-variant</td>
                              <td>Schriftvariante</td>
                              <td>normal, small-caps</td>
                          </tr>
                          <tr>
                              <td><a href="css-font-weight.htm">font-weight</a></td>
                              <td>Schriftgewicht</td>
                              <td>normal, bold, bolder, lighter</td>
                          </tr>
                          <tr>
                              <td>font-style</td>
                              <td>Schriftstil</td>
                              <td>normal, oblique, italic</td>
                          </tr>
                  
                          <tr>
                              <td class="tabelle_hervorhebung" style="padding-top: 20px;" colspan="3">Textgestaltung </td>
                          </tr>
                          <tr>
                              <td>text-align</td>
                              <td>Textausrichtung</td>
                              <td>left, right, center, justify (Blocksatz)</td>
                          </tr>
                          <tr>
                            <td><a href="schrift-zeilenhoehe-abstaende.htm">line-height</a></td>
                              <td>Zeilenabstand (Durchschuss)</td>
                              <td>numerischer Wert in pt (Punkt) mm oder cm</td>
                          </tr>
                          <tr>
                              <td>text-decoration</td>
                              <td>Textgestaltung</td>
                              <td>underline, overline, line-through, blink</td>
                          </tr>
                          <tr>
                            <td><a href="css-word-spacing.htm">word-spacing</a></td>
                              <td>Wortabstand</td>
                              <td>numerischer Wert in pt (Punkt) mm oder cm</td>
                          </tr>
                          <tr>
                            <td><a href="css-letter-spacing.htm">letter-spacing</a></td>
                              <td>Zeichenabstand</td>
                              <td>numerischer Wert in pt (Punkt) mm oder cm</td>
                          </tr>
                          <tr>
                              <td>text-indent</td>
                              <td>Texteinrückung</td>
                              <td>numerischer Wert in pt (Punkt) mm oder cm</td>
                          </tr>
                          <tr>
                              <td>text-transform</td>
                              <td>Textart</td>
                              <td>capitalize, uppercase, lowercase, none</td>
                          </tr>
                  
                  <!--          
                  <a href="">
                  </a>          
                  -->          
                          <tr>
                              <td class="tabelle_hervorhebung" style="padding-top: 20px;" colspan="3">Außenabstand/Innenabstand (Box) </td>
                          </tr>
                          <tr>
                            <td><a href="css-padding.htm">padding</a></td>
                              <td>Kurzschreibweise für Innenabstand bei Box-Modell</td>
                              <td>numerischer Wert in px oder relative Angaben</td>
                          </tr>
                          <tr>
                            <td><a href="css-margin.htm">margin</a></td>
                              <td>Kurzschreibweise für Außenabstand bei Box-Modell</td>
                              <td>numerischer Wert in px, mm oder cm oder relative Angaben</td>
                          </tr>
                          <tr>
                              <td>margin-left</td>
                              <td>absoluter Abstand zum Seitenrand links</td>
                              <td>numerischer Wert in px, mm oder cm oder relative Angaben</td>
                          </tr>
                          <tr>
                              <td>margin-right</td>
                              <td>absoluter Abstand zum Seitenrand rechts</td>
                              <td>numerischer Wert in px, mm oder cm oder relative Angaben</td>
                          </tr>
                          <tr>
                              <td>margin-bottom</td>
                              <td>absoluter Abstand zum Seitenrand unten</td>
                              <td>numerischer Wert in px, mm oder cm oder relative Angaben</td>
                          </tr>
                          <tr>
                              <td>margin-top</td>
                              <td>absoluter Abstand zum Seitenrand oben</td>
                              <td>numerischer Wert in px, mm oder cm oder relative Angaben</td>
                          </tr>
                            
                          <tr>
                              <td class="tabelle_hervorhebung" style="padding-top: 20px;" colspan="3">Links </td>
                          </tr>
                          <tr>
                              <td>A:link</td>
                              <td>Link</td>
                              <td>fast alle CSS-Befehle anwendbar</td>
                          </tr>
                          <tr>
                              <td>A:visited</td>
                              <td>Besuchter Link</td>
                              <td>fast alle CSS-Befehle anwendbar</td>
                          </tr>
                          <tr>
                              <td>A:active</td>
                              <td>Angeklickter Link</td>
                              <td>fast alle CSS-Befehle anwendbar</td>
                          </tr>
                          <tr>
                              <td>A:hover</td>
                              <td>Link beim überfahren mit Maus</td>
                              <td>fast alle CSS-Befehle anwendbar</td>
                          </tr>
                          <tr>
                              <td class="tabelle_hervorhebung" style="padding-top: 20px;" colspan="3">Bilder </td>
                          </tr>
                          <tr>
                              <td>background</td>
                              <td>Hintergrundfarbe</td>
                              <td>red, green, white usw. oder HTML Farbangabe</td>
                          </tr>
                          <tr>
                              <td>background-image</td>
                              <td>Hintergrundbild</td>
                              <td>none, URL</td>
                          </tr>
                          <tr>
                              <td>background-repeat</td>
                              <td>Kachel</td>
                              <td>repeat, repeat-x, repeat-y, no-repeat</td>
                          </tr>
                          <tr>
                              <td class="tabelle_hervorhebung" style="padding-top: 20px;" colspan="3">Ränder </td>
                          </tr>
                          <tr>
                              <td>border-top-width</td>
                              <td>Dicke der Rahmenlinie oben</td>
                              <td>thin, medium, thick oder num. Wert</td>
                          </tr>
                          <tr>
                              <td>border-bottom-width</td>
                              <td>Dicke der Rahmenlinie unten</td>
                              <td>thin, medium, thick oder num. Wert</td>
                          </tr>
                          <tr>
                              <td>border-left-width</td>
                              <td>Dicke der Rahmenlinie links</td>
                              <td>thin, medium, thick oder num. Wert</td>
                          </tr>
                          <tr>
                              <td>border-right-width</td>
                              <td>Dicke der Rahmenlinie rechts</td>
                              <td>thin, medium, thick oder num. Wert</td>
                          </tr>
                          <tr>
                              <td>border-style</td>
                              <td>Rahmentyp</td>
                              <td>none, dotted, dashed, solid, double, groove, ridge, inset, outset</td>
                          </tr>
                          <tr>
                              <td>border-color</td>
                              <td>Rahmenfarbe</td>
                              <td>Farbname oder Hex.</td>
                          </tr>
                          <tr>
                              <td>padding-top</td>
                              <td>Tabellenabstand oben</td>
                              <td>Prozent oder num. Wert.</td>
                          </tr>
                          <tr>
                              <td>padding-bottom</td>
                              <td>Tabellenabstand unten</td>
                              <td>Prozent oder num. Wert.</td>
                          </tr>
                          <tr>
                              <td>padding-right</td>
                              <td>Tabellenabstand rechts</td>
                              <td>Prozent oder num. Wert.</td>
                          </tr>
                          <tr>
                              <td>padding-left</td>
                              <td>Tabellenabstand links</td>
                              <td>Prozent oder num. Wert.</td>
                          </tr>
                          <tr>
                              <td>width</td>
                              <td>Rahmenbreite</td>
                              <td>Auto, Prozent, num. Wert</td>
                          </tr>
                          <tr>
                              <td>height</td>
                              <td>Rahmenhöhe</td>
                              <td>Auto, Prozent, num. Wert</td>
                          </tr>
                      </tbody>
                  </table>

                


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