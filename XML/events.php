<?php
$xml=simplexml_load_file("event.xml") or die("Error: Cannot create object");

foreach ($xml->ce->event as $e) {
  echo $e."<br>";
}
?>
