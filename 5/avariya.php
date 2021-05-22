<!DOCTYPE html>
<html lang="ru">

<head>
<title>diplom.ewsd.ru</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Anastasia">
  <link rel="stylesheet" href="/css/stile.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
  <link rel="icon" href="/img/2.png" type="image/x-icon">

</head>

<header class="odin">
  <h1>Просмотр аварий</h1>
  
  <?php

$t = $_POST['text'];

if($t == "DISP ALARM"){
  
  echo "<h1>Просмотр аварии</h1>
  <p>
  <div data-info='DISP ALARM - DISPLAY ALARM STATUS - эта команда отображает текущий аварийный статус объектов'>DISP ALARM</div>
 <br>
 <br> OBJECT = MAL ALPRIO = MAJOR ALSTAT = NP MSGNO =2247
 <br> ALTYPE = COMMUNICATIONS ALARM
 <br> PABCAUSE = LOSS OF SIGNAL
 <br> ALARM-ID: CLASS=PCMMAL LTG=1-44 DIU=2
 <br> Пропал сигнал. Первичный поток не поступает
 <br>             в LTG=1-44 DIU=2.
  </p>";

} elseif($t == "STAT CCG"){
  
  echo "<h1>Просмотр состояния центрального генератора</h1>
  <p>
  <div data-info='STAT CCG - DISPLAY STATUS OF CCG - по этой команде отображаете рабочее состояние CCG. CCG(A) central clock generator A'>STAT CCG</div>
 <br>
 <br> CCG-0       CCG-1
 <br>-------      --------  
 <br> ACT         CTB
  </p>";

} elseif($t == "STAT SSP"){
  
  echo "<h1>Просмотр состояния координационного процессора</h1>
  <p>
  <div data-info='STAT SSP - DISPLAY STATUS OF SSP - по этой команде отображаете конфигурация системы СР113.'>STAT SSP</div>
 <br>
 <br> UNIT    OST    UNIT  OST    UNIT   OST
 <br>----------------    --------------    ---------------
 <br> BAR-0   MAS    BAR-1  SPR    CAP-0  ACT
 <br> CAP-1   ACT    CAP-2  PLA    CAP-3  PLA
 <br> IOC-0   ACT    CMY-0  ACT    CMY-1  ACT
 <br> IOC-3   PLA    IOC-2  ACT    IOC-2  PLA
 <br> IOPMB-0    ACT   IOPMB-1  ACT    IOPMDD-0 ACT
 <br> IOPMTD-0 ACT    IOPSCDU ACT
 <br> IOPTA-0  ACT    IOPTA-1 ACT    IOPLAU-0  ACT
 <br> IOPLAU-A ACT    LAU-0  ACT    LAU-1  ACT
 <br> MDD-0   ACT    MDD-1  ACT
 <br> OMT-0    ACT    OMT-1  ACT
 <br> X25LINK  AKT
  </p>";

}elseif($t){

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";

}elseif($t==false)

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";

?>

<form name="text" action= "/5/avariya.php" method= 'post'>
Введите <div data-info="Возможные команды для ввода: STAT MB, STAT CCG, STAT SSP">команду</div> БОЛЬШИМИ буквами:
<p> <input type="text" name="text" size="40"></p>
<input type="submit" value="Отправить">
<input type="reset" value="Очистить">
</form>
</header>

<footer class= footer>
  <a href="/osnova.php">Назад</a>
</footer>