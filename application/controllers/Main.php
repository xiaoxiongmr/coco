<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index.htm');
		// $this->smarty->assign("add",array('a'=>'b','a1'=>'b1','a2'=>'b2'));
		// $this->smarty->display("welcome_message");
	}

	public function header()
	{
		$this->smarty->display("tpl/header.html");
	}

	public function sidebar()
	{
		$this->smarty->display("tpl/sidebar.html");
	}

	public function theme_panel()
	{
		$this->smarty->display("tpl/theme-panel.html");
	}

	public function quick_sidebar()
	{
		$this->smarty->display("tpl/quick-sidebar.html");
	}

	public function footer()
	{
		$this->smarty->display("tpl/footer.html");
	}

	public function dashboard()
	{
		$this->smarty->display("dashboard.html");
	}

	public function file_upload()
	{
		$this->smarty->display("file_upload.html");
	}

	public function ui_bootstrap()
	{
		$this->smarty->display("ui_bootstrap.html");
	}

	public function ui_select()
	{
		$this->smarty->display("ui_select.html");
	}

	public function tree()
	{
		$this->smarty->display("tree.html");
	}

	public function form_tools()
	{
		$this->smarty->display("form_tools.html");
	}

	public function pickers()
	{
		$this->smarty->display("pickers.html");
	}

	public function dropdowns()
	{
		$this->smarty->display("dropdowns.html");
	}

	public function todo()
	{
		$this->smarty->display("todo.html");
	}

	public function managed()
	{
		$this->smarty->display("datatables/managed.html");
	}

	public function ajax()
	{
		$this->smarty->display("datatables/ajax.html");
	}

	public function profile_main()
	{
		$this->smarty->display("profile/main.html");
	}

	public function profile_dashboard()
	{
		$this->smarty->display("profile/dashboard.html");
	}

	public function profile_account()
	{
		$this->smarty->display("profile/account.html");
	}

	public function profile_help()
	{
		$this->smarty->display("profile/help.html");
	}

	public function client_list()
	{
		$this->smarty->display("client/client_list.html");
	}
}
