<?php
	$tanggal1 = "01-11-2018";
	$tanggal2 = "05-11-2018";

	$satu 	= date('Y-m-d',strtotime($tanggal1));
	$dua 	= date('Y-m-d',strtotime($tanggal2));

	function betweenDays($satu,$dua)
	{
		while ($satu <= $dua) {
			echo "'".$satu."',";
			$satu = date('Y-m-d',strtotime("+1 day", strtotime($satu)));
		}
	}

	echo betweenDays($satu,$dua);
?>