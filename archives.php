<?php

//Debugging
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

include 'inc/data/data.php';
include 'inc/functions.php';

// Check category of story
if (isset($_GET['year'])) {
  $id = $_GET['year'];

  // Set page title to $id
  $pageTitle = $id ;

  // Set section
  $section = 'archives';

  // include header
  include 'inc/header.php';

  // Open containers
  echo "<div class='container'>
          <h1 class='archive-title'>All Stories From "
          .$id
          . "</h1>
          <div class='card-container card-container-focus'>";

  // Grab index of array containing corresponding category, then create descending array and return as cards

    // *$posts = array of arrays*
    // Filter the array by corresponding category

      // Get category to filter by
      $filterBy = $id;

      // function to filter through
      $new = array_filter($posts, function ($var) use ($filterBy) {
          return ($var["yearWritten"] == $filterBy);
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
      echo "</div>
          <footer>
            <p>&copy;Fake Website 2011-";
            echo date('Y');
            echo "</p>
          </footer>
        </div>";

} elseif (isset($_GET["author"])) {
  $id = $_GET['author'];

  // Set page title to $id
  $pageTitle = $id ;

  // Set section
  $section = 'archives';

  // include header
  include 'inc/header.php';

  // Open containers
  echo "<div class='container'>
          <h1 class='archive-title'>All Stories From "
          .$id
          . "</h1>
          <div class='card-container card-container-focus'>";

  // Grab index of array containing corresponding category, then create descending array and return as cards

    // *$posts = array of arrays*
    // Filter the array by corresponding category

      // Get category to filter by
      $filterBy = $id;

      // function to filter through
      $new = array_filter($posts, function ($var) use ($filterBy) {
          return ($var["author"] == $filterBy);
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
      echo "</div>
          <footer>
            <p>&copy;Fake Website 2011-";
            echo date('Y');
            echo "</p>
          </footer>
        </div>";

} else {

  $section = "archives";
  $pageTitle = "Archives";

  include "inc/header.php";

  echo "<div class='container'>

    <h1 class='archive-title'>Choose an Archive</h1>

    <div class='twenty18'>
      <div class='card'>
        <a href='archives.php?year=2018'><h1>Stories from 2018</h1></a>
      </div>
    </div>

    <div class='twenty17'>
    <div class='card'>
      <a href='archives.php?year=2017'><h1>Stories from 2017</h1></a>
    </div>
    </div>

    <footer>
      <p>&copy;Fake Website 2011-";
      echo date('Y');
      echo "</p>
    </footer>

  </div>";

}

include 'inc/footer.php';

?>
