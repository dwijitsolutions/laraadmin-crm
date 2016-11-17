<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;
	
	protected $table = 'tickets';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the Employee assigned to this Ticket
     */
    public function assigned_to_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'assigned_to', 'id');
    }

	/**
     * Get the Organization belongs to this Ticket
     */
    public function organization_info()
    {
        return $this->belongsTo('App\Models\Organization', 'organization', 'id');
    }
	
	/**
     * Get the Contact belongs to this Ticket
     */
    public function contact_info()
    {
        return $this->belongsTo('App\Models\Contact', 'contact', 'id');
    }


	/**
     * Get the Contact belongs to this Ticket
     */
    public function project_info()
    {
        return $this->belongsTo('App\Models\Project', 'project', 'id');
    }
}
