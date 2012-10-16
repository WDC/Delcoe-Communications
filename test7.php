<?php
$i = 0;
$array = array();
while ($i < 100000) {
	$array[] = $i;
	$i++;
}
   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $starttime = $mtime;

foreach ($array as $k) {

}

   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = number_format(($endtime - $starttime), 7, '.', '');
   echo $totaltime;
?>



