<?php 

include('./extends/header.php');
include('../config/db.php');



$select_service = "SELECT * FROM  services";
$services = mysqli_query($db_connect,$select_service);

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Service</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Services</a></li>

            </ol>
        </nav>
    </div>
    <!--========================= success sms  ==========================-->
    <?php if(isset($_SESSION['service_insert'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['service_insert']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['service_insert']); ?>
    <!--========================= success sms end  ==========================-->

    <!--========================= Delete sms  ==========================-->
    <?php if(isset($_SESSION['service_delete'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['service_delete']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['service_delete']); ?>
    <!--========================= Delete sms end  ==========================-->
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Service List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($services as $service) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><?= $service['icon'] ?></td>
                            <td><?= $service['title'] ?></td>
                            <td><textarea name="" id="" cols="60" rows="2"
                                    disabled><?= $service['description'] ?></textarea></td>
                            <!--========================= active status  ==========================-->
                            <td>
                                <?php if($service['status'] == 'active') :?>
                                <button class="btn btn-success"><?= $service['status'] ?></button>
                                <?php else: ?>
                                <button class="btn btn-danger"><?= $service['status'] ?></button>
                                <?php endif;?>
                            </td>
                            <!--========================= active status end ==========================-->
                            <td>
                                <a href="service_edit.php?edit_id=<?= $service['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="service_post.php?delete_id=<?= $service['id'] ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>