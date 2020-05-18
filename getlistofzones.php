<?

$data = file_get_contents('https://domains-monitor.com/domainzones/');
$matchs = array();
preg_match_all("|'>.([^\s]*) domains <|", $data, $matches); print_r($matches[1]); 
?>
