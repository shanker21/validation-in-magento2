
<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
?>
<script>
 var demoLanguage = 'en';
 var demoKeyOverride = 'GD77-ZJ44-ND99-EN75';
 var geoLocation = false;
</script>
<?php 
 $params = $this->getRequest()->getParams();
 $vendorId = '';
 if(isset($params['vendor_id'])){
 $vendorId = $params['vendor_id'];
 } 
?>
<div class="cms-brochure-main">
 <div class="cms-container">
 <div class="ob-form-wrapper">
 <div class="ob-title">
 <h2>Are you ordering your brochure for you or someone else?</h2>
 </div>
 <div class="ob-brochure-form">
 <div class="ob-form">
 <div class="product data items" data-mage-init='{"mage/tabs": {"openedState": "active","active": 0, "disabled": [2], "disabledState": "disabled"}}'>
 <div class="leftitme item title" data-role="collapsible">
 <a class="switch" data-toggle="trigger" href="#myself">For myself</a>
 </div>
 <div class="item title" data-role="collapsible">
 <a class="switch" data-toggle="trigger" href="#someone">For someone else</a>
 </div>
 
 <div id="myself" class="for-my-main-form item content" data-role="content">
 <form action="<?= $this->getUrl('requestbrochure/index/formyself'); ?>" method="post" enctype="multipart/form-data" class="ob-brochure-form" data-mage-init='{"validation": {}}'>
 <input type="hidden" name="vendor_id" class="input-v-id" value="<?php echo $vendorId ?>" />
 <div class="ob-contact">
 <h2>Please enter your details</h2>
 <div class="contact-field">
 <div class="ob-contact-fields top-fi-main">
 <div class="ob-field sel-inp">
 <div class="input-wrap select-fi">
 <label class="label ob-Label required">Title</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-myself-title" id="for-myself-title" class="title" onchange="validateTitle()" data-msg-required="" required="true" >
 <option selected="selected" value="">Select</option>
 <option value="Mr">Mr</option>
 <option value="Mrs">Mrs</option>
 <option value="Miss">Miss</option>
 <option value="Ms">Ms</option>
 <option value="Mx">Mx</option>
 <option value="Dr">Dr</option>
 <option value="Revd">Revd</option>
 <option value="Father">Father</option>
 <option value="Prof">Prof</option>
 <option value="Sir">Sir</option>
 <option value="Dame">Dame</option>
 <option value="Lord">Lord</option>
 <option value="Lady">Lady</option>
 </select>
 <span class="EditingFormErrorLabel stitle" id="title-myself" style = "display:none"></span>
 </div>
 </div>
 </div>
 <div class="input-wrap">
 <label class="label ob-Label required">First Name</label>
 <input type="text" name="for-myself-fname" required="true" onkeyup="validateName()" id="for-myself-fname-id" data-msg-required="">
 <span class="EditingFormErrorLabel sfname" id="first-name" style = "display:none"></span>
 </div>
 </div>
 
 <div class="ob-field">
 <label class="label ob-Label required">Surname</label>
 <input type="text" name="for-myself-surname" required="true" onkeyup="validateSname()" id="for-myself-surname-id" data-msg-required="">
 <span class="EditingFormErrorLabel sname" id = "sur-name" style = "display:none"></span>
 </div>
 </div>
 <div class="ob-contact-fields tel-em-main">
 <div class="ob-field">
 <label class="label ob-Label required">Telephone number</label>
 <input type="text" name="for-myself-no" required="true" onkeyup="validateTelephone()" id="for-myself-no-id" data-msg-required="">
 <span class="EditingFormErrorLabel sno" id= "no-span-id" style = "display:none"></span>
 <div class="note">We may call to check your brochure has arrived safely.</div>
 </div>
 <div class="ob-field">
 <label class="label">Email</label>
 <input type="text" name="for-myself-email" id="for-myself-email-id">
 <span class="EditingFormErrorLabel" id= "email-span-id" style = "display:none">Please enter a value for this field.</span>
 <div class="note">We treat your data with respect and never sell your data to 3rd parties, read more about our data promise <a href="<?php echo $this->getUrl('privacy-and-cookie-policy'); ?>">here.</a></div>
 </div>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Postal Address</label>
 <input type="text" name="for-myself-address" id="txtAddress_1" required class="" searchbox="1" data-msg-required="Please enter a value for this field.">
 <div class="typed"><span></span></div>
 <div class="for-myself-note">
 Or enter an address manually
 </div>
 </div>
 </div>
 <div class="for-myself-address-information" style="display: none;">
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">House name</label>
 <input type="text" name="for-myself-house-name" id="house_name_1">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">House number</label>
 <input type="text" name="for-myself-house-no" id="house_no_1">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required" for="for-myself-address1">Address line 1</label>
 <input type="text" id="Address_1" name="for-myself-address1" class="validation-class" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel saddress1" id= "Address_1_valid" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Address line 2</label>
 <input type="text" id="Street_1" name="for-myself-address2">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">City</label>
 <input type="text" id="Locality_1" name="for-myself-city" id="for-myself-city-id" class="validation-class" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel scity" id="Locality_1_valid" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Post code</label>
 <input type="text" id="Postcode_1" name="for-myself-post-code" id="for-myself-postcode-id" class="validation-class" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel spostcode" id="Postcode_1_valid" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">County</label>
 <input type="text" id="County_1" name="for-myself-county">
 </div>
 </div>
 <!-- <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Region</label>
 <input type="text" name="for-myself-region" id="AdministrativeArea_1">
 </div>
 </div> -->
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">How did you hear about us?</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-myself-surnamhow-did-youe" class="title">
 <option selected="selected" value="">Please select</option>
 <option value="TV">TV</option>
 <option value="Newspaper/Magazine">Newspaper/Magazine</option>
 <option value="Post">Post</option>
 <option value="Facebook/Instagram/YouTube">Facebook/Instagram/YouTube</option>
 <option value="Medical/Care professional">Medical/Care professional</option>
 <option value="Word-of-mouth recommendation">Word-of-mouth recommendation</option>
 <option value="Internet search">Internet search</option>
 <option value="Brochure">Brochure</option>
 <option value="Van">Van</option>
 <option value="Email">Email</option>
 <option value="Existing/returning customer">Existing/returning customer</option>
 <option value="Other">Other</option>
 <option value="Radio">Radio</option>
 </select>
 </div>
 </div>
 </div>
 </div>
 <p class="para">Would you like to receive emails from Wiltshire Farm Foods with personalised offers and services, competitions or products that might be of interest to you?</p> 
 <div id="popup-modal" style="display:none;">
 <p>Wiltshire Farm Foods will update you with personalised offers and services, competitions or products that might be of interest to you.<br><br>Should you change your mind later, you can stop receiving these emails at any point.</p>
 </div>
 <div class="ob-contact-fields checkbox-main">
 <div class="ob-field checkbox">
 <input type="checkbox" name="for-myself-yes-checkbox" id="borchure">
 <label class="label" for="borchure">Yes, please send me these emails</label>
 <span class="for-myself-item options tooltip content"><a href="#" id="click-me"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50" style=" fill:#f2a900;"> <path d="M25,2C12.297,2,2,12.297,2,25s10.297,23,23,23s23-10.297,23-23S37.703,2,25,2z M25,11c1.657,0,3,1.343,3,3s-1.343,3-3,3 s-3-1.343-3-3S23.343,11,25,11z M29,38h-2h-4h-2v-2h2V23h-2v-2h2h4v2v13h2V38z"></path></svg>Tell me more</a></span>
 </div>
 </div>
 <div class="ob-SubmitBtn">
 <div class="actions-toolbar">
 <div class="primary">
 <button type="submit" title="Order Brochure" id="btnOrderBrochure" class="action submit primary">Order Brochure</button> 
 </div>
 </div>
 </div>
 </div>
 </form>
 </div>
 
 <div id="someone" class="som-el-main item content" data-role="content">
 <form action="<?= $this->getUrl('requestbrochure/index/forsomeoneelse'); ?>" method="post" enctype="multipart/form-data" class="ob-brochure-form" data-mage-init='{"validation": {}}'>
 <input type="hidden" name="vendor_id" class="input-v-id" value="<?php echo $vendorId ?>" />
 <div class="ob-contact">
 <h2>Please enter your details</h2>
 <div class="contact-field">
 <div class="ob-contact-fields top-fi-main">
 <div class="ob-field sel-inp">
 <div class="input-wrap select-fi">
 <label class="label ob-Label required">Their Title</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-someone-else-their-title" id="someone-their-title" onchange="validateStitle()" class="title" data-msg-required="" required>
 <option selected="selected" value="">Select</option>
 <option value="Mr">Mr</option>
 <option value="Mrs">Mrs</option>
 <option value="Miss">Miss</option>
 <option value="Ms">Ms</option>
 <option value="Mx">Mx</option>
 <option value="Dr">Dr</option>
 <option value="Revd">Revd</option>
 <option value="Father">Father</option>
 <option value="Prof">Prof</option>
 <option value="Sir">Sir</option>
 <option value="Dame">Dame</option>
 <option value="Lord">Lord</option>
 <option value="Lady">Lady</option>
 </select>
 <span class="EditingFormErrorLabel setitle" id = "title-someone" style = "display:none"></span>
 </div>
 </div>
 </div>
 <div class="input-wrap">
 <label class="label ob-Label required">Their First Name</label>
 <input type="text" name="for-someone-else-their-fname" onkeyup="validateSfname()" id="for-someone-fname-id" data-msg-required="" required>
 <span class="EditingFormErrorLabel sefname" id="someone-first-name" style = "display:none"></span>
 </div>
 </div>
 
 <div class="ob-field">
 <label class="label ob-Label required">Their Surname</label>
 <input type="text" name="for-someone-else-their-surname" onkeyup="validateSomename()" id="for-someone-surname-id" data-msg-required="" required>
 <span class="EditingFormErrorLabel sesurname" id="someone-sur-name" style = "display:none"></span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Their Telephone number</label>
 <input type="text" name="for-someone-else-their-no" onkeyup="validateStelephone()" id="for-someone-no-id" data-msg-required="" required>
 <span class="EditingFormErrorLabel seno" id="someone-no-span-id" style = "display:none"></span>
 <div class="note">We may call to check your brochure has arrived safely.</div>
 </div>
 </div>
 
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Their Postal Address</label>
 <input type="text" name="for-someone-else-address" id="txtAddress_2" required class="" searchbox="1" data-msg-required="Please enter a value for this field.">
 <div class="typed"><span></span></div>
 <div class="for-someone-else-note">
 Or enter an address manually
 </div>
 </div>
 </div>
 <div class="for-someone-else-address-information" style="display: none">
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">House name</label>
 <input type="text" name="for-someone-else-house-name" id="house_name_2">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">House number</label>
 <input type="text" name="for-someone-else-house-no" id="house_no_2">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Address line 1</label>
 <input type="text" name="for-someone-else-address1" class="for-someone-validation" data-msg-required="Please enter a value for this field." required id="Address_2">
 <span class="EditingFormErrorLabel spostcode" id="Address_2_valid" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Address line 2</label>
 <input type="text" id="Street_2" name="for-someone-else-address2">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">City</label>
 <input type="text" id="Locality_2" name="for-someone-else-city" id="for-someone-city-id" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel secity" id="Locality_2_valid" style= "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Post code</label>
 <input type="text" id="Postcode_2" name="for-someone-else-post-code" id="for-someone-postcode-id" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel postcode" id="Postcode_2_valid" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">County</label>
 <input type="text" id="County_2" name="for-someone-else-county">
 </div>
 </div>
 <!-- <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Region</label>
 <input type="text" id="AdministrativeArea_2" name="for-someone-else-region">
 </div>
 </div> -->
 </div>
 
 <div class="contact-field">
 <div class="ob-contact-fields ob-brochure">
 <div class="ob-field checkbox">
 <input type="checkbox" name="for-someone-else-brochure-checkbox" id="borchure1" class="for-someone-borchure">
 <label class="label" for="borchure1">I would like a brochure for myself as well</label>
 </div>
 </div>
 <div class="field-append"></div>
 </div>
 <div class=" js-ob-AppendPronoun" style="display: none">
 <div class="ob-contact-fields top-fi-main">
 <div class="ob-field sel-inp">
 <div class="input-wrap select-fi">
 <label class="label ob-Label required">Your Title</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-someone-else-your-title" id="for-someone-your-title" class="title" required="true" onchange="validateSmtitle()" data-msg-required="">
 <option selected="selected" value="">Select</option>
 <option value="Mr">Mr</option>
 <option value="Mrs">Mrs</option>
 <option value="Miss">Miss</option>
 <option value="Ms">Ms</option>
 <option value="Mx">Mx</option>
 <option value="Dr">Dr</option>
 <option value="Revd">Revd</option>
 <option value="Father">Father</option>
 <option value="Prof">Prof</option>
 <option value="Sir">Sir</option>
 <option value="Dame">Dame</option>
 <option value="Lord">Lord</option>
 <option value="Lady">Lady</option>
 </select>
 </div>
 <span class="EditingFormErrorLabel setitle" id="title-someone-your" style = "display:none"></span>
 </div>
 </div>
 <div class="input-wrap">
 <label class="label ob-Label required">Your First Name</label>
 <input type="text" name="for-someone-else-your-first-name" onkeyup="validateSmname()" id="for-someone-your-fname-id" required="true" data-msg-required="">
 <span class="EditingFormErrorLabel sefname" id="someone-your-first-name" style = "display:none"></span>
 </div>
 </div>
 <div class="ob-field">
 <label class="label ob-Label required">Your Surname</label>
 <input type="text" name="for-someone-else-your-surname" onkeyup="validateSsmname()" id="for-someone-your-surname-id" required="true" data-msg-required="">
 <span class="EditingFormErrorLabel sesname" id="someone-your-sur-name" style = "display:none"></span>
 </div>
 </div>
 <div class="ob-contact-fields tel-em-main">
 <div class="ob-field">
 <label class="label ob-Label required">Your Telephone number</label>
 <input type="text" name="for-someone-else-your-no" onkeyup="validateSmtelephone()" id="for-someone-your-no-id" required="true" data-msg-required="">
 <span class="EditingFormErrorLabel seno" id= "no-smspan-id" style = "display:none"></span>
 <div class="note">We may call to check your brochure has arrived safely.</div>
 </div>
 <div class="ob-field">
 <label class="label">Your Email</label>
 <input type="text" name="for-someone-else-your-email" id="for-someone-your-email-id" >
 <span class="EditingFormErrorLabel seemail" id= "someone-your-email-span-id" style = "display:none">Please enter a value for this field.</span>
 <div class="note">We treat your data with respect and never sell your data to 3rd parties, read more about our data promise <a href="<?= $this->getUrl('privacy-and-cookie-policy'); ?>" target="_blank" title="View privacy and cookie policy.">here</a>.</div>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Your Postal Address</label>
 <input type="text" name="for-someone-else-your-address" required class="" id="txtAddress_3" searchbox="2" data-msg-required="Please enter a value for this field.">
 <div class="typed"><span></span></div>
 <div class="you-for-someone-else-note">
 Or enter an address manually
 </div>
 </div>
 </div>
 
 <div class="you-for-myself-address-information" style="display: none">
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Your House name</label>
 <input type="text" name="for-someone-else-your-house-name" id="house_name_3">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Your House number</label>
 <input type="text" name="for-someone-else-your-house-no" id="house_no_3">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Your Address line 1</label>
 <input type="text" id="Address_3" name="for-someone-else-your-address1" required data-msg-required="Please enter a value for this field.">
 <span class="EditingFormErrorLabel seaddress" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Your Address line 2</label>
 <input type="text" id="Street_3" name="for-someone-else-your-address2">
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Your City</label>
 <input type="text" id="Locality_3" name="for-someone-else-your-city" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel secity" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label ob-Label required">Your Post code</label>
 <input type="text" id="Postcode_3" name="for-someone-else-your-post-code" data-msg-required="Please enter a value for this field." required>
 <span class="EditingFormErrorLabel sepostcode" style = "display:none">Please enter a value for this field.</span>
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field">
 <label class="label">Your County</label>
 <input type="text" id="County_3" name="for-someone-else-your-county">
 </div>
 </div>
 
 </div>
 </div>
 <div class="ob-contact-fields btm">
 <div class="ob-field select-main">
 <div class="input-wrap select-fi">
 <label class="label">Your relationship</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-someone-else-your-relationship" class="title">
 <option selected="selected" value="">Please Select</option>
 <option value="Parent">Parent</option>
 <option value="Sibling">Sibling</option>
 <option value="Friend">Friend</option>
 <option value="Patient">Patient</option>
 <option value="Other">Other</option>
 </select>
 </div>
 </div>
 </div>
 </div>
 </div>

 <div class="ob-contact-fields btm">
 <div class="ob-field select-main">
 <div class="input-wrap select-fi">
 <label class="label">How did you hear about us?</label>
 <div class="sel-wrp">
 <div class="sel-innr">
 <select name="for-someone-else-your-how-did-you" class="title">
 <option selected="selected" value="">Please select</option>
 <option value="TV">TV</option>
 <option value="Newspaper/Magazine">Newspaper/Magazine</option>
 <option value="Post">Post</option>
 <option value="Facebook/Instagram/YouTube">Facebook/Instagram/YouTube</option>
 <option value="Medical/Care professional">Medical/Care professional</option>
 <option value="Word-of-mouth recommendation">Word-of-mouth recommendation</option>
 <option value="Internet search">Internet search</option>
 <option value="Brochure">Brochure</option>
 <option value="Van">Van</option>
 <option value="Email">Email</option>
 <option value="Existing/returning customer">Existing/returning customer</option>
 <option value="Other">Other</option>
 <option value="Radio">Radio</option>
 </select>
 </div>
 </div>
 </div>
 </div>
 </div>
 
 <p class="para">Would you like to receive emails from Wiltshire Farm Foods with personalised offers and services, competitions or products that might be of interest to you?</p>
 <div id="popup-modal-for-someone-else" style="display:none;">
 <p>Wiltshire Farm Foods will update you with personalised offers and services, competitions or products that might be of interest to you.<br><br>Should you change your mind later, you can stop receiving these emails at any point.</p>
 </div>
 <div class="ob-contact-fields checkbox-main">
 <div class="ob-field checkbox">
 <input type="checkbox" name="for-someone-else-yes-checkbox" id="borchure2">
 <label class="label" for="borchure2">Yes, please send me these emails</label>
 <span class="for-someone-else-item options tooltip content"><a href="#" id="for-someone-else-click-me"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50" style=" fill:#f2a900;"> <path d="M25,2C12.297,2,2,12.297,2,25s10.297,23,23,23s23-10.297,23-23S37.703,2,25,2z M25,11c1.657,0,3,1.343,3,3s-1.343,3-3,3 s-3-1.343-3-3S23.343,11,25,11z M29,38h-2h-4h-2v-2h2V23h-2v-2h2h4v2v13h2V38z"></path></svg>Tell me more</a></span>
 </div>
 </div>
 <div class="ob-YourEmailContainer" id="js-ob-YourEmailContainer" style="display: none;">
 <div class="ob-Field-Email">
 <label id="ob-Field-EmailLabel" class="ob-Label ob-Field-EmailLabel required" for="ctl00_cphMain_plcZones_lt_zoneForm_BrochureForm_viewBiz_YourEmail_txtEmailInput">
 Please enter your email address to receive these emails
 </label> 
 <div id="ob-Field-EmailInputDiv" class="ob-Field-EmailInputDiv">
 <input name="ob-Field-EmailInput" type="text" maxlength="100" id="ob-Field-EmailInput" class="ob-Textbox ob-Field-EmailInput form-control">
 <span class="EditingFormErrorLabel">Please enter a value for this field.</span>
 </div> 
 <div class="ob-Field-EmailPrivacyNotice">
 We treat your data with respect and never sell your data to 3rd parties, read more about our data promise <a href="<?= $this->getUrl('privacy-and-cookie-policy'); ?>" target="_blank" title="View privacy and cookie policy.">here</a>.
 </div>
 </div>
 </div>
 <div class="ob-SubmitBtn">
 <div class="actions-toolbar">
 <div class="primary">
 <button type="submit" title="Order Brochure" class="action submit primary" id="sbtnOrderBrochure">Order Brochure</button> 
 </div>
 </div>
 </div>
 </div>
 </form> 
 </div>
 <input type="hidden" name="currentSearchField" id="currentSearchField">
 <input type="hidden" name="g-token" id="g-token" />
 </div>
 </div>
 </div>
 </div>
 </div>
 <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
 <div class="safe-banner-wrapper">
 <div class="safe-banner-container">
 <p>We take your data protection very seriously, read our data promise <a href="<?= $this->getUrl('privacy-and-cookie-policy'); ?>">here</a>.</p>
 </div>
 </div>
 </div>
