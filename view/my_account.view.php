<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

    <div class="container py-5">
        <div class="row m-0 justify-content-between">
            <div class="col-md-3">
                <img class="img-fluid" src="asset/img/user.png" alt="">
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
                <?php for ($i = 0; $i < 1; $i++): ?>
                    <div class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4>Title post</h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span>24.05.2022.</span>
                                <select name="" id="">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="friends">Friends</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-2">
                                <img class="img-fluid"
                                     src="https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                                     alt="">
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                                    consequuntur dolorum ea ex laudantium maiores officia provident recusandae tempora
                                    tempore!
                                    Architecto, cupiditate dignissimos dolor dolorum facere in ipsum itaque libero
                                    magnam
                                    magni
                                    minima nemo, repellat ullam? A inventore nisi quaerat.</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="single_post.php?post_id=1" class="badge bg-info">Read more</a>
                            <div>
                                <div class="btn btn-sm btn-primary" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-up-fill"></i>
                                    <span class="badge bg-info">3</span>
                                </div>
                                <div class="btn btn-sm btn-warning" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-down-fill"></i>
                                    <span class="badge bg-info">1</span>
                                </div>
                                <a class="btn btn-sm btn-danger" href="delete_post.php?post_id=1">
                                    <i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4>Title post</h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span>24.05.2022.</span>
                                <select name="" id="">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="friends">Friends</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                                    consequuntur dolorum ea ex laudantium maiores officia provident recusandae tempora
                                    tempore!
                                    Architecto, cupiditate dignissimos dolor dolorum facere in ipsum itaque libero
                                    magnam
                                    magni
                                    minima nemo, repellat ullam? A inventore nisi quaerat.</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="single_post.php?post_id=1" class="badge bg-info">Read more</a>
                            <div>
                                <div class="btn btn-sm btn-primary" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-up-fill"></i>
                                    <span class="badge bg-info">3</span>
                                </div>
                                <div class="btn btn-sm btn-warning" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-down-fill"></i>
                                    <span class="badge bg-info">1</span>
                                </div>

                                <a class="btn btn-sm btn-danger" href="delete_post.php?post_id=1">
                                    <i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>


<?php require "partials/footer.php" ?>