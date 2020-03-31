<?php require_once 'section/Header.php' ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-8">
                    <h2>Register</h2>
                    <hr>
                    <form action="/roocket_php/learn_english/register.php" method="POST">
                        <div class="form-group">
                            <label for="username">Name :</label>
                            <input type="text" name="name" class="form-control" value="<?= old('name') ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Family :</label>
                            <input type="text" name="family" class="form-control" value="<?= old('family') ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" name="username" class="form-control" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Email :</label>
                            <input type="text" name="email" class="form-control" value="<?= old('email') ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Register</button>
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