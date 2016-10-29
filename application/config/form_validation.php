<?php 
$config = array(
	'register/save' => array(
		array(
			'field' => 'nickname',
			'label' => 'Nickname',
			'rules' => 'required|alpha|min_length[3]|is_unique[users.nickname]'
			),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim|valid_email|is_unique[users.email]'
			),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim|min_length[6]'
			),
		array(
			'field' => 'password_repeat',
			'label' => 'Repeat Password',
			'rules' => 'Repeat Password', 'required|trim|min_length[6]|matches[password]'
			)
		)
	);
?>