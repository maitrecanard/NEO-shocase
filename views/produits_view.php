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
  <p>

  <?php include_once 'views/includes/page_content.php' ?>
    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container marketing marg">

        <!-- Three columns of text below the carousel -->
        <!--<h2 class="featurette-heading">Nos best sellers</h2><p>-->
        <div class="row">



            <?php foreach ($AllArticles AS $Article): ?>
            
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/presta/<?= $Article['img'] ?>" width="140" height="140" >
                    <h2><?= $Article['title'] ?></h2>
                    <p><?= $Article['description'] ?></p>
                    <p><a class="btn btn-secondary" href="index.php?page=article&name=<?= slugify($Article['title']) ?>" role="button">Découvrir &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <hr class="featurette-divider">

            <?php endforeach; ?>
            
                <!--<p><a class="btn btn-secondary" href="#" role="button">En savoirs plus sur l'ensemble de nos prestations &raquo;</a>-->
            
        </div><!-- /.row -->



    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container" style="margin-top: 50px;">
        <?php include_once 'views/includes/footer.php' ?>
    </footer>
</main>
<?php include_once 'views/includes/js.php' ?>
</html>
