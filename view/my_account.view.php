<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="asset/img/user.png" alt="">
            </div>
            <div class="user-info col-md-8 offset-md-1">
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>First name:</span>Dejan</p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Last name:</span>Zivkovic</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>Date of birth:</span>16.09.1984.</p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Gender:</span>Male</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>E-mail:</span>zile028@gmail.com</p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Role:</span>admin</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>Created at:</span>23.05.2022.</p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Last login:</span>23.05.2022. 23:52</p>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <a href="edit_account.php" class="col-md-3 btn btn-primary">Edit</a>
                    <a href="delete_account.php" class="col-md-3 btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>


<?php require "partials/footer.php" ?>