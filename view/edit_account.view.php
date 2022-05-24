<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>
<div class="container">
    <img class="profile-image img-fluid" src="asset/img/user.png" alt="">
    <form action="login_register.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <lable>First name</lable>
                <input class="form-control mb-3" type="text" name="first_name" placeholder="First name">
            </div>
            <div class="col-md-6">
                <lable>Last name</lable>
                <input class="form-control mb-3" type="text" name="last_name" placeholder="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <lable>Date of birth</lable>
                <input class="form-control mb-3" type="date" name="birth" placeholder="First name">
            </div>
            <div class="col-md-6">
                <lable>Gender</lable>
                <select name="gender" class="form-control mb-3">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <lable>Choose image</lable>
                <label class="form-control btn btn-info" for="profile">Browse</label>
                <input id="profile" class="d-none form-control mb-3" type="file" name="email" placeholder="E-mail">
            </div>
            <div class="col-md-6">
                <lable>E-mail</lable>
                <input class="form-control mb-3" type="email" name="email" placeholder="E-mail">
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-primary px-5" name="register" type="submit">Save changes</button>
        </div>
    </form>
</div>
<?php require "partials/footer.php" ?>
