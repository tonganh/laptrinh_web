<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="ex5.php" method="POST">
        <h1>Category Administrator</h1>
        <table>
            <tr>
                <td style="background: #555555;color: white">CatId</td>
                <td style="background: #555555;color: white">Title</td>
                <td style="background: #555555;color: white">Description</td>
            </tr>
            <?php
            $host = 'db';
            $user = 'root';
            $passwd = 'root';
            $database = 'db';
            $connect = mysqli_connect($host, $user, $passwd, $database);
            $table_name = 'Category';
            $SelectQuery = "Select * from $table_name";
            if ($data = $connect->query($SelectQuery)) {
                print "Get data from $database was successful!</font>";
            } else {
                print "Get data from $database failed!</font>";
            }

            while ($row = mysqli_fetch_row($data)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td >$field </td> ";
                }
                print '</tr>';
            }
            ?>
            <tr>
                <td><input type="text" name="CatID"></td>
                <td><input type="text" name="Title"></td>
                <td><input type="text" name="Description"></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Add Category"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>

    </form>
</body>

</html>