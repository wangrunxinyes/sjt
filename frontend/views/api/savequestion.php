<?php

$debug = false;

//test data
if ($debug) {
	$qid = 2;
	$sk = md5(session_id() . $qid);

	$array = array(
		"type" => md5("question"),
		"identify" => base64_encode($qid),
		"security_key" => $sk,
		"data" => array(
			"1" => "是",
			"2" => "不是",
			"3" => "学生",
		),
	);

	$data = json_encode($array);
} else {
	//receive
	$data = $_POST['json'];
}

$question = new Question($data);
if ($question->result()) {
	echo "success";
} else {
	echo "fail, " . $question->error();
}
?>