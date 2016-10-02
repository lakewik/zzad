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
//session_start();
 //echo ($_SESSION['grus']);
?>
<?php
if(isset($_SESSION['komunikat']))
echo $_SESSION['komunikat'];
//else
//echo "Wprowadź nazwę i hasło użytkownika.";
?>
</div>

<big style="text-decoration: underline; color: black;"><big><span style="font-family: Comic Sans MS;">Rejestracja</span></big></big><br>
<br style="color: black;">
<form name="" action="register.php" method="post"><big style="font-family: Comic Sans MS; color: black;">
<span style="color: #FF0000">*</span>Imię: <input name="imie" id="" value="" size="" maxlength="" title="" type="text"required><br><br>
Nazwisko: <input name="nazwisko" id="" value="" size="" maxlength="" title="" type="text"><br><br>
<span style="color: #FF0000">*</span>E-mail: <input name="email" id="" value="" size="" maxlength="" title="" type="email" required><br><br>
<span style="color: #FF0000">*</span>Login: <input name="login" id="" value="" size="" maxlength="" title="" type="text" required><br><br>
<span style="color: #FF0000">*</span>Hasło: <input name="haslo" id="" value="" size="" maxlength="" title="" type="password" required><br><br>
<span style="color: #FF0000">*</span>Powtórz hasło: <input name="phaslo" id="" value="" size="" maxlength="" title="" type="password" required><br><br>
<span style="color: #FF0000">*</span>Grupa szkolna: <select name="group" id="" title="" required>
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
              </select> - jeżeli znasz hasło do wybranej grupy głównej to je wpisz tutaj: <input name="grp" id="" type="password">, w przeciwnym razie wybierz other<br /><br>
              <u>Pytania ankietowe (nieobowiązkowe):</u><br><br>
              Czy lubisz się uczyć: <select name="clsu" id="" title="">
                <option value="tak">Tak</option>
                 <option value="średnio">Średnio</option>
                  <option value="nie">Nie</option>
              </select><br />
              
              <br>
              Ile masz lat: <input name="wiek" id="" type="number" min="2" max="150" size="4"><br /><br />Oceń na suwaku, w jakim stopniu lubisz chodzić do szkoły: <input name="shool" type="range" /><br />
  </big><br><span style="font-family: 'Comic Sans MS','Comic Sans',cursive; color: #000000"><span style="color: #FF0000">*</span><b>Oblicz poniższe działanie matematyczne:</b><br>
 <br> <?php
 //echo ($_POST['shool']);
session_start();

if(!empty($_POST['token']))
{
 if(trim($_POST['token']) == $_SESSION['token'])
 {
  echo '';
  //cpkw - czy poprawny kod weryfikacyjny
  $cpkw='1';
 }
 else
 {
  echo '<span style="color: #FF0000">-----Wpisany wynik działania matematycznego jest niepoprawny!-----</span><br />';
  $cpkw='0';
 }
}
else
{
 $operations = array('+', '-', '×', '÷');
 $unknown_position = rand(0, 2);
 $random_word = rand(0, 1);
 $operation = rand(0, 3);
 $values = random_equation($operation);
 $_SESSION['token'] = $values[$unknown_position];
 // echo '<pre>'.$values[0].' '.$operations[$operation].' '.$values[1].' = '.$values[2].'</pre>';

 for($h = $i = 0; $h < 3; ++$h)
 {
  if($unknown_position == $h)
  {
   $form[$h * 2] = '<input name="token" required>';
  }
  else
  {
   $form[$h * 2] = ($i == $random_word ? mark_my_words($values[$h]) : $values[$h]);
   ++$i;
  }
 }

 $form[1] = $operations[$operation];
 $form[3] = '=';
 // Bo implode()?
 ksort($form);
 echo ''.implode(' ', $form).'';
}

