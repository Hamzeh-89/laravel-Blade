<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hamzeh', function () {

	$employees = array("hamzeh","Faten","Reema");

    return view('mol',["employees" => $employees]  );
});

Route::get('home', function () {
    return view('home');
});


Route::get('contactus', function () {
    return view('contactus');
});


Route::get('staff', function () {

	$staff = array(

		0 =>[
			'emp_name' =>"Hamzeh Alawi",
		
		'emp_image' =>"https://scontent.famm3-3.fna.fbcdn.net/v/t1.0-9/23172661_10214753049048943_4614637921493885526_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGweUSLMZ1P_ZXOmQnjGAvjBVzPBXLJ2vgFXM8Fcsna-JDX6OcgAyOBJ2nG2sDhZYQ&_nc_ohc=raT4e3EzeowAX-3HVax&_nc_ht=scontent.famm3-3.fna&oh=2359672490e240f19915034ba8442582&oe=60482AE8",

		'Age'=>31,
		'Github' =>"https://github.com/hamzeh"],
		
		1 =>[
		
		'emp_name' =>"Faten Almasri",
		'emp_image' => "https://scontent.famm3-3.fna.fbcdn.net/v/t1.0-9/102303660_1455675367948611_4243989224759457498_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHGX7F7AvMmzhee0px6-IjXwBxsj4i1EQnAHGyPiLURCdxZl5hTEl7NTqoQc97Q5Z0&_nc_ohc=h2zmWGKkSZcAX_EdA0f&_nc_ht=scontent.famm3-3.fna&oh=1cb9c06df9f127eac952e62b1f21677f&oe=6046B8A7",

		'Age'=>35,
		'Github'=>"https://github.com/Faten"],



		2 => [
			'emp_name' =>"Reema Alabdallah",
			'emp_image'=>"https://scontent.famm3-3.fna.fbcdn.net/v/t1.0-9/133443180_2739573369637060_6172647638999453376_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFLWirVdcqSzdvwQGfuSHI-CfoXPJjrKO0J-hc8mOso7SuZTMZ2pS19KBK2e-Py9fo&_nc_ohc=mXMFTdHXQT4AX-PHAGX&_nc_ht=scontent.famm3-3.fna&oh=9eaa90c93f110aa7ce4a945a714918d9&oe=6048BC4D",
			
    	'Age'=>35,
    	'Github'=>"https://github.com/Reema" 

		]


	);

    return view('staff',["staff" => $staff ]);
});
