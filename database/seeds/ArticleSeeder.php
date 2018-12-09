<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
				'title' => 'title 1',
				'desc' => 'description 1',
			],
			[
				'title' => 'title 2',
				'desc' => 'description 2',
			],
			[
				'title' => 'title 3',
				'desc' => 'description 3',
			],
			[
				'title' => 'title 4',
				'desc' => 'description 4',
			],
			[
				'title' => 'title 5',
				'desc' => 'description 5',
			],
			[
				'title' => 'title 6',
				'desc' => 'description 6',
			],
			[
				'title' => 'title 7',
				'desc' => 'description 7',
			],
			[
				'title' => 'title 8',
				'desc' => 'description 8',
			],
			[
				'title' => 'title 9',
				'desc' => 'description 9',
			],
			[
				'title' => 'title 10',
				'desc' => 'description 10',
			],
			[
				'title' => 'title 11',
				'desc' => 'description 11',
			],
			[
				'title' => 'title 12',
				'desc' => 'description 12',
			],
        ]);
    }
}
