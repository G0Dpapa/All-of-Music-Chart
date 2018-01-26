<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All of music Chart</title>
    <script src="js.js" charset="utf-8"></script>
    <script src="jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><a href="index.php">All of Music Chart</a></h1>
    <div id="grid1">
    <a href="KR.html">Korea</a>
    <a href="US.html">US</a>
  </div>
  <div id="grid2">
    <div>
  <ul>
  <li><a href="KR.php?id=melon">Melon</a></li>
  <li><a href="KR.php?id=genie">Genie</a></li>
  <li><a href="KR.php?id=bugs">Bugs</a></li>
  <li><a href="KR.php?id=mnet">Mnet</a></li>
</ul>
</div>
<h2><?php echo $_GET['id']; ?></h2>
</div>
  </body>
</html>
