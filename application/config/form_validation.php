<?php 
$config = array(
	'register/save' => array(
		array(
			'field' => 'nickname',
			'label' => 'Nickname',
			'rules' => 'required|alpha|min_length[3]'
			),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim|valid_email'
			),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim|min_length[6]'
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