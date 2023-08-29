<?php

namespace App;
require_once 'Connect.php';
class Delete extends Connect{
public function delete($id) {
    $query = "DELETE FROM users WHERE id=$id";
    $result =$this->connection->query($query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $delete = new Delete();
    if($delete->delete($id)){
        echo 'DATA DELETED';
    } else {
        echo 'ERROR';
    }

}
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
html,
        body {
    height: 100%;
}

        body {
    display: flex;
    align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
    width: 100%;
    max-width: 330px;
            padding: 15px;
            margin: auto;
        }



        .form-signin .form-floating:focus-within {
    z-index: 2;
        }

        .form-signin input[type="email"] {
margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<main class="form-signin">
<?php require_once 'Read.php'; ?>

    <form action="Delete.php" method="POST">

        <h1 class="h3 mb-3 fw-normal">Please choose field,which you want to DELETE</h1>

        <div class="form-floating">
            <input type="text" class="form-control" name="id" id="floatingInput" placeholder="ENTER ID OF FIELD">
            <label for="floatingInput">ENTER ID OF FIELD</label>
        </div>
        <br>
        <h3>NEW DATA</h3>
        <div class="form-floating">
            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="USERNAME">
            <label for="floatingInput">USERNAME</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">PASSWORD</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">SUBMIT</button>

    </form>
    <h1>
        <a href="../App/Create.php">CREATE</a>
    </h1>
    <br>
    <h1>
        <a href="../App/Read.php">READ</a>
    </h1>
    <br>
    <h1>
        <a href="../App/Update.php">UPDATE</a>
    </h1>

</main>
</body>
</html>