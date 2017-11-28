
	<form id="form" class="form" action="<?php echo $page->url()?>/#form" method="post">

	<label for="name">First Name</label>
	<input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="
		<?php $form->echoValue('name') ?>" required="true" autocomplete="off" placeholder="First Name" class="form__input" />

					<label for="_from">Email</label>
					<input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="
						<?php $form->echoValue('_from') ?>" required autocomplete="off" class="form__input" />

							<label for="phone">Phone</label>
							<input<?php e($form->hasError('phone'), ' class="erroneous"')?> type="tel" name="phone" id="email" value="
								<?php $form->echoValue('phone') ?>" required autocomplete="off" class="form__input" />

									<label for="message">Message</label>
									<textarea rows="5" name="message" id="message">
										<?php $form->echoValue('message') ?>
									</textarea>

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
