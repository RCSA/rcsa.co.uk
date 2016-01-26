<?php
$PAGES = json_decode(file_get_contents("data/pages.json"), true);

$page = str_replace(array("/", ".php"), array(""), $_SERVER["PHP_SELF"]);
if ($page === "index") {
    $page = "";
}
function searchItem($arr) {
    global $page;
    foreach ($arr as $name => $content) {
        if ($content === $page) {
            return array(array($name), $name);
        } else if (is_array($content)) {
            $res = searchItem($content);
            if (count($res) === 2) {
                array_push($res[0], $name);
                return array($res[0], $res[1]);
            }
        }
    }
    return array();
}
$result = searchItem($PAGES);
if ($result) {
    $actives = $result[0];
    $title = $result[1];
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo $title?> | Robinson College Students' Association</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/files/lib/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
          <span class="sr-only">Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img width="38" height="45" src="/files/lib/logo.png"> RCSA</a>
      </div>
      <div id="nav-collapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
<?php
function genMenu($arr) {
  global $actives;

  foreach ($arr as $name => $content) {
    if (substr($name, 0, 2) === "//") {
      # pass
    } else if (is_array($content)) {
      if (in_array ($name, $actives)) {
        echo "<li class=\"dropdown active\">\n";
      } else {
        echo "<li class=\"dropdown\">\n";
      }
      echo "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">$name<span class=\"caret\"></span></a>\n";
      echo "<ul class=\"dropdown-menu\">\n";
      genMenu($content);
      echo "</ul>\n";
      echo "</li>\n";
    } else {
      if (in_array ($name, $actives)) {
        echo "<li class=\"active\">";
      } else {
        echo "<li>";
      }
      echo "<a href=\"/$content\">$name</a></li>\n";
    }
  }
}
genMenu($PAGES);
?>
        </ul>
      </div>
    </div>
    </nav>
    <div class="container">
