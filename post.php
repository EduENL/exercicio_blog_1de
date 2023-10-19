<?php
    include_once("templates/header.php");

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
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto assumenda reiciendis doloribus omnis officiis dicta rem quos deleniti, placeat nesciunt eos animi fuga nihil natus est blanditiis aut veritatis ipsa amet. Quam error ex incidunt explicabo, amet aut! Modi veniam rem atque hic eveniet reprehenderit quam accusamus sequi eum voluptatem dolores ducimus, magni dolore possimus consequatur, iure iusto accusantium assumenda corrupti nostrum! Voluptas modi iure illo fuga possimus non, aliquid maiores vitae quo odit aut provident magni veritatis odio nisi, deserunt inventore incidunt reiciendis. Natus vel ullam dicta. Id, maiores dolorum deleniti voluptas libero non consectetur ex veniam explicabo.</p>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum iusto assumenda reiciendis doloribus omnis officiis dicta rem quos deleniti, placeat nesciunt eos animi fuga nihil natus est blanditiis aut veritatis ipsa amet. Quam error ex incidunt explicabo, amet aut! Modi veniam rem atque hic eveniet reprehenderit quam accusamus sequi eum voluptatem dolores ducimus, magni dolore possimus consequatur, iure iusto accusantium assumenda corrupti nostrum! Voluptas modi iure illo fuga possimus non, aliquid maiores vitae quo odit aut provident magni veritatis odio nisi, deserunt inventore incidunt reiciendis. Natus vel ullam dicta. Id, maiores dolorum deleniti voluptas libero non consectetur ex veniam explicabo.</p>
    </div>
    <div class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php
    include_once("templates/footer.php");
?>