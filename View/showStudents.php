<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Номер группы</th>
        <th scope="col">Баллов</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($students)) {
        foreach($students as $row) {
          //var_dump($row);
          //exit();
            echo "<tr><td scope='col'>$row[name] </td><td scope='col'>$row[surname] </td><td scope='col'>$row[groupnumber] </td><td scope='col'>$row[score] </td>
            </tr>";
        }
    }
    ?>
    </tbody>
</table>

</body>
</html>