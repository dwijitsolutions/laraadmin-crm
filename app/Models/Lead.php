<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes;
	
	protected $table = 'leads';
	
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
}
