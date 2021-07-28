<?php
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story = "\nThe ${singular_noun}s are lovely, $color, and deep.
But I have promises to keep,\n
And $distance_unit miles to go before I $verb,\n
And $distance_unit miles to go before I $verb.\n";
return $story;
}

echo generateStory("Dog", "like", "red", 5);