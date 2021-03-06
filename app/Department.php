<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function numberOfEmployees()
    {
        return $this->employees()->count();
    }
}
