<?php include('server/pserver.php')?>
<?php include('layouts/upper.php')?>

    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Product</h1>
            <form method="post" action="create_product.php">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="pname" required>
                </div>
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary" name="reg_p">Submit</button>
            </form>
        </div>
    </main>
</div>
<?php include('layouts/bottom.php')?>



