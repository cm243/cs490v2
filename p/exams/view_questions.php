<?php session_start();?>
<?php require_once '../../bootstrap.php'; ?>
<?php 
if(!isLoggedIn('professor')){
	$msg->error('No direct access allowed. Login Please');
	header('Location: ' . BASE_URL . '/login.php');
	exit;
}
?>
<?php require_once '../../template/header.php'; ?>

<?php
	if(empty($_GET['exam_id'])){
		header('Location: ' . BASE_URL . '/p/exams/exams.php' ) ;
	}
	$examId = $_GET['exam_id'];
	$api = Includes_Requests_Factory::create('questions',array());
	$data = $api->getQuestionsByExamId($examId);
	$questionsArray = json_decode($data['body'],true);
?>
<div id="right_wrap">
	<div id="right_content">
	<h2>View Questions</h2>
		<table id="rounded-corner">
			<thead>
				<tr>
					<th>No.</th>
					<th>Question</th>
					<th>Question Type</th>
					<th>View</th>
					<th>Delete</th>
				</tr>
			</thead>
				<tfoot>
				<tr>
					<td colspan="12"></td>
				</tr>
			</tfoot>
			<tbody>
			<?php $counter = 0; ?>
			<?php foreach($questionsArray['data'] as $id=>$item):?>
				<?php $class = ($counter % 2) ? 'even' : 'odd';?>
				<tr class="<?=$class?>">
					<td><?//=$item['id']?><?=$counter+1?></td>
					<td><?=$item['question']?></td>
					<td><?=$item['question_type']?></td>
					<td><a href="<?=BASE_URL?>/p/questions/edit_question.php?question_id=<?=$item['id']?>"><img src="<?=BASE_URL?>/assets/images/edit.png" alt="" title="" border="0" /></a></td>
					<td><a href="<?=BASE_URL?>/p/questions/delete_question_from_exam.php?question_id=<?=$item['exam_question_id']?>"><img src="<?=BASE_URL?>/assets/images/trash.gif" alt="" title="" border="0" /></a></td>
				</tr>
				<?php $counter+=1;?>
			<?php endforeach; ?>
			
			</tbody>
		</table>
		<div class="clear"></div>
	</div>
</div>

<?php require_once '../../template/footer.php'; ?>