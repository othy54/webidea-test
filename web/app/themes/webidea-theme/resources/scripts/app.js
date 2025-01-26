import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const lenis = new Lenis({
    autoRaf: true,
  });

  //HEADER JS

  const btnMenu = document.querySelector('.btn-menu-wrapper');
  const menu = document.querySelector('.menu');

  btnMenu?.addEventListener('click', () => {
    menu.classList.toggle('menu--active');
  });

  // Effet du header qui se fixe au scroll et disparait lorqu'on remonte

  const header = document.querySelector('.header');
  let oldScroll = 0;

  if (header) {
    const onScroll = () => {
      if (oldScroll < window.scrollY && window.scrollY > 250) {
        header.classList.add('header--fixed');
      } else if (oldScroll > window.scrollY) {
        header.classList.remove('header--fixed');
      }

      if (window.scrollY > 0) {
        header.classList.add('header--sticked');
      } else {
        header.classList.remove('header--sticked');
      }

      oldScroll = window.scrollY;

    }
    window.addEventListener('scroll', onScroll);
  }

  // SLIDER JS
  let glide;
  const sliderEl = document.querySelector('.section-slider');

  // On attend que la section soit visible dans le viewport pour charger GlideJs pour plus de performance

  if (sliderEl) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const getGlide = () => import("./glide.modular.esm.min.js");
          getGlide().then(({
            default: Glide,
            Swipe,
            Breakpoints
          }) => {
            glide = new Glide('.glide', {
              type: 'slider',
              perView: 3.2,
              gap: 28,
              rewind: false,
              bound: true,
              breakpoints: {
                768: {
                  type: 'carousel',
                  perView: 1.2,
                }
              }
            }).mount({
              Swipe, Breakpoints
            })

            // Event pour désactiver les boutons de controle du slider

            prev.querySelector('img').style.opacity = '0.5'

            glide.on('run.end', () => {
              prev.querySelector('img').style.opacity = '1'
              next.querySelector('img').style.opacity = '0.5'
            });
            glide.on('run.start', () => {
              next.querySelector('img').style.opacity = '1'
              prev.querySelector('img').style.opacity = '0.5'
            });
          })
          io.disconnect();
        }
      })
    })

    io.observe(sliderEl);
  }

  const slides = document.querySelector('.glide__slides');

  // Effet de fade des sliders déclenché à 25% au dessus de la ligne de flottaison

  if (slides) {
    const ioSlider = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.querySelectorAll('.glide__slide').forEach((slide, i) => {
            slide.animate(
              [{
                opacity: '1',
                translate: '0'
              }], {
              fill: 'forwards',
              duration: 500,
              ease: 'ease-out',
              delay: i * 50,
            }
            );
          })
          ioSlider.disconnect();
        }
      })
    }, {
      rootMargin: '0% 0% -25% 0%'
    });

    ioSlider.observe(slides);
  }

  // Controle du slider
  const next = document.querySelector('.section-slider__next-btn');
  const prev = document.querySelector('.section-slider__prev-btn');

  if (next) {
    next.addEventListener('click', () => {
      glide.go('>')
    })
  }

  if (prev) {
    prev.addEventListener('click', () => {
      glide.go('<')
    })
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
