<?php
$empfaenger = "josefkruse@googlemail.com";
$betreff = "Die Mail-Funktion";
$from = "From: Nils Reimers <trenzalore.server@gmail.com>";
$text = "Hier lernt Ihr, wie man mit PHP Mails
verschickt";

mail($empfaenger, $betreff, $text, $from);

?>
