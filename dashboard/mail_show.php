<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $select_mail = "SELECT * FROM  mails";
    $mails = mysqli_query($db_connect,$select_mail);

    $serial = 0;

?>

<div class="row">
    <div class="col">
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mail</a></li>

            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-12">
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Mails List</h3>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mails as $mail) :?>
                        <tr>
                            <th scope="row" class="align-middle"><?= ++$serial ?></th>
                            <td class="align-middle"><?= $mail["name"]; ?></td>
                            <td class="align-middle"><?= $mail["email"]; ?></td>
                            <td class="align-middle"><?= $mail["subject"]; ?></td>
                            <td class="align-middle"><textarea disabled name="" id="" cols="60"
                                    rows="2"><?= $mail["message"]; ?></textarea>
                            </td>
                            <td class="align-middle">
                                <!-- <a href="mail_edit.php?edit_id=<?= $mail['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a> -->

                                <a href="mail_post.php?delete_id=<?= $mail['id'] ?>"
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