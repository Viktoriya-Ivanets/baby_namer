<table class="table table-striped table-bordered mt-4 text-center">
    <caption class="text-center mb-2" style="caption-side: top;">Available names:</caption>
    <thead class="table-dark">
        <tr>
            <th>Names for boys</th>
            <th>Names for girls</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($namesForDisplay as $row) : ?>
            <tr>
                <td><?= htmlspecialchars($row['male']) ?></td>
                <td><?= htmlspecialchars($row['female']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
