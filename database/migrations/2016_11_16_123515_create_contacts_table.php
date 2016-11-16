<?php
/**
 * Migration genrated using LaraAdmin
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
            ["designation", "Designation", "Dropdown", false, "", 0, 0, false, ["None","Mr.","Ms.","Mrs.","Dr.","Prof."]],
            ["first_name", "First Name", "Name", false, "", 0, 256, false],
            ["last_name", "Last Name", "Name", false, "", 0, 256, false],
            ["title", "Title", "String", false, "", 0, 256, false],
            ["organization", "Organization", "Dropdown", false, "", 0, 0, false, "@organizations"],
            ["office_phone", "Office Phone", "Mobile", false, "", 0, 20, false],
            ["mobile_phone", "Mobile Phone", "Mobile", false, "", 0, 20, false],
            ["home_phone", "Home Phone", "Mobile", false, "", 0, 20, false],
            ["lead_source", "Lead Source", "Dropdown", false, "", 0, 0, false, "@industry_types"],
            ["department", "Department", "String", false, "", 0, 256, false],
            ["email1", "Primary Email", "Email", false, "", 0, 256, false],
            ["email2", "Secondary Email", "Email", false, "", 0, 256, false],
            ["dob", "Date of Birth", "Date", false, "", 0, 0, false],
            ["assistant", "Assistant", "String", false, "", 0, 256, false],
            ["assistant_phone", "Assistant Phone", "Mobile", false, "", 0, 20, false],
            ["assigned_to", "Assigned To", "Dropdown", false, "", 0, 0, false, "@employees"],
            ["address", "Address", "Address", false, "", 0, 256, false],
            ["city", "City", "String", false, "", 0, 256, false],
            ["description", "Description", "Textarea", false, "", 0, 0, false],
            ["profile_picture", "Contact Image", "Files", false, "", 0, 0, false],
        ]);
		
		/*
		Row Format:
		["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
        Module::generate("Module_Name", "Table_Name", "view_column_name" "Fields_Array");
        
		Module::generate("Books", 'books', 'name', [
            ["address",     "Address",      "Address",  false, "",          0,  1000,   true],
            ["restricted",  "Restricted",   "Checkbox", false, false,       0,  0,      false],
            ["price",       "Price",        "Currency", false, 0.0,         0,  0,      true],
            ["date_release", "Date of Release", "Date", false, "NULL", 0, 0,   false],
            ["time_started", "Start Time",  "Datetime", false, "now()", 0, 0, false],
            ["weight",      "Weight",       "Decimal",  false, 0.0,         0,  20,     true],
            ["publisher",   "Publisher",    "Dropdown", false, "Marvel",    0,  0,      false, ["Bloomsbury","Marvel","Universal"]],
            ["publisher",   "Publisher",    "Dropdown", false, 3,           0,  0,      false, "@publishers"],
            ["email",       "Email",        "Email",    false, "",          0,  0,      false],
            ["file",        "File",         "File",     false, "",          0,  1,      false],
            ["files",       "Files",        "Files",    false, "",          0,  10,     false],
            ["weight",      "Weight",       "Float",    false, 0.0,         0,  20.00,  true],
            ["biography",   "Biography",    "HTML",     false, "<p>This is description</p>", 0, 0, true],
            ["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 250,  false],
            ["pages",       "Pages",        "Integer",  false, 0,           0,  5000,   false],
            ["mobile",      "Mobile",       "Mobile",   false, "+91  8888888888", 0, 20,false],
            ["media_type",  "Media Type",   "Multiselect", false, ["Audiobook"], 0, 0,  false, ["Print","Audiobook","E-book"]],
            ["media_type",  "Media Type",   "Multiselect", false, [2,3],    0,  0,      false, "@media_types"],
            ["name",        "Name",         "Name",     false, "John Doe",  5,  250,    true],
            ["password",    "Password",     "Password", false, "",          6,  250,    true],
            ["status",      "Status",       "Radio",    false, "Published", 0,  0,      false, ["Draft","Published","Unpublished"]],
            ["author",      "Author",       "String",   false, "JRR Tolkien", 0, 250,   true],
            ["genre",       "Genre",        "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],
            ["description", "Description",  "Textarea", false, "",          0,  1000,   false],
            ["short_intro", "Introduction", "TextField",false, "",          5,  250,    true],
            ["website",     "Website",      "URL",      false, "http://dwij.in", 0, 0,  false],
        ]);
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
