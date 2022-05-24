<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

<div class="container py-5">
    <div class="search-user row mb-4">
        <form class="d-flex col-md-4 offset-md-8" action="users.php" method="post">
            <input class="form-control" type="text">
            <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <div class="row flex-wrap">
        <?php for ($i = 0; $i < 7; $i++): ?>
            <div class="col-md-6 mb-3">
                <div class="border rounded-2 p-1">
                    <div class="d-flex">
                        <div class="col-md-2 me-2">
                            <img class="img-fluid" src="asset/img/user.png" alt="">
                        </div>
                        <div class="col-md-9 user-info">
                            <h4>Dejan Zivkovic</h4>
                            <p><span>Role:</span>admin</p>
                            <p><span>Date of birth:</span>16.09.1984.</p>
                            <p><span>E-mail:</span>zile028@gmail.com</p>
                        </div>
                        <div class="d-flex flex-column justify-content-between col p-0">
                            <a href="" class="btn btn-sm btn-info"><i class="bi bi-info-circle"></i></a>
                            <a href="" class="btn btn-sm btn-warning"><i class="bi bi-person-plus"></i></a>
                            <a href="" class="btn btn-sm btn-success"><i class="bi bi-chat-dots"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

</div>

<?php require "partials/footer.php" ?>
