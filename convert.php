<?php

function openFile(string $fileName): array {
    $contents = file_get_contents(__DIR__ . "/$fileName");
    return explode("\n", $contents);
}

$englishFile = openFile("english.txt");
$spanishFile = openFile("spanish.txt");

$englishFileDict = array_flip($englishFile);
$spanishFileDict = array_flip($spanishFile);
$finalTranslatedPhrase = [];
for ($wordIndex = 1; $wordIndex < count($argv); $wordIndex++) {
    $currentWord = $argv[$wordIndex];
    $currentSpanishIndex = $spanishFileDict[$currentWord];
    if (!$currentSpanishIndex) {
        throw new \Exception("Spanish word not found: $currentWord");
    }
    $currentEnglishWord = $englishFile[$currentSpanishIndex];
    
    $oneStartingIndex = $currentSpanishIndex + 1;
    echo "\nTranslated word: $currentEnglishWord, index: $oneStartingIndex\n";
    $finalTranslatedPhrase []= $currentEnglishWord;
}

echo implode(' ', $finalTranslatedPhrase);