<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opportunity extends Model
{
    use SoftDeletes;
	
	protected $table = 'opportunities';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Employee assigned to this Opportunity
     */
    public function assigned_to_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'assigned_to', 'id');
    }

	/**
     * Get the Organization assigned to this Opportunity
     */
    public function organization_info()
    {
        return $this->belongsTo('App\Models\Organization', 'organisation', 'id');
    }

	/**
     * Get the Contact assigned to this Opportunity
     */
    public function contact_info()
    {
        return $this->belongsTo('App\Models\Contact', 'contact', 'id');
    }
}
