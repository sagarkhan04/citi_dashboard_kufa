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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>About</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="about_edu_post.php" method="POST">

                    <div class="col-md-12">
                        <label for="" class="form-label">About Top</label>
                        <input type="text" class="form-control" placeholder="" name="top_about"
                            value="<?= $about['top_about']?>">
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">About Button</label>
                        <input type="text" class="form-control" placeholder="" name="bottom_about"
                            value="<?= $about['bottom_about']?>">
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary" name="about_btn">About Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>