function random_equation($operation)
{
 switch($operation)
 {
  // Dodawanie
  case 0:
    $values[2] = rand(2, 100);
    $values[1] = rand(1, ($values[2] - 1));
    $values[0] = $values[2] - $values[1];
  break;

  // Odejmowanie
  case 1:
   $values[0] = rand(2, 100);
   $values[1] = rand(1, ($values[0] - 1));
   $values[2] = $values[0] - $values[1];
  break;

  // Mnożenie
  case 2:
   include './factors.php';
   $values[0] = rand(1, 50);
   // Unfair draw
   $values[1] = $factors[$values[0]][array_rand($factors[$values[0]])];
   $values[2] = $values[0] * $values[1];
  break;

  // Dzielenie
  case 3:
   include './dividers.php';
   $values[0] = rand(2, 100);
   $values[1] = $dividers[$values[0]][array_rand($dividers[$values[0]])];
   $values[2] = $values[0] / $values[1];
  break;
 }

 return $values;
}

// Skrócona wersja funkcji
function mark_my_words($number)
{
 if($number == 100)
 {
  $value = 'sto';
 }
 else
 {
  $words[] = array('jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć');
  $words[] = array('dziesięć', 'jedenaście', 'dwanaście', 'trzynaście', 'czternaście', 'piętnaście', 'szesnaście', 'siedemnaście', 'osiemnaście', 'dziewiętnaście');
  $words[] = array('dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt');

  if($number > 0 && $number < 10)
  {
   $value = $words[0][$number - 1];
  }
  else
  {
   $numbers = str_split($number);

   if($number > 9 && $number < 20)
   {
    $value = $words[1][$numbers[1]];
   }
   else
   {
    $value = $words[2][$numbers[0] - 1];

    if($numbers[1] !== '0')
    {
     $value .= ' '.$words[0][$numbers[1] - 1];
    }
   }
  }
 }

 return $value;
}
?>
<?php
 
 if ($_POST['group']=='other')
 
     {
     echo ('');
     }

else  


  {

 // sprawdzanie czy poprawne jest hasło d grup głownych 
  if(!$fd = fopen("data/groups/grouppasswd.txt", "r")) return 1;
$result = 2;
while (!feof ($fd)){
$line = trim(fgets($fd));
$arr = explode(":", $line);
if(count($arr) < 2) continue;

if($arr[0] != $_POST['group']) continue;

if($arr[1] == $_POST['grp']){
//echo ('Hasło poprawne!');
//cphg - zmienna czy poprawne hasło grupowe
$cphg="1";
}  else {
//echo ('Hasło niepoprawne!');
$cphg="0";
}
break;
}
fclose($fd);


//$has1=file_get_contents ('data/groups/'.$_POST['group'].'.txt')  
//  echo ($has1);
 // 
  }
  
  
// sprawdzanie czy user intnieje
  //Za pomocą funkcji file wczytujemy zawartość pliku do tablicy, gdzie każda linia to nowy index
$file = file('data/groups/'.$_POST['group'].'.txt');
//Deklarujemy zmienną z szukanym wyrazem
$szukaj = $_POST['login'];
//Wykonujemy pętle tyle razy, ile jest elementów w tablicy (czyli tyle ile jest linijek w pliku)
for($it = 0; $it <= count($file) - 1; $it++)
{
    //Sprawdzamy, czy w obecnie sprawdzanej linii jest szukany wyraz
    if(strpos($file[$it], $szukaj) != false)
    {
        //Jeśli szukany wyraz istnieje wyświetlamy tę linijkę wraz z znakiem przejścia do nowej linii
     //  echo $file[$it]."<br />\n";
        $check = true;
    }
}

    //Jeśli zmienna $check nie istnieje (nie znaleziono żadnych wyników)
    if(!isset($check))
    {
        //Wyświetlamy komunikat
        //echo 'Brak wyników do wyświetlenia!';
        $tui="0";
    }
    
    
    else
    
    {
    //tui - taki user intnieje
    $tui="1";
    
    }
  //----------------------------------------
 // sprawdzanie poprawności e-maila
 
if (!preg_match("/^( [a-zA-Z0-9] )+( [a-zA-Z0-9\._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9\._-] +)+$/" , $_POST['email']))
 // vamail - czy mail jest poprawnny
{$vamail='1';}
else  {$vamail='0';}
 //----------------------------------------
//sprawdzanie, czy wpisane hasła zgadzaję się ze sobą

if ($_POST['haslo']==$_POST['phaslo'])
// chsz - czy hasła się zgadzają
 {
$chsz='1';
 }

else
   {
   $chsz='0';
   }
