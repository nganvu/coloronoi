<div class="middle">
    <div class="container">
        <h2>Login to see your arkworks!</h2>
    </div>
</div>

<form action="login.php" id="login" method="post">
    <fieldset>
        <div class="form-group">
            <p>Username :<p/>
            <input autocomplete="off" autofocus class="form-control" id="username" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <p>Password :<p/>
            <input class="form-control" id="password" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Sign in!
            </button>
        </div>
    </fieldset>
</form>

<div class="middle">
    <p>or <a href="register.php">register</a></p>
</div>