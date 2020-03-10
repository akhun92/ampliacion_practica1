<?php

require_once(__DIR__.'/../model/employee.php');

class employeesController{

	public function indexAction(){
		$employees = array();
		$file = file_get_contents(__DIR__."/../../data/employees.json");
		$data = json_decode($file);

		foreach ($data->employees as $emp) {
			$employee = new employee($emp->id ,$emp->name, $emp->date, $emp->position, $emp->photo, $emp->salary, $emp->cv);
			array_push($employees, $employee);
		}

		return $employees;
	}

	public function searchById($id) {
		$file = file_get_contents(__DIR__."/../../data/employees.json");
		$data = json_decode($file);
		foreach ($data->employees as $emp) {
			if ($emp->id == $id) {
				$employee = new employee($emp->id ,$emp->name, $emp->date, $emp->position, $emp->photo, $emp->salary, $emp->cv);
				return $employee;
			}

		}
	}
}