</div>
<script type="text/javascript">

require([ 'jquery', 'jquery/ui'], function($){
 window.lqt = window.lqt || {};
 lqt.AddressValidation = (function () {
 var init;
 var language = 'en';
 var startedTyping = false;
 var demoKey = 'GD77-ZJ44-ND99-EN75';
 var totalStringsTyped = 0, shouldStartAutoDemo = true, currentDemoString = "";
 var autoSearching = false;
 var typedInView = false;
 var resetAutoDemoInterval = null;

 var noFree = '<h4>Sorry, looks like you\'ve used your 5 free look-ups.</h4> Why not create a free account and try our address verification in your website too? <a href="https://account.loqate.com/register/">Sign up for free.</a>';

 if (typeof pca !== 'undefined') {
 var fields = [
 { element: "txtAddress_1", field: "Line1", mode: pca.fieldMode.SEARCH },
 { element: "txtAddress_2", field: "Line1", mode: pca.fieldMode.SEARCH },
 { element: "txtAddress_3", field: "Line1", mode: pca.fieldMode.SEARCH }
 ],
 options = {
 key: demoKey,
 countries: {
 defaultCode: "GB"
 },
 //bar: { showCountry: false },
 bar: { visible: true },
 GeoLocationEnabled: 'false',
 /*GeoLocationRadius: 50,*/
 GeoLocationMaxItems: 10,
 setCountryByIP: true,
 suppressAutocomplete: false
 },
 controlFinder = '';
 }


 Init = function () {
 setLanguage(demoLanguage);
 if (demoKeyOverride !== '') {
 setDemoKey(demoKeyOverride);
 }
 if (geoLocation) {
 options.GeoLocationEnabled = 'true';
 }
 if (demoLanguage === 'it') {
 //options.setCountryByIP = false;
 //options.countries = { codesList: "IT" };
 }
 options.key = demoKey;
 controlFinder = new pca.Address(fields, options);
 if ($('.ob-brochure-form .typed').length) {
 checkTypedInViewport();
 window.addEventListener('scroll', checkTypedInViewport);
 // setUpTyped();
 }
 setUpAddressDemo();
 //adjustDemoPlaceholder();
 };

 //The following requires typed.js
 //var totalStringsTyped = 0, shouldStartAutoDemo = true, currentDemoString = "";
 function setUpTyped() {
 var exampleStrings = ['Try... Cavern Club, Liverpool^3000', 'Try... GB Group, Chester^3000'];
 var demoStrings = ['Cavern Club L&&', 'GB Group&&'];
 var firstDemo = 'GB Group&';
 console.log(language);

 }

 function demonstrateAddress(entryText, searchField) {
 if (window.cancelDemo) window.cancelDemo();
 document.getElementById('demoResult').style.display = 'none';
 autoSearching = true;
 if (!startedTyping) play(entryText);
 function play(example, callback, percCallback) {
 callback = callback || function () { };
 percCallback = percCallback || function () { };
 var cursor = 0;
 var interval = 500;
 var percPerLetter = 100 / example.length;

 function step() {
 cursor++;
 percCallback(percPerLetter * cursor);
 if (cursor >= example.length + 1) {
 controlFinder.autocomplete.list.select(0);
 stop();
 callback();
 } else {
 if (example[cursor - 1] === '&') {
 controlFinder.autocomplete.list.select(0);
 }
 else {
 pca.setValue(searchField, example.substring(0, cursor).replace(/&/g, ''));
 pca.fire(searchField, "paste");
 }
 }
 }

 searchField.focus();
 window.player = window.setInterval(step, interval);
 }

 function stop() {
 searchField.removeAttribute('readonly');
 searchField.blur();
 window.clearInterval(window.player);
 //resetRequests();
 }

 window.cancelDemo = stop;
 }


 function setUpAddressDemo() {

 listenForTyping();
 listenForAddress();
 // listenForError();
 listenForReturnKey();
 listenForInteraction();

 }


 //function adjustDemoPlaceholder() {
 // if ($(window).width() < 640)
 // $('#bannerAddress').attr('placeholder', 'Start typing an address');
 //}


 function listenForTyping() {
 controlFinder.listen('search', function () {
 if (!startedTyping) {
 //utility.logEvent('Demo', 'Typed', 'Address.Demo');
 startedTyping = true;
 }
 if (resetAutoDemoInterval !== null) {
 clearTimeout(resetAutoDemoInterval);
 }
 shouldStartAutoDemo = false;
 });
 }



 function listenForAddress() {

 controlFinder.listen('populate', function (address) {
 var currentSearchField = jQuery("#currentSearchField").val();
 if($("#myself").css('display') == 'none')
 currentSearchField = 2;
 else
 currentSearchField = 1;
 console.log(address);
 document.getElementById('Address_'+currentSearchField).value = '';
 document.getElementById('Street_'+currentSearchField).value = '';
 document.getElementById('house_no_'+currentSearchField).value = '';
 document.getElementById('house_name_'+currentSearchField).value = '';
 document.getElementById('Locality_'+currentSearchField).value = '';
 document.getElementById('Postcode_'+currentSearchField).value = '';
 document.getElementById('County_'+currentSearchField).value = '';
 //document.getElementById('AdministrativeArea_'+currentSearchField).value = '';

 document.getElementById('Address_'+currentSearchField).value = address.Line1;
 document.getElementById('Street_'+currentSearchField).value = address.Line2;
 document.getElementById('house_no_'+currentSearchField).value = address.BuildingNumber;
 document.getElementById('house_name_'+currentSearchField).value = address.BuildingName;
 document.getElementById('Locality_'+currentSearchField).value = address.City;
 document.getElementById('Postcode_'+currentSearchField).value = address.PostalCode;
 document.getElementById('Postcode_'+currentSearchField).value = address.PostalCode;
 //document.getElementById('AdministrativeArea_'+currentSearchField).value = address.ProvinceName;
 document.getElementById('County_'+currentSearchField).value = address.CountryName;
 document.getElementById('txtAddress_'+currentSearchField).value = address.FormattedLine1;
 // document.getElementById('txtAddress'+currentSearchField).value = '';
 $('#txtAddress_'+currentSearchField).blur();
 
 
 // utility.clearDemoError();
 //utility.logEvent('Demo', 'ClickedResult', 'Address.Demo');
 startedTyping = false;
 });
 }


 function listenForInteraction() {
 $('#txtAddress_1, #txtAddress_2, #txtAddress_3').focus(function (e) {

 shouldStartAutoDemo = false;
 if (resetAutoDemoInterval !== null) {
 clearTimeout(resetAutoDemoInterval);
 }
 });

 }


 function listenForReturnKey() {
 $('#txtAddress_1, #txtAddress_2, #txtAddress_3').keydown(function (e) {
 if (e.keyCode === 13) {
 return false;
 }
 });
 }


 function checkTypedInViewport() {
 if (typedIsInViewport()) {
 typedInView = true;
 }
 else {
 typedInView = false;
 }
 }

 function typedIsInViewport() {
 var elem = $('.ob-brochure-form .typed')[0];
 var viewportHeight = $(window).height();
 var elementHeight = $(elem).height();
 var visible = visiblePx(elem);
 if (visible === elementHeight) return true;
 else return (visible / viewportHeight) * 100 > 30;
 }

 function visiblePx(el) {
 var elH = $(el).outerHeight(),
 H = $(window).height(),
 r = el.getBoundingClientRect(), t = r.top, b = r.bottom;
 return Math.max(0, t > 0 ? Math.min(elH, H - t) : (b < H ? b : H));
 }


 setLanguage = function (lang) {
 language = lang;
 switch (language) {
 case 'en':
 //default
 break;
 case 'de':
 noFree = '<h4>Entschuldige, du hast deine 5 kostenfreien Prüfungen für heute aufgebraucht.</h4>Registriere dir doch einen kostenlosen Account und teste unsere Adressvalidierung direkt in deinem Checkout. <a href="https://account.loqate.com/register/">Jetzt anmelden.</a>';
 break;
 case 'nl':
 noFree = '<h4>Sorry, het lijkt erop dat de 5 gratis look-ups zijn gebruikt.</h4> Waarom maakt u geen gratis account aan en probeert u onze adresverificatie ook op uw website uit?';
 break;
 case 'it':
 noFree = '<h4>Siamo spiacenti, sembra che tu abbia utilizzato le 5 ricerche gratuite a tua disposizione.</h4>Che ne diresti di creare un account gratuito e provare la nostra convalida e-mail anche nel tuo sito web? <a href="https://account.loqate.com/register/">Registrati gratuitamente.</a>';
 break;
 case 'es':
 noFree = '<h4>Lo siento, parece que has usado tus 5 búsquedas gratuitas.</h4> ¿Por qué no crear una cuenta gratuita y probar nuestra validación de direccion en su sitio web también? <a href="https://account.loqate.com/register/">Registrate gratis.</a>';
 break;
 }
 };

 
 setGeoLocation = function (isSet) {
 if (isSet) {
 controlFinder.options.GeoLocationEnabled = 'true';
 } else {
 controlFinder.options.GeoLocationEnabled = 'false';
 }
 };

 setDemoKey = function (key) {
 demoKey = key;
 };


 return {
 Init: Init,
 setDemoKey: setDemoKey,
 setGeoLocation: setGeoLocation
 };
 }());

 $(function () {
 lqt.AddressValidation.Init();
 });
})();
</script>

