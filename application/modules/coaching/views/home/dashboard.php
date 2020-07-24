<div class="row">
	<div class="col-lg-4">
        <div class="card mb-4 progress-banner">
            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                <div>
                    <i class="iconsminds-billing mr-2 text-white align-text-bottom d-inline-block"></i>
                    <div class="media">
                        <div class="media-left ">
							<?php if ($subscription['ending_on'] > time ()) { ?>
								<span class="icon-block half bg-success"><i class="fa fa-check text-small p-1 text-white"></i></span>
							<?php } else { ?>
								<span class="icon-block half bg-danger"><i class="fa fa-times text-small p-1 text-white"></i></span>
							<?php } ?>
						</div>
						<div class="media-body ml-2  text-white">
							<h6><?php echo anchor ('coaching/subscription/index/'.$coaching_id.'/'.$subscription['sp_id'], $subscription['title'], ['class'=>'link-streched text-white']); ?></h6>
							<p>Ending On: <?php echo date ('d M, Y', $subscription['ending_on']); ?></p>
						</div>
                    </div>
                </div>
                <div>
                    <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10"
                        data-show-percent="false">
                        <span class="position-absolute" style="top:25%; left:50%; transform:translate(-50%,-50%); color:#fff;">Days</span>
                    </div>
                </div>
            </div>
               
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-4 progress-banner">
            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                <div>
                    <i class="simple-icon-film mr-2 text-white align-text-bottom d-inline-block"></i>
                    <div>
                        <p class="lead text-white">5 Courses</p>
                        <p class="text-small text-white">5 Courses Published</p>
                    </div>
                </div>

                <div>
                    <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5" aria-valuemax="10"
                        data-show-percent="false">
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <div class="col-lg-4">
        <div class="card mb-4 progress-banner">
            <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                <div>
                    <i class="simple-icon-pencil mr-2 text-white align-text-bottom d-inline-block"></i>
                    <div>
                        <p class="lead text-white"><?php echo $tests['num_published']; ?> Tests</p>
                        <p class="text-small text-white"><?php echo $tests['num_unpublished']; ?> Test Unpublished</p>
                    </div>
                </div>
                <div>
                    <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="<?php echo $tests['num_published']; ?>" aria-valuemax="<?php echo $tests['total']; ?>"
                        data-show-percent="false">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="row justify-content-center">
	<div class="col-md-12 col-lg-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                	<span class="lead text-primary">Classrooms</span>
					<span class="badge badge-primary float-right"><?php echo $num_vc; ?></span>
                </h5>
                <div class="separator mb-5"></div>
                <div class="scroll dashboard-list-with-user ps ps--active-y ">
                    <div class="d-flex flex-row mb-3 pb-3 border-bottom align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                        <div class="">
                        	<div class="h5 text-primary">
                           		<i class="simple-icon-camrecorder pr-2"></i> <a href="#" class="text-primary">Demo Class</a>
                        	</div>
                        	<div class="text-muted mb-0 text-small pb-3 pb-lg-0">
                        		<span class="w-100 d-block pb-2">Start On: 28/07/2020,  03:00 PM</span>
                        		<span class="w-100 d-block">End On: 28/07/2020,  04:00 PM</span>
                        	</div>
                        </div>
	                    <div class="">
	                        
	                    </div>
	                    <div class="">
	                    	<a href="" class="btn btn-outline-primary mb-1 mr-2">Manage</a>
	                        <a href="" class="btn btn-success mb-1">Start Class</a>
	                    </div>
                    </div>
                    <div class="d-flex flex-row mb-3 pb-3 border-bottom align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                        <div class="">
                        	<div class="h5 text-primary">
                           		<i class="simple-icon-camrecorder pr-2"></i> <a href="#" class="text-primary">SSC Class</a>
                        	</div>
                        	<div class="text-muted mb-0 text-small pb-3 pb-lg-0">
                        		<span class="w-100 d-block pb-2">Start On: 30/07/2020,  05:00 PM</span>
                        		<span class="w-100 d-block">End On: 28/07/2020,  06:00 PM</span>
                        	</div>
                        </div>
	                    <div class="">
	                        
	                    </div>
	                    <div class="">
	                    	<a href="" class="btn btn-outline-primary mb-1 mr-2">Manage</a>
	                        <a href="" class="btn btn-success mb-1">Start Class</a>
	                    </div>
                    </div>
                    <div class="d-flex flex-row mb-3 pb-3 border-bottom align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                        <div class="">
                        	<div class="h5 text-primary">
                           		<i class="simple-icon-camrecorder pr-2"></i> <a href="#" class="text-primary">Math Class</a>
                        	</div>
                        	<div class="text-muted mb-0 text-small pb-3 pb-lg-0">
                        		<span class="w-100 d-block pb-2">Start On: 20/07/2020,  03:00 PM</span>
                        		<span class="w-100 d-block">End On: 20/07/2020,  04:00 PM</span>
                        	</div>
                        </div>
	                    <div class="">
	                        
	                    </div>
	                    <div class="">
	                    	<a href="" class="btn btn-outline-primary mb-1 mr-2">Manage</a>
	                        <a href="" class="btn btn-success mb-1">Start Class</a>
	                    </div>
                    </div>
                    <div class="d-flex flex-row mb-3 pb-3 border-bottom align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                        <div class="">
                        	<div class="h5 text-primary">
                           		<i class="simple-icon-camrecorder pr-2"></i> <a href="#" class="text-primary">English Class</a>
                        	</div>
                        	<div class="text-muted mb-0 text-small pb-3 pb-lg-0">
                        		<span class="w-100 d-block pb-2">Start On: 28/07/2020,  03:00 PM</span>
                        		<span class="w-100 d-block">End On: 28/07/2020,  04:00 PM</span>
                        	</div>
                        </div>
	                    <div class="">
	                        
	                    </div>
	                    <div class="">
	                    	<a href="" class="btn btn-outline-primary mb-1 mr-2">Manage</a>
	                        <a href="" class="btn btn-success mb-1">Start Class</a>
	                    </div>
                    </div>
                    
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 270px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 166px;"></div></div></div>
            </div>
        </div>
    </div>
	<div class="col-md-6 col-sm-12 mb-4">
        <div class="card dashboard-filled-line-chart">
            <div class="card-body ">
                <div class="float-left float-none-xs">
                    <div class="d-inline-block">
                        <h5 class="d-inline">Attendance</h5>
                        <span class="text-muted text-small d-block">Attendance Chart</span>
                    </div>
                </div>
                <div class="btn-group float-right float-none-xs mt-2">
                    <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        This Week
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Last Week</a>
                        <a class="dropdown-item" href="#">This Month</a>
                    </div>
                </div>
            </div>
            <div class="chart card-body pt-0"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <canvas id="visitChart" style="display: block; width: 499px; height: 194px;" width="499" height="194" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
	<div class="col-md-12">
		
	</div>
</div>
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

<div class="card fixed-bottom">
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