<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php' ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php' ?>
</header>

<main role="main" class="marg2">
<?php include_once 'views/includes/page_content.php' ?>
             <p>
<div class="container marketing marg">

    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Votre email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Votre nom & prénom</label>
            <input type="text" name="firstname" class="form-control" id="exampleFormControlSelect2">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6" ></textarea>
        </div>
        <button type="submit" class="btn btn-secondary" name="btnContact">Envoyer votre message</button>
    </form>
</div>
<p></p>
<footer class="container" style="margin-top: 50px;">
        <?php include_once 'views/includes/footer.php' ?>
    </footer>
</main>
<?php include_once 'views/includes/js.php' ?>
</html>
