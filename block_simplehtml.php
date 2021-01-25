<?php
class block_simplehtml extends block_base {

	public function init() {
		$this->title = get_string('simplehtml', 'block_simplehtml');
	}

	public function get_content() {
		if ($this->content !== null) {
			return $this->content;
		}
		global $DB, $CFG;
		$this->content = new stdClass;
		$this->content->text = "<a href=" . $CFG->wwwroot . "/blocks/simplehtml/view.php" . ">Các khóa học</a>";
		// $course = $DB->get_record('course', array('id' => 4));
		// $info = get_fast_modinfo($course);
		// print_object($info);
		return $this->content;
	}
	public function specialization() {
		// if (isset($this->config)) {
		// 	if (empty($this->config->title)) {
		// 		$this->title = get_string('defaulttitle', 'block_simplehtml');
		// 	}

		// } else {
		// 	$this->title = $this->config->title;
		// }

		// if (empty($this->config->text)) {
		// 	$this->config->text = get_string('defaulttext', 'block_simplehtml');
		// }
	}
}
