#!/usr/bin/perl

use Time::HiRes qw(gettimeofday);
$i = 0;

$t0 = gettimeofday();
while ($i < 100000) {
	$i++;
}
print gettimeofday() - $t0;
print "\n";
