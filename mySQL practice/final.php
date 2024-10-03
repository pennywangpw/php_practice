<?php
include("final_db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'final.css'; ?>
    </style>

</head>

<body>
    <!--1. read current file -->
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h1>Welcome to Penny's website!</h1><br>
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">

    </form>
</body>

</html>



<?php
//2.check if button is click, the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "the user has been registered!";


    $username = $_POST["username"];
    $password = $_POST["password"];

    //3.check both info couldn't be empty
    if (empty($username)) {
        echo "username shouldn't be empty.";
    } elseif (empty($password)) {
        echo "password shouldn't be empty.";
    } else {
        //4.once both info are provided, we want to hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);
        //5.insert into db
        $sql = "INSERT INTO users (user,password)VALUES('$username','$hash')";

        //6.we set up username as unique so we might encounter duplicate error
        try {
            mysqli_query($conn, $sql);
            echo "You are now registered!";
        } catch (mysqli_sql_exception) {
            echo "The username is taken....";
        }
    }
}
//7.登入後顯示所有人的資料在table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "the user has been registered!";


    $username = $_POST["username"];
    $password = $_POST["password"];

    //3.check both info couldn't be empty
    if (empty($username)) {
        echo "username shouldn't be empty.";
    } elseif (empty($password)) {
        echo "password shouldn't be empty.";
    } else {
        //4.once both info are provided, we want to hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);
        //5.insert into db
        $sql = "INSERT INTO users (user,password)VALUES('$username','$hash')";

        //6.we set up username as unique so we might encounter duplicate error
        try {
            mysqli_query($conn, $sql);
            echo "You are now registered!";
        } catch (mysqli_sql_exception) {
            echo "The username is taken....";
        }
        //7.get all users info and display in table
        $query_sql = "SELECT * FROM users";
        try {
            $res = mysqli_query($conn, $query_sql);

            if (mysqli_num_rows($res) > 0) {
                echo '<table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Registration Date</th>
                    </tr>
                </thead>
                <tbody>';

                while ($row = mysqli_fetch_assoc($res)) {
                    // echo "information for column {$row} <br>";
                    $id = $row["id"] . "<br>";
                    $username = $row["user"] . "<br>";
                    $regdate = $row["reg_date"] . "<br>";


                    echo "<tr>
                    <th scope='row'>{$id}</th>
                    <td>{$username}</td>
                    <td>{$regdate}</td>
                  </tr>";
                }

                echo "</tbody></table>";
            }
        } catch (mysqli_sql_exception) {
            echo "Error when select all";
        }
    }
}

mysqli_close($conn)
?>
