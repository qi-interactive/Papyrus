<?php $this->beginWidget("widgets.web.slider.Slider", array(
	"options" => array(
		//"transition" => false
		)
		)) ?>

		<?php $pages = Yii::app()->getModule("carousel")->client()->findAllByRegion("HOME") ?>

		<div class="web-slider-wrapper">
			<div class="web-slider-slider">
				<?php foreach ($pages as $page): ?>
					<div class="page">
						<?php if ($page->MediaId): ?>
							<div class="page-image" style="background-image:url(<?= Media::model()->findByPk($page->MediaId)->URL ?>)"></div>
						<?php endif; ?>
						<div class="carousel-text-wrapper"> <h2><?= $page->Strapline ?></h2> </div>
					</div>

				<?php endforeach; ?>
			</div>
			<div id="paging-btns">
				<?php foreach($pages as $page): ?>
					<div class="paging-btn-circle"></div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="web-slider-paging left">
			<img src="/images/navigation/arrow_left_carousel_hover.png" alt="carousel-nav-img" />
		</div>
		<div class="web-slider-paging right">
			<img src="/images/navigation/arrow_right_carousel_hover.png" alt="carousel-nav-img"/>
		</div>

		<?php $this->endWidget(); ?>