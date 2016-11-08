<?php

//main question
$attributes = array(
	"name" => "fudan_question",
	"identify" => "init",
	"create_time" => time(),
	"create_by" => "system",
	"state" => "1",
);

$item = new Rdb($attributes);

//main question
$attributes = array(
	"name" => "fudan_question_details",
	"serialize" => serialize(array("init")),
	"create_time" => time(),
	"ip" => "0.0.0.0",
	"identify" => "init",
);

$item = new Rdb($attributes);

//fudan_news
$attributes = array(
	'name' => 'fudan_baidu_news',
	'body' => '',
	'time' => '',
	'savetime' => time(),
);
$item = new Rdb($attributes);

?>