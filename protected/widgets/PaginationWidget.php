<<<<<<< HEAD
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

=======
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

>>>>>>> f363c04641c6bd97f2e0092b96b1a4740b20ca46
}