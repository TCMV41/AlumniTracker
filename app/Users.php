<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Users extends Model {
	use ObservantTrait;
	
    protected $table = 'users';
    protected $id='id';
    protected $country='country';
    protected $yearGraduated='yearGraduated';
    protected $degree='degree';
    protected $degreeClass='degreeClass';
    protected $occupation='occupation';
    protected $countryEmplpyed='countryEmployed';
    protected $company='company';
    protected $companyEmail='companyEmail';
    protected $interests='interests';
    protected $approved='approved';

    protected $hidden = array('password', 'remember_token');
}


