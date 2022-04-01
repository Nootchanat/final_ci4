<?php
namespace App\Models;
use CodeIgniter\Model;

class NameModel extends Model {
    protected $table = 'login';
    
    protected $primaryKey = 'id';

    protected $allowedFields = ['fname','lname', 'email','time','time_n','time_d'];
}