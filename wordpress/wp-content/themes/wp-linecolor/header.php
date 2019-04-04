<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="//www.google-analytics.com/" rel="dns-prefetch">
  <link href="//fonts.googleapis.com" rel="dns-prefetch">
  <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body>

  <div class="ty-tygh  " id="tygh_container">
    <div id="ajax_overlay" class="ty-ajax-overlay"></div>
    <div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
    <div class="cm-notification-container notification-container">
    </div>
    <div class="ty-helper-container" id="tygh_main_container">
      <div class="tygh-header clearfix">
        <div class="container header-grid">
          <div class="row">
            <div class="span4 top-logo-grid">
              <div class=" top-logo">
                <div class="ty-logo-container">
                  <a href="<?php echo home_url(); ?>" title="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/3_bo78-dn.jpg" width="707" height="336" alt="" class="ty-logo-container__image">
                  </a>
                </div>
              </div>
            </div>
            <div class="span12 ">
              <div class="row">
                <div class="span4 ">
                  <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                    <div class="soyuz-header">
                      <div class="s-h1-header">Представительство</div>
                      <p class="s-p-info">Москва, Осташковское шоссе, 59<br> <a href="tel:84952054838"><img class="g-phone-header" src="<?php echo get_template_directory_uri(); ?>/img/s-header-phone.png" alt="phone"><strong>+7 (495) 205-48-38</strong></a><br> <a href="tel:89687047878"><img class="g-mobile-header" src="<?php echo get_template_directory_uri(); ?>/img/s-header-mobile.png" alt=""><strong>+7 (968) 704-78-78</strong></a> <a title="WhatsApp" href="whatsapp://send?phone=+79687047878"><img class="g-whatsup-header" src="<?php echo get_template_directory_uri(); ?>/img/s-header-whatsup.png" alt="WhatsApp"></a> <a title="Viber" href="viber://chat?number=+79687047878"><img src="<?php echo get_template_directory_uri(); ?>/img/s-header-viber.png" alt="Viber"></a></p>
                      <p class="s-p-info"><a href="mailto:info@linecolor.info"><img class="g-mail-header" src="<?php echo get_template_directory_uri(); ?>/img/s-header-mail.png" alt="mail"><strong>info@linecolor.info</strong></a></p>
                    </div>
                  </div>
                </div>
                <div class="span8 ">
                  <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                    <div class="soyuz-header">
                      <div class="s-h1-header">Производство</div>
                      <p class="s-p-info">Белгородская область,<br> Шебекинский район,<br> с. Ржевка</p>
                      <p class="s-p-info"><a href="tel:84722364838"><img class="g-phone-header" src="<?php echo get_template_directory_uri(); ?>/img/s-header-phone.png" alt="phone"><strong>+7 (4722) 36-48-38</strong></a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="span12 ">
                  <div class=" top-menu">

                  <?php /* wpeHeadNav(); */  ?>
                    <ul class="ty-menu__items cm-responsive-menu">
                      <li class="ty-menu__item ty-menu__menu-btn visible-phone">
                        <a class="ty-menu__item-link">
                    <i class="ty-icon-short-list"></i>
                    <span>Меню</span>
                </a>
                      </li>
                      <li class="ty-menu__item ty-menu__item-nodrop ty-menu__item-active">
                        <a href="https://xn--80apaibbplql4m.xn--p1ai/" class="ty-menu__item-link">
                        Главная
                    </a>
                      </li>
                      <li class="ty-menu__item ty-menu__item-nodrop ty-menu-item__electronics">
                        <a href="https://xn--80apaibbplql4m.xn--p1ai/catalog/" class="ty-menu__item-link">
                        Каталог
                    </a>
                      </li>
                      <li class="ty-menu__item ty-menu__item-nodrop">
                        <a href="https://xn--80apaibbplql4m.xn--p1ai/o-kompanii/" class="ty-menu__item-link">
                        О компании
                    </a>
                      </li>
                      <li class="ty-menu__item ty-menu__item-nodrop">
                        <a href="https://xn--80apaibbplql4m.xn--p1ai/oplata-i-dostavka/" class="ty-menu__item-link">
                        Оплата и доставка
                    </a>
                      </li>
                      <li class="ty-menu__item ty-menu__item-nodrop">
                        <a href="https://xn--80apaibbplql4m.xn--p1ai/kontakty/" class="ty-menu__item-link">
                        Контакты
                    </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
