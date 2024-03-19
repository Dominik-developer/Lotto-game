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
        <div class="optionL"><a href="wiek.php">Graj </a> </div> 
    </div>

    <div id="content">
        <h1>Wyniki Lotto</h1> 
        <div class="dottedline"></div>  <br/><br/>

        <body filter: blur(5px);>
            <div class="result-container">
                
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
                $liczby=explode(",", $_POST["liczby"]);
                
                
                $poprawne_liczby=true;
                $k=count($liczby);
                for($i=0;$i<$k;$i++){
                    if(($liczby[$i]<1) || ($liczby[$i]>49)){
                        $poprawne_liczby=false;
                        break;
                    }
                }
        
        
                if(!$poprawne_liczby){
                    echo "<h2>Wpisał Pan/pani liczby z innego zakresu niż wymagany</h2>";
                    ?>
                        <form method="post" action="totalizator2.php">
                            <input type="submit" value="Powrót"></form>
                        <?php
                }
        
                elseif(count($liczby)>6){
                    echo "<h2>Wpisał Pan/pani za dużo liczb</h2>";
                    ?>
                        <form method="post" action="totalizator2.php">
                            <input type="submit" value="Powrót">
                        </form>
                    <?php
                }elseif(count($liczby)<6){
                    echo "<h2>Wpisanł Pan/Pani za mało liczb</h2>";
                    ?>
                        <form method="post" action="totalizator2.php">
                            <input type="submit" value="Powrót">
                        </form>
                    <?php
                }
        
        
                
        
                else{        
                $liczby=array_map('trim', $liczby);
                $liczby_gotowe=array_unique($liczby);
        
                    if(count($liczby_gotowe)!=6){
                        echo "<h2>Wpisał Pan/Pani powtarzające się liczby</h2>";
                        ?>
                        <form method="post" action="totalizator2.php">
                            <input type="submit" value="Powrót">
                        </form>
                    <?php
                    }
        
                    else{
                
                sort($liczby);
                $liczby_losowe=array();
        
                while (count($liczby_losowe)<6) {
                    $losowe=rand(1,49);
        
                    if (!in_array($losowe,$liczby_losowe)) {
                        $liczby_losowe[]=$losowe;
                    }
                }
        
                
                sort($liczby_losowe);
        
                $powtarzaja_sie = array_intersect($liczby, $liczby_losowe);
        
                echo "<h4>Twoje liczby: " . implode(", ", $liczby) . "</h4>";
        
                echo "<h4>Wylosowane liczby: " . implode(", ", $liczby_losowe) . "</h4>";
                
                $wynik=count($powtarzaja_sie);
                 if ($wynik == 0) {
                    echo '<p>Niestety tym razem nie udało Ci się Panu/Pani wygrać :(<br></h1>';
                    
                } elseif ($wynik == 1) {
                    echo '<p>Trafiłeś 1 liczbę!<br></p>';
                    
                    echo '<span><br>wygrana: 10$</span>';
                } elseif ($wynik == 2) {
                    echo '<p>Trafiłeś 2 liczby!<br></p>';

                    echo '<span><br>wygrana: 50$</span>';
                } elseif ($wynik == 3) {
                    echo '<p>Trafiłeś 3 liczby!<br></p>';
                    
                    echo '<span><br>wygrana: 100$</span>';
                } elseif ($wynik == 4) {
                    echo '<p>Trafiłeś 4 liczby!<br></p>';
                    
                    echo '<span><br>wygrana: 1000$</span>';
                } elseif ($wynik == 5) {
                    echo '<p>Trafiłeś 5 liczb!<br></p>';
                    
                    echo '<span><br>wygrana: 10.000$</span>';
                } elseif ($wynik == 6) {
                    echo '<p>Dokonałeś niemożliwego :o<br>Trafiłeś wszystkie 6 liczb!</p>';
                    
                    echo '<span><br>Wygrana: 1.000.000.000$!!!</span>';
                }
                echo '<br>';
                   ?>
                    <form method="post" action="totalizator2.php">
                        <input type="submit" value="Zagraj jeszcze raz!">
                    </form>
        </div>
        <?php 
        }}}
        ?>

    </div>

    <div id="footer">
        Dominik Szczepański Copyright &copy; 2024 Wszelkie prawa zastrzezone 
    </div>

</div>

</body>

</html>
<!--made by: Dominik Szczepański https://github.com/Dominik-developer -->