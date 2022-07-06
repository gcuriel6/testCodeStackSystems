<?php
$data = json_decode(file_get_contents('https://gorest.co.in/public/v2/users'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $user) {
                    if($user["status"] == "active"){
                        $id = $user["id"];
                        $name = $user["name"];
                        $email = $user["email"];
                        $gender = $user["gender"];

                        echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$gender</td>
                            </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>