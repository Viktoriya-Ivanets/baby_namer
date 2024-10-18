<?php

/**
 * Get data from passed file path or create new file
 * @param string $filePath
 * @return array
 */
function readNamesFromFile(string $filePath = DEFAULT_NAME_FILE): array
{
    if (!file_exists($filePath)) {
        return ['male' => [], 'female' => []];
    }

    $jsonData = file_get_contents($filePath);
    return json_decode($jsonData, true) ?: ['male' => [], 'female' => []];
}

/**
 * Write data to passed JSON file
 * @param array $data
 * @param string $filePath
 * @return void
 */
function writeNamesToFile(array $data, string $filePath = DEFAULT_NAME_FILE): void
{
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filePath, $jsonData);
}

/**
 * Add new name to file to the correct gender
 * @param string $name
 * @param string $gender
 * @return void
 */
function addNameToFile(string $name, string $gender): void
{
    $names = readNamesFromFile();
    $names[$gender][] = $name;

    writeNamesToFile($names);
}
