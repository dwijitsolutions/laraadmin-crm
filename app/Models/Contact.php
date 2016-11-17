<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
	
	protected $table = 'contacts';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Employee assigned to this Contact
     */
    public function assigned_to_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'assigned_to', 'id');
    }

	/**
     * Get the Organization belongs to this Contact
     */
    public function organization_info()
    {
        return $this->belongsTo('App\Models\Organization', 'organization', 'id');
    }

	/**
     * Get the Opportunities hasMany with Contact
     */
	public function opportunities()
	{
		return $this->hasMany('App\Models\Opportunity', 'contact', 'id');
	}
}
