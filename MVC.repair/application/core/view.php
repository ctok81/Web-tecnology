<?php

class View
{
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий шаблон для всех страниц;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/
	function generate($content_view, $template_view, $data = null)
	{
		include 'application/views/'.$template_view;
	}
}
