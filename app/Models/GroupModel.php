<?php namespace App\Models;

use CodeIgniter\Model;

class GroupModel extends Model{
    protected $table = 'group_project';
    protected $allowedFields = ['group_id','group_name','group_pic'];
    protected $primaryKey = 'group_id';


    


}
