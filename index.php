<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = 2656;
    $dbname = "post_blog";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Run SELECT query
    $sql = "SELECT * FROM table_name";
    $result = mysqli_query($conn, $sql);

    // Loop through the results and output the values
    while ($row = mysqli_fetch_assoc($result)) {
        $value1 = $row['column_name1'];
        $value2 = $row['column_name2'];
        $value3 = $row['column_name3'];
        echo "Value 1: " . $value1 . "<br>";
        echo "Value 2: " . $value2 . "<br>";
        echo "Value 3: " . $value3 . "<br>";
    }

    // Close connection
    mysqli_close($conn);

    ?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark bg-dark mb-2">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">pablodeas</span>
            <a href="./index.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">about me</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-lg">
        <div class="container-fluid  d-flex justify-content-center">
            <h1 class="display-5">
                Título do Post
            </h1>
        </div>
        <div class="container-fluid col-lg-6 mx-auto">
            <h1 class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dignissimos veniam tempora eaque sapiente laudantium? Accusantium inventore culpa vitae quidem ad dolores debitis aliquid saepe odit? Neque architecto maxime aspernatur!
            </h1>
        </div>
        <div class="container-fluid">
            <p class="card-text text-center mb-5">
                Exemplo de Autor
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="card text-center">
        <p class="card-text bg-light" style="transform: rotate(0);">
            Developed by <a href="https://www.linkedin.com/in/pablo-de-andrade-silva-678b71169/" class="link-dark fw-semibold text-decoration-none">Pablo A. Silva</a>
        </p>
    </div>




</body>

</html>