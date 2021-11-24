<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h1>Bussiness Listings</h1>
        <div style="display: flex;width: 80%">
            <div style="width: 50%">
                <label for="Category">Click on a category to find bussiness listings</label>
                <br>
                <select name="Category" id="categories" multiple size="3">
                    <?php
                    $host = 'db';
                    $user = 'root';
                    $passwd = 'root';
                    $database = 'mydatabase2';
                    $connect = mysqli_connect($host, $user, $passwd, $database);
                    $table_name = 'Category';
                    $SelectQuery = "Select Title from $table_name";
                    if ($data = $connect->query($SelectQuery)) {
                        print "Get data from $database was successful!</font>";
                    } else {
                        print "Get data from $database failed!</font>";
                    }
                    while ($row = mysqli_fetch_row($data)) {
                        foreach ($row as $field) {
                            print "<option value='$field'>$field </option> ";
                        }
                    }
                    ?>
                </select>
                <input type="submit" value="Find">
                <input type="reset" value="reset">
            </div>


            <div style="width: 50%">
                <table border="1">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $host = 'db';
                        $user = 'root';
                        $passwd = 'root';
                        $database = 'bussiness';
                        $connect = mysqli_connect($host, $user, $passwd, $database);
                        $table_name = 'bussinessTable';
                        $Category = $_POST["Category"];
                        $SelectQuery = "Select * from $table_name where Category like '%$Category%'";
                        print "The Query is <i>$SelectQuery</i><br>";

                        if ($data = $connect->query($SelectQuery)) {
                            print "Get data from $database was successful!</font>";
                        } else {
                            print "Get data from $database failed!</font>";
                        }
                        while ($row = mysqli_fetch_row($data)) {
                            echo "<tr>";
                            foreach ($row as $field) {
                                print " <td>$field</td>";
                            }
                            echo "</tr>";
                        }
                    }
                    ?>

                </table>
            </div>
        </div>

    </form>
</body>

</html>