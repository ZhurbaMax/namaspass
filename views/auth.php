<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5 text-align"> Authorization </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <form method="post" class="reg-auth">
                <div class="errors">
                    <? foreach ($errors as $error): ?>
                        <p> <?php echo $error; ?></p>
                    <? endforeach; ?>
                </div>
                <div class="form-group">
                    <label for="inputLogin">Login</label>
                    <input type="text" name="login"  class="form-control" id="inputLogin" placeholder="Login">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Сome in</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>