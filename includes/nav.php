<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?> 

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">J&K Sea Moss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link <?php if($currentPage == 'index.php'){echo 'active';} ?>" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if($currentPage == 'shop.php'){echo 'active';} ?>" href="shop.php" id="navbarDropdownShop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-store"></i> Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownShop">
                <li><a class="dropdown-item <?php if($currentPage == 'shop.php'){echo 'active';} ?>" href="shop.php">All Items</a></li>
                <li><a class="dropdown-item" href="#">Gel</a></li>
                <li><a class="dropdown-item" href="#">Soap</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($currentPage == 'contact.php'){echo 'active';} ?>" href="contact.php"><i class="fas fa-envelope"></i> Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($currentPage == 'blog.php'){echo 'active';} ?>" href="blog.php"><i class="fas fa-blog"></i> Blog</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if($currentPage == 'learn-more.php'){echo 'active';} ?>" href="learn-more.php" id="navbarDropdownLearnMore" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-info-circle"></i> Learn More
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLearnMore">
                <li><a class="dropdown-item <?php if($currentPage == 'learn-more.php'){echo 'active';} ?>" href="learn-more.php">All</a></li>
                <li><a class="dropdown-item <?php if($currentPage == 'benefits.php'){echo 'active';} ?>" href="benefits.php">Benefits</a></li>
                <li><a class="dropdown-item <?php if($currentPage == 'recipes.php'){echo 'active';} ?>" href="recipes.php">Recipes</a></li>
                <li><a class="dropdown-item <?php if($currentPage == 'nutritional-info.php'){echo 'active';} ?>" href="nutritional-info.php">Nutritional Info</a></li>
                <li><a class="dropdown-item <?php if($currentPage == 'how-its-made.php'){echo 'active';} ?>" href="how-its-made.php">How It's Made</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>