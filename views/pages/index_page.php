<table class="table table-striped table-bordered mt-4 text-center">
    <caption class="text-center mb-2" style="caption-side: top;">Available names:</caption>
    <thead class="table-dark">
        <tr>
            <th>Names for boys</th>
            <th>Names for girls</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($namesForDisplay)): ?>
            <?php foreach ($namesForDisplay as $row) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['male']) ?></td>
                    <td><?= htmlspecialchars($row['female']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">No added names, please add some name by form</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
