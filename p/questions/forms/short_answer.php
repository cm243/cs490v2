<form name="add_short_answer" id="short_answer" method="post" action="">
			<div class="form">
				<div class="form_row">
				<label>Question:</label>
				<input type="text" class="form_input" name="question" id="question" value="<?= $questionArray['data']['question']?>"/>
				</div>
				 
				<div class="form_row">
				<label>Answer:</label>
					<textarea rows="5" cols="50" type="text" class="form_input" name="answer_1" id="answer_1"><?= $questionArray['data']['answer_1']?></textarea>
					<input type="hidden" name="question_id" id="question_id" value="<?=$questionId?>">
				</div>

				<div class="form_row">
				<input type="submit" class="form_submit" value="Submit" />
				</div> 
				<div class="clear"></div>
			</div>
		</form>