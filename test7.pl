#!/usr/bin/perl

use Time::HiRes qw(gettimeofday);
$i = 0;
@array = ();
while ($i < 100000) {
	push(@array, $i);
	$i++;
}

$t0 = gettimeofday();
foreach $line (@array) {

}
print gettimeofday() - $t0;
print "\n";
