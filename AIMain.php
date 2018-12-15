<?php


/**
* AI核心代码，估值一个亿
*/

while (1) {
	$str = fgets(STDIN);
	if (trim($str) == 'quit') {
		break;
	}
	$str = str_replace("吗", "", $str);
	$str = str_replace("?", "!", $str);
	$str = str_replace("？", "!", $str);
	echo $str;
}
