<?php
$palavraPalindromo = "radar";
$limpa = strtolower(str_replace(' ', '', $palavraPalindromo));
if ($limpa == strrev($limpa)) {
    echo "A palavra '$palavraPalindromo' é um palíndromo.\n";
} else {
    echo "A palavra '$palavraPalindromo' NÃO é um palíndromo.\n";
}

?>
?>