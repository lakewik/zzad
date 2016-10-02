<!DOCTYPE html>
<html lang="pl-PL"><head>
  
  <link rel="stylesheet" href="/../new_design_1/assets/css/styles.css">
  <title>System zdalnego zarządzanie testami oraz zadaniami domowymi</title>

  
  
  <meta charset="UTF-8">

  
  <link rel="Stylesheet" type="text/css" href="/../eele/eelestyle.css">

</head><body style="background-image: url(subtle_white_mini_waves.png);">
<center>
<ul style="font-family: Comic Sans MS;" class="menu_poziome">

<li><big><big><big><a href="index.php">Strona główna</a></big></big></big></li><li><big><big><big><a href="homeworks.php">Zadania domowe</a></big></big></big></li><li><big><big><big><a href="tests.php">Sprawdziany i kartkówki</a></big></big></big></li><li><big><big><big><a href="about.php">O programie</a></big></big></big></li><li><big><big><big><a href="timetable.php">Plan lekcji</a></big></big></big></li>
</ul>
<br>
<big style="font-family: Comic Sans MS; color: black;"><big><big>Witaj
w zdalnym systemie zarządzanie zadaniami domowymi oraz sprawdzianami!
<hr size="1"></big></big></big><img style="width: 179px; height: 189px;" alt="" src="uczen1.gif"><br style="color: black;">
<br style="color: black;">

<?php
if(isset($_SESSION['komunikat']))
echo $_SESSION['komunikat'];
//else
//echo "Wprowadź nazwę i hasło użytkownika.";
?>
</div>

<big style="text-decoration: underline; color: black;"><big><span style="font-family: Comic Sans MS;">Podaj dane dostępu:</span></big></big><br>
<br style="color: black;">
<form name="" action="login.php" method="post"><big style="font-family: Comic Sans MS; color: black;">
Login: <input name="user" id="" value="" size="" maxlength="" title="" type="text"><br>
Hasło: <input name="haslo" id="" value="" size="" maxlength="" title="" type="password"><br>
Grupa szkolna: <select name="group" id="" title="">
                <option value="1E">1E</option>
                     <option value="1A">1A</option>
                    <option value="1B">1B</option>
                      <option value="1C">1C</option>
                        <option value="1D">1D</option>
                          <option value="2A">2A</option>
                            <option value="2B">2B</option>
                              <option value="2C">2C</option>
                               <option value="2D">2D</option>
                    <option value="2E">2E</option>
                      <option value="3A">3A</option>
                        <option value="3B">3B</option>
                          <option value="3C">3C</option>
                            <option value="3D">3D</option>
                              <option value="3E">3E</option>
                                <option value="other">other</option>
              </select><br />
  </big><br>
  <input type="submit" value="Wejdź!" />
  </form>
<br>
<span style="font: 22pt 'Comic Sans MS','Comic Sans',cursive; color: #000080">
Nie masz jeszcze konta?
<br /><br />
<p class="text-center"><a href="register.php" class="btn btn-action">Zarejestruj się!</a></p>
<br>
<?PHP

function printCalendar()
{
  $year = date("Y");
  $monthNum = date("n");
  $daysofmonth = date("t");
  $dayofweek = date("w");
  $dayofmonth = date("j");
  $firstdayofmonth = date("w", mktime(0,0,0,$monthNum, 1, $year));

  if($dayofweek == 0) $dayofweek = 7;
  if($firstdayofmonth == 0) $firstdayofmonth = 7;

  switch($monthNum){
    case 1 : $monthName = "Styczeń";break;
    case 2 : $monthName = "Luty";break;
    case 3 : $monthName = "Marzec";break;
    case 4 : $monthName = "Kwiecień";break;
    case 5 : $monthName = "Maj";break;
    case 6 : $monthName = "Czerwiec";break;
    case 7 : $monthName = "Lipiec";break;
    case 8 : $monthName = "Sierpień";break;
    case 9 : $monthName = "Wrzesień";break;
    case 10 : $monthName = "Październik";break;
    case 11 : $monthName = "Listopad";break;
    case 12 : $monthName = "Grudzień";break;
  }

  echo("<TABLE border = 1 rules = 'all' brodercolor='black'><TR>");
  echo("<TD bgcolor=\"yellow\" align=\"center\" colspan=\"7\">");
  echo($monthName." ".$year);
  echo("</TD></TR><TR>");
  ?>
  <TR>
  <TD align="center" bgcolor="pink">Poniedziałek</TD>
  <TD align="center" bgcolor="pink">Wtorek</TD>
  <TD align="center" bgcolor="pink">Środa</TD>
  <TD align="center" bgcolor="pink">Czwartek</TD>
  <TD align="center" bgcolor="pink">Piątek</TD>
  <TD align="center" bgcolor="pink">Sobota</TD>
  <TD align="center" bgcolor="pink">Niedziela</TD>
  </TR>
 <?php
   

  $j = $daysofmonth + $firstdayofmonth - 1;

  for($i = 0; $i < $j; $i++){
    if($i < $firstdayofmonth - 1){
      echo("<TD bgcolor=\"white\"></TD>");
      continue;
    }
    if(($i % 7) == 0){
      echo("</TR><TR>");
    }
    if(($i - $firstdayofmonth + 2) == $dayofmonth){
      $color = "#F1C425";
    }
    else{
      $color = "green";
    }
    echo("<TD bgcolor=\"$color\" align=\"center\">");
    echo($i - $firstdayofmonth + 2);
    echo("</TD>");
  }
  echo("</TR></TABLE>");
}
printCalendar();
?></span>
<br />
  ----------------------------------------------------------------------------------------------------------------<br>
&nbsp;&nbsp;&nbsp; <big><span style="font-family: Comic Sans MS;">© Copyright 2014, Wiktor Jezioro && Szymon Stelmach | Wszelkie Prawa
Zastrzeżone</span></big><br>
----------------------------------------------------------------------------------------------------------------<br>
  <span style="font-family: Comic Sans MS; font-weight: bold;">Wersja systemu ZZAD: 0.1 <span style="color: rgb(204, 0, 0);">BETA</span></span><br>
----------------------------------------------------------------------------<br>

</center>
