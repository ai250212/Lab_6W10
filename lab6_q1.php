
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

    <?php
        $name = "Muhammad Amir Asyraf Bin Nasri";
        $matricNo = "AI250212";
        $course = "BIW - Web Technology";
        $year = "Year 2";
        $address = "UTHM Parit Raja, Batu Pahat, Johor";
    ?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNo; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
