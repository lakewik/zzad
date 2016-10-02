<!DOCTYPE html>
<html lang="pl-PL"><head><?php session_start();
if(!isset($_SESSION['zalogowany'])){
$_SESSION['komunikat'] = "";
include('form.php');
exit();
}
?>





  
  <link rel="stylesheet" href="/../new_design_1/assets/css/styles.css"><title>System zdalnego zarządzanie testami oraz zadaniami domowymi | Sekcja: Zadania domowe</title>
  

  
  
     <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />

  
  <link rel="Stylesheet" type="text/css" href="/../eele/eelestyle.css"></head><body style="background-image: url(subtle_white_mini_waves.png);">
<center>
<ul style="font-family: Comic Sans MS;" class="menu_poziome">

<li><big><big><big><a href="index.php">Strona główna</a></big></big></big></li><li><big><big><big><a href="homeworks.php">Zadania domowe</a></big></big></big></li><li><big><big><big><a href="tests.php">Sprawdziany i kartkówki</a></big></big></big></li><li><big><big><big><a href="about.php">O programie</a></big></big></big></li><li><big><big><big><a href="timetable.php">Plan lekcji</a></big></big></big></li>
</ul>

<br>
<big style="font-family: Comic Sans MS; color: black;"><big><big>Witaj
w zdalnym systemie zarządzanie zadaniami domowymi oraz sprawdzianami!<br>
<br>
<span style="text-decoration: underline;">Sekcja zadań domowych:</span><br>

<hr size="1"></big></big></big><big style="text-decoration: underline; color: black;"><big><span style="font-family: Comic Sans MS;">




Dodaj informację o zadaniu domowym:</span></big></big><br>
<br style="color: black;">
<form name="" action="homeworks.php" method="post"><big style="font-family: Comic Sans MS; color: black;">Termin wykonania zadania: <input name="d1" id="" value="" size="4" maxlength="" title="" type="text"> <select name="d2" id="" title="">
<option value="stycznia">Styczeń</option>
<option value="lutego">Luty</option>
<option value="marca">Marzec</option>
<option value="kwietnia">Kwiecień</option>
<option value="maja">Maj</option>
<option value="czerwca">Czerwiec</option>
<option value="lipca">Lipiec</option>
<option value="sierpnia">Sierpień</option>
<option value="września">Wrzesień</option>
<option value="października">Październik</option>
<option value="listopada">Listopad</option>
<option value="grudnia">Grudzień</option>
</select> 2014<br><br>
Przedmiot: <select name="p" id="" title="">
<option value="Biologia">Biologia</option>

<option value="Historia">Historia</option>
<option value="Język Polski">Język Polski</option>
<option value="Język Niemiecki">Język Niemiecki</option>
<option value="Język Angielski">Język Angielski</option>
<option value="Fizyka">Fizyka</option>
<option value="Chemia">Chemia</option>
<option value="Geografia">Geografia</option>
<option value="Religia">Religia</option>
<option value="Plastyka">Plastyka</option>
<option value="Technika">Technika</option>
<option value="Matematyka">Matematyka</option>
</select><br>
  <br>
Opis:<br>
<textarea name="op" id="" rows="10" cols="50" title=""></textarea>
<br>
<span style="font: 12pt 'Comic Sans MS','Comic Sans',cursive; color: #008000">------Długość opisu minimum 20 znaków------</span><br />
<br />
Kto: <select name="k" id="" title="">
<option value="cała klasa">Cała klasa</option>
<option value="grupa 1">Grupa 1</option>
<option value="grupa 2">Grupa 2</option>
<option value="grupa języka niemieckiego rozszerzonego">Niemiecki rozszerzony</option>
</select>
<br />

