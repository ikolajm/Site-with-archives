<?php

//Debugging
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

include "inc/data/data.php";
include "inc/functions.php";

// Check id of story
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  // Grab index of array containing id
  $match = array_search($id, array_column($posts, 'id'));
  // Set item to index of array in $posts
  $item = $posts[$match];
}

$pageTitle = $item["title"];
$section = "archives";

include "inc/header.php";

?>

  <!--Begin content section and container-->
  <div class="container">

    <?php echo pullStory($item); ?>

    <!--Footer-->
    <footer>
      <p>&copy;Fake Website 2011-<?php echo date("Y"); ?></p>
    </footer>

  </div>

<?php

include "inc/footer.php";

?>
