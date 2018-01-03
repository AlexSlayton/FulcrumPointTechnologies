<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function contact()
	{
		return view('contact');
	}

	public function services()
	{
		return view('services');
	}

	public function about_us()
	{
		return view('about_us');
	}

	// Services route control
	public function big_data_analytics()
	{
		return view('services.big_data_analytics');
	}

	public function security()
	{
		return view('services.security');
	}
    
    public function database()
	{
		return view('services.database');
	}

	public function technology()
	{
		return view('services.technology');
	}

	public function governance()
	{
		return view('services.governance');
	}

	public function devops()
	{
		return view('services.devops');
	}

	public function project_management()
	{
		return view('services.project_management');
	}

	public function strategic_planning()
	{
		return view('services.strategic_planning');
	}

	public function cloud_services()
	{
		return view('services.cloud_services');
	}

	public function vendor_management()
	{
		return view('services.vendor_management');
	}
}
