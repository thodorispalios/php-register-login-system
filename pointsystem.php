<?php
	$easylvl 	= 10;
	$mediumlvl	= 20;
	$hardlvl 	= 40;

	if ($hardness = $easylvl){
		$points = $easylvl * (1 - ($timerecord / $timeleft));
	}else if ($hardness = $mediumlvl){
		$points = $mediumlvl * (1 - ($timerecord / $timeleft));
	}else if ($hardness = $hardlvl){
		$points = $hardlvl * (1 - ($timerecord / $timeleft));
	}

?>