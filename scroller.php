		<?php foreach ($list as $item) : ?>
			<li class="accordion">
				<?php if ($params->get('link_titles') == 1) : ?>
					<h4>
					<a class="mod-articles-category-title anhor__mod-menu <?php echo $item->active; ?> js-anchor" href="#<?php  echo $item->id; ?>">
						<?php echo $item->title; ?>
					</a>
					<span class="arrow"></span>
					</h4>
<script>
jQuery( window ).scroll(function() {

		// Указываем позицию экрана в переменную posTop
		var posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

		// Задаем условие при котором элемент должен сдвигаться с места 


		if (posTop < 1674 ) {

			// Добавляем класс, который делает элемент position - absolute
			jQuery(".category-modulecat_list").removeClass("cat_list--fixed");
			jQuery(".category-modulecat_list").addClass("cat_list--absolute");

			// Указываем позицию элемента + небольшой отступ
			var posDiv = posTop + 25;

			// Добавляем к cat_list--absolute значение top 
			jQuery(".category-modulecat_list").css({'top' : posDiv });
		}

		// Делаем position fixed в случае если экран сверху 
		if (posTop < 200 ) {
			jQuery(".category-modulecat_list").removeClass("cat_list--absolute");
			jQuery(".category-modulecat_list").addClass("cat_list--fixed");
			jQuery(".category-modulecat_list").css({'top' : 'inherit' });
		}

		if (posTop = 200 ) {
			jQuery(".category-modulecat_list").removeClass("cat_list--fixed");
			jQuery(".category-modulecat_list").addClass("cat_list--absolute");
			jQuery(".category-modulecat_list").css({'top' : "300" });

		}

		if (posTop > 1574 ) {
			jQuery(".category-modulecat_list").css({'top' : "1574" });
		}
});

</script>
