<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mailsetting;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mailsetting::create([
            'mail_transport'            =>'smtp',
            'mail_host'                 =>'smtp.gmail.com',
            'mail_port'                 =>'465',
            'mail_username'             =>'1199mohitsharma@gmail.com',
            'mail_password'             =>'cvuofgfspqutydcx',
            'mail_encryption'           =>'ssl',
            'mail_from'                 => '1199mohitsharma@gmail.com',
        ]);
    }
}
