<?php
	date_default_timezone_set("Asia/Kazakhstan");
	echo json_encode(
		["time"=>(date("H").(":").date("i").(" ").date("d").("-").date("m").("-").date("Y"))]);
?>
