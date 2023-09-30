<?php 
    include('./extends/header.php');

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Testimonial Add</h1>
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
                <h3>Testimonial add</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="testimonial_post.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">

                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Sub Name</label>
                        <input type="text" class="form-control" placeholder="Sub Name" name="sub_name">

                    </div>
                    <div class="col-md-7">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="80" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Testimonial Image</label>
                        <input type="file" class="form-control" name="image">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="testimonial_btn">Insert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
    include('./extends/footer.php')
?>