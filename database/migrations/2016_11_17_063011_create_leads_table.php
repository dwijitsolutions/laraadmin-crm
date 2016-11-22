<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Leads", 'leads', 'first_name', 'fa-check-square-o', [
            [
                "colname" => "first_name",
                "label" => "First Name",
                "field_type" => "Name",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 1,
                "maxlength" => 100,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "last_name",
                "label" => "Last Name",
                "field_type" => "Name",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 1,
                "maxlength" => 100,
                "required" => true,
                "listing_col" => false
            ], [
                "colname" => "phone_primary",
                "label" => "Primary Phone",
                "field_type" => "Mobile",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 10,
                "maxlength" => 20,
                "required" => true,
                "listing_col" => true
            ], [
                "colname" => "phone_secondary",
                "label" => "Secondary Phone",
                "field_type" => "Mobile",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 10,
                "maxlength" => 20,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "email_primary",
                "label" => "Primary Email",
                "field_type" => "Email",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "email_secondary",
                "label" => "Secondary Email",
                "field_type" => "Email",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "company",
                "label" => "Company",
                "field_type" => "String",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "title",
                "label" => "Title",
                "field_type" => "String",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "lead_source",
                "label" => "Lead Source",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => ["Cold Call","Existing Customer","Self Generated","Employee","Partner","Public Relation","Direct Mail","Conference","Trade Show","Web Site","Word of mouth","Other"],
            ], [
                "colname" => "industry",
                "label" => "Industry",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@industry_types",
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
                "colname" => "employee_count",
                "label" => "Number of Employees",
                "field_type" => "Integer",
                "unique" => false,
                "defaultvalue" => "1",
                "minlength" => 1,
                "maxlength" => 11,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "address",
                "label" => "Address",
                "field_type" => "Address",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "city",
                "label" => "City",
                "field_type" => "Address",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 1,
                "maxlength" => 50,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "country",
                "label" => "Country",
                "field_type" => "Address",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 1,
                "maxlength" => 50,
                "required" => false,
                "listing_col" => false
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
        if (Schema::hasTable('leads')) {
            Schema::drop('leads');
        }
    }
}
