<?php 

include('../config/db.php');
include('./extends/header.php');

$contact_select = "SELECT * FROM contact";
$connect = mysqli_query($db_connect,$contact_select);
$data = mysqli_fetch_assoc($connect);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Defult Page</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Defult page</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="contact_post.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <label for="" class="form-label">Facebook</label>
                        <input type="text" class="form-control" placeholder="Facebook" name="facebook"
                            value="<?= $data['facebook'] ?>">

                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Twitter</label>
                        <input type="text" class="form-control" placeholder="Twitter" name="twitter"
                            value="<?= $data['twitter'] ?>">

                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Instagram</label>
                        <input type="text" class="form-control" placeholder="Instagram" name="instagram"
                            value="<?= $data['instagram'] ?>">

                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Github</label>
                        <input type="text" class="form-control" placeholder="github" name="github"
                            value="<?= $data['github'] ?>">

                    </div>

                    <div class="col-md-12">
                        <label for="" class="form-label">LinkedIn</label>
                        <input type="text" class="form-control" placeholder="LinkedIn" name="linkedin"
                            value="<?= $data['linkedin'] ?>">

                    </div>

                    <div class="col-md-12">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email"
                            value="<?= $data['email'] ?>">

                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone"
                            value="<?= $data['phone'] ?>">

                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address"
                            value="<?= $data['address'] ?>">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="insert_btn">Update Contact Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>