<?php

$files = array(
	'PHP Int to String and Back' => 		'php test.php',
	'Ruby Int to String and Back' => 		'ruby test.rb',
	'Python Int to String and Back' => 		'python test.py',	
	'Node.js Int to String and Back' => 		'node test.js',
	'PHP Int to String and Concat' => 		'php test2.php',
	'Ruby Int to String and Concat' => 		'ruby test2.rb',
	'Python Int to String and Concat' => 		'python test2.py',
	'PHP Sequential Array Average' => 		'php test3.php',
	'Ruby Sequential Array Average' => 		'ruby test3.rb',
	'Python Sequential Array Average' => 		'python test3.py',
	'PHP Random Array Average' => 			'php test4.php',
	'Ruby Random Array Average' => 			'ruby test4.rb',
	'Python Random Array Average' => 		'python test4.py',
	'PHP String Interpolation' => 			'php test5.php',
	'Ruby String Interpolation' => 			'ruby test5.rb',
	'Python String Interpolation' => 		'python test5.py',
	'Perl String Interpolation' => 			'perl test5.pl',
	'PHP 100,000 Iteration while loop' => 		'php test6.php', 
	'Ruby 100,000 Iteration while loop' => 		'ruby test6.rb',
	'Python 100,000 Iteration while loop' => 	'python test6.py',
	'Perl 100,000 Iteration while loop' =>		'perl test6.pl',
	'Node.js 100,000 Iteration while loop' =>	'node test6.js',
	'PHP 100,000-Item Array Traversal' => 		'php test7.php',
	'Ruby 100,000-Item Array Traversal' => 		'ruby test7.rb',
	'Python 100,000-Item Array Traversal' =>	'python test7.py',
	'Perl 100,000-Item Array Traversal' => 		'perl test7.pl',
	'Node.js 100,000-Item Array Traversal' => 	'node test7.js',
);
$mask = "|%43s |%-24s |\n";
foreach ($files as $k=>$cmd) {
	$array = array();
	$i = 0;
	while ($i < 29) {
		exec($cmd, $array[]);
		$i++;
	}
	$avg = array();
	foreach ($array as $line) {
		$avg[] = $line[0];
	}
	$the_avg = array_sum($avg) / count ($avg);
	$t_array = explode(' ', $k);
	if ($t_array[0] == 'PHP') {
		$color = "[44m";
	}
	elseif ($t_array[0] == 'Python') {
		$color = "[42m";
	}
	elseif ($t_array[0] == 'Perl') {
		$color = "[43m";
	}
	elseif ($t_array[0] == 'Node.js') {
		$color = "[37m";
	}
	else {
		$color = "[41m";
	}
	printf($mask, chr(27) . $color . $k, $the_avg . chr(27) . "[0m");
}

?>



