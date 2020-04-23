<?php
// Valideert de tekst
$text = trim($_POST["text"]);
if (empty($text)) {
    exit("must provide a text");
}

// Maakt de tekst schoon
$text = strip_tags($text);

// Tekst kan nu veilig opgeslagen worden.
file_put_contents("texts.txt", $text, FILE_APPEND);

// Haalt de tekst uit de file.
$texts = file_get_contents("texts.txt");
echo htmlspecialchars($texts);
