# This is how you conect to a localhost database

<To connect a database to a PHP script, you will need to use PHP's built-in mysqli_connect() function. This function takes several arguments, including the server name, username, password, and database name, and returns a connection object if the connection is successful.
Here's an example of how to use the mysqli_connect() function to connect to a MySQL database:>

<?php

// Connection parameters
$server = "localhost";
$username = "username";
$password = "password";
$database = "database_name";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

<You can then use the connection object to run queries on the database. For example, to run a SELECT query and print the results, you can use the mysqli_query() function:>

<?php

// Connection parameters
$server = "localhost";
$username = "username";
$password = "password";
$database = "database_name";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Run SELECT query
$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql);

// Print results
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

// Close connection
mysqli_close($conn);

?>

<Note that this example uses the MySQL Improved (MySQLi) extension, which is a more modern and improved version of the original MySQL extension. It is recommended to use MySQLi or PDO (PHP Data Objects) for connecting to databases in PHP.>

<Here is an example of how your PHP script conecting to the database and returning all the content.>

<?php

// Connection parameters
$server = "localhost";
$username = "username";
$password = "password";
$database = "database_name";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Run SELECT query
$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($conn, $sql);

// Loop through the results and output the blog posts
while ($row = mysqli_fetch_assoc($result)) {
  $title = $row['title'];
  $body = $row['body'];
  $author = $row['author'];
  $date = $row['date'];
?>

<!-- Use Bootstrap to style and layout the blog post -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h2><?php echo $title; ?></h2>
      <p><?php echo $body; ?></p>
      <p><em>By <?php echo $author; ?> on <?php echo $date; ?></em></p>
    </div>
  </div>
</div>

<?php
}

// Close connection
mysqli_close($conn);

?>
