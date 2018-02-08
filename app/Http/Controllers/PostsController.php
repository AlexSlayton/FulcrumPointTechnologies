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

	// sitemap
	 public function sitemap()
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
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

	public function render($request, Exception $e)
    {
        //check if exception is an instance of ModelNotFoundException.
        //or NotFoundHttpException
        if ($e instanceof ModelNotFoundException or $e instanceof NotFoundHttpException) {
            // ajax 404 json feedback
            if ($request->ajax()) {
                return response()->json(['error' => 'Not Found'], 404);
            }

            // normal 404 view page feedback
            return response()->view('errors.missing', [], 404);
        }

        return parent::render($request, $e);
    }
}
