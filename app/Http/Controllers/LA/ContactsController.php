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

use App\Models\Contact;

class ContactsController extends Controller
{
	public $show_action = true;
	
	/**
	 * Display a listing of the Contacts.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Contacts');
		
		if(Module::hasAccess($module->id)) {
			return View('la.contacts.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => Module::getListingColumns('Contacts'),
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new contact.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created contact in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Contacts", "create")) {
		
			$rules = Module::validateRules("Contacts", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Contacts", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.contacts.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified contact.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Contacts", "view")) {
			
			$contact = Contact::find($id);
			if(isset($contact->id)) {
				$module = Module::get('Contacts');
				$module->row = $contact;
				
				return view('la.contacts.show', [
					'module' => $module,
					'view_col' => $module->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('contact', $contact);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contact"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified contact.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Contacts", "edit")) {			
			$contact = Contact::find($id);
			if(isset($contact->id)) {	
				$module = Module::get('Contacts');
				
				$module->row = $contact;
				
				return view('la.contacts.edit', [
					'module' => $module,
					'view_col' => $module->view_col,
				])->with('contact', $contact);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contact"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified contact in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Contacts", "edit")) {
			
			$rules = Module::validateRules("Contacts", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Contacts", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.contacts.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified contact from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Contacts", "delete")) {
			Contact::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.contacts.index');
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
		$module = Module::get('Contacts');
		$listing_cols = Module::getListingColumns('Contacts');

		if(isset($request->filter_column)) {
			$values = DB::table('contacts')->select($listing_cols)->whereNull('deleted_at')->where($request->filter_column, $request->filter_column_value);
		} else {
			$values = DB::table('contacts')->select($listing_cols)->whereNull('deleted_at');
		}
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Contacts');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($listing_cols); $j++) { 
				$col = $listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $module->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/contacts/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Contacts", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/contacts/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Contacts", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.contacts.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
