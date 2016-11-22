<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Opportunities", 'opportunities', 'name', 'fa-lightbulb-o', [
            [
                "colname" => "name",
                "label" => "Name",
                "field_type" => "Name",
                "unique" => true,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 250,
                "required" => true,
                "listing_col" => true
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
                "colname" => "contact",
                "label" => "Contact",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@contacts",
            ], [
                "colname" => "amount",
                "label" => "Amount",
                "field_type" => "Integer",
                "unique" => false,
                "defaultvalue" => "0",
                "minlength" => 0,
                "maxlength" => 11,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "expected_close_date",
                "label" => "Expected close date",
                "field_type" => "Date",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true
            ], [
                "colname" => "next_step",
                "label" => "Next Step",
                "field_type" => "TextField",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 256,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "assigned_to",
                "label" => "Assigned to",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => "@employees",
            ], [
                "colname" => "type",
                "label" => "Type",
                "field_type" => "Radio",
                "unique" => false,
                "defaultvalue" => "Existing Business",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => false,
                "popup_vals" => ["Existing Business","New Business"],
            ], [
                "colname" => "lead_source",
                "label" => "Lead source",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => ["Cold Call","Existing Customer","Self Generated","Employee","Partner","Public Relations","Direct Mail","Conference","Trade Show","Web Site","Word of mouth","Other"],
            ], [
                "colname" => "sales_stage",
                "label" => "Sales stage",
                "field_type" => "Dropdown",
                "unique" => false,
                "defaultvalue" => "",
                "minlength" => 0,
                "maxlength" => 0,
                "required" => false,
                "listing_col" => true,
                "popup_vals" => ["Prospecting","Qualification","Needs Analysis","Value Proposition","Identify Decision Makers","Perception Analysis","Proposal or Price Quote","Negotiation or Review","Closed Won","Closed Lost"],
            ], [
                "colname" => "probability",
                "label" => "Probability",
                "field_type" => "Integer",
                "unique" => false,
                "defaultvalue" => "0",
                "minlength" => 0,
                "maxlength" => 100,
                "required" => false,
                "listing_col" => false
            ], [
                "colname" => "forecast_amount",
                "label" => "Forecast Amount",
                "field_type" => "Integer",
                "unique" => false,
                "defaultvalue" => "0",
                "minlength" => 0,
                "maxlength" => 11,
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
        if (Schema::hasTable('opportunities')) {
            Schema::drop('opportunities');
        }
    }
}
