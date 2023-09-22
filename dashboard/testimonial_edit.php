<?php 

include('./extends/header.php');

include('../config/db.php');

$id = $_GET['edit_id'];

$select_quary = "SELECT * FROM testimonials WHERE id='$id'";
$connect = mysqli_query($db_connect,$select_quary);
$testimonial = mysqli_fetch_assoc($connect);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Testimonial Edit</h1>
        </div>
    </div>
</div>
<!--========================= error sms  ==========================-->
<?php if(isset($_SESSION['testimonial_error'])) : ?>
<div class="alert alert-custom" role="alert">
    <div class="custom-alert-icon icon-danger"><i class="material-icons-outline">closed</i></div>
    <div class="alert-content">
        <span class="alert-title">Sorry</span>
        <span class="alert-text"><?= ($_SESSION['testimonial_error']); ?></span>
    </div>
</div>
<?php endif; unset($_SESSION['testimonial_error']); ?>
<!--========================= error sms end  ==========================-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Testimonial edit</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="testimonial_post.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value="<?= $testimonial['name']?>">

                        <input hidden type="text" class="form-control" name="id" value="<?= $testimonial['id']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Sub Name</label>
                        <input type="text" class="form-control" placeholder="Sub Name" name="sub_name"
                            value="<?= $testimonial['sub_name'] ?>">

                    </div>
                    <div class="col-md-7">
                        <label for="" class="form-label" placeholder="Description...">Description</label><br>
                        <textarea name="description" id="" cols="80" rows="5"
                            class="form-control"><?= $testimonial['description'] ?></textarea>
                    </div>
                    <div><img src="../images/testimonial/<?= $testimonial['image'] ?>" alt=""
                            style="width:100px; height:100px;"></div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Testimonial Image</label>
                        <input type="file" class="form-control" name="image">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="testimonial_update_btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>