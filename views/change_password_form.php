<form action="change_password.php" id="change_password" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control" id="password" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" id="new_password" name="new_password" placeholder="New password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-edit"></span>
                Change Password
            </button>
        </div>
    </fieldset>
</form>