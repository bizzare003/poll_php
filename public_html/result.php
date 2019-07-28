<?php
	require_once(__DIR__ . '/../config/config.php');
	try {
		$poll = new \MyApp\Poll();
	} catch (Exception $e) {
		echo $e->getMessage();
		exit;
	}
	$result = $poll->getAnswer();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Poll Result</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<h1>Result ...</h1>
	<div class="row">
		<?php for($i = 0; $i < count($result); $i++):?>
			<div class="box" id="box_<?= h($i);?>"><?= h($result[$i]);?></div>
		<?php endfor;?>
	</div>
	<a href="/"><div id="btn">Go Back</div></a>
</body>
</html>