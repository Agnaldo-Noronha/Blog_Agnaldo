<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if ($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id='post-container'>
    <div class='content-container'>
        <h1 id='main-title'><?= $currentPost['title'] ?> </h1>
        <p id='post-description' <?= $currentPost['title'] ?>></p>
        <div class='img-container'>
            <img src='<?= $BASE_URL?>/img/<?= $post['img']?>' alt='<?= $currentPost['title'] ?>'>
        </div>
        <p class='post-content'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore et corrupti quisquam quis blanditiis, laborum commodi sequi, cumque velit excepturi eius sit ea adipisci nesciunt. Id rerum voluptatibus suscipit aut.
        Vero nihil possimus dolorum? Voluptatum, dolorum dolores suscipit quis ducimus adipisci ex eligendi dignissimos ipsum repudiandae ut asperiores vitae ullam! Repudiandae tempora voluptatem illo, nesciunt dicta possimus sequi obcaecati accusantium.
        Harum ipsa eveniet explicabo velit, nisi nostrum, nobis eum, excepturi veniam delectus beatae! Earum commodi enim hic labore aliquam, ut voluptates dicta sequi soluta assumenda a consequuntur quidem facere quod.
        Eius quis minus facilis quia ratione error inventore suscipit quasi nobis numquam deleniti ex, sapiente provident soluta quo. Itaque iure voluptatibus delectus laboriosam vel aut, ipsa est aspernatur maxime omnis.
        Quaerat animi officiis perferendis modi tempora iste aperiam minus provident maxime saepe, perspiciatis ex cumque magnam soluta numquam ullam. Eligendi earum quod quisquam enim corporis ipsa ut autem quos deserunt?</p>
        <p class='post-content'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore et corrupti quisquam quis blanditiis, laborum commodi sequi, cumque velit excepturi eius sit ea adipisci nesciunt. Id rerum voluptatibus suscipit aut.
        Vero nihil possimus dolorum? Voluptatum, dolorum dolores suscipit quis ducimus adipisci ex eligendi dignissimos ipsum repudiandae ut asperiores vitae ullam! Repudiandae tempora voluptatem illo, nesciunt dicta possimus sequi obcaecati accusantium.
        Harum ipsa eveniet explicabo velit, nisi nostrum, nobis eum, excepturi veniam delectus beatae! Earum commodi enim hic labore aliquam, ut voluptates dicta sequi soluta assumenda a consequuntur quidem facere quod.
        Eius quis minus facilis quia ratione error inventore suscipit quasi nobis numquam deleniti ex, sapiente provident soluta quo. Itaque iure voluptatibus delectus laboriosam vel aut, ipsa est aspernatur maxime omnis.
        Quaerat animi officiis perferendis modi tempora iste aperiam minus provident maxime saepe, perspiciatis ex cumque magnam soluta numquam ullam. Eligendi earum quod quisquam enim corporis ipsa ut autem quos deserunt?</p>

    </div>
    <aside id='nav-container'>
        <h3 id='tags-title'>Tags</h3>
        <ul id='tag-list'>
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href='#'><?= $tag ?> </a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id='categories-title'>Categorias<h3>
        <ul id='categories-list'>
        <?php foreach($categories as $category): ?>
                <li><a href='#'><?= $category ?> </a></li>
            <?php endforeach; ?>
        </ul>        
</aside>
</main>

<?php
    include_once("templates/footer.php");
?>