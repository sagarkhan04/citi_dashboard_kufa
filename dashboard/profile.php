<?php 
include("./extends/header.php"); 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Name Update</h2>
                        </div>
                        <div class="card-body">
                            <form action="profile_update.php" method="POST">


                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name" value="<?= $_SESSION['admin_name']?>">

                                <!--=================== input ghor faka rakle error sms dekhabe  ===================================-->
                                <?php if(isset($_SESSION['name_error'])) : ?>

                                <div id="emailHelp" class="form-text text-danger"><?= $_SESSION['name_error']?>
                                </div>

                                <?php endif; unset($_SESSION['name_error']); ?>

                                <!--=================== input ghor faka rakle error sms dekhabe  ===================================-->
                                <?php if(isset($_SESSION['name_update_success'])) : ?>

                                <div id="emailHelp" class="form-text text-success">
                                    <?= $_SESSION['name_update_success']?>
                                </div>

                                <?php endif; unset($_SESSION['name_update_success']); ?>
                                <!--=================== input ghor faka rakle error sms dekhabe end ===================================-->

                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="<?= $_SESSION['admin_email']?>">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>

                                <button class="btn btn-success mt-4" name="name_update">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?php 
include("./extends/footer.php"); 

?>