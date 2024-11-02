<?php
$text = "Пример текста, в котором повторяются слова. Например, слово 'текста' встречается дважды."; 

$words = preg_split('/[\W]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
$unique_words = array_unique($words); 

print_r($unique_words); 
?>