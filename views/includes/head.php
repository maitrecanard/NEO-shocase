
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.8.6">


    <title><?= $Exploitant['name'] ?> <?php
    
    if(isset($menu['title'])){
        echo '- '. $menu['title'].'';
    }elseif(isset($article['slug'])){
        echo '- '. $article['slug'].'';
    }else{
        echo'';
    }

        ?></title>
        
<?= $Analytics['value'] ?>

<!-- Bootstrap core CSS -->
<link href="assets/styles/css/bootstrap.css" rel="stylesheet" >
<link href="assets/styles/css/carousel.css" rel="stylesheet">
<link href="assets/styles/css/movie.css" rel="stylesheet">

<!-- Favicons
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
-->

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    .button {
        

     
    margin-left: auto;
    margin-right: auto 

    }
    .marg {
        margin-top: 50px
    }
    .marg2 {
        margin-top: 100px
    }
    .marg3 {
        margin-top: 70px
    }

    #myVideo {
        top :0;
  right: 0;
  bottom: 0;
  max-width: 100%; 
  min-height: 100%;
    }
  .video-wrapper {
	width: 2000px;
	max-width: 100%;
}

.video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>
