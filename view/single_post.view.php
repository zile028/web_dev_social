<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <?php if ($post->img !== null): ?>
                    <div class="col-md-4">
                        <div class="thumbnail card-image-top">
                            <img src="<?php echo UPLOAD_DIR . "/" . $post->img ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col">
                    <div>
                        <p class="card-text"><?php echo $post->post_text ?></p>
                    </div>
                    <div class="post-footer d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex">
                                <a href="posts.php#post<?php echo $post->id ?>" class="btn btn-sm btn-info me-2">All
                                    posts</a>

                                <a href="voting.php?action=like&post_id=<?php echo $post->id ?>"
                                   class="btn btn-sm btn-primary me-2"
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
                        <div class="d-flex flex-column align-items-end">
                        <span><a class="badge bg-success"
                                 href="posts.php?user_id=1"><?php echo $post->first_name . " " . $post->last_name ?></a></span>
                            <span><?php echo displayDateTime($post->created_at) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require "partials/footer.php" ?>

