<?php /* Smarty version 2.6.19, created on 2016-05-21 07:31:38
         compiled from file_upload.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#/file_upload.html">File Upload</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" dropdown-menu-hover data-delay="1000" data-close-others="true"> Actions
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
<h3 class="page-title"> File Upload
    <small>angularjs file upload</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="note note-success">
    <h3>
        <span class="label label-danger">File upload is disabled in the demo only!</span>
    </h3>
    <p> Angular File Upload is a module for the AngularJS framework. Supports drag-n-drop upload, upload progress, validation filters and a file upload queue. It supports native HTML5 uploads, but degrades to a legacy iframe upload method for older browsers.
        Works with any server side platform which supports standard HTML form uploads. </p>
    <p> For more info please check the
        <a href="https://github.com/nervgh/angular-file-upload">official github page</a>
    </p>
</div>
<div class="row" ng-controller="FileUploadCtrl" nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
    <div class="col-md-4">
        <!-- BEGIN: ACCORDION DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Select files</span>
                    <span class="caption-helper hide"></span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                        <i class="icon-wrench"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div ng-show="uploader.isHTML5">
                    <!-- 3. nv-file-over uploader="link" over-class="className" -->
                    <div class="file-drop-zone margin-bottom-20" nv-file-over="" uploader="uploader" over-class="file-drop-zone-over"> Base drop zone </div>
                    <!-- Example: nv-file-drop="" uploader="{Object}" options="{Object}" filters="{String}" -->
                    <div nv-file-drop="" uploader="uploader" options="{ url: '/foo' }">
                        <div nv-file-over="" uploader="uploader" over-class="file-drop-zone-over" class="file-drop-zone margin-bottom-20"> Another drop zone with its own settings </div>
                    </div>
                </div>
                <!-- Example: nv-file-select="" uploader="{Object}" options="{Object}" filters="{String}" -->Multiple
                <input type="file" nv-file-select="" uploader="uploader" multiple />
                <br/> Single
                <input type="file" nv-file-select="" uploader="uploader" /> </div>
        </div>
        <!-- END: ACCORDION DEMO -->
    </div>
    <div class="col-md-8">
        <!-- BEGIN: ACCORDION DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Upload queue</span>
                    <span class="caption-helper">Queue length: {{ uploader.queue.length }}</span>
                </div>
                <div class="actions">
                    <div class="btn-group">
                        <a class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i> Settings
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#">
                                    <i class="fa fa-pencil"></i> Edit </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-trash-o"></i> Delete </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-ban"></i> Ban </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="i"></i> Make admin </a>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                            <tr class="uppercase">
                                <th width="50%">Name</th>
                                <th ng-show="uploader.isHTML5">Size</th>
                                <th ng-show="uploader.isHTML5">Progress</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in uploader.queue">
                                <td>
                                    <strong>{{ item.file.name }}</strong>
                                </td>
                                <td ng-show="uploader.isHTML5" nowrap>{{ item.file.size/1024/1024|number:2 }} MB</td>
                                <td ng-show="uploader.isHTML5">
                                    <div class="progress progress-sm" style="margin-bottom: 0;">
                                        <div class="progress-bar progress-bar-info" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span ng-show="item.isSuccess" class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                    <span ng-show="item.isCancel" class="text-info">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                    </span>
                                    <span ng-show="item.isError" class="text-danger">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </span>
                                </td>
                                <td nowrap>
                                    <button type="button" class="btn btn-success btn-xs" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">
                                        <span class="glyphicon glyphicon-upload"></span> Upload </button>
                                    <button type="button" class="btn btn-warning btn-xs" ng-click="item.cancel()" ng-disabled="!item.isUploading">
                                        <span class="glyphicon glyphicon-ban-circle"></span> Cancel </button>
                                    <button type="button" class="btn btn-danger btn-xs" ng-click="item.remove()">
                                        <span class="glyphicon glyphicon-trash"></span> Remove </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Queue progress:</p>
                    <div class="progress progress-sm" style="">
                        <div class="progress-bar progress-bar-info" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-s" ng-click="uploader.uploadAll()" ng-disabled="!uploader.getNotUploadedItems().length">
                    <span class="glyphicon glyphicon-upload"></span> Upload all </button>
                <button type="button" class="btn btn-warning btn-s" ng-click="uploader.cancelAll()" ng-disabled="!uploader.isUploading">
                    <span class="glyphicon glyphicon-ban-circle"></span> Cancel all </button>
                <button type="button" class="btn btn-danger btn-s" ng-click="uploader.clearQueue()" ng-disabled="!uploader.queue.length">
                    <span class="glyphicon glyphicon-trash"></span> Remove all </button>
            </div>
        </div>
        <!-- END: ACCORDION DEMO -->
    </div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS-->
<script>
    function FileUploadCtrl($scope, FileUploader)
    {
        var uploader = $scope.uploader = new FileUploader(
        {
            url: '../assets/global/plugins/angularjs/plugins/angular-file-upload/upload.php'
        });
        // FILTERS
        uploader.filters.push(
        {
            name: 'customFilter',
            fn: function(item /*{File|FileLikeObject}*/ , options)
            {
                return this.queue.length < 10;
            }
        });
        // CALLBACKS
        uploader.onWhenAddingFileFailed = function(item /*{File|FileLikeObject}*/ , filter, options)
        {
            console.info('onWhenAddingFileFailed', item, filter, options);
        };
        uploader.onAfterAddingFile = function(fileItem)
        {
            console.info('onAfterAddingFile', fileItem);
        };
        uploader.onAfterAddingAll = function(addedFileItems)
        {
            console.info('onAfterAddingAll', addedFileItems);
        };
        uploader.onBeforeUploadItem = function(item)
        {
            console.info('onBeforeUploadItem', item);
        };
        uploader.onProgressItem = function(fileItem, progress)
        {
            console.info('onProgressItem', fileItem, progress);
        };
        uploader.onProgressAll = function(progress)
        {
            console.info('onProgressAll', progress);
        };
        uploader.onSuccessItem = function(fileItem, response, status, headers)
        {
            console.info('onSuccessItem', fileItem, response, status, headers);
        };
        uploader.onErrorItem = function(fileItem, response, status, headers)
        {
            console.info('onErrorItem', fileItem, response, status, headers);
        };
        uploader.onCancelItem = function(fileItem, response, status, headers)
        {
            console.info('onCancelItem', fileItem, response, status, headers);
        };
        uploader.onCompleteItem = function(fileItem, response, status, headers)
        {
            console.info('onCompleteItem', fileItem, response, status, headers);
        };
        uploader.onCompleteAll = function()
        {
            console.info('onCompleteAll');
        };
        console.info('uploader', uploader);
    };
</script>
<!-- BEGIN MAIN JS -->