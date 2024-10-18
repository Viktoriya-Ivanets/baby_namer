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
        return ERROR_MESSAGE[0];
    } else if (!in_array($gender, $availableGenders)) {
        return ERROR_MESSAGE[1];
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
        return ERROR_MESSAGE[2];
    }

    $length = strlen($name);
    if ($length < 3 || $length > 20) {
        return ERROR_MESSAGE[3];
    }

    return null;
}
