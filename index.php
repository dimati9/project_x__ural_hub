<?php
require_once "settings.php";

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Project_X secret name</title>
	<link rel="stylesheet" href="styles/style.css">
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>

</head>
<body>
<div id="main">
	<div id="site">
		<div class="start_screen">
			<h1 class="main_text">Привет, расскажи немного о себе:</h1>
			<h3 class="question">Сколько тебе лет?</h3>
				<form action="" class="screen_one flex-box__wrap">
					<div class="form_radio_btn">
						<input id="radio-1" type="radio" name="age" value="1">
						<label for="radio-1">От 5 до 12</label>
					</div>

					<div class="form_radio_btn">
						<input id="radio-2" type="radio" name="age" value="2">
						<label for="radio-2">От 12 до 17</label>
					</div>

					<div class="form_radio_btn">
						<input id="radio-3" type="radio" name="age" value="3">
						<label for="radio-3">От 17 до 24</label>
					</div>

					<div class="form_radio_btn">
						<input id="radio-4" type="radio" name="age" value="4" >
						<label for="radio-4">От 24+</label>
					</div>
					<input type="submit" class="screen_one_submit" disabled value="Продолжить">
				</form>

			<div class="screen_two" style="display: none">
				<div class="flex_box">
					<div class="element">
						<span>Футбол</span>
					</div>
					<div class="element">
						<span>Биология</span>
					</div>
					<div class="element">
						<span>Точные науки</span>
					</div>
					<div class="element">
						<span>Программирование</span>
					</div>
					<div class="element">
						<span>Дизайн</span>
					</div>
					<div class="element">
						<span>География</span>
					</div>
					<div class="element">
						<span>Музыка</span>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
<script>
    $(function() {
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

</script>
</body>
</html>
