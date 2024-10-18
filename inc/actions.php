<?php

/**
 * Render index page
 * @return void
 */
function index(): void
{
    render('index', ['namesForDisplay' => prepareNamesForDisplay()]);
}

/**
 * Render index page with validation errors
 * @return void
 */
function form(): void
{
    render('index', ['errors' => getErrors(), 'namesForDisplay' => prepareNamesForDisplay(), 'oldInput' => getOldInput()]);
}

/**
 * Process form data
 * @return void
 */
function proc(): void
{

    $fields = [
        'name' => htmlspecialchars(filter_input(INPUT_POST, 'name')),
        'gender' => htmlspecialchars(filter_input(INPUT_POST, 'gender')),
    ];

    $errors = validateFields($fields);

    if (count($errors) > 0) {
        setErrors($errors);
        setOldInput($fields);
        redirect('form');
    }

    addNameToFile($fields['name'], $fields['gender']);

    redirect('index');
}
