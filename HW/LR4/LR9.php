<?php echo
<<<END
      <p>9. Спросите <b>возраст</b> пользователя. Если форма была <b>отправлена</b> и
      <b>введена</b> возраст, то выведите его на экран, а форму уберите. Если же форма
      не была отправлена (это будет при <b>первом</b> заходе на страницу) -
      просто покажите ее.</p>
      <p><i>Примечание: (см. слайд 8) isset — Определяет, была ли установлена
      переменная значением отличным от NULL</i></n></p>
END;

	if (!isset($_REQUEST['age'])) {
?>
		<form action="" method="GET">
			<input type="text" name="age">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст: '.$age;
	}
?>