<?php

use Illuminate\Database\Seeder;

use App\Member;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = new Member();

        $member->first_name = 'John';
        $member->last_name = 'Doe';
        $member->slack_id = 'U023BECGF';
        $member->username = 'jxd1234';

        $member->save();
    }
}
