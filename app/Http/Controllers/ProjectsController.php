<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Interfaces\HistoryRepositoryInterface;

class ProjectsController extends Controller
{
    private HistoryRepositoryInterface $historyRepository;

    public function __construct(HistoryRepositoryInterface $historyRepository) 
    {
        $this->historyRepository = $historyRepository;
    }

    public function getData(){

        $jobs = $this->historyRepository->getJobsHistory();
        $educations = $this->historyRepository->getEducationHistory();
        $skills = $this->historyRepository->getSkills();
        $projects = Projects::all();

        return view('home', compact('projects', 'jobs', 'educations', 'skills'));
    }
}
