<?php

namespace App\Repositories;

use App\Interfaces\HistoryRepositoryInterface;
use App\Models\histories;

class HistoryRepository implements HistoryRepositoryInterface 
{
    public function getJobsHistory() 
    {
        return Histories::where('type', 'Job')
                            ->orderBy('started', 'DESC')
                            ->get();
    }

    public function getEducationHistory() 
    {
        return Histories::where('type', 'Education')
                            ->orderBy('started', 'DESC')
                            ->get();
    }
   
    public function getSkills() 
    {
        return Histories::where('type', 'Skills')
                            ->get();
    }
}