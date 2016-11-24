<?php /* Smarty version 2.6.19, created on 2016-11-24 04:12:59
         compiled from client/client_list.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#/datatables/advanced.html">客户中心</a>
        </li>
        <li>
            <a href="#/datatables/advanced.html">客户管理</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-user"></i> New User </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-present"></i> New Event
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-basket"></i> New order </a>
                </li>
                <li class="divider"> </li>
                <li>
                    <a href="#">
                        <i class="icon-flag"></i> Pending Orders
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-users"></i> Pending Users
                        <span class="badge badge-warning">12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<h3 class="page-title"> 客户列表
    <!-- <small>ajax datatable samples</small> -->
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="row">
    <div class="col-md-12">
 <!--        <div class="note note-info">
            <p> NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only. </p>
        </div> -->
        <!-- Begin: life time stats -->
        <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
                <div class="caption">
   <!--                  客户名称
                    <input type="text" class="" name="order_customer_name">
                    客户电话
                    <input type="text" class="" name="order_customer_name">
                    <div class="btn-group" style="margin-top:-5px">
                    <button class="btn btn-sm yellow filter-submit margin-bottom">
                    <i class="fa fa-search"></i> 查询</button>
                    </div> -->
  <!--               <form role="form">
                                        <div class="row">
                               
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="客户名称"> </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="客户电话"> </div>

                                        </div>

                    
                   
                                    </form>    -->         

                                       <form class="form-inline" role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="输入客户名称"> </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="客户电话"> </div>
           
                                        <button class="btn btn-sm yellow filter-submit margin-bottom">
                    <i class="fa fa-search"></i> 查询</button>
                                    </form>       
                </div>
                <div class="actions">  
              
                    <a href="#" class="btn btn-outline green">
                        <i class="fa fa-plus"></i>
                        <span class="hidden-480"> 新建客户 </span>
                    </a>
                    <div class="btn-group">
                        <a class="btn red btn-outline" href="#" data-toggle="dropdown">
                            <i class="fa fa-share"></i>
                            <span class="hidden-480"> 工具 </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#"> 删除客户 </a>
                            </li>
                            <li>
                                <a href="#"> 导出Excel </a>
                            </li>
                            <li>
                                <a href="#"> 导出CSV </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#"> 打印 </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <div class="table-actions-wrapper">
                        <span> </span>
                        <select class="table-group-action-input form-control input-inline input-small input-sm">
                            <option value="">Select...</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Cancel">Hold</option>
                            <option value="Cancel">On Hold</option>
                            <option value="Close">Close</option>
                        </select>
                        <button class="btn btn-sm btn-outline green table-group-action-submit">
                            <i class="fa fa-check"></i> Submit</button>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="datatable_ajax">
                        <thead>
                            <tr role="row" class="heading">
                                <th width="2%">
                                    <input type="checkbox" class="group-checkable"> </th>
                                <th width="5%"> 客户ID </th>
                                <th width="5%"> 客户名称 </th>
                                <th width="15%"> 客户电话 </th>
                                <th width="15%"> 创建时间 </th>
                             <!--    <th width="10%"> Ship&nbsp;To </th>
                                <th width="10%"> Price </th>
                                <th width="10%"> Amount </th>
                                <th width="10%"> Status </th> -->
                                <th width="10%"> 操作 </th>
                            </tr>
                            
                        </thead>
                        <tbody> </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS -->
<script>
    TableAjax.init();
</script>
<!-- END MAIN JS