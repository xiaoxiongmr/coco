<?php /* Smarty version 2.6.19, created on 2016-05-21 07:46:20
         compiled from dropdowns.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#/dropdowns">jQuery Plugins</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#/dropdowns">Custom Dropdowns</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-sm btn-default dropdown-toggle" dropdown-menu-hover data-toggle="dropdown" data-delay="1000" data-close-others="true"> Actions
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
<h3 class="page-title"> Custom Dropdowns
    <small>select2 & bootstrap select dropdowns</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Select 2 Dropdowns </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="javascript:;" class="reload"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal form-row-sepe">
                    <div class="form-body">
                        <h4 class="form-section">Fixed Width</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Extra Large</label>
                            <div class="col-md-4">
                                <select class="form-control input-xlarge select2me" data-placeholder="Select...">
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Large</label>
                            <div class="col-md-4">
                                <select class="form-control input-large select2me" data-placeholder="Select...">
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-large </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Medium</label>
                            <div class="col-md-4">
                                <select class="form-control input-medium select2me" data-placeholder="Select...">
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-medium </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Small</label>
                            <div class="col-md-4">
                                <select class="form-control input-small select2me" data-placeholder="Select...">
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-small </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Extra Small</label>
                            <div class="col-md-4">
                                <select class="form-control input-xsmall select2me" data-placeholder="Select...">
                                    <option value=""></option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-xsmall </span>
                            </div>
                        </div>
                        <h4 class="form-section">Fluid Width</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Column 4</label>
                            <div class="col-md-4">
                                <select class="form-control select2me" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .col-md-4 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Column 5</label>
                            <div class="col-md-5">
                                <select class="form-control select2me" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .col-md-5 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Column 6</label>
                            <div class="col-md-6">
                                <select class="form-control select2me" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .col-md-6 </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Column 9</label>
                            <div class="col-md-9">
                                <select class="form-control select2me" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .col-md-9 </span>
                            </div>
                        </div>
                        <h4 class="form-section">Bootstrap Input Sizes</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Large Input</label>
                            <div class="col-md-4">
                                <select class="form-control input-large select2me input-lg" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-lg </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Small Input</label>
                            <div class="col-md-4">
                                <select class="form-control input-large select2me input-sm" data-placeholder="Select...">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <span class="help-block"> .input-sm </span>
                            </div>
                        </div>
                        <h4 class="form-section">Advance Samples</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">With Icon</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <select class="form-control select2me" data-placeholder="Select...">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disabled</label>
                            <div class="col-md-4">
                                <select class="form-control select2me" data-placeholder="Select..." disabled>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Multi-Value Select</label>
                            <div class="col-md-4">
                                <select id="select2_sample2" class="form-control select2" multiple>
                                    <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                        <option>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Loading Data</label>
                            <div class="col-md-4">
                                <input type="hidden" id="select2_sample3" class="form-control select2"> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Country List</label>
                            <div class="col-md-4">
                                <select name="" id="select2_sample4" class="form-control select2">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia and Herzegowina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote d'Ivoire</option>
                                    <option value="HR">Croatia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard and Mc Donald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran (Islamic Republic of)</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macau</option>
                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint LUCIA</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SH">St. Helena</option>
                                    <option value="PM">St. Pierre and Miquelon</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands (British)</option>
                                    <option value="VI">Virgin Islands (U.S.)</option>
                                    <option value="WF">Wallis and Futuna Islands</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tags Support List</label>
                            <div class="col-md-4">
                                <input type="hidden" id="select2_sample5" class="form-control select2" value="red, blue"> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Loading Remote Data</label>
                            <div class="col-md-4">
                                <input type="hidden" id="select2_sample6" class="form-control select2"> </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-4">
                                <a class="btn green" href="#" data-target="#form_modal10" data-toggle="modal"> View Select2 in modal
                                    <i class="fa fa-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple">
                                    <i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="form_modal10" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Sample Form in Modal</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Basic</label>
                                        <div class="col-md-8">
                                            <select id="select2_sample_modal_1" class="form-control select2">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Multi-Value Select</label>
                                        <div class="col-md-8">
                                            <select id="select2_sample_modal_2" class="form-control select2" multiple>
                                                <option value="">&nbsp;</option>
                                                <optgroup label="NFC EAST">
                                                    <option>Dallas Cowboys</option>
                                                    <option>New York Giants</option>
                                                    <option>Philadelphia Eagles</option>
                                                    <option>Washington Redskins</option>
                                                </optgroup>
                                                <optgroup label="NFC NORTH">
                                                    <option>Chicago Bears</option>
                                                    <option>Detroit Lions</option>
                                                    <option>Green Bay Packers</option>
                                                    <option>Minnesota Vikings</option>
                                                </optgroup>
                                                <optgroup label="NFC SOUTH">
                                                    <option>Atlanta Falcons</option>
                                                    <option>Carolina Panthers</option>
                                                    <option>New Orleans Saints</option>
                                                    <option>Tampa Bay Buccaneers</option>
                                                </optgroup>
                                                <optgroup label="NFC WEST">
                                                    <option>Arizona Cardinals</option>
                                                    <option>St. Louis Rams</option>
                                                    <option>San Francisco 49ers</option>
                                                    <option>Seattle Seahawks</option>
                                                </optgroup>
                                                <optgroup label="AFC EAST">
                                                    <option>Buffalo Bills</option>
                                                    <option>Miami Dolphins</option>
                                                    <option>New England Patriots</option>
                                                    <option>New York Jets</option>
                                                </optgroup>
                                                <optgroup label="AFC NORTH">
                                                    <option>Baltimore Ravens</option>
                                                    <option>Cincinnati Bengals</option>
                                                    <option>Cleveland Browns</option>
                                                    <option>Pittsburgh Steelers</option>
                                                </optgroup>
                                                <optgroup label="AFC SOUTH">
                                                    <option>Houston Texans</option>
                                                    <option>Indianapolis Colts</option>
                                                    <option>Jacksonville Jaguars</option>
                                                    <option>Tennessee Titans</option>
                                                </optgroup>
                                                <optgroup label="AFC WEST">
                                                    <option>Denver Broncos</option>
                                                    <option>Kansas City Chiefs</option>
                                                    <option>Oakland Raiders</option>
                                                    <option>San Diego Chargers</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Loading Data</label>
                                        <div class="col-md-8">
                                            <input type="hidden" id="select2_sample_modal_3" class="form-control select2"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Country List</label>
                                        <div class="col-md-8">
                                            <select name="" id="select2_sample_modal_4" class="form-control select2">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegowina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint LUCIA</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Tags Support List</label>
                                        <div class="col-md-8">
                                            <input type="hidden" id="select2_sample_modal_5" class="form-control select2" value="red, blue"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Loading Remote Data</label>
                                        <div class="col-md-8">
                                            <input type="hidden" id="select2_sample_modal_6" class="form-control select2"> </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn green" data-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Bootstrap Select </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="index.html" class="form-horizontal form-row-seperated">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Default</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disabled</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" disabled>
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Grouped</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control">
                                    <optgroup label="Picnic">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </optgroup>
                                    <optgroup label="Camping">
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Multiple</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" multiple>
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bootstrap Styles</label>
                            <div class="col-md-9">
                                <div class="margin-bottom-10">
                                    <select class="bs-select form-control input-small" data-style="btn-primary">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="btn-success">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="btn-info">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="btn-warning">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="btn-danger">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Metronic Styles</label>
                            <div class="col-md-9">
                                <div class="margin-bottom-10">
                                    <select class="bs-select form-control input-small" data-style="blue">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="green">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="red">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="yellow">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                    <select class="bs-select form-control input-small" data-style="purple">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Live Search(Countries)</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" data-live-search="true" data-size="8">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia and Herzegowina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote d'Ivoire</option>
                                    <option value="HR">Croatia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard and Mc Donald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran (Islamic Republic of)</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macau</option>
                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint LUCIA</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SH">St. Helena</option>
                                    <option value="PM">St. Pierre and Miquelon</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands (British)</option>
                                    <option value="VI">Virgin Islands (U.S.)</option>
                                    <option value="WF">Wallis and Futuna Islands</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disabled Option</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" multiple>
                                    <option>Mustard</option>
                                    <option disabled>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Option Devider</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                    <option>Mayonnaise</option>
                                    <option data-divider="true"></option>
                                    <option>Barbecue Sauce</option>
                                    <option>Salad Dressing</option>
                                    <option>Tabasco</option>
                                    <option>Salsa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Custom Sizes</label>
                            <div class="col-md-9">
                                <div class="margin-bottom-10">
                                    <select class="bs-select form-control" data-width="125px">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select> 125px </div>
                                <div class="margin-bottom-10">
                                    <select class="bs-select form-control input-medium">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select> .input-medium </div>
                                <div class="margin-bottom-10">
                                    <select class="bs-select form-control" data-width="75%">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select> 75% </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Sub Text</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" data-show-subtext="true">
                                    <option data-subtext="French's">Mustard</option>
                                    <option data-subtext="Heinz">Ketchup</option>
                                    <option data-subtext="Sweet">Relish</option>
                                    <option data-subtext="Miracle Whip">Mayonnaise</option>
                                    <option data-divider="true"></option>
                                    <option data-subtext="Honey">Barbecue Sauce</option>
                                    <option data-subtext="Ranch">Salad Dressing</option>
                                    <option data-subtext="Sweet &amp; Spicy">Tabasco</option>
                                    <option data-subtext="Chunky">Salsa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fontawesome Icons</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" data-show-subtext="true">
                                    <option data-icon="fa-glass icon-success">Mustard</option>
                                    <option data-icon="fa-heart icon-info">Ketchup</option>
                                    <option data-icon="fa-film icon-default">Relish</option>
                                    <option data-icon="fa-home icon-warning">Mayonnaise</option>
                                    <option data-icon="fa-user icon-danger">Barbecue Sauce</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-md-3">HTML content</label>
                            <div class="col-md-4">
                                <select class="bs-select form-control" data-show-subtext="true">
                                    <option data-content="Mustard <span class='label lable-sm label-success'>fresh </span>
										">Mustard</option>
                                    <option data-content="Ketchup <span class='label lable-sm label-default'>tasty </span>
										">Ketchup</option>
                                    <option data-content="Relish <span class='label lable-sm label-warning'>warning </span>
										">Relish</option>
                                    <option data-content="Mayonnaise <span class='label lable-sm label-info'>organic </span>
										">Mayonnaise</option>
                                    <option data-content="Barbecue sauce <span class='label lable-sm label-danger'>hot </span>
										">Barbecue Sauce</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-4">
                                <a class="btn yellow" href="#" data-target="#form_modal11" data-toggle="modal"> View in modal
                                    <i class="fa fa-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">
                                    <i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
                <div id="form_modal11" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Sample Form in Modal</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Default</label>
                                        <div class="col-md-8">
                                            <select class="bs-select form-control">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Disabled</label>
                                        <div class="col-md-8">
                                            <select class="bs-select form-control" disabled>
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Grouped</label>
                                        <div class="col-md-8">
                                            <select class="bs-select form-control">
                                                <optgroup label="Picnic">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </optgroup>
                                                <optgroup label="Camping">
                                                    <option>Tent</option>
                                                    <option>Flashlight</option>
                                                    <option>Toilet Paper</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn green" data-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<!-- END MAIN CONTENT -->
<script>
    ComponentsSelect2.init(); // init todo page
    ComponentsBootstrapSelect.init(); // init todo page
</script>