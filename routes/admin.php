<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentConttroller;

Route::get('/departments',[DepartmentConttroller::class,'index']);