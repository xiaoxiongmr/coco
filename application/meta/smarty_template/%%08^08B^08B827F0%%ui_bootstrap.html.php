<?php /* Smarty version 2.6.19, created on 2016-05-21 07:46:02
         compiled from ui_bootstrap.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#/ng_ui_bootstrap.html">AngularJS Features</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#/ng_ui_bootstrap.html">UI Bootstrap</a>
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
<h3 class="page-title"> UI Bootstrap
    <small>bootstrap components written in pure AngularJS</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="note note-success">
    <h3>UI Bootstrap</h3>
    <p> Bootstrap components written in pure AngularJS by the AngularUI Team. For more info please check the
        <a href="http://angular-ui.github.io/bootstrap/">official site</a>
    </p>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN: ACCORDION DEMO -->
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Accordion</span>
                    <span class="caption-helper">ui.bootstrap.accordion</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="AccordionDemoCtrl">
                            <p>
                                <button class="btn btn-success" ng-click="status.open = !status.open">Toggle last panel</button>
                                <button class="btn btn-warning" ng-click="status.isFirstDisabled = ! status.isFirstDisabled">Enable / Disable first panel</button>
                            </p>
                            <label class="checkbox">
                                <input type="checkbox" id="accordion_demo_toggle" checked ng-model="oneAtATime"> Open only one at a time </label>
                            <accordion close-others="oneAtATime">
                                <accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled"> This content is straight in the template. </accordion-group>
                                <accordion-group heading="{{group.title}}" ng-repeat="group in groups"> {{group.content}} </accordion-group>
                                <accordion-group heading="Dynamic Body Content">
                                    <p>The body of the accordion group grows to fit the contents</p>
                                    <button class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
                                    <div ng-repeat="item in items">{{item}}</div>
                                </accordion-group>
                                <accordion-group is-open="status.open">
                                    <accordion-heading> I can have markup, too!
                                        <i class="pull-right fa fa-angle-right" ng-class="{'fa-angle-down': status.open, 'fa-angle-right': !status.open}"></i>
                                    </accordion-heading> This is just some content to illustrate fancy headings. </accordion-group>
                            </accordion>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>The
                            <strong>accordion directive</strong> builds on top of the collapse directive to provide a list of items, with collapsible bodies that are collapsed or expanded by clicking on the item's header.</p>
                        <p>We can control whether expanding an item will cause the other items to close, using the <code>close-others</code> attribute on accordion.</p>
                        <p>The body of each accordion group is transcluded in to the body of the collapsible element.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: ACCORDION DEMO -->
        <!-- BEGIN ALERT DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Alert</span>
                    <span class="caption-helper">ui.bootstrap.alert</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="AlertDemoCtrl">
                            <alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</alert>
                            <button class='btn btn-success' ng-click="addAlert()">Add Alert</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Alert is an AngularJS-version of bootstrap's alert.</p>
                        <p>This directive can be used to generate alerts from the dynamic model data (using the ng-repeat directive);</p>
                        <p>The presence of the "close" attribute determines if a close button is displayed</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ALERT DEMO -->
        <!-- BEGIN BUTTONS DEMO -->
        <div class="portlet light bg-inverse">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Buttons</span>
                    <span class="caption-helper">ui.bootstrap.buttons</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="ButtonsCtrl">
                            <h4>Single toggle</h4> <pre>{{singleModel}}</pre>
                            <button type="button" class="btn btn-success" ng-model="singleModel" btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0"> Single Toggle </button>
                            <h4>Checkbox</h4> <pre>{{checkModel}}</pre>
                            <div class="btn-group">
                                <label class="btn btn-success" ng-model="checkModel.left" btn-checkbox>Left</label>
                                <label class="btn btn-success" ng-model="checkModel.middle" btn-checkbox>Middle</label>
                                <label class="btn btn-success" ng-model="checkModel.right" btn-checkbox>Right</label>
                            </div>
                            <h4>Radio &amp; Uncheckable Radio</h4> <pre>{{radioModel || 'null'}}</pre>
                            <div class="btn-group">
                                <label class="btn btn-warning" ng-model="radioModel" btn-radio="'Left'">Left</label>
                                <label class="btn btn-info" ng-model="radioModel" btn-radio="'Middle'">Middle</label>
                                <label class="btn btn-danger" ng-model="radioModel" btn-radio="'Right'">Right</label>
                            </div>
                            <div class="btn-group">
                                <label class="btn btn-info" ng-model="radioModel" btn-radio="'Left'" uncheckable>Left</label>
                                <label class="btn btn-info" ng-model="radioModel" btn-radio="'Middle'" uncheckable>Middle</label>
                                <label class="btn btn-info" ng-model="radioModel" btn-radio="'Right'" uncheckable>Right</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>There are two directives that can make a group of buttons behave like a set of checkboxes, radio buttons, or a hybrid where radio buttons can be unchecked.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BUTTONS DEMO -->
        <!-- BEGIN TABS DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Tabs</span>
                    <span class="caption-helper">ui.bootstrap.tabs</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="TabsDemoCtrl">
                            <p>Select a tab by setting active binding to true:</p>
                            <p>
                                <button class="btn btn-default btn-sm" ng-click="tabs[0].active = true">Select second tab</button>
                                <button class="btn btn-default btn-sm" ng-click="tabs[1].active = true">Select third tab</button>
                            </p>
                            <p>
                                <button class="btn btn-default btn-sm" ng-click="tabs[1].disabled = ! tabs[1].disabled">Enable / Disable third tab</button>
                            </p>
                            <hr />
                            <tabset>
                                <tab heading="Static title">Static content</tab>
                                <tab ng-repeat="tab in tabs" heading="{{tab.title}}" active="tab.active" disabled="tab.disabled"> {{tab.content}} </tab>
                                <tab select="alertMe()">
                                    <tab-heading>
                                        <i class="glyphicon glyphicon-bell"></i> Alert! </tab-heading> I've got an HTML heading, and a select callback. Pretty cool! </tab>
                            </tabset>
                            <hr />
                            <tabset vertical="true" type="pills">
                                <tab heading="Vertical 1">Vertical content 1</tab>
                                <tab heading="Vertical 2">Vertical content 2</tab>
                            </tabset>
                            <hr />
                            <tabset justified="true">
                                <tab heading="Justified">Justified content</tab>
                                <tab heading="SJ">Short Labeled Justified content</tab>
                                <tab heading="Long Justified">Long Labeled Justified content</tab>
                            </tabset>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>AngularJS version of the tabs directive.</p>
                        <h3>Settings</h3>
                        <h4><code>&lt;tabset&gt;</code></h4>
                        <ul>
                            <li>
                                <p><code>vertical</code>
                                    <em>(Defaults: false)</em> : Whether tabs appear vertically stacked.</p>
                            </li>
                            <li>
                                <p><code>justified</code>
                                    <em>(Defaults: false)</em> : Whether tabs fill the container and have a consistent width.</p>
                            </li>
                            <li>
                                <p><code>type</code>
                                    <em>(Defaults: 'tabs')</em> : Navigation type. Possible values are 'tabs' and 'pills'.</p>
                            </li>
                        </ul>
                        <h4><code>&lt;tab&gt;</code></h4>
                        <ul>
                            <li>
                                <p><code>heading</code> or <code>&lt;tab-heading&gt;</code> : Heading text or HTML markup.</p>
                            </li>
                            <li>
                                <p><code>active</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: false)</em> : Whether tab is currently selected.</p>
                            </li>
                            <li>
                                <p><code>disabled</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: false)</em> : Whether tab is clickable and can be activated.</p>
                            </li>
                            <li>
                                <p><code>select()</code>
                                    <em>(Defaults: null)</em> : An optional expression called when tab is activated.</p>
                            </li>
                            <li>
                                <p><code>deselect()</code>
                                    <em>(Defaults: null)</em> : An optional expression called when tab is deactivated.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TABS DEMO -->
        <!-- BEGIN CAROUSEL DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Carousel</span>
                    <span class="caption-helper">ui.bootstrap.carousel</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="CarouselDemoCtrl">
                            <div style="height: 305px">
                                <carousel interval="myInterval">
                                    <slide ng-repeat="slide in slides" active="slide.active">
                                        <img ng-src="{{slide.image}}" style="margin:auto;">
                                        <div class="carousel-caption">
                                            <h4>Slide {{$index}}</h4>
                                            <p>{{slide.text}}</p>
                                        </div>
                                    </slide>
                                </carousel>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info" ng-click="addSlide()">Add Slide</button>
                                </div>
                                <div class="col-md-6"> Interval, in milliseconds:
                                    <input type="number" class="form-control" ng-model="myInterval">
                                    <br />Enter a negative number to stop the interval. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Carousel creates a carousel similar to bootstrap's image carousel.</p>
                        <p>The carousel also offers support for touchscreen devices in the form of swiping. To enable swiping, load the <code>ngTouch</code> module as a dependency.</p>
                        <p>Use a <code>&lt;carousel&gt;</code> element with <code>&lt;slide&gt;</code> elements inside it. It will automatically cycle through the slides at a given rate, and a current-index variable will be kept in sync with the currently
                            visible slide.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CAROUSEL DEMO -->
        <!-- BEGIN COLLAPSE DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Collapse</span>
                    <span class="caption-helper">ui.bootstrap.collapse</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="CollapseDemoCtrl">
                            <button class="btn btn-danger" ng-click="isCollapsed = !isCollapsed">Toggle collapse</button>
                            <hr>
                            <div collapse="isCollapsed">
                                <div class="well well-lg">Some content</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>AngularJS version of Bootstrap's collapse plugin. Provides a simple way to hide and show an element with a css transition.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COLLAPSE DEMO -->
        <!-- BEGIN DATEPICKER DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Datepicker</span>
                    <span class="caption-helper">ui.bootstrap.datepicker</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="DatepickerDemoCtrl"> <pre>Selected date is: <em>{{dt | date:'fullDate' }}</em></pre>
                            <h4>Inline</h4>
                            <div style="display:inline-block; min-height:290px;">
                                <datepicker ng-model="dt" min-date="minDate" show-weeks="true" class="well well-sm"></datepicker>
                            </div>
                            <h4>Popup</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="input-group">
                                        <input type="text" class="form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" min-date="minDate" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true"
                                        close-text="Close" />
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default" ng-click="open($event)">
                                                <i class="glyphicon glyphicon-calendar"></i>
                                            </button>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Format:</label>
                                    <select class="form-control" ng-model="format" ng-options="f for f in formats">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <hr />
                            <button type="button" class="btn btn-sm btn-info" ng-click="today()">Today</button>
                            <button type="button" class="btn btn-sm btn-default" ng-click="dt = '2009-08-24'">2009-08-24</button>
                            <button type="button" class="btn btn-sm btn-danger" ng-click="clear()">Clear</button>
                            <button type="button" class="btn btn-sm btn-default" ng-click="toggleMin()" tooltip="After today restriction">Min date</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="scroller" style="height: 600px">
                            <p>A clean, flexible, and fully customizable date picker.</p>
                            <p>User can navigate through months and years. The datepicker shows dates that come from other than the main month being displayed. These other dates are also selectable.</p>
                            <p>Everything is formatted using the
                                <a href="http://docs.angularjs.org/api/ng.filter:date">date filter</a> and thus is also localized.</p>
                            <h3>Datepicker Settings</h3>
                            <p>All settings can be provided as attributes in the <code>datepicker</code> or globally configured through the <code>datepickerConfig</code>.</p>
                            <ul>
                                <li>
                                    <p><code>ng-model</code>
                                        <i class="glyphicon glyphicon-eye-open"></i> : The date object.</p>
                                </li>
                                <li>
                                    <p><code>datepicker-mode</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: 'day')</em> : Current mode of the datepicker
                                        <em>(day|month|year)</em>. Can be used to initialize datepicker to specific mode.</p>
                                </li>
                                <li>
                                    <p><code>min-date</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Default: null)</em> : Defines the minimum available date.</p>
                                </li>
                                <li>
                                    <p><code>max-date</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Default: null)</em> : Defines the maximum available date.</p>
                                </li>
                                <li>
                                    <p><code>date-disabled (date, mode)</code>
                                        <em>(Default: null)</em> : An optional expression to disable visible options based on passing date and current mode
                                        <em>(day|month|year)</em>.</p>
                                </li>
                                <li>
                                    <p><code>show-weeks</code>
                                        <em>(Defaults: true)</em> : Whether to display week numbers.</p>
                                </li>
                                <li>
                                    <p><code>starting-day</code>
                                        <em>(Defaults: 0)</em> : Starting day of the week from 0-6 (0=Sunday, ..., 6=Saturday).</p>
                                </li>
                                <li>
                                    <p><code>init-date</code> : The initial date view when no model value is not specified.</p>
                                </li>
                                <li>
                                    <p><code>min-mode</code>
                                        <em>(Defaults: 'day')</em> : Set a lower limit for mode.</p>
                                </li>
                                <li>
                                    <p><code>max-mode</code>
                                        <em>(Defaults: 'year')</em> : Set an upper limit for mode.</p>
                                </li>
                                <li>
                                    <p><code>format-day</code>
                                        <em>(Default: 'dd')</em> : Format of day in month.</p>
                                </li>
                                <li>
                                    <p><code>format-month</code>
                                        <em>(Default: 'MMMM')</em> : Format of month in year.</p>
                                </li>
                                <li>
                                    <p><code>format-year</code>
                                        <em>(Default: 'yyyy')</em> : Format of year in year range.</p>
                                </li>
                                <li>
                                    <p><code>format-day-header</code>
                                        <em>(Default: 'EEE')</em> : Format of day in week header.</p>
                                </li>
                                <li>
                                    <p><code>format-day-title</code>
                                        <em>(Default: 'MMMM yyyy')</em> : Format of title when selecting day.</p>
                                </li>
                                <li>
                                    <p><code>format-month-title</code>
                                        <em>(Default: 'yyyy')</em> : Format of title when selecting month.</p>
                                </li>
                                <li>
                                    <p><code>year-range</code>
                                        <em>(Default: 20)</em> : Number of years displayed in year selection.</p>
                                </li>
                            </ul>
                            <h3>Popup Settings</h3>
                            <p>Options for datepicker can be passed as JSON using the <code>datepicker-options</code> attribute. Specific settings for the <code>datepicker-popup</code>, that can globally configured through the <code>datepickerPopupConfig</code>,
                                are:</p>
                            <ul>
                                <li>
                                    <p><code>datepicker-popup</code>
                                        <em>(Default: 'yyyy-MM-dd')</em> : The format for displayed dates.</p>
                                </li>
                                <li>
                                    <p><code>show-button-bar</code>
                                        <em>(Default: true)</em> : Whether to display a button bar underneath the datepicker.</p>
                                </li>
                                <li>
                                    <p><code>current-text</code>
                                        <em>(Default: 'Today')</em> : The text to display for the current day button.</p>
                                </li>
                                <li>
                                    <p><code>clear-text</code>
                                        <em>(Default: 'Clear')</em> : The text to display for the clear button.</p>
                                </li>
                                <li>
                                    <p><code>close-text</code>
                                        <em>(Default: 'Done')</em> : The text to display for the close button.</p>
                                </li>
                                <li>
                                    <p><code>close-on-date-selection</code>
                                        <em>(Default: true)</em> : Whether to close calendar when a date is chosen.</p>
                                </li>
                                <li>
                                    <p><code>datepicker-append-to-body</code>
                                        <em>(Default: false)</em>: Append the datepicker popup element to <code>body</code>, rather than inserting after <code>datepicker-popup</code>. For global configuration, use <code>datepickerPopupConfig.appendToBody</code>.</p>
                                </li>
                            </ul>
                            <h3>Keyboard Support</h3>
                            <p>Depending on datepicker's current mode, the date may reffer either to day, month or year. Accordingly, the term view reffers either to a month, year or year range.</p>
                            <ul>
                                <li><code>Left</code>: Move focus to the previous date. Will move to the last date of the previous view, if the current date is the first date of a view.</li>
                                <li><code>Right</code>: Move focus to the next date. Will move to the first date of the following view, if the current date is the last date of a view.</li>
                                <li><code>Up</code>: Move focus to the same column of the previous row. Will wrap to the appropriate row in the previous view.</li>
                                <li><code>Down</code>: Move focus to the same column of the following row. Will wrap to the appropriate row in the following view.</li>
                                <li><code>PgUp</code>: Move focus to the same date of the previous view. If that date does not exist, focus is placed on the last date of the month.</li>
                                <li><code>PgDn</code>: Move focus to the same date of the following view. If that date does not exist, focus is placed on the last date of the month.</li>
                                <li><code>Home</code>: Move to the first date of the view.</li>
                                <li><code>End</code>: Move to the last date of the view.</li>
                                <li><code>Enter</code>/<code>Space</code>: Select date.</li>
                                <li><code>Ctrl</code>+<code>Up</code>: Move to an upper mode.</li>
                                <li><code>Ctrl</code>+<code>Down</code>: Move to a lower mode.</li>
                                <li><code>Esc</code>: Will close popup, and move focus to the input.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DATEPICKER DEMO -->
        <!-- BEGIN DATEPICKER DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Timepicker</span>
                    <span class="caption-helper">ui.bootstrap.timepicker</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="TimepickerDemoCtrl">
                            <timepicker ng-model="mytime" ng-change="changed()" hour-step="hstep" minute-step="mstep" show-meridian="ismeridian"></timepicker> <pre class="alert alert-info">Time is: {{mytime | date:'shortTime' }}</pre>
                            <div class="row">
                                <div class="col-xs-6"> Hours step is:
                                    <select class="form-control" ng-model="hstep" ng-options="opt for opt in options.hstep"></select>
                                </div>
                                <div class="col-xs-6"> Minutes step is:
                                    <select class="form-control" ng-model="mstep" ng-options="opt for opt in options.mstep"></select>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-info" ng-click="toggleMode()">12H / 24H</button>
                            <button class="btn btn-default" ng-click="update()">Set to 14:00</button>
                            <button class="btn btn-danger" ng-click="clear()">Clear</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>A lightweight &amp; configurable timepicker directive.</p>
                        <h3>Settings</h3>
                        <p>All settings can be provided as attributes in the <code>&lt;timepicker&gt;</code> or globally configured through the <code>timepickerConfig</code>.</p>
                        <ul>
                            <li>
                                <p><code>ng-model</code>
                                    <i class="glyphicon glyphicon-eye-open"></i> : The Date object that provides the time state.</p>
                            </li>
                            <li>
                                <p><code>hour-step</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: 1)</em> : Number of hours to increase or decrease when using a button.</p>
                            </li>
                            <li>
                                <p><code>minute-step</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: 1)</em> : Number of minutes to increase or decrease when using a button.</p>
                            </li>
                            <li>
                                <p><code>show-meridian</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: true)</em> : Whether to display 12H or 24H mode.</p>
                            </li>
                            <li>
                                <p><code>meridians</code>
                                    <em>(Defaults: null)</em> : Meridian labels based on locale. To override you must supply an array like ['AM', 'PM'].</p>
                            </li>
                            <li>
                                <p><code>readonly-input</code>
                                    <em>(Defaults: false)</em> : Whether user can type inside the hours &amp; minutes input.</p>
                            </li>
                            <li>
                                <p><code>mousewheel</code>
                                    <em>(Defaults: true)</em> : Whether user can scroll inside the hours &amp; minutes input to increase or decrease it's values.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DATEPICKER DEMO -->
        <!-- BEGIN DROPDOWN DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Dropdown</span>
                    <span class="caption-helper">ui.bootstrap.dropdown</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="DropdownDemoCtrl">
                            <!-- Simple dropdown -->
                            <span class="dropdown" on-toggle="toggled(open)">
                                <a href class="dropdown-toggle"> Click me for a dropdown, yo! </a>
                                <ul class="dropdown-menu">
                                    <li ng-repeat="choice in items">
                                        <a href>{{choice}}</a>
                                    </li>
                                </ul>
                            </span>
                            <!-- Single button -->
                            <div class="btn-group" dropdown is-open="status.isopen">
                                <button type="button" class="btn btn-primary dropdown-toggle" ng-disabled="disabled"> Button dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Split button -->
                            <div class="btn-group" dropdown>
                                <button type="button" class="btn btn-danger">Action</button>
                                <button type="button" class="btn btn-danger dropdown-toggle">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button!</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <p>
                                <button type="button" class="btn btn-default btn-sm" ng-click="toggleDropdown($event)">Toggle button dropdown</button>
                                <button type="button" class="btn btn-warning btn-sm" ng-click="disabled = !disabled">Enable/Disable</button>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Dropdown is a simple directive which will toggle a dropdown menu on click or programmatically. You can either use <code>is-open</code> to toggle or add inside a <code>&lt;a dropdown-toggle&gt;</code> element to toggle it when is
                            clicked. There is also the <code>on-toggle(open)</code> optional expression fired when dropdown changes state.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DROPDOWN DEMO -->
        <!-- BEGIN MODAL DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Modal</span>
                    <span class="caption-helper">ui.bootstrap.modal</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="ModalDemoCtrl">
                            <script type="text/ng-template" id="myModalContent.html">
                                <div class="modal-header">
                                    <h3 class="modal-title">I am a modal!</h3>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li ng-repeat="item in items">
                                            <a ng-click="selected.item = item">{{ item }}</a>
                                        </li>
                                    </ul> Selected:
                                    <b>{{ selected.item }}</b>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" ng-click="ok()">OK</button>
                                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                                </div>
                            </script>
                            <button class="btn btn-default" ng-click="open()">Open me!</button>
                            <button class="btn btn-default" ng-click="open('lg')">Large modal</button>
                            <button class="btn btn-default" ng-click="open('sm')">Small modal</button>
                            <div ng-show="selected">Selection from a modal: {{ selected }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="scroller" style="height: 400px">
                            <p><code>$modal</code> is a service to quickly create AngularJS-powered modal windows. Creating custom modals is straightforward: create a partial view, its controller and reference them when using the service.</p>
                            <p>The <code>$modal</code> service has only one method: <code>open(options)</code> where available options are like follows:</p>
                            <ul>
                                <li><code>templateUrl</code> - a path to a template representing modal's content</li>
                                <li><code>template</code> - inline template representing the modal's content</li>
                                <li><code>scope</code> - a scope instance to be used for the modal's content (actually the <code>$modal</code> service is going to create a child scope of a provided scope). Defaults to <code>$rootScope</code></li>
                                <li><code>controller</code> - a controller for a modal instance - it can initialize scope used by modal. Accepts the "controller-as" syntax in the form 'SomeCtrl as myctrl'; can be injected with <code>$modalInstance</code></li>
                                <li><code>controllerAs</code> - an alternative to the controller-as syntax, matching the API of directive definitions. Requires the <code>controller</code> option to be provided as well</li>
                                <li><code>resolve</code> - members that will be resolved and passed to the controller as locals; it is equivalent of the <code>resolve</code> property for AngularJS routes</li>
                                <li><code>backdrop</code> - controls presence of a backdrop. Allowed values: true (default), false (no backdrop), <code>'static'</code> - backdrop is present but modal window is not closed when clicking outside of the modal
                                    window.</li>
                                <li><code>keyboard</code> - indicates whether the dialog should be closable by hitting the ESC key, defaults to true</li>
                                <li><code>backdropClass</code> - additional CSS class(es) to be added to a modal backdrop template</li>
                                <li><code>windowClass</code> - additional CSS class(es) to be added to a modal window template</li>
                                <li><code>windowTemplateUrl</code> - a path to a template overriding modal's window template</li>
                                <li><code>size</code> - optional size of modal window. Allowed values: <code>'sm'</code> (small) or <code>'lg'</code> (large). Requires Bootstrap 3.1.0 or later</li>
                            </ul>
                            <p>The <code>open</code> method returns a modal instance, an object with the following properties:</p>
                            <ul>
                                <li><code>close(result)</code> - a method that can be used to close a modal, passing a result</li>
                                <li><code>dismiss(reason)</code> - a method that can be used to dismiss a modal, passing a reason</li>
                                <li><code>result</code> - a promise that is resolved when a modal is closed and rejected when a modal is dismissed</li>
                                <li><code>opened</code> - a promise that is resolved when a modal gets opened after downloading content's template and resolving all variables</li>
                            </ul>
                            <p>In addition the scope associated with modal's content is augmented with 2 methods:</p>
                            <ul>
                                <li><code>$close(result)</code></li>
                                <li><code>$dismiss(reason)</code></li>
                            </ul>
                            <p>Those methods make it easy to close a modal window without a need to create a dedicated controller.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DROPDOWN DEMO -->
        <!-- BEGIN PAGINATION DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Pagination</span>
                    <span class="caption-helper">ui.bootstrap.pagination</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="PaginationDemoCtrl">
                            <h4>Default</h4>
                            <pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()"></pagination>
                            <pagination boundary-links="true" total-items="totalItems" ng-model="currentPage" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>
                            <pagination direction-links="false" boundary-links="true" total-items="totalItems" ng-model="currentPage"></pagination>
                            <pagination direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages"></pagination> <pre>The selected page no: {{currentPage}}</pre>
                            <button class="btn btn-info" ng-click="setPage(3)">Set current page to: 3</button>
                            <hr />
                            <h4>Pager</h4>
                            <pager total-items="totalItems" ng-model="currentPage"></pager>
                            <hr />
                            <h4>Limit the maximum visible buttons</h4>
                            <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true"></pagination>
                            <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages"></pagination> <pre>Page: {{bigCurrentPage}} / {{numPages}}</pre> </div>
                    </div>
                    <div class="col-md-6">
                        <p>A lightweight pagination directive that is focused on ... providing pagination &amp; will take care of visualising a pagination bar and enable / disable buttons correctly!</p>
                        <h3>Pagination Settings</h3>
                        <p>Settings can be provided as attributes in the <code>&lt;pagination&gt;</code> or globally configured through the <code>paginationConfig</code>.</p>
                        <ul>
                            <li>
                                <p><code>ng-model</code>
                                    <i class="glyphicon glyphicon-eye-open"></i> : Current page number. First page is 1.</p>
                            </li>
                            <li>
                                <p><code>total-items</code>
                                    <i class="glyphicon glyphicon-eye-open"></i> : Total number of items in all pages.</p>
                            </li>
                            <li>
                                <p><code>items-per-page</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: 10)</em> : Maximum number of items per page. A value less than one indicates all items on one page.</p>
                            </li>
                            <li>
                                <p><code>max-size</code>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <em>(Defaults: null)</em> : Limit number for pagination size.</p>
                            </li>
                            <li>
                                <p><code>num-pages</code>
                                    <small class="badge">readonly</small>
                                    <em>(Defaults: angular.noop)</em> : An optional expression assigned the total number of pages to display.</p>
                            </li>
                            <li>
                                <p><code>rotate</code>
                                    <em>(Defaults: true)</em> : Whether to keep current page in the middle of the visible ones.</p>
                            </li>
                            <li>
                                <p><code>direction-links</code>
                                    <em>(Default: true)</em> : Whether to display Previous / Next buttons.</p>
                            </li>
                            <li>
                                <p><code>previous-text</code>
                                    <em>(Default: 'Previous')</em> : Text for Previous button.</p>
                            </li>
                            <li>
                                <p><code>next-text</code>
                                    <em>(Default: 'Next')</em> : Text for Next button.</p>
                            </li>
                            <li>
                                <p><code>boundary-links</code>
                                    <em>(Default: false)</em> : Whether to display First / Last buttons.</p>
                            </li>
                            <li>
                                <p><code>first-text</code>
                                    <em>(Default: 'First')</em> : Text for First button.</p>
                            </li>
                            <li>
                                <p><code>last-text</code>
                                    <em>(Default: 'Last')</em> : Text for Last button.</p>
                            </li>
                        </ul>
                        <h3>Pager Settings</h3>
                        <p>Settings can be provided as attributes in the <code>&lt;pager&gt;</code> or globally configured through the <code>pagerConfig</code>.
                            <br> For <code>ng-model</code>, <code>total-items</code>, <code>items-per-page</code> and <code>num-pages</code> see pagination settings. Other settings are:</p>
                        <ul>
                            <li>
                                <p><code>align</code>
                                    <em>(Default: true)</em> : Whether to align each link to the sides.</p>
                            </li>
                            <li>
                                <p><code>previous-text</code>
                                    <em>(Default: '« Previous')</em> : Text for Previous button.</p>
                            </li>
                            <li>
                                <p><code>next-text</code>
                                    <em>(Default: 'Next »')</em> : Text for Next button.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGINATION DEMO -->
        <!-- BEGIN POPOVER DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Popover</span>
                    <span class="caption-helper">ui.bootstrap.popover</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="PopoverDemoCtrl">
                            <h4>Dynamic</h4>
                            <div class="form-group">
                                <label>Popup Text:</label>
                                <input type="text" ng-model="dynamicPopover" class="form-control"> </div>
                            <div class="form-group">
                                <label>Popup Title:</label>
                                <input type="text" ng-model="dynamicPopoverTitle" class="form-control"> </div>
                            <button popover="{{dynamicPopover}}" popover-title="{{dynamicPopoverTitle}}" class="btn btn-default">Dynamic Popover</button>
                            <hr />
                            <h4>Positional</h4>
                            <button popover-placement="top" popover="On the Top!" class="btn btn-success">Top</button>
                            <button popover-placement="left" popover="On the Left!" class="btn btn-info">Left</button>
                            <button popover-placement="right" popover="On the Right!" class="btn btn-warning">Right</button>
                            <button popover-placement="bottom" popover="On the Bottom!" class="btn btn-danger">Bottom</button>
                            <hr />
                            <h4>Triggers</h4>
                            <p>
                                <button popover="I appeared on mouse enter!" popover-trigger="mouseenter" class="btn red">Mouseenter</button>
                            </p>
                            <input type="text" value="Click me!" popover="I appeared on focus! Click away and I'll vanish..." popover-trigger="focus" class="form-control">
                            <hr />
                            <h4>Other</h4>
                            <button Popover-animation="true" popover="I fade in and out!" class="btn green-haze">fading</button>
                            <button popover="I have a title!" popover-title="The title." class="btn blue-hoki">title</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>A lightweight, extensible directive for fancy popover creation. The popover directive supports multiple placements, optional transition animation, and more.</p>
                        <p>Like the Bootstrap jQuery plugin, the popover
                            <strong>requires</strong> the tooltip module.</p>
                        <p>The popover directives provides several optional attributes to control how it will display:</p>
                        <ul>
                            <li><code>popover-title</code>: A string to display as a fancy title.</li>
                            <li><code>popover-placement</code>: Where to place it? Defaults to "top", but also accepts "bottom", "left", "right".</li>
                            <li><code>popover-animation</code>: Should it fade in and out? Defaults to "true".</li>
                            <li><code>popover-popup-delay</code>: For how long should the user have to have the mouse over the element before the popover shows (in milliseconds)? Defaults to 0.</li>
                            <li><code>popover-trigger</code>: What should trigger the show of the popover? See the <code>tooltip</code> directive for supported values.</li>
                            <li><code>popover-append-to-body</code>: Should the tooltip be appended to <code>$body</code> instead of the parent element?</li>
                        </ul>
                        <p>The popover directives require the <code>$position</code> service.</p>
                        <p>The popover directive also supports various default configurations through the $tooltipProvider. See the
                            <a href="#tooltip">tooltip</a> section for more information.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END POPOVER DEMO -->
        <!-- BEGIN TOOLTIP DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Tooltip</span>
                    <span class="caption-helper">ui.bootstrap.tooltip</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="TooltipDemoCtrl">
                            <div class="form-group">
                                <label>Dynamic Tooltip Text</label>
                                <input type="text" ng-model="dynamicTooltipText" class="form-control"> </div>
                            <div class="form-group">
                                <label>Dynamic Tooltip Popup Text</label>
                                <input type="text" ng-model="dynamicTooltip" class="form-control"> </div>
                            <p> Pellentesque
                                <a href="#" tooltip="{{dynamicTooltip}}">{{dynamicTooltipText}}</a>, sit amet venenatis urna cursus eget nunc scelerisque viverra mauris, in aliquam. Tincidunt lobortis feugiat vivamus at
                                <a href="#" tooltip-placement="left" tooltip="On the Left!">left</a> eget arcu dictum varius duis at consectetur lorem. Vitae elementum curabitur
                                <a href="#" tooltip-placement="right" tooltip="On the Right!">right</a> nunc sed velit dignissim sodales ut eu sem integer vitae. Turpis egestas
                                <a href="#" tooltip-placement="bottom" tooltip="On the Bottom!">bottom</a> pharetra convallis posuere morbi leo urna,
                                <a href="#" tooltip-animation="false" tooltip="I don't fade. :-(">fading</a> at elementum eu, facilisis sed odio morbi quis commodo odio. In cursus
                                <a href="#" tooltip-popup-delay='1000' tooltip='appears with delay'>delayed</a> turpis massa tincidunt dui ut. </p>
                            <p> I can even contain HTML.
                                <a href="#" tooltip-html-unsafe="{{htmlTooltip}}">Check me out!</a>
                            </p>
                            <form role="form">
                                <div class="form-group">
                                    <label>Or use custom triggers, like focus: </label>
                                    <input type="text" value="Click me!" tooltip="See? Now click away..." tooltip-trigger="focus" tooltip-placement="right" class="form-control" /> </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="scroller" style="height: 400px">
                            <p>A lightweight, extensible directive for fancy tooltip creation. The tooltip directive supports multiple placements, optional transition animation, and more.</p>
                            <p>There are two versions of the tooltip: <code>tooltip</code> and <code>tooltip-html-unsafe</code>. The former takes text only and will escape any HTML provided. The latter takes whatever HTML is provided and displays it in a
                                tooltip; it called "unsafe" because the HTML is not sanitized.
                                <em>The user is responsible for ensuring the content is safe to put into the DOM!</em>
                            </p>
                            <p>The tooltip directives provide several optional attributes to control how they will display:</p>
                            <ul>
                                <li><code>tooltip-placement</code>: Where to place it? Defaults to "top", but also accepts "bottom", "left", "right".</li>
                                <li><code>tooltip-animation</code>: Should it fade in and out? Defaults to "true".</li>
                                <li><code>tooltip-popup-delay</code>: For how long should the user have to have the mouse over the element before the tooltip shows (in milliseconds)? Defaults to 0.</li>
                                <li><code>tooltip-trigger</code>: What should trigger a show of the tooltip?</li>
                                <li><code>tooltip-append-to-body</code>: Should the tooltip be appended to <code>$body</code> instead of the parent element?</li>
                            </ul>
                            <p>The tooltip directives require the <code>$position</code> service.</p>
                            <p>
                                <strong>Triggers</strong>
                            </p>
                            <p>The following show triggers are supported out of the box, along with their provided hide triggers:</p>
                            <ul>
                                <li><code>mouseenter</code>: <code>mouseleave</code></li>
                                <li><code>click</code>: <code>click</code></li>
                                <li><code>focus</code>: <code>blur</code></li>
                            </ul>
                            <p>For any non-supported value, the trigger will be used to both show and hide the tooltip.</p>
                            <p>
                                <strong>$tooltipProvider</strong>
                            </p>
                            <p>Through the <code>$tooltipProvider</code>, you can change the way tooltips and popovers behave by default; the attributes above always take precedence. The following methods are available:</p>
                            <ul>
                                <li><code>setTriggers( obj )</code>: Extends the default trigger mappings mentioned above with mappings of your own. E.g. <code>{ 'openTrigger': 'closeTrigger' }</code>.</li>
                                <li>
                                    <p><code>options( obj )</code>: Provide a set of defaults for certain tooltip and popover attributes. Currently supports 'placement', 'animation', 'popupDelay', and <code>appendToBody</code>. Here are the defaults: <code>placement: 'top'</code>,
                                        <code>animation: true</code>, <code>popupDelay: 0</code> & <code>appendToBody: false</code></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOOLTIP DEMO -->
        <!-- BEGIN PROGRESSBAR DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Progressbar</span>
                    <span class="caption-helper">ui.bootstrap.progressbar</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="ProgressDemoCtrl">
                            <h3>Static</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <progressbar value="55"></progressbar>
                                </div>
                                <div class="col-sm-4">
                                    <progressbar class="progress-striped" value="22" type="warning">22%</progressbar>
                                </div>
                                <div class="col-sm-4">
                                    <progressbar class="progress-striped active" max="200" value="166" type="danger">
                                        <i>166 / 200</i>
                                    </progressbar>
                                </div>
                            </div>
                            <hr />
                            <h3>Dynamic
                                <button class="btn btn-sm btn-primary" type="button" ng-click="random()">Randomize</button>
                            </h3>
                            <progressbar max="max" value="dynamic">
                                <span style="white-space:nowrap;">{{dynamic}} / {{max}}</span>
                            </progressbar>
                            <small>
                                <em>No animation</em>
                            </small>
                            <progressbar animate="false" value="dynamic" type="success">
                                <b>{{dynamic}}%</b>
                            </progressbar>
                            <small>
                                <em>Object (changes type based on value)</em>
                            </small>
                            <progressbar class="progress-striped active" value="dynamic" type="{{type}}">{{type}}
                                <i ng-show="showWarning">!!! Watch out !!!</i>
                            </progressbar>
                            <hr />
                            <h3>Stacked
                                <button class="btn btn-sm btn-primary" type="button" ng-click="randomStacked()">Randomize</button>
                            </h3>
                            <progress>
                                <bar ng-repeat="bar in stacked track by $index" value="bar.value" type="{{bar.type}}">
                                    <span ng-hide="bar.value < 5">{{bar.value}}%</span>
                                </bar>
                            </progress>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>A progress bar directive that is focused on providing feedback on the progress of a workflow or action.</p>
                        <p>It supports multiple (stacked) bars into the same <code>&lt;progress&gt;</code> element or a single <code>&lt;progressbar&gt;</code> elemtnt with optional <code>max</code> attribute and transition animations.</p>
                        <h3>Settings</h3>
                        <h4><code>&lt;progressbar&gt;</code></h4>
                        <ul>
                            <li>
                                <p><code>value</code>
                                    <i class="glyphicon glyphicon-eye-open"></i> : The current value of progress completed.</p>
                            </li>
                            <li>
                                <p><code>type</code>
                                    <em>(Default: null)</em> : Style type. Possible values are 'success', 'warning' etc.</p>
                            </li>
                            <li>
                                <p><code>max</code>
                                    <em>(Default: 100)</em> : A number that specifies the total value of bars that is required.</p>
                            </li>
                            <li>
                                <p><code>animate</code>
                                    <em>(Default: true)</em> : Whether bars use transitions to achieve the width change.</p>
                            </li>
                        </ul>
                        <h3>Stacked</h3>
                        <p>Place multiple <code>&lt;bars&gt;</code> into the same <code>&lt;progress&gt;</code> element to stack them. <code>&lt;progress&gt;</code> supports <code>max</code> and <code>animate</code> &amp; <code>&lt;bar&gt;</code> supports
                            <code>value</code> and <code>type</code> attributes.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROGRESSBAR DEMO -->
        <!-- BEGIN RATING DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Typeahead </span>
                    <span class="caption-helper">ui.bootstrap.typeahead</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <script type="text/ng-template" id="customTemplate.html">
                            <a>
                                <img ng-src="http://upload.wikimedia.org/wikipedia/commons/thumb/{{match.model.flag}}" width="16">
                                <span bind-html-unsafe="match.label | typeaheadHighlight:query"></span>
                            </a>
                        </script>
                        <div class='container-fluid' ng-controller="TypeaheadCtrl">
                            <h4>Static arrays</h4> <pre>Model: {{selected | json}}</pre>
                            <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">
                            <h4>Asynchronous results</h4> <pre>Model: {{asyncSelected | json}}</pre>
                            <input type="text" ng-model="asyncSelected" placeholder="Locations loaded via $http" typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"
                            class="form-control">
                            <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                            <h4>Custom templates for results</h4> <pre>Model: {{customSelected | json}}</pre>
                            <input type="text" ng-model="customSelected" placeholder="Custom template" typeahead="state as state.name for state in statesWithFlags | filter:{name:$viewValue}"
                            typeahead-template-url="customTemplate.html" class="form-control"> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="scroller" style="height: 400px">
                            <p>Typeahead is a AngularJS version of
                                <a href="http://getbootstrap.com/2.3.2/javascript.html#typeahead">Bootstrap v2's typeahead plugin</a>. This directive can be used to quickly create elegant typeaheads with any form text input.</p>
                            <p>It is very well integrated into AngularJS as it uses a subset of the
                                <a href="http://docs.angularjs.org/api/ng.directive:select">select directive</a> syntax, which is very flexible. Supported expressions are:</p>
                            <ul>
                                <li>
                                    <em>label</em> for
                                    <em>value</em> in
                                    <em>sourceArray</em>
                                </li>
                                <li>
                                    <em>select</em> as
                                    <em>label</em> for
                                    <em>value</em> in
                                    <em>sourceArray</em>
                                </li>
                            </ul>
                            <p>The <code>sourceArray</code> expression can use a special <code>$viewValue</code> variable that corresponds to the value entered inside the input.</p>
                            <p>This directive works with promises, meaning you can retrieve matches using the <code>$http</code> service with minimal effort.</p>
                            <p>The typeahead directives provide several attributes:</p>
                            <ul>
                                <li>
                                    <p><code>ng-model</code>
                                        <i class="glyphicon glyphicon-eye-open"></i> : Assignable angular expression to data-bind to</p>
                                </li>
                                <li>
                                    <p><code>typeahead</code>
                                        <i class="glyphicon glyphicon-eye-open"></i> : Comprehension Angular expression (see
                                        <a href="http://docs.angularjs.org/api/ng.directive:select">select directive</a>)</p>
                                </li>
                                <li>
                                    <p><code>typeahead-append-to-body</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: false)</em> : Should the typeahead popup be appended to $body instead of the parent element?</p>
                                </li>
                                <li>
                                    <p><code>typeahead-editable</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: true)</em> : Should it restrict model values to the ones selected from the popup only ?</p>
                                </li>
                                <li>
                                    <p><code>typeahead-input-formatter</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: undefined)</em> : Format the ng-model result after selection</p>
                                </li>
                                <li>
                                    <p><code>typeahead-loading</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: angular.noop)</em> : Binding to a variable that indicates if matches are being retrieved asynchronously</p>
                                </li>
                                <li>
                                    <p><code>typeahead-min-length</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: 1)</em> : Minimal no of characters that needs to be entered before typeahead kicks-in</p>
                                </li>
                                <li>
                                    <p><code>typeahead-on-select($item, $model, $label)</code>
                                        <em>(Defaults: null)</em> : A callback executed when a match is selected</p>
                                </li>
                                <li>
                                    <p><code>typeahead-template-url</code>
                                        <i class="glyphicon glyphicon-eye-open"></i> : Set custom item template</p>
                                </li>
                                <li>
                                    <p><code>typeahead-wait-ms</code>
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <em>(Defaults: 0)</em> : Minimal wait time after last character typed before typeahead kicks-in</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END RATING DEMO -->
        <!-- BEGIN RATING DEMO -->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">Rating</span>
                    <span class="caption-helper">ui.bootstrap.rating</span>
                </div>
                <div class="tools">
                    <a href="" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div ng-controller="RatingDemoCtrl">
                            <h4>Default</h4>
                            <rating ng-model="rate" max="max" readonly="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null"></rating>
                            <span class="label" ng-class="{'label-warning': percent<30, 'label-info': percent>=30 && percent<70, 'label-success': percent>=70}" ng-show="overStar && !isReadonly">{{percent}}%</span> <pre style="margin:15px 0;">Rate: <b>{{rate}}</b> - Readonly is: <i>{{isReadonly}}</i> - Hovering over: <b>{{overStar || "none"}}</b></pre>
                            <button class="btn btn-sm btn-danger" ng-click="rate = 0" ng-disabled="isReadonly">Clear</button>
                            <button class="btn btn-sm default" ng-click="isReadonly = ! isReadonly">Toggle Readonly</button>
                            <hr />
                            <h4>Custom icons</h4>
                            <div ng-init="x = 5">
                                <rating ng-model="x" max="15" state-on="'glyphicon-ok-sign'" state-off="'glyphicon-ok-circle'"></rating>
                                <b>(
                                    <i>Rate:</i> {{x}})</b>
                            </div>
                            <div ng-init="y = 2">
                                <rating ng-model="y" rating-states="ratingStates"></rating>
                                <b>(
                                    <i>Rate:</i> {{y}})</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Rating directive that will take care of visualising a star rating bar.</p>
                        <h3>Settings</h3>
                        <h4><code>&lt;rating&gt;</code></h4>
                        <ul>
                            <li>
                                <p><code>ng-model</code>
                                    <i class="glyphicon glyphicon-eye-open"></i> : The current rate.</p>
                            </li>
                            <li>
                                <p><code>max</code>
                                    <em>(Defaults: 5)</em> : Changes the number of icons.</p>
                            </li>
                            <li>
                                <p><code>readonly</code>
                                    <i class="icon-eye-open"></i>
                                    <em>(Defaults: false)</em> : Prevent user's interaction.</p>
                            </li>
                            <li>
                                <p><code>on-hover(value)</code> : An optional expression called when user's mouse is over a particular icon.</p>
                            </li>
                            <li>
                                <p><code>on-leave()</code> : An optional expression called when user's mouse leaves the control altogether.</p>
                            </li>
                            <li>
                                <p><code>state-on</code>
                                    <em>(Defaults: null)</em> : A variable used in template to specify the state (class, src, etc) for selected icons.</p>
                            </li>
                            <li>
                                <p><code>state-off</code>
                                    <em>(Defaults: null)</em> : A variable used in template to specify the state for unselected icons.</p>
                            </li>
                            <li>
                                <p><code>rating-states</code>
                                    <em>(Defaults: null)</em> : An array of objects defining properties for all icons. In default template, <code>stateOn</code> &amp; <code>stateOff</code> property is used to specify the icon's class.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END RATING DEMO -->
    </div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS -->
<script>
    // Accordion demo controller
    function AccordionDemoCtrl($scope)
    {
        $scope.oneAtATime = true;
        $scope.groups = [
        {
            title: 'Dynamic Group Header - 1',
            content: 'Dynamic Group Body - 1'
        },
        {
            title: 'Dynamic Group Header - 2',
            content: 'Dynamic Group Body - 2'
        }];
        $scope.items = ['Item 1', 'Item 2', 'Item 3'];
        $scope.addItem = function()
        {
            var newItemNo = $scope.items.length + 1;
            $scope.items.push('Item ' + newItemNo);
        };
        $scope.status = {
            isFirstOpen: true,
            isFirstDisabled: false
        };
    };
    // Alert demo controller
    function AlertDemoCtrl($scope)
    {
        $scope.alerts = [
        {
            type: 'danger',
            msg: 'Oh snap! Change a few things up and try submitting again.'
        },
        {
            type: 'success',
            msg: 'Well done! You successfully read this important alert message.'
        }];
        $scope.addAlert = function()
        {
            $scope.alerts.push(
            {
                msg: 'Another alert!'
            });
        };
        $scope.closeAlert = function(index)
        {
            $scope.alerts.splice(index, 1);
        };
    };
    // Buttons demo controller
    function ButtonsCtrl($scope)
    {
        $scope.singleModel = 1;
        $scope.radioModel = 'Middle';
        $scope.checkModel = {
            left: false,
            middle: true,
            right: false
        };
    };
    // Tabs demo controller
    function TabsDemoCtrl($scope)
    {
        $scope.tabs = [
        {
            title: 'Dynamic Title 1',
            content: 'Dynamic content 1'
        },
        {
            title: 'Dynamic Title 2',
            content: 'Dynamic content 2',
            disabled: true
        }];
        /*
        $scope.alertMe = function() {
          setTimeout(function() {
            alert('You\'ve selected the alert tab!');
          });
        };
        */
    }
    // Carousel demo controller
    function CarouselDemoCtrl($scope)
    {
        $scope.myInterval = 5000;
        var slides = $scope.slides = [];
        $scope.addSlide = function()
        {
            var newWidth = 500 + slides.length;
            slides.push(
            {
                image: 'http://placekitten.com/' + newWidth + '/300',
                text: ['More', 'Extra', 'Lots of', 'Surplus'][slides.length % 4] + ' ' + ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
            });
        };
        for (var i = 0; i < 4; i++)
        {
            $scope.addSlide();
        }
    };
    // Collapse demo controller
    function CollapseDemoCtrl($scope)
    {
        $scope.isCollapsed = false;
    }
    // Datepicker demo controller
    function DatepickerDemoCtrl($scope)
    {
        $scope.today = function()
        {
            $scope.dt = new Date();
        };
        $scope.today();
        $scope.clear = function()
        {
            $scope.dt = null;
        };
        // Disable weekend selection
        $scope.disabled = function(date, mode)
        {
            return (mode === 'day' && (date.getDay() === 0 || date.getDay() === 6));
        };
        $scope.toggleMin = function()
        {
            $scope.minDate = $scope.minDate ? null : new Date();
        };
        $scope.toggleMin();
        $scope.open = function($event)
        {
            $event.preventDefault();
            $event.stopPropagation();
            $scope.opened = true;
        };
        $scope.dateOptions = {
            formatYear: 'yy',
            startingDay: 1
        };
        $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
        $scope.format = $scope.formats[0];
    }
    // Timepicker demo controller
    function TimepickerDemoCtrl($scope)
    {
        $scope.mytime = new Date();
        $scope.hstep = 1;
        $scope.mstep = 15;
        $scope.options = {
            hstep: [1, 2, 3],
            mstep: [1, 5, 10, 15, 25, 30]
        };
        $scope.ismeridian = true;
        $scope.toggleMode = function()
        {
            $scope.ismeridian = !$scope.ismeridian;
        };
        $scope.update = function()
        {
            var d = new Date();
            d.setHours(14);
            d.setMinutes(0);
            $scope.mytime = d;
        };
        $scope.changed = function()
        {
            console.log('Time changed to: ' + $scope.mytime);
        };
        $scope.clear = function()
        {
            $scope.mytime = null;
        };
    }
    // Dropdown demo controller
    function DropdownDemoCtrl($scope)
    {
        $scope.items = ['The first choice!', 'And another choice for you.', 'but wait! A third!'];
        $scope.status = {
            isopen: false
        };
        $scope.toggled = function(open)
        {
            console.log('Dropdown is now: ', open);
        };
        $scope.toggleDropdown = function($event)
        {
            $event.preventDefault();
            $event.stopPropagation();
            $scope.status.isopen = !$scope.status.isopen;
        };
    }
    // Modal demo controllers
    function ModalDemoCtrl($scope, $modal, $log)
    {
        $scope.items = ['item1', 'item2', 'item3'];
        $scope.open = function(size)
        {
            var modalInstance = $modal.open(
            {
                templateUrl: 'myModalContent.html',
                controller: 'ModalInstanceCtrl',
                size: size,
                resolve:
                {
                    items: function()
                    {
                        return $scope.items;
                    }
                }
            });
            modalInstance.result.then(function(selectedItem)
            {
                $scope.selected = selectedItem;
            }, function()
            {
                $log.info('Modal dismissed at: ' + new Date());
            });
        };
    }

    function ModalInstanceCtrl($scope, $modalInstance, items)
    {
        $scope.items = items;
        $scope.selected = {
            item: $scope.items[0]
        };
        $scope.ok = function()
        {
            $modalInstance.close($scope.selected.item);
        };
        $scope.cancel = function()
        {
            $modalInstance.dismiss('cancel');
        };
    }
    // Pagination demo controller
    function PaginationDemoCtrl($scope)
    {
        $scope.totalItems = 64;
        $scope.currentPage = 4;
        $scope.setPage = function(pageNo)
        {
            $scope.currentPage = pageNo;
        };
        $scope.pageChanged = function()
        {
            console.log('Page changed to: ' + $scope.currentPage);
        };
        $scope.maxSize = 5;
        $scope.bigTotalItems = 175;
        $scope.bigCurrentPage = 1;
    }
    // Popover demo controller
    function PopoverDemoCtrl($scope)
    {
        $scope.dynamicPopover = 'Hello, World!';
        $scope.dynamicPopoverTitle = 'Title';
    }
    // Tooltip demo controller
    function TooltipDemoCtrl($scope)
    {
        $scope.dynamicTooltip = 'Hello, World!';
        $scope.dynamicTooltipText = 'dynamic';
        $scope.htmlTooltip = 'I\'ve been made <b>bold</b>!';
    }
    // Progressbar demo controller
    function ProgressDemoCtrl($scope)
    {
        $scope.max = 200;
        $scope.random = function()
        {
            var value = Math.floor((Math.random() * 100) + 1);
            var type;
            if (value < 25)
            {
                type = 'success';
            }
            else if (value < 50)
            {
                type = 'info';
            }
            else if (value < 75)
            {
                type = 'warning';
            }
            else
            {
                type = 'danger';
            }
            $scope.showWarning = (type === 'danger' || type === 'warning');
            $scope.dynamic = value;
            $scope.type = type;
        };
        $scope.random();
        $scope.randomStacked = function()
        {
            $scope.stacked = [];
            var types = ['success', 'info', 'warning', 'danger'];
            for (var i = 0, n = Math.floor((Math.random() * 4) + 1); i < n; i++)
            {
                var index = Math.floor((Math.random() * 4));
                $scope.stacked.push(
                {
                    value: Math.floor((Math.random() * 30) + 1),
                    type: types[index]
                });
            }
        };
        $scope.randomStacked();
    }
    // Typeahead demo controller
    function TypeaheadCtrl($scope)
    {
        $scope.selected = undefined;
        $scope.states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
        // Any function returning a promise object can be used to load values asynchronously
        $scope.getLocation = function(val)
        {
            return $http.get('http://maps.googleapis.com/maps/api/geocode/json',
            {
                params:
                {
                    address: val,
                    sensor: false
                }
            }).then(function(response)
            {
                return response.data.results.map(function(item)
                {
                    return item.formatted_address;
                });
            });
        };
        $scope.statesWithFlags = [
        {
            'name': 'Alabama',
            'flag': '5/5c/Flag_of_Alabama.svg/45px-Flag_of_Alabama.svg.png'
        },
        {
            'name': 'Alaska',
            'flag': 'e/e6/Flag_of_Alaska.svg/43px-Flag_of_Alaska.svg.png'
        },
        {
            'name': 'Arizona',
            'flag': '9/9d/Flag_of_Arizona.svg/45px-Flag_of_Arizona.svg.png'
        },
        {
            'name': 'Arkansas',
            'flag': '9/9d/Flag_of_Arkansas.svg/45px-Flag_of_Arkansas.svg.png'
        },
        {
            'name': 'California',
            'flag': '0/01/Flag_of_California.svg/45px-Flag_of_California.svg.png'
        },
        {
            'name': 'Colorado',
            'flag': '4/46/Flag_of_Colorado.svg/45px-Flag_of_Colorado.svg.png'
        },
        {
            'name': 'Connecticut',
            'flag': '9/96/Flag_of_Connecticut.svg/39px-Flag_of_Connecticut.svg.png'
        },
        {
            'name': 'Delaware',
            'flag': 'c/c6/Flag_of_Delaware.svg/45px-Flag_of_Delaware.svg.png'
        },
        {
            'name': 'Florida',
            'flag': 'f/f7/Flag_of_Florida.svg/45px-Flag_of_Florida.svg.png'
        },
        {
            'name': 'Georgia',
            'flag': '5/54/Flag_of_Georgia_%28U.S._state%29.svg/46px-Flag_of_Georgia_%28U.S._state%29.svg.png'
        },
        {
            'name': 'Hawaii',
            'flag': 'e/ef/Flag_of_Hawaii.svg/46px-Flag_of_Hawaii.svg.png'
        },
        {
            'name': 'Idaho',
            'flag': 'a/a4/Flag_of_Idaho.svg/38px-Flag_of_Idaho.svg.png'
        },
        {
            'name': 'Illinois',
            'flag': '0/01/Flag_of_Illinois.svg/46px-Flag_of_Illinois.svg.png'
        },
        {
            'name': 'Indiana',
            'flag': 'a/ac/Flag_of_Indiana.svg/45px-Flag_of_Indiana.svg.png'
        },
        {
            'name': 'Iowa',
            'flag': 'a/aa/Flag_of_Iowa.svg/44px-Flag_of_Iowa.svg.png'
        },
        {
            'name': 'Kansas',
            'flag': 'd/da/Flag_of_Kansas.svg/46px-Flag_of_Kansas.svg.png'
        },
        {
            'name': 'Kentucky',
            'flag': '8/8d/Flag_of_Kentucky.svg/46px-Flag_of_Kentucky.svg.png'
        },
        {
            'name': 'Louisiana',
            'flag': 'e/e0/Flag_of_Louisiana.svg/46px-Flag_of_Louisiana.svg.png'
        },
        {
            'name': 'Maine',
            'flag': '3/35/Flag_of_Maine.svg/45px-Flag_of_Maine.svg.png'
        },
        {
            'name': 'Maryland',
            'flag': 'a/a0/Flag_of_Maryland.svg/45px-Flag_of_Maryland.svg.png'
        },
        {
            'name': 'Massachusetts',
            'flag': 'f/f2/Flag_of_Massachusetts.svg/46px-Flag_of_Massachusetts.svg.png'
        },
        {
            'name': 'Michigan',
            'flag': 'b/b5/Flag_of_Michigan.svg/45px-Flag_of_Michigan.svg.png'
        },
        {
            'name': 'Minnesota',
            'flag': 'b/b9/Flag_of_Minnesota.svg/46px-Flag_of_Minnesota.svg.png'
        },
        {
            'name': 'Mississippi',
            'flag': '4/42/Flag_of_Mississippi.svg/45px-Flag_of_Mississippi.svg.png'
        },
        {
            'name': 'Missouri',
            'flag': '5/5a/Flag_of_Missouri.svg/46px-Flag_of_Missouri.svg.png'
        },
        {
            'name': 'Montana',
            'flag': 'c/cb/Flag_of_Montana.svg/45px-Flag_of_Montana.svg.png'
        },
        {
            'name': 'Nebraska',
            'flag': '4/4d/Flag_of_Nebraska.svg/46px-Flag_of_Nebraska.svg.png'
        },
        {
            'name': 'Nevada',
            'flag': 'f/f1/Flag_of_Nevada.svg/45px-Flag_of_Nevada.svg.png'
        },
        {
            'name': 'New Hampshire',
            'flag': '2/28/Flag_of_New_Hampshire.svg/45px-Flag_of_New_Hampshire.svg.png'
        },
        {
            'name': 'New Jersey',
            'flag': '9/92/Flag_of_New_Jersey.svg/45px-Flag_of_New_Jersey.svg.png'
        },
        {
            'name': 'New Mexico',
            'flag': 'c/c3/Flag_of_New_Mexico.svg/45px-Flag_of_New_Mexico.svg.png'
        },
        {
            'name': 'New York',
            'flag': '1/1a/Flag_of_New_York.svg/46px-Flag_of_New_York.svg.png'
        },
        {
            'name': 'North Carolina',
            'flag': 'b/bb/Flag_of_North_Carolina.svg/45px-Flag_of_North_Carolina.svg.png'
        },
        {
            'name': 'North Dakota',
            'flag': 'e/ee/Flag_of_North_Dakota.svg/38px-Flag_of_North_Dakota.svg.png'
        },
        {
            'name': 'Ohio',
            'flag': '4/4c/Flag_of_Ohio.svg/46px-Flag_of_Ohio.svg.png'
        },
        {
            'name': 'Oklahoma',
            'flag': '6/6e/Flag_of_Oklahoma.svg/45px-Flag_of_Oklahoma.svg.png'
        },
        {
            'name': 'Oregon',
            'flag': 'b/b9/Flag_of_Oregon.svg/46px-Flag_of_Oregon.svg.png'
        },
        {
            'name': 'Pennsylvania',
            'flag': 'f/f7/Flag_of_Pennsylvania.svg/45px-Flag_of_Pennsylvania.svg.png'
        },
        {
            'name': 'Rhode Island',
            'flag': 'f/f3/Flag_of_Rhode_Island.svg/32px-Flag_of_Rhode_Island.svg.png'
        },
        {
            'name': 'South Carolina',
            'flag': '6/69/Flag_of_South_Carolina.svg/45px-Flag_of_South_Carolina.svg.png'
        },
        {
            'name': 'South Dakota',
            'flag': '1/1a/Flag_of_South_Dakota.svg/46px-Flag_of_South_Dakota.svg.png'
        },
        {
            'name': 'Tennessee',
            'flag': '9/9e/Flag_of_Tennessee.svg/46px-Flag_of_Tennessee.svg.png'
        },
        {
            'name': 'Texas',
            'flag': 'f/f7/Flag_of_Texas.svg/45px-Flag_of_Texas.svg.png'
        },
        {
            'name': 'Utah',
            'flag': 'f/f6/Flag_of_Utah.svg/45px-Flag_of_Utah.svg.png'
        },
        {
            'name': 'Vermont',
            'flag': '4/49/Flag_of_Vermont.svg/46px-Flag_of_Vermont.svg.png'
        },
        {
            'name': 'Virginia',
            'flag': '4/47/Flag_of_Virginia.svg/44px-Flag_of_Virginia.svg.png'
        },
        {
            'name': 'Washington',
            'flag': '5/54/Flag_of_Washington.svg/46px-Flag_of_Washington.svg.png'
        },
        {
            'name': 'West Virginia',
            'flag': '2/22/Flag_of_West_Virginia.svg/46px-Flag_of_West_Virginia.svg.png'
        },
        {
            'name': 'Wisconsin',
            'flag': '2/22/Flag_of_Wisconsin.svg/45px-Flag_of_Wisconsin.svg.png'
        },
        {
            'name': 'Wyoming',
            'flag': 'b/bc/Flag_of_Wyoming.svg/43px-Flag_of_Wyoming.svg.png'
        }];
    }
    // Rating demo controller
    function RatingDemoCtrl($scope)
    {
        $scope.rate = 7;
        $scope.max = 10;
        $scope.isReadonly = false;
        $scope.hoveringOver = function(value)
        {
            $scope.overStar = value;
            $scope.percent = 100 * (value / $scope.max);
        };
        $scope.ratingStates = [
        {
            stateOn: 'glyphicon-ok-sign',
            stateOff: 'glyphicon-ok-circle'
        },
        {
            stateOn: 'glyphicon-star',
            stateOff: 'glyphicon-star-empty'
        },
        {
            stateOn: 'glyphicon-heart',
            stateOff: 'glyphicon-ban-circle'
        },
        {
            stateOn: 'glyphicon-heart'
        },
        {
            stateOff: 'glyphicon-off'
        }];
    }
</script>
<!-- END MAIN JS -->