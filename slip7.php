<?php
$doc = new DOMDocument();
$doc->load("movie.xml");

$movieInfos = $doc->getElementsByTagName("MovieInfo");
// echo "hii";die;

foreach ($movieInfos as $movieInfo) {
  $movieTitle = $movieInfo->getElementsByTagName("MovieTitle")->item(0)->nodeValue;
  $actorName = $movieInfo->getElementsByTagName("ActorName")->item(0)->nodeValue;
  echo "Movie Title: " . $movieTitle . "<br>";
  echo "Actor Name: " . $actorName . "<br><br>";
}
?>
