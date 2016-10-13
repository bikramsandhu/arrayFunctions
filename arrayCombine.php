<?php
	$easternConf = array('Brooklyn Nets', 'New York Knicks', 'Philadelphia 76ers');
	$westernConf = array('Los Angeles Lakers', 'Sacremento Kings', 'Golden State Warriors');
	$nbaTeams = array_combine($easternConf, $westernConf);

	print_r($nbaTeams);
?>
