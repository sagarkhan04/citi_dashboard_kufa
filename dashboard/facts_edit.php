<?php 
    include('./extends/header.php');
    include('./icons.php');
    include('../config/db.php');

    $id = $_GET['edit_id'];

    $select_quary = "SELECT * FROM facts WHERE id='$id'";
    $connect = mysqli_query($db_connect,$select_quary);
    $facts = mysqli_fetch_assoc($connect);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Facts Edit</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Facts edit</h3>
            </div>
            <div class="card-body">


                <!--========================= error sms  ==========================-->
                <?php if(isset($_SESSION['facts_insert_error'])) : ?>
                <div class="alert alert-custom" role="alert">
                    <div class="custom-alert-icon icon-danger"><i class="material-icons-outline">close</i></div>
                    <div class="alert-content">
                        <span class="alert-title">SORRY</span>
                        <span class="alert-text"><?= ($_SESSION['facts_insert_error']); ?></span>
                    </div>

                </div>
                <?php endif; unset($_SESSION['facts_insert_error']); ?>
                <!--========================= error sms end  ==========================-->


                <form class="row g-3" action="facts_post.php" method="POST">

                    <div class="col-md-6 ">
                        <label for="inputEmail4" class="form-label">Number</label>
                        <input type="number" class="form-control" name="number" value="<?= $facts['number'] ?>">
                        <input hidden type=" text" value="<?= $facts['id'] ?>" name="facts_id">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Information Name</label>
                        <input type="text" class="form-control" name="info_name" value="<?= $facts['info_name'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="showThat" readonly
                            value="<?= $facts['icon'] ?>">
                    </div>

                    <!--=================== icon input ===================-->

                    <div class="card">
                        <div class="card-body" style="overflow-x: scroll; height:150px;">
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

                    <!--=================== icon input end ===================-->

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="facts_edit_btn">Fact
                            Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 

include('./extends/footer.php')

?>