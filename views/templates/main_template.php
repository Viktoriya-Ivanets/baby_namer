<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= SITE_NAME ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-2 mb-2">
        <?php include VIEWS_COMMON_DIR . 'header.php'; ?>
        <?php include VIEWS_COMMON_DIR . 'form.php'; ?>
        <main>
            <?php include_once VIEWS_PAGES_DIR . $page . '_page.php' ?>
        </main>
        <?php include VIEWS_COMMON_DIR . 'footer.php'; ?>
    </div>

    <!-- Bootstrap JS and dependencies (if needed for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
