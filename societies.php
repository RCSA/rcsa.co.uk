<?php
require "header.php";
?>
<p>Sports and Societies are one of the most important parts of university life. They are an opportunity to excel at something, try something new and meet new people. More importantly they are essential to help you relax by taking your mind off work. Societies are an important part of life at Robinson, and the friendships you make help to make Robinson a friendly and inclusive community.</p>

<p>Robinson has very competitive sports teams, and this is made possible in part by the facilities we are able to use such as our excellent pitches which are located on Barton Road, only a five minute cycle from college.</p>

<p>At Robinson, there are a huge range of sports and societies available, as shown below. If you can’t find a society for what you love to do, then you can easily start you own by speaking to the RCSA’s Sports and Societies officer.</p>

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
$json = json_decode(file_get_contents("data/societies.json"), true);
if ($json) {
    $first = key($json);
    foreach ($json as $soc => $contacts) { 
      $soc = str_replace("&", "&amp;", $soc);
      foreach ($contacts as $crsid => $name) {
        echo "<tr><td>$soc</td><td>$name</td><td>$crsid</td>";
        $soc = "";
      }
    }
}
?>
  </tbody>
</table>
<?php require "footer.php"?>
