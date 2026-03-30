<?php
$sk = 99;
$kiek = 1;
print("Pradinis skaicius: $sk");
print("<br>");
while ($sk != 1){
	if($sk % 2 == 0){
		$sk = $sk/2;
	print($sk);
	print("<br>");
	$kiek++;}
	
	else {$sk=$sk*3+1;
	print($sk);
	print("<br>");
	$kiek++;}
}
print("<br>");
print("Iteraciju skaicius: $kiek");
	
?>