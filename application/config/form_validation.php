<?php 
$config = array(
	'register/save' => array(
		array(
			'field' => 'nickname',
			'label' => 'Nickname',
			'rules' => 'required|alpha|min_length[3]|xss_clean'
			),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim|valid_email|xss_clean'
			),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim|min_length[6]|xss_clean'
			)
		),

	'login/login_user' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim|valid_email'
			),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim|min_length[6]'
			),
		)
	);
?>