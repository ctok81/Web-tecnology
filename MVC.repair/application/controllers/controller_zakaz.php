<?php

class Controller_Zakaz extends Controller
{

	function __construct()
	{
		$this->model = new model_zakaz();
		$this->view = new View();
	}

	function action_index()
	{
		if(!empty($_POST['phone']) & ctype_digit($_POST['phone']))
		{
			$this->model->set_data($_POST['phone'], $_POST['fio'], $_POST['chto']);
		}
		$data = $this->model->get_data();
		$this->view->generate('zakaz_view.php', 'template_view.php', $data);
	}

}
