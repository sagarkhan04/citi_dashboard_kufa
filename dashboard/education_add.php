<?php 

include('./extends/header.php');

include('../config/db.php');

$select_education = "SELECT * FROM  educations";
$educations = mysqli_query($db_connect,$select_education);
$education =mysqli_fetch_assoc($educations);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Education Add</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Education add</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="education_post.php" method="POST">

                    <div class="col-md-6">
                        <label for="" class="form-label">Years</label>
                        <input type="number" class="form-control" placeholder="" name="year">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Progress</label>
                        <input type="number" class="form-control" placeholder="" name="progress">
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Subject Name</label>
                        <input type="text" class="form-control" placeholder="" name="subject">
                    </div>
                    <div class=" col-6">
                        <button type="submit" class="btn btn-primary" name="edu_btn">Insert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>