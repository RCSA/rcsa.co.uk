<?php
require "header.php";
?>
<p>Editions of the RCSA newsletter, 'The Brick', are to be found below in sizzling PDF format. Please note that the views expressed in the newsletters are only those of the newsletter editor, if anyone, and very probably do not represent the opinions or policy of the RCSA. If you wish submit an article to 'The Brick' then please email it to the current <a href="mailto:newsletter@rcsa.co.uk">newsletter editor</a>. ....Please! Hope you enjoy reading through them.</p>

<div class="list-group">
<?php
$directory = new RecursiveDirectoryIterator('files/brick/');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/brick_[0-9]*\.pdf$/i', RecursiveRegexIterator::GET_MATCH);

$files_array = array();
foreach ($regex as $name => $object) {
    array_push($files_array, $name);
}

rsort($files_array);
foreach ($files_array as $name) {
    preg_match('/brick_([0-9]*)/', $name, $matches);
    $date = strtotime($matches[1]);
    $formatted = date('jS F Y', $date);
    echo "<a href=\"$name\" class=\"list-group-item\">$formatted</a>";
}
?>
</div>
<?php require "footer.php"?>
