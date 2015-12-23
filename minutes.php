<?php
require "header.php";
?>
<p>This page lists the agendas and minutes from RCSA open meetings.</p>
<div class="panel-group" id="accordion">
<?php
$json = json_decode(file_get_contents("data/meetings.json"), true);
if ($json) {
    $first = key($json);
    foreach ($json as $year => $meetings) { 
?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $year?>"><?php echo $year?></a>
      </h4>
    </div>
    <div id="<?php echo $year?>" class="list-group panel-collapse collapse <?php echo ($year == $first) ? "in" : ""?>">
      <?php
        foreach ($meetings as $isodate => $contents) {
            $date =  date('jS F Y', strtotime($isodate));
            echo "<span class=\"list-group-item\">$date<br/>";
            foreach ($contents as $thing => $desc) {
                if ($thing === "Minutes") {
                    echo "<a href=\"files/meetings/minutes_$isodate.pdf\"><span class=\"glyphicon glyphicon-download\" aria-hidden=\"true\"></span> Minutes</a>&emsp;";
                } else if ($thing === "Agenda") {
                    echo "<a href=\"files/meetings/agenda_$isodate.pdf\"><span class=\"glyphicon glyphicon-download\" aria-hidden=\"true\"></span> Agenda</a>&emsp;";
                } else if ($thing === "Comments") {
                    echo "($desc)";
                } else {
                    echo "<a href=\"files/meetings/$desc\"><span class=\"glyphicon glyphicon-download\" aria-hidden=\"true\"></span> $thing</a>&emsp;";
                }
            }
            echo "</span>\n";
        }
?>
    </div>
  </div>
<?php
    }
} else {
    echo "<p>Error reading meeting information</p>";
}
?>
</div>
<?php require "footer.php"?>
