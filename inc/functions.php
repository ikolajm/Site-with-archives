<?php

//Sort array by newest, return first entry
function breakingNews($posts) {
  // select first (newest) story in descending array
  $newestStory = end($posts);
  // Return as jumbotron html
  $jumbonews = "<div class=jumbotron>"
  // Add title
              // Begin link
              . "<a href='story.php?id="
              // Grab id of story
              . $newestStory["id"]
              // Close opening a tag
              ."'>"
              . "<h1>Breaking: "
              . $newestStory["title"]
              .  "</h1>"
              // Close a tag
              . "</a>"
  // Add date
              . "<p class=story-date>"
              . $newestStory["dateWritten"]
              . "</p>"
  // Add author
              . "<p class=story-author>"
              . $newestStory["author"]
              . "</p>"
  // Add 100 chars of actual text of "post"
              . "<p class=story-preview>"
              . substr($newestStory["postContent"], 0, 120)
              . "...</p>"
  // Close jumbotron
              . "</div>";
  // Return jumbotron
  return $jumbonews;
}

// Write html for random cards pulled in index.php
function pullCard($card, $item) {
  // Create card div
  $story = "<section class='card'>"
  // Add title
          // Begin link
          . "<a href='story.php?id="
          // Grab id of story
          . $item["id"]
          // Close opening a tag
          ."'>"
          . "<h1>"
          . $item["title"]
          .  "</h1>"
          // Close a tag
          . "</a>"
  // Add date
          . "<p class=story-date>"
          . $item["dateWritten"]
          . "</p>"
  // Add author
          . "<p class=story-author>"
          . $item["author"]
          . "</p>"
  // Add 100 characters of actual text of "post"
          . "<p class=story-preview>"
          . substr($item["postContent"], 0, 120)
          . "...</p>"
  // Close card div
          . "</section>";
  // Return card
  return $story;
}

// Show story on individual page
function pullStory($item) {

  // Create story container
  $story = "<section class='individual-story'>"
  // Return line (back category, back month written, back year written)
  // Show title
            . "<h1>"
            . $item["title"]
            . "</h1>"
  // Show author
            . "<p>"
            . $item["author"]
            . "</p>"
  // Show date writtem
            . "<p>Published"
            . " "
            . $item["dateWritten"]
            . "</p>"
  // Show post
            . "<p>"
            . $item["postContent"]
            . "</p>"
  // Close story container
          . "</section>"
  // Return line (back category, back month written)
          // Back to Category
          . "<div class='back-btn'>"
          . "<a href='categories.php?category="
          . $item["category"]
          . "'>"
          . "<i class='fas fa-arrow-left'></i> "
          . "Back to "
          . $item["category"]
          . "</a>"
          . "</div>"
          // Back to date written
          . "<div class='back-btn'>"
          . "<a href='archives.php?year="
          . $item["yearWritten"]
          . "'>"
          . "<i class='fas fa-arrow-left'></i> "
          . "Back to "
          . $item["yearWritten"]
          . " archive</a>"
          . "</div>"
          // Back to Author
          . "<div class='back-btn'>"
          . "<a href='archives.php?author="
          . $item["author"]
          . "'> "
          . "<i class='fas fa-arrow-left'></i> "
          . "More from  "
          . $item["author"]
          . "</a>"
          . "</div>";
  // Post story as html
  return $story;
}

// Sort stories by category
function catSort($catDescend, $card) {

  // Create card div
  $catCard = "<section class='card col-12 col-md-6'>"
  // Add title
          // Begin link
          . "<a href='story.php?id="
          // Grab id of story
          . $card["id"]
          // Close opening a tag
          ."'>"
          . "<h1>"
          . $card["title"]
          .  "</h1>"
          // Close a tag
          . "</a>"
  // Add date
          . "<p class=story-date>"
          . $card["dateWritten"]
          . "</p>"
  // Add author
          . "<p class=story-author>"
          . $card["author"]
          . "</p>"
  // Add 100 characters of actual text of "post"
          . "<p class=story-preview>"
          . substr($card["postContent"], 0, 120)
          . "...</p>"
  // Close card div
          . "</section>";
  // Return card
  return $catCard;
}

?>
