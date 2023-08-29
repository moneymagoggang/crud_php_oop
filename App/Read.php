<?php

namespace App;
require_once 'Connect.php';
class Read extends Connect{
    public function read() {
        $query = "SELECT * FROM users";
        $result = $this->connection->query($query);
        $users = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }

}
$read = new Read();
$users = $read->read();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .table {
            width:20%;
            text-align: center;
            margin: auto;
            margin-top: 150px;
        }
    </style>
</head>
<body class="text-center">
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">USERNAME</th>
        <th scope="col">PASSWORD</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['password']; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<h1>
    <a href="../App/Create.php">CREATE</a>
</h1>
<br>

<h1>
    <a href="../App/Update.php">UPDATE</a>
</h1>
<br>
<h1>
    <a href="../App/Delete.php">DELETE</a>
</h1>
</body>
</html>
