<?php

class PaginationWidget extends CWidget {

	public $page;
	public $view='nav';
	public function init()
	{
	}
	public function run()
	{
		$data['current'] 	= $this->page->currentpage;
		$data['totalpages'] = $this->page->totalpages;
		$data['page'] 		= $this->page;
		$this->render('pagination/'.$this->view, $data);
	}

}