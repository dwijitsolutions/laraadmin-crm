<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Projects", 'projects', 'name', 'fa-clone', [
            [
                "colname" => "name",
                "label" => "Project Name",
                "field_type" => "Name",
                "unique" => true,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 250,
                "required" => true,
                "listing_col" => true
            ], [
                "colname" => "start_date",
                "label" => "Start Date",
                "field_type" => "Date",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "target_end_date",
                "label" => "Target End Date",
                "field_type" => "Date",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "actual_end_date",
                "label" => "Actual End Date",
                "field_type" => "Date",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "assigned_to",
                "label" => "Assigned To",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@employees",
            ], [
                "colname" => "status",
                "label" => "Status",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => ["prospecting","initiated","in progress","waiting for feedback","on hold","completed","delivered","archived"],
            ], [
                "colname" => "type",
                "label" => "Type",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false,
                "popup_vals" => "@industry_types",
            ], [
                "colname" => "organization",
                "label" => "Organization",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@organizations",
            ], [
                "colname" => "target_budget",
                "label" => "Target Budget",
                "field_type" => "Integer",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 1,
                "maxlength" => 100,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "project_url",
                "label" => "Project Url",
                "field_type" => "String",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "priority",
                "label" => "Priority",
                "field_type" => "Radio",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false,
                "popup_vals" => ["low","normal","high"],
            ], [
                "colname" => "description",
                "label" => "Description",
                "field_type" => "Textarea",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false
            ]
        ]);
        
        /*
        Module::generate("Module_Name", "Table_Name", "view_column_name" "Fields_Array");

        Field Format:
        [
            "colname" => "name",
            "label" => "Name",
            "field_type" => "Name",
            "unique" => false,
            "defaultvalue" => "John Doe",
            "minlength" => 5,
            "maxlength" => 100,
            "required" => true,
            "listing_col" => true,
            "popup_vals" => ["Employee", "Client"]
        ]
        # Format Details: Check http://laraadmin.com/docs/migrations_cruds#schema-ui-types
        colname: Database column name. lowercase, words concatenated by underscore (_)
        label: Label of Column e.g. Name, Cost, Is Public
        field_type: It defines type of Column in more General way.
        unique: Whether the column has unique values. Value in true / false
        defaultvalue: Default value for column.
        minlength: Minimum Length of value in integer.
        maxlength: Maximum Length of value in integer.
        required: Is this mandatory field in Add / Edit forms. Value in true / false
        listing_col: Is allowed to show in index page datatable.
        popup_vals: These are values for MultiSelect, TagInput and Radio Columns. Either connecting @tables or to list []
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('projects')) {
            Schema::drop('projects');
        }
    }
}
