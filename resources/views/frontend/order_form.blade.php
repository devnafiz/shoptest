
@extends('frontend_layout.frontend_design_ca')

@section('title')

Order-Form

@endsection
@section('name')


@endsection
@section('extra-css')
<style type="text/css">
	.row {
    margin-right: -15px;
    margin-left: -15px;
}
</style>
@endsection
@section('pagecontent')

<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single post-29 page type-page status-publish hentry">
							<div class="entry">
								<div class="entry-content">
									<header>
										<h2 class="entry-title">Order Form</h2>
									</header>

									<div class="entry-content">
										<div class="woocommerce">
											<div class="woocommerce-MyAccount-content">
												<form method="post" action="home_style_1_addresses.html">
													<h3>Billing Address</h3>
													<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
														<label for="billing_first_name">
															First Name 
															<abbr class="required" title="required">*</abbr>
														</label>
														<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" value="Address" />
													</p>
													
													<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">
															Last Name 
															<abbr class="required" title="required">*</abbr>
														</label>
														<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" autocomplete="family-name" value="Permanent" />
													</p>
													
													<div class="clear"></div>
													
													<p class="form-row form-row form-row-wide" id="billing_company_field">
														<label for="billing_company">
															Company Name
														</label>
														
														<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" autocomplete="organization" value="" />
													</p>
													
													<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
														<label for="billing_email">
															Email Address 
															<abbr class="required" title="required">*</abbr>
														</label>
														
														<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" autocomplete="email" value="test@yahoo.com" />
													</p>
													
													<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
														<label for="billing_phone">
															Phone 
															<abbr class="required" title="required">*</abbr>
														</label>
														
														<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" autocomplete="tel" value="0932145667" />
													</p>
													
													<div class="clear"></div>
													
													<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
														<label for="billing_country">
															Country 
															<abbr class="required" title="required">*</abbr>
														</label>
														
														<select name="billing_country" id="billing_country">
															<option value="">Select a country…</option>
															<option value="AX">Åland Islands</option>
															<option value="AF">Afghanistan</option>
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
															<option value="PW">Belau</option>
															<option value="BE">Belgium</option>
															<option value="BZ">Belize</option>
															<option value="BJ">Benin</option>
															<option value="BM">Bermuda</option>
															<option value="BT">Bhutan</option>
															<option value="BO">Bolivia</option>
															<option value="BQ">Bonaire, Saint Eustatius and Saba</option>
															<option value="BA">Bosnia and Herzegovina</option>
															<option value="BW">Botswana</option>
															<option value="BV">Bouvet Island</option>
															<option value="BR">Brazil</option>
															<option value="IO">British Indian Ocean Territory</option>
															<option value="VG">British Virgin Islands</option>
															<option value="BN">Brunei</option>
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
															<option value="CG">Congo (Brazzaville)</option>
															<option value="CD">Congo (Kinshasa)</option>
															<option value="CK">Cook Islands</option>
															<option value="CR">Costa Rica</option>
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
															<option value="FK">Falkland Islands</option>
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
															<option value="HN">Honduras</option>
															<option value="HK">Hong Kong</option>
															<option value="HU">Hungary</option>
															<option value="IS">Iceland</option>
															<option value="IN">India</option>
															<option value="ID">Indonesia</option>
															<option value="IR">Iran</option>
															<option value="IQ">Iraq</option>
															<option value="IM">Isle of Man</option>
															<option value="IL">Israel</option>
															<option value="IT">Italy</option>
															<option value="CI">Ivory Coast</option>
															<option value="JM">Jamaica</option>
															<option value="JP">Japan</option>
															<option value="JE">Jersey</option>
															<option value="JO">Jordan</option>
															<option value="KZ">Kazakhstan</option>
															<option value="KE">Kenya</option>
															<option value="KI">Kiribati</option>
															<option value="KW">Kuwait</option>
															<option value="KG">Kyrgyzstan</option>
															<option value="LA">Laos</option>
															<option value="LV">Latvia</option>
															<option value="LB">Lebanon</option>
															<option value="LS">Lesotho</option>
															<option value="LR">Liberia</option>
															<option value="LY">Libya</option>
															<option value="LI">Liechtenstein</option>
															<option value="LT">Lithuania</option>
															<option value="LU">Luxembourg</option>
															<option value="MO">Macao S.A.R., China</option>
															<option value="MK">Macedonia</option>
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
															<option value="FM">Micronesia</option>
															<option value="MD">Moldova</option>
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
															<option value="KP">North Korea</option>
															<option value="MP">Northern Mariana Islands</option>
															<option value="NO">Norway</option>
															<option value="OM">Oman</option>
															<option value="PK">Pakistan</option>
															<option value="PS">Palestinian Territory</option>
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
															<option value="IE">Republic of Ireland</option>
															<option value="RE">Reunion</option>
															<option value="RO">Romania</option>
															<option value="RU">Russia</option>
															<option value="RW">Rwanda</option>
															<option value="ST">São Tomé and Príncipe</option>
															<option value="BL">Saint Barthélemy</option>
															<option value="SH">Saint Helena</option>
															<option value="KN">Saint Kitts and Nevis</option>
															<option value="LC">Saint Lucia</option>
															<option value="SX">Saint Martin (Dutch part)</option>
															<option value="MF">Saint Martin (French part)</option>
															<option value="PM">Saint Pierre and Miquelon</option>
															<option value="VC">Saint Vincent and the Grenadines</option>
															<option value="WS">Samoa</option>
															<option value="SM">San Marino</option>
															<option value="SA">Saudi Arabia</option>
															<option value="SN">Senegal</option>
															<option value="RS">Serbia</option>
															<option value="SC">Seychelles</option>
															<option value="SL">Sierra Leone</option>
															<option value="SG">Singapore</option>
															<option value="SK">Slovakia</option>
															<option value="SI">Slovenia</option>
															<option value="SB">Solomon Islands</option>
															<option value="SO">Somalia</option>
															<option value="ZA">South Africa</option>
															<option value="GS">South Georgia/Sandwich Islands</option>
															<option value="KR">South Korea</option>
															<option value="SS">South Sudan</option>
															<option value="ES">Spain</option>
															<option value="LK">Sri Lanka</option>
															<option value="SD">Sudan</option>
															<option value="SR">Suriname</option>
															<option value="SJ">Svalbard and Jan Mayen</option>
															<option value="SZ">Swaziland</option>
															<option value="SE">Sweden</option>
															<option value="CH">Switzerland</option>
															<option value="SY">Syria</option>
															<option value="TW">Taiwan</option>
															<option value="TJ">Tajikistan</option>
															<option value="TZ">Tanzania</option>
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
															<option value="GB">United Kingdom (UK)</option>
															<option value="US">United States (US)</option>
															<option value="UM">United States (US) Minor Outlying Islands</option>
															<option value="VI">United States (US) Virgin Islands</option>
															<option value="UY">Uruguay</option>
															<option value="UZ">Uzbekistan</option>
															<option value="VU">Vanuatu</option>
															<option value="VA">Vatican</option>
															<option value="VE">Venezuela</option>
															<option value="VN" selected="selected">Vietnam</option>
															<option value="WF">Wallis and Futuna</option>
															<option value="EH">Western Sahara</option>
															<option value="YE">Yemen</option>
															<option value="ZM">Zambia</option>
															<option value="ZW">Zimbabwe</option>
														</select>
														
														<noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript>
													</p>
													
													<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
														<label for="billing_address_1">
															Address 
															<abbr class="required" title="required">*</abbr>
														</label>
														
														<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" autocomplete="address-line1" value="5322 Otter Lane" />
													</p>
													
													<p class="form-row form-row address-field validate-postcode form-row-first" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-postcode">
														<label for="billing_postcode">Postcode / ZIP</label>
														<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" autocomplete="postal-code" value="" />
													</p>
													
													<p class="form-row form-row address-field validate-required form-row-last" id="billing_city_field" data-o_class="form-row form-row form-row-wide address-field validate-required">
														<label for="billing_city">
															Town / City 
															<abbr class="required" title="required">*</abbr>
														</label>
														
														<input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" autocomplete="address-level2" value="Middleberge" />
													</p>
													
													<div class="clear"></div>
													
													<p>
														<input type="submit" class="button" name="save_address" value="Save Address" />
													</p>
											   </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				

	@endsection								