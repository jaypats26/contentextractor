<?php

$file='sampletext.txt';
$contents = @file_get_contents($file);
if($contents === FALSE) {
	echo "<script>console.log('File Doesnot Exist');</script>";
}else{
	preg_match_all("/(?<=\[).+?(?=\])/", $contents, $matches,PREG_PATTERN_ORDER);
	echo "<script>console.log('Total ". count($matches[0])." matches found');</script>";
	foreach ($matches[0] as $match) {
		echo "<script>console.log('". $match."');</script>";
	}
}
?>