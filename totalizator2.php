<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Lotto</title>
    <meta name="description" content="Najpopularniejszy totalizator sportowy na rynku "/>
    <meta name="keywords" content="lotto" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dominik Szczepański" />
    <link rel="stylesheet"href="totalizator.css" type="text/css" />
</head>


<body>

<div id="container">

    <div id="logo">
        Lotto 
    </div>
 
    <div id="menu">
        <div class="option"><a href="totalizator.php"> Strona główna</a></div>
        <div class="option"><a href="wiek.php"> Lotto</a></div>
        <div class="option"><a href="#"> O Autorze</a></div>
        <div class="option"><a href="#"> Podziękowania</a></div>
        
        <div style="clear:both;"></div>
    </div>

    <div id="topbar">
        <div id="topbarL"> <img src="#.jpeg" width="138" height="128"/></div><!--w miejsce # wstaw url zdjecia/logo-->
        <div id="topbarR">Lotto – najstarsza, a zarazem najpopularniejsza w Polsce gra liczbowa organizowana przez Totalizator Sportowy. Pierwsze losowanie odbyło się 27 stycznia 1957. Polega na wytypowaniu wyników losowania 6 liczb z zakresu od 1 do 49</div>
    </div>

    <div id="sidebar">
        <div class="optionL"><a href="totalizator.php">Graj </a> </div> 
        <div class="optionL">Zasady </div>
        <div class="optionL">O grze  </div>
    </div>

    <div id="content">
        <h1>Gra Lotto</h1> 
        <div class="dottedline"></div>  <br/><br/>
<div style="height: 15px;">xx</div>

<div>
    <p>Lotto</p>
    <form method="post" action="Wynik.php">
    <span>Podaj 6 liczb (od 1 do 49), oddzielając je przecinkiem:</span>
    <input type="text" name="liczby" required><br>
    <input type="submit" value="Wyślij">
    </form>
    </div>




</div>

    <div id="footer">
        Dominik Szczepański Copyright &copy; 2024 Wszelkie prawa zastrzezone 
    </div>

</div>

</body>

</html>
<!--made by: Dominik Szczepański https://github.com/Dominik-developer -->