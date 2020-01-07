<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php' ?>
</head>
<body>
<header>
    <?php include_once 'views/includes/header.php' ?>
</header>

<main role="main" class="marg3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">

           <?= $Header['value'] ?>

    </div>



        </div>

    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <!--<h2 class="featurette-heading">Nos best sellers</h2><p>-->
        <div class="row">

            <?php foreach ($ThreeArticleTop AS $Article): ?>

                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/presta/<?= $Article['img'] ?>" width="140" height="140" >
                    <h2><?= $Article['title'] ?></h2>
                    <p><?= $Article['description'] ?></p>
                    <p><a class="btn btn-secondary" href="index.php?page=article&name=<?= slugify($Article['title']) ?>" role="button">Découvrir &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

            <?php endforeach; ?>
        </div>
        <div class="text-center">
                <p><a class="btn btn-secondary button" href="produits" role="button">En savoirs plus sur l'ensemble de nos prestations &raquo;</a>
            </div>
        <!-- /.row -->


        <!-- START THE FEATURETTES -->

        <?php 

                foreach($ThreeArticleButtom AS $Article):?>

                  <hr class="featurette-divider">
                  <div class="row featurette">
                  <div class="col-md-7">
                  <h2 class="featurette-heading"> <?= $Article['title'] ?></br><span class="text-muted"><?= $Article['subtitle'] ?></span></h2>
                  <p class="lead"><?=$Article['description']?></p>
                  <p><a class="btn btn-secondary" href="index.php?page=article&name=<?= slugify($Article['title']) ?>" role="button">Découvrir &raquo;</a></p>
                  </div>
                  <div class="col-md-5">
                  <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="assets/images/finish/<?=$Article['img']?>" width="500" height="500" >
                  </div>
                  </div><p></p>

                <?php endforeach; ?>

                  <hr class="featurette-divider">
                  
                  <div class="text-center">
                  <p><a class="btn btn-secondary button" href="created" role="button">En savoirs plus sur l'ensemble de nos réalisations &raquo;</a>
</div>
    

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container" style="margin-top: 50px;">
        <?php include_once 'views/includes/footer.php' ?>
    </footer>
</main>
<?php include_once 'views/includes/js.php' ?>
</html>