<script type="text/javascript">
 require(
 [
 'jquery',
 'Magento_Ui/js/modal/modal'
 ],
 function(
 $,
 modal
 ) {
//myself
 $('#btnOrderBrochure').on('click', function() {
 if ($('#for-myself-title').val() == "")
 {
 $('#title-myself').show();
 $('#title-myself').text('Please enter a value for this field.'); 
 }
 });

 $('#btnOrderBrochure').on('click', function() {
 if ($('#for-myself-fname-id').val() == "")
 {
 $('#first-name').show();
 $('#first-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#btnOrderBrochure').on('click', function() {
 if ($('#for-myself-surname-id').val() == "")
 {
 $('#sur-name').show();
 $('#sur-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#btnOrderBrochure').on('click', function() {
 if ($('#for-myself-no-id').val() == "")
 {
 $('#no-span-id').show();
 $('#no-span-id').text('Please enter a value for this field.'); 
 }
 });
 $('#for-myself-fname-id').click(function() {
 const title = $('#for-myself-title').val()
 $(".stitle").hide()
 if(!title) {
 $(".stitle").show()
 returnValue = false
 }
 });
 $('#for-myself-surname-id').click(function() {
 const fname = $('#for-myself-fname-id').val()
 $(".sfname").hide()
 if(!fname) {
 $(".sfname").show()
 return false
 }
 const title = $('#for-myself-title').val()
 $(".stitle").hide()
 if(!title) {
 $(".stitle").show()
 returnValue = false
 }
 });
 $('#for-myself-no-id').click(function() {
 var returnValue = true;
 const surname = $('#for-myself-surname-id').val()
 $(".sname").hide()
 if(!surname) {
 $(".sname").show()
 returnValue = false
 }
 const fname = $('#for-myself-fname-id').val()
 $(".sfname").hide()
 if(!fname) {
 $(".sfname").show()
 returnValue = false
 }
 const title = $('#for-myself-title').val()
 $(".stitle").hide()
 if(!title) {
 $(".stitle").show()
 returnValue = false
 }
 return returnValue;

 });
 $('#for-myself-email-id').click(function() {
 var returnValue = true;
 const phoneno = $('#for-myself-no-id').val()
 $(".sno").hide()
 if(!phoneno) {
 $(".sno").show()
 returnValue = false
 }
 const surname = $('#for-myself-surname-id').val()
 $(".sname").hide()
 if(!surname) {
 $(".sname").show()
 returnValue = false
 }
 const fname = $('#for-myself-fname-id').val()
 $(".sfname").hide()
 if(!fname) {
 $(".sfname").show()
 returnValue = false
 }
 const title = $('#for-myself-title').val()
 $(".stitle").hide()
 if(!title) {
 $(".stitle").show()
 returnValue = false
 }
 });

 $('.validation-class').click(function() {
 var validation = $(this).attr('id')
 var validate = $('#'+validation).val()
 $('#'+validation+'_valid').hide()
 if(validate==='') {
 $('#'+validation+'_valid').show()
 }
 });
 //for someone order myself
 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-your-title').val() == "")
 {
 $('#title-someone-your').show();
 $('#title-someone-your').text('Please enter a value for this field.'); 
 }
 });

 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-your-fname-id').val() == "")
 {
 $('#someone-your-first-name').show();
 $('#someone-your-first-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-your-surname-id').val() == "")
 {
 $('#someone-your-sur-name').show();
 $('#someone-your-sur-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-your-no-id').val() == "")
 {
 $('#no-smspan-id').show();
 $('#no-smspan-id').text('Please enter a value for this field.'); 
 }
 });
//someone else
$('#sbtnOrderBrochure').on('click', function() {
 if ($('#someone-their-title').val() == "")
 {
 $('#title-someone').show();
 $('#title-someone').text('Please enter a value for this field.'); 
 }
 });

 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-fname-id').val() == "")
 {
 $('#someone-first-name').show();
 $('#someone-first-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-surname-id').val() == "")
 {
 $('#someone-sur-name').show();
 $('#someone-sur-name').text('Please enter a value for this field.'); 
 }
 });
 
 $('#sbtnOrderBrochure').on('click', function() {
 if ($('#for-someone-no-id').val() == "")
 {
 $('#someone-no-span-id').show();
 $('#someone-no-span-id').text('Please enter a value for this field.'); 
 }
 });
 $('#for-someone-fname-id').click(function() {
 const title = $('#someone-else-their-title').val()
 $(".setitle").hide()
 if(!title) {
 $(".setitle").show()
 returnValue = false
 }
 });
 $('#for-someone-surname-id').click(function() {
 const fname = $('#for-someone-fname-id').val()
 $(".sefname").hide()
 if(!fname) {
 $(".sefname").show()
 returnvalue = false
 }
 const title = $('#someone-else-their-title').val()
 $(".setitle").hide()
 if(!title) {
 $(".setitle").show()
 returnValue = false
 }
 });
 $('#for-someone-no-id').click(function() {
 var returnValue = true;
 const surname = $('#for-someone-surname-id').val()
 $(".sesurname").hide()
 if(!surname) {
 $(".sesurname").show()
 returnValue = false
 }
 const fname = $('#for-someone-fname-id').val()
 $(".sefname").hide()
 if(!fname) {
 $(".sefname").show()
 returnValue = false
 }
 const title = $('#someone-else-their-title').val()
 $(".setitle").hide()
 if(!title) {
 $(".setitle").show()
 returnValue = false
 }
 });
 
 $('#for-someone-address1').click(function() {
 const address = $('#someone-else-address1').val()
 $(".seaddress1").hide()
 if(!address) {
 $(".seaddress1").show()
 return false
 }
 });
 $('#for-someone-city').click(function() {
 const city = $('#someone-else-city').val()
 $(".secity").hide()
 if(!city) {
 $(".secity").show()
 return false
 }
 });
 $('#someone-else-their-post-code').click(function() {
 const postCode = $('#someone-else-their-post-code').val()
 $(".sepostcode").hide()
 if(!postCode) {
 $(".sepostcode").show()
 return false
 }
 });
 // $("#for-myself-no-id").keyup(function(){
 // var number = $('#for-myself-no-id').val();
 // $('#no-span-id').hide();
 // if(!/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/.test(number)){
 // $('#no-span-id').show();
 // $('#no-span-id').html("Please ensure this is a valid phone number.")
 // return false;
 // }
 // return true;
 // });

 // $("#for-someone-no-id").keyup(function(){
 // var number = $('#for-someone-no-id').val();
 // $('#someone_no').hide();
 // if(!/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/.test(number)){
 // $('#someone_no').show();
 // $('#someone_no').html("Please ensure this is a valid phone number.")
 // return false;
 // }
 // return true;
 // });

 $("#for-myself-email-id").keyup(function() {
 var email = $('#for-myself-email-id').val();
 $('#email-span-id').hide();
 if(!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email)){
 $('#email-span-id').show();
 $('#email-span-id').html("Please ensure this is a valid email address.")
 return false;
 }
 });
 $("#for-someone-your-email-id").keyup(function() {
 var email = $('#for-someone-your-email-id').val();
 $('#someone-your-email-span-id').hide();
 if(!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email)){
 $('#someone-your-email-span-id').show();
 $('#someone-your-email-span-id').html("Please ensure this is a valid email address.")
 return false;
 }
 });
 $("#borchure2").on('click',function(){ 
 var checkBox = $('#borchure2');
 var emailText = $('#js-ob-YourEmailContainer');
 emilText.hide();
 if (checkBox.checked == true) {
 emailText.show();
 } 
 });
 var options = {
 type: 'popup',
 responsive: true,
 innerScroll: true,
 title: 'Email sign-up'
 };
 var popup = modal(options, $('#popup-modal'));
 $("#click-me").on('click',function(){ 
 $("#popup-modal").modal("openModal");
 });

 var popup = modal(options, $('#popup-modal-for-someone-else'));
 $("#for-someone-else-click-me").on('click',function(){ 
 $("#popup-modal-for-someone-else").modal("openModal");
 });
 $(document).ready(function(){
 $('.for-someone-borchure').change(
 function(){
 if (this.checked) {
 $('.js-ob-AppendPronoun').show();
 }
 else
 {
 $('.js-ob-AppendPronoun').hide();
 }
 });
 $(".for-myself-note").click(function () {
 $(".for-myself-address-information").toggle(); 
 });

 $(".for-someone-else-note").click(function () {
 $(".for-someone-else-address-information").toggle(); 
 });

 $(".you-for-someone-else-note").click(function () {
 $(".you-for-myself-address-information").toggle(); 
 });

 $("#borchure2").change(function(){
 if(this.checked) {
 $("#js-ob-YourEmailContainer").show();
 } else {
 $("#js-ob-YourEmailContainer").hide();
 }
 });
 
 });
 
 });

