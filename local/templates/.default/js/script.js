/**
 * Корпоративный портал - Основные скрипты
 */

(function($) {
  'use strict';

  // ============================================
  // Cookie Banner
  // ============================================
  function initCookieBanner() {
    const cookieBanner = $('#cookie-banner');
    const cookieAccepted = localStorage.getItem('cookieAccepted');

    if (!cookieAccepted) {
      setTimeout(function() {
        cookieBanner.addClass('show');
      }, 1000);
    }

    $('#cookie-accept').on('click', function() {
      localStorage.setItem('cookieAccepted', 'true');
      cookieBanner.removeClass('show');
      setTimeout(function() {
        cookieBanner.remove();
      }, 300);
    });
  }

  // ============================================
  // Smooth Scroll для якорных ссылок
  // ============================================
  function initSmoothScroll() {
    $('a[href^="#"]').on('click', function(e) {
      const target = $(this.getAttribute('href'));
      
      if (target.length) {
        e.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top - 80
        }, 800);
      }
    });
  }

  // ============================================
  // Navbar: добавление тени при скролле
  // ============================================
  function initNavbarScroll() {
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > 50) {
        $('.header').addClass('scrolled');
      } else {
        $('.header').removeClass('scrolled');
      }
    });
  }

  // ============================================
  // Форма подписки на новости
  // ============================================
  function initSubscribeForm() {
    $('#subscribe-form').on('submit', function(e) {
      e.preventDefault();
      const email = $(this).find('input[type="email"]').val();
      
      // Имитация отправки (в реальном проекте здесь будет AJAX)
      console.log('Подписка на новости:', email);
      
      // Показываем сообщение об успехе
      alert('Спасибо за подписку! Мы будем присылать вам новости на ' + email);
      $(this).find('input[type="email"]').val('');
    });
  }

  // ============================================
  // Контактная форма с валидацией
  // ============================================
  function initContactForm() {
    $('.form-contact').on('submit', function(e) {
      e.preventDefault();
      
      const form = $(this);
      let isValid = true;

      // Сброс предыдущих ошибок
      form.find('.form-error').addClass('d-none');
      form.find('.form-control').removeClass('is-invalid');

      // Валидация всех обязательных полей
      form.find('[required]').each(function() {
        const field = $(this);
        const value = field.val().trim();
        
        if (!value) {
          isValid = false;
          field.addClass('is-invalid');
          field.siblings('.form-error').removeClass('d-none');
        }

        // Валидация email
        if (field.attr('type') === 'email' && value) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(value)) {
            isValid = false;
            field.addClass('is-invalid');
            field.siblings('.form-error').text('Введите корректный email').removeClass('d-none');
          }
        }

        // Валидация телефона
        if (field.attr('type') === 'tel' && value) {
          const phoneRegex = /^[\d\s\+\-\(\)]+$/;
          if (!phoneRegex.test(value) || value.length < 10) {
            isValid = false;
            field.addClass('is-invalid');
            field.siblings('.form-error').text('Введите корректный телефон').removeClass('d-none');
          }
        }
      });

      // Валидация чекбокса согласия
      const agreeCheckbox = form.find('#agreeContact');
      if (agreeCheckbox.length && !agreeCheckbox.is(':checked')) {
        isValid = false;
        agreeCheckbox.addClass('is-invalid');
        alert('Необходимо согласие с политикой конфиденциальности');
      }

      if (isValid) {
        // Имитация отправки формы (в реальном проекте здесь будет AJAX)
        const formData = {
          name: form.find('input[type="text"]').val(),
          email: form.find('input[type="email"]').val(),
          phone: form.find('input[type="tel"]').val(),
          subject: form.find('select').val(),
          message: form.find('textarea').val()
        };
        
        console.log('Отправка формы:', formData);

        // Скрываем форму и показываем сообщение об успехе
        form.find('.form-control, .form-label, .form-check, button[type="submit"]').hide();
        form.find('.form-success').removeClass('d-none');

        // Сброс формы через 3 секунды
        setTimeout(function() {
          form[0].reset();
          form.find('.form-control, .form-label, .form-check, button[type="submit"]').show();
          form.find('.form-success').addClass('d-none');
        }, 3000);
      }
    });

    // Удаление ошибки при вводе
    $('.form-control').on('input', function() {
      $(this).removeClass('is-invalid');
      $(this).siblings('.form-error').addClass('d-none');
    });
  }

  // ============================================
  // Анимация счетчиков (для статистики)
  // ============================================
  function initCounters() {
    const counters = $('.stat-number');
    
    if (counters.length) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const counter = $(entry.target);
            const target = counter.text().replace(/\D/g, '');
            const duration = 2000;
            const steps = 60;
            const increment = target / steps;
            let current = 0;

            const timer = setInterval(function() {
              current += increment;
              if (current >= target) {
                counter.text(counter.text().replace(/\d+/, target));
                clearInterval(timer);
              } else {
                counter.text(counter.text().replace(/\d+/, Math.floor(current)));
              }
            }, duration / steps);

            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      counters.each(function() {
        observer.observe(this);
      });
    }
  }

  // ============================================
  // Lazy Loading для изображений
  // ============================================
  function initLazyLoading() {
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove('lazy');
            imageObserver.unobserve(img);
          }
        });
      });

      document.querySelectorAll('img.lazy').forEach(function(img) {
        imageObserver.observe(img);
      });
    }
  }

  // ============================================
  // Анимация появления элементов при скролле
  // ============================================
  function initScrollAnimations() {
    const elements = $('.card, .stat-card, .timeline-item');
    
    if (elements.length) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            $(entry.target).addClass('animate-in');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      elements.each(function() {
        observer.observe(this);
      });
    }
  }

  // ============================================
  // Закрытие мобильного меню при клике на ссылку
  // ============================================
  function initMobileMenu() {
    $('.navbar-nav .nav-link').on('click', function() {
      if ($(window).width() < 992) {
        $('.navbar-collapse').collapse('hide');
      }
    });
  }

  // ============================================
  // Модальное окно видео (если используется)
  // ============================================
  function initVideoModal() {
    $('[data-video]').on('click', function(e) {
      e.preventDefault();
      const videoUrl = $(this).data('video');
      const modal = $('');
      
      $('body').append(modal);
      modal.modal('show');
      
      modal.on('hidden.bs.modal', function() {
        modal.remove();
      });
    });
  }

  // ============================================
  // Инициализация всех компонентов
  // ============================================
  $(document).ready(function() {
    initCookieBanner();
    initSmoothScroll();
    initNavbarScroll();
    initSubscribeForm();
    initContactForm();
    initCounters();
    initTeamFilter();
    initLazyLoading();
    initScrollAnimations();
    initMobileMenu();
    initVideoModal();

    console.log('✅ Корпоративный портал загружен');
  });

  // ============================================
  // Обработка изменения размера окна
  // ============================================
  let resizeTimer;
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      console.log('Window resized:', $(window).width());
    }, 250);
  });

})(jQuery);