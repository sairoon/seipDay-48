<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected static $student;

    public static function createStudent($request){
        self::$student          = new Student();
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->dob     = $request->dob;
        self::$student->address = $request->address;
        self::$student->gender  = $request->gender;
        self::$student->image   = $request->image;
        self::$student->status  = $request->status;
        self::$student->save();
    }
}
