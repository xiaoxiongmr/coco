<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_ajax extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
      $this->load->model("client_model");
      $iTotalRecords = $this->client_model->get_client_list_total();
 // var_dump($_REQUEST['order'][0]);
      // var_dump($_REQUEST['order_id']);

      $iDisplayLength = intval($_REQUEST['length']);
  $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
  $iDisplayStart = intval($_REQUEST['start']);
  $sEcho = intval($_REQUEST['draw']);
  
  $records = array();
  $records["data"] = array(); 

  $end = $iDisplayStart + $iDisplayLength;
  $end = $end > $iTotalRecords ? $iTotalRecords : $end;

  $status_list = array(
    array("success" => "Pending"),
    array("info" => "Closed"),
    array("danger" => "On Hold"),
    array("warning" => "Fraud")
  );

  $this->load->model("client_model");
  $responce = $this->client_model->get_client_list($iDisplayStart,$end,$_REQUEST['order'][0]['column'],$_REQUEST['order'][0]['dir']);
  // var_dump($responce[0]['id']);
  
  foreach($responce as $key=>$val){
    $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="1">',
        $val['id'],
        $val['name'],
        $val['phone_number'],
        $val['create_time'],
        '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
      );
  }

  // $records["data"][] = array(
  //     '<input type="checkbox" name="id[]" value="1">',
  //     1,
  //     // '12/09/2013',
  //     // 'Jhon Doe',
  //     // 'Jhon Doe',
  //     // '450.60$',
  //     // rand(1, 10),
  //     // '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
  //     '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
  //  );

  // for($i = $iDisplayStart; $i < $end; $i++) {
  //   $status = $status_list[rand(0, 2)];
  //   $id = ($i + 1);
  //   $records["data"][] = array(
  //     '<input type="checkbox" name="id[]" value="'.$id.'">',
  //     $id,
  //     // '12/09/2013',
  //     // 'Jhon Doe',
  //     // 'Jhon Doe',
  //     // '450.60$',
  //     // rand(1, 10),
  //     // '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
  //     '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
  //  );
  // }

  if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
    $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
  }

  $records["draw"] = $sEcho;
  $records["recordsTotal"] = $iTotalRecords;
  $records["recordsFiltered"] = $iTotalRecords;

  
  echo json_encode($records);

}

}