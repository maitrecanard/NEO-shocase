<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white">
    <a class="navbar-brand" href="home"><img src="assets/images/logo/<?= $Entreprise['logo']?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

        <?php foreach ($AllMenu as $index => $menu): ?>
            
            <li class="nav-item">
                <a class="nav-link" href="<?= $menu['url']?>"><?= $menu['title']?><span class="sr-only">(current)</span></a>
            </li>

        <?php endforeach; ?>
        
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?= $Entreprise['city'] ?></a>
            </li>
        </ul>

    </div>
</nav>