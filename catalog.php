<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="catalog-page header-static">
        <div class="bg-second">
            <?php include_once "./templates/components/header.component.php"; ?>
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Catalog</span>
                </div>
            </div>

            <div class="catalog-page__header">
                <div class="container">
                    <h2 class="catalog-page__title">LUXURY Properties FOR SALE IN DUBAI</h2>
                </div>

                <div class="catalog-page__search-filter">
                    <?php include_once "./templates/components/search-filter.component.php"; ?>
                </div>

                <div class="catalog-page__sort-panel">
                    <div class="sort-panel">
                        <div class="container">
                            <div class="sort-panel__wrapper">
                                <div class="sort-panel__section">
                                    <div class="sort-panel__part">
                                        <p class="sort-panel__title">Show price in:</p>
                                        <div class="sort-panel__items">
                                            <a href="#" class="active">AED</a>
                                            <a href="#">USD</a>
                                            <a href="#">RUB</a>
                                        </div>
                                    </div>

                                    <div class="sort-panel__part">
                                        <p class="sort-panel__title">Show area in:</p>
                                        <div class="sort-panel__items">
                                            <a href="#" class="active">Sq. Ft.</a>
                                            <a href="#">Sq. M.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sort-panel__section">
                                    <a href="#" class="sort-panel__reset"><span class="icon-reset"></span> Reset filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="catalog__main">
                <div class="catalog__content">
                    <p class="catalog__result">160 results find</p>

                    <div class="catalog__items">
                        <?php
                        for ($i = 1; $i <= 14; $i++) {
                            include "./templates/components/catalog-item.php";
                        }
                        ?>
                    </div>
                    <div class="catalog-footer">
                        <p class="catalog-footer__text">1 – 40 of 120 objects</p>

                        <div class="catalog-footer__navs">
                            <a href="#" class="btn-icon btn-nav btn-nav--prev"><span class="icon-arrow-prev"></span></a>
                            <a href="#" class="btn-icon btn-nav btn-nav--next"><span class="icon-arrow-next"></span></a>
                        </div>
                    </div>
                </div>

                <?php include_once "./templates/components/minimal-footer.component.php"; ?>
            </div>

            <div class="catalog__map">
                <p class="catalog-toggle">
                    <button class="catalog-toggle__open"><span class="icon-arrow-prev"></span></button>
                    <button class="catalog-toggle__close"><span class="icon-arrow-next"></span></button>
                </p>
            </div>
        </div>


    </main>
<?php include_once "./templates/layout/end.layout.php"; ?>