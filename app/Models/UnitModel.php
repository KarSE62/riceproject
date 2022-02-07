<?php namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model{
    protected $table = 'km_unit';
    protected $allowedFields = ['km_id','km_name','km_pic','km_group','km_detail'];
    protected $primaryKey = 'km_id';

}
