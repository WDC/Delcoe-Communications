<?php
$i = 0;
$sample = array();
while ($i < 100000) {
        $sample[] = $i;
        $i++;
}

   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $starttime = $mtime;

   $temp = array_sum($sample) / count($sample);

   $mtime = microtime();
   $mtime = explode(' ',$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = number_format(($endtime - $starttime), 7, '.', '');
   echo $totaltime;
?>