</script>
<script type="text/javascript">
//for-myself
var titlemyself = document.getElementById('title-myself');
function validateTitle(){
var title = document.getElementById('for-myself-title').value;
if(title.length == 0){
titlemyself.innerHTML = 'Please enter a value for this field.';
return false;
}
titlemyself.innerHTML='';
return true;
}

var firstname = document.getElementById('first-name');
function validateName(){
var name = document.getElementById('for-myself-fname-id').value;
if(name.length == 0){
firstname.innerHTML = 'Please enter a value for this field.';
return false;
}
firstname.innerHTML='';
return true;
}

var surname = document.getElementById('sur-name');
function validateSname(){
var name = document.getElementById('for-myself-surname-id').value;
if(name.length == 0){
surname.innerHTML = 'Please enter a value for this field.';
return false;
}
surname.innerHTML='';
return true;
}

var nospanid = document.getElementById('no-span-id');
function validateTelephone(){
var phone = document.getElementById('for-myself-no-id').value;
if(phone.length == 0){
nospanid.innerHTML = 'Please enter a value for this field.';
return false;
}
if(!phone.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/)){
nospanid.innerHTML = 'Please ensure this is a valid phone number.';
return false;
}
nospanid.innerHTML='';
return true;
}

//for-someone-else
var titlesomeone = document.getElementById('title-someone');
function validateStitle(){
var title = document.getElementById('someone-their-title').value;
if(title.length == 0){
titlesomeone.innerHTML = 'Please enter a value for this field.';
return false;
}
titlesomeone.innerHTML='';
return true;
}

