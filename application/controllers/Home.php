<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data = [
			'title' => 'Menu Utama',
			'isi'   =>  'home',
		];
		_view('layout/wrapper',$data);
	}
	public function materi()
	{
		$data = [
			'title' => 'Materi',
			'isi'   =>  'materi',
		];
		_view('layout/wrapper',$data);
	}
	public function video()
	{
		$data = [
			'title' => 'Video',
			'isi'   =>  'video',
		];
		_view('layout/wrapper',$data);
	}
	public function kuis()
	{
		$data = [
			'title' => 'Kuis',
			'isi'   =>  'kuis',
		];
		_view('layout/wrapper',$data);
	}
	public function profile()
	{
		$data = [
			'title' => 'Profile',
			'isi'   =>  'profile',
		];
		_view('layout/wrapper',$data);
	}
}
