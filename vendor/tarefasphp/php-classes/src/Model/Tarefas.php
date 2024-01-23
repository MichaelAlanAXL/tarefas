<?php 

namespace App\Model;

use \App\DB\Sql;
use \App\Model;
use Rain\Tpl;

class Tarefas extends Model {

	public static function listAll() 
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tasks ORDER BY title");
	}

	public function save() 
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_salvar_cadastro(:title, :description, :status)", array(
			":title"=>$this->gettitle(),
			":description"=>$this->getdescription(),
			":status"=>$this->getstatus()
		));
		
		if (count($results) > 0) {
			$this->setData($results[0]);
	    }
	}

	public function get($id)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tasks WHERE id = :id", [
			':id'=>$id
		]);
        
        if (count($results) > 0) {
		    $this->setData($results[0]);
        }
	}

	public function update() 
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_atualizar_cadastro(:id, :title, :description, :status)", array(
			":id"=>$this->getid(),
			":title"=>$this->gettitle(),
			":description"=>$this->getdescription(),
			":status"=>$this->getstatus()
		));
		
		if (count($results) > 0) {
			$this->setData($results[0]);
	    }

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("DELETE FROM tasks WHERE id = :id", [
			':id'=>$this->getid()
		]);
	}

	public function getValues()
	{

		//$this->checkPhoto();

		$values = parent::getValues();

		return $values;
	}
}



 ?>