<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7 Q2</title>
</head>
<body>
    <?php
    
        $students = [
            [
                'name' => 'Ain',
                'program' => 'BIK',
                'age' => 20
            ],
            [
                'name' => 'Sandra',
                'program' => 'BIW',
                'age' => 21
            ],
            [
                'name' => 'Iza',
                'program' => 'BIE',
                'age' => 20
            ]
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>