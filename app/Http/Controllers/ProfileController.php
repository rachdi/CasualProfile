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
	public function json_encode(Request $request){
		$faker = Faker\Factory::create();
		return response()
		->json(['firstName' =>$faker->firstName, 'lastName' => $faker->lastName,'streetAddress' =>$faker->streetAddress,'e164PhoneNumber' =>$faker->e164PhoneNumber,'jobTitle' =>$faker->jobTitle])
		->withCallback($request->input('callback'));




	}
}
