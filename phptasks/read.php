<?php

$myfile = fopen("data.html", "r") or die("Unable to open file!");
echo fread($myfile, filesize("data.html"));
fclose($myfile);
