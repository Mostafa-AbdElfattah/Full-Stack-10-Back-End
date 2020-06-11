<div class="container">

    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pdo = Database::connect();
                    $getCustomers = $pdo->prepare('SELECT * FROM customers ORDER BY id DESC');
                    $getCustomers->execute();

                    if($getCustomers->rowCount() > 0) {
                        while ($row = $getCustomers->fetch()) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>' . PHP_EOL;
                            echo '<td>'. $row['email'] . '</td>' . PHP_EOL;
                            echo '<td>'. $row['mobile'] . '</td>' . PHP_EOL;
                            echo '<td>' . PHP_EOL;
                            echo '<a class="btn btn-default" href="/?p=read&id='.$row['id'].'">Read</a>' . PHP_EOL;
                            echo '<a class="btn btn-success" href="/?p=update&id='.$row['id'].'">Update</a>' . PHP_EOL;
                            echo '<a class="btn btn-danger" href="/?p=delete&id='.$row['id'].'">Delete</a>' . PHP_EOL;
                            echo '</td>' . PHP_EOL;
                            echo '</tr>' . PHP_EOL;
                        }
                    } else {
                        echo '<tr>';
                        echo '<td>Add New Customer</td>' . PHP_EOL;
                        echo '<td>Add New Customer</td>' . PHP_EOL;
                        echo '<td>Add New Customer</td>' . PHP_EOL;
                        echo '<td>Add New Customer</td>' . PHP_EOL;
                        echo '</tr>';
                    }

                    Database::disconnect();
                ?>
            </tbody>
        </table>
    </div>
</div>

