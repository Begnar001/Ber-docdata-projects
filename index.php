<?php
$phpinfo();
echo "to jest test";
$zmienna =33 ;
$zmienna_tekst = 'To jest jakis tekst. Poprawka';

echo $zmienna;


if (isset($_POST['password'])) {
	$password = $_POST['password'];
	$print_station_no = $_POST['print_station_no'];
} else {
	$password = "";
	$print_station_no = "??";
}
//Setting Cockie to save Print station information. Need password and station number.
if ($password == "1234") {
	$print_station_id = $print_station_no;
	setcookie("print_station_no_saved", $print_station_id, $expire);
} else {
	if (isset($_COOKIE["print_station_no_saved"])) {
		$print_station_id = $_COOKIE["print_station_no_saved"];
	} else {
		$print_station_id = "??";
	}
}



?>
