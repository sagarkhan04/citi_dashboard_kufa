<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $id = $_GET["edit_id"];

    $select_quary = "SELECT * FROM educations WHERE id='$id'";
    $connect = mysqli_query($db_connect,$select_quary);
    $education = mysqli_fetch_assoc($connect);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Education Edit</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Education edit</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="education_post.php" method="POST">

                    <div class="col-md-6">
                        <label for="" class="form-label">Years</label>
                        <input type="number" class="form-control" placeholder="" name="year"
                            value="<?= $education['year']?>">
                        <input type="text" name="id" value="<?= $education['id']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Progress</label>
                        <input type="number" class="form-control" placeholder="" name="progress"
                            value="<?= $education['progress']?>">
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Subject Name</label>
                        <input type="text" class="form-control" placeholder="" name="subject"
                            value="<?= $education['subject']?>">
                    </div>
                    <div class=" col-6">
                        <button type="submit" class="btn btn-primary" name="edu_edit_btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 

    include('./extends/footer.php')

?>