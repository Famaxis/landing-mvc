<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Welcome back!</h3>
                            <form action="/login" method="POST">
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" maxlength="40">
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                </div>
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-block btn-login text-uppercase font-weight-bold mb-2" style="color: #fff; background-color: #9172a6; border-color: #9172a6;">
                                <div class="text-center">
                                    <p>Don't have an account yet? Register <a href="/register">here</a>.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
