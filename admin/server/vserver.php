<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> All Products
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name of Product</th>
                        <th>Price of Product</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name of Product</th>
                        <th>Price of Product</th>
                    </tr>
                </tfoot>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = 'SELECT * from products';
                if (mysqli_query($conn, $sql)) {
                    echo "";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $count = 1;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                            <tr>
                                <th>
                                    <?php echo $row['id']; ?>
                                </th>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['price']; ?>
                                </td>
                                <td>
                            </tr>
                        </tbody>
                <?php
                        $count++;
                    }
                } else {
                    echo '0 results';
                }
                ?>
            </table>
        </div>
    </div>
</div>