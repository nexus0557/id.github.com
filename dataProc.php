<?php
ini_set('memory_limit','-1');
set_time_limit(0);

$commonPath 	= ".:/home/greatmobile/_Common";
ini_set("include_path", $commonPath);
@include_once "Inc/inc.include.php";

$action = isset($_POST['action']) ? $_POST['action'] : null;

if (empty($action)) {
	exit;
}


if ($action == 'saveData') {
	$userName		= isset($_POST['userName']) ? $_POST['userName'] : null;
	$hp				= isset($_POST['hp']) ? $_POST['hp'] : null;
	$telCompany		= isset($_POST['telCompany']) ? $_POST['telCompany'] : null;
	$deviceModel	= isset($_POST['deviceModel']) ? $_POST['deviceModel'] : null;

	//print_r($items);

	if (!$userName || $userName == "") {
		$res = [
			'code'	=> 11,
			'msg'	=> '이름을 입력해 주세요.'
		];

		die(json_encode($res));
	}
	
	if (!$hp || $hp == "") {
		$res = [
			'code'	=> 12,
			'msg'	=> '연락처를 입력해 주세요.'
		];

		die(json_encode($res));
	}

	if (!$telCompany || $telCompany == "") {
		$res = [
			'code'	=> 13,
			'msg'	=> '통신사를 선택해 주세요.'
		];

		die(json_encode($res));
	}

	if (!$deviceModel || $deviceModel == "") {
		$res = [
			'code'	=> 14,
			'msg'	=> '희망기종을 선택해 주세요.'
		];

		die(json_encode($res));
	}
	
	$isWin = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "windows"));
	$isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android"));
	$isIPhone = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "iphone"));
	$isIPad = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "ipad"));
	$isIOS = $isIPhone || $isIPad;

	$userDevice = "pc";
	if ($isIOS) {
		$userDevice = "ios";
	}
	if ($isAndroid) {
		$userDevice = "android";
	}

	$data = [
		'userName'		=> $userName,
		'hp'			=> $hp,
		'telCompany'	=> $telCompany,
		'deviceModel'	=> $deviceModel,
		'userDevice'	=> $userDevice,
		'regUnixtime'	=> time()
	];

	$db->insert(DATA_TABLE, $data);
	
	$res = [
		'code'	=> 1,
		'msg'	=> 'success'

	];

	die(json_encode($res));
}