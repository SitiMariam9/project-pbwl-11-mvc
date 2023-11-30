<?php

namespace App\Controllers;

use App\Core\Controller;

class Users extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\User();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('users/index', $data);
	}

	public function input()
	{
		$this->dashboard('users/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/users');
	}

	public function edit($user_id)
	{
		$data['row'] = $this->model->edit($user_id);
		$this->dashboard('users/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/users');
	}

	public function delete($user_id)
	{
		$this->model->delete($user_id);
		header('location:' . URL . '/users');
	}
}
