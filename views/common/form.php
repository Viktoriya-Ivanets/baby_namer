<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $fieldErrors) : ?>
            <?php foreach ($fieldErrors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= getUrl('proc') ?>" method="post" class="w-100 mx-auto" novalidate>
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            placeholder="Enter name"
            required
            value="<?= htmlspecialchars($oldInput['name'] ?? '') ?>">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender:</label>
        <select id="gender" name="gender" class="form-select" required>
            <option value="" disabled <?= empty($oldInput['gender']) ? 'selected' : '' ?>>Choose gender</option>
            <?php foreach (AVAILABLE_GENDERS as $gender) : ?>
                <option
                    value="<?= $gender ?>"
                    <?= isset($oldInput['gender']) && $oldInput['gender'] === $gender ? 'selected' : '' ?>>
                    <?= ucfirst($gender) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="d-grid">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>
