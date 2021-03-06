<?php
/* Prototype  : array token_get_all(string $source)
 * Description: splits the given source into an array of PHP languange tokens 
 * Source code: ext/tokenizer/tokenizer.c
*/

echo "*** Testing token_get_all() : error conditions ***\n";

// with zero arguments
echo "\n-- Testing token_get_all() function with zero arguments --\n";
var_dump( token_get_all());

// with one more than the expected number of arguments
echo "-- Testing token_get_all() function with more than expected no. of arguments --\n";
$source = '<?php ?>';
$extra_arg = 10;
var_dump( token_get_all($source, $extra_arg));

echo "Done"
?>
