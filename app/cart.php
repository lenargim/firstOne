<?php $goods = get_goods(); 
		foreach ($goods as $good) {?>
<div class="cart" id="cart<? echo $good["id"]; ?>">
	<form class="cart__form">
	<div class="cart__title"><h2>Корзина покупок</h2></div>
	<div class="cart__body">
		<div class="row">
			<div class="col-6">Товар: </div>
			<div class="col-6 cart__good" name="buy_good" id="cart__good"><?php echo $good["title"];?></div>
		</div>
		<div class="row row__price">
				<div class="col-6">Цена: </div>
				<div class="col-6"><p class="form__price"><?php echo $good["price"];?><span class="icon-rouble"></span></p></div>
		</div>
	</div>
	<div class="row row__sum">
		<div class="col-6">
			<label for="cart__amount">Количество: </label>
			<input type="number" class="cart__amount" id="cart__amount" required="required" value="1" min="1" max="30" name="buy_amount">
			<p>Сумма: <span name="buy_sum" class="cart__sum" id="cart__sum">
				</span><span class="icon-rouble"></span>
			</p>
		</div>
		<div class="col-6 cart__img">
			<img src="<? echo $good["img1"]; ?>">
		</div>
	</div>	
	<hr>
	<div class="row">
		<div class="col-5"><label for="cart__name">Имя </label></div>
	<input type="text" id="cart__name" class="cart__name" required="required" placeholder="Иванов Иван" name="buy_name">
	</div>
	<div class="row">
		<div class="col-5"><label for="cart__phone">Телефон </label></div>
	<input type="tel" id="cart__phone" class="cart__phone" required="required" placeholder="+7(9XX)-XXX-XX-XX" name="buy_phone">
	</div>
	<div class="row">
		<div class="col-5"><label for="cart__comment">Комментарий</label></div>
	<input type="text" id="cart__comment" class="cart__comment" placeholder="Звоните после обеда" name="buy_comment">
	</div>
	<input type="submit" class="button" value="Купить">
	</form>
</div>
		<?php }
		?>
<div class="thx"><p>Спасибо за покупку!<br></p><span>Мы свяжемся с Вами в течении дня!</span></div>