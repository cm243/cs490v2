<?php session_start();?>
<?php require_once '../../bootstrap.php'; ?>
<?php require_once '../../template/header.php'; ?>
<p>Index</p>


<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$testString = $_POST['answer_1'] . $_POST['answer_2'] . "}";
		
		
		
		$file = fopen("test.java","w+");
		fwrite($file,$testString);
		fclose($file);
		
		exec("javac test.java");
		exec("java Testing",$testOutput);
		
		if ($testOutput[0]==$_POST['answer_3']){
			dd("Success");
		}
		else{
			dd("failure");
		}
		//dd(")" . $testOutput[0] . "(     )" . $_POST['answer_3'] . "(");
		exit;
	}
?>



<div id="right_wrap">
    <div id="right_content">
    	<h2>New "Essay" Question</h2>          
		<form name="add_short_answer" id="short_answer" method="post" action="">
			<div class="form">
				<div class="form_row">
				<label>Question:</label>
				<input type="text" class="form_input" name="question" id="question" value=""/>
				</div>

				<div class="form_row">
				<label>Input:</label>
				<textarea rows="5" cols="50" class="form_input_tall" name="answer_1" id="answer_1"></textarea>
				</div>
				
				<div class="form_row">
				<label>Suggested function:</label>
				<textarea rows="5" cols="50" class="form_input_tall" name="answer_2" id="answer_2"></textarea>
				</div>
				
				<div class="form_row">
				<label>Desired Output:</label>
				<textarea rows="5" cols="50" class="form_input_short" name="answer_3" id="answer_3"></textarea>
				</div>

				<div class="form_row">
				<input type="hidden" name="question_type" id="question_type" value="short_answer"> 
				<input type="hidden" name="professor_id" id="professor_id" value="1"> <!--  todo -->
				<input type="submit" class="form_submit" value="Submit" />
				</div> 
				<div class="clear"></div>
			</div>
		</form>
    </div>
</div>










<?php require_once '../../template/footer.php'; ?>

