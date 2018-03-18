$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut(2500);
    $preloader.delay(2500).fadeOut('slow');
});