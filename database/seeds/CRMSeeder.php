<?php

use Illuminate\Database\Seeder;

class CRMSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/* ================ LaraAdmin CRM Seeder Code ================ */
		
		// Industry Types
		DB::table('industry_types')->insert([
			['name' => 'Agency'],
			['name' => 'Apparel'],
			['name' => 'Banking'],
			['name' => 'Biotechnology'],
			['name' => 'Chemicals'],
			['name' => 'Communications'],
			['name' => 'Construction'],
			['name' => 'Consulting'],
			['name' => 'Education'],
			['name' => 'Electronics'],
			['name' => 'Energy'],
			['name' => 'Engineering'],
			['name' => 'Entertainment'],
			['name' => 'Environmental'],
			['name' => 'Finance'],
			['name' => 'Food - Beverage'],
			['name' => 'Government'],
			['name' => 'Healthcare'],
			['name' => 'Hospitality'],
			['name' => 'Insurance'],
			['name' => 'IT'],
			['name' => 'Machinery'],
			['name' => 'Manufacturing'],
			['name' => 'Marketing'],
			['name' => 'Media'],
			['name' => 'Not For Profit'],
			['name' => 'Recreation'],
			['name' => 'Retail'],
			['name' => 'Shipping'],
			['name' => 'Technology'],
			['name' => 'Telecommunications'],
			['name' => 'Transportation'],
			['name' => 'Utilities'],
			['name' => 'Other']
		]);
	}
}
