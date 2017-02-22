<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once '../vendor/fzaninotto/faker/src/autoload.php';
use Faker;

class ProfileController extends Controller
{
	public function getProfile(){
		$faker = Faker\Factory::create();
		return view('profil.home',['profils'=>$faker]);
	}
}