<br />
Numery stron oraz zadań do wykonania: <input name="wyk" id="" type="text" value="" />
<br>
  </big><br>
   <input type="submit" value="Dodaj informację o sprawdzianie/kartkówce!"><br>
  </form>
 <span style="font-family: 'Comic Sans MS','Comic Sans',cursive; color: #000000"><?php
   if ($_POST ['p']!=""&&$_POST ['d1']!=""&&$_POST ['d2']!=""&&$_POST ['op']!=""&&$_POST ['k']!=""&&$_POST ['wyk']!="")  
  
      {
      
       $dzis=date('d');
     $mies=date('m');
     $mies1=str_replace("grudnia", "12", $mies);
     $mies1=str_replace("stycznia", "1", $mies);
     $mies1=str_replace("lutego", "2", $mies);
     $mies1=str_replace("marca", "3", $mies);
     $mies1=str_replace("kwietnia", "4", $mies);
     $mies1=str_replace("maja", "5", $mies);
     $mies1=str_replace("czerwca", "6", $mies);
     $mies1=str_replace("lipca", "7", $mies);
        $mies1=str_replace("sierpnia", "8", $mies);
     $mies1=str_replace("września", "9", $mies);
     $mies1=str_replace("października", "10", $mies);
     $mies1=str_replace("listopada", "11", $mies);
if ($mies1>=$mies)
{
 if ($_POST['d2']=='stycznia'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='lutego'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="28"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='marca'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='kwietnia'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="30"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='maja'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='czerwca'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="30"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='lipca'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='sierpnia'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='września'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="30"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='października'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='listopada'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="30"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 
 if ($_POST['d2']=='grudnia'&&$mies="1")
      
  {
      
      if ($_POST['d1']<="31"&&$_POST['d1']>=$dzis)
      
      {$popm="1";}
      
      else {
      echo ('Wprowadź poprawny termin!');
       }
      
 }
 }
 
   //if ($popm=="1")
          
     //   {
      $grupa = ($_SESSION['grus']);
      
      // usuwanie znaczników html - anty XSS
$pp = strip_tags($_POST ['p']);
$d1 = strip_tags($_POST ['d1']);
$d2 = strip_tags($_POST ['d2']);
$op = strip_tags($_POST ['op']);
$k = strip_tags($_POST ['k']);
$wyk = strip_tags($_POST ['wyk']);
      
       $los = rand(15,3000);  
         
         
         $uchwyt = fopen("data/group/homecom/".$los.".txt", "w");
chmod("data/group/homecom/".$los.".txt",0777); 

                                                                                                         //odczyt pliku do tablicy
$dane = file("data/group/homew/".$grupa.".txt");
$ile = count($dane);

//zapisanie nowej linijki i starej zawartości
$up = fopen("data/group/homew/".$grupa.".txt", "w");
flock($up,2);
fwrite($up, "<b>Data dodania informacji:</b> ".date('d-m-y')."".' <br><b>Przedmiot:</b> '.$pp.' <br><b>Termin:</b> '.$d1.' '.$d2.' 2014 <br> <b>Opis:</b> '.$op.' <br><b>Numery stron oraz zadań do wykonania:</b> '.$wyk.' <br><b>Kto: </b> '.$k.' <br><b>Identyfikator: </b> '.$los.'<hr size="1">');
for($i=0; $i<$ile;$i++) fwrite($up, $dane[$i]); 
flock($up,3);
fclose($up);

    //   }
   } else
   
   
   {echo ('<hr size="1" color="black">Aby dodać informację wprowadź poprawne dane do formularza');}
 ?></span>
<br>
  ----------------------------------------------------------------------------------------------------------------<br><big style="text-decoration: underline; color: black;"><big><span style="font-family: Comic Sans MS;">
  Lista zadań domowych:
   </span></big></big><br>
  <br>
  <big style="font-family: Comic Sans MS; color: black;"><?php
    $grupa = ($_SESSION['grus']);
  
$p = file_get_contents("data/group/homew/".$grupa.".txt");
//$p=ereg_replace("\t"," ",$p); //znaki tabulacji
$p=ereg_replace("\r","<br />",$p); //znak końca linii
$p=ereg_replace("\n","<br />",$p); //znak końca linii
//$p=ereg_replace(" {2,}"," ",$p); //podwójne spacje
//$p=trim($p); //początkowe i końcowe spacje
// żeb spójniki były na początku nowej lini
$p = preg_replace("/\s(\S)\s+/"," \\1&nbsp;",$p);

echo ($p);

                                                                                                                ?></big><br>
----------------------------------------------------------------------------------------------------------------<br>&nbsp;
<big><span style="font-family: Comic Sans MS;">© Copyright 2014, Wiktor Jezioro && Szymon Stelmach | Wszelkie Prawa
Zastrzeżone</span></big><br>
----------------------------------------------------------------------------------------------------------------<br>
  <span style="font-family: Comic Sans MS; font-weight: bold;">Wersja systemu ZZAD: 0.1 <span style="color: rgb(204, 0, 0);">BETA</span></span><br>
----------------------------------------------------------------------------<br>

</center>

</body></html>
