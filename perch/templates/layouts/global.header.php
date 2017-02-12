<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container header-container">
    <header class="header wrapper">
        <a href="/" class="header__logo">
            <img src="/img/calibro-logo.png" alt="Calibro Transport, Highway &amp; Infrastructure Consultants">
        </a>
        <button class="menu button button--outline">Menu</button>
        <?php perch_pages_navigation([
            'template'  => ['nav--level1.html','nav--level2.html']
        ]); ?>
    </header>
</div>