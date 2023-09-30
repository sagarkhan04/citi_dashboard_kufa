<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $select_testimonial = "SELECT * FROM testimonials";
    $testimonials = mysqli_query($db_connect,$select_testimonial);

    $single_port = mysqli_fetch_assoc($testimonials);

    $serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Testimonial Show</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Testimonial</a></li>

            </ol>
        </nav>
    </div>

    <!--========================= add success sms  ==========================-->
    <?php if(isset($_SESSION['testimonial_insert'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['testimonial_insert']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['testimonial_insert']); ?>
    <!--========================= add success sms end  ==========================-->
    <!--========================= update sms  ==========================-->
    <?php if(isset($_SESSION['portfolio_update'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['portfolio_update']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['portfolio_update']); ?>
    <!--========================= update sms end  ==========================-->

    <!--========================= delete success sms  ==========================-->
    <?php if(isset($_SESSION['testimonial_delete'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['testimonial_delete']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['testimonial_delete']); ?>
    <!--========================= delete success sms end  ==========================-->

    <div class="row">
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Testimonial List</h3>
                <a href="testimonial_add.php" class="btn btn-primary">Add</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Sub Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if($single_port) : ?>
                            <?php foreach($testimonials as $testimonial) :?>
                            <tr>
                                <th scope="row" class="align-middle"><?= ++$serial ?></th>
                                <td><img src="../images/testimonial/<?= $testimonial['image']?>" alt=""
                                        style="width:80px; height:60px;"></td>
                                <td class="align-middle"><?= $testimonial['name']?></td>
                                <td class="align-middle"><?= $testimonial['sub_name']?></td>
                                <td class="align-middle"><textarea readonly name="description" id="" cols="30"
                                        rows="2"><?= $testimonial['description']?></textarea></td>

                                <td class="align-middle">
                                    <div class="btn-group">
                                        <a href="testimonial_edit.php?edit_id=<?= $testimonial['id'] ?>"
                                            class="btn btn-secondary btn-sm">Edit</a>

                                        <a href="testimonial_post.php?delete_id=<?= $testimonial['id'] ?>"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php else: ?>
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
</div>

<?php 

include('./extends/footer.php')

?>