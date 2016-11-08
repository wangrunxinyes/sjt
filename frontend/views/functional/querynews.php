<?php

$url = 'http://www.baidu.com/s?tn=baidurt&rtt=1&wd=%E5%A4%8D%E6%97%A6%E5%A4%A7%E5%AD%A6&pnw=1&pbl=0&pbs=0&bsst=1&ie=utf-8';
$reuslt = curl_helper::curl($url);
$dom = Yii::app()->dom;
$html = simple_html_dom::str_get_html($reuslt);
$index = 0;
$news = array();
$time = array();
$link = array();
foreach ($html->find('td[class=f]') as $item) {
	foreach ($item->find('h3[class=t]') as $h3) {
		foreach ($h3->find('a') as $value) {
			$value->onmousedown = "";
			$link[$index] = urlencode($value->href);
			$news[$index] = trim($value->innertext());
		}
	}

	foreach ($item->find('div[class=realtime]') as $value) {
		$time[$index] = trim($value);
	}
	$index++;
	if ($index == 7) {
		break;
	}
}

foreach ($news as $key => $value) {
	news_helper::save_baidu_news($key, $value, $time[$key], $link[$key]);
}

print_r($news);
?>