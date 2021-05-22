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
  <h1>Просмотр линейной группы</h1>
  <p>
  <ol>
  <li>0-03</li>
  <li>0-04</li>
  <li>0-06</li>
  </ol>
</p>

<?php

$t = $_POST['text'];

if($t == "DISP LTG 0-04"){
  
  echo "<h1>Просмотр блока линейной группы</h1>
  <p>
  <div data-info='DISP LTG - DISPLAY LINE TRUNK GROUP - по этой команде отображаются данные для одной, нескольких или всех созданных групп LTG на станции.'>DISP LTG</div> 0-04
 <br>
 <br><div data-info='LTG - LINE TRUNK GROUP - этим параметром задается LTG. В зависимости от введенного значения возможны следующие опции:'>LTG</div><div data-info='TYPE - LINE TRUNK GROUP TYPE - этим параметром задается тип LTG.'>TYPE</div>LDPARP
 <br>------+--------+----------
 <br> 0-04  LTGB  1
  </p>";

} elseif($t == "DISP LTG 0-06"){
  
  echo "<h1>Просмотр блока линейной группы</h1>
  <p>
  <div data-info='DISP LTG - DISPLAY LINE TRUNK GROUP - по этой команде отображаются данные для одной, нескольких или всех созданных групп LTG на станции.'>DISP LTG</div> 0-06
 <br>
 <br><div data-info='LTG - LINE TRUNK GROUP - этим параметром задается LTG. В зависимости от введенного значения возможны следующие опции:'>LTG</div><div data-info='TYPE - LINE TRUNK GROUP TYPE - этим параметром задается тип LTG.'>TYPE</div>LDPARP
 <br>------+--------+----------
 <br> 0-06  LTGB  90
  </p>";

} elseif($t == "DISP LTG 0-03"){
  
  echo "<h1>Просмотр блока линейной группы</h1>
  <p>
 <div data-info='DISP LTG - DISPLAY LINE TRUNK GROUP - по этой команде отображаются данные для одной, нескольких или всех созданных групп LTG на станции.'>DISP LTG</div> 0-03
 <br>
 <br><div data-info='LTG - LINE TRUNK GROUP - этим параметром задается LTG. В зависимости от введенного значения возможны следующие опции:'>LTG</div><div data-info='TYPE - LINE TRUNK GROUP TYPE - этим параметром задается тип LTG.'>TYPE</div>LDPARP
 <br>------+--------+----------
 <br> 0-03 LTGC   3
  </p>";

} elseif($t == "STAT LTG 0-04"){
  
  echo "<h1>Просмотр состояния линейной группы</h1>
  <p>
  <div data-info='STAT LTG - STATUS LINE TRUNK GROUP - по этой команде отражается рабочее состояние LTG.'>STAT LTG</div> 0-04
 <br>
 <br> NO:  <div data-info='LAC - LOCAL AREA CODE - этим параметром задается код местной зоны, если существует несколько местных сетей, соединенных с данной станцией.'>LAC</div>  CH0  CH1
 <br>-----+--------+-------+---------
 <br> 0-04 ACT  STB   ACT
  </p>";

} elseif($t == "STAT LTG 0-06"){
  
  echo "<h1>Просмотр состояния линейной группы</h1>
  <p>
  <div data-info='STAT LTG - STATUS LINE TRUNK GROUP - по этой команде отражается рабочее состояние LTG. '>STAT LTG</div> 0-06
 <br>
 <br> NO:  <div data-info='LAC - LOCAL AREA CODE - этим параметром задается код местной зоны, если существует несколько местных сетей, соединенных с данной станцией.'>LAC</div>  CH0  CH1
 <br>-----+--------+-------+---------
 <br> 0-06 ACT  ACT  STB
  </p>";

} elseif($t == "STAT LTG 0-03"){
  
  echo "<h1>Просмотр состояния линейной группы</h1>
  <p>
  <div data-info='STAT LTG - STATUS LINE TRUNK GROUP - по этой команде отражается рабочее состояние LTG. '>STAT LTG</div> 0-03
 <br>
 <br> NO:  <div data-info='LAC - LOCAL AREA CODE - этим параметром задается код местной зоны, если существует несколько местных сетей, соединенных с данной станцией.'>LAC</div> CH0  CH1
 <br>-----+--------+-------+---------
 <br> 0-03 PLA  
  </p>";
}elseif($t){

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";

}elseif($t==false)

echo "Обратите внимание на слово <b>'команду'</b> и попробуйте еще раз";

?>

<form name="text" action= "/3/group.php" method= 'post'>
Введите <div data-info="Возможные команды для ввода: DISP LTG, STAT LTG">команду</div> БОЛЬШИМИ буквами:
<p><input type="text" name="text" size="40"></p>
<input type="submit" value="Отправить">
<input type="reset" value="Очистить">
</form>

</header>

<footer class= footer>
  <a href="/osnova.php">Назад</a>
</footer>