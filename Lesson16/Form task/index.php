<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Lesson 16. Forms + PHP</title>
	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<div class="wrap">
		<h1>Урок "Формы": теги и их атрибуты.</h1>
		<h2>Расскажите немного о себе...</h2>
		<p>Попробуйте создать аналогичную форму. Для целей демонстрации вполне подойдут и вымышленные.</p>
		<form action="" method="post">
			<fieldset class="info-breaf">
				<legend>Коротко о себе</legend>
				<ul>
					<li>
						<label for="first-name">Имя:</label>
						<input id="first-name" class="width250" type="text" name="first_name" />
					</li>
					<li>
						<label for="second-name">Фамилия:</label>
						<input id="second-name" class="width250" type="text" name="second_name" />
					</li>
					<li>
						Пол:
						<input id="male" type="radio" name="radio_gender" checked="checked" value="мужской" /><label for="male">мужской</label>
						<input id="female" type="radio" name="radio_gender" value="женский" /><label for="female">женский</label>
					</li>
					<li>
						<label for="age">Возраст:</label>
						<input id="age" class="width40" type="text" name="age"/> лет
					</li>
				</ul>
			</fieldset>
			<fieldset class="info-more">
				<legend>Подробнее о себе</legend>
				<ul>
					<li class="margin0 minimal">
						<ul>
							<li>
								<input id="young-man" type="radio" name="radio_gender_more" value="Молодой человек" checked="checked"/>
								<label for="young-man">Молодой человек</label>
							</li>
							<li>
								<input id="woman" type="radio" name="radio_gender_more" value="Девушка"/>
								<label for="woman">Девушка</label>
							</li>
						</ul>
					</li>
					<li class="minimal">
						<ul>
							<li>
								<input id="birthday" type="text" name="birthday" />
								<label for="birthday">Дата рождения</label>
							</li>
							<li>
								<input id="relationship" type="text" name="relationship" />
								<label for="relationship">Семейное положение</label>
							</li>
							<li>
								<input id="soc-status" type="text" name="soc_status" />
								<label for="soc-status">Социальный статус</label>
							</li>
							<li>
								<input id="location" type="text" name="location" />
								<label for="location">Местожительство</label>
							</li>
						</ul>
					</li>
					<li>
						<span class="weigth-bold">Что вы обычно делаете на выходных:</span>
						<ul>
							<li>
								<input id="sleep" type="checkbox" name="chbox_weekends_doing[]" value="Сплю" />
								<label for="sleep">Сплю</label>
							</li>
							<li>
								<input id="friends" type="checkbox" name="chbox_weekends_doing[]" value="Гуляю с друзьями" />
								<label for="friends">Гуляю с друзьями</label>
							</li>
							<li>
								<input id="fishing" type="checkbox" name="chbox_weekends_doing[]" value="Хожу на рыбалку" />
								<label for="fishing">Хожу на рыбалку</label>
							</li>
							<li>
								<input id="games" type="checkbox" name="chbox_weekends_doing[]" value="Играю в игры"/>
								<label for="games">Играю в игры</label>
							</li>
						</ul>
					</li>
					<li>
						<label class="weigth-bold block" for="select4">Рассказать о формах в книге, посвященной HTML:</label>
						<select id="select4" name="select4">
							<option>Site frequency:</option> 
							<option>Semantics</option>
							<option>XHTML 1.0</option>
							<option>HTML5</option>
						</select>
					</li>
					<li>
						<span class="weigth-bold">Сколько книг вы прочитали за свою жизнь:</span>
						<ul>
							<li>
								<input id="n0-10" type="radio" name="radio_booksnumber" value="0-10" />
								<label for="n0-10">0-10</label>
							</li>
							<li>
								<input id="n11-20" type="radio" name="radio_booksnumber" value="11-20" />
								<label for="n11-20">11-20</label>
							</li>
							<li>
								<input id="n21-50" type="radio" name="radio_booksnumber" value="21-50" />
								<label for="n21-50">21-50</label>
							</li>
							<li>
								<input id="n50" type="radio" name="radio_booksnumber" value="50" />
								<label for="n50">50+</label>
							</li>
						</ul>
					</li>
					<li>
						<label class="weigth-bold block" for="text-area">Ваши комментарии:</label>
						<textarea id="text-area" name="text_area" rows="10" cols="45"></textarea>
					</li>
					<li>
						<select size="3" name="hero[]">
							<option value="first_position">Первая позиция</option>
							<option selected="selected" value="second_position">Вторая позиция</option>
							<option value="third_position">Третья позиция</option>
						</select>
					</li>
				</ul>
			</fieldset>
			<fieldset class="info-final">
				<legend>И в заключении</legend>
				<ul>
					<li>
						<input class="width250 placeholder" type="text" placeholder="Это поле было введено до вас" />
					</li>
					<li>
						<label class="weigth-bold block" for="email-field">Email:</label>
						<input id="email-field" class="width250" type="text" name="input_email" />
					</li>
					<li>
						<span class="weigth-bold block">Хотите подписаться на самую модную рассылку спама?</span>
						<span class="italic">Выберите категории</span>
						<ul>
							<li>
								<input id="equip" type="checkbox" name="chbox_spam[]" value="Оборудование" /><label for="equip">Обрудование</label>
							</li>
							<li>
								<input id="cooking" type="checkbox" name="chbox_spam[]" value="Как приготовить обеды" /><label for="cooking">Как приготовить обеды</label>
							</li>
							<li>
								<input id="million" type="checkbox" name="chbox_spam[]" value="Заработай миллион долларов за 2 дня!" /><label for="million">Заработай миллион за два дня!</label>
							</li>
						</ul>
					</li>
					<li>
						<span class="weigth-bold">На сколько сложная задача:</span>
						<ul> 
							<li>
								<input id="easy" type="radio" name="radio_gender_more" value="Совсем нет" /><label for="easy">Совсем нет</label>
							</li>
							<li>
								<input id="so-so" type="radio" name="radio_gender_more" value="Так себе" /><label for="so-so">Так себе</label>
							</li>
							<li>
								<input id="hard" type="radio" name="radio_gender_more" value="Ели справились" /><label for="hard">Ели справились</label>
							</li>
						</ul>
					</li>
				</ul>
			</fieldset>
			<div><input id="submit" type="submit" value="Отправить" /></div>
		</form>
		<section class="input-info">
			<div class="info-breaf">
				<h3>Коротко о себе</h3>
				<?php 
				$name = $_POST['first_name'];
				$surname = $_POST['second_name'];
				$gender = $_POST['radio_gender'];
				$age = $_POST['age'];

				echo "<span>" . "Здравствуйте!" . "</span>";
				echo "<span>" . "Я " . $name . " " . $surname . "</span>";
				echo "<span>" . "Мне " . $age . " лет " . "</span>"; 
				echo "<span>" . "Пол: " . $gender . "</span>";
				?>
			</div>
			<div class="info-more">
				<h3>Подробнее о себе</h3>
				<?php 
				$gender = $_POST['radio_gender_more'];
				$birthday = $_POST['birthday'];
				$relationship = $_POST['relationship'];
				$soc_status = $_POST['soc_status'];
				$location = $_POST['location'];
				$chbox_weekend = $_POST['chbox_weekends_doing'];
				$books = $_POST['select4'];
				$radio_booksnumber = $_POST['radio_booksnumber'];
				$text_area = $_POST['text_area'];

				echo "<span>" . "Ну что же, давайте начнем!" . "</span>";
				echo "<span>" . "День рождения у меня " . $birthday . "</span>";
				echo "<span>" . "Я " . mb_strtolower($relationship, 'UTF-8') . ". " . $soc_status . "</span>";
				echo "<span>" . "Местожительство у меня в " . $location . "</span>";
				echo "<span>" . "На выходных очень часто ";

			    for($i = 0; $i < count($chbox_weekend); $i++)
			    {
			    	if ($i == count($chbox_weekend)-1) {
						echo(mb_strtolower($chbox_weekend[$i], 'UTF-8') . " ");
			    	} else {
						echo(mb_strtolower($chbox_weekend[$i], 'UTF-8') . ", ");
			    	}
			    }
			    echo "</span>\n";

			    echo "<span>" . "А сейчас давайте поговорим о книгах." . "</span>";
			    echo "<span>" . "Возьмем, например, книги о HTML. Я прочитал " . $books . "</span>";
			    echo "<span>" . "В общем количестве было прочтено " . $radio_booksnumber. " изданий" . "</span>";
			    echo "<span>" . "Ну вы же понимаете, что прочитанную книгу никак нельзя оставить без комментария, отзыва. Вот один из них:" . "</span>";
			    echo "<q>" . $text_area . "</q>"; 

				?>
			</div>
			<div class="info-final">
				<h3>И в заключении</h3>
				<?php 
					$email = $_POST['input_email'];
					$chbox_spam = $_POST['chbox_spam'];
					$radio_gender_more = $_POST['radio_gender_more'];

					echo "<span>" . "Ну и как же можно заполнить форму и остаться без спам-рассылки – никак :)" . "</span>";
					echo "<span>" . "Вот вам email для спама: " . $email . "</span>";
					echo "<span>" . "Ок! С выбором категории тоже определились: ";
				    for($i = 0; $i < count($chbox_spam); $i++)
				    {
				    	if ($i == count($chbox_spam)-1) {
							echo("\"" . mb_strtolower($chbox_spam[$i], 'UTF-8') . "\" ");
				    	} else {
							echo("\"" . mb_strtolower($chbox_spam[$i], 'UTF-8') . "\", ");
				    	}
				    }
				    echo "</span>";
				    echo "<span>" . "Ну вот и все. Анкетирование завершено. Сложность выполнения было отмечено как " . mb_strtolower($radio_gender_more, 'UTF-8') . "</span>";
				?>
			</div>
		</section>
	</div>
</body>
</html>