<?php
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "SELECT * FROM message";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>

      <div class="heading">
        <div class="headingtext">
          <i class="fa-solid fa-ghost"></i>
          <h1 style="user-select: none;"><a href="dashboard.php">SoulShare</a></h1> 
        <div class="navbar">
          <nav class="nav">
            <ul class="nav-links">

              <li><a href="#">Login</a></li>
              <li><a href="#">Bookmarks</a></li>
              <li><a href="#">About Us</a></li>
            
            </ul>
        </div>
            <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
              <i class="uil uil-search search-icon"></i>
              <input type="text" placeholder="Search here..." />
            </div>
          </nav>
        </div>                
      </div>
      <div class="writepop" id="writepop">
        
        <div class="close" id="close">
          <a href="dashboard.php"><i class="fa-solid fa-x"></i></a>
        </div>
        <div>
          <form id="noteForm" action="process-form.php" method="post">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter title..." required>
        
            <label for="content">Content</label>
            <textarea id="content" name="content" placeholder="Type here..." required></textarea>

            <label for="genre">Genre</label>
            <select id="genre" name="genre" required>
                <option value="" disabled selected>Select a genre</option>
                <option value="1">Home</option>
                <option value="2">School</option>
                <option value="3">Work</option>
            </select>
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>


      <div>
        <button class="writebutton" id="writebutton">
          <i class="fa-solid fa-pencil"></i>
        </button>
      </div>

      <div id="contentContainer">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='user-content-box'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";
            echo "<p>Genre: " . $row['genre'] . "</p>";
            echo "</div>";
        }
        ?>
    <script src="dashboard.js">
    </script>
</body>
</html>


