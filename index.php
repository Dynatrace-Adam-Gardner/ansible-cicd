<?php

$maxWait = 2;
$random = rand(0,$maxWait);
sleep($random);

echo "Maximum Wait Time: " . $maxWait . " seconds.";
echo "<br /><br />";
echo "Welcome. Page load paused for: " . $random . " seconds";
?>