<?php 

include('./extends/header.php');
include('../config/db.php');


$select_portfolios = "SELECT * FROM  portfolios";
$portfolios = mysqli_query($db_connect,$select_portfolios);

// messege na thakle no data show korbe se jonno fetch_assoc
$single_port = mysqli_fetch_assoc($portfolios);

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Portfolio Show</h1>
        </div>
    </div>


    <!--========================= success sms  ==========================-->
    <?php if(isset($_SESSION['portfolio_insert'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['portfolio_insert']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['portfolio_insert']); ?>
    <!--========================= success sms end  ==========================-->

    <!--========================= delete success sms  ==========================-->
    <?php if(isset($_SESSION['portfolio_delete'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['portfolio_delete']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['portfolio_delete']); ?>
    <!--========================= delete success sms end  ==========================-->
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">portfolio</a></li>

            </ol>
        </nav>
    </div>
    <div class="row">
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Portfolio List</h3>
                <a href="portfolio_add.php" class="btn btn-primary">Add</a>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Design Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- data na thake no data sms show korbe -->
                        <?php if($single_port) : ?>
                        <?php foreach($portfolios as $portfolio) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><img src="../images/portfolio/<?= $portfolio['image']; ?>" alt="image"
                                    style="width:80px; height:60px;"></td>
                            <td><?= $portfolio["title"]; ?></td>
                            <td><?= $portfolio["design_name"]; ?></td>
                            <td><?= $portfolio['description']; ?></td>
                            <td>
                                <a href="portfolio_post.php?port_id=<?= $portfolio['id'] ?>&status=<?= $portfolio['status']; ?>"
                                    class="btn btn-<?= $portfolio['status'] == "deactivate" ? "danger" : "success"; ?>"><?= $portfolio['status']; ?></a>
                            </td>

                            <td>
                                <a href="portfolio_edit.php?edit_id=<?= $portfolio['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="portfolio_post.php?delete_id=<?= $portfolio['id'] ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
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



<?php 

include('./extends/footer.php')

?>