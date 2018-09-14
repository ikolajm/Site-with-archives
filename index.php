<?php

//Debugging
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

$section = "home";
$pageTitle = "Fake Website";

include "inc/header.php";
include "inc/data/data.php";
include "inc/functions.php";

?>

  <!--Begin content section and container-->
  <div class="container">

    <!--Back to top-->

      <!--Pull newest story-->
      <section class="new-story-jumbo">

        <?php

        // Pull most recent story, convert to html and return
        echo breakingNews($posts);

        ?>

      </section>

      <!--Two random story "cards"-->
      <div class="card-container card-container-index">

        <?php

        // Select two random arrays in nested post array
        $randomCards = array_rand($posts, 2);

        //Write html for each random array and return in container div
        foreach ($randomCards as $card) {
          echo pullCard($card, $posts[$card]);
        }

        ?>

      </div>

      <!--Show categories-->
      <section class="category-grid inner">

        <h1 class="title">Categories:</h1>

        <div class="category-container">

          <div class="category col-12 col-md-6">
            <div class="tech category-sub">
              <div class="layer-tech"></div>
              <a href="categories.php?category=Technology"><h1>Technology</h1></a>
            </div>
          </div>

          <div class="category col-12 col-md-6">
            <div class="business category-sub">
              <div class="layer-business"></div>
              <a href="categories.php?category=Business"><h1>Business</h1></a>
            </div>
          </div>

          <div class="category col-12 col-md-6">
            <div class="pop category-sub">
              <div class="layer-pop"></div>
              <a href="categories.php?category=Pop Culture"><h1>Pop Culture</h1></a>
            </div>
          </div>

          <div class="category col-12 col-md-6">
            <div class="news category-sub">
              <div class="layer-news"></div>
              <a href="categories.php?category=News"><h1>News</h1></a>
            </div>
          </div>

          <div class="category col-12 col-md-6">
            <div class="politics category-sub">
              <div class="layer-politics"></div>
              <a href="categories.php?category=Politics"><h1>Politics</h1></a>
            </div>
          </div>

        </div>

      </section>

      <!--Show archives-->

      <section class="archive-container inner title">

        <h1>Most Recent Archives:</h1>

        <div class="archive-list">
          <div class="list-contain">
            <div class="list">
              <a href="archives.php?year=2018"><li>2018</li></a>
              <a href="archives.php?year=2017"><li>2017</li></a>
            </div>
          </div>
        </div>

      </section>

      <!--Footer-->
      <footer>
        <p>&copy;Fake Website 2011-<?php echo date("Y"); ?></p>
      </footer>

  </div>

<?php

include "inc/footer.php";

?>
