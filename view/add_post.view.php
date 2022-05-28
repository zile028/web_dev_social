<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <form class="d-flex flex-wrap justify-content-between" action="add_post.php" method="post"
                      enctype="multipart/form-data">
                    <div class="col-md-12">
                        <lable>Post title</lable>
                        <span><?php echo isset($post_err["title"]) ? $post_err["title"] : "" ?></span>
                        <input class="form-control mb-3" type="text" name="title"
                               value="<?php echo isset($post_data["title"]) ? $post_data["title"] : "" ?>">
                    </div>
                    <div class="col-md-12">
                        <lable>Post text</lable>
                        <span><?php echo isset($post_err["title"]) ? $post_err["title"] : "" ?></span>
                        <textarea name="post_text" class="form-control mb-3" cols="30"
                                  rows="10"><?php echo isset($post_data["post_text"]) ? $post_data["post_text"] : "" ?></textarea>
                    </div>

                    <div class="col-md-3 d-flex align-items-center">
                        <lable>Visibility</lable>
                        <select name="visibility" class="form-control ms-2">
                            <?php foreach (POST_VISIBILITY as $visibility): ?>
                                <option value="<?php echo $visibility ?>"><?php echo $visibility ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-flex align-items-center justify-content-start">
                        <label class="btn btn-info" for="profile">Add image</label>
                        <input id="profile" class="d-none form-control mb-3" type="file" name="img">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary px-5" name="add_post" type="submit">Save changes</button>
                    </div>
                </form>
                <?php if (isset($have_err) && $have_err): ?>
                    <?php foreach ($upload->err as $msg): ?>
                        <p class="alert bg-danger mt-2"><?php echo $msg ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php require "partials/footer.php" ?>