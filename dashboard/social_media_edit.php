<?php 
    include('../config/db.php');
    include('./extends/header.php');
    include('./icons.php');

    $id = $_GET["edit_id"];

    $select_social_media = "SELECT * FROM  social_medias WHERE id = '$id'";
    $medias = mysqli_query($db_connect,$select_social_media);
    $media = mysqli_fetch_assoc($medias);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Social Media</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3>Social media add</h3>
            </div>
            <div class="card-body">


                <!--========================= error sms  ==========================-->
                <?php if(isset($_SESSION['service_error'])) : ?>
                <div class="alert alert-custom" role="alert">
                    <div class="custom-alert-icon icon-danger"><i class="material-icons-outline">close</i></div>
                    <div class="alert-content">
                        <span class="alert-title">SORRY</span>
                        <span class="alert-text"><?= ($_SESSION['service_error']); ?></span>
                    </div>

                </div>
                <?php endif; unset($_SESSION['service_error']); ?>
                <!--========================= error sms end  ==========================-->
                <!--========================= success sms  ==========================-->
                <?php if(isset($_SESSION['media_delete_success'])) : ?>
                <div class="alert alert-custom" role="alert">
                    <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
                    <div class="alert-content">
                        <span class="alert-title">Successfully</span>
                        <span class="alert-text"><?= ($_SESSION['media_delete_success']); ?></span>
                    </div>

                </div>
                <?php endif; unset($_SESSION['media_delete_success']); ?>
                <!--========================= success sms end  ==========================-->


                <form class="row g-3" action="social_media_post.php" method="POST">

                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" value="<?= $media['link']?>">

                        <input hidden type="text" name="media_id" value="<?= $media['id']?>">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="showThat" readonly
                            value="<?= $media['icon']?>">
                    </div>

                    <!--=================== icon input ===================-->

                    <div class="card">
                        <div class="card-body" style="overflow-x: scroll; height:350px;">
                            <?php foreach($icons as $icons) :?>

                            <i onclick="myfun(event)" class="<?= $icons ?>"></i>

                            <?php endforeach; ?>
                        </div>
                    </div>

                    <script>
                    let input = document.getElementById('showThat');

                    function myfun() {
                        input.value = event.target.getAttribute('class');
                    }
                    </script>

                    <!--=================== icon input ===================-->



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="social_media_btn">INSERT SOCIAL
                            MEDIA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="col-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Service List</h3>
                <a href="service_add.php" class="btn btn-primary">Add</a>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
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
                        <?php if($single_port) :?>
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
        <a href="service_edit.php?edit_id=<?= $service['id'] ?>" class="btn btn-secondary btn-sm">Edit</a>

        <a href="service_post.php?delete_id=<?= $service['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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
</div> -->

</div>




<?php 

include('./extends/footer.php')

?>