<?php

$conn = mysqli_connect("localhost","root","","trs");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-5">
                <a href="create.php" class="btn btn-outline-primary">Add New Item</a>
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>description</th>
                        <th>Control</th>
                        <th>created_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    date_default_timezone_set("Asia/Yangon");

                    $sql = "SELECT * FROM products";
                    $query = mysqli_query($conn,$sql);
                    //                $rows = mysqli_fetch_all($query);

                    while ($row = mysqli_fetch_object($query)){
                        ?>

                        <tr>
                            <td>
                                <?php echo $row->id;?>
                            </td>
                            <td>
                                <?php echo $row->title;?>
                            </td>
                            <td>
                                <?php echo $row->price;?>
                            </td>
                            <td class="btn btn-sm btn-danger text-dark">
                                <a href="delete.php?delete=<?php echo $row->id ?>">delete</a>
                            </td>
                            <td>
                                <?php echo date("d/m/Y",strtotime($row->created_at));?>
                            </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>