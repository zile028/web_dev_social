<?php require "view/partials/head.php" ?>
<?php require "view/partials/navigation.php" ?>
<?php require "view/partials/title_page.php" ?>
    <div class="container">
        <div class="text-center mb-4">
            <a href="add_post.php" class="btn btn-primary">Add post</a>
        </div>
        <div class="row">
            <div class="col-12">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4>Title post</h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span><a class="badge bg-success" href="posts.php?user_id=1">Dejan Zivkovic</a></span>
                                <span>24.05.2022.</span>
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
                                <button class="btn btn-sm btn-primary" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-up-fill"></i>
                                    <span class="badge bg-info">3</span>
                                </button>
                                <button class="btn btn-sm btn-danger" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-down-fill"></i>
                                    <span class="badge bg-info">1</span>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="post card bg-light text-dark mb-2">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4>Title post</h4>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span><a class="badge bg-success" href="posts.php?user_id=1">Dejan Zivkovic</a></span>
                                <span>24.05.2022.</span>
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
                                <button class="btn btn-sm btn-primary" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-up-fill"></i>
                                    <span class="badge bg-info">3</span>
                                </button>
                                <button class="btn btn-sm btn-danger" data-post-id="1">
                                    <i class="bi bi-hand-thumbs-down-fill"></i>
                                    <span class="badge bg-info">1</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php require "view/partials/footer.php" ?>