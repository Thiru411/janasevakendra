<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('inc/script-top.php'); ?> 
</head>
<body class="<?=body_style?>">
<div class="wrapper">
  <?php $this->load->view('inc/nav-top.php'); ?> 
  <?php $this->load->view('inc/nav-side.php'); ?> 
  <div class="content-wrapper">
  <section class="content-header">
      <h1 style="color:blue"> New Pan Application </h1>
      <ol class="breadcrumb">
         <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="https://ruraleservices.com/agent/dashboard">Home</a> </li>
         <li class="active">Pan New Application</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-md-12 star">
            <!-- Horizontal Form -->
            <div class="box box-info">
               <div class="box-header with-border">
<!--                  <h3 class="box-title">Pan Application View</h3>-->
               </div>
               
                                
                           <!-- /.box-header --> 
               <!-- form start -->
               <form onsubmit="return getvalid();" class="form-horizontal rural-form" role="form" name="myform" id="myform" method="post" action="" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="col-sm-9">
                        
                     <div class="form-group">
                        <label class="col-sm-3">CATEGORY OF APPLICANT<span>*</span></label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" name="category_of_applicant" id="category_of_applicant" onchange="changeForm(this.value)">
<!--                                <option value="please_select">Please Select</option>-->
                                                                    <option value="Individual" selected="">Individual</option>
                                                                <option value="Firm">Firm</option>
                                <option value="Association_of_Persons">Association of Persons</option>
                                <option value="Trust">Trust</option>
                                <option value="Government">Government</option>
                                <option value="Local_Authority">Local Authority</option>
                                <option value="Hindu_Undivided_Family">Hindu Undivided Family</option>
                                                                
                               <!--  <option value="Company">Company</option>
                                
                                <option value="Artificial_Juridical_Person">Artificial Juridical Person</option>
                                <option value="Limited_Liability_Partnership">Limited Liability Partnership</option>-->
                            </select>
                        </div>
                        <div class="col-sm-3"><a href="https://youtu.be/o-EqMJ5pPlk" target="_blank"><img style="height: 30px;width: 110px;" src="https://ruraleservices.com/images/video.png"></a></div>
                     </div>
                                          <div class="form-group app_name">
                        <div class="col-sm-2 tl_label">
                            <label for="">APPLICANT'S NAME<span>*</span></label>
                        </div>
                        <div class="col-sm-1" style="padding-right:0px;padding-left: 5px;">
                            <label for="">Title</label>
                            <select name="title" id="title" class="form-control input-sm" onchange="selectGender(this.value)">
                                <option value="">Select</option>
                                <option value="1">SHRI</option>
                                <option value="2">SMT</option>
                                <option value="3">KUMARI</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="">LAST NAME/ SURNAME</label>
                            <input type="text" name="lastname" id="lastname" maxlength="25" placeholder="Last Name/ Surname" class="form-control input-sm nospace capital">
                        </div>
                        <div class="col-sm-3 firstname">
                            <label for="">FIRST NAME</label>
                            <input type="text" name="firstname" id="firstname" maxlength="25" placeholder="First Name" class="form-control input-sm nospace capital">
                        </div>
                        <div class="col-sm-3 middlename">
                            <label for="">MIDDLE NAME</label>
                            <input type="text" name="middlename" id="middlename" maxlength="25" placeholder="Middle Name" class="form-control input-sm char capital">
                        </div>
                     </div>
                     <div class="form-group father">
                        <label class="col-sm-3">SELECT RELATION<span>*</span></label>
                        <div class="col-sm-3">
                        <select class="form-control input-sm" name="relation" id="relation" onchange="toggleRelation(this.value)" autocomplete="off">
                            <option value="0" selected="">Father</option>
                            <option value="1">Mother</option>
                        </select>
                        </div>
                     </div>
                     <div class="form-group father">
                        <label class="col-sm-3 tl_label"><span id="lbl_rel" style="color:#333">FATHER</span>'s NAME<span>*</span></label>
                        <div class="col-sm-3">
                            <label for="" id="rel_lname">FATHER'S LAST NAME</label>
                            <input type="text" name="father_lastname" id="father_lastname" placeholder="Father Last Name" class="form-control input-sm nospace capital">
                        </div>
                        <div class="col-sm-3">
                            <label for="" id="rel_fname">FATHER's FIRST NAME</label>
                            <input type="text" name="father_firstname" id="father_firstname" placeholder="Father First Name" class="form-control input-sm nospace capital">
                        </div>
                        <div class="col-sm-3">
                            <label for="" id="rel_mname">FATHER's MIDDLE NAME</label>
                            <input type="text" name="father_middlename" id="father_middlename" placeholder="Father Middle Name" class="form-control input-sm char capital">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3">NAME ON CARD<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" name="name_on_card" id="name_on_card" maxlength="75" oninput="showCount(this.value)" onchange="fillNameasPerAadhaar(this.value)" placeholder="Name on Card" class="form-control input-sm nameoncard capital">
                            <label id="countLabel" class="lower-case" style="display:none;">Characters <span class="label bg-purple characters" id="charCount">75</span> Words <span id="wordCount" class="label bg-purple words">1</span></label>
                        </div>
                        <label class="col-sm-3 regnodiv" style="display: none;">REGISTRATION NO<span>*</span></label>
                        <div class="col-sm-3 regnodiv" style="display: none;">
                            <input type="text" name="regno" id="regno" maxlength="30" placeholder="Registration Number" class="form-control input-sm capital alpha1">
                        </div>
                        <label class="col-sm-3 gender">GENDER</label>
                        <div class="col-sm-3 gender">
                            <select name="gender" id="gender" class="form-control input-sm" onchange="selectTitle(this.value)">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="TransGender">Transgender</option>
                            </select>
                        </div>
                     </div>   
                     <div class="form-group">
                        <label class="col-sm-3" id="dob_label">DATE OF BIRTH<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" name="date_of_birth" id="date_of_birth" onblur="calculateAge(this.value)" onchange="calculateAge(this.value)" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off" maxlength="10" placeholder="Date Of Birth/Incorporation" class="form-control input-sm date">
                            <span id="dob_error" style="color:red;font-weight:bold"></span>
                            <label id="ageText" class="lower-case" style="display:none;margin-left:5px;"></label>
                        </div>
                        <label class="col-sm-3">MOBILE NO.<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="hidden" value="91" maxlength="2" minlength="2" id="isd" name="isd_code" placeholder="ISD CODE" class="form-control number">
                            <input type="text" id="telephone" name="telephone_no" minlength="10" maxlength="10" placeholder="Mobile No." class="form-control input-sm number">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3 othrChange aadhar">AADHAAR NO<span>*</span></label>
                        <div class="col-sm-3 othrChange aadhar">
                            <input type="hidden" name="aadhaar_eid" id="aadhaar_eid" value="Aadhaar">
                            <input type="text" onkeyup="showTxt(this.value, 'n')" onchange="loadConfirmAadhaar(this.value)" maxlength="12" name="aadhaarno" id="aadhaarno" placeholder="12 Digits UID NO" class="form-control input-sm number">
                            <span style="color:red;font-size:large" id="adhrtxt"></span>
                        </div>
                        <label class="col-sm-3">EMAIL ID<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" name="email_id" id="email_id" maxlength="40" placeholder="Email ID" class="form-control input-sm capital">
                            <input type="hidden" name="address_for_communication" id="address_for_communication" value="INDIAN">
                        </div>
                     </div>
                     <div class="form-group tandiv" style="display: none;">
                        <label class="col-sm-3">TAN NO<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" name="tan" id="tan" maxlength="10" placeholder="TAN No" class="form-control input-sm capital alpha">
                        </div> 
                     </div>
                     <div class="form-group aadhar">                        
                        <label class="col-sm-3" style="display:none">NAME AS PER AADHAAR<span>*</span></label>
                        <div class="col-sm-3" style="display:none">
                            <input type="text" name="name_as_per_aadhar" id="name_as_per_aadhar" placeholder="Name As Per Aadhaar" class="form-control input-sm char capital">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-3"><label>ADDRESS</label></div>
                        <div class="col-sm-6 addLbl">
                            <p style="color:red;font-weight: 600;margin-top: 3px;">NOTE: Please fill Address details as per Aadhaar</p>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="col-sm-3">Flat/Door/Block no<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" id="flat" name="flat" placeholder="Flat/Door/Block no" class="form-control input-sm capital saddr" maxlength="25">
                        </div>
                        <label class="col-sm-3">Premises/Building/Village<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Premises/Building/Village" id="premises" name="premises" class="form-control input-sm capital addr" maxlength="25">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">ROAD/STREET/POST OFFICE<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Road/Street/Lane/Post Office" id="lane" name="lane" class="form-control input-sm capital addr" maxlength="25">
                        </div>
                        <label class="col-sm-3">AREA/TALUKA/SUB DIVISION<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Area/Taluka/Sub division" id="area" name="area" class="form-control input-sm capital char" maxlength="25">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-3">STATE<span>*</span></label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" name="state" id="state" onchange="loadDistricts(this.value)">
                                <option value="">Please Select</option>
                                <option value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option><option value="ANDHRA PRADESH">ANDHRA PRADESH</option><option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option><option value="ASSAM">ASSAM</option><option value="BIHAR">BIHAR</option><option value="CHANDIGARH">CHANDIGARH</option><option value="CHHATTISGARH">CHHATTISGARH</option><option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option><option value="DAMAN AND DIU">DAMAN AND DIU</option><option value="DELHI">DELHI</option><option value="GOA">GOA</option><option value="GUJARAT">GUJARAT</option><option value="HARYANA">HARYANA</option><option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option><option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option><option value="JHARKHAND">JHARKHAND</option><option value="KARNATAKA">KARNATAKA</option><option value="KERALA">KERALA</option><option value="LADAKH">LADAKH</option><option value="LAKSHADWEEP">LAKSHADWEEP</option><option value="MADHYA PRADESH">MADHYA PRADESH</option><option value="MAHARASHTRA">MAHARASHTRA</option><option value="MANIPUR">MANIPUR</option><option value="MEGHALAYA">MEGHALAYA</option><option value="MIZORAM">MIZORAM</option><option value="NAGALAND">NAGALAND</option><option value="ODISHA">ODISHA</option><option value="OTHER">OTHER</option><option value="PONDICHERRY">PONDICHERRY</option><option value="PUNJAB">PUNJAB</option><option value="RAJASTHAN">RAJASTHAN</option><option value="SIKKIM">SIKKIM</option><option value="TAMILNADU">TAMILNADU</option><option value="TELANGANA">TELANGANA</option><option value="TRIPURA">TRIPURA</option><option value="UTTAR PRADESH">UTTAR PRADESH</option><option value="UTTARAKHAND">UTTARAKHAND</option><option value="WEST BENGAL">WEST BENGAL</option>                            </select>
                        </div>
                        <label class="col-sm-3">TOWN/DISTRICT<span>*</span></label>
                        <div class="col-sm-3">
                            <!--<input type="text" placeholder="Town/District" id="town" name="town" class="form-control input-sm capital char" maxlength="25" />-->
                            <select name="town" id="town" class="form-control input-sm" onchange="selectAOCity(this.value)">
                                <option value="">Select</option>
                            </select>
                        </div>
                     </div>
                    <div class="form-group">
                        <label class="col-sm-3">PINCODE<span>*</span></label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Pincode" minlength="6" maxlength="6" id="pincode" name="pincode" class="form-control input-sm number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">PROOF OF IDENTITY<span>*</span></label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm poi" name="p_o_I_individual" id="p_o_I_individual">
                                <!--<option value="0">Please Select</option>-->
                                <option value="15">AADHAAR Card issued by the Unique Identification Authority of India</option>                            </select>
                            <select class="form-control input-sm poi" name="p_o_I_firm" id="p_o_I_firm" style="display:none">
                                <option value="16">Registration certificate issued by Registrar of Firm or Partnership Deed (In Copy)</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_aop" name="p_o_I_aop" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="17">Agreement (In Copy)</option><option value="18">Certificate of Registration number issued by Charity Commissioner (In Copy)</option><option value="19">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="20">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_Trust" name="p_o_I_Trust" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="21">Trust Deed (In Copy)</option><option value="22">Certificate of Registration number issued by Charity Commissioner (In Copy)</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_Government" name="p_o_I_Government" style="display:none">
                                <option value="23">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_localAuthority" name="p_o_I_localAuthority" style="display:none">
                                <option value="24">Agreement (In Copy)</option><option value="25" selected="">Certificate of Registration number issued by Charity Commissioner (In Copy)</option><option value="26">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="27">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_HUF" name="p_o_I_HUF" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="29">AADHAAR Card issued by UIDAI (In Copy)</option><option value="31">Arms License (In Copy)</option><option value="32">Bank certificate in original on letter head of the branch ( alongwith  name &amp; stamp of issuing officer) containing duly attested photograph and bank A/c no of the Applicant</option><option value="33">Central Govt Health Scheme  Card or Ex serviceman Contributory Health Scheme photo card (In Copy)</option><option value="35">Certificate of identity in original signed from Gazetted Officer</option><option value="36">Driving License (In Copy)</option><option value="37">Passport (In Copy)</option><option value="38">Pensioner Card having photograph of Applicant (In Copy)</option><option value="39">Photo ID card issued by Central Govt or State Govt or a Public Sector Undertaking (In Copy)</option><option value="40">Ration Card having photograph of the applicant. (In Copy)</option><option value="41">Voters ID card (In Copy)</option>                            </select>
                            <select class="form-control input-sm poi" id="p_o_I_BOI" name="p_o_I_BOI" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="42">Agreement (In Copy)</option><option value="43">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option><option value="44">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="45">Certificate of Registration  number  issued by Charity Commissioner (In Copy)</option>                            </select>
                        </div>
                        <label class="col-sm-3">PROOF OF ADDRESS<span>*</span></label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm poa" id="p_o_a_individual" name="p_o_a_individual">
                                <!--<option value="0">Please Select</option>-->
                                <option value="21">AADHAAR Card issued by the Unique Identification Authority of India</option>                            </select>
                            <select class="form-control input-sm poa" name="p_o_a_firm" id="p_o_a_firm" style="display:none">
                                <!--<option value="0">Please Select</option>-->
                                <option value="25">Registration certificate issued by Registrar of Firm or Partnership Deed (In Copy)</option>                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_aop" name="p_o_a_aop" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="26">Agreement (In Copy)</option><option value="27">Certificate of Registration number issued by Charity Commissioner (In Copy)</option><option value="28">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="29">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>    
                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_Trust" name="p_o_a_Trust" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="30">Trust Deed (In Copy)</option><option value="31">Certificate of Registration number issued by Charity Commissioner (In Copy)</option>                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_Government" name="p_o_a_Government" style="display:none">
                                <!--<option value="0">Please Select</option>-->
                                <option value="32">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_localAuthority" name="p_o_a_localAuthority" style="display:none">
                                <!--<option value="0">Please Select</option>-->
                                <option value="33">Agreement (In Copy)</option><option value="34" selected="">Certificate of Registration number issued by Charity Commissioner (In Copy)</option><option value="35">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="36">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_HUF" name="p_o_a_HUF" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="38">AADHAAR Card issued by UIDAI (In Copy)</option><option value="39">Allotment letter of accomodation issued by Central Govt or State Govt not more than 3 Years old (In Copy)</option><option value="41">Bank Account Statement not more than 3 months old (In Copy)</option><option value="43">Certificate of address in original signed from Gazetted Officer</option><option value="44">Consumer Gas connection card or book or piped gas bill not more than 3 months old (In Copy)</option><option value="45">Copy Electricity bill not more than 3 months old.</option><option value="47">Credit card statement not more than 3 months old (In Copy)</option><option value="48">Depository account statement not more than 3 months old (In Copy)</option><option value="49">Domicile certificate issued by Government (In Copy)</option><option value="50">Driving License (In Copy)</option><option value="51">Employer certificate in ORIGINAL</option><option value="52">Latest Property tax assessment order (In Copy)</option><option value="53">Passport (In Copy)</option><option value="54">Passport of  the Spouse  (In Copy)</option><option value="55">Post office pass book having address of applicant (In Copy)</option><option value="56">Property registration document (In Copy)</option><option value="57">Voters ID card (In Copy)</option><option value="58">Water Bill not more than 3 months old (In Copy)</option>                            </select>
                            <select class="form-control input-sm poa" id="p_o_a_BOI" name="p_o_a_BOI" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="59">Agreement (In Copy)</option><option value="60">Any Other Document originating from Central or State Government Department establishing the Identity/ Address/DOI of such person</option><option value="61">Certificate  of  Registration  number  issued by Charity Commissioner (In Copy)</option><option value="62">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option>                            </select>
                        </div>
                     </div>
                     <div class="form-group dob">
                        <label class="col-sm-3">PROOF OF <span id="dobprf_label">DOB</span><span>*</span></label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm pod" name="p_o_dob_individual" id="p_o_dob_individual">
                                <!--<option value="0">Please Select</option>-->
                                <option value="10">AADHAAR Card issued by the Unique Identification Authority of India</option>                            </select>
                            <select class="form-control input-sm pod" name="p_o_dob_firm" id="p_o_dob_firm" style="display:none">
                                <option value="15">Registration certificate issued by Registrar of Firm or Partnership Deed (In Copy)</option>                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_aop" name="p_o_dob_aop" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="16">Agreement (In Copy)</option><option value="17">Registration Certificate number issued by Charity Commissioner (In Copy)</option><option value="18" selected="">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="19">Any Other Document originating from Central or State Government establishing the Identity/ Address/DOI of such person</option>    
                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_Trust" name="p_o_dob_Trust" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="20">Trust Deed (In Copy)</option><option value="21">Certificate of Registration number issued by Charity Commissioner (In Copy)</option>                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_Government" name="p_o_dob_Government" style="display:none">
                                <!--<option value="0">Please Select</option>-->
                                <option value="22">Any Other Document originating from Central or State Government establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_localAuthority" name="p_o_dob_localAuthority" style="display:none">
                                <!--<option value="0">Please Select</option>-->
                                <option value="23">Agreement (In Copy)</option><option value="24" selected="">Registration Certificate number issued by Charity Commissioner (In Copy)</option><option value="25">Certificate from registrar of cooperative Society / Competent Authority. (In Copy)</option><option value="26">Any Other Document originating from Central or State Government establishing the Identity/ Address/DOI of such person</option>                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_HUF" name="p_o_dob_HUF" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="28">Affidavit sworn before Magistrate stating Date of Birth (In Copy)</option><option value="30">Birth Certificate issued by Municipal Authority or any office authorized to issue Birth &amp; Death Certificate by Registrar of Birth and Deaths or the Indian Consulate (In Copy)</option><option value="31">Domicile certificate issued by Government (In Copy)</option><option value="32">Driving License (In Copy)</option><option value="33">Marriage Certificate issued by Registrar of Marriages (In Copy)</option><option value="34">Matriculation certificate (In Copy)</option><option value="35">Passport (In Copy)</option><option value="36">Pension payment order (In Copy)</option>                            </select>
                            <select class="form-control input-sm pod" id="p_o_dob_BOI" name="p_o_dob_BOI" style="display:none">
                                <option value="0">Please Select</option>
                                <option value="37">Agreement (In Copy)</option><option value="38">Any Other Document originating from Central or State Government establishing the Identity/ Address/DOI of such person</option><option value="39">Certificate from registrar of cooperative Society / Competent Authority.(In Copy)</option><option value="40">Registration Certificate number issued by Charity Commissioner (In Copy)</option>                            </select>
                        </div>
                        <label class="col-sm-3 office" style="display:none">Dispatch PAN to office Address (Extra Rs 10/-)</label>
                        <div class="col-sm-3 office" style="display:none">
                            <input type="checkbox" id="isoffice" name="isoffice" value="1">
                        </div>
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-3 lower-case" for="form-field-1">For Help on AO Code, SELECT CITY</label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" id="ao_city" name="ao_city" onchange="loadAOCode(this.value)">
                                <option value="">Select City</option>
                                <option value="ABOHAR">ABOHAR</option><option value="ABU">ABU</option><option value="ADILABAD">ADILABAD</option><option value="ADONI">ADONI</option><option value="AGARTALA">AGARTALA</option><option value="AGRA">AGRA</option><option value="AHMEDABAD">AHMEDABAD</option><option value="AHMEDNAGAR">AHMEDNAGAR</option><option value="AIZAWL">AIZAWL</option><option value="AJMER">AJMER</option><option value="AKOLA">AKOLA</option><option value="ALAPPUZHA">ALAPPUZHA</option><option value="ALIGARH">ALIGARH</option><option value="ALIPURDUAR">ALIPURDUAR</option><option value="ALLAHABAD">ALLAHABAD</option><option value="ALMORA">ALMORA</option><option value="ALUVA">ALUVA</option><option value="ALWAR">ALWAR</option><option value="AMALAPURAM">AMALAPURAM</option><option value="AMBALA">AMBALA</option><option value="AMBEDKAR NAGAR">AMBEDKAR NAGAR</option><option value="AMBIKAPUR">AMBIKAPUR</option><option value="AMETHI">AMETHI</option><option value="AMRAWATI">AMRAWATI</option><option value="AMRELI">AMRELI</option><option value="AMRITSAR">AMRITSAR</option><option value="ANAKAPALLE">ANAKAPALLE</option><option value="ANAND">ANAND</option><option value="ANANTAPUR">ANANTAPUR</option><option value="ANDAMAN &amp; NICOBAR">ANDAMAN &amp; NICOBAR</option><option value="ANGUL">ANGUL</option><option value="ARA">ARA</option><option value="ASANSOL">ASANSOL</option><option value="ASHOK NAGAR">ASHOK NAGAR</option><option value="AURAIYA">AURAIYA</option><option value="AURANGABAD">AURANGABAD</option><option value="AZAMGARH">AZAMGARH</option><option value="BADAYUN">BADAYUN</option><option value="BAGALKOT">BAGALKOT</option><option value="BAHRAICH">BAHRAICH</option><option value="BAJPUR">BAJPUR</option><option value="BALAGHAT">BALAGHAT</option><option value="BALASORE">BALASORE</option><option value="BALLIA">BALLIA</option><option value="BALOTRA">BALOTRA</option><option value="BALURGHAT">BALURGHAT</option><option value="BANDA">BANDA</option><option value="BANGALORE">BANGALORE</option><option value="BANKURA">BANKURA</option><option value="BANSWARA">BANSWARA</option><option value="BAPATLA">BAPATLA</option><option value="BARABANKI">BARABANKI</option><option value="BARAN">BARAN</option><option value="BARAUT">BARAUT</option><option value="BARDOLI">BARDOLI</option><option value="BAREILLY">BAREILLY</option><option value="BARGARH">BARGARH</option><option value="BARIPADA">BARIPADA</option><option value="BARMER">BARMER</option><option value="BARNALA">BARNALA</option><option value="BARPETA">BARPETA</option><option value="BASTI">BASTI</option><option value="BATALA">BATALA</option><option value="BEAWER">BEAWER</option><option value="BEGUSARAI">BEGUSARAI</option><option value="BEHROR">BEHROR</option><option value="BELGAUM">BELGAUM</option><option value="BELLARY">BELLARY</option><option value="BERHAMPUR">BERHAMPUR</option><option value="BETTIAH">BETTIAH</option><option value="BETUL">BETUL</option><option value="BHADRAK">BHADRAK</option><option value="BHAGAL">BHAGAL</option><option value="BHAGALPUR">BHAGALPUR</option><option value="BHANDARA">BHANDARA</option><option value="BHARATPUR">BHARATPUR</option><option value="BHARUCH">BHARUCH</option><option value="BHATINDA">BHATINDA</option><option value="BHAVNAGAR">BHAVNAGAR</option><option value="BHAWANIPATNA">BHAWANIPATNA</option><option value="BHILAI">BHILAI</option><option value="BHILWARA">BHILWARA</option><option value="BHIMAVARAM">BHIMAVARAM</option><option value="BHIWADI">BHIWADI</option><option value="BHIWANI">BHIWANI</option><option value="BHOPAL">BHOPAL</option><option value="BHUBANESWAR">BHUBANESWAR</option><option value="BIDAR">BIDAR</option><option value="BIHARSHARIF">BIHARSHARIF</option><option value="BIJAPUR">BIJAPUR</option><option value="BIJNORE">BIJNORE</option><option value="BIKANER">BIKANER</option><option value="BILASPUR">BILASPUR</option><option value="BOKARO">BOKARO</option><option value="BOLANGIR">BOLANGIR</option><option value="BONGAIGAON">BONGAIGAON</option><option value="BULANDSHAHAR">BULANDSHAHAR</option><option value="BUNDI">BUNDI</option><option value="BURDWAN">BURDWAN</option><option value="BURHANPUR">BURHANPUR</option><option value="BUXAR">BUXAR</option><option value="BYRNIHAT">BYRNIHAT</option><option value="CHAIBASA">CHAIBASA</option><option value="CHAMARAJA NAGAR">CHAMARAJA NAGAR</option><option value="CHANDAUSI">CHANDAUSI</option><option value="CHANDIGARH">CHANDIGARH</option><option value="CHANDRAPUR">CHANDRAPUR</option><option value="CHAPRA">CHAPRA</option><option value="CHENNAI">CHENNAI</option><option value="CHHATARPUR">CHHATARPUR</option><option value="CHHINDWARA">CHHINDWARA</option><option value="CHIKABALLAPUR">CHIKABALLAPUR</option><option value="CHIKMAGALUR">CHIKMAGALUR</option><option value="CHIRALA">CHIRALA</option><option value="CHITRADURGA">CHITRADURGA</option><option value="CHITTOOR">CHITTOOR</option><option value="CHITTOR">CHITTOR</option><option value="CHURU">CHURU</option><option value="COIMBATORE">COIMBATORE</option><option value="COOCHBEHAR">COOCHBEHAR</option><option value="CUDDALORE">CUDDALORE</option><option value="CUTTACK">CUTTACK</option><option value="DADRI">DADRI</option><option value="DAHOD">DAHOD</option><option value="DALHOUSIE">DALHOUSIE</option><option value="DALTONGANJ">DALTONGANJ</option><option value="DAMAN">DAMAN</option><option value="DARBHANGA">DARBHANGA</option><option value="DARJEELING">DARJEELING</option><option value="DASUYA">DASUYA</option><option value="DAUSA">DAUSA</option><option value="DAVANAGERE">DAVANAGERE</option><option value="DEHRADUN">DEHRADUN</option><option value="DELHI">DELHI</option><option value="DEOBAND">DEOBAND</option><option value="DEOGHAR">DEOGHAR</option><option value="DEORIA">DEORIA</option><option value="DEWAS">DEWAS</option><option value="DHAMTARI">DHAMTARI</option><option value="DHANBAD">DHANBAD</option><option value="DHAR">DHAR</option><option value="DHARAMSHALA">DHARAMSHALA</option><option value="DHARMANAGAR">DHARMANAGAR</option><option value="DHARMAPURI">DHARMAPURI</option><option value="DHENKANAL">DHENKANAL</option><option value="DHUBRI">DHUBRI</option><option value="DHULE">DHULE</option><option value="DIGBOI">DIGBOI</option><option value="DIMAPUR">DIMAPUR</option><option value="DINDIGUL">DINDIGUL</option><option value="DULIAJAN">DULIAJAN</option><option value="DUMKA">DUMKA</option><option value="DUNGARPUR">DUNGARPUR</option><option value="DURGAPUR">DURGAPUR</option><option value="DWARKA">DWARKA</option><option value="ELURU">ELURU</option><option value="ERODE">ERODE</option><option value="ETAH">ETAH</option><option value="ETAWAH">ETAWAH</option><option value="FAIZABAD">FAIZABAD</option><option value="FARIDABAD">FARIDABAD</option><option value="FARIDKOT">FARIDKOT</option><option value="FARRUKHABAD">FARRUKHABAD</option><option value="FATEHABAD">FATEHABAD</option><option value="FATEHPUR">FATEHPUR</option><option value="FEROZEPUR">FEROZEPUR</option><option value="FIROZABAD">FIROZABAD</option><option value="GADAG">GADAG</option><option value="GANDHI DHAM">GANDHI DHAM</option><option value="GANDHI DHAM BHUJ">GANDHI DHAM BHUJ</option><option value="GANDHI DHAM MUDRA">GANDHI DHAM MUDRA</option><option value="GANDHIDHAM">GANDHIDHAM</option><option value="GANDHINAGAR">GANDHINAGAR</option><option value="GANGTOK">GANGTOK</option><option value="GAUTAM BUDH NAGAR">GAUTAM BUDH NAGAR</option><option value="GAY">GAY</option><option value="GHAZIABAD">GHAZIABAD</option><option value="GHAZIPUR">GHAZIPUR</option><option value="GIRIDIH">GIRIDIH</option><option value="GOALPARA">GOALPARA</option><option value="GODHRA">GODHRA</option><option value="GOKAK">GOKAK</option><option value="GOLAGHAT">GOLAGHAT</option><option value="GONDA">GONDA</option><option value="GONDIA">GONDIA</option><option value="GORAKHPUR">GORAKHPUR</option><option value="GUDIWADA">GUDIWADA</option><option value="GUDUR">GUDUR</option><option value="GULBARGA">GULBARGA</option><option value="GUNA">GUNA</option><option value="GUNTAKAL">GUNTAKAL</option><option value="GUNTUR">GUNTUR</option><option value="GURDASPUR">GURDASPUR</option><option value="GURGAON">GURGAON</option><option value="GURUVAYOOR">GURUVAYOOR</option><option value="GUWAHATI">GUWAHATI</option><option value="GWALIOR">GWALIOR</option><option value="HALDIA">HALDIA</option><option value="HALDWANI">HALDWANI</option><option value="HAMIRPUR">HAMIRPUR</option><option value="HAPUR">HAPUR</option><option value="HARDA">HARDA</option><option value="HARDOI">HARDOI</option><option value="HARDWAR">HARDWAR</option><option value="HASSAN">HASSAN</option><option value="HATHRAS">HATHRAS</option><option value="HAVERI">HAVERI</option><option value="HAZARIBAGH">HAZARIBAGH</option><option value="HIMATNAGAR">HIMATNAGAR</option><option value="HINDUPUR">HINDUPUR</option><option value="HINGOLI">HINGOLI</option><option value="HISSAR">HISSAR</option><option value="HOOGLY">HOOGLY</option><option value="HOSHIARPUR">HOSHIARPUR</option><option value="HOSPET">HOSPET</option><option value="HOSUR">HOSUR</option><option value="HUBLI">HUBLI</option><option value="HYDERABAD">HYDERABAD</option><option value="ICHALKARANJI">ICHALKARANJI</option><option value="IMPHAL">IMPHAL</option><option value="INDORE">INDORE</option><option value="ITARSI">ITARSI</option><option value="JABALPUR">JABALPUR</option><option value="JAGDALPUR">JAGDALPUR</option><option value="JAGRAON">JAGRAON</option><option value="JAIPUR">JAIPUR</option><option value="JAISALMER">JAISALMER</option><option value="JAJPUR">JAJPUR</option><option value="JALANDHAR">JALANDHAR</option><option value="JALGAON">JALGAON</option><option value="JALNA">JALNA</option><option value="JALORE">JALORE</option><option value="JALPAIGURI">JALPAIGURI</option><option value="JAMMU">JAMMU</option><option value="JAMNAGAR">JAMNAGAR</option><option value="JAMSHEDPUR">JAMSHEDPUR</option><option value="JAUNPUR">JAUNPUR</option><option value="JEYPORE">JEYPORE</option><option value="JHALAWAR">JHALAWAR</option><option value="JHANSI">JHANSI</option><option value="JHARSUGUDA">JHARSUGUDA</option><option value="JHUNJHUNU">JHUNJHUNU</option><option value="JIND">JIND</option><option value="JODHPUR">JODHPUR</option><option value="JORHAT">JORHAT</option><option value="KADAPA">KADAPA</option><option value="KAITHAL">KAITHAL</option><option value="KAKINADA">KAKINADA</option><option value="KALIMPONG">KALIMPONG</option><option value="KALPETTA">KALPETTA</option><option value="KALYAN">KALYAN</option><option value="KANCHEEPURAM">KANCHEEPURAM</option><option value="KANNUAJ">KANNUAJ</option><option value="KANNUR">KANNUR</option><option value="KANPUR">KANPUR</option><option value="KAPURTHALA">KAPURTHALA</option><option value="KARAIKUDI">KARAIKUDI</option><option value="KARAULI">KARAULI</option><option value="KARIMGANJ">KARIMGANJ</option><option value="KARIMNAGAR">KARIMNAGAR</option><option value="KARNAL">KARNAL</option><option value="KARUR">KARUR</option><option value="KARWAR">KARWAR</option><option value="KASARGOD">KASARGOD</option><option value="KASGANJ">KASGANJ</option><option value="KASHI PUR">KASHI PUR</option><option value="KATHUA">KATHUA</option><option value="KATIHAR">KATIHAR</option><option value="KATNI">KATNI</option><option value="KATRA">KATRA</option><option value="KAUSHAMBI">KAUSHAMBI</option><option value="KENDRAPADA">KENDRAPADA</option><option value="KEONJHAR">KEONJHAR</option><option value="KHAMGAON">KHAMGAON</option><option value="KHAMMAM">KHAMMAM</option><option value="KHANDWA">KHANDWA</option><option value="KHANNA">KHANNA</option><option value="KHARGONE">KHARGONE</option><option value="KHATAULI">KHATAULI</option><option value="KHATIMA">KHATIMA</option><option value="KHURDA">KHURDA</option><option value="KISHENGARH">KISHENGARH</option><option value="KOCHI">KOCHI</option><option value="KODERMA">KODERMA</option><option value="KOLAR">KOLAR</option><option value="KOLHAPUR">KOLHAPUR</option><option value="KOLKATA">KOLKATA</option><option value="KOLLAM">KOLLAM</option><option value="KOPPAL">KOPPAL</option><option value="KORBA">KORBA</option><option value="KOTA">KOTA</option><option value="KOTDWAR">KOTDWAR</option><option value="KOTHAGUDEM">KOTHAGUDEM</option><option value="KOTTAYAM">KOTTAYAM</option><option value="KOZHIKODE">KOZHIKODE</option><option value="KRISHNAGIRI">KRISHNAGIRI</option><option value="KUDAL">KUDAL</option><option value="KULLU">KULLU</option><option value="KUMBAKONAM">KUMBAKONAM</option><option value="KURNOOL">KURNOOL</option><option value="KUSHINAGAR">KUSHINAGAR</option><option value="LAKHIMPUR">LAKHIMPUR</option><option value="LAKHISARAI">LAKHISARAI</option><option value="LALITPUR">LALITPUR</option><option value="LATUR">LATUR</option><option value="LUCKNOW">LUCKNOW</option><option value="LUDHIANA">LUDHIANA</option><option value="LUNAWADA">LUNAWADA</option><option value="MACHILIPATNAM">MACHILIPATNAM</option><option value="MADANAPALLE">MADANAPALLE</option><option value="MADHUBANI">MADHUBANI</option><option value="MADIKERI">MADIKERI</option><option value="MADURAI">MADURAI</option><option value="MAHABUBNAGAR">MAHABUBNAGAR</option><option value="MAHARAJGANJ">MAHARAJGANJ</option><option value="MAHASAMUND">MAHASAMUND</option><option value="MAINPURI">MAINPURI</option><option value="MAKRANA">MAKRANA</option><option value="MALDA">MALDA</option><option value="MALEGAON">MALEGAON</option><option value="MALERKOTLA">MALERKOTLA</option><option value="MANCHIRIYAL">MANCHIRIYAL</option><option value="MANDI">MANDI</option><option value="MANDSAUR">MANDSAUR</option><option value="MANDYA">MANDYA</option><option value="MANGALDOI">MANGALDOI</option><option value="MANGALORE">MANGALORE</option><option value="MANSA">MANSA</option><option value="MARGOA">MARGOA</option><option value="MATHURA">MATHURA</option><option value="MAU">MAU</option><option value="MEERUT">MEERUT</option><option value="MEHSANA">MEHSANA</option><option value="MIDNAPUR">MIDNAPUR</option><option value="MIRZAPUR">MIRZAPUR</option><option value="MODASA">MODASA</option><option value="MOGA">MOGA</option><option value="MOHALI">MOHALI</option><option value="MORADABAD">MORADABAD</option><option value="MORBI">MORBI</option><option value="MORENA">MORENA</option><option value="MORIGAON">MORIGAON</option><option value="MOTIHRTI">MOTIHRTI</option><option value="MUKATSAR">MUKATSAR</option><option value="MUKTSAR">MUKTSAR</option><option value="MUNGER">MUNGER</option><option value="MURSHIDABAD">MURSHIDABAD</option><option value="MYSORE">MYSORE</option><option value="NABHA">NABHA</option><option value="NADIA">NADIA</option><option value="NADIAD">NADIAD</option><option value="NAGAON">NAGAON</option><option value="NAGAPATTINAM">NAGAPATTINAM</option><option value="NAGERCOIL">NAGERCOIL</option><option value="NAGOUR">NAGOUR</option><option value="NAGPUR">NAGPUR</option><option value="NAHAN">NAHAN</option><option value="NAKODAR">NAKODAR</option><option value="NALBARI">NALBARI</option><option value="NALGONDA">NALGONDA</option><option value="NAMAKKAL">NAMAKKAL</option><option value="NANDED">NANDED</option><option value="NANDYAL">NANDYAL</option><option value="NANITAL">NANITAL</option><option value="NARNAUL">NARNAUL</option><option value="NARSARAOPET">NARSARAOPET</option><option value="NARSINGHPUR">NARSINGHPUR</option><option value="NASHIK">NASHIK</option><option value="NAVSARI">NAVSARI</option><option value="NAWANSHAHAR">NAWANSHAHAR</option><option value="NAZIBABAD">NAZIBABAD</option><option value="NEEMA KA THANA">NEEMA KA THANA</option><option value="NEEMUCH">NEEMUCH</option><option value="NELLORE">NELLORE</option><option value="NIPPANI">NIPPANI</option><option value="NIRMAL">NIRMAL</option><option value="NIZAMABAD">NIZAMABAD</option><option value="NOHAR">NOHAR</option><option value="NOIDA">NOIDA</option><option value="NOKHA">NOKHA</option><option value="NORTH LAKHIMPUR">NORTH LAKHIMPUR</option><option value="NURPUR">NURPUR</option><option value="ONGOLE">ONGOLE</option><option value="OOTY">OOTY</option><option value="ORAI">ORAI</option><option value="PALAKKAD">PALAKKAD</option><option value="PALAKOL">PALAKOL</option><option value="PALAMPUR">PALAMPUR</option><option value="PALANPUR">PALANPUR</option><option value="PALGHAR">PALGHAR</option><option value="PALI">PALI</option><option value="PANAJI">PANAJI</option><option value="PANCHKULA">PANCHKULA</option><option value="PANDHARPUR">PANDHARPUR</option><option value="PANIPAT">PANIPAT</option><option value="PANJI">PANJI</option><option value="PANVEL">PANVEL</option><option value="PARADEEP">PARADEEP</option><option value="PARWANOO">PARWANOO</option><option value="PATHANKOT">PATHANKOT</option><option value="PATIALA">PATIALA</option><option value="PATNA">PATNA</option><option value="PATNAN">PATNAN</option><option value="PERAMBALUR">PERAMBALUR</option><option value="PETLAD">PETLAD</option><option value="PHAGWARA">PHAGWARA</option><option value="PHALODI">PHALODI</option><option value="PHULBANI">PHULBANI</option><option value="PILIBHIT">PILIBHIT</option><option value="PITHORAGARH">PITHORAGARH</option><option value="POLLACHI">POLLACHI</option><option value="PORBANDAR">PORBANDAR</option><option value="PRATAPGARH">PRATAPGARH</option><option value="PRODDUTUR">PRODDUTUR</option><option value="PUDUCHERRY">PUDUCHERRY</option><option value="PUDUKKOTTAI">PUDUKKOTTAI</option><option value="PUNE">PUNE</option><option value="PURI">PURI</option><option value="PURNEA">PURNEA</option><option value="PURULIA">PURULIA</option><option value="PUTTUR">PUTTUR</option><option value="RAEBARELI">RAEBARELI</option><option value="RAICHUR">RAICHUR</option><option value="RAIGANJ">RAIGANJ</option><option value="RAIGARH">RAIGARH</option><option value="RAIPUR">RAIPUR</option><option value="RAISEN">RAISEN</option><option value="RAJAHMUNDRY">RAJAHMUNDRY</option><option value="RAJAMAHENDRAVARAM">RAJAMAHENDRAVARAM</option><option value="RAJGARH">RAJGARH</option><option value="RAJKOT">RAJKOT</option><option value="RAJNANDGAON">RAJNANDGAON</option><option value="RAJPURA">RAJPURA</option><option value="RAJSAMAND">RAJSAMAND</option><option value="RAM NAGAR">RAM NAGAR</option><option value="RAMANATHAPURAM">RAMANATHAPURAM</option><option value="RAMGARH">RAMGARH</option><option value="RAMNAGAR">RAMNAGAR</option><option value="RAMPUR   ">RAMPUR   </option><option value="RAMPUR BUSHAHR">RAMPUR BUSHAHR</option><option value="RANCHI">RANCHI</option><option value="RATLAM">RATLAM</option><option value="RATNAGIRI">RATNAGIRI</option><option value="RAYAGADA">RAYAGADA</option><option value="REWA">REWA</option><option value="REWARI">REWARI</option><option value="RISHIKESH">RISHIKESH</option><option value="ROHTAK">ROHTAK</option><option value="ROORKEE">ROORKEE</option><option value="ROPAR">ROPAR</option><option value="ROURKELA">ROURKELA</option><option value="RUDRA PUR">RUDRA PUR</option><option value="SAGAR">SAGAR</option><option value="SAHARANPUR">SAHARANPUR</option><option value="SAHARSA">SAHARSA</option><option value="SAHIBGANJ">SAHIBGANJ</option><option value="SALEM">SALEM</option><option value="SAMANA">SAMANA</option><option value="SAMASTIPUR">SAMASTIPUR</option><option value="SAMBALPUR">SAMBALPUR</option><option value="SAMBHAL">SAMBHAL</option><option value="SANGAREDDY">SANGAREDDY</option><option value="SANGLI">SANGLI</option><option value="SANGRUR">SANGRUR</option><option value="SASARAM">SASARAM</option><option value="SATARA">SATARA</option><option value="SATNA">SATNA</option><option value="SAWAI">SAWAI</option><option value="SEHORE">SEHORE</option><option value="SENDHWA">SENDHWA</option><option value="SEONI">SEONI</option><option value="SHAHDOL">SHAHDOL</option><option value="SHAHJAHANPUR">SHAHJAHANPUR</option><option value="SHAJAPUR">SHAJAPUR</option><option value="SHAMLI">SHAMLI</option><option value="SHILLONG">SHILLONG</option><option value="SHIMLA">SHIMLA</option><option value="SHIMOGA">SHIMOGA</option><option value="SIDDIPET">SIDDIPET</option><option value="SIKAR">SIKAR</option><option value="SILCHAR">SILCHAR</option><option value="SILIGURI">SILIGURI</option><option value="SILVASSA">SILVASSA</option><option value="SINGRAULI">SINGRAULI</option><option value="SIRHIND">SIRHIND</option><option value="SIRNAGAR">SIRNAGAR</option><option value="SIROHI">SIROHI</option><option value="SIRSA">SIRSA</option><option value="SIRSI">SIRSI</option><option value="SITAMARHI">SITAMARHI</option><option value="SITAPUR">SITAPUR</option><option value="SIVASAGAR">SIVASAGAR</option><option value="SIWAN">SIWAN</option><option value="SOLAN">SOLAN</option><option value="SOLAPUR">SOLAPUR</option><option value="SONBHADRA">SONBHADRA</option><option value="SONEPAT">SONEPAT</option><option value="SRIKAKULAM">SRIKAKULAM</option><option value="SRINAGAR">SRINAGAR</option><option value="SULTANPUR">SULTANPUR</option><option value="SUMERPUR">SUMERPUR</option><option value="SUNAM">SUNAM</option><option value="SURAT">SURAT</option><option value="SURATGARH">SURATGARH</option><option value="SURENDRANAGAR">SURENDRANAGAR</option><option value="SURI">SURI</option><option value="SURYAPET">SURYAPET</option><option value="TADEPALLIGUDEM">TADEPALLIGUDEM</option><option value="TANUKU">TANUKU</option><option value="TARANTARAN">TARANTARAN</option><option value="TEHRI">TEHRI</option><option value="TENALI">TENALI</option><option value="TEZPUR">TEZPUR</option><option value="THANE">THANE</option><option value="THANJAVUR">THANJAVUR</option><option value="THENI">THENI</option><option value="THIRUVALLA">THIRUVALLA</option><option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option><option value="THODUPUZHA">THODUPUZHA</option><option value="THRISSUR">THRISSUR</option><option value="TIKAMGARH">TIKAMGARH</option><option value="TINSUKIA">TINSUKIA</option><option value="TIPTUR">TIPTUR</option><option value="TIRUCHENGODE">TIRUCHENGODE</option><option value="TIRUNELVELI">TIRUNELVELI</option><option value="TIRUPATI">TIRUPATI</option><option value="TIRUR">TIRUR</option><option value="TIRUVALLUR">TIRUVALLUR</option><option value="TIRUVANNAMALAI">TIRUVANNAMALAI</option><option value="TIRUVARUR">TIRUVARUR</option><option value="TONK">TONK</option><option value="TRICHY">TRICHY</option><option value="TRIVANDRUM">TRIVANDRUM</option><option value="TRIVENDRUM">TRIVENDRUM</option><option value="TUMKUR">TUMKUR</option><option value="TUNI">TUNI</option><option value="TUTICORIN">TUTICORIN</option><option value="UDAIPUR">UDAIPUR</option><option value="UDHAMPUR">UDHAMPUR</option><option value="UDUPI">UDUPI</option><option value="UJJAIN">UJJAIN</option><option value="UNA">UNA</option><option value="UNNO">UNNO</option><option value="VADODARA">VADODARA</option><option value="VAISHALI">VAISHALI</option><option value="VALSAD">VALSAD</option><option value="VAPI">VAPI</option><option value="VARANASI">VARANASI</option><option value="VELLORE">VELLORE</option><option value="VERAVAL">VERAVAL</option><option value="VIDISHA">VIDISHA</option><option value="VIJAYANAGARAM">VIJAYANAGARAM</option><option value="VIJAYAWADA">VIJAYAWADA</option><option value="VIKARABAD">VIKARABAD</option><option value="VILLUPURAM">VILLUPURAM</option><option value="VIRUDHUNAGAR">VIRUDHUNAGAR</option><option value="VISAKHAPATNAM">VISAKHAPATNAM</option><option value="WARANGAL">WARANGAL</option><option value="WARDHA">WARDHA</option><option value="WESTBENGAL">WESTBENGAL</option><option value="YADGIR">YADGIR</option><option value="YAMUNA NAGAR">YAMUNA NAGAR</option><option value="YAVATMAL">YAVATMAL</option>                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <table id="aotable" class="table table-hover table-bordered table-striped" border="3" style="overflow-y: scroll;height: 200px;display:block;font-size: 11px;"></table>
                    </div>
                    <div class="form-group" style="">
                        <div class="col-sm-3">
                            <label for="form-field-select-1">AREA CODE</label>	
                            <input name="areacode" id="areacode" placeholder="Area Code" readonly="" class="form-control input-sm" type="text">
                        </div>
                        <div class="col-sm-3">
                            <label for="form-field-select-1">AO TYPE</label>	
                            <input name="aotype" id="aotype" placeholder="AO Type" readonly="" class="form-control input-sm" type="text">
                        </div>
                        <div class="col-sm-3">
                            <label for="form-field-select-1">RANGE CODE</label>	
                            <input name="rangecode" id="rangecode" placeholder="Area Code" readonly="" class="form-control input-sm" type="text">
                        </div>
                        <div class="col-sm-3">
                            <label for="form-field-select-1">AO NO.</label>	
                            <input name="aono" id="aono" placeholder="AO No." readonly="" class="form-control input-sm" type="text">
                        </div>
                    </div>   
                    </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group col-md-2">
                            <button type="submit" name="submit" value="Submit" id="submitButton" class="btn btn-primary">SUBMIT</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="reset" class="btn btn-default">RESET</button>  
                        </div>    
                    </div>
                    </form>
                    </div>
            <!-- /.box --> 
            <!-- general form elements disabled --> 
            <!-- /.box --> 
         </div>
         
      </div>
   </section>
  </div>
  <?php $this->load->view('inc/footer.php'); ?> 
</div>
<?php $this->load->view('inc/script-bottom.php'); ?> 
</body>
</html>
