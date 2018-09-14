<?php

//Debugging
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

include 'inc/data/data.php';
include 'inc/functions.php';

// Check category of story
if (isset($_GET['category'])) {
  $id = $_GET['category'];

  // Set page title to $id
  $pageTitle = $id;

  // Set section
  $section = 'categories';

  // include header
  include 'inc/header.php';

  // Open containers
  echo "<div class='container'>
          <h1 class='archive-title'>All Stories Regarding "
          .$id
          . "</h1>
          <div class='card-container card-container-focus'>";

  // Grab index of array containing corresponding category, then create descending array and return as cards

  if ($id == 'Technology') {

    // *$posts = array of arrays*
    // Filter the array by corresponding category

      // Get category to filter by
      $filterBy = $id;

      // function to filter through
      $new = array_filter($posts, function ($var) use ($filterBy) {
          return ($var['category'] == $filterBy);
      });

    // Set variable for what function returns
    $match = $new;
    // Set array of posts with corresponding category to descending order
    rsort($match);
    // Grab variable of descending array
    $catDescend = $match;
    // Run function to return as cards
      // Loop through each array in $category as $card
      foreach ($catDescend as $card) {
        echo catSort($catDescend, $card);
      }

   }

   else if ($id == 'Pop Culture') {
     // *$posts = array of arrays*
     // Filter the array by corresponding category

       // Get category to filter by
       $filterBy = $id;

       // function to filter through
       $new = array_filter($posts, function ($var) use ($filterBy) {
           return ($var['category'] == $filterBy);
       });

     // Set variable for what function returns
     $match = $new;
     // Set array of posts with corresponding category to descending order
     rsort($match);
     // Grab variable of descending array
     $catDescend = $match;
     // Run function to return as cards
       // Loop through each array in $category as $card
       foreach ($catDescend as $card) {
         echo catSort($catDescend, $card);
       }
   }

   else if ($id == 'Business') {
     // *$posts = array of arrays*
     // Filter the array by corresponding category

       // Get category to filter by
       $filterBy = $id;

       // function to filter through
       $new = array_filter($posts, function ($var) use ($filterBy) {
           return ($var['category'] == $filterBy);
       });

     // Set variable for what function returns
     $match = $new;
     // Set array of posts with corresponding category to descending order
     rsort($match);
     // Grab variable of descending array
     $catDescend = $match;
     // Run function to return as cards
       // Loop through each array in $category as $card
       foreach ($catDescend as $card) {
         echo catSort($catDescend, $card);
       }
   }

   else if ($id == 'News') {
     // *$posts = array of arrays*
     // Filter the array by corresponding category

       // Get category to filter by
       $filterBy = $id;

       // function to filter through
       $new = array_filter($posts, function ($var) use ($filterBy) {
           return ($var['category'] == $filterBy);
       });

     // Set variable for what function returns
     $match = $new;
     // Set array of posts with corresponding category to descending order
     rsort($match);
     // Grab variable of descending array
     $catDescend = $match;
     // Run function to return as cards
       // Loop through each array in $category as $card
       foreach ($catDescend as $card) {
         echo catSort($catDescend, $card);
       }
   }

   else if ($id == 'Politics') {
     // *$posts = array of arrays*
     // Filter the array by corresponding category

       // Get category to filter by
       $filterBy = $id;

       // function to filter through
       $new = array_filter($posts, function ($var) use ($filterBy) {
           return ($var['category'] == $filterBy);
       });

     // Set variable for what function returns
     $match = $new;
     // Set array of posts with corresponding category to descending order
     rsort($match);
     // Grab variable of descending array
     $catDescend = $match;
     // Run function to return as cards
       // Loop through each array in $category as $card
       foreach ($catDescend as $card) {
         echo catSort($catDescend, $card);
       }
   }

   // Back to all categories
      echo "  </div>
            <div class='back-btn'>
              <a href='categories.php'>
              <i class='fas fa-arrow-left'></i>
              <p>Back to Categories</p>
              </a>
            </div>
          </div>"; //Close containers

} else {
  $pageTitle = 'Categories';
  $section = "categories";

  include 'inc/header.php';

    echo "
    <div class='container'>

      <section class='category-grid inner'>

        <h1 class='title'>Categories:</h1>

        <div class='category-container category-page'>

          <div class='category col-12 col-md-6'>
            <div class='tech category-sub'>
              <div class='layer-tech'></div>
              <a href='categories.php?category=Technology'><h1>Technology</h1></a>
            </div>
          </div>

          <div class='category col-12 col-md-6'>
            <div class='business category-sub'>
              <div class='layer-business'></div>
              <a href='categories.php?category=Business'><h1>Business</h1></a>
            </div>
          </div>

          <div class='category col-12 col-md-6'>
            <div class='pop category-sub'>
              <div class='layer-pop'></div>
              <a href='categories.php?category=Pop Culture'><h1>Pop Culture</h1></a>
            </div>
          </div>

          <div class='category col-12 col-md-6'>
            <div class='news category-sub'>
              <div class='layer-news'></div>
              <a href='categories.php?category=News'><h1>News</h1></a>
            </div>
          </div>

          <div class='category col-12 col-md-6'>
            <div class='politics category-sub'>
              <div class='layer-politics'></div>
              <a href='categories.php?category=Politics'><h1>Politics</h1></a>
            </div>
          </div>

        </div>

      </section>

      <footer>
        <p>&copy;Fake Website 2011-";
        echo date('Y');
        echo "</p>
      </footer>

    </div>";
}

include 'inc/footer.php';

?>
