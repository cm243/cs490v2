<form name="add_multiple_answer" id="multiple_answer" method="post" action="">
	<div class="form">
		<div class="form_row">
		<label>Question:</label>
		<input type="text" class="form_input" name="question" id="question" value="<?= $questionArray['data']['question']?>"/>
		</div>
		
		<div class="form_row">
		<label>Choice 1:</label>
			<input type="radio" class="form_input" name="which_is_correct" value="1" <?=($questionArray['data']['which_is_correct']==1) ? 'checked' : '' ?>>
			<input type="text" class="form_input_short" name="answer_1" id="answer_1" value="<?= $questionArray['data']['answer_1']?>"/>
		</div>
		
		<div class="form_row">
		<label>Choice 2:</label>
			<input type="radio" class="form_input" name="which_is_correct" value="2" <?=($questionArray['data']['which_is_correct']==2) ? 'checked' : '' ?>>
			<input type="text" class="form_input_short" name="answer_2" id="answer_2" value="<?= $questionArray['data']['answer_2']?>"/>
		</div>
		
		<div class="form_row">
		<label>Choice 3:</label>
			<input type="radio" class="form_input" name="which_is_correct" value="3" <?=($questionArray['data']['which_is_correct']==3) ? 'checked' : '' ?>>
			<input type="text" class="form_input_short" name="answer_3" id="answer_3" value="<?= $questionArray['data']['answer_3']?>"/>
		</div>
		
		<div class="form_row">
		<label>Choice 4:</label>
			<input type="radio" class="form_input" name="which_is_correct" value="4" <?=($questionArray['data']['which_is_correct']==4) ? 'checked' : '' ?>>
			<input type="text" class="form_input_short" name="answer_4" id="answer_4" value="<?= $questionArray['data']['answer_4']?>"/>
		</div>

		<div class="form_row">
		<label>Choice 5:</label>
			<input type="radio" class="form_input" name="which_is_correct" value="5" <?=($questionArray['data']['which_is_correct']==5) ? 'checked' : '' ?>>
			<input type="text" class="form_input_short" name="answer_5" id="answer_5" value="<?= $questionArray['data']['answer_5']?>"/>
		</div>

		<div class="form_row">
			<input type="hidden" name="id" id="id" value="<?=$questionId?>">
			<input type="submit" class="form_submit" value="Update"/>
		</div> 
		<div class="clear"></div>
	</div>
</form>