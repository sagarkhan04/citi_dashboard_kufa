<?php 

include('./extends/header.php');
include('./icons.php');

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Service Add</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Servies add</h3>
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


                <form class="row g-3" action="service_post.php" method="POST">

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Service Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Service description</label>
                        <textarea name="description" id="" class="form-control" cols="20" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="showThat" readonly>
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
                        <button type="submit" class="btn btn-primary" name="insert_btn">INSERT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>