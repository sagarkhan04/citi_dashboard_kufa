<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $select_about = "SELECT * FROM  abouts";
    $abouts = mysqli_query($db_connect,$select_about);
    $about =mysqli_fetch_assoc($abouts);

    $select_education = "SELECT * FROM  educations";
    $educations = mysqli_query($db_connect,$select_education);
    $education =mysqli_fetch_assoc($educations);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Information</h1>
        </div>
    </div>
</div>
<!--========================= about success sms  ==========================-->
<?php if(isset($_SESSION['about_update'])) : ?>
<div class="alert alert-custom" role="alert">
    <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
    <div class="alert-content">
        <span class="alert-title">Successfully</span>
        <span class="alert-text"><?= ($_SESSION['about_update']); ?></span>
    </div>

</div>
<?php endif; unset($_SESSION['about_update']); ?>
<!--========================= about success sms end  ==========================-->
<!--========================= about image success sms  ==========================-->
<?php if(isset($_SESSION['image_update'])) : ?>
<div class="alert alert-custom" role="alert">
    <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
    <div class="alert-content">
        <span class="alert-title">Successfully</span>
        <span class="alert-text"><?= ($_SESSION['image_update']); ?></span>
    </div>

</div>
<?php endif; unset($_SESSION['image_update']); ?>
<!--========================= about image success sms end  ==========================-->
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3>About</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="about_post.php" method="POST">

                    <div class="col-md-12">
                        <label for="" class="form-label">About Top</label>
                        <textarea name="" id="" cols="6" rows="4" type="text" class="form-control" placeholder=""
                            name="top_about"><?= $about['top_about']?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">About Middle</label>
                        <textarea name="" id="" cols="6" rows="4" type="text" class="form-control" placeholder=""
                            name="bottom_about"><?= $about['bottom_about']?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">About Footer</label>
                        <textarea name="" id="" cols="6" rows="4" type="text" class="form-control" placeholder=""
                            name="footer_about"><?= $about['footer_about']?></textarea>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary" name="about_btn">About Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                <h2>About Image</h2>
            </div>
            <div class="card-body">
                <form action="about_post.php" method="POST" enctype="multipart/form-data">

                    <!--=================== image update ===================================-->
                    <img src="../images/about/<?= $about['image'] ?>" alt="about_image"
                        style=" width:190px; height:190px;"><br>

                    <input type="file" class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="image">
                    <!--=================== image update end  ===================================-->


                    <!--=================== input confirm Password ===================================-->
                    <button class="btn btn-primary mt-4" name="image_update">About Image update</button>
                </form>
            </div>
        </div>
    </div>

</div>




<?php 

include('./extends/footer.php')

?>