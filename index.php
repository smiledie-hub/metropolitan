<?php include_once "./templates/layout/start.layout.php"; ?>

    <main class="front-page">
        <?php include_once "./templates/components/header.component.php"; ?>

        <section class="front-page__banner">
            <?php include_once "./templates/components/front/front-banner.component.php"; ?>
        </section>

        <section class="front-page__about">
            <?php include_once "./templates/components/front/front-about.component.php"; ?>
        </section>

        <div class="front-page__background">
            <section class="front-page__agents">
                <?php include_once "./templates/components/front/front-agents.component.php"; ?>
            </section>
            <section class="front-page__we-are">
                <?php include_once "./templates/components/front/front-we-are.component.php"; ?>
            </section>
            <section class="front-page__projects">
                <?php include_once "./templates/components/front/front-projects.component.php"; ?>
            </section>
            <section class="front-page__infinity">
                <?php include_once "./templates/components/front/front-infinity.component.php"; ?>
            </section>
        </div>

        <section class="front-page__residence">
            <?php include_once "./templates/components/front/front-residence.component.php"; ?>
        </section>

        <section class="front-page__services">
            <?php include_once "./templates/components/front/front-services.component.php"; ?>
        </section>

        <section class="front-page__property">
            <?php include_once "./templates/components/front/front-property.component.php"; ?>
        </section>

        <section class="front-page__blog">
            <?php include_once "./templates/components/blog.component.php"; ?>
        </section>
    </main>
<?php include_once "./templates/components/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>