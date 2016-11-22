<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Contacts", 'contacts', 'first_name', 'fa-user', [
            [
                "colname" => "designation",
                "label" => "Designation",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 5,
                "required" => true,
                "listing_col" => false,
                "popup_vals" => ["None","Mr.","Ms.","Mrs.","Dr.","Prof."],
            ], [
                "colname" => "first_name",
                "label" => "First Name",
                "field_type" => "Name",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "last_name",
                "label" => "Last Name",
                "field_type" => "Name",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => true,
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
                "colname" => "organization",
                "label" => "Organization Name  ",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@organizations",
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
                "colname" => "email",
                "label" => "Primary Email",
                "field_type" => "Email",
                "unique" => true,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 250,
                "required" => false,
                "listing_col" => true
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
                "popup_vals" => "@industry_types",
            ], [
                "colname" => "department",
                "label" => "Department",
                "field_type" => "String",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
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
                "colname" => "home_phone",
                "label" => "Home Phone",
                "field_type" => "Mobile",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 10,
                "maxlength" => 20,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "email2",
                "label" => "Secondary Email",
                "field_type" => "Email",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "dob",
                "label" => "Date of Birth",
                "field_type" => "Date",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "assistant",
                "label" => "Assistant",
                "field_type" => "String",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "assistant_phone",
                "label" => "Assistant Phone",
                "field_type" => "Mobile",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 20,
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
                "required" => true,
                "listing_col" => true,
                "popup_vals" => "@employees",
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
            ], [
                "colname" => "profile_picture",
                "label" => "Contact Image",
                "field_type" => "Files",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true
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
        if (Schema::hasTable('contacts')) {
            Schema::drop('contacts');
        }
    }
}
