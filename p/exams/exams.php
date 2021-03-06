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
	$api = Includes_Requests_Factory::create('exams',array());
	$exams = $api->getExamsByProfessorId($_SESSION['id']); // Todo
	$examsArray = json_decode($exams['body'],true);
?>

<div id="right_wrap">
	<p><?=$msg->display();?></p>
    <div id="right_content">             
    <h2>Available Exams</h2> 

<table id="rounded-corner">
    <thead>
    	<tr>
            <th>Id</th>
            <th>Class CODE</th>
            <th>Class Title</th>
			<th>Exam Title</th>
            <th>Exam Status</th>
            <th>Edit Exam</th>
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
    <?php foreach($examsArray['data'] as $id=>$item):?>
		<?php $class = ($counter % 2) ? 'even' : 'odd';?>
    	<tr class="<?=$class?>">
            <td><?=$item['id']?></td>
            <td><?=$item['code']?></td>
            <td><?=$item['class_title']?></td>
            <td><?=$item['title']?></td>
            <td>
            	<?//=($item['is_available']) ? 'Open' : 'Closed'?>
            	<?php if($item['is_available']==0){
            		echo 'Closed';
            	}
				elseif($item['is_available']==1){
					echo 'Open';
				}
				elseif($item['is_available']==2){
					echo 'Released';
				}
            	?>
            </td>
            <td><a href="<?=BASE_URL?>/p/exams/edit_exam.php?exam_id=<?=$item['id']?>"><img src="<?=BASE_URL?>/assets/images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?=BASE_URL?>/p/exams/delete_exam.php?exam_id=<?=$item['id']?>"><img src="<?=BASE_URL?>/assets/images/trash.gif" alt="" title="" border="0" /></a></td>
		</tr>
		<?php $counter+=1;?>
  <?php endforeach; ?>
        
    </tbody>
</table>

      
     </div>
     </div>


<?php require_once '../../template/footer.php'; ?>