<?php

namespace App\Repositories;

use App\Interfaces\HistoryRepositoryInterface;
use App\Models\History;

class HistoryRepository implements HistoryRepositoryInterface 
{
    public function getJobsHistory() 
    {
        return History::where('type', 'Job')
                            ->orderBy('started', 'DESC')
                            ->get();
    }

    public function getEducationHistory() 
    {
        return History::where('type', 'Education')
                            ->orderBy('started', 'DESC')
                            ->get();
    }
   
    public function getSkills() 
    {
        return History::where('type', 'Skills')
                            ->get();
    }
}