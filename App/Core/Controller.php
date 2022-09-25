<?php 

Class Controller{
	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		require 'App/Views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array())
	{
		require 'App/Views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		require 'App/Views/'.$viewName.'.php';
	}
}