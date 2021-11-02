<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserSorting</title>
</head>

<body>
    <?php

    function user_sort($a, $b)
    {
        // smarts is all-important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }
    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    $submitted = $_POST['submitted'] ?? null;
    $sort_type = $_POST['sort_type'] ?? "sort";
    // Check if submitted is not
    if (isset($submitted)) {
        if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            // struct: sort_function(array, 'callBack')
            $sort_type($values, 'user_sort');
        } else {
            // With this case we not need push the call back function
            $sort_type($values);
        }
    }
    function checked($type, $sort_type)
    {
        echo $type == $sort_type ? "checked" : "";
    }

    ?>
    <form action="userSorting.php" method="post">
        <p>
            <input type="radio" name="sort_type" value="sort" checked="checked" /> Standard sort<br />
            <input type="radio" name="sort_type" value="rsort" <?php checked("rsort", $sort_type) ?> /> Reverse sort<br />
            <input type="radio" name="sort_type" value="usort" <?php checked("usort", $sort_type) ?> /> User-defined sort<br />
            <input type="radio" name="sort_type" value="ksort" <?php checked("ksort", $sort_type) ?> /> Key sort<br />
            <input type="radio" name="sort_type" value="krsort" <?php checked("krsort", $sort_type) ?> /> Reverse key sort<br />
            <input type="radio" name="sort_type" value="uksort" <?php checked("uksort", $sort_type) ?> /> User-defined key sort<br />
            <input type="radio" name="sort_type" value="asort" <?php checked("asort", $sort_type) ?> /> Value sort<br />
            <input type="radio" name="sort_type" value="arsort" <?php checked("arsort", $sort_type) ?> /> Reverse value sort<br />
            <input type="radio" name="sort_type" value="uasort" <?php checked("uasort", $sort_type) ?> /> User-defined value sort<br />
        </p>
        <p align="center"><input type="submit" value="Sort" name="submitted" /></p>
        <p> Values <?= $submitted ? "sorted by $sort_type" : "unsorted"; ?>:</p>
        <ul>
            <?php
            foreach ($values as $key => $value) {
                echo "<li><b>$key</b>: $value</li>";
            }
            ?>
        </ul>
    </form>
</body>

</html>