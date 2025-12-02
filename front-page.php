<?php get_header(); ?>

<section class="hero">
    <div class="hero-background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image1.png" alt="Волейбольная площадка">
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">ТРЕНИРОВКИ И АРЕНДА<br>ВОЛЕЙБОЛЬНЫХ ПЛОЩАДОК</h1>
            <p class="hero-subtitle">Выберите и нажмите, чтобы забронировать</p>
            <div class="filter-buttons">
                <button class="filter-btn active">Все</button>
                <button class="filter-btn">Игровые тренировки</button>
                <button class="filter-btn">Тренировки с тренером</button>
                <button class="filter-btn">Аренда зала</button>
            </div>
        </div>
    </div>
</section>

<section class="trainings" id="gallery">
    <div class="container">
        <div class="trainings-grid">
            <div class="training-card" data-category="тренировки с тренером">
                <button class="bookmark-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="card-header">
                    <p class="card-trainer">Кузнецов А.А.</p>
                    <p class="card-type">Тренировка с тренером</p>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="">
                        <span>12 октября 19:00-21:00</span>
                    </div>
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="">
                        <span>ул. Победы 41</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="">
                        <span>Игроков 9 из 12</span>
                    </div>
                    <p class="card-price">350 руб.</p>
                </div>
            </div>
            
            <div class="training-card" data-category="игровые тренировки">
                <button class="bookmark-btn">
                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                 <div class="card-header">
                    <p class="card-trainer">Волкова М.Н.</p>
                    <p class="card-type">Игровая тренировка</p>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="">
                        <span>13 октября 20:00-22:00</span>
                    </div>
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="">
                        <span>ул. Победы 41</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="">
                        <span>Игроков 14 из 16</span>
                    </div>
                    <p class="card-price">200 руб.</p>
                </div>
            </div>

            <div class="training-card" data-category="игровые тренировки">
                <button class="bookmark-btn">
                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                 <div class="card-header">
                    <p class="card-trainer">Иванов И.И.</p>
                    <p class="card-type">Игровая тренировка</p>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="">
                        <span>13 октября 15:00-22:00</span>
                    </div>
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="">
                        <span>ул. Ленина 115</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="">
                        <span>Не ограничено</span>
                    </div>
                    <p class="card-price">3200 руб./час</p>
                </div>
            </div>
            
            <div class="training-card" data-category="аренда зала">
                <button class="bookmark-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3H7C5.9 3 5 3.9 5 5V21L12 18L19 21V5C19 3.9 18.1 3 17 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="card-header">
                    <p class="card-trainer">Иванов И.И.</p>
                    <p class="card-type">Аренда зала</p>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.svg" alt="">
                        <span>13 октября 14:00-22:00</span>
                    </div>
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="">
                        <span>ул. Тренерская 16</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="info-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.svg" alt="">
                        <span>Не ограничено</span>
                    </div>
                    <p class="card-price">3500 руб./час</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us" id="about">
    <div class="container">
        <h2 class="section-title">Почему именно мы?</h2>
        <div class="why-us-grid">
            <div class="why-us-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image2.png" alt="Волейбольная площадка">
                <p>Профессиональные площадки для комфортной игры. Высококлассное оборудование от известных брендов.</p>
            </div>
            <div class="why-us-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image3.png" alt="Волейбольный мяч">
                <p>Качественные оригинальные мячи, в отличном состоянии и накачены до необходимого давления.</p>
            </div>
            <div class="why-us-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image4.png" alt="Тренер с игроком">
                <p>Высококвалифицированные тренеры с большим опытом. Удобная система записи и бронирования.</p>
            </div>
        </div>
    </div>
</section>

<section class="contacts" id="contacts">
    <div class="container">
        <div class="contacts-content">
            <div class="contacts-info">
                <h2 class="section-title">Контакты:</h2>
                <div class="info-text">
                    <p><strong>Главный зал:</strong><br>Москва. Улица Победы 41</p>
                    <p><strong>Номер телефона:</strong><br>8-900-052-23-42</p>
                    <p><strong>Часы работы:</strong><br>10:00-23:00</p>
                    <p><strong>Почта:</strong><br>VolleyArea@gmail.com</p>
                </div>
            </div>
            <div class="map">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="Карта расположения зала">
            </div>
        </div>
    </div>
</section>

<section class="faq">
     <div class="container">
        <h2 class="section-title">Частые вопросы:</h2>
        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question">Что будет если я забронирую тренировку и не приду?</button>
                <div class="faq-answer">
                    <p>Независимо от вида тренировки вы подводите и организаторов и других игроков. За бронирование и отсутствие на тренировке в первый раз вы будете заблокированы сайтом на 1 неделю. А при повторе “ложного бронирования” блокировка навсегда.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Можно ли отменить бронирование?</button>
                 <div class="faq-answer">
                    <p>Да, отменить бронирование можно за 24 часа до начала мероприятия. В ином случае, предоплата не возвращается.</p>
                </div>
            </div>
             <div class="faq-item">
                <button class="faq-question">Какой уровень подготовки нужен?</button>
                 <div class="faq-answer">
                    <p>У нас есть группы для всех уровней подготовки, от новичков до профессионалов. Вы сможете найти подходящую для себя.</p>
                </div>
            </div>
             <div class="faq-item">
                <button class="faq-question">Что нужно взять с собой?</button>
                 <div class="faq-answer">
                    <p>Спортивную одежду, удобную обувь и бутылку воды. Мячи и остальной инвентарь мы предоставляем.</p>
                </div>
            </div>
            <div class="faq-item-static">
                <p>Просим быть вас пунктуальными и ответственными. Приятной игры с VolleyArea!</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
