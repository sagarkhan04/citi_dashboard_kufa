<?php 

include('./extends/header.php');

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Portfolio Show</h1>
        </div>
    </div>
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
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td>img</td>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>

                            <td>
                                <a href="facts_edit.php?edit_id=<?= $fact['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="facts_post.php?delete_id=<?= $fact['id'] ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>