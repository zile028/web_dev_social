<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/title_page.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="post card bg-light text-dark mb-2">
                <img class="card-img-top"
                     src="https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                     alt="">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quas
                        quidem? Iure
                        ratione
                        tenetur voluptatibus. A, aliquam aliquid at autem consequuntur corporis debitis distinctio dolor
                        dolore dolores doloribus dolorum ea enim eos est eveniet excepturi facilis id illo itaque iure
                        iusto
                        labore minus mollitia nostrum odio officia placeat porro possimus quaerat quia sit soluta sunt
                        unde
                        veniam voluptatibus voluptatum? Aut doloremque facilis inventore odit quasi repellendus
                        voluptatibus. Asperiores commodi earum laborum magnam obcaecati quam quasi. Asperiores
                        aspernatur
                        consequatur dolore, ducimus ex, id modi, molestias quaerat quam repellat rerum soluta sunt
                        veritatis. Consequuntur eos fugit perferendis quam quasi reiciendis tenetur voluptatibus!</p>
                </div>

                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column align-items-start">
                        <a href="posts.php" class="badge bg-info">All posts</a>
                        <button class="btn btn-sm" data-post-id="1"><i class="bi bi-hand-thumbs-up"></i>
                        </button>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <span><a class="badge bg-success" href="posts.php?user_id=1">Dejan Zivkovic</a></span>
                        <span>24.05.2022.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require "partials/footer.php" ?>

