<?php
require "header.php";
?>

<p>If you are considering making an application to Robinson, and would like to know more about studying your chosen subject at Robinson, then feel free to contact one of the student subject reps listed below. All addresses are @cam.ac.uk.</p>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Society</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
<?php
$json = json_decode(file_get_contents("data/subjects.json"), true);
if ($json) {
    $first = key($json);
    foreach ($json as $subject => $contacts) {
      foreach ($contacts as $crsid => $name) {
        echo "<tr><td>$subject</td><td>$name</td><td>$crsid</td>";
        $subject = "";
      }
    }
}
?>
  </tbody>
</table>
<?php require "footer.php"?>
