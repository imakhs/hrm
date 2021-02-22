<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class applications extends Sximo  {
	
	protected $table = 'tb_applications';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_applications.* FROM tb_applications  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_applications.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
