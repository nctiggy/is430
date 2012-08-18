<?php
class ComicHelper extends AppHelper {
	
	function getreleaseDate($date) {
		$releasedate = new DateTime($date);
		$currentdate = new DateTime();
		$interval = $releasedate->diff($currentdate);
		return $interval;
	}
	
}
