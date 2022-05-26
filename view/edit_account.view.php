<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>
<div class="container">

    <?php if (empty($user_info->img)): ?>
        <img class="profile-image img-fluid" src="asset/img/user.png" alt="">
    <?php else: ?>
        <img class="profile-image img-fluid" src="<?php echo UPLOAD_DIR . "/" . $user_info->img ?>" alt="">
    <?php endif; ?>

    <form action="edit_account.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user_info->id ?>">
        <div class="row">
            <div class="col-md-6">
                <lable>First name</lable>
                <input class="form-control mb-3" type="text" name="first_name" placeholder="First name"
                       value="<?php echo $user_info->first_name ?>"
                >
            </div>
            <div class="col-md-6">
                <lable>Last name</lable>
                <input class="form-control mb-3" type="text" name="last_name" placeholder="Last name"
                       value="<?php echo $user_info->last_name ?>"
                >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <lable>Date of birth</lable>
                <input class="form-control mb-3" type="date" name="date_birth" placeholder="First name"
                       value="<?php echo $user_info->date_birth ?>"
                >
            </div>
            <div class="col-md-6">
                <lable>Gender</lable>
                <select name="gender" class="form-control mb-3">
                    <?php foreach (GENDERS as $gender): ?>
                        <option <?php echo $gender === $user_info->gender ? "selected" : "" ?>
                                value="<?php echo $gender ?>"><?php echo $gender ?></option>
                    <?php endforeach; ?>


                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <lable>Choose image</lable>
                <label class="form-control btn btn-info" for="profile">Browse</label>
                <input id="profile" class="d-none form-control mb-3" type="file" name="img">
                <input type="hidden" name="old_img" value="<?php echo $user_info->img ?>">
            </div>
            <div class="col-md-6">
                <lable>E-mail</lable>
                <input class="form-control mb-3" type="email" name="email" placeholder="E-mail"
                       value="<?php echo $user_info->email ?>"
                >
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary px-5" name="register" type="submit">Save changes</button>
        </div>
    </form>
</div>
<?php require "partials/footer.php" ?>
