<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $select_education = "SELECT * FROM  educations";
    $educations = mysqli_query($db_connect,$select_education);

    // messege na thakle no data show korbe se jonno fetch_assoc
    $single_port = mysqli_fetch_assoc($educations);  

    $serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Education Show</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Education</a></li>

            </ol>
        </nav>
    </div>
    <!--========================= success sms  ==========================-->
    <?php if(isset($_SESSION['education_success'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['education_success']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['education_success']); ?>
    <!--========================= success sms end  ==========================-->
    <!--========================= success sms  ==========================-->
    <?php if(isset($_SESSION['education_update_success'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['education_update_success']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['education_update_success']); ?>
    <!--========================= success sms end  ==========================-->

    <!--========================= Delete sms  ==========================-->
    <?php if(isset($_SESSION['education_delete'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['education_delete']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['education_delete']); ?>
    <!--========================= Delete sms end  ==========================-->
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Education List</h3>
                <a href="education_add.php" class="btn btn-primary">Add</a>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Year</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if($single_port) :?>
                        <?php foreach($educations as $education) :?>
                        <tr>
                            <th scope="row" class="align-middle"><?= ++$serial ?></th>
                            <td class="align-middle"><?= $education['year'] ?></td>
                            <td class="align-middle"><?= $education['subject'] ?></td>
                            <td class="align-middle"><?= $education['progress'] ?></td>
                            <td class="align-middle">
                                <div class="btn-group">
                                    <a href="education_edit.php?edit_id=<?= $education['id'] ?>"
                                        class="btn btn-secondary btn-sm">Edit</a>

                                    <a href="education_post.php?delete_id=<?= $education['id'] ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>


                        </tr>

                        <!-- data na thakle no data sms massege dekhabe -->
                        <?php endforeach; ?>
                        <?php else :?>
                        <tr>
                            <td colspan="6" class="text-center">No Data Found!</td>
                        </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php 

include('./extends/footer.php')

?>