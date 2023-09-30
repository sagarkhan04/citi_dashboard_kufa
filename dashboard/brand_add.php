<?php 
    include('./extends/header.php');
?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Brand Add</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Brand add</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="brand_post.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" placeholder="Brand Name" name="brand_name">

                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Brand Image</label>
                        <input type="file" class="form-control" name="image">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="insert_btn">Insert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 

include('./extends/footer.php')

?>