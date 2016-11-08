<?php

set_time_limit(0);

$i = 0;

$url =

$continue = true;
while ($continue) {
	if ($i > 10) {
		$continue = false;
	}
	$i++;
	$data = curl_helper::curl($url);
}

?>