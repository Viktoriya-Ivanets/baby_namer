<?php
$names = readNamesFromFile();
$maleNames = $names['male'] ?? [];
$femaleNames = $names['female'] ?? [];
?>

<table class="table table-striped table-bordered mt-4 text-center">
    <caption class="text-center mb-2" style="caption-side: top;">Available names:</caption>
    <thead class="table-dark">
        <tr>
            <th>Names for boys</th>
            <th>Names for girls</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $maxRows = max(count($maleNames), count($femaleNames));
        for ($i = 0; $i < $maxRows; $i++) :
            $maleName = $maleNames[$i] ?? '';
            $femaleName = $femaleNames[$i] ?? '';
        ?>
            <tr>
                <td><?= htmlspecialchars($maleName) ?></td>
                <td><?= htmlspecialchars($femaleName) ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
