<?php if (!empty($saved_colors)): ?>
<table align = "center" style="border: 1px solid white; color: white">
    <thead style="border: 1px solid white;">
        <tr>
            <th style="padding: 15px;"></th>
            <th style="padding: 15px;">Color 1</th>
            <th style="padding: 15px;">Color 2</th>
            <th style="padding: 15px;">Color 3</th>
            <th style="padding: 15px;">Color 4</th>
            <th style="padding: 15px;">Color 5</th>
            <th style="padding: 15px;">Color 6</th>
            <th style="padding: 15px;">Color 7</th>
            <th style="padding: 15px;">Color 8</th>
            <th style="padding: 15px;">Color 9</th>
            <th colspan="2" style="padding: 15px; text-align: center;">Options</th>
        </tr>
    </thead>
    <tbody style="border: 1px solid white;">
        <?php foreach($saved_colors as $saved_color): ?>
            <tr>
                <td style="padding: 15px;"><?= $saved_color["name"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_1"] ?>"><?= $saved_color["color_1"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_2"] ?>"><?= $saved_color["color_2"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_3"] ?>"><?= $saved_color["color_3"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_4"] ?>"><?= $saved_color["color_4"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_5"] ?>"><?= $saved_color["color_5"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_6"] ?>"><?= $saved_color["color_6"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_7"] ?>"><?= $saved_color["color_7"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_8"] ?>"><?= $saved_color["color_8"] ?></td>
                <td style="padding: 15px; color: <?= $saved_color["color_9"] ?>"><?= $saved_color["color_9"] ?></td>
                <td style="padding: 15px;"><a href="choose_colors.php?color_name=<?= urlencode($saved_color["name"]) ?>"
                                                                     style="color: #00b0ff;">Choose</a></td>
                <td style="padding: 15px;"><a href="delete_colors.php?color_name=<?= urlencode($saved_color["name"]) ?>"
                                                                     style="color: #ff0066;">Delete</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php else: ?>
    <div class="middle">
        <p>You have not saved any colors!</p>
        <p>Return to <a href="/">homepage</a> or <a href="save_colors.php">save current colors</a>.</p>
    </div>
<?php endif ?>
