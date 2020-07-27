

            <div class="row app-row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Lessons <span class="badge badge-primary float-right ml-3" style="font-size:1rem">5</span></h1>
                        <div class="top-right-button-container">
                            <button type="button"
                                class="btn btn-primary btn-lg top-right-button mr-1 dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ADD NEW
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Course</a>
                                <a class="dropdown-item" href="#">Chapter</a>
                            </div>
                            <div class="btn-group">
                                <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">
                                    <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="checkAll">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </div>
                                <button type="button"
                                    class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse d-md-block" id="displayOptions">
                            <div class="d-block d-md-inline-block">
                                <div class="btn-group float-md-left mr-1 mb-1">
                                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Search By
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">All Status</a>
                                        <a class="dropdown-item" href="#">Published</a>
                                        <a class="dropdown-item" href="#">Unpublished</a>
                                    </div>
                                </div>
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                    <input placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>

                    <div class="list disable-text-selection" data-check-all="checkAll">
                    	<?php 
							$i = 1;
							if (!empty ($lessons)) { 
								foreach ($lessons as $row) { 
									?>
                        <div class="card d-flex flex-row mb-3">
                            <div class="d-flex flex-grow-1 min-width-zero">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                    <div class="list-item-heading mb-0 truncate w-70 w-xs-100 mt-0">
                                    	<?php echo $i; ?>
                                        <?php 
											if ($row['status'] == LESSON_STATUS_PUBLISHED) {
												echo '<i class="fa fa-circle text-success"></i>';
											} else {
												echo '<i class="fa fa-circle text-secondary"></i>';
											}
										?>	
                                        <span class="align-middle d-inline-block">Chapter <?php echo $i; ?></span><br>
                                        
                                        <a class="text-primary list-item-heading mb-0 truncate pl-4 ml-1 mt-0"
                                        href="<?php echo site_url ('coaching/lessons/create/'.$coaching_id.'/'.$course_id.'/'.$row['lesson_id']); ?>"><?php echo $row['title']; ?></a>
                                        <p class="pl-4 ml-1 pr-3 truncate">
                                        	<?php 
											$description = strip_tags ($row['description']);
											echo $description;
											?>
                                        </p>
                                    </div>
                                 
                                    <div class="d-flex d-lg-block w-30 text-right" style="display:inherit;">
                                    	<a href="<?php echo site_url ('coaching/courses/preview/'.$coaching_id.'/'.$course_id.'/'.$row['lesson_id']); ?>" class="btn btn-info btn-sm top-right-button mr-1 text-decoration-none mt-3 mt-md-0">
                                            Preview
                                        </a>
                                        <a href="<?php echo site_url ('coaching/lessons/pages/'.$coaching_id.'/'.$course_id.'/'.$row['lesson_id']); ?>" class="btn btn-primary btn-sm top-right-button mr-1 text-decoration-none mt-3 mt-md-0">
                                            CONTENT
                                        </a>
                                    </div>
                                    
                                </div>
                                <label class="custom-control custom-checkbox mb-1 align-self-center mr-4">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </div>
                        </div>
                        <?php 
				$i++; 
			} 
		} else {
			?>
			<div class="alert alert-info">
				<div class="media-body" >
					<span class="text-danger">No lessons found</span>
					<?php echo anchor ('coaching/lessons/create/'.$coaching_id.'/'.$course_id, 'Click Here For Create Lesson' , ['class'=>'text-primary']); ?>
				</div>
			</div>
			<?php
		}
		?>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="app-menu">
            <div class="p-4 h-100">
                <div class="scroll">
                    <p class="text-muted text-medium">Course Categories</p>
                    <ul class="list-unstyled mb-5">
                        <li class="active">
                            <a href="#">
                                <i class="simple-icon-arrow-right-circle"></i>
                                All Courses
                                <span class="float-right">22</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="simple-icon-arrow-right-circle"></i>
                                IBPS PO
                                <span class="float-right">10</span>

                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="simple-icon-arrow-right-circle"></i>
                                IBPS Clerk
                                <span class="float-right">12</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
