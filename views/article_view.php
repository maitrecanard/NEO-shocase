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


    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container marketing marg">

        <!-- Three columns of text below the carousel -->
        <!--<h2 class="featurette-heading">Nos best sellers</h2><p>-->
        <div class="row">

        
            
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="assets/images/presta/<?= $DetailArticle['img'] ?>" width="140" height="140" >
                    <h2><?= $DetailArticle['title'] ?></h2>
                    <p><?= $DetailArticle['description'] ?></p>
                    <p><a class="btn btn-secondary" href="<?= $Article['id'] ?>" role="button">Découvrir &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <hr class="featurette-divider">

            
                <!--<p><a class="btn btn-secondary" href="#" role="button">En savoirs plus sur l'ensemble de nos prestations &raquo;</a>-->
            
        </div><!-- /.row -->



    </div><!-- /.container -->

<div class="blog-post-meta">Nos autres - 
    <?php
    
        switch ($DetailArticle['id_page']){

            case 1 :
                echo '';
            break;

            case 2 :
                echo '';
            break;
        }

    ?>
</div>
<hr class="featurette-divider">
<div>
    <?php
    
        switch ($data['id_page']){

            case 1 :
                echo '';
            break;

            case 2 :
                echo '';
            break;
        }

    ?>
    <!-- FOOTER -->
    <footer class="container" style="margin-top: 50px;">
        <?php include_once 'views/includes/footer.php' ?>
    </footer>
</main>
<?php include_once 'views/includes/js.php' ?>
</html>
