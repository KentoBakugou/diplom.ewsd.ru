<!DOCTYPE html>
<html lang="ru">

<head>
<title>diplom.ewsd.ru</title>

  <link rel="stylesheet" href="/css/stile.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
  <link rel="icon" href="/img/2.png" type="image/x-icon">

</head>

<header class="odin">
  <h1>Просмотр цифрового абонентского блока</h1>
  <p>
  <ol>
  <li>10</li>
  <li>20</li>
  <li>30</li>
  </ol>
</p>


<?php

$t = $_POST['text'];

if($t == "DISP DLU 10"){
  
  echo "<h1>Просмотр за состоянием цифрового абонентского блока</h1>
  <p>
 <div data-info='DISP DLU - DISPLAY DIGITAL LINE UNIT - по этой команде отображают, данные одного DLU, диапазона блоков DLU или всех блоков DLU.'> DISP DLU </div> 10
  <br>
 <br><div data-info='DLU - этим параметром задаётся номер DLU. При вводе значения X, задается вес диапазон DLU.'>DLU</div><div data-info='SHELF - полка блока DLU.'>SHELF</div><div data-info='DLUC0 - DIGITAL LINE UNIT CONTROL 0 - нулевой контроллер блока DLU.'>DLUCC0</div><div data-info='DLUCl - DIGITAL LINE UNIT CONTROL 1 - первый контроллер блока DLU. '>DLUC1</div>
 <br>--------+---------+-----------+---------
 <br> 10          A      0-2-0-2    0-3-0-2
  </p>";

} elseif($t == "DISP DLU 20"){
  
  echo "<h1>Просмотр за состоянием цифрового абонентского блока</h1>
  <p><div data-info='DISP DLU - DISPLAY DIGITAL LINE UNIT - по этой команде отображают, данные одного DLU, диапазона блоков DLU или всех блоков DLU.'> DISP DLU </div> 20
  <br>
 <br> <div data-info='DLU - этим параметром задаётся номер DLU. При вводе значения X, задается вес диапазон DLU.'>DLU</div><div data-info='SHELF - полка блока DLU.'>SHELF</div><div data-info='DLUC0 - DIGITAL LINE UNIT CONTROL 0 - нулевой контроллер блока DLU.'>DLUCC0</div><div data-info='DLUCl - DIGITAL LINE UNIT CONTROL 1 - первый контроллер блока DLU. '>DLUC1</div>
 <br>--------+---------+-----------+---------
 <br>  20    A   0-3-0-2   0-4-0-2
  </p>";

} elseif($t == "DISP DLU 30"){
  
  echo "<h1>Просмотр за состоянием цифрового абонентского блока</h1>
  <p>
 <p>
  <div data-info='DISP DLU - DISPLAY DIGITAL LINE UNIT - по этой команде отображают, данные одного DLU, диапазона блоков DLU или всех блоков DLU.'> DISP DLU </div> 30
  <br>
 <br> <div data-info='DLU - этим параметром задаётся номер DLU. При вводе значения X, задается вес диапазон DLU.'>DLU</div><div data-info='SHELF - полка блока DLU.'>SHELF</div><div data-info='DLUC0 - DIGITAL LINE UNIT CONTROL 0 - нулевой контроллер блока DLU.'>DLUCC0</div><div data-info='DLUCl - DIGITAL LINE UNIT CONTROL 1 - первый контроллер блока DLU. '>DLUC1</div>
 <br>-------+---------+------------+---------
 <br>  30   A    0-4-0-2    0-5-0-2
  </p>";

}elseif($t){

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";

}elseif($t==false)

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";


?>

<form name="text" action= "/2/block.php" method= 'post'>
Введите <div data-info="Возможные команды для ввода: DISP DLU">команду</div> БОЛЬШИМИ буквами:</p>
<p><input type="text" name="text" size="40"></p>
<input type="submit" value="Отправить">
<input type="reset" value="Очистить">
</form>
  
</header>

<footer class= footer>
  <a href="/osnova.php">Назад</a>
</footer>
</html>