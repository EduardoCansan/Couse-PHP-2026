<?php 
    include_once("templates/header.php");

    /** @var array $posts */
    /** @var array $categories */
    /** @var string $BASE_URL */
    /** @var array $currentPost */

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa repudiandae minima quos, porro molestiae reprehenderit commodi ullam incidunt alias, atque, ratione magni reiciendis quam! Nostrum consectetur esse rerum maxime cupiditate.
            Necessitatibus distinctio nam nulla inventore ducimus, sapiente ab mollitia quasi vero quibusdam libero cupiditate! Obcaecati, eaque autem sed optio ea quisquam eius, assumenda molestiae perferendis vitae neque rem, expedita necessitatibus!
            Officiis temporibus saepe iure ducimus, quisquam nulla adipisci tenetur labore ullam modi natus voluptas sed. Dicta sapiente magni dignissimos maiores, aperiam distinctio quisquam labore, mollitia voluptate quas corporis autem. Fuga?
            Maiores molestias facilis magni eos doloremque eaque ab dolores, praesentium odio? Nulla tempore pariatur porro quae harum ipsum odit officiis reiciendis tempora quidem dignissimos incidunt, facilis hic similique qui quasi.
            Excepturi maiores natus nam, hic in est porro voluptates repellat magnam illum. Debitis ab aspernatur ex esse fuga facere necessitatibus ad, omnis, suscipit laboriosam, itaque alias vitae labore aperiam veritatis!
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul class="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?=  $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul class="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?=  $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php 
    include_once("templates/footer.php")
?>