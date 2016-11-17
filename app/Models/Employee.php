<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
	
	protected $table = 'employees';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Lead associated with Employee
     */
	public function leads()
	{
		return $this->hasMany('App\Models\Lead', 'assigned_to', 'id');
	}

	/**
     * Get the Opportunities associated with Employee
     */
	public function opportunities()
	{
		return $this->hasMany('App\Models\Opportunity', 'assigned_to', 'id');
	}

	/**
     * Get the Projects associated with Employee
     */
	public function projects()
	{
		return $this->hasMany('App\Models\Project', 'assigned_to', 'id');
	}

	/**
     * Get the Contacts associated with Employee
     */
	public function contacts()
	{
		return $this->hasMany('App\Models\Contact', 'assigned_to', 'id');
	}

	/**
     * Get the Organizations associated with Employee
     */
	public function organizations()
	{
		return $this->hasMany('App\Models\Organization', 'assigned_to', 'id');
	}
}
