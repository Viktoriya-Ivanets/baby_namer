<?php

/**
 * Check that field does not empty
 * @param string $fieldValue
 * @param string $errorMessage
 * @return string|null
 */
function isNotEmpty(string $fieldValue, string $errorMessage): string | null
{
    if (empty($fieldValue)) {
        return $errorMessage;
    }
    return null;
}

/**
 * Validate gender
 * @param string $gender
 * @param array $availableGenders ['male', 'female']
 * @param string $errorMessage
 * @return string|null
 */
function validateGender(string $gender, array $availableGenders, string $errorMessage): string | null
{
    if (!in_array($gender, $availableGenders)) {
        return $errorMessage;
    }
    return null;
}

/**
 * Validate name by length
 * @param string $name
 * @param string $errorMessage
 * @return string|null
 */
function validateName(string $name, string $errorMessage): string | null
{
    $length = strlen($name);
    if ($length < 3 || $length > 20) {
        return $errorMessage;
    }

    return null;
}

/**
 * Universal func for validating all field by defined validators
 * @param array $fields - ['field_name' => 'value']
 * @return array
 */
function validateFields(array $fields): array
{
    $errors = [];

    foreach (VALIDATES_FOR_FIELD as $field => $validators) {
        if (isset($fields[$field])) {
            foreach ($validators as [$function, $params]) {
                $params = array_map(function ($param) use ($fields, $field) {
                    return $param === $field ? $fields[$field] : $param;
                }, $params);

                $error = call_user_func_array($function, $params);

                if ($error) {
                    $errors[$field][] = $error;
                }
            }
        }
    }

    return $errors;
}
