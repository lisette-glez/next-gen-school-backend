<?php

namespace App\Enums;

enum ProgressStatus: string 
{    
    case COMPLETED = 'completed';
    case IN_PROGRESS = 'in_progress';
}