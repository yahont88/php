<?php


$date = [517707188, 593285096, 468863423, 1470561388, 986437676, 83171109, 640695091, 129718560, 1233526416, 528621663];
  var_dump($date);
  mt_rand(0, time());
//echo time();+
/*
echo date ('d.m.Y H:i:s',$date[0]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[1]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[2]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[3]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[4]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[5]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[6]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[7]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[8]);
echo '<br>';
echo date ('d.m.Y H:i:s',$date[9]);
echo '<br>';
*/

    //echo count($date);
    while ($date <= time()) {
      echo mt_rand(0, 528621663 );
    }

echo '<br>';
    show_date($date);
function show_date ($date = []) {
  if ($date) {
    echo date ('d.m.Y H:i:s', $date);
  }

  foreach ($date as $key => $dateshow) { 
    echo date ('d.m.Y H:i:s',$dateshow);
    echo '<br>';
  }
}
    echo '<br>';

    echo '<br>';

//echo min($date);
$mindate = min($date);
  echo date('d.m.Y H:i:s', $mindate);
    echo '<br>';
  echo 'самая ранняя дата!';

echo '<br>';

echo '<br>';
//$sortdate = sort($date);// строчка sort($date) далее применена для получения списка, вывести его по принципу $mindate не получилось
sort($date);
//echo date('d.m.Y H:i:s', $sortdate);//почему-то вывести это списком не получилось 
  var_dump($date);
    echo '<br>';
  echo 'отсортированы';

    echo '<br>';

    echo '<br>';

$last_date = max($date);
  echo date('d.m.Y H:i:s', $last_date);
    echo '<br>';
  echo 'самая поздняя дата!';

    echo '<br>';

    echo '<br>';

  date_default_timezone_set('America/New_York');
  echo date('d.m.Y H:i:s', $last_date);
    echo '<br>';
  echo "самая поздняя дата в майами(часовой пояс нью-йорка";

    echo '<br>';

    echo '<br>';

var_dump ($_SERVER);
    echo '<br>';

    echo '<br>';
echo ($_SERVER ["SERVER_ADDR"]);
    echo '<br>';
echo ($_SERVER ["SERVER_NAME"]);
    echo '<br>';
  date_default_timezone_set('Europe/Moscow');
echo ($_SERVER ["REQUEST_TIME"]);
    echo '<br>';
  echo date ('d.m.Y H:i:s');
?>