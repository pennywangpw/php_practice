
<?php
include("db_connection.php");
?>

<?php include 'table.css';

// $conn = pg_connect("host=localhost  dbname=test  user=postgres password=postgres");

//ensure db is connected
if ($conn) {
    //query all from db
    $sql = "SELECT * FROM users";
    $res = pg_query($conn, $sql);
    $arr = pg_fetch_all($res); //return an array with rows.

    print_r($arr);


    //get all fields
    //create a table to list all fields from data which query from db
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>User List</title>
        <link rel='stylesheet' type='text/css' href='table.css'>

    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>

                </tr>
            </thead>
            <tbody>";

    foreach ($arr as $row) {

        $id = $row["id"];
        $name = $row["name"];
        $phone = $row["phone"];
        $email = $row["email"];

        echo "
            <tr>
                <td>{$id}</td>
                <td>{$name}</td>
                <td>{$phone}</td>
                <td>{$email}</td>

            </tr><br>
        ";
    }
    echo "</tbody></table></body></html>";
};
