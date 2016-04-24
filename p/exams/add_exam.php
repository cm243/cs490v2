<?php session_start();?>
<?php require_once '../../bootstrap.php'; ?>
<?php require_once '../../template/header.php'; ?>

<?php 
	$api = Includes_Requests_Factory::create('classes',array());
	$classes = $api->getClasses();
	$classesArray = json_decode($classes['body'],true);
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$api = Includes_Requests_Factory::create('exams',array());
		$res = $api->addExam($_POST);
		$msg->success('Record Updated');
		header('Location: ' .BASE_URL . '/p/exams/exams.php');
	}
?>

<div id="right_wrap"><div id="right_content">
<h2>Add Exam</h2>
<form name="add_exam" method="post" action="">
	<div class="form">
		<div class="form_row">
		<label>Exam Title:</label>
		<input type="text" class="form_input" name="code" id="code" value=""/>
		</div>
		
		<div class="form_row">
			<label>Class:</label>
			<select class="form_select" name="class">
				<?php foreach($classesArray['data'] as $id=>$item):?>
				<option value="<?=$item['id']?>"><?=$item['code']?> - <?=$item['title']?></option>
				<?php endforeach;?>
			</select>
		</div>
		
		<div class="form_row">
			<label>Status:</label>
			<select class="form_select" name="status">
				<option value="open"   >Open</option>
				<option value="closed" >Closed</option>
			</select>
		</div>

		<div class="form_row">
			<input type="hidden" class="form_input" name="id" id="id" value="1"/>
		</div>
		<div class="form_row">
		<input type="submit" class="form_submit" value="Submit" />
		</div> 
		<div class="clear"></div>
	</div>
</form>
</div>
</div>
<?php require_once '../../template/footer.php'; ?>

