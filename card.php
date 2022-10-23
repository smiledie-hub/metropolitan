<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="card-page header-static">
        <div class="bg-second">
            <?php include_once "./templates/components/header.component.php"; ?>
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <a href="/">Areas</a>
                    <span class="icon-arrow-next"></span>
                    <a href="/">Palm Jumeirah</a>
                    <span class="icon-arrow-next"></span>
                    <span>Jumeirah Tower</span>
                </div>
            </div>
            <div class="card-page__cursor">
                <span class="icon-arrow-prev"></span>
                <span class="icon-arrow-next"></span>
            </div>
            <section class="card-banner">
                <div class="card-banner__next"></div>
                <div class="card-banner__prev"></div>
                <div class="card-banner__buttons">
                    <a href="#" class="btn--primary card-banner__play"><span class="play"><span
                                    class="icon-play"></span></span> Video</a>
                    <a href="#" class="btn--primary card-banner__cube"><span class="icon-cube"></span> 3D tour</a>
                </div>
                <div class="swiper card-banner__swiper">
                    <div class="swiper-wrapper card-banner__wrapper">
                        <div class="card-banner__slide swiper-slide">
                            <img class="card-banner__image" src="/public/images/card-image.jpg" alt="">
                        </div>
                        <div class="card-banner__slide swiper-slide">
                            <img class="card-banner__image" src="/public/images/card-image.jpg" alt="">
                        </div>
                        <div class="card-banner__slide swiper-slide">
                            <img class="card-banner__image" src="/public/images/card-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <div class="card-detail">
                <div class="container">
                    <div class="card-detail__wrapper">
                        <div class="card-detail__section">
                            <p class="card-detail__price card-detail-price">AED 24.000.000</p>
                            <h1 class="card-detail__title">Jumeirah Tower | Elite penthouse with private swimming
                                pool</h1>
                            <p class="card-detail-category card-detail__category">The Royal Residences</p>
                            <p class="card-detail-map card-detail__map"><span class="icon-location"></span>Palm Jumeirah
                            </p>

                            <div class="card-detail__items">
                                <div class="card-detail__item"><span class="icon-beds"></span> 4 Bedrooms</div>
                                <div class="card-detail__item"><span class="icon-baths"></span> 4 Bathrooms</div>
                                <div class="card-detail__item"><span class="icon-cars"></span> 3 Parking</div>
                                <div class="card-detail__item"><span class="icon-sea"></span> Sea view</div>
                                <div class="card-detail__item"><span class="icon-sort-fill"></span> 5678.78 sq.ft.</div>
                            </div>

                            <a href="#" class="btn btn--primary-outline card-detail__plan"><span
                                        class="icon-plain"></span> Plan</a>
                        </div>
                        <div class="card-detail__section">
                            <div class="card-detail-profile">
                                <img class="card-detail-profile__image" src="/public/images/card-profile.jpg"
                                     alt="profile">
                                <div>
                                    <h2 class="card-detail-profile__title">Oybek Shamsiddinov</h2>
                                    <p class="card-detail-profile__text">Senior Manager</p>

                                    <div class="card-detail-profile__socials">
                                        <a href="#" data-text="Whatsapp"
                                           class="card-detail-profile__social btn-icon tippy"><span
                                                    class="icon-whatsapp-thin"></span></a>
                                        <a href="#" data-text="Phone"
                                           class="card-detail-profile__social btn-icon tippy"><span
                                                    class="icon-phone"></span></a>
                                        <a href="#" data-text="Email"
                                           class="card-detail-profile__social btn-icon tippy"><span
                                                    class="icon-mail"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-description">
            <div class="container">
                <p class="card-description__subtitle">Description</p>
                <h2 class="card-description__title">Atlantis The Royal Residences by Kerzner International is a
                    super-elite development</h2>
            </div>

            <div class="card-description__wrapper card-description__wrapper--first">
                <div class="card-description__items">
                    <div class="card-description__item">
                        <p class="card-description__number">795</p>
                        <p class="card-description__label">Rooms</p>
                    </div>
                    <div class="card-description__item">
                        <p class="card-description__number">102</p>
                        <p class="card-description__label">Suites</p>
                    </div>
                    <div class="card-description__item">
                        <p class="card-description__number">44</p>
                        <p class="card-description__label">Suites come with their own private pool</p>
                    </div>
                </div>

                <p class="card-description__text">There are ready to move-in Sky Courts, Garden Suites and
                    Penthouses available for sale.</p>
            </div>
            <div class="card-description__wrapper card-description__wrapper--end">
                <img class="card-description__image" src="/public/images/card-description.jpg" alt="card-description">
                <div class="card-description__content">
                    <p>Penthouses feature 3-5 bedroom layouts, alongside a terrace with a stunning pool and
                        exclusive dining and living spaces. The size of these residences varies between 3,015 sq. ft
                        and 25,206 sq. ft, with the initial cost amounting to AED 24M (USD 6.5M).</p>
                    <p>The 43-storey super-luxury development will house over 90 swimming pools, the largest
                        jellyfish tank in the world, a world-first fire-meets-water fountain, as well as 18
                        restaurants and bars, among other onsite amenities. Not forgetting exclusive concierge
                        services, which are set to cater to residents at any time of the day and night.</p>
                </div>
            </div>
        </div>
        <div class="card-more">
            <div class="card-more__wrapper">
                <div class="card-more__section">
                    <h2 class="card-more__title">Features and Amenities</h2>
                    <div class="card-more__items">
                        <div class="card-more__item">
                            <span class="card-more__icon"><span class="icon-home"></span></span>
                            <p class="card-more__text">Indoor</p>
                            <ul class="card-more__ul">
                                <li>Terrassa</li>
                                <li>Pool</li>
                                <li>Air Conditioning</li>
                                <li>Smart Home System</li>
                            </ul>
                        </div>
                        <div class="card-more__item">
                            <span class="card-more__icon"><span class="icon-leaf"></span></span>
                            <p class="card-more__text">Outdoor</p>
                            <ul class="card-more__ul">
                                <li>Shopping mall</li>
                                <li>Restaurant</li>
                                <li>Beach club</li>
                                <li>Concierge</li>
                                <li>Private garage</li>
                                <li>Golf club</li>
                            </ul>
                        </div>
                        <div class="card-more__item">
                            <span class="card-more__icon"><span class="icon-city"></span></span>
                            <p class="card-more__text">Lot</p>
                            <ul class="card-more__ul">
                                <li>Sea view</li>
                                <li>City view</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-more__section">
                    <h2 class="card-more__title">Project Details</h2>
                    <div class="card-more__lists">
                        <div class="card-more-list">
                            <p class="card-more-list__title">Unit Reference</p>
                            <p class="card-more-list__value">MP-S-31858</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Parking Slot</p>
                            <p class="card-more-list__value">1</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Property Name</p>
                            <p class="card-more-list__value">Jumeirah Gate Tower 1</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Permit Number</p>
                            <p class="card-more-list__value">71383570558</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Emirate</p>
                            <p class="card-more-list__value">Dubai</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Status</p>
                            <p class="card-more-list__value">Completed</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Purpose</p>
                            <p class="card-more-list__value">For sale</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Addeed on</p>
                            <p class="card-more-list__value">23 April 2022</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Year Built</p>
                            <p class="card-more-list__value">2021</p>
                        </div>
                        <div class="card-more-list">
                            <p class="card-more-list__title">Outdoor</p>
                            <p class="card-more-list__value">No</p>
                        </div>
                    </div>

                    <a href="#" class="btn btn--primary-outline">Show more about project</a>
                </div>
            </div>
        </div>
        <div class="card-schema">
            <div class="container">
                <div class="card-schema__wrapper">
                    <div class="card-schema__section">
                        <p class="card-schema__price card-detail-price">AED 24.000.000</p>
                        <p class="card-schema__text">Jumeirah Tower | Elite penthouse with private swimming pool</p>

                        <p class="card-detail-category card-schema__category">The Royal Residences</p>
                        <p class="card-detail-map card-schema__map"><span class="icon-location"></span>Palm Jumeirah</p>

                        <div class="card-schema__items">
                            <div class="card-schema__item"><span><span class="icon-beds"></span></span> 4 Bedrooms</div>
                            <div class="card-schema__item"><span><span class="icon-baths"></span></span> 4 Bathrooms
                            </div>
                            <div class="card-schema__item"><span><span class="icon-cars"></span></span> 3 Parking</div>
                            <div class="card-schema__item"><span><span class="icon-sort-fill"></span></span> 5678.78
                                sq.ft.
                            </div>
                        </div>

                        <div class="card-schema__icons">
                            <div class="card-schema__icon tippy" data-text="Leaf"><span class="icon-leaf"></span></div>
                            <div class="card-schema__icon tippy" data-text="Pool"><span class="icon-pool"></span></div>
                        </div>

                        <div class="card-schema__navs">
                            <button class="btn-icon btn-nav btn-nav--prev card-schema-prev"><span
                                        class="icon-arrow-prev"></span>
                            </button>
                            <button class="btn-icon btn-nav btn-nav--next card-schema-next"><span
                                        class="icon-arrow-next"></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-schema__section">
                        <div class="swiper slider-schema">
                            <div class="swiper-wrapper slider-schema__wrapper">
                                <div class="swiper-slide slider-schema__slide">
                                    <img class="slider-schema__image" src="/public/images/schema.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-map">
            <div class="container">
                <div class="card-map__title-box">
                    <h2 class="card-map__title">Explore the Area</h2>
                    <a href="#" class="btn btn--primary-outline">Show more about area</a>
                </div>

                <p class="card-detail-map card-map__label"><span class="icon-location"></span>Palm Jumeirah</p>

                <div id="map"></div>
            </div>
        </div>
        <div class="card-infrastructure">

            <div class="card-infrastructure__wrapper">
                <img class="card-infrastructure__image" src="/public/images/infrastructure-1.jpg" alt="infrastructure"/>
                <div class="card-infrastructure__section">
                    <h2 class="card-infrastructure__title"><span
                                class="card-infrastructure__first">infrastructure</span> <span
                                class="fn-sg card-infrastructure__sg">Infrastructure</span>
                    </h2>
                    <p class="card-infrastructure__text">The island boasts excellent transport connectivity thanks to
                        the
                        adjacent King Salman Bin Abdulaziz Al
                        Saud Street, which leads directly to the Sheikh Zayed Road and other essential arteries nearby.
                        On the
                        other 3 sides, Palm Jumeirah is bounded by the Arabian Gulf, offering an unparalleled sea
                        view.</p>
                    <p class="card-infrastructure__text">It is worth noting that the island provides easy access to the
                        mainland
                        of Dubai due to the
                        first-of-its-kind system in the Middle East - The Palm Monorail. </p>
                </div>
            </div>

            <div class="card-infrastructure__background">
                <div class="card-infrastructure__wrapper-2">
                    <div class="card-infrastructure__section-2">
                        <p class="card-infrastructure__text card-infrastructure__text--2">Although there are no schools
                            on
                            Palm Jumeirah, it houses a range of private international establishments that enroll
                            students in
                            pre-kindergarten or kindergarten (Redwood Montessori Nursery, Blossom Palm Jumeirah Nursery,
                            etc.) through to high school. </p>
                        <a href="#" class="btn btn--primary-outline">Find out more about Dubai areas</a>
                    </div>

                    <img class="card-infrastructure__image-2" src="/public/images/infrastructure-2.jpg"
                         alt="infrastructure">
                </div>

                <img class="card-infrastructure__image-3" src="/public/images/infrastructure-3.jpg"
                     alt="infrastructure">
            </div>
        </div>
        <div class="card-lifestyle">
            <div class="container">
                <h2 class="card-lifestyle__title"><span class="card-lifestyle__first">Lifestyle</span> <span
                            class="fn-sg card-lifestyle__sg">Lifestyle</span></h2>
                <div class="card-lifestyle__content">
                    <p class="card-lifestyle__text">Bringing a world-class resort lifestyle, Palm Jumeirah houses many
                        luxury hotels, including Atlantis Dubai, W Dubai and FIVE Palm Jumeirah, where each location has
                        a private beach club and a modern lounge.</p>
                </div>
            </div>

            <img class="card-lifestyle__image-1" src="/public/images/lifestyle-1.jpg" alt="lifestyle">

            <div class="container">
                <div class="card-lifestyle__content card-lifestyle__content--2">
                    <p class="card-lifestyle__text">Not forgetting the ultimate dining destinations scattered across the
                        island, including Nobu, Gordon Ramsay’s Bread Street Kitchen & Bar, Akira Back and Ossiano,
                        among a
                        long list of others.</p>
                    <a href="#" class="btn btn--primary-outline">Discover more of our projects</a>
                </div>
            </div>

            <div class="card-lifestyle__images">
                <div>
                    <img class="card-lifestyle__image-2" src="/public/images/lifestyle-2.jpg" alt="lifestyle">
                </div>
                <div>
                    <img class="card-lifestyle__image-3" src="/public/images/lifestyle-3.jpg" alt="lifestyle">
                </div>
            </div>
        </div>
        <div class="contact-send bg-white">
            <div class="contact-send__wrapper">
                <div class="contact-send__section">
                    <h2 class="contact-send__title">Send us your request and we will contact you as soon as
                        possible!</h2>

                    <form class="form contact-send__form" action="">
                        <label class="form__row contact-send__name">
                            <input class="field-line" type="text" placeholder="Name: " name="name">
                        </label>
                        <label class="form__row contact-send__email">
                            <input class="field-line" type="text" placeholder="E-mail: " name="email">
                        </label>
                        <label class="form__row contact-send__phone">
                            <input class="field-line" type="text" placeholder="Phone: " name="phone">
                        </label>
                        <label class="form__row contact-send__message">
                            <input class="field-line" type="text" placeholder="Message: " name="message">
                        </label>

                        <div class="form__row">
                            <label class="checkbox contact-send__checkbox">
                                <input type="checkbox" name="privacy" class="checkbox__input" checked>
                                <span class="checkbox__box"><span class="icon-check"></span></span>
                                <span class="checkbox__text">I agree to <a href="#">Terms</a> of use and <a
                                            href="#">Privacy Policy</a></span>
                            </label>
                        </div>

                        <div class="form__row">
                            <button type="submit" class="btn btn--primary contact-send__send">Send</button>
                        </div>
                    </form>
                </div>
                <div class="contact-send__section">
                    <img class="contact-send__image" src="/public/images/contact-bg.jpg" alt="">

                    <div class="contact-send__content">
                        <div class="contact-send-profile">
                            <img class="contact-send-profile__image" src="/public/images/card-profile.jpg" alt="">
                            <p class="contact-send-profile__text">Contac t<br>Oybek Shamsiddinov</p>
                        </div>

                        <div class="contact-send__socials">
                            <a href="#" class="contact-send__social">
                                <span class="btn-icon btn-icon--white"><span class="icon-whatsapp-thin"></span></span>
                                Whatsapp
                            </a>
                            <a href="#" class="contact-send__social">
                                <span class="btn-icon btn-icon--white"><span class="icon-phone"></span></span>
                                +971 58 648 8888
                            </a>
                            <a href="#" class="contact-send__social">
                                <span class="btn-icon btn-icon--white"><span class="icon-mail"></span></span>
                                example@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-properties">
            <div class="container">
                <h2 class="related-properties__title">Related properties</h2>
            </div>

            <div class="swiper related-properties__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="front-residence front-residence--slide">
                            <div class="front-residence__content">
                                <div class="front-residence__wrapper">
                                    <div class="front-residence__container">
                                        <h2 class="front-residence__title">Jumeirah Beach Residences</h2>
                                        <p class="front-residence__price">12,000,000 AED</p>
                                        <p class="front-residence__text">2-level luxury penthouse with city view</p>

                                        <div class="front-residence__items">
                                            <p class="front-residence__item"><span
                                                        class="icon-beds front-residence__icon"></span> 4</p>
                                            <p class="front-residence__item"><span
                                                        class="icon-baths front-residence__icon"></span> 4
                                            </p>
                                            <p class="front-residence__item"><span
                                                        class="icon-cars front-residence__icon"></span> 3</p>
                                            <p class="front-residence__item">5678.78 sqft</p>
                                        </div>

                                        <a href="#" class="btn btn--primary btn--small btn--cl-black">Learn more</a>
                                    </div>
                                    <div>
                                        <div class="front-residence-presented">
                                            <div class="front-residence-presented__image">
                                                <img src="/public/images/presented.jpg" alt="presented">
                                            </div>
                                            <p class="front-residence-presented__text">Presented <br>by Mohamed Ezz</p>
                                        </div>

                                        <div class="front-residence__buttons">
                                            <a href="#" class="front-residence__button">Contact agent</a>
                                            <a href="#" class="front-residence__button">Send an enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="front-residence__image-box">
                                <img class="front-residence__image" src="/public/images/front-residence.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="front-residence front-residence--slide">
                            <div class="front-residence__content">
                                <div class="front-residence__wrapper">
                                    <div class="front-residence__container">
                                        <h2 class="front-residence__title">Jumeirah Beach Residences</h2>
                                        <p class="front-residence__price">12,000,000 AED</p>
                                        <p class="front-residence__text">2-level luxury penthouse with city view</p>

                                        <div class="front-residence__items">
                                            <p class="front-residence__item"><span
                                                        class="icon-beds front-residence__icon"></span> 4</p>
                                            <p class="front-residence__item"><span
                                                        class="icon-baths front-residence__icon"></span> 4
                                            </p>
                                            <p class="front-residence__item"><span
                                                        class="icon-cars front-residence__icon"></span> 3</p>
                                            <p class="front-residence__item">5678.78 sqft</p>
                                        </div>

                                        <a href="#" class="btn btn--primary btn--small btn--cl-black">Learn more</a>
                                    </div>
                                    <div>
                                        <div class="front-residence-presented">
                                            <div class="front-residence-presented__image">
                                                <img src="/public/images/presented.jpg" alt="presented">
                                            </div>
                                            <p class="front-residence-presented__text">Presented <br>by Mohamed Ezz</p>
                                        </div>

                                        <div class="front-residence__buttons">
                                            <a href="#" class="front-residence__button">Contact agent</a>
                                            <a href="#" class="front-residence__button">Send an enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="front-residence__image-box">
                                <img class="front-residence__image" src="/public/images/front-residence.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="front-residence front-residence--slide">
                            <div class="front-residence__content">
                                <div class="front-residence__wrapper">
                                    <div class="front-residence__container">
                                        <h2 class="front-residence__title">Jumeirah Beach Residences</h2>
                                        <p class="front-residence__price">12,000,000 AED</p>
                                        <p class="front-residence__text">2-level luxury penthouse with city view</p>

                                        <div class="front-residence__items">
                                            <p class="front-residence__item"><span
                                                        class="icon-beds front-residence__icon"></span> 4</p>
                                            <p class="front-residence__item"><span
                                                        class="icon-baths front-residence__icon"></span> 4
                                            </p>
                                            <p class="front-residence__item"><span
                                                        class="icon-cars front-residence__icon"></span> 3</p>
                                            <p class="front-residence__item">5678.78 sqft</p>
                                        </div>

                                        <a href="#" class="btn btn--primary btn--small btn--cl-black">Learn more</a>
                                    </div>
                                    <div>
                                        <div class="front-residence-presented">
                                            <div class="front-residence-presented__image">
                                                <img src="/public/images/presented.jpg" alt="presented">
                                            </div>
                                            <p class="front-residence-presented__text">Presented <br>by Mohamed Ezz</p>
                                        </div>

                                        <div class="front-residence__buttons">
                                            <a href="#" class="front-residence__button">Contact agent</a>
                                            <a href="#" class="front-residence__button">Send an enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="front-residence__image-box">
                                <img class="front-residence__image" src="/public/images/front-residence.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include_once "./templates/components/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>