var someonefirstname = document.getElementById('someone-first-name');
function validateSfname(){
var name = document.getElementById('for-someone-fname-id').value;
if(name.length == 0){
someonefirstname.innerHTML = 'Please enter a value for this field.';
return false;
}
someonefirstname.innerHTML='';
return true;
}

var someonesurname = document.getElementById('someone-sur-name');
function validateSomename(){
var name = document.getElementById('for-someone-surname-id').value;
if(name.length == 0){
someonesurname.innerHTML = 'Please enter a value for this field.';
return false;
}
someonesurname.innerHTML='';
return true;
}

var someonenospanid = document.getElementById('someone-no-span-id');
function validateStelephone(){
var phone = document.getElementById('for-someone-no-id').value;
if(phone.length == 0){
someonenospanid.innerHTML = 'Please enter a value for this field.';
return false;
}
if(!phone.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/)){
someonenospanid.innerHTML = 'Please ensure this is a valid phone number.';
return false;
}
someonenospanid.innerHTML='';
return true;
}

//for someone myself
var titlesomeoneyour = document.getElementById('title-someone-your');
function validateSmtitle(){
var title = document.getElementById('for-someone-your-title').value;
if(title.length == 0){
titlesomeoneyour.innerHTML = 'Please enter a value for this field.';
return false;
}
titlesomeoneyour.innerHTML='';
return true;
}

var someoneyourfirstname = document.getElementById('someone-your-first-name');
function validateSmname(){
var name = document.getElementById('for-someone-your-fname-id').value;
if(name.length == 0){
someoneyourfirstname.innerHTML = 'Please enter a value for this field.';
return false;
}
someoneyourfirstname.innerHTML='';
return true;
}

var someoneyoursurname = document.getElementById('someone-your-sur-name');
function validateSsmname(){
var name = document.getElementById('for-someone-your-surname-id').value;
if(name.length == 0){
someoneyoursurname.innerHTML = 'Please enter a value for this field.';
return false;
}
someoneyoursurname.innerHTML='';
return true;
}

var nosmspanid = document.getElementById('no-smspan-id');
function validateSmtelephone(){
var phone = document.getElementById('for-someone-your-no-id').value;
if(phone.length == 0){
nosmspanid.innerHTML = 'Please enter a value for this field.';
return false;
}
if(!phone.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/)){
nosmspanid.innerHTML = 'Please ensure this is a valid phone number.';
return false;
}
nosmspanid.innerHTML='';
return true;
}
</script>
