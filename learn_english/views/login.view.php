<?php require_once 'section/Header.php' ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-8">
                    <h2>Login</h2>
                    <hr>
                    <form action="/roocket_php/learn_english/login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-danger">send</button>
                        </div>
                    </form>
                    <?php if(! is_null($status) ) : ?>
                        <div class="alert alert-danger">
                            <?= $status ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php require_once 'section/Footer.php' ?>