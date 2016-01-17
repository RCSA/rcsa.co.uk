<?php
require "header.php";
?>
<p>Reports from the RCSA Committee <em>should</em> be submitted bi-annualy. You can view teh various reports by selecting the appropriate date from the list below.</p>

<p>Each of member of the RCSA committee writes up a report giving a description of what they've done in their role and generally as a committee member, and sets out plans for the remainder of their term in their position.</p>
<div class="list-group">
<?php
$json = json_decode(file_get_contents("data/reports.json"), true);
if ($json) {
    foreach ($json as $item => $description) { 
        echo "<a href=\"/files/committee_reports/committee_report_$item.pdf\" class=\"list-group-item\">$description</a>";
    }
} else {
    echo "<p>Error reading meeting information</p>";
}
?>
</div>
<?php require "footer.php"?>
