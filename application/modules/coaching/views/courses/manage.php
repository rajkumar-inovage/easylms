<div class="row">
	<div class="col-md-6">
		<div class="card mb-3 ">
			<div class="card-header">
				<h4 class="card-title d-flex justify-content-between">Chapters <span class="badge badge-primary"><?php echo $num_lessons; ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-inline">
				  
				  <li class="list-inline-item">
				  	<a class="" href="<?php echo site_url ('coaching/lessons/index/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-book-open"></i> Chapters</a>
				  </li>

				  <li class="list-inline-item ml-4">
			      	<a class="" href="<?php echo site_url ('coaching/lessons/create/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-plus"></i> Create Chapter</a>
			      </li>

				  <li class="list-inline-item ml-4 ">
			      	<a class="text-success" href="<?php echo site_url ('coaching/indiatests/lesson_plans/'.$coaching_id.'/'.$course_id.'/0/0'); ?>"><i class="fa fa-shopping-cart"></i> Import Free Lessons</a>
			      </li>

				  <li class="list-inline-item ml-4 ">
			      	<a class="text-success" href="<?php echo site_url ('coaching/indiatests/lesson_plans/'.$coaching_id.'/'.$course_id.'/0/1'); ?>"><i class="fa fa-shopping-cart"></i> Buy From IndiaTests</a>
			      </li>

				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card mb-3 ">
			<div class="card-header">
				<h4 class="card-title d-flex justify-content-between">Tests <span class="badge badge-primary"><?php //echo $num_lessons; ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-inline">
				  
				  <li class="list-inline-item">
				  	<a class="" href="<?php echo site_url ('coaching/tests/index/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-puzzle-piece"></i> Tests</a>
				  </li>

				  <li class="list-inline-item ml-4">
			      	<a class="" href="<?php echo site_url ('coaching/tests/create_test/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-plus"></i> Create Test</a>
			      </li>

				  <li class="list-inline-item ml-4 ">
			      	<a class="text-success" href="<?php echo site_url ('coaching/indiatests/test_plans/'.$coaching_id.'/'.$course_id.'/0/0'); ?>"><i class="fa fa-shopping-cart"></i> Import Free Tests</a>
			      </li>

				  <li class="list-inline-item ml-4 ">
			      	<a class="text-success" href="<?php echo site_url ('coaching/indiatests/test_plans/'.$coaching_id.'/'.$course_id.'/0/1'); ?>"><i class="fa fa-shopping-cart"></i> Buy From IndiaTests</a>
			      </li>

				</ul>
			</div>
		</div>
	</div>
</div>

<div class="row">

	<?php if ($is_admin): ?>
		<div class="col-md-6">
			<div class="card mb-3 ">
				<div class="card-header">
					<h4 class="card-title d-flex justify-content-between">Teachers <span class="badge badge-primary"><?php //echo $num_lessons; ?></span></h4>
				</div>
				<div class="card-body">
					<ul class="list-inline">
					  
					  <li class="list-inline-item">
					  	<a class="" href="<?php echo site_url ('coaching/courses/teachers/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-user-tie"></i> Teachers</a>
					  </li>

					  <li class="list-inline-item ml-4">
				      	<a class="" href="<?php echo site_url ('coaching/courses/teachers/'.$coaching_id.'/'.$course_id.'/'.TEACHERS_NOT_ASSIGNED) ?>"><i class="fa fa-plus"></i> Add Teacher</a>
				      </li>

					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="col-md-6">
		<div class="card mb-3 ">
			<div class="card-header">
				<h4 class="card-title d-flex justify-content-between">Organize <span class="badge badge-primary"><?php //echo $num_lessons; ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-inline">
					<?php if ($course['enrolment_type'] == COURSE_ENROLMENT_DIRECT) { ?>
					  <li class="list-inline-item">
					  	<a class="" href="<?php echo site_url ('coaching/courses/organize/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-file"></i> Organize Contents</a>
					  </li>
					  <li class="list-inline-item ml-4">
					  	<a class="" href="<?php echo site_url ('coaching/enrolments/batch_users/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-users"></i> Enrolments</a>
					  </li>
					<?php } else { ?>
					  <li class="list-inline-item">
					  	<a class="" href="<?php echo site_url ('coaching/enrolments/batches/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-users"></i> Batches and Schedules</a>
					  </li>
					<?php } ?>
				  
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-6 d-none">
		<div class="card mb-3 ">
			<div class="card-header">
				<h4 class="card-title d-flex justify-content-between">Enrolment <span class="badge badge-primary"><?php //echo $num_lessons; ?></span></h4>
			</div>
			<div class="card-body">
				<ul class="list-inline">
					<?php if ($course['enrolment_type'] == COURSE_ENROLMENT_DIRECT) { ?>
					  <li class="list-inline-item">
					  	<a class="" href="<?php echo site_url ('coaching/enrolments/batch_users/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-users"></i> Enrolments</a>
					  </li>
					<?php } else { ?>
					  <li class="list-inline-item">
					  	<a class="" href="<?php echo site_url ('coaching/enrolments/batches/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-users"></i> Batches and Schedules</a>
					  </li>
					<?php } ?>
				  
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card mb-3 ">
			<div class="card-header">
				<?php if($is_admin): ?>
				<h4 class="card-title d-flex justify-content-between">Settings</h4>
				<?php else: ?>
				<h4 class="card-title d-flex justify-content-between">Preview</h4>
				<?php endif; ?>
				<?php if($is_admin): ?>
				<?php endif; ?>
			</div>
			<div class="card-body">
				<ul class="list-inline">
				<?php if($is_admin): ?>
				  <li class="list-inline-item ">
				  	<a class="" href="<?php echo site_url ('coaching/courses/preview/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-search"></i> Preview</a>
				  </li>
				<?php else: ?>
				  <li class="list-inline-item ">
				  	<a class="" href="<?php echo site_url ('coaching/courses/preview/'.$coaching_id.'/'.$course_id); ?>"><i class="fa fa-eye"></i> Preview</a>
				  </li>
				<?php endif; ?>
				<?php if($is_admin): ?>
				  <li class="list-inline-item ml-4">
				  	<a class="" href="<?php echo site_url ('coaching/courses/edit/'.$coaching_id.'/'.$cat_id.'/'.$course_id); ?>"><i class="fa fa-edit"></i> Edit</a>
				  </li>

				  <li class="list-inline-item ml-4">
			      	<a class="" href="<?php echo site_url ('coaching/courses/add_teachers/'.$coaching_id.'/'.$cat_id.'/'.$course_id); ?>" class="text-danger"><i class="fa fa-trash"></i> Delete Course</a>
			      </li>
			    <?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
