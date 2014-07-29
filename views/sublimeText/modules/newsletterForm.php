<?php
Yii::app()->getModule("form")->form(BaseApplicationController::FORM_IDENTIFIER)->widgetBlank(array(
	"formOptions"=>array('action'=>$this->id.'/processNewsletterForm'),
	"CMSFormName" => "Ping Us",
	"submitButtonText" => "JOIN",
	"submitButtonHtmlOptions" => array(
		"class" => "btn-3-d"
		),
	"requiredCharacter" => "",
	"attributes" => array(
		"Email" => array(
			"label" => "Your email address",
			"type" => "text",
			"showLabel" => true,
			"rules" => "email",
			),
		),

	));

	?>