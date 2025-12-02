<?php get_header(); ?>

<section class="hero position-relative d-flex align-items-center">
    <div class="hero-background position-absolute top-0 start-0 w-100 h-100">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image1.png" alt="Волейбольная площадка" class="w-100 h-100 object-fit-cover">
    </div>
    <div class="container position-relative text-center">
        <div class="hero-content">
            <h1 class="hero-title mb-4">ТРЕНИРОВКИ И АРЕНДА<br>ВОЛЕЙБОЛЬНЫХ ПЛОЩАДОК</h1>
            <p class="hero-subtitle mb-5">Выберите и нажмите, чтобы забронировать</p>
            <div class="filter-buttons d-flex flex-wrap gap-3 justify-content-center">
                <button class="btn filter-btn active">Все</button>
                <button class="btn filter-btn">Игровые тренировки</button>
                <button class="btn filter-btn">Тренировки с тренером</button>
                <button class="btn filter-btn">Аренда зала</button>
            </div>
        </div>
    </div>
</section>

<section class="trainings py-5" id="gallery">
    <div class="container">
        <div class="row g-4 trainings-grid">
            <div class="col-12 col-lg-12">
                <div class="training-card position-relative d-flex flex-row align-items-center gap-4" data-category="тренировки с тренером">
                    <button class="bookmark-btn position-absolute top-0 end-0 m-3 btn p-0 border-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-section flex-shrink-0">
                        <p class="card-type mb-1 fs-6 fw-medium">Тренировка с тренером</p>
                        <p class="card-trainer mb-0 fs-4 fw-semibold">Кузнецов А.А.</p>
                    </div>
                    <div class="card-section flex-grow-1">
                        <div class="info-item d-flex align-items-center gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">12 октября 19:00-21:00</span>
                        </div>
                        <div class="info-item d-flex align-items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">ул. Победы 41</span>
                        </div>
                    </div>
                    <div class="card-section flex-shrink-0 text-end">
                        <div class="info-item d-flex align-items-center gap-2 mb-2 justify-content-end">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">Игроков 9 из 12</span>
                        </div>
                        <p class="card-price mb-0 fs-3 fw-semibold">350 руб.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-12">
                <div class="training-card position-relative d-flex flex-row align-items-center gap-4" data-category="игровые тренировки">
                    <button class="bookmark-btn position-absolute top-0 end-0 m-3 btn p-0 border-0">
                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-section flex-shrink-0">
                        <p class="card-type mb-1 fs-6 fw-medium">Игровая тренировка</p>
                        <p class="card-trainer mb-0 fs-4 fw-semibold">Волкова М.Н.</p>
                    </div>
                    <div class="card-section flex-grow-1">
                        <div class="info-item d-flex align-items-center gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">13 октября 20:00-22:00</span>
                        </div>
                        <div class="info-item d-flex align-items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">ул. Победы 41</span>
                        </div>
                    </div>
                    <div class="card-section flex-shrink-0 text-end">
                        <div class="info-item d-flex align-items-center gap-2 mb-2 justify-content-end">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">Игроков 14 из 16</span>
                        </div>
                        <p class="card-price mb-0 fs-3 fw-semibold">200 руб.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="training-card position-relative d-flex flex-row align-items-center gap-4" data-category="игровые тренировки">
                    <button class="bookmark-btn position-absolute top-0 end-0 m-3 btn p-0 border-0">
                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-section flex-shrink-0">
                        <p class="card-type mb-1 fs-6 fw-medium">Игровая тренировка</p>
                        <p class="card-trainer mb-0 fs-4 fw-semibold">Иванов И.И.</p>
                    </div>
                    <div class="card-section flex-grow-1">
                        <div class="info-item d-flex align-items-center gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">13 октября 15:00-22:00</span>
                        </div>
                        <div class="info-item d-flex align-items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">ул. Ленина 115</span>
                        </div>
                    </div>
                    <div class="card-section flex-shrink-0 text-end">
                        <div class="info-item d-flex align-items-center gap-2 mb-2 justify-content-end">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">Не ограничено</span>
                        </div>
                        <p class="card-price mb-0 fs-3 fw-semibold">3200 руб./час</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-12">
                <div class="training-card position-relative d-flex flex-row align-items-center gap-4" data-category="аренда зала">
                    <button class="bookmark-btn position-absolute top-0 end-0 m-3 btn p-0 border-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-section flex-shrink-0">
                        <p class="card-type mb-1 fs-6 fw-medium">Аренда зала</p>
                        <p class="card-trainer mb-0 fs-4 fw-semibold">Иванов И.И.</p>
                    </div>
                    <div class="card-section flex-grow-1">
                        <div class="info-item d-flex align-items-center gap-2 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">13 октября 14:00-22:00</span>
                        </div>
                        <div class="info-item d-flex align-items-center gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">ул. Тренерская 16</span>
                        </div>
                    </div>
                    <div class="card-section flex-shrink-0 text-end">
                        <div class="info-item d-flex align-items-center gap-2 mb-2 justify-content-end">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="" width="24" height="24">
                            <span class="fs-6 fw-medium">Не ограничено</span>
                        </div>
                        <p class="card-price mb-0 fs-3 fw-semibold">3500 руб./час</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us py-5" id="about">
    <div class="container">
        <h2 class="section-title text-center mb-5">Почему именно мы?</h2>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="why-us-card text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image2.png" alt="Волейбольная площадка" class="img-fluid rounded mb-3">
                    <p class="fs-6 fw-medium">Профессиональные площадки для комфортной игры. Высококлассное оборудование от известных брендов.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="why-us-card text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image3.png" alt="Волейбольный мяч" class="img-fluid rounded mb-3">
                    <p class="fs-6 fw-medium">Качественные оригинальные мячи, в отличном состоянии и накачены до необходимого давления.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="why-us-card text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image4.png" alt="Тренер с игроком" class="img-fluid rounded mb-3">
                    <p class="fs-6 fw-medium">Высококвалифицированные тренеры с большим опытом. Удобная система записи и бронирования.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contacts py-5" id="contacts">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5">
                <div class="contacts-info">
                    <h2 class="section-title mb-4">Контакты:</h2>
                    <div class="info-text">
                        <p class="fs-5 mb-3"><strong>Главный зал:</strong><br>Москва. Улица Победы 41</p>
                        <p class="fs-5 mb-3"><strong>Номер телефона:</strong><br>8-900-052-23-42</p>
                        <p class="fs-5 mb-3"><strong>Часы работы:</strong><br>10:00-23:00</p>
                        <p class="fs-5 mb-0"><strong>Почта:</strong><br>VolleyArea@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="map">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="Карта расположения зала" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq py-5">
     <div class="container">
        <h2 class="section-title text-center mb-5">Частые вопросы:</h2>
        <div class="faq-accordion mx-auto" style="max-width: 900px;">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item faq-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                            Что будет если я забронирую тренировку и не приду?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-answer">
                            <p class="mb-0 fw-medium">Независимо от вида тренировки вы подводите и организаторов и других игроков. За бронирование и отсутствие на тренировке в первый раз вы будете заблокированы сайтом на 1 неделю. А при повторе "ложного бронирования" блокировка навсегда.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            Можно ли отменить бронирование?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-answer">
                            <p class="mb-0 fw-medium">Да, отменить бронирование можно за 24 часа до начала мероприятия. В ином случае, предоплата не возвращается.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            Какой уровень подготовки нужен?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-answer">
                            <p class="mb-0 fw-medium">У нас есть группы для всех уровней подготовки, от новичков до профессионалов. Вы сможете найти подходящую для себя.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            Что нужно взять с собой?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-answer">
                            <p class="mb-0 fw-medium">Спортивную одежду, удобную обувь и бутылку воды. Мячи и остальной инвентарь мы предоставляем.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-item-static text-center mt-4 p-4">
                <p class="mb-0 fs-6 fw-medium">Просим быть вас пунктуальными и ответственными. Приятной игры с VolleyArea!</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
