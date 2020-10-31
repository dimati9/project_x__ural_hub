$(function() {
    var left;
    var left2;
    var counts = 5;
    $('.element').draggable({
        start: function() {
            left = $(this).offset().left;
            console.log("Left:",$(this).offset().left);
        },
        drag: function() {

        },
        stop: function() {
            left2 = $(this).offset().left;
            if(left2 < left-20) {
                counts--;
                $(this).css('background', '#d26f6f');
                // $(this).hide('slow');
                $(this).animate({
                    left: "-1000px",
                    width: 0,
                    opacity: 0,
                }, 500, function() {
                   $(this).remove();
                });
            }   else if(left2 > left+20) {
                counts--;
                $(this).css('background', '#4dd23a');
                $(this).css('transformOrigin', '100% 0');
                $(this).css('-webkitTransformOrigin', '100% 0');
                $(this).toggle({ origin: ["top", "right"],effect: "scale", direction: "horizontal" });
                $(this).animate({
                    opacity: 0,
                }, 500, function() {
                    $(this).remove();
                });
            }
            console.log("Left stop:",$('.element').offset().left);
            if(counts <= 0) {
                $(".button_thee").removeAttr('disabled');
                $('.need_more').hide();
            }   else {
                $('.need_more').text('Ещё '+counts);
            }

        }
    },
        { axis: "x", distance: "10" });
    console.log('hie');
    $('.start_screen').find('label').on('click', function () {
        $(".screen_one_submit").removeAttr('disabled');
    });

    $('.button_thee').on('click', function () {
        $('.start_screen').hide();
        $('.info__final_screen').show();
    })

    $('.button_info_final').on('click', function () {
        $('.info__final_screen').hide();
        $('.block').show();
    })



    $('.button_first').on('click', function () {
        $('.info_screen').hide('fast');
        $('.start_screen').show('slow');
    })

    $('.screen_one_submit').on('click', function (e) {
        e.preventDefault();
        $('.main_text_1').text('Отлично, давай узнаем твои интересы');
        $('.main_text_2').hide();
        $('.sub_text').hide();
        $('.screen_one').hide();
        $('.screen_two').show();
    })
});
