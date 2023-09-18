<?php 

include('./extends/header.php');

include('../config/db.php');


$select_portfolios = "SELECT * FROM  portfolios";
$portfolios = mysqli_query($db_connect,$select_portfolios);

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
            <div class="card-header">
                <h3>Portfolio List</h3>
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
                        <?php foreach($portfolios as $portfolio) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><img src="../images/portfolio/<?= $portfolio["image"]; ?>" alt="image"></td>
                            <td><?= $portfolio["title"]; ?></td>
                            <td><?= $portfolio["design_name"]; ?></td>
                            <td><?= $portfolio['description']; ?></td>
                            <td><button class="btn btn-primary">active</button></td>

                            <td>
                                <a href="facts_edit.php?edit_id=<?= $fact['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="facts_post.php?delete_id=<?= $fact['id'] ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>