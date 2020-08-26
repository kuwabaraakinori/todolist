<?php

use Illuminate\Database\Seeder;
use App\User;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        for($i=1 ; $i<=5 ; $i++)
        {
            DB::table('contents')->insert([
                'content' => 'テスト投稿です',
                'title' => 'test',
                'user_id' => $user->id,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime()
            ]);
        }
    }
}
