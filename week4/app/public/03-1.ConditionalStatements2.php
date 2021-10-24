<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="03-1.ConditionalStatements.php" method="post">
        Enter your name and select date and time for the appointment <br>
        Name: <input type="text" size="15" maxlength="20" name="name"><br>
        <table>
            <tr>
                <td>Date: </td>
                <td>
                    <select name="day" id="">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="month" id="">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="year" id="">
                        <?php
                        for ($i = 1945; $i <= 2030; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hours" id="">
                        <?php
                        for ($i = 00; $i <= 23; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="minutes" id="">
                        <?php
                        for ($i = 00; $i < 60; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                    <select name="seconds" id="">
                        <?php
                        for ($i = 00; $i < 60; $i++) {
                            print("<option>$i</option>");
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Click To Submit">
        <input type="reset" value="Erase and Restart">
    </form>
</body>

</html>