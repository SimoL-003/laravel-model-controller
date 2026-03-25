<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $date
 */

class Movie extends Model
{
    public function getDate()
    {
        return (new DateTime($this->date))->format('Y');
    }
}
