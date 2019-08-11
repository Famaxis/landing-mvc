<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Register</h3>
                            <form action="/register" method="post">
                                <div class="form-label-group">
                                    <input type="text" id="inputText" class="form-control" placeholder="Login" required name="login" maxlength="40">
                                    <label for="inputText">Login</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" maxlength="40">
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword2" class="form-control" placeholder="Password" required name="password_2">
                                    <label for="inputPassword2">Repeat the password</label>
                                </div>
                                <?php if (!empty($vars)): ?>
                                <div class="form-label-group alert alert-danger" role="alert">
                                     <?= array_shift($vars); ?>
                                </div>
                                <?php endif; ?>
                                <input type="submit" name="submit" value="Register" class="btn btn-lg btn-block btn-login text-uppercase font-weight-bold mb-2" style="color: #fff; background-color: #9172a6; border-color: #9172a6;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
