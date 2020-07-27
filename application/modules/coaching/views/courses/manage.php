<div class="row app-row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Manage Course</h1>
                    </div>
                    <div class="separator mb-5"></div>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><span><i class="simple-icon-notebook pr-3"></i></span>Chapters <span class="badge badge-primary float-right"><?php echo $num_lessons; ?></span></h5>
                                    <div class="separator mb-5"></div>
                                    <div
	                                    class="card-body p-0 align-self-center justify-content-between min-width-zero align-items-md-center">
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/lessons/index/'.$coaching_id.'/'.$course_id); ?>">
	                                        <i class="simple-icon-book-open heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Chapters</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/lessons/create/'.$coaching_id.'/'.$course_id); ?>">
	                                        <i class="simple-icon-plus heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Create Chapter</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/plans/index/'.$coaching_id.'/'.$course_id.'/2'); ?>">
	                                        <i class="simple-icon-arrow-down-circle heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Import Free Lessons</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/indiatests/lesson_plans/'.$coaching_id.'/'.$course_id.'/0/1'); ?>">
	                                        <i class="simple-icon-basket heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Buy From IndiaTests</span>
	                                    </a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><span><i class="simple-icon-speedometer pr-3"></i></span>Tests<span class="badge badge-primary float-right"><?php //echo $num_lessons; ?></span></h5>
                                    <div class="separator mb-5"></div>
                                    <div
                                    class="card-body p-0 align-self-center justify-content-between min-width-zero align-items-md-center">
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/tests/index/'.$coaching_id.'/'.$course_id); ?>">
	                                        <i class="simple-icon-speedometer heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Tests</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/tests/create_test/'.$coaching_id.'/'.$course_id); ?>">
	                                        <i class="simple-icon-plus heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Create Test</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/plans/index/'.$coaching_id.'/'.$course_id); ?>">
	                                        <i class="simple-icon-arrow-down-circle heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Import Free Tests</span>
	                                    </a>
	                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
	                                        href="<?php echo site_url ('coaching/indiatests/test_plans/'.$coaching_id.'/'.$course_id.'/0/'); ?>">
	                                        <i class="simple-icon-basket heading-icon"></i>
	                                        <span class="align-middle d-inline-block">Buy From IndiaTests</span>
	                                    </a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><span><i class="simple-icon-user pr-3"></i></span>Teachers <span class="badge badge-primary float-right"><?php //echo $num_lessons; ?></span></h5>
                                    <div class="separator mb-5"></div>
                                    <div
                                    class="card-body p-0 align-self-center justify-content-between min-width-zero align-items-md-center">
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="Pages.Manage.Course.html">
                                        <i class="simple-icon-user heading-icon"></i>
                                        <span class="align-middle d-inline-block">Teachers</span>
                                    </a>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/courses/teachers/'.$coaching_id.'/'.$course_id.'/'.TEACHERS_NOT_ASSIGNED) ?>">
                                        <i class="simple-icon-user-follow heading-icon"></i>
                                        <span class="align-middle d-inline-block">Add Teacher</span>
                                    </a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><span><i class="simple-icon-people pr-3"></i></span>Enrollments<span class="badge badge-primary float-right"><?php //echo $num_lessons; ?></span></h5>
                                    <div class="separator mb-5"></div>
                                    <div
                                    class="card-body p-0 align-self-center justify-content-between min-width-zero align-items-md-center">
                                    <?php if ($course['enrolment_type'] == COURSE_ENROLMENT_DIRECT) { ?>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/courses/enrolments/'.$coaching_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-people heading-icon"></i>
                                        <span class="align-middle d-inline-block">Enrolment</span>
                                    </a>
                                    <?php } else { ?>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/enrolments/batches/'.$coaching_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-user heading-icon"></i>
                                        <span class="align-middle d-inline-block">Batches</span>
                                    </a>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/enrolments/create_schedule/'.$coaching_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-calendar heading-icon"></i>
                                        <span class="align-middle d-inline-block">Schedules</span>
                                    </a>
                                    <?php } ?>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><span><i class="simple-icon-settings pr-3"></i></span>Settings</h5>
                                    <div class="separator mb-5"></div>
                                    <div
                                    class="card-body p-0 align-self-center justify-content-between min-width-zero align-items-md-center">
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/courses/preview/'.$coaching_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-eye heading-icon"></i>
                                        <span class="align-middle d-inline-block">Preview</span>
                                    </a>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/courses/edit/'.$coaching_id.'/'.$cat_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-note heading-icon"></i>
                                        <span class="align-middle d-inline-block">Edit</span>
                                    </a>
                                    <a class="list-item-heading mb-0 truncate w-100 mt-0 d-inline-block"
                                        href="<?php echo site_url ('coaching/courses/add_teachers/'.$coaching_id.'/'.$cat_id.'/'.$course_id); ?>">
                                        <i class="simple-icon-trash heading-icon"></i>
                                        <span class="align-middle d-inline-block">Delete Course</span>
                                    </a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="app-menu">
            <div class="p-4 h-100">
                <div class="scroll">
                    <p class="lead-text text-medium">All Courses</p>
                    <ul class="list-unstyled mb-5">
                        <li class="active">
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                SSC Full Course
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                Test Course
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                A Basic Course
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                Physics 12
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                Advanced PHP For Web Developers
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                Physics 11
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <i class="simple-icon-arrow-right-circle"></i>
                                Demo Course
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
