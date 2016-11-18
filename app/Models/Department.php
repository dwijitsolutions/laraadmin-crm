<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
	
	protected $table = 'departments';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Employees associated with Department
     */
	public function employees()
	{
		return $this->hasMany('App\Models\Employee', 'dept', 'id');
	}

	/**
     * Get the Roles associated with Department
     */
	public function roles()
	{
		return $this->hasMany('App\Models\Role', 'dept', 'id');
	}
}
