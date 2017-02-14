<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well" style="margin-top:50px;">
			<div class="panel-heading">
				<div class="panel-body">
				<h4 class="text-center"><?= __('LOGIN') ?></h4><hr>
				 <div class="users form">
					<?= $this->Form->create() ?>						       
				        <?= $this->Form->input('username') ?>
				        <?= $this->Form->input('password') ?> 
				        <?= $this->Form->button('Submit',array('class'=>'btn btn-md btn-info')); ?>		
				    <?= $this->Form->end() ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>