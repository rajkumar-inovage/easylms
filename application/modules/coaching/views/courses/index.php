    <div class="row app-row">
        <?php if (!empty($courses)): ?>
        <div class="col-12">
            <div class="mb-2">
                <h1>Courses</h1>
                <div class="top-right-button-container">
                    <button type="button"
                        class="btn btn-primary btn-lg top-right-button mr-1 dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADD NEW
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Course</a>
                        <a class="dropdown-item" href="#">Course Category</a>
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
                                Order By
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Alphabetical A-Z</a>
                                <a class="dropdown-item" href="#">Alphabetical Z-A</a>
                                <a class="dropdown-item" href="#">Created Date - ASC</a>
                                <a class="dropdown-item" href="#">Created Date - DESC</a>
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
              <?php foreach ($courses as $course): 
                  $category_id = isset($course['cat_id']) ? $course['cat_id'] : $cat_id;
                  $toggle_to = (intval($course['status']) === COURSE_STATUS_ACTIVE)?COURSE_STATUS_INACTIVE:COURSE_STATUS_ACTIVE;
                ?>
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div
                            class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-0 w-30 w-xs-100 mt-0 d-flex"
                                href="<?php echo site_url ('coaching/courses/edit/'.$coaching_id.'/'.$cat_id.'/'.$course['course_id']); ?>">
                                <i class="simple-icon-book-open heading-icon pr-2"></i>
                                <span class="align-middle d-inline-block pt-1"><?php echo $course['title']; ?></span>
                            </a>
                            <p class="mb-0 text-muted text-small w-15 w-xs-100">
                              <?php echo date('j<\s\up>S</\s\up> F, Y', $course['created_on']); ?>
                                
                            </p>
                            <p class="mb-0 text-muted text-small w-10 w-xs-100">
                              <?php echo $course['created_by']; ?>
                            </p>
                            <div class="w-10 w-xs-100 pt-2 pt-md-0">
                              <?php echo (intval($course['status']) === COURSE_STATUS_ACTIVE) ? '<span class="badge badge-pill badge-outline-success">Active</span>' : '<span class="badge badge-pill badge-outline-danger">Inactive</span>'; ?>
                            </div>
                            <div class="w-10 w-xs-100 pt-2 pt-md-0 d-block text-left text-md-right">
                              <a
                                href="javascript: void(0);"
                                onclick="show_confirm('This will <?php echo (intval($course['status']) === COURSE_STATUS_ACTIVE) ? 'Inactive' : 'Active'; ?> this course, Are you sure?', '<?php echo site_url ('coaching/courses_actions/toggle_course_status/'.$coaching_id.'/'.$cat_id.'/'.$course['course_id'].'/'.$toggle_to); ?>')"
                                data-toggle="tooltip"
                                data-placement="left"
                                class="btn p-0 height-30 width-30 float-left float-md-right rounded-circle d-flex align-items-center justify-content-center mr-2 <?php echo (intval($course['status']) === COURSE_STATUS_ACTIVE) ? 'btn-danger' : 'btn-success'; ?>"
                                title="<?php echo (intval($course['status']) === COURSE_STATUS_ACTIVE) ? 'Set Inactive' : 'Set Active'; ?>"
                                style="font-size: 16px; width:30px; height:30px;"
                              >
                                <?php echo (intval($course['status']) === COURSE_STATUS_ACTIVE) ? '<i class="fa fa-ban"></i>' : '<i class="fa fa-check"></i>'; ?>
                              </a>
                            </div>
                            <div class="d-block w-md-30 w-lg-20">
                                <a href="<?php echo site_url ('coaching/courses/manage/'.$coaching_id.'/'.$course['course_id']); ?>" class="btn btn-primary btn-sm top-right-button mr-1 text-decoration-none mt-3 mt-md-0"><i class="fa fa-cog"></i>
                                    MANAGE
                                </a>
                            </div>
                            
                        </div>
                        <label class="custom-control custom-checkbox mb-1 align-self-center mr-4">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">&nbsp;</span>
                        </label>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <?php else: ?>
      <div class="alert alert-primary w-100" role="alert">There are no Courses in this Category. Click <a href="<?php echo site_url('coaching/courses/create/' . $coaching_id . '/' . $cat_id); ?>" class="alert-link">here</a> to create your first course.</div>
    <?php endif;?>
            </div>
        </div>


        <div class="app-menu">
            <div class="p-4 h-100">
                <div class="scroll">
                    <p class="text-muted text-medium">Course Categories</p>
                    <ul class="list-unstyled mb-5">
                        <li class="<?php echo ($cat_id == 0) ? 'active' : ''; ?>">
                        <a href="<?php echo site_url('coaching/courses/index/' . $coaching_id); ?>">
                          <i class="simple-icon-arrow-right-circle"></i>
                          </i> All Courses
                          <span class="float-right">24</span>
                        </a>
                      </li>
                      <?php if (!empty($categories)): ?>
                      <?php foreach ($categories as $category): ?>
                      <li class="<?php echo ($cat_id == $category['cat_id']) ? 'active' : ''; ?>">
                        <a href="<?php echo site_url('coaching/courses/index/' . $coaching_id . '/' . $category['cat_id']); ?>">
                           <i class="simple-icon-arrow-right-circle"></i>
                          </i>
                          <?php echo $category['title']; ?>
                          <span class="float-right">12</span>
                        </a>
                      </li>
                      <?php endforeach;?>
                      <?php endif;?>
                    </ul>

                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>
    </main>