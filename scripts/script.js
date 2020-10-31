
$(function() {
    $('.element').draggable();
    console.log('hie');
    $('.start_screen').find('label').on('click', function () {
        $(".screen_one_submit").removeAttr('disabled');
    });
    $('.screen_one_submit').on('click', function (e) {
        e.preventDefault();
        $('.main_text').text('Отлично, давай узнаем твои интересы');
        $('.question').text('Двигай блоки влево или вправо');
        $('.screen_one').hide();
        $('.screen_two').show();
    })
});
