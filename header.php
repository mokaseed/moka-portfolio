<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=700, user-scalable=yes,">
<title>moka portfolio site</title>
<meta name=”description“ content=“【ホームページ制作・LP制作お任せください】WEBクリエイターmokaのポートフォリオサイト“ />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<!-- fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- nav-header -->
<header class="nav-header">
    <div class="nav-header__container">
        <h1 class="nav-header__title">
            <?php if ( is_home() || is_front_page() ) : ?>
                <a href="#mainview">
            <?php else : ?>
                <a href="/">
            <?php endif; ?>
                <span class="nav-header__title-main">moka</span>
                <span class="nav-header__title-sub">portfolio site</span>
            </a>
        </h1>
        <ul class="nav-header__menu">
            <li class="nav-header__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#service" class="nav-header__link">サービス</a>
                <?php else : ?>
                    <a href="/#service" class="nav-header__link">サービス</a>
                <?php endif; ?>
            </li>
            <li class="nav-header__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#works" class="nav-header__link">制作物</a>
                <?php else : ?>
                    <a href="/#works" class="nav-header__link">制作物</a>
                <?php endif; ?>
            </li>
            <li class="nav-header__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#promise" class="nav-header__link">お約束</a>
                <?php else : ?>
                    <a href="/#promise" class="nav-header__link">お約束</a>
                <?php endif; ?>
            </li>
            <li class="nav-header__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#about" class="nav-header__link">制作者について</a>
                <?php else : ?>
                    <a href="/#about" class="nav-header__link">制作者について</a>
                <?php endif; ?>
            </li>
            <li class="nav-header__menu-item">
                <a href="/contact/" class="nav-header__link nav-header__link_contact">お問い合わせ</a>
            </li>
        </ul>
        <button class="nav-header__toggle nav-drawer-trigger">
            <div class="nav-header__toggle-line"></div>
            <div class="nav-header__toggle-line"></div>
            <div class="nav-header__toggle-line"></div>
        </button>
    </div>
</header><!-- /.nav-header -->

<!-- nav-drawer -->
<nav class="nav-drawer">
    <div class="nav-drawer__container">
        <div class="nav-drawer__menu-button">
            <button class="nav-drawer__button-close nav-drawer-trigger">
                <div class="nav-drawer__button-close-line"></div>
                <div class="nav-drawer__button-close-line"></div>
            </button>
        </div>
        <ul class="nav-drawer__menu">
            <li class="nav-drawer__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#service" class="nav-drawer__link">
                <?php else : ?>
                    <a href="/#service" class="nav-drawer__link">
                <?php endif; ?>
                    <span class="nav-drawer__link-text-en">SERVICE</span>
                    <span class="nav-drawer__link-text-ja">サービス</span>
                </a>
            </li>
            <li class="nav-drawer__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#works" class="nav-drawer__link">
                <?php else : ?>
                    <a href="/#works" class="nav-drawer__link">
                <?php endif; ?>
                    <span class="nav-drawer__link-text-en">WORKS</span>
                    <span class="nav-drawer__link-text-ja">制作物</span>
                </a>
            </li>
            <li class="nav-drawer__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#promise" class="nav-drawer__link">
                <?php else : ?>
                    <a href="/#promise" class="nav-drawer__link">
                <?php endif; ?>
                    <span class="nav-drawer__link-text-en">PROMISE
                    </span>
                    <span class="nav-drawer__link-text-ja">3つのお約束</span>
                </a>
            </li>
            <li class="nav-drawer__menu-item">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <a href="#about" class="nav-drawer__link">
                <?php else : ?>
                    <a href="/#about" class="nav-drawer__link">
                <?php endif; ?>
                    <span class="nav-drawer__link-text-en">ABOUT ME</span>
                    <span class="nav-drawer__link-text-ja">制作者について</span>
                </a>
            </li>
            <li class="nav-drawer__menu-item">
                <a href="/contact/" class="nav-drawer__link">
                    <span class="nav-drawer__link-text-en">CONTACT</span>
                    <span class="nav-drawer__link-text-ja">お問い合わせ</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="nav-drawer__overlay"></div>
</nav><!-- /.nav-drawer -->