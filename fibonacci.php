<?php 

$deret[1] = 0;
$deret[2] = 1;

$hasil .= "$deret[1], $deret[2]";
$n = 10;

for($i=3; $i<=$n; $i++){
	$x=$i-1;
	$y=$i-2;

	$deret[$i] = $deret[$x] + $deret[$y];
	$hasil .= ", $deret[$i]";
}
echo $hasil;