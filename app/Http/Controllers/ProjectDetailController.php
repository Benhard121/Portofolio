<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    public function show($id)
    {
        // Get data from PageController's hardcoded data
        $pageController = new PageController();
        $data = $pageController->getPortfolioData();
        
        $project = collect($data['projects'])->firstWhere('id', (int)$id);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}

