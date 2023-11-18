<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> View All Users
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Id</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Id</th>
                    </tr>
                </tfoot>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = 'SELECT id, first_name, last_name, email_id from users';
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
                                    <?php echo $row['first_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['last_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email_id']; ?>
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