$(function(){

    // ページ内リンク移動のアニメーション
    $('a[href^="#"]').on('click', function () {
        // クリックしたaタグがドロワーメニューの場合はドロワーメニューを閉じる
        if($('.nav-drawer__container').hasClass('open')){
            $('.nav-drawer').fadeOut();
            $('.nav-drawer-trigger').removeClass('active');
            $('.nav-drawer__container').removeClass('open');
            $('.nav-drawer__overlay').removeClass('open');
        }
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop: position}, 500, "swing");
        return false;
    });

    //スクロールに応じたスライドイン
    $(window).on('scroll resize', function() {
        var setHeight = 50;
        var wHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        $('.fadein').each(function() {
            var targetPosition = $(this).offset().top;
            if(scrollTop > targetPosition - wHeight + setHeight) {
                $(this).addClass('active');
            }
        })
    });


    // ドロワーメニューの開閉
    $('.nav-drawer-trigger').on('click',function(){
        if($(this).hasClass('active')){
            $('.nav-drawer-trigger').removeClass('active');
            $('.nav-drawer').fadeOut();
            $('.nav-drawer__container').removeClass('open');
            $('.nav-drawer__overlay').removeClass('open');
        } else {
            $('.nav-drawer-trigger').addClass('active');
            $('.nav-drawer').fadeIn();
            $('.nav-drawer__container').addClass('open');
            $('.nav-drawer__overlay').addClass('open');
        }
    });
    
    // ドロワーメニュー外をクリックしたらドロワーメニューを閉じる
    $('.nav-drawer__overlay').on('click',function(){
        if($(this).hasClass('open')){
            $('.nav-drawer').fadeOut();
            $('.nav-drawer-trigger').removeClass('active');
            $('.nav-drawer__container').removeClass('open');
            $('.nav-drawer__overlay').removeClass('open');
        }
    });


});
