<?php require "view/partials/head.php" ?>
<?php require "view/partials/navigation.php" ?>
<?php require "view/partials/title_page.php" ?>
<div class="container">
    <div class="row m-0 justify-content-between">
        <div class="col-md-3">
            <img class="img-fluid" src="asset/img/user.png" alt="">
        </div>

        <div class="user-info col-md-8">
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

            <div class="d-flex">
                <select class="col-md-4 offset-md-8 mt-3" name="role">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
            </div>

        </div>
    </div>

</div>
<?php require "view/partials/footer.php" ?>
