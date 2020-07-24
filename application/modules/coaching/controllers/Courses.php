<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MX_Controller {

	public function __construct() {
		// Load Config and Model files required throughout Users sub-module
		$config = ['config_coaching', 'config_course'];
		$models = ['coaching_model', 'courses_model', 'lessons_model', 'users_model'];
		$this->common_model->autoload_resources($config, $models);
	}

	public function index($coaching_id = 0, $cat_id = 0) {
		$data['page_title'] = 'Courses';
		$data['bc'] = array('Dashboard' => 'coaching/home/dashboard/' . $coaching_id);
		$data['cat_id'] = $cat_id;
		$data['coaching_id'] = $coaching_id;
		$data['categories'] = $this->courses_model->course_categories($coaching_id);
		$data['courses'] = $this->courses_model->courses($coaching_id, $cat_id);
		$data['toolbar_buttons'] = array(
			'<i class="fa fa-plus-circle"></i> New Course' => 'coaching/courses/create/' . $coaching_id . '/' . $cat_id,
			'<i class="fa fa-plus-circle"></i> New Category' => 'coaching/courses/create_category/' . $coaching_id . '/' . $cat_id,
		);
		$data['script'] = $this->load->view('courses/scripts/index', $data, true);
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/index', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function edit($coaching_id = 0, $cat_id = 0, $course_id = 0) {
		$this->create($coaching_id, $cat_id, $course_id);
	}

	public function create($coaching_id = 0, $cat_id = 0, $course_id = 0) {
		$data['page_title'] = 'Course';
		$data['sub_title'] = ($this->router->fetch_method() == "create") ? 'Create New Course' : 'Edit Course';
		$data['submit_label'] = ($this->router->fetch_method() == "create") ? 'Create' : 'Update';
		$data['submit_title'] = ($this->router->fetch_method() == "create") ? 'Create New Course' : 'Update This Course';
		$data['cat_id'] = $cat_id;
		$data['coaching_id'] = $coaching_id;
		$data['course_id'] = $course_id;
		if ($course_id > 0) {
			$data['course'] = $this->courses_model->get_course_by_id($course_id);
		}
		$data['script'] = $this->load->view ('courses/scripts/create', $data, true);
		
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/create', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function edit_category($coaching_id = 0, $cat_id = 0) {
		$this->create_category($coaching_id, $cat_id);
	}

	public function create_category($coaching_id = 0, $cat_id = 0) {
		$data['page_title'] = 'Course Category';
		$data['sub_title'] = ($this->router->fetch_method() == "create_category") ? 'Create New Course Category' : 'Edit Course Category';
		$data['submit_label'] = ($this->router->fetch_method() == "create_category") ? 'Create' : 'Update';
		$data['submit_title'] = ($this->router->fetch_method() == "create_category") ? 'Create New Category' : 'Update This Category';
		if ($cat_id > 0) {
			$data['category'] = $this->courses_model->get_course_category_by_id($cat_id);
		}
		$data['cat_id'] = $cat_id;
		$data['coaching_id'] = $coaching_id;
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/create_cat', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function manage ($coaching_id=0, $course_id=0) {
		$data['page_title'] = 'Manage Course';

		$data['course'] = $this->courses_model->get_course_by_id ($course_id);
		$data['num_lessons'] = $this->courses_model->count_course_lessons ($coaching_id, $course_id);
		$data['num_tests'] = $this->courses_model->count_course_tests ($coaching_id, $course_id);

		$data['cat_id'] = $this->courses_model->get_course_cat_id($coaching_id, $course_id);

		$data['coaching_id'] = $coaching_id;
		$data['course_id'] = $course_id;
		
		$data['bc'] = array('Courses' => 'coaching/courses/index/' . $coaching_id);

		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/manage', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function preview ($coaching_id=0, $course_id=0, $lesson_id=0, $page_id=0) {

		$data['page_title'] = 'Preview';
		$data['coaching_id'] = $coaching_id;
		$data['course_id'] = $course_id;
		$data['lesson_id'] = $lesson_id;
		$data['page_id'] = $page_id;

		$data['lessons'] = $this->lessons_model->get_lessons ($coaching_id, $course_id);
		$data['pages'] = $this->lessons_model->get_all_pages ($coaching_id, $course_id, $lesson_id);
		
		if ($lesson_id > 0) {
			$data['lesson'] = $this->lessons_model->get_lesson ($coaching_id, $course_id, $lesson_id);
		} else {
			$data['lesson'] = false;
		}

		if ($page_id > 0) {
			$data['page'] = $this->lessons_model->get_page ($coaching_id, $course_id, $lesson_id, $page_id);
			$data['attachments'] = $this->lessons_model->get_attachments ($coaching_id, $course_id, $lesson_id, $page_id);
		} else {
			$data['page'] = false;
			$data['attachments'] = false;
		}

		/* --==// Back //==-- */
		$data['bc'] = ['Manage'=>'coaching/courses/manage/'.$coaching_id.'/'.$course_id];

		$data['sidebar_right'] = $this->load->view ('courses/inc/course_preview', $data, true);
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view("courses/preview", $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function teachers ($coaching_id=0, $course_id=0, $type=TEACHERS_ASSIGNED, $status=1) {
		$data['page_title'] 	= 'Course Teachers';
		$data['coaching_id'] 	= $coaching_id;
		$data['course_id']		= $course_id;
		$data['type'] 			= $type;
		$data['status'] 		= $status;
		$data['bc'] = array ('Manage '=>'coaching/courses/manage/'.$coaching_id.'/'.$course_id);
		
		$teachers_assigned 		= $this->courses_model->get_teachers_assigned ($coaching_id, $course_id, $status);
		// Count enroled users
		if ($teachers_assigned > 0) 
			$num_assigned = count ($teachers_assigned);
		else 
			$num_assigned = 0;
		
		$teachers_not_assigned 		= $this->courses_model->get_teachers_not_assigned ($coaching_id, $course_id, $status);
		// Count enroled users
		if ($teachers_not_assigned > 0) 
			$num_not_assigned = count ($teachers_not_assigned);
		else 
			$num_not_assigned = 0;

		$data['num_assigned']  = $num_assigned;
		$data['num_not_assigned']  = $num_not_assigned;

		if ($type == TEACHERS_ASSIGNED) {
			$results = $teachers_assigned;
		} else if ($type == TEACHERS_NOT_ASSIGNED) {
			$results = $teachers_not_assigned;
		}
		$data['results'] = $results;
		$data['data']			= $data;
		
		$data['script'] = $this->load->view ('courses/scripts/teachers', $data, true);
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/teachers', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);
	}

	public function settings ($coaching_id=0, $course_id=0) {
		$data['script'] = $this->load->view ('courses/scripts/teachers', $data, true);
		$this->load->view(INCLUDE_PATH . 'header', $data);
		$this->load->view('courses/teachers', $data);
		$this->load->view(INCLUDE_PATH . 'footer', $data);

	}
}