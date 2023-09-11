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
                            <h2>Update</h2>
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


                                <!-- <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="">
                                <div id="emailHelp" class="form-text">
                                </div> -->

                                <button class="btn btn-success mt-4" name="name_update">name update</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <!--========================= success sms  ==========================-->
                    <?php if(isset($_SESSION['password_success'])) : ?>
                    <div class="alert alert-custom" role="alert">
                        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
                        <div class="alert-content">
                            <span class="alert-title">Congratulation,</span>
                            <span class="alert-text"><?= ($_SESSION['password_success']); ?></span>
                        </div>

                    </div>
                    <?php endif; unset($_SESSION['password_success']); ?>
                    <!--========================= success sms end  ==========================-->

                    <!--========================= error sms  ==========================-->
                    <?php if(isset($_SESSION['password_error'])) : ?>
                    <div class="alert alert-custom" role="alert">
                        <div class="custom-alert-icon icon-danger"><i class="material-icons-outline">close</i></div>
                        <div class="alert-content">
                            <span class="alert-title">OOPS,</span>
                            <span class="alert-text"><?= ($_SESSION['password_error']); ?></span>
                        </div>

                    </div>
                    <?php endif; unset($_SESSION['password_error']); ?>
                    <!--========================= error sms end  ==========================-->

                    <div class="card">
                        <div class="card-header">
                            <h2>Update</h2>
                        </div>
                        <div class="card-body">
                            <form action="profile_update.php" method="POST">

                                <!--=================== input Current Password ===================================-->
                                <label for="exampleInputEmail1" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="current_password">
                                <!--=================== input Current Password end  ===================================-->

                                <!--=================== input New Password  ===================================-->
                                <label for="exampleInputEmail1" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="new_password">
                                <!--=================== input New Password end ===================================-->

                                <!--=================== input confirm Password ===================================-->
                                <label for="exampleInputEmail1" class="form-label">confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="confirm_password">

                                <!--=================== input confirm Password ===================================-->
                                <button class="btn btn-success mt-4" name="password_update">password update</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">

                        <div class="card">
                            <div class="card-header">
                                <h2>Profile Image</h2>
                            </div>
                            <div class="card-body">
                                <form action="profile_update.php" method="POST" enctype="multipart/form-data">

                                    <!--=================== input Current Password ===================================-->
                                    <img src="../images/profile-image/<?= $_SESSION['admin_image'] ?>" alt=""
                                        style="border-radius: 50%;"><br>
                                    <label for="exampleInputEmail1" class="form-label">image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="image">
                                    <!--=================== input Current Password end  ===================================-->


                                    <!--=================== input confirm Password ===================================-->
                                    <button class="btn btn-success mt-4" name="image_update">password update</button>
                                </form>
                            </div>
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