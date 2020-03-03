<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function completed()
    {
        $this->completed = true;
        $this->save();
    }
}
