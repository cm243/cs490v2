<form name="add_true_or_false" id="true_or_false" method="post" action="">
	<div class="form">
		<div class="form_row">
		<label>Question:</label>
		<input type="text" class="form_input" name="question" id="question" value="<?= $questionArray['data']['question']?>"/>
		</div>
		
		<div class="form_row">
		<label>True:</label>
		<input type="radio" class="form_input" name="is_true" value="1" <?=($questionArray['data']['is_true']==1) ? ' checked' : ''?>>
		</div>
		
		<div class="form_row">
		<label>False:</label>
		<input type="radio" class="form_input" name="is_true" value="0" <?=($questionArray['data']['is_true']==0) ? ' checked' : ''?>>
		</div>

		<div class="form_row">
			<input type="hidden" name="id" id="id" value="<?=$questionId?>">
			<input type="submit" class="form_submit" value="Update"/>
		</div> 
		<div class="clear"></div>
	</div>
</form>