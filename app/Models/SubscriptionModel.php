<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriptionModel extends Model
{
	protected $table      = 'subscriptionusers';
	protected $allowedFields = [
	'users_name','email','created_at'
   ];
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	// Dates
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules = [
        'user_name' => 'required',
        'email' => 'required|valid_email'
    ];
	protected $validationMessages   = [];


}
