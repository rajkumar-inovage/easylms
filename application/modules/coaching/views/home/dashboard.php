<div class="row justify-content-center mb-10">
	<div class="col-md-3">
		
		<!----// Plan //-->
		<div class="card shadow mb-3">
			<div class="card-body">
				<div class="media">
					<div class="media-left ">
						<?php if ($subscription['ending_on'] > time ()) { ?>
							<span class="icon-block half bg-success"><i class="fa fa-check "></i></span>
						<?php } else { ?>
							<span class="icon-block half bg-danger"><i class="fa fa-times "></i></span>
						<?php } ?>
					</div>
					<div class="media-body ml-2">
						<h6><?php echo anchor ('coaching/subscription/index/'.$coaching_id.'/'.$subscription['sp_id'], $subscription['title'], ['class'=>'link-streched']); ?></h6>
						<p>Ending On: <?php echo date ('d M, Y', $subscription['ending_on']); ?></p>
					</div>
				</div>
			</div>
		</div>

		
		<!----// Users //-->
		<div class="card mb-3 shadow-sm">
			<div class="card-header ">
				<h4 class="d-flex justify-content-between">
					<span>Users</span>
					<span class="badge badge-primary"><?php echo $users['total']; ?></span>
				 </h4>
			</div>
			<ul class="list-group">
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/users/index/'.$coaching_id.'/'.USER_ROLE_TEACHER, 'Teachers'); ?></div>
					<div class="media-right"><?php echo $users['num_teachers']; ?></div>
				</li>
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/users/index/'.$coaching_id.'/'.USER_ROLE_STUDENT, 'Student'); ?></div>
					<div class="media-right"><?php echo $users['num_students']; ?></div>
				</li>
				<li class="list-group-item media d-none">
					<div class="media-body"><?php echo anchor ('coaching/users/index/'.$coaching_id.'/0/'.USER_STATUS_ENABLED, 'Active'); ?></div>
					<div class="media-right"><?php echo $users['num_active']; ?></div>
				</li>
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/users/index/'.$coaching_id.'/0/'.USER_STATUS_DISABLED, 'Disabled'); ?></div>
					<div class="media-right"><?php echo $users['num_disabled']; ?></div>
				</li>
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/users/index/'.$coaching_id.'/0/'.USER_STATUS_UNCONFIRMED, 'Pending'); ?></div>
					<div class="media-right"><?php echo $users['num_pending']; ?></div>
				</li>
			</ul>
		</div>

		<!-- // Tests // -->
		<div class="card mb-3 shadow-sm">
			<div class="card-header ">
				<h4 class="d-flex justify-content-between">
					<span>Tests</span>
					<span class="badge badge-primary"><?php echo $tests['total']; ?></span>
				 </h4>
			</div>
			<ul class="list-group">
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/tests/index/'.$coaching_id.'/0/'.TEST_STATUS_PUBLISHED, 'Published'); ?></div>
					<div class="media-right"><?php echo $tests['num_published']; ?></div>
				</li>
				<li class="list-group-item media">
					<div class="media-body"><?php echo anchor ('coaching/tests/index/'.$coaching_id.'/0/'.TEST_STATUS_UNPUBLISHED, 'Un-published'); ?></div>
					<div class="media-right"><?php echo $tests['num_unpublished']; ?></div>
				</li>
			</ul>
		</div>

	</div>

	<div class="col-md-6">

		<!----// Class //-->
		<div class="card mb-4 shadow">
			<div class="card-header">
				<h4 class="d-flex justify-content-between">
					<span>Classrooms</span>
					<span class="badge badge-primary"><?php echo $num_vc; ?></span>
				 </h4>
			</div>
			<div class="list-group">
			<?php
			$i = 0;
			if (! empty($virtual_class)) {
				foreach ($virtual_class as $vc) {
					?>
					<li class="list-group-item media">
						<div class="media-left">
							<?php if ($vc['running'] == 'true') { ?>
								<span class="icon-block half bg-green-500 rounded-circle" title="Meeting is running">
									<i class="fa fa-video"></i>
								</span>
							<?php } else { ?>
								<span class="icon-block half bg-grey-200 rounded-circle" title="Meeting is not running">
									<i class="fa fa-video"></i>
								</span>
							<?php } ?>
						</div>

						<div class="media-body">
							<h4><?php echo anchor ('coaching/virtual_class/create_class/'.$coaching_id.'/'.$vc['class_id'], $vc['class_name']); ?></h4>
							<p class=""><?php echo character_limiter ($vc['description'], 50); ?></p>
							<?php
							if ($vc['running'] == 'true') {
								echo anchor ('coaching/virtual_class/join_class/'.$coaching_id.'/'.$vc['class_id'].'/'.$member_id, '<i class="fa fa-plus"></i> Start Class', ['class'=>'btn btn-success mr-1']);
							} else {
								echo anchor ('coaching/virtual_class/join_class/'.$coaching_id.'/'.$vc['class_id'].'/'.$member_id, '<i class="fa fa-plus"></i> Start Class', ['class'=>'btn btn-default mr-1']);
							}
							?>
						</div>
					</li>
					<?php
					$i++;
					if ($i >= 3) {
						break;
					}
				}
			} else {
				?>
				<div class="card-body">
					<div class="alert alert-danger">
						No class created
					</div>
				</div>
				<?php
			}
			?>
			</div>
		</div>
	</div>

	<div class="col-md-3">		

		<!----// Announcements //-->
		<div class="card mt-3 shadow-sm">
			<div class="card-header">
				<h4>Announcements</h4>
			</div>
			<div class="list-group">
			<?php if (! empty($announcements)) {
				foreach ($announcements as $row) {
					?>
					<li class="list-group-item media ">
						<div class="media-left">
							<?php if ($row['status'] == 1) {
								echo '<i class="fa fa-circle text-success"></i>';
							} else {
								echo '<i class="fa fa-circle text-grey-200"></i>';
							}
							?>
						</div>
						<div class="media-body">
							<?php echo $row['title']; ?>
						</div>
					</li>
					<?php
				}
			}
			?>
			</div>
		</div>

	</div>
</div>

<div class="card __fixed-bottom">
	<ul class="nav nav-pills nav-fill">
		<?php
		if (! empty ($dashboard_menu)) {
			foreach ($dashboard_menu as $menu) {
				$link = $menu['controller_path'].'/'.$menu['controller_nm'].'/'.$menu['action_nm'].'/'.$coaching_id;
				?>
				<li class="nav-item">					
					<a href="<?php echo site_url ($link); ?>" class="nav-link text-grey-600">
						<span class="d-block"><?php echo $menu['icon_img']; ?></span>
						<span><?php echo $menu['menu_desc']; ?></span>
					</a>
				</li>
				<?php
				}
			}
		?>
	</nav>
</div>