<?php /* Smarty version 2.6.19, created on 2016-05-21 07:46:34
         compiled from datatables/managed.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#/datatables/advanced.html">Datatables</a>
        </li>
        <li>
            <a href="#/datatables/advanced.html">Advanced Datatables</a>
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
<h3 class="page-title"> Advanced Datatables
    <small>advanced datatable samples</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Managed Table</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Points </th>
                            <th> Joined </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> shuxer </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                            </td>
                            <td> 120 </td>
                            <td class="center"> 12 Jan 2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> looper </td>
                            <td>
                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                            </td>
                            <td> 120 </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> user1wow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> restest </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> foopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> coop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> pppol </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> goop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 15.11.2011 </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> toopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 16.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 9.12.2012 </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> tes21t </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 14.12.2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> fop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 13.11.2010 </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> kop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 17.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> vopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.11.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> wap </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 12.12.2012 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 19.12.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> toop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 17.12.2010 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td> 20 </td>
                            <td class="center"> 15.11.2011 </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light portlet-fit portlet-datatable bordered" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Sample Datatable</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-wrench"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                    <thead>
                        <tr>
                            <th class="table-checkbox">
                                <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /> </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> shuxer </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> looper </td>
                            <td>
                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> user1wow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> restest </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> foopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> coop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> pppol </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <div class="col-md-6 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Table </div>
                <div class="actions">
                    <a href="javascript:;" class="btn btn-default btn-sm">
                        <i class="fa fa-plus"></i> Add </a>
                    <a href="javascript:;" class="btn btn-default btn-sm">
                        <i class="fa fa-print"></i> Print </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                    <thead>
                        <tr>
                            <th class="table-checkbox">
                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" /> </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> shuxer </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> looper </td>
                            <td>
                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> user1wow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> restest </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> foopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> coop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> pppol </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-default"> Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS -->
<script>
    TableDatatablesManaged.init();
</script>
<!-- END MAIN JS -->