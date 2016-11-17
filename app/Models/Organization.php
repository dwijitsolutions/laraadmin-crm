<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Elasticquent\ElasticquentTrait;

class Organization extends Model
{
    use SoftDeletes;
	use ElasticquentTrait;
	
	protected $table = 'organizations';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Employee assigned to this Lead
     */
    public function assigned_to_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'assigned_to', 'id');
    }

	/**
     * Get the Opportunities hasMany with Organization
     */
	public function opportunities()
	{
		return $this->hasMany('App\Models\Opportunity', 'organization', 'id');
	}

	/**
     * Get the organization hasMany with Organization
     */
	public function contacts()
	{
		return $this->hasMany('App\Models\Contact', 'organization', 'id');
	}

	/**
     * Get the organization hasMany with Organization
     */
	public function projects()
	{
		return $this->hasMany('App\Models\Project', 'organization', 'id');
	}
}
