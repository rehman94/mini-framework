<?php
namespace App\Controller;
/**
* Pages Controller responsible for controlling Pages
*/
class Pagescontroller
{
	public function index() {
		return view('index');
	}
	public function contact() {
		return view('contact');
	}
	public function about() {
		return view('about');
	}
}