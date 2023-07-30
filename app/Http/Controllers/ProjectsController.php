<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Interfaces\HistoryRepositoryInterface;
use Illuminate\Support\Facades\Http;

class ProjectsController extends Controller
{
    private HistoryRepositoryInterface $historyRepository;

    public function __construct(HistoryRepositoryInterface $historyRepository)
    {
        $this->historyRepository = $historyRepository;
    }

    public function getData()
    {
        $jobs = $this->historyRepository->getJobsHistory();
        $educations = $this->historyRepository->getEducationHistory();
        $skills = $this->historyRepository->getSkills();
        $projects = Projects::all();
        $joke = Http::get('https://api.chucknorris.io/jokes/random')['value'];

        return view('home', compact('projects', 'jobs', 'educations', 'skills', 'joke'));
    }

    public function getJoke()
    {
        $joke = Http::get('https://api.chucknorris.io/jokes/random')['value'];

        return $joke;
    }
}
