<?php 

include('./extends/header.php');
include('./icons.php');

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Facts Add</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Facts add</h3>
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


                <form class="row g-3" action="facts_post.php" method="POST">

                    <div class="col-md-6 ">
                        <label for="inputEmail4" class="form-label">Number</label>
                        <input type="text" class="form-control" name="number">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Information Name</label>
                        <input type="text" class="form-control" name="info_name">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="showThat" readonly>
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

                    <!--=================== icon input ===================-->



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="facts_btn">Fact Insert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>