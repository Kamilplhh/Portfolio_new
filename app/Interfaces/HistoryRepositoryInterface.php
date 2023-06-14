<?php

namespace App\Interfaces;

interface HistoryRepositoryInterface 
{
    public function getJobsHistory();
    public function getEducationHistory();
    public function getSkills();
}