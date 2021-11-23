<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="ex6.php" method="POST">
    <h1>Bussiness Registration</h1>
    <div style="display: flex;width: 80%">
        <div style="width: 50%">
            <label for="Category">Click on one or control-click on multiple categories:</label>
            <br>
            <select name="Category[]" id="categories" multiple size="3">
                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $passwd = '';
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
        </div>


        <div style="width: 50%">
            <table>
                <tr>
                    <td>Bussiness Name</td>
                    <td><input type="text" name="BussinessName"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="Address"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="City"></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td><input type="text" name="Telephone"></td>
                </tr>
                <tr>
                    <td>URL</td>
                    <td><input type="text" name="URL"></td>
                </tr>

            </table>
        </div>
    </div>
   <input type="submit" value="Add Another Bussiness">
    <input type="reset" value="reset">
</form>
</body>
</html>