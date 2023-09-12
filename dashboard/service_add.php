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
                <form class="row g-3">

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Service Title</label>
                        <input type="text" class="form-control" id="inputEmail4" name="title">
                    </div>

                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Service Discription</label>
                        <textarea name="discription" id="" class="form-control" cols="20" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="showThat" disabled>
                    </div>

                    <div class="card">
                        <div class="card-body">
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




                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php 

include('./extends/footer.php')

?>