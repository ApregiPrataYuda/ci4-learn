<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
    
    protected $table      = 'person';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['FirstName', 'LastName', 'address','created_at'];

}