<?php 

include('./extends/header.php');
include('../config/db.php');


$select_brands = "SELECT * FROM  brands";
$brands = mysqli_query($db_connect,$select_brands);

// messege na thakle no data show korbe se jonno fetch_assoc
$single_port = mysqli_fetch_assoc($brands);

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Brand Show</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Brand</a></li>

            </ol>
        </nav>
    </div>
    <div class="row">
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Brand List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if($single_port) : ?>
                            <?php foreach($brands as $brand) :?>
                            <tr>
                                <th scope="row"><?= ++$serial ?></th>
                                <td><?= $brand['brand_name']?></td>

                                <td><img src="../images/testimonial/<?= $brand['image']?>" alt="image"
                                        style="width:80px; height:60px;"></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="brand_edit.php?edit_id=<?= $brand['id'] ?>"
                                            class="btn btn-secondary btn-sm">Edit</a>

                                        <a href="brand_post.php?delete_id=<?= $brand['id'] ?>"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No Data Found!</td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>