<?php
/**
 * Controller generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Opportunity;

class OpportunitiesController extends Controller
{
	public $show_action = true;
	
	/**
	 * Display a listing of the Opportunities.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Opportunities');
		
		if(Module::hasAccess($module->id)) {
			return View('la.opportunities.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => Module::getListingColumns('Opportunities'),
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new opportunity.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created opportunity in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Opportunities", "create")) {
		
			$rules = Module::validateRules("Opportunities", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Opportunities", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.opportunities.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified opportunity.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Opportunities", "view")) {
			
			$opportunity = Opportunity::find($id);
			if(isset($opportunity->id)) {
				$module = Module::get('Opportunities');
				$module->row = $opportunity;
				
				return view('la.opportunities.show', [
					'module' => $module,
					'view_col' => $module->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('opportunity', $opportunity);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("opportunity"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified opportunity.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Opportunities", "edit")) {			
			$opportunity = Opportunity::find($id);
			if(isset($opportunity->id)) {	
				$module = Module::get('Opportunities');
				
				$module->row = $opportunity;
				
				return view('la.opportunities.edit', [
					'module' => $module,
					'view_col' => $module->view_col,
				])->with('opportunity', $opportunity);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("opportunity"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified opportunity in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Opportunities", "edit")) {
			
			$rules = Module::validateRules("Opportunities", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Opportunities", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.opportunities.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified opportunity from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Opportunities", "delete")) {
			Opportunity::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.opportunities.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
		public function dtajax(Request $request)
	{
		$module = Module::get('Opportunities');
		$listing_cols = Module::getListingColumns('Opportunities');

		if(isset($request->filter_column)) {
			$values = DB::table('opportunities')->select($listing_cols)->whereNull('deleted_at')->where($request->filter_column, $request->filter_column_value);
		} else {
			$values = DB::table('opportunities')->select($listing_cols)->whereNull('deleted_at');
		}
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Opportunities');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($listing_cols); $j++) { 
				$col = $listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $module->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/opportunities/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Opportunities", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/opportunities/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Opportunities", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.opportunities.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
