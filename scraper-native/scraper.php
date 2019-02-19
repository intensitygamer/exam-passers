<?php

include('simplehtmldom/simple_html_dom.php');

// get DOM from URL or file
$url = "http://www.pshs.edu.ph/nce2018/";

$html = file_get_html($url);

$con = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($con, "scraper_exam");

$cnt = 0;

echo "<table>";

//.border_list

foreach($html->find('.container_list  div.border_list') as $element) {

 	// $examinee 			= $element->childNodes(1)->innertext;

	// $campus_eligibility = $element->childNodes(2)->innertext;

	// $school 			= $element->childNodes(3)->innertext;

	// $division			= $element->childNodes(4)->innertext;

	$col = $cnt % 5 + 1;

	if($col == 1){

	 	echo "<tr><td>" . $element->innertext ;
		$examinee_id = mysqli_real_escape_string($con, $element->innertext);

	}

	if($col == 2){

	 	echo "<td>" . $element->innertext ;
		$examinee = mysqli_real_escape_string($con, $element->innertext);

	}

	if($col == 3){

	 	echo "<td>" . $element->innertext ;
		$campus_eligibility = mysqli_real_escape_string($con, $element->innertext);

	}

	if($col == 4){

	 	echo "<td>" . $element->innertext ;
		$school 	= mysqli_real_escape_string($con, $element->innertext);

	} 

	if($col == 5){

	 	echo "<td>" . $element->innertext ;
		$division 	= mysqli_real_escape_string($con, $element->innertext);

		mysqli_query($con, "INSERT INTO passers VALUES('$examinee_id', '$examinee', '$campus_eligibility', '$school', '$division') ") or die(mysqli_error($con));
	}

 	$cnt++;
}

echo "</table>";

 
?>