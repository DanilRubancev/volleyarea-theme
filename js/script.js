document.addEventListener('DOMContentLoaded', () => {

    // Filter trainings (остается кастомная логика)
    const filterButtons = document.querySelectorAll('.filter-btn');
    const trainingCards = document.querySelectorAll('.training-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Убираем активный класс со всех кнопок
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Добавляем активный класс к нажатой кнопке
            button.classList.add('active');

            const filter = button.textContent.trim().toLowerCase();

            trainingCards.forEach(card => {
                const category = card.dataset.category.toLowerCase();
                const parentCol = card.closest('.col-12');
                
                if (filter === 'все' || category === filter) {
                    parentCol.style.display = 'block';
                } else {
                    parentCol.style.display = 'none';
                }
            });
        });
    });

    // Bookmark button (кастомная функциональность)
    const bookmarkButtons = document.querySelectorAll('.bookmark-btn');
    bookmarkButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            button.classList.toggle('active');
        });
    });

    // Закрытие мобильного меню при клике на ссылку
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarCollapse && typeof bootstrap !== 'undefined') {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    }

    // FAQ Accordion - Bootstrap обрабатывает это нативно, дополнительный код не нужен

});
