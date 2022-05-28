<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

    <div class="container py-5">
        <div class="row m-0 justify-content-between">
            <div class="col-md-3">

                <?php if (empty($user_info->img)): ?>
                    <img class="profile-image img-fluid" src="asset/img/user.png" alt="">
                <?php else: ?>
                    <img class="profile-image img-fluid" src="<?php echo UPLOAD_DIR . "/" . $user_info->img ?>" alt="">
                <?php endif; ?>
            </div>


            <div class="user-info col-md-8">
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>First name:</span><?php echo $user_info->first_name ?></p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Last name:</span><?php echo $user_info->last_name ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>Date of birth:</span><?php echo $user_info->date_birth ?></p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Gender:</span><?php echo $user_info->gender ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>E-mail:</span><?php echo $user_info->email ?></p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Role:</span><?php echo $user_info->role ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 border-bottom">
                        <p><span>Created at:</span><?php echo $user_info->created_at ?></p>
                    </div>
                    <div class="col-md-6 border-bottom">
                        <p><span>Last login:</span><?php echo $user_info->last_login ?></p>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <a href="edit_account.php?id=<?php echo $user_info->id ?>" class="col-md-3 btn btn-primary">Edit</a>
                    <a href="delete_account.php" class="col-md-3 btn btn-danger">Delete</a>
                </div>
            </div>
        </div>

        <div class="row mt-3 no-gutters">
            <div class="col-12">
                <?php foreach ($user_posts as $post): ?>
                    <div id="post<?php echo $post->id ?>" class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4><?php echo $post->title ?></h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span><?php echo displayDateTime($post->created_at) ?></span>
                            </div>
                        </div>
                        <div class="card-body row">

                            <?php if ($post->img !== null): ?>
                                <div class="post-img">
                                    <img class=""
                                         src="<?php echo UPLOAD_DIR . "/" . $post->img ?>"
                                         alt="">
                                </div>
                            <?php endif; ?>

                            <div class="col">
                                <p><?php echo getExcerpt($post->post_text) ?></p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="single_post.php?post_id=<?php echo $post->id ?>" class="badge bg-info">Read
                                more</a>
                            <div>

                                <a href="voting.php?action=like&post_id=<?php echo $post->id ?>"
                                   class="btn btn-sm btn-primary"
                                   data-post-id="1">
                                    <i class="bi bi-hand-thumbs-up-fill"></i>
                                    <span class="badge bg-info"><?php echo $post->likes ?></span>
                                </a>

                                <a href="voting.php?action=dislike&post_id=<?php echo $post->id ?>"
                                   class="btn btn-sm btn-danger"
                                   data-post-id="1">
                                    <i class="bi bi-hand-thumbs-down-fill"></i>
                                    <span class="badge bg-info"><?php echo $post->dislike ?></span>
                                </a>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>


<?php require "partials/footer.php" ?>