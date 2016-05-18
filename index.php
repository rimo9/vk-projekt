<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Moosipurk</title>
  <script src="app.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="menu">
    <ul class="menu-list">
      <li class="menu-item"><a href="#home-view" class="menu-link home-view active-menu">Avaleht</a></li>
      <li class="menu-item"><a href="#list-view" class="menu-link list-view">Loend</a></li>
      <li class="menu-item"><a href="logout.php" class="menu-link manage-view">Logi välja</a></li>
    </ul>
  </nav>
  <main role="main">
    <div id="list-view">
      <h1>Loend</h1>
      <input type="search" placeholder="Enter keyword" id="search"><br>
      <ul class="list-of-jars"></ul>
    </div>
    <div id="manage-view">
      <h1>Haldus</h1>
      <div class="feedback-success" id="show-feedback"></div>

      <label for="title">Nimi</label><br>
      <input type="text" name="title" class="title"><br>

      <label for="ingredients">Koostis: </label><br>
      <input type="text" name="ingredients" class="ingredients"><br>

      <button class="add-new-jar">Lisa purk</button>
    </div>
    <div id="home-view">
      <h1>Avaleht</h1>
      <div id="counter"></div>
    </div>
  </main>
</body>
</html>
