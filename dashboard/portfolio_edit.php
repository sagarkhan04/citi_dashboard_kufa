<?php 


include('./extends/header.php');
include('../config/db.php');

$id = $_GET['edit_id'];

$select_quary = "SELECT * FROM portfolios WHERE id='$id'";
$connect = mysqli_query($db_connect,$select_quary);
$portfolio = mysqli_fetch_assoc($connect);  

?>


<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Portfolio Edit</h1>
        </div>
    </div>
</div>

<!--========================= error sms  ==========================-->
<?php if(isset($_SESSION['portfolio_insert_error'])) : ?>
<div class="alert alert-custom" role="alert">
    <div class="custom-alert-icon icon-danger"><i class="material-icons-outline">close</i></div>
    <div class="alert-content">
        <span class="alert-title">Sorry</span>
        <span class="alert-text"><?= ($_SESSION['portfolio_insert_error']); ?></span>
    </div>
</div>
<?php endif; unset($_SESSION['portfolio_insert_error']); ?>
<!--========================= error sms end  ==========================-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Portfolio edit</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="portfolio_post.php" method="POST" enctype="multipart/form-data">


                    <div class="col-md-6">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title"
                            value="<?= $portfolio['title'] ?>">

                        <input hidden type="text" name="portfolio_id" value="<?= $portfolio['id'] ?>">

                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Design Name</label>
                        <input type="text" class="form-control" placeholder="Design Name" name="design_name"
                            value="<?= $portfolio['design_name'] ?>">

                    </div>
                    <div class="col-md-7">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Description..." name="description"
                            value="<?= $portfolio['description'] ?>">

                    </div>
                    <div>
                        <img src="../images/portfolio/<?= $portfolio['image']; ?>" alt=""
                            style="width:150px; height:150px;">
                    </div>
                    <div class="col-md-7">
                        <label for="" class="form-label">Portfolio Image</label>
                        <input type="file" class="form-control" name="image">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 


include('./extends/footer.php')


?>