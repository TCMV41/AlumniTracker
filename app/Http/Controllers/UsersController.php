<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class UsersController extends CrudController{

    public function all($entity){
        parent::all($entity); 
		

        $this->filter = \DataFilter::source(new \App\Users());
        $this->filter->add('id', 'ID', 'number');
		$this->filter->add('name', 'name', 'text');
		$this->filter->add('email', 'email', 'text');
		$this->filter->add('yearGraduated', 'yearGraduated', 'text');
		$this->filter->add('approved', 'approved', 'number');
		$this->filter->add('degree', 'degree', 'text');
		$this->filter->add('degreeClass', 'degreeClass', 'text');
		$this->filter->add('approved', 'approved', 'number');
        $this->filter->build();
                
        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('id','ID', true)->style("width:100px");
		$this->grid->add('name','Name', true)->style("width:100px");
		$this->grid->add('email','Email', true)->style("width:200px");
		$this->grid->add('yearGraduated', 'Year Graduated', true)->style("width:20px");
		$this->grid->add('approved', 'Approval', 'number', true)->style("width:20px");
		$this->grid->add('degree', 'Degree', 'number', true)->style("width:100px");
		$this->grid->add('degreeClass', 'Degree Class', 'number', true)->style("width:100px");

        $this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        // parent::edit($entity);
		// if (\Request::input('password') != null )
        // {
        //     $new_input = array('password' => \Hash::make(\Request::input('password'))); 
        //     \Request::merge($new_input);
        // }
        
        parent::edit($entity);
		 
        $this->edit = \DataEdit::source(new \App\Users());
		
		$this->edit->label('Edit User');
        $this->edit->add('id', 'ID: ', 'number');
		$this->edit->add('name', 'Name: ', 'text');
		$this->edit->add('email', 'Email: ', 'text');
		$this->edit->add('yearGraduated', 'Year Graduated: ', 'text');		
		$this->edit->add('approved', 'Approval:', 'radiogroup')
 		->option('1', 'Approve')->option('0', 'Deny');
		
		
		
        return $this->returnEditView();
    }    
}
