
<div class="users index large-12 medium-12 columns content">
	<div class="col-md-6"><h3><?= $this->Html->link(__('Create New'), ['action' => 'add']) ?></h3></div>
	<div class="col-md-6">
		<!-- <input type="text" name="username" id="autocomplete" onclick="#" /> -->
		<!-- <input type="text" name="sample_search" id="sample_search" onkeyup="search_func(this.value);"> -->
	</div>
	<table class="table-responsive table-striped table" id="myTable" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th scope="col" width="10%"><?= $this->Paginator->sort('id') ?></th>				
				<th scope="col"><?= $this->Paginator->sort('username') ?></th>		
				<th scope="col"><?= $this->Paginator->sort('email') ?></th>		               
				<th scope="col"><?= $this->Paginator->sort('created') ?></th>
				<th scope="col"><?= $this->Paginator->sort('modified') ?></th>				
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user): ?>
			<tr>
				<td><?= $this->Number->format($user->id) ?></td>
				<td><?= h($user->username) ?></td>
				<td><?= h($user->email) ?></td> 			     
				<td><?= h($user->created) ?></td>
				<td><?= h($user->modified) ?></td>
			 
				<td class="actions">
					<?= $this->Html->link(__(''), ['action' => 'view', $user->id],array('class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open')) ?>
					<?= $this->Html->link(__(''), ['action' => 'edit', $user->id],array('class'=>'btn btn-xs btn-success glyphicon glyphicon-edit')) ?>
				   <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),'class'=>'btn btn-danger btn-xs glyphicon glyphicon-trash']) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>

<script>
var BaseUrl = '<?php echo $this->Url->build('/', true); ?>';
function search_func(value)
{
    $.ajax({
       type: "post",
       url: BaseUrl+"users/serchKeyword",
       data: {'search_keyword' : value},
       dataType: "text",
       success: function(msg){
      //Receiving the result of search here

       }
    });
}

$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>