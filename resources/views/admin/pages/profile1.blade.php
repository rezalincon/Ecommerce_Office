@extends('admin.layout.master')
@section('title', 'User Profile')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Billings</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences">Preferences</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div class="tab-pane active" id="Settings">

                    <div class="body">
                        <h6>Profile Photo</h6>
                        <div class="media photo">
                            <div class="media-left m-r-15">
                                <img src="../assets/img/user.png" class="user-photo media-object" alt="User">
                            </div>
                            <div class="media-body">
                                <p>Upload your photo.
                                    <br> <em>Image should be at least 140px x 140px</em></p>
                                <button type="button" class="btn btn-default-dark" id="btn-upload-photo">Upload Photo</button>
                                <input type="file" id="filePhoto" class="sr-only">
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <h6>Basic Information</h6>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="male" type="radio" checked>
                                            <span><i></i>Male</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="female" type="radio">
                                            <span><i></i>Female</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                                        </div>
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="http://">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address Line 1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address Line 2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State/Province">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">-- Select Country --</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
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
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
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
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
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
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
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
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
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
                                        <option value="PS">Palestinian Territory, Occupied</option>
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
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
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
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <h6>Account Data</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="alizeethomas" disabled placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" value="alizee.info@yourdomain.com" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <h6>Change Password</h6>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm New Password">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button class="btn btn-default">Cancel</button>
                    </div>

                    <div class="body">
                        <h6>General Information</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>--Select Language</option>
                                        <option value="en_US" lang="en">English (United States)</option>
                                        <option value="ar" lang="ar">العربية</option>
                                        <option value="ary" lang="ar">العربية المغربية</option>
                                        <option value="az" lang="az">Azərbaycan dili</option>
                                        <option value="azb" lang="az">گؤنئی آذربایجان</option>
                                        <option value="bel" lang="be">Беларуская мова</option>
                                        <option value="bg_BG" lang="bg">Български</option>
                                        <option value="bn_BD" lang="bn">বাংলা</option>
                                        <option value="bs_BA" lang="bs">Bosanski</option>
                                        <option value="ca" lang="ca">Català</option>
                                        <option value="ceb" lang="ceb">Cebuano</option>
                                        <option value="cs_CZ" lang="cs">Čeština‎</option>
                                        <option value="cy" lang="cy">Cymraeg</option>
                                        <option value="da_DK" lang="da">Dansk</option>
                                        <option value="de_CH_informal" lang="de">Deutsch (Schweiz, Du)</option>
                                        <option value="de_CH" lang="de">Deutsch (Schweiz)</option>
                                        <option value="de_DE" lang="de">Deutsch</option>
                                        <option value="de_DE_formal" lang="de">Deutsch (Sie)</option>
                                        <option value="el" lang="el">Ελληνικά</option>
                                        <option value="en_GB" lang="en">English (UK)</option>
                                        <option value="en_AU" lang="en">English (Australia)</option>
                                        <option value="en_ZA" lang="en">English (South Africa)</option>
                                        <option value="en_NZ" lang="en">English (New Zealand)</option>
                                        <option value="en_CA" lang="en">English (Canada)</option>
                                        <option value="eo" lang="eo">Esperanto</option>
                                        <option value="es_CL" lang="es">Español de Chile</option>
                                        <option value="es_MX" lang="es">Español de México</option>
                                        <option value="es_GT" lang="es">Español de Guatemala</option>
                                        <option value="es_AR" lang="es">Español de Argentina</option>
                                        <option value="es_ES" lang="es">Español</option>
                                        <option value="es_PE" lang="es">Español de Perú</option>
                                        <option value="es_CO" lang="es">Español de Colombia</option>
                                        <option value="es_VE" lang="es">Español de Venezuela</option>
                                        <option value="et" lang="et">Eesti</option>
                                        <option value="eu" lang="eu">Euskara</option>
                                        <option value="fa_IR" lang="fa">فارسی</option>
                                        <option value="fi" lang="fi">Suomi</option>
                                        <option value="fr_FR" lang="fr">Français</option>
                                        <option value="fr_CA" lang="fr">Français du Canada</option>
                                        <option value="fr_BE" lang="fr">Français de Belgique</option>
                                        <option value="gd" lang="gd">Gàidhlig</option>
                                        <option value="gl_ES" lang="gl">Galego</option>
                                        <option value="haz" lang="haz">هزاره گی</option>
                                        <option value="he_IL" lang="he">עִבְרִית</option>
                                        <option value="hi_IN" lang="hi">हिन्दी</option>
                                        <option value="hr" lang="hr">Hrvatski</option>
                                        <option value="hu_HU" lang="hu">Magyar</option>
                                        <option value="hy" lang="hy">Հայերեն</option>
                                        <option value="id_ID" lang="id">Bahasa Indonesia</option>
                                        <option value="is_IS" lang="is">Íslenska</option>
                                        <option value="it_IT" lang="it">Italiano</option>
                                        <option value="ja" lang="ja">日本語</option>
                                        <option value="ka_GE" lang="ka">ქართული</option>
                                        <option value="ko_KR" lang="ko">한국어</option>
                                        <option value="lt_LT" lang="lt">Lietuvių kalba</option>
                                        <option value="mk_MK" lang="mk">Македонски јазик</option>
                                        <option value="mr" lang="mr">मराठी</option>
                                        <option value="ms_MY" lang="ms">Bahasa Melayu</option>
                                        <option value="my_MM" lang="my">ဗမာစာ</option>
                                        <option value="nb_NO" lang="nb">Norsk bokmål</option>
                                        <option value="nl_NL" lang="nl">Nederlands</option>
                                        <option value="nl_NL_formal" lang="nl">Nederlands (Formeel)</option>
                                        <option value="nn_NO" lang="nn">Norsk nynorsk</option>
                                        <option value="oci" lang="oc">Occitan</option>
                                        <option value="pl_PL" lang="pl">Polski</option>
                                        <option value="ps" lang="ps">پښتو</option>
                                        <option value="pt_BR" lang="pt">Português do Brasil</option>
                                        <option value="pt_PT" lang="pt">Português</option>
                                        <option value="ro_RO" lang="ro">Română</option>
                                        <option value="ru_RU" lang="ru">Русский</option>
                                        <option value="sk_SK" lang="sk">Slovenčina</option>
                                        <option value="sl_SI" lang="sl">Slovenščina</option>
                                        <option value="sq" lang="sq">Shqip</option>
                                        <option value="sr_RS" lang="sr">Српски језик</option>
                                        <option value="sv_SE" lang="sv">Svenska</option>
                                        <option value="th" lang="th">ไทย</option>
                                        <option value="tl" lang="tl">Tagalog</option>
                                        <option value="tr_TR" lang="tr">Türkçe</option>
                                        <option value="ug_CN" lang="ug">Uyƣurqə</option>
                                        <option value="uk" lang="uk">Українська</option>
                                        <option value="vi" lang="vi">Tiếng Việt</option>
                                        <option value="zh_CN" lang="zh">简体中文</option>
                                        <option value="zh_TW" lang="zh">繁體中文</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>--TimeZone--</option>
                                        <optgroup label="Africa">
                                            <option value="Africa/Abidjan">Abidjan</option>
                                            <option value="Africa/Accra">Accra</option>
                                            <option value="Africa/Addis_Ababa">Addis Ababa</option>
                                            <option value="Africa/Algiers">Algiers</option>
                                            <option value="Africa/Asmara">Asmara</option>
                                            <option value="Africa/Bamako">Bamako</option>
                                            <option value="Africa/Bangui">Bangui</option>
                                            <option value="Africa/Banjul">Banjul</option>
                                            <option value="Africa/Bissau">Bissau</option>
                                            <option value="Africa/Blantyre">Blantyre</option>
                                            <option value="Africa/Brazzaville">Brazzaville</option>
                                            <option value="Africa/Bujumbura">Bujumbura</option>
                                            <option value="Africa/Cairo">Cairo</option>
                                            <option value="Africa/Casablanca">Casablanca</option>
                                            <option value="Africa/Ceuta">Ceuta</option>
                                            <option value="Africa/Conakry">Conakry</option>
                                            <option value="Africa/Dakar">Dakar</option>
                                            <option value="Africa/Dar_es_Salaam">Dar es Salaam</option>
                                            <option value="Africa/Djibouti">Djibouti</option>
                                            <option value="Africa/Douala">Douala</option>
                                            <option value="Africa/El_Aaiun">El Aaiun</option>
                                            <option value="Africa/Freetown">Freetown</option>
                                            <option value="Africa/Gaborone">Gaborone</option>
                                            <option value="Africa/Harare">Harare</option>
                                            <option value="Africa/Johannesburg">Johannesburg</option>
                                            <option value="Africa/Juba">Juba</option>
                                            <option value="Africa/Kampala">Kampala</option>
                                            <option value="Africa/Khartoum">Khartoum</option>
                                            <option value="Africa/Kigali">Kigali</option>
                                            <option value="Africa/Kinshasa">Kinshasa</option>
                                            <option value="Africa/Lagos">Lagos</option>
                                            <option value="Africa/Libreville">Libreville</option>
                                            <option value="Africa/Lome">Lome</option>
                                            <option value="Africa/Luanda">Luanda</option>
                                            <option value="Africa/Lubumbashi">Lubumbashi</option>
                                            <option value="Africa/Lusaka">Lusaka</option>
                                            <option value="Africa/Malabo">Malabo</option>
                                            <option value="Africa/Maputo">Maputo</option>
                                            <option value="Africa/Maseru">Maseru</option>
                                            <option value="Africa/Mbabane">Mbabane</option>
                                            <option value="Africa/Mogadishu">Mogadishu</option>
                                            <option value="Africa/Monrovia">Monrovia</option>
                                            <option value="Africa/Nairobi">Nairobi</option>
                                            <option value="Africa/Ndjamena">Ndjamena</option>
                                            <option value="Africa/Niamey">Niamey</option>
                                            <option value="Africa/Nouakchott">Nouakchott</option>
                                            <option value="Africa/Ouagadougou">Ouagadougou</option>
                                            <option value="Africa/Porto-Novo">Porto-Novo</option>
                                            <option value="Africa/Sao_Tome">Sao Tome</option>
                                            <option value="Africa/Tripoli">Tripoli</option>
                                            <option value="Africa/Tunis">Tunis</option>
                                            <option value="Africa/Windhoek">Windhoek</option>
                                        </optgroup>
                                        <optgroup label="America">
                                            <option value="America/Adak">Adak</option>
                                            <option value="America/Anchorage">Anchorage</option>
                                            <option value="America/Anguilla">Anguilla</option>
                                            <option value="America/Antigua">Antigua</option>
                                            <option value="America/Araguaina">Araguaina</option>
                                            <option value="America/Argentina/Buenos_Aires">Argentina - Buenos Aires</option>
                                            <option value="America/Argentina/Catamarca">Argentina - Catamarca</option>
                                            <option value="America/Argentina/Cordoba">Argentina - Cordoba</option>
                                            <option value="America/Argentina/Jujuy">Argentina - Jujuy</option>
                                            <option value="America/Argentina/La_Rioja">Argentina - La Rioja</option>
                                            <option value="America/Argentina/Mendoza">Argentina - Mendoza</option>
                                            <option value="America/Argentina/Rio_Gallegos">Argentina - Rio Gallegos</option>
                                            <option value="America/Argentina/Salta">Argentina - Salta</option>
                                            <option value="America/Argentina/San_Juan">Argentina - San Juan</option>
                                            <option value="America/Argentina/San_Luis">Argentina - San Luis</option>
                                            <option value="America/Argentina/Tucuman">Argentina - Tucuman</option>
                                            <option value="America/Argentina/Ushuaia">Argentina - Ushuaia</option>
                                            <option value="America/Aruba">Aruba</option>
                                            <option value="America/Asuncion">Asuncion</option>
                                            <option value="America/Atikokan">Atikokan</option>
                                            <option value="America/Bahia">Bahia</option>
                                            <option value="America/Bahia_Banderas">Bahia Banderas</option>
                                            <option value="America/Barbados">Barbados</option>
                                            <option value="America/Belem">Belem</option>
                                            <option value="America/Belize">Belize</option>
                                            <option value="America/Blanc-Sablon">Blanc-Sablon</option>
                                            <option value="America/Boa_Vista">Boa Vista</option>
                                            <option value="America/Bogota">Bogota</option>
                                            <option value="America/Boise">Boise</option>
                                            <option value="America/Cambridge_Bay">Cambridge Bay</option>
                                            <option value="America/Campo_Grande">Campo Grande</option>
                                            <option value="America/Cancun">Cancun</option>
                                            <option value="America/Caracas">Caracas</option>
                                            <option value="America/Cayenne">Cayenne</option>
                                            <option value="America/Cayman">Cayman</option>
                                            <option value="America/Chicago">Chicago</option>
                                            <option value="America/Chihuahua">Chihuahua</option>
                                            <option value="America/Costa_Rica">Costa Rica</option>
                                            <option value="America/Creston">Creston</option>
                                            <option value="America/Cuiaba">Cuiaba</option>
                                            <option value="America/Curacao">Curacao</option>
                                            <option value="America/Danmarkshavn">Danmarkshavn</option>
                                            <option value="America/Dawson">Dawson</option>
                                            <option value="America/Dawson_Creek">Dawson Creek</option>
                                            <option value="America/Denver">Denver</option>
                                            <option value="America/Detroit">Detroit</option>
                                            <option value="America/Dominica">Dominica</option>
                                            <option value="America/Edmonton">Edmonton</option>
                                            <option value="America/Eirunepe">Eirunepe</option>
                                            <option value="America/El_Salvador">El Salvador</option>
                                            <option value="America/Fortaleza">Fortaleza</option>
                                            <option value="America/Glace_Bay">Glace Bay</option>
                                            <option value="America/Godthab">Godthab</option>
                                            <option value="America/Goose_Bay">Goose Bay</option>
                                            <option value="America/Grand_Turk">Grand Turk</option>
                                            <option value="America/Grenada">Grenada</option>
                                            <option value="America/Guadeloupe">Guadeloupe</option>
                                            <option value="America/Guatemala">Guatemala</option>
                                            <option value="America/Guayaquil">Guayaquil</option>
                                            <option value="America/Guyana">Guyana</option>
                                            <option value="America/Halifax">Halifax</option>
                                            <option value="America/Havana">Havana</option>
                                            <option value="America/Hermosillo">Hermosillo</option>
                                            <option value="America/Indiana/Indianapolis">Indiana - Indianapolis</option>
                                            <option value="America/Indiana/Knox">Indiana - Knox</option>
                                            <option value="America/Indiana/Marengo">Indiana - Marengo</option>
                                            <option value="America/Indiana/Petersburg">Indiana - Petersburg</option>
                                            <option value="America/Indiana/Tell_City">Indiana - Tell City</option>
                                            <option value="America/Indiana/Vevay">Indiana - Vevay</option>
                                            <option value="America/Indiana/Vincennes">Indiana - Vincennes</option>
                                            <option value="America/Indiana/Winamac">Indiana - Winamac</option>
                                            <option value="America/Inuvik">Inuvik</option>
                                            <option value="America/Iqaluit">Iqaluit</option>
                                            <option value="America/Jamaica">Jamaica</option>
                                            <option value="America/Juneau">Juneau</option>
                                            <option value="America/Kentucky/Louisville">Kentucky - Louisville</option>
                                            <option value="America/Kentucky/Monticello">Kentucky - Monticello</option>
                                            <option value="America/Kralendijk">Kralendijk</option>
                                            <option value="America/La_Paz">La Paz</option>
                                            <option value="America/Lima">Lima</option>
                                            <option value="America/Los_Angeles">Los Angeles</option>
                                            <option value="America/Lower_Princes">Lower Princes</option>
                                            <option value="America/Maceio">Maceio</option>
                                            <option value="America/Managua">Managua</option>
                                            <option value="America/Manaus">Manaus</option>
                                            <option value="America/Marigot">Marigot</option>
                                            <option value="America/Martinique">Martinique</option>
                                            <option value="America/Matamoros">Matamoros</option>
                                            <option value="America/Mazatlan">Mazatlan</option>
                                            <option value="America/Menominee">Menominee</option>
                                            <option value="America/Merida">Merida</option>
                                            <option value="America/Metlakatla">Metlakatla</option>
                                            <option value="America/Mexico_City">Mexico City</option>
                                            <option value="America/Miquelon">Miquelon</option>
                                            <option value="America/Moncton">Moncton</option>
                                            <option value="America/Monterrey">Monterrey</option>
                                            <option value="America/Montevideo">Montevideo</option>
                                            <option value="America/Montserrat">Montserrat</option>
                                            <option value="America/Nassau">Nassau</option>
                                            <option value="America/New_York">New York</option>
                                            <option value="America/Nipigon">Nipigon</option>
                                            <option value="America/Nome">Nome</option>
                                            <option value="America/Noronha">Noronha</option>
                                            <option value="America/North_Dakota/Beulah">North Dakota - Beulah</option>
                                            <option value="America/North_Dakota/Center">North Dakota - Center</option>
                                            <option value="America/North_Dakota/New_Salem">North Dakota - New Salem</option>
                                            <option value="America/Ojinaga">Ojinaga</option>
                                            <option value="America/Panama">Panama</option>
                                            <option value="America/Pangnirtung">Pangnirtung</option>
                                            <option value="America/Paramaribo">Paramaribo</option>
                                            <option value="America/Phoenix">Phoenix</option>
                                            <option value="America/Port-au-Prince">Port-au-Prince</option>
                                            <option value="America/Port_of_Spain">Port of Spain</option>
                                            <option value="America/Porto_Velho">Porto Velho</option>
                                            <option value="America/Puerto_Rico">Puerto Rico</option>
                                            <option value="America/Rainy_River">Rainy River</option>
                                            <option value="America/Rankin_Inlet">Rankin Inlet</option>
                                            <option value="America/Recife">Recife</option>
                                            <option value="America/Regina">Regina</option>
                                            <option value="America/Resolute">Resolute</option>
                                            <option value="America/Rio_Branco">Rio Branco</option>
                                            <option value="America/Santa_Isabel">Santa Isabel</option>
                                            <option value="America/Santarem">Santarem</option>
                                            <option value="America/Santiago">Santiago</option>
                                            <option value="America/Santo_Domingo">Santo Domingo</option>
                                            <option value="America/Sao_Paulo">Sao Paulo</option>
                                            <option value="America/Scoresbysund">Scoresbysund</option>
                                            <option value="America/Sitka">Sitka</option>
                                            <option value="America/St_Barthelemy">St Barthelemy</option>
                                            <option value="America/St_Johns">St Johns</option>
                                            <option value="America/St_Kitts">St Kitts</option>
                                            <option value="America/St_Lucia">St Lucia</option>
                                            <option value="America/St_Thomas">St Thomas</option>
                                            <option value="America/St_Vincent">St Vincent</option>
                                            <option value="America/Swift_Current">Swift Current</option>
                                            <option value="America/Tegucigalpa">Tegucigalpa</option>
                                            <option value="America/Thule">Thule</option>
                                            <option value="America/Thunder_Bay">Thunder Bay</option>
                                            <option value="America/Tijuana">Tijuana</option>
                                            <option value="America/Toronto">Toronto</option>
                                            <option value="America/Tortola">Tortola</option>
                                            <option value="America/Vancouver">Vancouver</option>
                                            <option value="America/Whitehorse">Whitehorse</option>
                                            <option value="America/Winnipeg">Winnipeg</option>
                                            <option value="America/Yakutat">Yakutat</option>
                                            <option value="America/Yellowknife">Yellowknife</option>
                                        </optgroup>
                                        <optgroup label="Antarctica">
                                            <option value="Antarctica/Casey">Casey</option>
                                            <option value="Antarctica/Davis">Davis</option>
                                            <option value="Antarctica/DumontDUrville">DumontDUrville</option>
                                            <option value="Antarctica/Macquarie">Macquarie</option>
                                            <option value="Antarctica/Mawson">Mawson</option>
                                            <option value="Antarctica/McMurdo">McMurdo</option>
                                            <option value="Antarctica/Palmer">Palmer</option>
                                            <option value="Antarctica/Rothera">Rothera</option>
                                            <option value="Antarctica/Syowa">Syowa</option>
                                            <option value="Antarctica/Troll">Troll</option>
                                            <option value="Antarctica/Vostok">Vostok</option>
                                        </optgroup>
                                        <optgroup label="Arctic">
                                            <option value="Arctic/Longyearbyen">Longyearbyen</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Asia/Aden">Aden</option>
                                            <option value="Asia/Almaty">Almaty</option>
                                            <option value="Asia/Amman">Amman</option>
                                            <option value="Asia/Anadyr">Anadyr</option>
                                            <option value="Asia/Aqtau">Aqtau</option>
                                            <option value="Asia/Aqtobe">Aqtobe</option>
                                            <option value="Asia/Ashgabat">Ashgabat</option>
                                            <option value="Asia/Baghdad">Baghdad</option>
                                            <option value="Asia/Bahrain">Bahrain</option>
                                            <option value="Asia/Baku">Baku</option>
                                            <option value="Asia/Bangkok">Bangkok</option>
                                            <option value="Asia/Beirut">Beirut</option>
                                            <option value="Asia/Bishkek">Bishkek</option>
                                            <option value="Asia/Brunei">Brunei</option>
                                            <option value="Asia/Chita">Chita</option>
                                            <option value="Asia/Choibalsan">Choibalsan</option>
                                            <option value="Asia/Colombo">Colombo</option>
                                            <option value="Asia/Damascus">Damascus</option>
                                            <option value="Asia/Dhaka">Dhaka</option>
                                            <option value="Asia/Dili">Dili</option>
                                            <option value="Asia/Dubai">Dubai</option>
                                            <option value="Asia/Dushanbe">Dushanbe</option>
                                            <option value="Asia/Gaza">Gaza</option>
                                            <option value="Asia/Hebron">Hebron</option>
                                            <option value="Asia/Ho_Chi_Minh">Ho Chi Minh</option>
                                            <option value="Asia/Hong_Kong">Hong Kong</option>
                                            <option value="Asia/Hovd">Hovd</option>
                                            <option value="Asia/Irkutsk">Irkutsk</option>
                                            <option value="Asia/Jakarta">Jakarta</option>
                                            <option value="Asia/Jayapura">Jayapura</option>
                                            <option value="Asia/Jerusalem">Jerusalem</option>
                                            <option value="Asia/Kabul">Kabul</option>
                                            <option value="Asia/Kamchatka">Kamchatka</option>
                                            <option value="Asia/Karachi">Karachi</option>
                                            <option value="Asia/Kathmandu">Kathmandu</option>
                                            <option value="Asia/Khandyga">Khandyga</option>
                                            <option value="Asia/Kolkata">Kolkata</option>
                                            <option value="Asia/Krasnoyarsk">Krasnoyarsk</option>
                                            <option value="Asia/Kuala_Lumpur">Kuala Lumpur</option>
                                            <option value="Asia/Kuching">Kuching</option>
                                            <option value="Asia/Kuwait">Kuwait</option>
                                            <option value="Asia/Macau">Macau</option>
                                            <option value="Asia/Magadan">Magadan</option>
                                            <option value="Asia/Makassar">Makassar</option>
                                            <option value="Asia/Manila">Manila</option>
                                            <option value="Asia/Muscat">Muscat</option>
                                            <option value="Asia/Nicosia">Nicosia</option>
                                            <option value="Asia/Novokuznetsk">Novokuznetsk</option>
                                            <option value="Asia/Novosibirsk">Novosibirsk</option>
                                            <option value="Asia/Omsk">Omsk</option>
                                            <option value="Asia/Oral">Oral</option>
                                            <option value="Asia/Phnom_Penh">Phnom Penh</option>
                                            <option value="Asia/Pontianak">Pontianak</option>
                                            <option value="Asia/Pyongyang">Pyongyang</option>
                                            <option value="Asia/Qatar">Qatar</option>
                                            <option value="Asia/Qyzylorda">Qyzylorda</option>
                                            <option value="Asia/Rangoon">Rangoon</option>
                                            <option value="Asia/Riyadh">Riyadh</option>
                                            <option value="Asia/Sakhalin">Sakhalin</option>
                                            <option value="Asia/Samarkand">Samarkand</option>
                                            <option value="Asia/Seoul">Seoul</option>
                                            <option value="Asia/Shanghai">Shanghai</option>
                                            <option value="Asia/Singapore">Singapore</option>
                                            <option value="Asia/Srednekolymsk">Srednekolymsk</option>
                                            <option value="Asia/Taipei">Taipei</option>
                                            <option value="Asia/Tashkent">Tashkent</option>
                                            <option value="Asia/Tbilisi">Tbilisi</option>
                                            <option value="Asia/Tehran">Tehran</option>
                                            <option value="Asia/Thimphu">Thimphu</option>
                                            <option value="Asia/Tokyo">Tokyo</option>
                                            <option value="Asia/Ulaanbaatar">Ulaanbaatar</option>
                                            <option value="Asia/Urumqi">Urumqi</option>
                                            <option value="Asia/Ust-Nera">Ust-Nera</option>
                                            <option value="Asia/Vientiane">Vientiane</option>
                                            <option value="Asia/Vladivostok">Vladivostok</option>
                                            <option value="Asia/Yakutsk">Yakutsk</option>
                                            <option value="Asia/Yekaterinburg">Yekaterinburg</option>
                                            <option value="Asia/Yerevan">Yerevan</option>
                                        </optgroup>
                                        <optgroup label="Atlantic">
                                            <option value="Atlantic/Azores">Azores</option>
                                            <option value="Atlantic/Bermuda">Bermuda</option>
                                            <option value="Atlantic/Canary">Canary</option>
                                            <option value="Atlantic/Cape_Verde">Cape Verde</option>
                                            <option value="Atlantic/Faroe">Faroe</option>
                                            <option value="Atlantic/Madeira">Madeira</option>
                                            <option value="Atlantic/Reykjavik">Reykjavik</option>
                                            <option value="Atlantic/South_Georgia">South Georgia</option>
                                            <option value="Atlantic/Stanley">Stanley</option>
                                            <option value="Atlantic/St_Helena">St Helena</option>
                                        </optgroup>
                                        <optgroup label="Australia">
                                            <option value="Australia/Adelaide">Adelaide</option>
                                            <option value="Australia/Brisbane">Brisbane</option>
                                            <option value="Australia/Broken_Hill">Broken Hill</option>
                                            <option value="Australia/Currie">Currie</option>
                                            <option value="Australia/Darwin">Darwin</option>
                                            <option value="Australia/Eucla">Eucla</option>
                                            <option value="Australia/Hobart">Hobart</option>
                                            <option value="Australia/Lindeman">Lindeman</option>
                                            <option value="Australia/Lord_Howe">Lord Howe</option>
                                            <option value="Australia/Melbourne">Melbourne</option>
                                            <option value="Australia/Perth">Perth</option>
                                            <option value="Australia/Sydney">Sydney</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="Europe/Amsterdam">Amsterdam</option>
                                            <option value="Europe/Andorra">Andorra</option>
                                            <option value="Europe/Athens">Athens</option>
                                            <option value="Europe/Belgrade">Belgrade</option>
                                            <option value="Europe/Berlin">Berlin</option>
                                            <option value="Europe/Bratislava">Bratislava</option>
                                            <option value="Europe/Brussels">Brussels</option>
                                            <option value="Europe/Bucharest">Bucharest</option>
                                            <option value="Europe/Budapest">Budapest</option>
                                            <option value="Europe/Busingen">Busingen</option>
                                            <option value="Europe/Chisinau">Chisinau</option>
                                            <option value="Europe/Copenhagen">Copenhagen</option>
                                            <option value="Europe/Dublin">Dublin</option>
                                            <option value="Europe/Gibraltar">Gibraltar</option>
                                            <option value="Europe/Guernsey">Guernsey</option>
                                            <option value="Europe/Helsinki">Helsinki</option>
                                            <option value="Europe/Isle_of_Man">Isle of Man</option>
                                            <option value="Europe/Istanbul">Istanbul</option>
                                            <option value="Europe/Jersey">Jersey</option>
                                            <option value="Europe/Kaliningrad">Kaliningrad</option>
                                            <option value="Europe/Kiev">Kiev</option>
                                            <option value="Europe/Lisbon">Lisbon</option>
                                            <option value="Europe/Ljubljana">Ljubljana</option>
                                            <option value="Europe/London">London</option>
                                            <option value="Europe/Luxembourg">Luxembourg</option>
                                            <option value="Europe/Madrid">Madrid</option>
                                            <option value="Europe/Malta">Malta</option>
                                            <option value="Europe/Mariehamn">Mariehamn</option>
                                            <option value="Europe/Minsk">Minsk</option>
                                            <option value="Europe/Monaco">Monaco</option>
                                            <option value="Europe/Moscow">Moscow</option>
                                            <option value="Europe/Oslo">Oslo</option>
                                            <option value="Europe/Paris">Paris</option>
                                            <option value="Europe/Podgorica">Podgorica</option>
                                            <option value="Europe/Prague">Prague</option>
                                            <option value="Europe/Riga">Riga</option>
                                            <option value="Europe/Rome">Rome</option>
                                            <option value="Europe/Samara">Samara</option>
                                            <option value="Europe/San_Marino">San Marino</option>
                                            <option value="Europe/Sarajevo">Sarajevo</option>
                                            <option value="Europe/Simferopol">Simferopol</option>
                                            <option value="Europe/Skopje">Skopje</option>
                                            <option value="Europe/Sofia">Sofia</option>
                                            <option value="Europe/Stockholm">Stockholm</option>
                                            <option value="Europe/Tallinn">Tallinn</option>
                                            <option value="Europe/Tirane">Tirane</option>
                                            <option value="Europe/Uzhgorod">Uzhgorod</option>
                                            <option value="Europe/Vaduz">Vaduz</option>
                                            <option value="Europe/Vatican">Vatican</option>
                                            <option value="Europe/Vienna">Vienna</option>
                                            <option value="Europe/Vilnius">Vilnius</option>
                                            <option value="Europe/Volgograd">Volgograd</option>
                                            <option value="Europe/Warsaw">Warsaw</option>
                                            <option value="Europe/Zagreb">Zagreb</option>
                                            <option value="Europe/Zaporozhye">Zaporozhye</option>
                                            <option value="Europe/Zurich">Zurich</option>
                                        </optgroup>
                                        <optgroup label="Indian">
                                            <option value="Indian/Antananarivo">Antananarivo</option>
                                            <option value="Indian/Chagos">Chagos</option>
                                            <option value="Indian/Christmas">Christmas</option>
                                            <option value="Indian/Cocos">Cocos</option>
                                            <option value="Indian/Comoro">Comoro</option>
                                            <option value="Indian/Kerguelen">Kerguelen</option>
                                            <option value="Indian/Mahe">Mahe</option>
                                            <option value="Indian/Maldives">Maldives</option>
                                            <option value="Indian/Mauritius">Mauritius</option>
                                            <option value="Indian/Mayotte">Mayotte</option>
                                            <option value="Indian/Reunion">Reunion</option>
                                        </optgroup>
                                        <optgroup label="Pacific">
                                            <option value="Pacific/Apia">Apia</option>
                                            <option value="Pacific/Auckland">Auckland</option>
                                            <option value="Pacific/Chatham">Chatham</option>
                                            <option value="Pacific/Chuuk">Chuuk</option>
                                            <option value="Pacific/Easter">Easter</option>
                                            <option value="Pacific/Efate">Efate</option>
                                            <option value="Pacific/Enderbury">Enderbury</option>
                                            <option value="Pacific/Fakaofo">Fakaofo</option>
                                            <option value="Pacific/Fiji">Fiji</option>
                                            <option value="Pacific/Funafuti">Funafuti</option>
                                            <option value="Pacific/Galapagos">Galapagos</option>
                                            <option value="Pacific/Gambier">Gambier</option>
                                            <option value="Pacific/Guadalcanal">Guadalcanal</option>
                                            <option value="Pacific/Guam">Guam</option>
                                            <option value="Pacific/Honolulu">Honolulu</option>
                                            <option value="Pacific/Johnston">Johnston</option>
                                            <option value="Pacific/Kiritimati">Kiritimati</option>
                                            <option value="Pacific/Kosrae">Kosrae</option>
                                            <option value="Pacific/Kwajalein">Kwajalein</option>
                                            <option value="Pacific/Majuro">Majuro</option>
                                            <option value="Pacific/Marquesas">Marquesas</option>
                                            <option value="Pacific/Midway">Midway</option>
                                            <option value="Pacific/Nauru">Nauru</option>
                                            <option value="Pacific/Niue">Niue</option>
                                            <option value="Pacific/Norfolk">Norfolk</option>
                                            <option value="Pacific/Noumea">Noumea</option>
                                            <option value="Pacific/Pago_Pago">Pago Pago</option>
                                            <option value="Pacific/Palau">Palau</option>
                                            <option value="Pacific/Pitcairn">Pitcairn</option>
                                            <option value="Pacific/Pohnpei">Pohnpei</option>
                                            <option value="Pacific/Port_Moresby">Port Moresby</option>
                                            <option value="Pacific/Rarotonga">Rarotonga</option>
                                            <option value="Pacific/Saipan">Saipan</option>
                                            <option value="Pacific/Tahiti">Tahiti</option>
                                            <option value="Pacific/Tarawa">Tarawa</option>
                                            <option value="Pacific/Tongatapu">Tongatapu</option>
                                            <option value="Pacific/Wake">Wake</option>
                                            <option value="Pacific/Wallis">Wallis</option>
                                        </optgroup>
                                        <optgroup label="UTC">
                                            <option value="UTC">UTC</option>
                                        </optgroup>
                                        <optgroup label="Manual Offsets">
                                            <option value="UTC-12">UTC-12</option>
                                            <option value="UTC-11.5">UTC-11:30</option>
                                            <option value="UTC-11">UTC-11</option>
                                            <option value="UTC-10.5">UTC-10:30</option>
                                            <option value="UTC-10">UTC-10</option>
                                            <option value="UTC-9.5">UTC-9:30</option>
                                            <option value="UTC-9">UTC-9</option>
                                            <option value="UTC-8.5">UTC-8:30</option>
                                            <option value="UTC-8">UTC-8</option>
                                            <option value="UTC-7.5">UTC-7:30</option>
                                            <option value="UTC-7">UTC-7</option>
                                            <option value="UTC-6.5">UTC-6:30</option>
                                            <option value="UTC-6">UTC-6</option>
                                            <option value="UTC-5.5">UTC-5:30</option>
                                            <option selected="selected" value="UTC-5">UTC-5</option>
                                            <option value="UTC-4.5">UTC-4:30</option>
                                            <option value="UTC-4">UTC-4</option>
                                            <option value="UTC-3.5">UTC-3:30</option>
                                            <option value="UTC-3">UTC-3</option>
                                            <option value="UTC-2.5">UTC-2:30</option>
                                            <option value="UTC-2">UTC-2</option>
                                            <option value="UTC-1.5">UTC-1:30</option>
                                            <option value="UTC-1">UTC-1</option>
                                            <option value="UTC-0.5">UTC-0:30</option>
                                            <option value="UTC+0">UTC+0</option>
                                            <option value="UTC+0.5">UTC+0:30</option>
                                            <option value="UTC+1">UTC+1</option>
                                            <option value="UTC+1.5">UTC+1:30</option>
                                            <option value="UTC+2">UTC+2</option>
                                            <option value="UTC+2.5">UTC+2:30</option>
                                            <option value="UTC+3">UTC+3</option>
                                            <option value="UTC+3.5">UTC+3:30</option>
                                            <option value="UTC+4">UTC+4</option>
                                            <option value="UTC+4.5">UTC+4:30</option>
                                            <option value="UTC+5">UTC+5</option>
                                            <option value="UTC+5.5">UTC+5:30</option>
                                            <option value="UTC+5.75">UTC+5:45</option>
                                            <option value="UTC+6">UTC+6</option>
                                            <option value="UTC+6.5">UTC+6:30</option>
                                            <option value="UTC+7">UTC+7</option>
                                            <option value="UTC+7.5">UTC+7:30</option>
                                            <option value="UTC+8">UTC+8</option>
                                            <option value="UTC+8.5">UTC+8:30</option>
                                            <option value="UTC+8.75">UTC+8:45</option>
                                            <option value="UTC+9">UTC+9</option>
                                            <option value="UTC+9.5">UTC+9:30</option>
                                            <option value="UTC+10">UTC+10</option>
                                            <option value="UTC+10.5">UTC+10:30</option>
                                            <option value="UTC+11">UTC+11</option>
                                            <option value="UTC+11.5">UTC+11:30</option>
                                            <option value="UTC+12">UTC+12</option>
                                            <option value="UTC+12.75">UTC+12:45</option>
                                            <option value="UTC+13">UTC+13</option>
                                            <option value="UTC+13.75">UTC+13:45</option>
                                            <option value="UTC+14">UTC+14</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date Format</label>
                                    <div class="fancy-radio">
                                        <label><input name="dateFormat" value="" type="radio"><span><i></i>May 18, 2018</span></label>&nbsp;&nbsp;
                                        <label><input name="dateFormat" value="" type="radio"><span><i></i>2018, May, 18</span></label>&nbsp;&nbsp;
                                        <label><input name="dateFormat" value="" type="radio" checked><span><i></i>2018-03-10</span></label>&nbsp;&nbsp;
                                        <label><input name="dateFormat" value="" type="radio"><span><i></i>02/09/2018</span></label>&nbsp;&nbsp;
                                        <label><input name="dateFormat" value="" type="radio"><span><i></i>10/05/2018</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <h6>Email from Lucid</h6>
                                <p>I'd like to receive the following emails:</p>
                                <ul class="list-unstyled list-email-received">
                                    <li>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" checked><span>Weekly account summary</span></label>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"><span>Campaign reports</span></label>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" checked><span>Promotional news such as offers or discounts</span></label>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" checked><span>Tips for campaign setup, growth and client success stories</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button class="btn btn-default">Cancel</button>
                    </div>
                </div>

                <div class="tab-pane" id="billings">

                    <div class="body">
                        <h6>Payment Method</h6>
                        <div class="payment-info">
                            <h3 class="payment-name"><i class="fa fa-paypal"></i> PayPal ****2222</h3>
                            <span>Next billing charged $29</span>
                            <br>
                            <em class="text-muted">Autopay on May 12, 2018</em>
                            <a href="javascript:void(0);" class="edit-payment-info">Edit Payment Info</a>
                        </div>
                        <p class="margin-top-30"><a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add Payment Info</a></p>
                    </div>

                    <div class="body">
                        <h6>Billing History</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered billing-history">
                                <thead class="sr-only">
                                    <tr>
                                        <th>Plan</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3 class="billing-title">Basic Plan <span class="invoice-number">#LA35628</span></h3>
                                            <span class="text-muted">Charged at April 17, 2018</span>
                                        </td>
                                        <td class="amount">$29</td>
                                        <td class="action"><a href="javascript:void(0);">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 class="billing-title">Pro Plan <span class="invoice-number">#LA3599</span></h3>
                                            <span class="text-muted">Charged at March 18, 2018</span>
                                        </td>
                                        <td class="amount">$59</td>
                                        <td class="action"><a href="javascript:void(0);">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 class="billing-title">Platinum Plan <span class="invoice-number">#LA1245</span></h3>
                                            <span class="text-muted">Charged at Feb 02, 2018</span>
                                        </td>
                                        <td class="amount">$89</td>
                                        <td class="action"><a href="javascript:void(0);">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>

                </div>

                <div class="tab-pane" id="preferences">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="body">
                                <h6>Your Login Sessions</h6>
                                <ul class="list-unstyled list-login-session">
                                    <li>
                                        <div class="login-session">
                                            <i class="fa fa-laptop device-icon"></i>
                                            <div class="login-info">
                                                <h3 class="login-title">Mac - New York, United States</h3>
                                                <span class="login-detail">Chrome - <span class="text-success">Active Now</span></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="login-session">
                                            <i class="fa fa-desktop device-icon"></i>
                                            <div class="login-info">
                                                <h3 class="login-title">Windows 10 - New York, United States</h3>
                                                <span class="login-detail">Firefox - about an hour ago</span>
                                            </div>
                                            <button type="button" class="btn btn-link btn-logout" data-container="body" data-toggle="tooltip" title="Close this login session"><i class="fa fa-times-circle text-danger"></i></button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="login-session">
                                            <i class="fa fa-mobile fa-fw device-icon"></i>
                                            <div class="login-info">
                                                <h3 class="login-title">Android - New York, United States</h3>
                                                <span class="login-detail">Android Browser - yesterday</span>
                                            </div>
                                            <button type="button" class="btn btn-link btn-logout" data-container="body" data-toggle="tooltip" title="Close this login session"><i class="fa fa-times-circle text-danger"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="body">
                                <h6>Connected Social Media</h6>
                                <ul class="list-unstyled list-connected-app">
                                    <li>
                                        <div class="connected-app">
                                            <i class="fa fa-facebook app-icon"></i>
                                            <div class="connection-info">
                                                <h3 class="app-title">FaceBook</h3>
                                                <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="connected-app">
                                            <i class="fa fa-twitter app-icon"></i>
                                            <div class="connection-info">
                                                <h3 class="app-title">Twitter</h3>
                                                <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="connected-app">
                                            <i class="fa fa-instagram app-icon"></i>
                                            <div class="connection-info">
                                                <h3 class="app-title">Instagram</h3>
                                                <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="connected-app">
                                            <i class="fa fa-linkedin app-icon"></i>
                                            <div class="connection-info">
                                                <h3 class="app-title">Linkedin</h3>
                                                <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="connected-app">
                                            <i class="fa fa-vimeo app-icon"></i>
                                            <div class="connection-info">
                                                <h3 class="app-title">Vimeo</h3>
                                                <span class="actions"><a href="javascript:void(0);">View Permissions</a> <a href="javascript:void(0);" class="text-danger">Revoke Access</a></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

    $(function() {
        // photo upload
        $('#btn-upload-photo').on('click', function() {
            $(this).siblings('#filePhoto').trigger('click');
        });

        // plans
        $('.btn-choose-plan').on('click', function() {
            $('.plan').removeClass('selected-plan');
            $('.plan-title span').find('i').remove();

            $(this).parent().addClass('selected-plan');
            $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
        });
    });

@stop
