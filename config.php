<?php

$name         = "Eana Hufwe";
$name_zh      = "蓝色之风";
$phone        = false;
$phones       = [];
$location     = false;
$locations    = [];
$locations_zh = [];
$pdf          = false;
$pdfurl       = "";
$pdfurl_zh    = "";
$has_para     = false;

$parameter = $_SERVER['QUERY_STRING'];

$keys = ['uni', 'intern'];

if (array_search($parameter, $keys) > -1) {
	$has_para = true;
	$name     = "Han Jin";
	$name_zh  = "韩今";
	$phone    = true;
	$phones   = [
		"+61431575189" => "+61 (4) 31 575 189",
		"+14243412230" => "+1 (424) 341-2230",
	];
	$location     = true;
	$locations    = ["Melbourne, Australia"];
	$locations_zh = ["澳大利亚，墨尔本"];
	$pdf          = true;
	$pdfurl       = "Han-Jin_Software-Web-Developement-Intern.pdf";
	$pdfurl_zh    = "韩今-简历-Web-前后端、软件开发实习.pdf";
}