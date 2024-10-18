<?php

const SITE_NAME = 'Baby Namer';
const FOOTER = 'Created by - Viktoriia Danylenko';
const AVAILABLE_GENDERS = ['male', 'female'];
const DEFAULT_NAME_FILE = 'uploads' . DIRECTORY_SEPARATOR . 'names.json';
const VIEWS_COMMON_DIR = 'views' . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR;
const VIEWS_PAGES_DIR = 'views' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR;
const VIEWS_TEMPLATES_DIR = 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
const ERROR_MESSAGE = [
    0 => 'Gender cannot be empty',
    1 => 'Incorrect gender - must be male or female',
    2 => 'The name cannot be empty',
    3 => 'The name should be kept from 3 to 30 characters.'
];
const VALIDATES_FOR_FIELD = [
    'name' => [
        ['isNotEmpty', ['name', ERROR_MESSAGE[2]]],
        ['validateName', ['name', ERROR_MESSAGE[3]]],
    ],
    'gender' => [
        ['isNotEmpty', ['gender', ERROR_MESSAGE[0]]],
        ['validateGender', ['gender', AVAILABLE_GENDERS, ERROR_MESSAGE[1]]],
    ],
];
