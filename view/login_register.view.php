<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>


    <div class="container py-5">
        <div class="row py-5">

            <!--LOGIN-->
            <div class="col-md-4">
                <form class="login_form text-center" action="login_register.php" method="post">
                    <h3>Login</h3>
                    <span><?php echo isset($log_err["email"]) ? $log_err["email"] : "" ?></span>
                    <input class="form-control mb-3" type="email" name="email" placeholder="E-mail">
                    <span><?php echo isset($log_err["password"]) ? $log_err["password"] : "" ?></span>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                    <?php if (isset($is_login) && !$is_login["status"]): ?>
                        <p class="alert bg-danger"><?php echo $is_login["msg"] ?></p>
                    <?php endif; ?>
                    <button class="btn btn-primary px-5" name="login" type="submit">Login</button>
                </form>
            </div>

            <!--REGISTER-->
            <div class="register_form col-md-7 offset-md-1">
                <form action="login_register.php" method="post">
                    <h3>Register</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <lable>First name</lable>
                            <span><?php echo isset($reg_err["first_name"]) ? $reg_err["first_name"] : "" ?></span>
                            <input class="form-control mb-3" type="text" name="first_name" placeholder="First name"
                                   value="<?php echo isset($reg_data["first_name"]) ? $reg_data["first_name"] : "" ?>"
                            >
                        </div>
                        <div class="col-md-6">
                            <lable>Last name</lable>
                            <span><?php echo isset($reg_err["last_name"]) ? $reg_err["last_name"] : "" ?></span>
                            <input class="form-control mb-3" type="text" name="last_name" placeholder="Last name"
                                   value="<?php echo isset($reg_data["last_name"]) ? $reg_data["last_name"] : "" ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <lable>Date of birth</lable>
                            <span><?php echo isset($reg_err["date_birth"]) ? $reg_err["date_birth"] : "" ?></span>
                            <input class="form-control mb-3" type="date" name="date_birth"
                                   value="<?php echo isset($reg_data["date_birth"]) ? $reg_data["date_birth"] : "" ?>"
                            >
                        </div>
                        <div class="col-md-6">
                            <lable>Gender</lable>
                            <select name="gender" class="form-control mb-3">
                                <?php foreach ($genders as $gender): ?>
                                    <option <?php echo isset($reg_data["gender"]) && $gender === $reg_data["gender"] ? "selected" : "" ?>
                                            value="<?php echo $gender ?>"><?php echo $gender ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>
                    <div>
                        <lable>E-mail</lable>
                        <span><?php echo isset($reg_err["email"]) ? $reg_err["email"] : "" ?></span>
                        <input class="form-control mb-3" type="email" name="email" placeholder="E-mail"
                               value="<?php echo isset($reg_data["email"]) ? $reg_data["email"] : "" ?>"
                        >
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <lable>Password</lable>
                            <span><?php echo isset($reg_err["password"]) ? $reg_err["password"] : "" ?></span>
                            <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <lable>Repeat password</lable>
                            <span><?php echo isset($reg_err["repeat_password"]) ? $reg_err["repeat_password"] : "" ?></span>
                            <input class="form-control mb-3" type="password" name="repeat_password"
                                   placeholder="Repeat password">
                        </div>
                    </div>
                    <div class="text-center">
                        <?php if (isset($is_register) && !$is_register["status"]): ?>
                            <p class="alert bg-danger"><?php echo $is_register["msg"] ?></p>
                        <?php endif; ?>
                        <button class="btn btn-primary px-5" name="register" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "partials/footer.php" ?>