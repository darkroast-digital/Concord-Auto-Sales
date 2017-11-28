<form id="form" class="form financing-form" action="<?php echo $page->url()?>/#form" method="post">

	<h6>Contact Information</h6>
	<div class="seperator">
		<div class="triangle"></div>
	</div>

	<div class="financing-form__row">

		<div class="financing-form__left">

			<label for="title">Title</label>
			<select name="title" id="title">
				<?php $value = $form->value('title') ?>
					<option value="Dr." <?php e($value=='Dr.' , ' selected')?>>Dr.</option>
					<option value="Mr." <?php e($value=='Mr.' , ' selected')?>>Mr.</option>
					<option value="Ms." <?php e($value=='Ms.' , ' selected')?>>Ms.</option>
					<option value="Miss" <?php e($value=='Miss' , ' selected')?>>Miss</option>
					<option value="Mrs." <?php e($value=='Mrs.' , ' selected')?>>Mrs.</option>
			</select>

			<label for="name">First Name</label>
			<input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="
				<?php $form->echoValue('name') ?>" required="true" autocomplete="off" class="form__input" />

					<label for="middle-name">Middle Name</label>
					<input<?php e($form->hasError('middle-name'), ' class="erroneous"')?> type="text" name="middle-name" id="middle-name" value="
						<?php $form->echoValue('middle-name') ?>" required="true" autocomplete="off" class="form__input" />

							<label for="last-name">Last Name</label>
							<input<?php e($form->hasError('last-name'), ' class="erroneous"')?> type="text" name="last-name" id="last-name" value="
								<?php $form->echoValue('last-name') ?>" required autocomplete="off" class="form__input" />

									<label for="suffix">Suffix</label>
									<select name="suffix" id="suffix">
										<?php $value = $form->value('suffix') ?>
											<option value="I" <?php e($value=='I' , ' selected')?>>I</option>
											<option value="II" <?php e($value=='II' , ' selected')?>>II</option>
											<option value="III" <?php e($value=='III' , ' selected')?>>III</option>
											<option value="IV" <?php e($value=='IV' , ' selected')?>>IV</option>
											<option value="JR" <?php e($value=='JR' , ' selected')?>>JR</option>
											<option value="SR" <?php e($value=='SR' , ' selected')?>>SR</option>
									</select>

		</div>

		<div class="financing-form__right">

			<label for="phone">Phone</label>
			<input<?php e($form->hasError('phone'), ' class="erroneous"')?> type="tel" name="phone" id="email" value="
				<?php $form->echoValue('phone') ?>" required autocomplete="off" class="form__input" />

					<label for="_from">Email</label>
					<input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="
						<?php $form->echoValue('_from') ?>" required autocomplete="off" class="form__input" />

		</div>

	</div>

	<!-- End Contact Information -->

	<h6>Current Address</h6>
	<div class="seperator">
		<div class="triangle"></div>
	</div>

	<div class="financing-form__row">

		<div class="financing-form__left">

			<label for="address-type">Address Type</label>
			<select name="address-type" id="address-type" required>
				<?php $value = $form->value('address-type') ?>
					<option value="Street" <?php e($value=='Street' , ' selected')?>>Street</option>
					<option value="Rural Route" <?php e($value=='Rural Route' , ' selected')?>>Rural Route</option>
					<option value="Post Box" <?php e($value=='Post Box' , ' selected')?>>Post Box</option>
			</select>

			<label for="street-number">Street Number</label>
			<input<?php e($form->hasError('street-number'), ' class="erroneous"')?> type="text" name="street-number" id="street-number" value="
				<?php $form->echoValue('street-number') ?>" required autocomplete="off" class="form__input" />

					<label for="street-name">Street Name</label>
					<input<?php e($form->hasError('street-name'), ' class="erroneous"')?> type="text" name="street-name" id="street-name" value="
						<?php $form->echoValue('street-name') ?>" required autocomplete="off" class="form__input" />

							<label for="unit-number">Unit Number</label>
							<input<?php e($form->hasError('unit-number'), ' class="erroneous"')?> type="text" name="unit-number" id="unit-number" value="
								<?php $form->echoValue('unit-number') ?>" autocomplete="off" class="form__input" />

		</div>

		<div class="financing-form__right">

			<label for="city">City</label>
			<input<?php e($form->hasError('city'), ' class="erroneous"')?> type="text" name="city" id="city" value="
				<?php $form->echoValue('city') ?>" required autocomplete="off" class="form__input" />

					<label for="province">Province</label>
					<select name="province" id="province" required>
						<?php $value = $form->value('province') ?>
							<option value="Alberta" <?php e($value=='Alberta' , ' selected')?>>Alberta</option>
							<option value="British Columbia" <?php e($value=='British Columbia' , ' selected')?>>British Columbia</option>
							<option value="Manitoba" <?php e($value=='Manitoba' , ' selected')?>>Manitoba</option>
							<option value="New Brunswick" <?php e($value=='New Brunswick' , ' selected')?>>New Brunswick</option>
							<option value="Newfoundland and Labrador" <?php e($value=='Newfoundland and Labrador' , ' selected')?>>Newfoundland and Labrador</option>
							<option value="Northwest Territories" <?php e($value=='Northwest Territories' , ' selected')?>>Northwest Territories</option>
							<option value="Nova Scotia" <?php e($value=='Nova Scotia' , ' selected')?>>Nova Scotia</option>
							<option value="Ontario" <?php e($value=='Ontario' , ' selected')?>>Ontario</option>
							<option value="Prince Edward Island" <?php e($value=='Prince Edward Island' , ' selected')?>>Prince Edward Island</option>
							<option value="Quebec" <?php e($value=='Quebec' , ' selected')?>>Quebec</option>
							<option value="Saskatchewan" <?php e($value=='Saskatchewan' , ' selected')?>>Saskatchewan</option>
							<option value="Yukon" <?php e($value=='Yukon' , ' selected')?>>Yukon</option>
					</select>

					<label for="postal-code">Postal Code</label>
					<input<?php e($form->hasError('postal-code'), ' class="erroneous"')?> type="text" name="postal-code" id="postal-code" value="
						<?php $form->echoValue('postal-code') ?>" required autocomplete="off" class="form__input" />

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
	<div class="seperator">
		<div class="triangle"></div>
	</div>

	<div class="financing-form__row">

		<div class="financing-form__left">

			<label for="date-of-birth">Date of Birth</label>
			<input<?php e($form->hasError('date-of-birth'), ' class="erroneous"')?> type="text" name="date-of-birth" id="date-of-birth" value="
				<?php $form->echoValue('date-of-birth') ?>" required autocomplete="off" class="form__input" />

					<label for="sin">SIN</label>
					<input<?php e($form->hasError('sin'), ' class="erroneous"')?> type="text" name="sin" id="sin" value="
						<?php $form->echoValue('sin') ?>" required autocomplete="off" class="form__input" />

		</div>

		<div class="financing-form__right">

			<label for="marital-status">Marital Status</label>
			<select name="marital-status" id="marital-status" required>
				<?php $value = $form->value('marital-status') ?>
					<option value="Divorced" <?php e($value=='Divorced' , ' selected')?>>Divorced</option>
					<option value="Married" <?php e($value=='Married' , ' selected')?>>Married</option>
					<option value="Common Law" <?php e($value=='Common Law' , ' selected')?>>Common Law</option>
					<option value="Widow-Widower" <?php e($value=='Widow-Widower' , ' selected')?>>Widow/ Widower</option>
					<option value="Seperated" <?php e($value=='Seperated' , ' selected')?>>Seperated</option>
					<option value="Single" <?php e($value=='Single' , ' selected')?>>Single</option>
			</select>


			<label for="gender">Gender</label>
			<select name="gender" id="gender" required>
				<?php $value = $form->value('gender') ?>
					<option value="Male" <?php e($value=='Male' , ' selected')?>>Male</option>
					<option value="Female" <?php e($value=='Female' , ' selected')?>>Female</option>
			</select>

		</div>

	</div>


	<label class="uniform__potty" for="website">Please leave this field blank</label>
	<input type="text" name="website" id="website" class="uniform__potty" />

	<a name="form"></a>
	<?php if ($form->hasMessage()): ?>
		<div class="message <?php e($form->successful(), 'success' , 'error')?>">
			<?php $form->echoMessage() ?>
		</div>
		<?php endif; ?>

			<button class="contact-submit submit" type="submit" name="_submit" value="<?php echo $form->token() ?>" <?php e($form->successful(), ' disabled')?>>Submit</button>

</form>
