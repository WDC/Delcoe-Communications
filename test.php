<?php
$i = 0;
   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $starttime = $mtime;

while ($i < 100000) {
	$temp = (int) $i;
	$temp2 = (string) $temp;
	$i++;
}

   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = number_format(($endtime - $starttime), 7, '.', '');
   echo $totaltime;
?>



