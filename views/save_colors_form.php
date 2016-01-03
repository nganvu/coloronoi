<div class="middle">
    <p>Your current colors are:</p>
    <table align = "center">
        <tbody>
            <tr>
                <td style="padding: 15px; color: <?= $_SESSION["color_1"] ?>"><?= $_SESSION["color_1"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_2"] ?>"><?= $_SESSION["color_2"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_3"] ?>"><?= $_SESSION["color_3"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_4"] ?>"><?= $_SESSION["color_4"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_5"] ?>"><?= $_SESSION["color_5"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_6"] ?>"><?= $_SESSION["color_6"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_7"] ?>"><?= $_SESSION["color_7"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_8"] ?>"><?= $_SESSION["color_8"] ?></td>
                <td style="padding: 15px; color: <?= $_SESSION["color_9"] ?>"><?= $_SESSION["color_9"] ?></td>
            </tr>
        </tbody>
    </table>
    <p>Enter a name for your current colors.</p>
</div>

<form action="save_colors.php" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Name" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
    </fieldset>
</form>