//---------------------------------------------- 
 
  
?>
<?php
//echo ($tui);
if ($_POST['imie']!=""&&$_POST['email']!=""&&$_POST['haslo']!=""&&$_POST['phaslo']!=""&&$_POST['login']!=""&&$_POST['group']!="")

   {
   
   
  if ($_POST['group']=='other')
 
     {
     $cphg="1";
     }
    
      

  
   
  
   
     if ($vamail=='1'&&$chsz=='1'&&$cphg=='1'&&$cpkw=="1"&&$tui!="1")  
      
        {
 //  echo ('tak0');
// zapis użytkownika do pliku, jeżeli dane są poprawne
   $dane = file("data/groups/".$_POST['group'].".txt");
$ile = count($dane);

//zapisanie nowej linijki i starej zawartości
$up = fopen("data/groups/".$_POST['group'].".txt", "w");
flock($up,2);
fwrite($up, $_POST['phaslo'].':'.$_POST['login'].':'.$_POST['email'].':'.$_POST['imie'].':'.$_POST['group'].':'.$_POST['nazwisko'].':'.$_POST['clsu'].':'.$_POST['grp'].':'.$_POST['wiek']."\n");
for($ite=0; $ite<$ile;$ite++) fwrite($up, $dane[$ite]); 
flock($up,3);
fclose($up);
 
 
        } 
   
   
  
        
         if ($vamail=='1')  
      
        {}
       else
 
 
        {
        $step=1;
        echo ('<br />'.$step.'. <span style="color: #FF0000">Wprowadzono niepoprawny adres e-mail!</span>');
        
        }
        
        // sprawdza, czy powtórzone hasło grupowe jesy poprawne
    if ($chsz=='1') 
    
    
    {
    }
     
 
 else
 
 
        {
         $step++;
        echo ('<br />'.$step.'. <span style="color: #FF0000">Powtórzone hasło nie zgadza się z pierwszym!</span>');
        
        }
        
              // sprawdza, czy powtórzone hasło grupowe jesy poprawne
    if ($tui=='1') 
    
    
    {
     $step++;
      echo ('<br />'.$step.'. <span style="color: #FF0000">Taki użytkownik już istnieje!</span>');
    }
     
 
 else
 
 
        {
        
      
        
        }
 
 // sprawdza czy poprawne hasło grupowe
 // czy other zaznaczone
 if ($_POST['group']=='other')
 
     {
//   echo ('');
     } else  
     
     {
 
  if ($cphg=='1') 
    
    
    {
    
    
    }
     
 
 else
 
 
        {
         $step++;
        echo ('<br />'.$step.'. <span style="color: #FF0000">Wprowadzone hasło grupowe jest niepoprawne! Jeżeli nie znasz hasła do żadnej z grup głównych to wybierz other z listy grup szkolnych i jako hasło nic nie wpisuj!</span>');
        
        }
   }
        // sprawdza czy poprawny kod weryfikacyjny
 /* if ($cpkw="1") 
    
    
    {
    
    
    }
     
 
 else
 
 
        {
        
        echo ('<span style="color: #FF0000">Wpisany wynik działanie matematycznego jest niepoprawny! Spróbuj ponownie!</span>');
        
        }
 
 */
 
 
 
 }  else 
 
 {
 
 echo ('<br /><br /><span style="color: #008000">---Uzupełnij poprawnie formularz---</span>');
 
 }
?>
</span>
  <br>
  <br>
  <input type="submit" value="Zarejestruj się!" />
  </form>
<br>
<br>
<img src="pioro1.gif" style="border: 0" width="340" height="146" alt="">
<br>
<span style="font: 22pt 'Comic Sans MS','Comic Sans',cursive; color: #000080">

</span>
<br />
  ----------------------------------------------------------------------------------------------------------------<br>
&nbsp;&nbsp;&nbsp; <big><span style="font-family: Comic Sans MS;">© Copyright 2014, Wiktor Jezioro && Szymon Stelmach | Wszelkie Prawa
Zastrzeżone</span></big><br>
----------------------------------------------------------------------------------------------------------------<br>
  <span style="font-family: Comic Sans MS; font-weight: bold;">Wersja systemu ZZAD: 0.1 <span style="color: rgb(204, 0, 0);">BETA</span></span><br>
----------------------------------------------------------------------------<br>

</center>
