<?php

    $arg1 = (int)$_POST['arg1'];
    $arg2 = (int)$_POST['arg2'];

	
	$summ=$arg1+$arg2;
	
	$str="{$arg1} + {$arg2} ={$summ}";
	
	$file=fopen("data.txt", 'w');
	fputs($file, $str);
	fclose($file);
	
	
	$response['result'] = $arg1+$arg2;
	echo json_encode($response);