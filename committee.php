<?php
require "header.php";
?>
<?php
$json = json_decode(file_get_contents("data/committee.json"), true);
if ($json !== false) {
    foreach ($json as $role => $content) {
        $name = $content["name"];
        $email = $content["email"]."@rcsa.co.uk";
        $photo = $content["photo"];
        $description = $content["description"];

        echo "<div class='committee-item'>";
        echo "<h2>$role - $name</h2>";
        echo "<img width=\"200\" height=\"200\" src=\"/files/committee_photos/$photo.jpg\" />";
        echo "<p><a class='committee-email' href=mailto:$email>$email</a></p>";
        foreach ($description as $para) {
            echo "<p>$para</p>";
        }
        echo "</div>";
    }
} else {
    echo "<p>Error reading commmittee information</p>";
}
?>

<?php require "footer.php"?>
