
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Select Dropdowns Plus Addable Text</title>
	<meta name="description" content="Selectize is a jQuery-based custom &lt;select&gt; UI control. It's useful for tagging, contact lists, country selectors, and so on.">


	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
	<link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/normalize.css">
	<link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/styles.css">
	<link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/bootstrap3.css" data-theme="bootstrap3">
	<!--[if IE 8]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
	<script src="/select_dropdowns_plus_addable_test_selectize/js/selectize.js"></script>
	<script src="/select_dropdowns_plus_addable_test_selectize/js/main.js"></script>
</head>
<body>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-41259457-1', 'brianreavis.github.io');
	ga('send', 'pageview');
</script>
<div id="theme-selector">
	<span class="label">Themes:</span>
	<a data-theme="default" class="active" href="javascript:void(0)">default</a>
	<a data-theme="legacy" href="javascript:void(0)">legacy</a>
	<a data-theme="bootstrap2" href="javascript:void(0)">bootstrap2</a>
	<a data-theme="bootstrap3" href="javascript:void(0)">bootstrap3</a>
</div>
<div id="github-banner"><a href="https://github.com/brianreavis/selectize.js">Fork me on GitHub</a></div>
<div class="wrapper">
	<h1><a href="http://brianreavis.github.io/selectize.js/" id="logo">Selectize.js</a></h1>

	<p class="feature">
		Selectize is the hybrid of a textbox and &lt;select&gt; box. It's jQuery-based and it's useful for tagging, contact lists, country selectors, and so on.
	</p>

	<p class="widgets">
		<!-- github star -->
		<iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=brianreavis&amp;repo=selectize.js&amp;type=watch&amp;count=true"
				allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>

		<!-- github clone -->
		<iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=brianreavis&amp;repo=selectize.js&amp;type=fork&amp;count=true"
				allowtransparency="true" frameborder="0" scrolling="0" width="92px" height="20px"></iframe>

		<a href="https://twitter.com/share" class="twitter-share-button" data-related="brianreavis" data-text="Selectize.js: the hybrid of a textbox and &lt;select&gt; box —">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</p>

	<p>
		It clocks in at around ~7kb (gzipped). The goal is to provide a solid &amp; usable user-experience with a clean and powerful API.
	</p>
	<p>
		It's a lot like <a href="http://harvesthq.github.io/chosen/">Chosen</a>, <a href="http://ivaynberg.github.io/select2/">Select2</a>, and <a href="http://xoxco.com/projects/code/tagsinput/">Tags Input</a> but
		with a few advantages. Developed by <a href="http://twitter.com/brianreavis">@brianreavis</a> (partly at <a href="https://diy.org">DIY</a>).
		Licensed under the Apache License, Version 2.0&hellip; so do whatever you want with it!
	</p>

	<h2>Features</h2>

	<ul>
		<li><strong>Skinnable</strong> — Comes with LESS stylesheets and shims for <a href="https://github.com/brianreavis/selectize.js/blob/master/dist/less/selectize.bootstrap2.less">Bootstrap 2</a> and <a href="https://github.com/brianreavis/selectize.js/blob/master/dist/less/selectize.bootstrap3.less">Bootstrap 3</a> (+ precompiled CSS).</li>
		<li><strong>Clean API &amp; Code + Extensible</strong> — Interface &amp; make addons like a boss with the <a href="https://github.com/brianreavis/microplugin.js">plugin system</a>. Fully documented on GitHub &amp; inline.</li>
		<li><strong>Smart Ranking / Multi-Property Searching &amp; Sorting</strong> — Want to search an item's title <em>and</em> description? No problem. You can even override the scoring function used for sorting if you want to get crazy. Uses <a href="https://github.com/brianreavis/sifter.js">sifter.js</a>.</li>
		<li><strong>Caret Between Items</strong> — Order matters sometimes. Use the <kbd>left</kbd> and <kbd>right</kbd> arrow keys to move between items.</li>
		<li><strong>Select &amp; Delete multiple items at once</strong> — Hold down <kbd>option</kbd> on Mac or <kbd>ctrl</kbd> on Windows to select more than one item to delete.</li>
		<li><strong><abbr title="Right to Left">RTL</abbr> + Díåcritîçs supported</strong> — Great for international environments.</li>
		<li><strong>Item Creation</strong> — Allow users to create items on the fly (and it's async friendly; the control locks until you invoke a callback).</li>
		<li><strong>Remote Data Loading</strong> — For when you have thousands of options and want them provided by the server as the user types.</li>
	</ul>
</div>
<div class="inset" id="content">
	<div class="wrapper" id="tabs">
		<ul class="tabs">
			<li class="active"><a href="#demos" data-section="#demos">Demos</a></li>
			<li><a href="#demos" data-section="#plugins">Plugins</a></li>
		</ul>
	</div>
	<div class="wrapper tab-content" id="demos">

		<!-- ************** Tagging Demo ************** -->
		<section class="demo">
			<div class="header">
				Tagging
			</div>
			<div class="sandbox">
				<label for="input-tags">Tags:</label>
				<input type="text" id="input-tags" class="demo-default" value="awesome,neat">
			</div>
			<div class="description">
				Add and remove items in any order without touching your mouse.
				Use your left/right arrow keys to move the caret (ibeam) between items. This
				example is instantiated from a <code>&lt;input type="text"&gt;</code> element (note
				that the value is represented as a string).
			</div>
			<script class="show">
				$('#input-tags').selectize({
					delimiter: ',',
					persist: false,
					create: function(input) {
						return {
							value: input,
							text: input
						}
					}
				});
			</script>
		</section>

		<!-- ************** Email Contacts Demo ************** -->
		<section class="demo">
			<div class="header">
				Email Contacts
			</div>
			<div class="sandbox">
				<label for="select-to">Email:</label>
				<select id="select-to" class="contacts" placeholder="Pick some people..."></select>
			</div>
			<div class="description">
				This demonstrates two main things: (1) custom item and option rendering, and (2) item creation on-the-fly.
				Try typing a valid and invalid email address.
			</div>
			<script class="show">
				var REGEX_EMAIL = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' +
					'(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

				$('#select-to').selectize({
					persist: false,
					maxItems: null,
					valueField: 'email',
					labelField: 'name',
					searchField: ['name', 'email'],
					options: [
						{email: 'brian@thirdroute.com', name: 'Brian Reavis'},
						{email: 'nikola@tesla.com', name: 'Nikola Tesla'},
						{email: 'someone@gmail.com'}
					],
					render: {
						item: function(item, escape) {
							return '<div>' +
								(item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
								(item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
								'</div>';
						},
						option: function(item, escape) {
							var label = item.name || item.email;
							var caption = item.name ? item.email : null;
							return '<div>' +
								'<span class="label">' + escape(label) + '</span>' +
								(caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
								'</div>';
						}
					},
					createFilter: function(input) {
						var match, regex;

						// email@address.com
						regex = new RegExp('^' + REGEX_EMAIL + '$', 'i');
						match = input.match(regex);
						if (match) return !this.options.hasOwnProperty(match[0]);

						// name <email@address.com>
						regex = new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i');
						match = input.match(regex);
						if (match) return !this.options.hasOwnProperty(match[2]);

						return false;
					},
					create: function(input) {
						if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
							return {email: input};
						}
						var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
						if (match) {
							return {
								email : match[2],
								name  : $.trim(match[1])
							};
						}
						alert('Invalid email address.');
						return false;
					}
				});
			</script>
		</section>

		<!-- ************** Single Item Select Demo ************** -->
		<section class="demo">
			<div class="header">
				Single Item Select
			</div>
			<div class="sandbox">
				<label for="select-beast">Beast:</label>
				<select id="select-beast" class="demo-default" placeholder="Select a person...">
					<option value="">Select a person...</option>
					<option value="1">Chuck Testa</option>
					<option value="4">Sage Cattabriga-Alosa</option>
					<option value="3">Nikola Tesla</option>
				</select>
			</div>
			<div class="description">
				The most vanilla of examples.
			</div>
			<script class="show">
				$('#select-beast').selectize({
					create: true,
					sortField: 'text'
				});
			</script>
		</section>

		<!-- ************** Optgroup Demo ************** -->
		<section class="demo">
			<div class="header">
				Option Groups
			</div>
			<div class="sandbox">
				<label for="select-gear">Gear:</label>
				<select id="select-gear" class="demo-default" placeholder="Select gear...">
					<option value="">Select gear...</option>
					<optgroup label="Climbing">
						<option value="pitons">Pitons</option>
						<option value="cams">Cams</option>
						<option value="nuts">Nuts</option>
						<option value="bolts">Bolts</option>
						<option value="stoppers">Stoppers</option>
						<option value="sling">Sling</option>
					</optgroup>
					<optgroup label="Skiing">
						<option value="skis">Skis</option>
						<option value="skins">Skins</option>
						<option value="poles">Poles</option>
					</optgroup>
				</select>
			</div>
			<div class="description">
				Selectize supports &lt;optgroup&gt; rendering (as of v0.5.0).
			</div>
			<script class="show">
				$('#select-gear').selectize({
					sortField: 'text'
				});
			</script>
		</section>

		<!-- ************** Max Items Demo ************** -->
		<section class="demo">
			<div class="header">
				Max Items
			</div>
			<div class="sandbox">
				<label for="select-state">States:</label>
				<select id="select-state" name="state[]" multiple class="demo-default" style="width:70%" placeholder="Select a state...">
					<option value="">Select a state...</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA" selected>California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY" selected>Wyoming</option>
				</select>
			</div>
			<div class="description">
				This example only allows 3 items. Select one more item and the control will be disabled
				until one or more are deleted.
			</div>
			<script class="show">
				$('#select-state').selectize({
					maxItems: 3
				});
			</script>
		</section>

		<!-- ************** Country Selector Demo ************** -->
		<section class="demo">
			<div class="header">
				Country Selector
			</div>
			<div class="sandbox">
				<label for="select-country">Country:</label>
				<select id="select-country" class="demo-default" placeholder="Select a country...">
					<option value="">Select a country...</option>
					<option value="AF">Afghanistan</option>
					<option value="AX">&Aring;land Islands</option>
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
					<option value="CI">C&ocirc;te d'Ivoire</option>
					<option value="HR">Croatia</option>
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
					<option value="LY">Libyan Arab Jamahiriya</option>
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
					<option value="RE">R&eacute;union</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="BL">Saint Barth&eacute;lemy</option>
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
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Islands</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="GS">South Georgia and the South Sandwich Islands</option>
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
			<div class="description">
				A good example of (1) support for international characters (diacritics) and (2) how items are scored and sorted.
				Try typing "islands", for instance.
			</div>
			<script class="show">
				$('#select-country').selectize();
			</script>
		</section>

		<!-- ************** Github Demo ************** -->
		<section class="demo">
			<div class="header">
				Remote Source — Github
			</div>
			<div class="sandbox">
				<label for="select-repo">Repository:</label>
				<select id="select-repo" class="repositories" placeholder="Pick a repository...">
					<option selected value="https://github.com/brianreavis/selectize.js" data-data="{&quot;type&quot;:&quot;repo&quot;,&quot;username&quot;:&quot;brianreavis&quot;,&quot;name&quot;:&quot;selectize.js&quot;,&quot;owner&quot;:&quot;brianreavis&quot;,&quot;homepage&quot;:null,&quot;description&quot;:&quot;A highly customizable select control with autocomplete.&quot;,&quot;language&quot;:&quot;JavaScript&quot;,&quot;watchers&quot;:6,&quot;followers&quot;:6,&quot;forks&quot;:0,&quot;size&quot;:216,&quot;open_issues&quot;:1,&quot;score&quot;:14.659029,&quot;has_downloads&quot;:true,&quot;has_issues&quot;:true,&quot;has_wiki&quot;:true,&quot;fork&quot;:false,&quot;private&quot;:false,&quot;url&quot;:&quot;https://github.com/brianreavis/selectize.js&quot;,&quot;created&quot;:&quot;2012-08-29T18:31:57Z&quot;,&quot;created_at&quot;:&quot;2012-08-29T18:31:57Z&quot;,&quot;pushed_at&quot;:&quot;2013-05-05T19:13:48Z&quot;,&quot;pushed&quot;:&quot;2013-05-05T19:13:48Z&quot;}">selectize.js</option>
				</select>
			</div>
			<div class="description">
				This demo shows how to integrate third-party data from the GitHub API.
			</div>
			<script class="show">
				$('#select-repo').selectize({
					valueField: 'url',
					labelField: 'name',
					searchField: 'name',
					create: false,
					render: {
						option: function(item, escape) {
							return '<div>' +
								'<span class="title">' +
								'<span class="name"><i class="icon ' + (item.fork ? 'fork' : 'source') + '"></i>' + escape(item.name) + '</span>' +
								'<span class="by">' + escape(item.username) + '</span>' +
								'</span>' +
								'<span class="description">' + escape(item.description) + '</span>' +
								'<ul class="meta">' +
								(item.language ? '<li class="language">' + escape(item.language) + '</li>' : '') +
								'<li class="watchers"><span>' + escape(item.watchers) + '</span> watchers</li>' +
								'<li class="forks"><span>' + escape(item.forks) + '</span> forks</li>' +
								'</ul>' +
								'</div>';
						}
					},
					score: function(search) {
						var score = this.getScoreFunction(search);
						return function(item) {
							return score(item) * (1 + Math.min(item.watchers / 100, 1));
						};
					},
					load: function(query, callback) {
						if (!query.length) return callback();
						$.ajax({
							url: 'https://api.github.com/legacy/repos/search/' + encodeURIComponent(query),
							type: 'GET',
							error: function() {
								callback();
							},
							success: function(res) {
								callback(res.repositories.slice(0, 10));
							}
						});
					}
				});
			</script>
		</section>

		<!-- ************** Rotten Tomatoes Demo ************** -->
		<section class="demo">
			<div class="header">
				Remote Source — Rotten Tomatoes
			</div>
			<div class="sandbox">
				<label for="select-movie">Movie:</label>
				<select id="select-movie" class="movies" placeholder="Find a movie..."></select>
			</div>
			<div class="description">
				This demo shows how to integrate third-party data from the Rotten Tomatoes API. Try searching for "Iron Man".
				<strong>Note:</strong> if this doesn't work, it's because the API limit has been reached... try again later :)
			</div>
			<script class="show">
				$('#select-movie').selectize({
					valueField: 'title',
					labelField: 'title',
					searchField: 'title',
					options: [],
					create: false,
					render: {
						option: function(item, escape) {
							var actors = [];
							for (var i = 0, n = item.abridged_cast.length; i < n; i++) {
								actors.push('<span>' + escape(item.abridged_cast[i].name) + '</span>');
							}

							return '<div>' +
								'<img src="' + escape(item.posters.thumbnail) + '" alt="">' +
								'<span class="title">' +
								'<span class="name">' + escape(item.title) + '</span>' +
								'</span>' +
								'<span class="description">' + escape(item.synopsis || 'No synopsis available at this time.') + '</span>' +
								'<span class="actors">' + (actors.length ? 'Starring ' + actors.join(', ') : 'Actors unavailable') + '</span>' +
								'</div>';
						}
					},
					load: function(query, callback) {
						if (!query.length) return callback();
						$.ajax({
							url: 'http://api.rottentomatoes.com/api/public/v1.0/movies.json',
							type: 'GET',
							dataType: 'jsonp',
							data: {
								q: query,
								page_limit: 10,
								apikey: '3qqmdwbuswut94jv4eua3j85'
							},
							error: function() {
								callback();
							},
							success: function(res) {
								callback(res.movies);
							}
						});
					}
				});
			</script>
		</section>

		<!-- ************** Cities Demo ************** -->
		<section class="demo">
			<div class="header">
				City / State Selection
			</div>
			<div class="sandbox">
				<label for="select-cities-state">State:</label>
				<select id="select-cities-state" placeholder="Pick a state...">
					<option value="">Select a state...</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
				<label for="select-cities-city" style="margin-top:20px">City:</label>
				<select id="select-cities-city" placeholder="Pick a city..."></select>
			</div>
			<div class="description">
				A demonstration showing how to use the API to cascade controls for a classic state / city selector.
				<strong>Note:</strong> The API for fetching cities is a little spotty, so if it fails to list cities, that's what's going on (try another state).
			</div>
			<script class="show">
				var xhr;
				var select_state, $select_state;
				var select_city, $select_city;

				$select_state = $('#select-cities-state').selectize({
					onChange: function(value) {
						if (!value.length) return;
						select_city.disable();
						select_city.clearOptions();
						select_city.load(function(callback) {
							xhr && xhr.abort();
							xhr = $.ajax({
								url: 'http://www.corsproxy.com/api.sba.gov/geodata/primary_city_links_for_state_of/' + value + '.json',
								success: function(results) {
									select_city.enable();
									callback(results);
								},
								error: function() {
									callback();
								}
							})
						});
					}
				});

				$select_city = $('#select-cities-city').selectize({
					valueField: 'name',
					labelField: 'name',
					searchField: ['name']
				});

				select_city  = $select_city[0].selectize;
				select_state = $select_state[0].selectize;

				select_city.disable();
			</script>
		</section>

	</div>
	<div class="wrapper tab-content" id="plugins" style="display:none">

		<!-- ************** "restore_on_backspace" Plugin Demo ************** -->
		<section class="demo plugin">
			<div class="header">
				"restore_on_backspace"
			</div>
			<div class="sandbox">
				<label for="input-tags2">Tags:</label>
				<input type="text" id="input-tags2" class="demo-default" value="web development,design">
			</div>
			<div class="description">
				Press the [backspace] key and go back to editing the item without it being fully removed.
			</div>
			<script class="show">
				$('#input-tags2').selectize({
					plugins: ['restore_on_backspace'],
					delimiter: ',',
					persist: false,
					create: function(input) {
						return {
							value: input,
							text: input
						}
					}
				});
			</script>
		</section>


		<!-- ************** "remove_button" Plugin Demo ************** -->
		<section class="demo plugin">
			<div class="header">
				"remove_button"
			</div>
			<div class="sandbox">
				<label for="input-tags3">Tags:</label>
				<input type="text" id="input-tags3" class="demo-default" value="science,biology,chemistry,physics">
			</div>
			<div class="description">
				This plugin adds classic a classic remove button to each item for behavior that mimics Select2 and Chosen.
			</div>
			<script class="show">
				$('#input-tags3').selectize({
					plugins: ['remove_button'],
					delimiter: ',',
					persist: false,
					create: function(input) {
						return {
							value: input,
							text: input
						}
					}
				});
			</script>
		</section>


		<!-- ************** "drag_drop" Plugin Demo ************** -->
		<section class="demo plugin">
			<div class="header">
				"drag_drop"
			</div>
			<div class="sandbox">
				<label for="input-draggable">Tags:</label>
				<input type="text" id="input-draggable" class="demo-default" value="drag,these,items,around,with,your,mouse">
			</div>
			<div class="description">
				Adds drag-and-drop support for easily rearranging selected items. Requires jQuery UI (sortable).
			</div>
			<script class="show">
				$('#input-draggable').selectize({
					plugins: ['drag_drop'],
					delimiter: ',',
					persist: false,
					create: function(input) {
						return {
							value: input,
							text: input
						}
					}
				});
			</script>
		</section>

		<!-- ************** "optgroup_columns" Plugin Demo ************** -->
		<section class="demo plugin">
			<div class="header">
				"optgroup_columns"
			</div>
			<div class="sandbox">
				<label for="select-car">Car:</label>
				<select id="select-car" placeholder="Select a car..."></select>
			</div>
			<div class="description">
				A plugin by <a href="https://github.com/sjhewitt" target="_blank">Simon Hewitt</a> that
				renders optgroups horizontally with convenient left/right keyboard navigation.
			</div>
			<script class="show">
				$("#select-car").selectize({
					options: [
						{id: 'avenger', make: 'dodge', model: 'Avenger'},
						{id: 'caliber', make: 'dodge', model: 'Caliber'},
						{id: 'caravan-grand-passenger', make: 'dodge', model: 'Caravan Grand Passenger'},
						{id: 'challenger', make: 'dodge', model: 'Challenger'},
						{id: 'ram-1500', make: 'dodge', model: 'Ram 1500'},
						{id: 'viper', make: 'dodge', model: 'Viper'},
						{id: 'a3', make: 'audi', model: 'A3'},
						{id: 'a6', make: 'audi', model: 'A6'},
						{id: 'r8', make: 'audi', model: 'R8'},
						{id: 'rs-4', make: 'audi', model: 'RS 4'},
						{id: 's4', make: 'audi', model: 'S4'},
						{id: 's8', make: 'audi', model: 'S8'},
						{id: 'tt', make: 'audi', model: 'TT'},
						{id: 'avalanche', make: 'chevrolet', model: 'Avalanche'},
						{id: 'aveo', make: 'chevrolet', model: 'Aveo'},
						{id: 'cobalt', make: 'chevrolet', model: 'Cobalt'},
						{id: 'silverado', make: 'chevrolet', model: 'Silverado'},
						{id: 'suburban', make: 'chevrolet', model: 'Suburban'},
						{id: 'tahoe', make: 'chevrolet', model: 'Tahoe'},
						{id: 'trail-blazer', make: 'chevrolet', model: 'TrailBlazer'},
					],
					optgroups: [
						{id: 'dodge', name: 'Dodge'},
						{id: 'audi', name: 'Audi'},
						{id: 'chevrolet', name: 'Chevrolet'}
					],
					labelField: 'model',
					valueField: 'id',
					optgroupField: 'make',
					optgroupLabelField: 'name',
					optgroupValueField: 'id',
					optgroupOrder: ['chevrolet', 'dodge', 'audi'],
					searchField: ['model'],
					plugins: ['optgroup_columns']
				});
			</script>
		</section>

	</div>
</div>
<div class="wrapper">
	<h2>Find out more&hellip;</h2>
	<ul id="links">
		<li><a href="https://github.com/brianreavis/selectize.js" target="_blank">GitHub Repository</a></li>
		<li><a href="https://github.com/brianreavis/selectize.js/tree/master/examples" target="_blank">Examples</a></li>
		<li><a href="https://github.com/brianreavis/selectize.js/blob/master/docs/usage.md" target="_blank">Usage Documentation</a></li>
		<li><a href="https://github.com/brianreavis/selectize.js/blob/master/docs/api.md" target="_blank">API Documentation</a></li>
		<li><a href="https://github.com/brianreavis/selectize.js/blob/master/docs/plugins.md" target="_blank">Plugin Documentation</a></li>
	</ul>
	<footer>Copyright &copy; 2013 — Brian Reavis &amp; contributors.</footer>
</div>
</body>
</html>
