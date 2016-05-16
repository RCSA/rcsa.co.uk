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
$count = 0;
if ($json) {
    $first = key($json);
    foreach ($json as $soc => $details) { 
      $soc = str_replace("&", "&amp;", $soc);
      if (!empty($details["details"])) {
        echo <<<EOT
<div id='soc-$count-description' class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">$soc</h4>
      </div>
      <div class="modal-body">
EOT;
        include "files/societies/".$details["details"].".html";
        echo <<<EOT
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
EOT;
        $soc .= "&nbsp;<a href='#soc-$count-description' data-toggle='modal' data-keyboard='true' class='glyphicon glyphicon-info-sign'></a>";
        $count ++;
      }
      foreach ($details["contacts"] as $crsid => $name) {
        echo "<tr><td>$soc</td><td>$name</td><td>$crsid</td></tr>";
        $soc = "";
      }
    }
}
?>
  </tbody>
</table>
<?php require "footer.php"?>
