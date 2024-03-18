<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum nostrum modi? Quis amet esse aliquam ipsum repellendus eligendi rerum placeat quae laboriosam tenetur excepturi non,
 hic distinctio. Ex, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum nostrum modi? Quis amet esse aliquam ipsum repellendus eligendi rerum placeat quae laboriosam tenetur excepturi non,
 hic distinctio. Ex, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo harum nostrum modi? Quis amet esse aliquam ipsum repellendus eligendi rerum placeat quae laboriosam tenetur excepturi non,
 hic distinctio. Ex, voluptate. ";

 echo "<p> {$loremIpsum} </p>";
 echo "panjang karakter: " . strlen($loremIpsum) . "<br>";
 echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
 echo "<p>" . strtoupper($loremIpsum) . "</p>";
 echo "<p>" . strtolower($loremIpsum) . "</p>";





?>