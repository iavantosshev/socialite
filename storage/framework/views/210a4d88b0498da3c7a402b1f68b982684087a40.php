
<div class="panel panel-default">
	<div class="panel-heading no-bg panel-settings">	
	<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<h3 class="panel-title">
			<?php echo e($mode.' '.trans('admin.page_category')); ?>

		</h3>
	</div>
	<div class="panel-body">		
	<?php if($mode=="create"): ?>
		<form method="POST" class="socialite-form" action="<?php echo e(url('admin/category/create')); ?>">
	<?php else: ?>
		<form method="POST" class="socialite-form" action="<?php echo e(url('admin/category/'.$category->id.'/update')); ?>">
	<?php endif; ?>		    
	
	<?php echo e(csrf_field()); ?>

		<div class="form-horizontal announcements">
			<div class="form-group required <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
			    <?php echo e(Form::label('name', trans('admin.name'), ['class' => 'col-sm-2 control-label'])); ?>

			    <div class="col-sm-10">
			      <?php if($mode == "create"): ?>
			      	<?php echo e(Form::text('name',null,['class' => 'form-control'])); ?>

			      <?php else: ?>
			      	<?php echo e(Form::text('name', $category->name, ['class' => 'form-control'])); ?>

			      <?php endif; ?>
			      
			      <?php if($errors->has('name')): ?>
			      <span class="help-block">
			      	<strong><?php echo e($errors->first('name')); ?></strong>
			      </span>
			      <?php endif; ?>
			    </div>
			</div>
			<div class="form-group required <?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
			    <?php echo e(Form::label('description', trans('common.description'), ['class' => 'col-sm-2 control-label'])); ?>

			    <div class="col-sm-10">
			     	<?php if($mode =="create"): ?>
			     		<?php echo e(Form::textarea('description', null ,['class' => 'form-control'])); ?>

			     	<?php else: ?>
			     	<?php echo e(Form::textarea('description', $category->description, ['class' => 'form-control'])); ?>

			     	<?php endif; ?>

			     	<?php if($errors->has('description')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('description')); ?></strong>
					</span>
					<?php endif; ?>		     	
			    </div>
			</div>

			<div class="form-group required <?php echo e($errors->has('active') ? ' has-error' : ''); ?>">
			    <?php echo e(Form::label('active', trans('admin.active'), ['class' => 'col-sm-2 control-label'])); ?>

			    <div class="col-sm-10">
			     	<?php if($mode =="create"): ?>
			     		<?php echo e(Form::select('active', array(1 => trans('admin.active'), 0 => trans('admin.inactive')), null , ['class' => 'form-control', 'placeholder' => trans('admin.please_select')])); ?>

			     	<?php else: ?>
			     		<?php echo e(Form::select('active', array(1 => trans('admin.active'), 0 => trans('admin.inactive')), $category->active , ['class' => 'form-control', 'placeholder' => trans('admin.please_select')])); ?>

			     	<?php endif; ?>

			     	<?php if($errors->has('active')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('active')); ?></strong>
					</span>
					<?php endif; ?>		     	
			    </div>
			</div>
			

			<div class="form-group">
			    <div class="text-center">
			      <?php if($mode=="create"): ?>
			      	<button type="submit" class="btn btn-success"><?php echo e(trans('common.create')); ?></button>
			      <?php else: ?>
			      	<button type="submit" class="btn btn-success"><?php echo e(trans('common.save_changes')); ?></button>
			      <?php endif; ?>
			    </div>
			</div>
		</div><!-- /announcements -->
		</form>
	</div>
</div>












