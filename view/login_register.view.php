<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>


    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-4">
                <form class="text-center" action="login_register.php" method="post">
                    <h3>Login</h3>
                    <input class="form-control mb-3" type="email" name="email" placeholder="E-mail">
                    <input class="form-control mb-3" type="password" name="email" placeholder="Password">
                    <button class="btn btn-primary px-5" name="login" type="submit">Login</button>
                </form>
            </div>
            <div class="col-md-7 offset-md-1">
                <form action="login_register.php" method="post">
                    <h3>Register</h3>
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
                    <div>
                        <lable>E-mail</lable>
                        <input class="form-control mb-3" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <lable>Password</lable>
                            <input class="form-control mb-3" type="password" name="email" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <lable>Repeat password</lable>
                            <input class="form-control mb-3" type="password" name="email" placeholder="Repeat password">
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary px-5" name="register" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "partials/footer.php" ?>