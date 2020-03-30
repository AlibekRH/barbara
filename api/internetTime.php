<?php
	date_default_timezone_set("Asia/Almaty");
	echo json_encode(
		["time"=>(date("H").(":").date("i").(" ").date("d").("-").date("m").("-").date("Y"))]);
?>
