<div class="middle">
    <p>Your current username is </p>
    <p style="color: #ff0066; padding-bottom: 15px"><?= $username ?></p>
</div>

<form action="change_username.php" id="change_username" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control status-box" id="password" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" id="new_username" name="new_username" placeholder="New username" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-edit"></span>
                Change Username
            </button>
        </div>
    </fieldset>
</form>