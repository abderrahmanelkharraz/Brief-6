<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dataware</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto ">
        </div>
        <?php
    include('connection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">';
            echo '<div class="flex flex-col sm:-mx-4 sm:flex-row">';
            echo '<div class="mt-4 sm:mx-4 sm:mt-0">';
            echo '<h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">' . $row['nom'] . '</h1>';
            echo '<p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">' . $row['email'] . '</p>';
            echo '</div>';
            echo '<p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">' . $row['password'] . '</p>';
            echo '</div>';
            echo '<p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">' . $row['Role'] . '</p>';
            echo '</div>';

        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>

    </div>
</section>
   
</body>
</html>
