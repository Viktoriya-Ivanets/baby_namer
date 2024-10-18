<?php

/**
 * Validate gender
 * @param string $gender
 * @param array $availableGenders ['male', 'female']
 * @return string|null
 */
function validateGender(string $gender, array $availableGenders): string | null
{

    if (empty($gender)) {
        return 'Gender cannot be empty';
    } else if (!in_array($gender, $availableGenders)) {
        return 'Incorrect gender - must be male or female';
    }
    return null;
}

/**
 * Validate name by length
 * @param string $name
 * @return string|null
 */
function validateName(string $name): string | null
{
    if (empty($name)) {
        return "The name cannot be empty.";
    }

    $length = strlen($name);
    if ($length < 3 || $length > 20) {
        return "The name should be kept from 3 to 30 characters.";
    }

    return null;
}
