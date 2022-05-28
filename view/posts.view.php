<?php require "view/partials/head.php" ?>
<?php require "view/partials/navigation.php" ?>
<?php require "view/partials/title_page.php" ?>
    <div class="container">
        <div class="text-center mb-4">
            <a href="add_post.php" class="btn btn-primary">Add post</a>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php foreach ($all_posts as $post): ?>
                    <div id="post<?php echo $post->id ?>" class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4><?php echo $post->title ?></h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span><a class="badge bg-success"
                                         href="posts.php?user_id=1"><?php echo $post->first_name . " " . $post->last_name ?></a></span>
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
<?php require "view/partials/footer.php" ?>