<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'department_id';

    public $incrementing = false;

    protected $fillable = ['department_id', 'department_name'];

    protected $guarded = ['department_id'];

    public static $rules = [
        'department_name' => 'required',
    ];

    public static $messages = [
        'department_name.required' => '部署名は必ず入れてください。'
    ];

    // public function employees()
    // {
    //     return $this->hasMany(Employee::class, 'employee_id');// 第二引数外部キー
    // }


}
