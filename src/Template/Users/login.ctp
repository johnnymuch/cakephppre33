<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well" style="margin-top:50px;">
			<div class="panel-heading">
				<div class="panel-body">
				 <div class="users form">
					<?= $this->Form->create() ?>
			
				    <fieldset>
				        <legend><?= __('Login User') ?></legend>
				        <?= $this->Form->input('username') ?>
				        <?= $this->Form->input('password') ?>
				       
				  
				<?= $this->Form->button(__('Submit'),array('class'=>'btn btn-md btn-info')); ?>
				 </fieldset>
				<?= $this->Form->end() ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>