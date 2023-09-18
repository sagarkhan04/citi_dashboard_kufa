<?php 

include('./extends/header.php');

include('../config/db.php');


$select_facts = "SELECT * FROM  facts";
$facts = mysqli_query($db_connect,$select_facts);

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Fact Show</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Facts</a></li>

            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <!--========================= success sms  ==========================-->
            <?php if(isset($_SESSION['facts_insert'])) : ?>
            <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
                <div class="alert-content">
                    <span class="alert-title">Successfully</span>
                    <span class="alert-text"><?= ($_SESSION['facts_insert']); ?></span>
                </div>

            </div>
            <?php endif; unset($_SESSION['facts_insert']); ?>
            <!--========================= success sms end  ==========================-->

            <!--========================= update sms  ==========================-->
            <?php if(isset($_SESSION['facts_update'])) : ?>
            <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
                <div class="alert-content">
                    <span class="alert-title">Successfully</span>
                    <span class="alert-text"><?= ($_SESSION['facts_update']); ?></span>
                </div>

            </div>
            <?php endif; unset($_SESSION['facts_update']); ?>
            <!--========================= update sms end  ==========================-->
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Fact List</h3>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Number</th>
                            <th scope="col">Information Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($facts as $fact) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><i class="<?= $fact["icon"]; ?>"></i></td>
                            <td><?= $fact["number"]; ?></td>
                            <td><?= $fact["info_name"]; ?></td>
                            <td>
                                <a href="facts_edit.php?edit_id=<?= $fact['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="facts_post.php?delete_id=<?= $fact['id'] ?>"
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