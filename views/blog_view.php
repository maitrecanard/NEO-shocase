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



            <?php 
            
            

            
            foreach ($AllPost AS $Post): ?>

           
            <div class="blog-post">
        <h2 class="blog-post-title"><?= $Post['author']?></h2>
        <p class="blog-post-meta"><?= date_format(date_create($Post['datetime']),"d/m/Y")?></p>

        <p class="lead"><?= $Post['content']?>
      
        <hr class="featurette-divider">
        

            <?php endforeach; ?>
            
                <!--<p><a class="btn btn-secondary" href="#" role="button">En savoirs plus sur l'ensemble de nos prestations &raquo;</a>-->
            
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container" style="margin-top: 50px;">
        <?php include_once 'views/includes/footer.php' ?>
    </footer>
</main>
<?php include_once 'views/includes/js.php' ?>
</html>
