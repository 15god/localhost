<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <?php require "blocks/headinfo.html" ?>
        <title>1st PHP Site</title>
    </head>
    <body>
        <div class="container">
            <?php require "blocks/reg_form.html" ?>
            <a class="btn btn-outline-secondary btn-lg btn-block mt-2" href="/">Вернуться на главную</a>
            <?php if (!empty($_SESSION['message'])): ?>
                <div class="alert alert-danger mt-2" role="alert">
                    <?php
                    echo $msg = $_SESSION['message'] ?? "";
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif ?>
        </div>
    </body>
</html>
