

<?php get_header(); ?>

<main class="wrapper">

    <!-- mainview -->
    <section class="mainview" id="mainview">
        <div class="mainview__container">
            <div class="mainview__text-wrapper">
                <p class="mainview__text-main">
                    あなた<span class=" mainview__text-main_size_s">の</span>“想い”<span class="mainview__text-main_size_s">を</span><br class="mainview__text-main_br_sp">形<span class="mainview__text-main_size_s">にします</span>
                </p>
                <div class="mainview__text-sub-wrapper">
                    <p class="mainview__text-sub mainview__text-sub_pc mainview__text-sub_animation_hp">HP制作</p>
                    <p class="mainview__text-sub mainview__text-sub_sp mainview__text-sub_animation_hp">ホームページ制作</p>
                    <p class="mainview__text-sub mainview__text-sub_animation_lp">ランディングページ制作</p>
                </div>
                <div class="mainview__contact-link-wrapper">
                    <a href="/contact/" class="mainview__contact-link">無料で相談する</a>
                </div>
            </div>
        </div>
    </section><!-- /.mainview -->

    <!-- service -->
    <section class="service" id="service">
        <div class="service__container">

            <div class="service__heading">
                <!-- section-heading -->
                <h2 class="section-heading fadein">
                    <div class="section-heading__container">
                        <div class="section-heading__text-main">SERVICE</div>
                        <div class="section-heading__text-sub">サービス</div>
                    </div>
                </h2><!-- /.section-heading -->
            </div>

            <div class="service__list">
                <article class="service__list-item fadein service__list-item_fadein">
                    <!-- service-item -->
                    <div class="service-item">
                        <figure class="service-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-pc.png" alt="HP・LP制作" class="service-item__thumbnail-img">
                        </figure>
                        <dl class="service-item__content">
                            <dt class="service-item__content-title">HP・LP制作</dt>
                            <dd class="service-item__content-text">丁寧にヒアリングを行い、お客様のご要望に沿ったWEBサイトを制作いたします。<br>デザインからコーディングまで一括で対応可能です。(デザイン持ち込み可)</dd>
                        </dl>
                    </div><!-- /.service-item -->
                </article>

                <article class="service__list-item fadein">
                    <!-- service-item -->
                    <div class="service-item">
                        <figure class="service-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-wordpress.png" alt="CMS化(WordPress)" class="service-item__thumbnail-img">
                        </figure>
                        <dl class="service-item__content">
                            <dt class="service-item__content-title">CMS化(WordPress)</dt>
                            <dd class="service-item__content-text">お客様ご自身でお知らせやブログ記事等を更新できるWEBサイトを作成します。<br>既存のWEBサイトにブログやお知らせ機能を追加することも可能です。</dd>
                        </dl>
                    </div><!-- /.service-item -->
                </article>

                <article class="service__list-item fadein">
                    <!-- service-item -->
                    <div class="service-item">
                        <figure class="service-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-correction.png" alt="WEBサイト修正" class="service-item__thumbnail-img">
                        </figure>
                        <dl class="service-item__content">
                            <dt class="service-item__content-title">WEBサイト修正</dt>
                            <dd class="service-item__content-text">軽微な修正もお受けいたします。<br>既存のWEBサイトのレスポンシブ化(スマホなどの小さい画面でも見やすいように修正すること)も対応いたします。</dd>
                        </dl>
                    </div><!-- /.service-item -->
                </article>

                <article class="service__list-item fadein">
                    <!-- service-item -->
                    <div class="service-item">
                        <figure class="service-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-maintenance.png" alt="保守・運用" class="service-item__thumbnail-img">
                        </figure>
                        <dl class="service-item__content">
                            <dt class="service-item__content-title">保守・運用</dt>
                            <dd class="service-item__content-text">WEBサイトを問題なく公開し続けるための管理を行います。(レンタルサーバー・SSLサーバー証明書・ドメインの更新、CMSのバージョンアップ等)</dd>
                        </dl>
                    </div><!-- /.service-item -->
                </article>
            </div>
        </div>
    </section>

    <!-- works -->
    <section class="works" id="works">
        <div class="works__container">

            <div class="works__heading">
                <!-- section-heading -->
                <h2 class="section-heading fadein">
                    <div class="section-heading__container">
                        <div class="section-heading__text-main">WORKS</div>
                        <div class="section-heading__text-sub">制作物</div>
                    </div>
                </h2><!-- /.section-heading -->
            </div>

            <div class="works__list">
                <article class="works__list-item fadein">
                    <!-- works-item -->
                    <div class="works-item">
                        <figure class="works-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works-preview-portfolio.png" alt="プレビュー" class="works-item__thumbnail-preview">
                        </figure>
                        <dl class="works-item__content">
                            <dt class="works-item__content-title">ポートフォリオサイト</dt>
                            <dd class="works-item__content-text">
                                <table class="works-item__content-table">
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">担　　当：</th>
                                        <td class="works-item__content-table-data">デザイン / コーディング / CMS化
                                        </td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作期間：</th>
                                        <td class="works-item__content-table-data">10日</td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作概要：</th>
                                        <td class="works-item__content-table-data">全2ページ<br>レスポンシブ対応<br>CMS（WordPress）</td>
                                    </tr>
                                </table>
                            </dd>
                            <dd>
                                <div class="works-item__button">
                                    <a href="/" class="works-item__link">
                                        <span class="works-item__link-text">WEBサイトはこちら</span>
                                        <span class="works-item__link-arrow">>></span>
                                    </a>
                                </div>
                            </dd>
                        </dl>
                    </div><!-- /.works-item -->
                </article>

                <article class="works__list-item fadein">
                    <!-- works-item -->
                    <div class="works-item">
                        <figure class="works-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works-preview-commingsoon.png" alt="プレビュー" class="works-item__thumbnail-preview">
                        </figure>
                        <dl class="works-item__content">
                            <dt class="works-item__content-title">comming soon</dt>
                            <dd class="works-item__content-text">
                                <table class="works-item__content-table">
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">担　　当：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作期間：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作概要：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                </table>
                            </dd>
                            <dd>
                                <div class="works-item__button">
                                    <a href="#" class="works-item__link">
                                        <span class="works-item__link-text">WEBサイトはこちら</span>
                                        <span class="works-item__link-arrow">>></span>
                                    </a>
                                </div>
                            </dd>
                        </dl>
                    </div><!-- /.works-item -->
                </article>

                <article class="works__list-item fadein">
                    <!-- works-item -->
                    <div class="works-item">
                        <figure class="works-item__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works-preview-commingsoon.png" alt="プレビュー" class="works-item__thumbnail-preview">
                        </figure>
                        <dl class="works-item__content">
                            <dt class="works-item__content-title">comming soon</dt>
                            <dd class="works-item__content-text">
                                <table class="works-item__content-table">
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">担　　当：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作期間：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                    <tr class="works-item__content-table-row">
                                        <th class="works-item__content-table-head">制作概要：</th>
                                        <td class="works-item__content-table-data">comming soon</td>
                                    </tr>
                                </table>
                            </dd>
                            <dd>
                                <div class="works-item__button">
                                    <a href="#" class="works-item__link">
                                        <span class="works-item__link-text">WEBサイトはこちら</span>
                                        <span class="works-item__link-arrow">>></span>
                                    </a>
                                </div>
                            </dd>
                        </dl>
                    </div><!-- /.works-item -->
                </article>
            </div>
        </div>
    </section><!-- /.works -->

    <!-- promise -->
    <section class="promise" id="promise">
        <div class="promise__container">

            <div class="promise__heading">
                <!-- section-heading -->
                <h2 class="section-heading fadein">
                    <div class="section-heading__container">
                        <div class="section-heading__text-main">PROMISE</div>
                        <div class="section-heading__text-sub">3つのお約束</div>
                    </div>
                </h2><!-- /.section-heading -->
            </div>

            <div class="promise__list">
                <article class="promise__list-item fadein">
                    <!-- promise-item -->
                    <div class="promise-item">
                        <dl class="promise-item__content">
                            <dt class="promise-item__content-title"><span class="promise-item__content-title_marker">迅速なレスポンス</span></dt>
                            <dd class="promise-item__content-text">
                                ご連絡を確認次第直ぐ（遅くとも24時間以内）に返信することをお約束します。<br>
                                迅速なレスポンスと丁寧な対応で、発注者様を不安にさせないコミュニケーションを心がけております。
                            </dd>
                        </dl>
                    </div><!-- /.promise-item -->
                </article>

                <article class="promise__list-item fadein">
                    <!-- promise-item -->
                    <div class="promise-item">
                        <dl class="promise-item__content">
                            <dt class="promise-item__content-title"><span class="promise-item__content-title_marker">品質の担保</span></dt>
                            <dd class="promise-item__content-text">
                                ガイドラインやBEM設計に則った保守・修正のしやすいコーディングを行います。<br>
                                また、納品前には入念なテストを実施することで品質を担保することをお約束します。
                            </dd>
                        </dl>
                    </div><!-- /.promise-item -->
                </article>

                <article class="promise__list-item fadein">
                    <!-- promise-item -->
                    <div class="promise-item">
                        <dl class="promise-item__content">
                            <dt class="promise-item__content-title"><span class="promise-item__content-title_marker">好奇心を止めない</span></dt>
                            <dd class="promise-item__content-text">
                                日々情報収集を行い、新しいものに興味を示し、スキルの習得を続けていきます。<br>
                                私の持てる技術・情報全てをもって発注者様が抱える課題の解決に向けて全力でサポートすることをお約束します。
                            </dd>
                        </dl>
                    </div><!-- /.promise-item -->
                </article>
            </div>
        </div>
    </section><!-- /.promise -->

    <!-- about -->
    <section class="about" id="about">
        <div class="about__container">

            <div class="about__heading">
                <!-- section-heading -->
                <h2 class="section-heading fadein">
                    <div class="section-heading__container">
                        <div class="section-heading__text-main">ABOUT ME</div>
                        <div class="section-heading__text-sub">制作者について</div>
                    </div>
                </h2><!-- /.section-heading -->
            </div>

            <div class="about__content">

                <!-- profile -->
                <article class="profile fadein">
                    <dl class="rofile__content">
                        <dt class="profile__name-wrapper">
                            <span class="profile__name-wrapper_border">
                            <span class="profile__name">オヤマ モモカ</span>
                            <span class="profile__icon"><a href="https://github.com/mokaseed" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a></span>
                            <span class="profile__icon"><a href="https://twitter.com/moka_engineer" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square"></i></a></span>
                            </span>
                        </dt>
                        <dd class="profile__text">
                            WEBクリエイター<br>
                            東京生まれの東京育ち｜1996年｜<br>
                            ニックネーム：モカ<br>
                            ものづくりと学ぶことが好き<br>
                            <br>
                            丁寧なヒアリングを行い、あなたの想いを形にします。<br>
                            あなたの想い描く理想をお聞かせください。
                        </dd>
                    </dl>
                </article><!-- /.profile -->

                <!-- skill -->
                <article class="skill fadein">
                    <h3 class="skill__title"><span class="skill__title_border">SKILL</span></h3>
                    <ul class="skill__list">
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-html.png" alt="HTML" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">HTML</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-css.png" alt="CSS" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">CSS</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-sass.png" alt="SASS" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">SASS</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-javascript.png" alt="javascript" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">javascript</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-jquery.png" alt="jQuery" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">jQuery</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-wordpress.png" alt="WordPress" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">WordPress</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-mysql.png" alt="MySQL" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">MySQL</p>
                        </li>

                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-github.png" alt="GitHub" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">GitHub</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-illustrator.png" alt="Illustrator" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">Illustrator</p>
                        </li>

                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-photoshop.png" alt="Photoshop" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">Photoshop</p>
                        </li>
                    
                        <li class="skill__list-item">
                            <figure class="skill__thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-adobexd.png" alt="Xd" class="skill__thumbnail-img">
                            </figure>
                            <p class="skill__name">Xd</p>
                        </li>

                        <!-- 空のlist-item -->
                        <li class="skill__list-item"></li>

                    </ul>
                </article> <!-- /.skill -->
            </div>
        </div>
    </section><!-- /.about -->

    <!-- contact -->
    <section class="contact fadein" id="contact">
        <div class="contact__container">

            <div class="contact__heading">
                <!-- section-heading -->
                <h2 class="section-heading">
                    <div class="section-heading__container">
                        <div class="section-heading__text-main">CONTACT</div>
                        <div class="section-heading__text-sub">お問い合わせ</div>
                    </div>
                </h2><!-- /.section-heading -->
            </div>

            <div class="contact__content">
                <p class="contact__text">
                    ご相談、ご依頼、料金の見積もりなど<br>
                    お気軽にお問い合わせください。
                </p>
                <div class="contact__button-wrapper">
                    <a href="/contact/" class="contact__button">無料で相談する >></a>
                </div>
            </div>
        </div>
    </section><!-- /.contact -->
    </main>

<?php get_footer(); ?>
</body>

</html>