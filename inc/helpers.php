<?php

/**
 * Render all needed data in defined template
 * @param string $page
 * @param array $data
 * @param string $template
 */
function render(string $page, array $data = [], string $template = 'main'): void
{
    extract($data);
    include VIEWS_TEMPLATES_DIR . "{$template}_template.php";
}

/**
 * Sets errors in the session
 * @param array $errors
 * @return void
 */
function setErrors(array $errors): void
{
    session_start();
    $_SESSION['errors'] = $errors;
}
/**
 * Get errors from the session
 * @return array
 */
function getErrors(): array
{
    session_start();
    if (isset($_SESSION['errors']) && is_array($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
        return $errors;
    }
    return [];
}

/**
 * Initialize page with content defined by action
 * @return void
 */
function init(): void
{
    $action = filter_input(INPUT_GET, 'action');

    if (!$action) {
        notFound();
    }

    $action = htmlspecialchars($action);

    if (!function_exists($action)) {
        notFound();
    }
    call_user_func($action);
}

/**
 * Generate not found page
 * @return never
 */
function notFound(): never
{
    //header("HTTP/1.0 404 Not Found");
    http_response_code(404);
    render('not_found');
    exit();
}

/**
 * Create an URL by specify algorithm
 * @param string $action
 * @return string
 */
function getUrl(string $action): string
{
    return 'index.php?action=' . $action;
}

/**
 * Change content by action
 * @param string $action
 * @return never
 */
function redirect(string $action): never
{
    header('Location: ' . getUrl($action));
    exit();
}
