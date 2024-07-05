 <?php
// Example subject string containing a Unicode character
$subject = "Hello, 你好! How are you today?";

// Pattern to match a word (using the \w shorthand) with "u" modifier for UTF-8
$pattern1 = '/\w+/u';

// Perform the regular expression match
preg_match($pattern1, $subject, $matches);

// Output the result
echo "Matched word: " . $matches[0];
echo "\n";

// Pattern to match all words with "u" modifier for UTF-8
$pattern2 = '/\p{L}+/u';

// Perform the regular expression match
preg_match_all($pattern2, $subject, $matches2);

// Output the result
echo "Matched words: " . implode(", ", $matches2[0]);
echo "\n";

// Pattern to match all non-Chinese words with "u" modifier for UTF-8
$pattern3 = '/\p{^Han}+/u';

// Perform the regular expression match
preg_match_all($pattern3, $subject, $matches3);

// Output the result
echo "Matched words: " . implode(", ", $matches3[0]);
?>
