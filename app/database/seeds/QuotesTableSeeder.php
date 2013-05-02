<?php

class QuotesTableSeeder extends Seeder {
	public function run() {
		DB::table('quotes')->delete();
		Quote::create(array(
			'statement' => 'By preparing to fail, you are failing to prepare',
			'author' => 'Benjamin Franklin'));
		Quote::create(array(
			'statement' => 'Any fool can criticize, condemn, and complain, and most fools do',
			'author' => 'Benjamin Franklin'));
		Quote::create(array(
			'statement' => 'Three can keep a secret, if two of them are dead',
			'author' => 'Benjamin Franklin'));
	}
}