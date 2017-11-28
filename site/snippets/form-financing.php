
	<form id="form" class="form financing-form" action="<?php echo $page->url()?>/#form" method="post">
 
	
	<h6>Contact Information</h6>
	<div class="seperator"><div class="triangle"></div></div>

	<div class="financing-form__row">
	
	<div class="financing-form__left">

	<label for="title">Title</label>
   <select name="title" id="title">
       <?php $value = $form->value('title') ?>
       <option value="" disabled selected>Choose your title</option>
       <option value="Dr."<?php e($value=='Dr.', ' selected')?>>Dr.</option>
       <option value="Mr."<?php e($value=='Mr.', ' selected')?>>Mr.</option>
       <option value="Ms."<?php e($value=='Ms.', ' selected')?>>Ms.</option>
       <option value="Miss"<?php e($value=='Miss', ' selected')?>>Miss</option>
       <option value="Mrs."<?php e($value=='Mrs.', ' selected')?>>Mrs.</option>
   </select>

	<label for="first-name">First Name</label>
	<input<?php e($form->hasError('first-name'), ' class="erroneous"')?> type="text" name="first-name" id="first-name" value="
		<?php $form->echoValue('first-name') ?>" required="true" autocomplete="off" class="form__input" />
		
	<label for="middle-name">Middle Name</label>
	<input<?php e($form->hasError('middle-name'), ' class="erroneous"')?> type="text" name="middle-name" id="middle-name" value="
		<?php $form->echoValue('middle-name') ?>" autocomplete="off" class="form__input" />
		
	<label for="last-name">Last Name</label>
	<input<?php e($form->hasError('last-name'), ' class="erroneous"')?> type="text" name="last-name" id="last-name" value="
		<?php $form->echoValue('last-name') ?>" required="true" autocomplete="off" class="form__input" />
	
	<label for="suffix">Suffix</label>
  <select name="suffix" id="suffix">
       <?php $value = $form->value('suffix') ?>
       <option value="" disabled selected>Choose your suffix</option>
       <option value="I"<?php e($value=='I', ' selected')?>>I</option>
       <option value="II"<?php e($value=='II', ' selected')?>>II</option>
       <option value="III"<?php e($value=='III', ' selected')?>>III</option>
       <option value="IV"<?php e($value=='IV', ' selected')?>>IV</option>
       <option value="JR"<?php e($value=='JR', ' selected')?>>JR</option>
       <option value="SR"<?php e($value=='SR', ' selected')?>>SR</option>
   </select>	
   
	</div>	
	
	<div class="financing-form__right">
		
	<label for="phone-number">Phone Number</label>
	<input<?php e($form->hasError('phone-number'), ' class="erroneous"')?> type="tel" name="phone-number" id="phone-number" value="
		<?php $form->echoValue('phone-number') ?>" required="true" autocomplete="off" class="form__input" />
		
	<label for="email">Email</label>
	<input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="email" id="email" value="
		<?php $form->echoValue('_from') ?>" required="true" autocomplete="off" class="form__input" />	
		
	</div>
		
	</div>	
		
	<!-- End Contact Information -->

	<h6>Current Address</h6>
	<div class="seperator"><div class="triangle"></div></div>	
		
	<div class="financing-form__row">
	
		<div class="financing-form__left">
			
		<label for="address-type">Address Type</label>
  	<select name="address-type" id="address-type">
       <?php $value = $form->value('address-type') ?>
       <option value="" disabled selected>Address Type</option>
       <option value="street"<?php e($value=='street', ' selected')?>>Street</option>
       <option value="rural-route"<?php e($value=='rural-route', ' selected')?>>Rural Route</option>
       <option value="postal-box"<?php e($value=='postal-box', ' selected')?>>Postal Box</option>
   </select>
   
   <label for="street-number">Street Number</label>
		<input<?php e($form->hasError('street-number'), ' class="erroneous"')?> type="text" name="street-number" id="street-number" value="
		<?php $form->echoValue('street-number') ?>" required="true" autocomplete="off" class="form__input" />	
		
	<label for="street-name">Street Name</label>
		<input<?php e($form->hasError('street-name'), ' class="erroneous"')?> type="text" name="street-name" id="street-name" value="
		<?php $form->echoValue('street-name') ?>" required="true" autocomplete="off" class="form__input" />	
		
	<label for="unit-number">Unit Number</label>
		<input<?php e($form->hasError('unit-number'), ' class="erroneous"')?> type="text" name="unit-number" id="unit-number" value="
		<?php $form->echoValue('unit-number') ?>" autocomplete="off" class="form__input" />	
			
		</div>
		
		<div class="financing-form__right">
			
			<label for="city">City</label>
				<input<?php e($form->hasError('city'), ' class="erroneous"')?> type="text" name="city" id="city" value="
				<?php $form->echoValue('city') ?>" required="true" autocomplete="off" class="form__input" />	
				
			<label for="province">Province</label>
			<select name="province" id="province">
				 <?php $value = $form->value('province') ?>
				 <option value="" disabled selected>Province</option>
				 <option value="alberta"<?php e($value=='alberta', ' selected')?>>Alberta</option>
				 <option value="british-columbia"<?php e($value=='british-columbia', ' selected')?>>British Columbia</option>
				 <option value="manitoba"<?php e($value=='manitoba', ' selected')?>>Manitoba</option>
				 <option value="new-brunswick"<?php e($value=='new-brunswick', ' selected')?>>New Brunswick</option>
				 <option value="newfoundland-and-labrador"<?php e($value=='newfoundland-and-labrador', ' selected')?>>Newfoundland and Labrador</option>
				 <option value="northwest-territories"<?php e($value=='northwest-territories', ' selected')?>>Northwest Territories</option>
				 <option value="nova-scotia"<?php e($value=='nova-scotia', ' selected')?>>Nova Scotia</option>
				 <option value="ontario"<?php e($value=='ontario', ' selected')?>>Ontario</option>
				 <option value="prince-edward-island"<?php e($value=='prince-edward-island', ' selected')?>>Prince Edward Island</option>
				 <option value="quebec"<?php e($value=='quebec', ' selected')?>>Quebec</option>
				 <option value="saskatchewan"<?php e($value=='saskatchewan', ' selected')?>>Saskatchewan</option>
				 <option value="yukon"<?php e($value=='yukon', ' selected')?>>Yukon</option>
		 </select>
		 
		 <label for="postal-code">Postal Code</label>
			<input<?php e($form->hasError('postal-code'), ' class="erroneous"')?> type="text" name="postal-code" id="postal-code" value="
			<?php $form->echoValue('postal-code') ?>" required="true" autocomplete="off" class="form__input" />
			
		<label for="years-at-address">Years at Address</label>
			<input<?php e($form->hasError('years-at-address'), ' class="erroneous"')?> type="text" name="years-at-address" id="years-at-address" value="
			<?php $form->echoValue('years-at-address') ?>" autocomplete="off" class="form__input" />
			
		<label for="months-at-address">Months at Address</label>
			<input<?php e($form->hasError('months-at-address'), ' class="erroneous"')?> type="text" name="months-at-address" id="months-at-address" value="
			<?php $form->echoValue('months-at-address') ?>" autocomplete="off" class="form__input" />
			
		</div>
	
	</div>
		
	<!-- End Current Address -->
	
	<h6>Personal Information</h6>
	<div class="seperator"><div class="triangle"></div></div>	
	
	<div class="financing-form__row">
		
		<div class="financing-form__left">
		
		<label for="date-of-birth">Date of Birth</label>
			<input type="text" onfocus="(this.type='date')">
			
		<label for="sin">SIN</label>
			<input<?php e($form->hasError('sin'), ' class="erroneous"')?> type="text" name="sin" id="sin" value="
			<?php $form->echoValue('sin') ?>" required="true" autocomplete="off" class="form__input" /> 
			
		</div>
		
		<div class="financing-form__right">
			
			<label for="marital-status">Marital Status</label>
			<select name="marital-status" id="marital-status">
				 <?php $value = $form->value('marital-status') ?>
				 <option value="" disabled selected>Marital Status</option>
				 <option value="divorced"<?php e($value=='divorced', ' selected')?>>Divorced</option>
				 <option value="married"<?php e($value=='married', ' selected')?>>Married</option>
				 <option value="manitoba"<?php e($value=='manitoba', ' selected')?>>Common Law</option>
				 <option value="widow-widower"<?php e($value=='widow-widower', ' selected')?>>Widow/ Widower</option>
				 <option value="seperated"<?php e($value=='seperated', ' selected')?>>Seperated</option>
				 <option value="single"<?php e($value=='single', ' selected')?>>Single</option>
		 </select>
		 
		 <label for="gender">Gender</label>
			<select name="gender" id="gender">
				 <?php $value = $form->value('gender') ?>
				 <option value="" disabled selected>Choose YourGender</option>
				 <option value="male"<?php e($value=='male', ' selected')?>>Male</option>
				 <option value="female"<?php e($value=='female', ' selected')?>>Female</option>
		 </select>
			
		</div>
	
	
	</div>
	
	<!-- End Personal Information -->
		

	<button class="contact-submit submit" type="submit" name="_submit" value="<?php echo $form->token() ?>" <?php e($form->successful(), ' disabled')?>>Submit</button>

</form>
