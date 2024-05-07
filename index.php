<?php 
include __DIR__ ."/Views/header.php";
include __DIR__ ."/Models/Movie.php";
include __DIR__ ."/Models/Book.php";
include __DIR__ ."/Models/Category.php";

$movies = [
    // $language,$id, $title, $image, $description, $rating
    new Movie ("en","9381", "Babylon A.D.", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg", "Action, Adventure, Sci-Fi", "5.6"),
    new Movie ("en","9381", "Babylon A.D.", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg", "Action, Adventure, Sci-Fi", "5.6")
];

$books = [
    // $pages,$id, $title, $image, $description, $rating
    new Book ("416", "1", "Unlocking Android", "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg", "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.", "5.6"),
    new Book ("416", "1", "Unlocking Android", "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg", "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.", "5.6")
]
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
                    <div class="card-text p-2">
                        <p class="card-text"><?= $movie->description ?></p>
                        <span><?= $movie->language ?>
                        </span>
                        <br>
                        <span><?= $movie->rating ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
             }
            ?>
        </div>
        <div class="row mt-2">
            <?php
             foreach ($books as $book) {
            ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?= $book->image ?>" class="card-img-top" alt="<?= $book->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $book->title ?>
                        </h5>
                    </div>
                    <div class="card-text p-2">
                        <p class="card-text"><?= $book->description ?></p>
                        <span><?= $book->pages ?>
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