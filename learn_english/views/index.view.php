<?php
require_once 'Header.php' ?>



<section class="section">

    <div style="direction: rtl">
        <h1 class="title">
            انگلیسی را یاد بگیر
        </h1>
        <p class="subtitle">
            فقط با <strong>تمرین</strong>!
        </p>

    </div>

    <form style="margin: 20px 0;" action="/roocket_php/learn_english/word.php" method="POST">
        <div class="columns">
            <div class="column">
                <div class="field">
                    <div class="control">
                        <input class="input is-primary" type="text" name="en" placeholder="English">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <div class="control">
                        <input class="input is-primary" type="text" name="fa" placeholder="فارسی">
                    </div>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <textarea class="textarea is-primary" name="sn" placeholder="text..."></textarea>
            </div>
        </div>
        <button type="submit" name="submit" class="button is-info is-medium is-fullwidth">ثبت</button>
    </form>
    <?php if (isset($saved_word)) {
        foreach ($saved_word as &$tr) { ?>

            <article class="message is-info">
                <div class="message-header">
                    <p>saved word</p>

                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                    <div class="container">

                        <div class="columns  is-mobile">
                            <div class="column">
                                <strong> <?= $tr['en']; ?> / </strong> <small> <?= $tr['fa']; ?></small>
                            </div>
                            <div class="columns is-vcentered is-narrow is-mobile">
                                <div class="column  is-narrow">
                                    <strong> Level / </strong> <small> </small>
                                </div>
                                <div class="column  is-narrow">
                                    <strong> Count / </strong> <small> </small>
                                </div>
                            </div>

                        </div>
                        <p>
                            <?= $tr['sn']; ?>

                        </p>
                    </div>
                    
                </div>

            </article>

        <?php }
    }
    if (isset($new_word)) {
        foreach ($new_word as &$tr) { ?>

            <article class="message is-success">
                <div class="message-header">
                    <p>saved word</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                    <div class="columns  is-mobile">
                        <div class="column">
                            <strong> <?= $tr['en']; ?> / </strong> <small> <?= $tr['fa']; ?></small>
                        </div>
                        <div class="columns is-narrow is-mobile" style="align-items: center;">
                            <div class="column  is-narrow">
                                <strong> Level / </strong> <small> 3 </small>
                            </div>
                            <div class="column  is-narrow">
                                <strong> Count / </strong> <small> 1 </small>
                            </div>
                        </div>

                    </div>
                    <?= $tr['sn']; ?>

                    </p>
                </div>
            </article>

    <?php }
    }
    ?>

    <?php if (isset($all_tr)) {
        foreach ($all_tr as &$tr) { ?>

            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong> <?= $tr['en']; ?> / </strong> <small> <?= $tr['fa']; ?></small>
                                <br>
                                <?= $tr['sn']; ?>

                            </p>
                        </div>
                    </div>
                </article>
            </div>

    <?php }
    } ?>


</section>


<?php require_once 'Footer.php' ?>