;(function() {
  'use strict';

  let banners = ['img/destaque-home.png', 'img/destaque-home-2.png'];
  let bannerAtual = 0;

  setInterval(() => {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
  }, 4000);

  $('.painel button').on('click', function() {
    let $painel = $(this).parent();

    $painel.toggleClass('expandido');

    $painel.hasClass('expandido')
      ? $(this).text('Mostrar menos')
      : $(this).text('Mostrar mais');
  });
})();
