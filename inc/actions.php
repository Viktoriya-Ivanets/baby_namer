<?php

/**
 * Render index page
 * @return void
 */
function index(): void
{
    render('index');
}

/**
 * Render index page with validation errors
 * @return void
 */
function form(): void
{
    render('index', ['errors' => getErrors()]);
}

/**
 * Process form data
 * @return void
 */
function proc(): void
{
    $name = htmlspecialchars(filter_input(INPUT_POST, 'name'));
    $gender = htmlspecialchars(filter_input(INPUT_POST, 'gender'));

    $errors = [];
    if ($nameError = validateName($name)) {
        $errors[] = $nameError;
    }
    if ($genderError = validateGender($gender, AVAILABLE_GENDERS)) {
        $errors[] = $genderError;
    }

    if (count($errors) > 0) {
        setErrors($errors);
        redirect('form');
    }

    addNameToFile($name, $gender);
    redirect('index');
}
