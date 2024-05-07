<?php 

include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Category.php";



$movies = [
    // $language,$id, $title, $image, $description, $rating
    new Movie ("English","1", "The Matrix", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg", "Action, Adventure, Sci-Fi", "5.6"),
];
?>

<main class="container">
    <section>
        <div class="row">
            <?php
             foreach ($movies as $movie) {
            ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?= $movie->image ?>" class="card-img-top" alt="<?= $movie->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie->title ?>
                        </h5>
                    </div>
                    <div class="card-text">
                        <p class="card-text"><?= $movie->description ?></p>
                        <span><?= $movie->language ?>
                        </span>
                        <span><?= $movie->rating ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
             }
            ?>
        </div>
    </section>
</main>

<?php
include __DIR__ ."/Views/footer.php";
?>