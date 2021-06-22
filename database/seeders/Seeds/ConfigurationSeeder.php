<?php

namespace Database\Seeders\Seeds;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //initials
        Configuration::firstOrCreate([
            'key' => 'INITIAL_CREDITS',
        ], [
            'value' => '250',
            'type'  => 'integer',
            'description' => 'The initial amount of credits the user starts with.'
        ]);

        Configuration::firstOrCreate([
            'key' => 'INITIAL_SERVER_LIMIT',
        ], [
            'value' => '1',
            'type'  => 'integer',
            'description' => 'The initial server limit the user starts with.'
        ]);

        //verify email event
        Configuration::firstOrCreate([
            'key' => 'CREDITS_REWARD_AFTER_VERIFY_EMAIL',
        ], [
            'value' => '250',
            'type'  => 'integer',
            'description' => 'Increase in credits after the user has verified their email account.'
        ]);

        Configuration::firstOrCreate([
            'key' => 'SERVER_LIMIT_REWARD_AFTER_VERIFY_EMAIL',
        ], [
            'value' => '2',
            'type'  => 'integer',
            'description' => 'Increase in server limit after the user has verified their email account.'
        ]);

        //verify discord event
        Configuration::firstOrCreate([
            'key'   => 'CREDITS_REWARD_AFTER_VERIFY_DISCORD',
        ] , [
            'value' => '375',
            'type'  => 'integer',
            'description' => 'Increase in credits after the user has verified their discord account.'
        ]);

        Configuration::firstOrCreate([
            'key' => 'SERVER_LIMIT_REWARD_AFTER_VERIFY_DISCORD',
        ], [
            'value' => '2',
            'type'  => 'integer',
            'description' => 'Increase in server limit after the user has verified their discord account.'
        ]);

        //other
        Configuration::firstOrCreate([
            'key' => 'MINIMUM_REQUIRED_CREDITS_TO_MAKE_SERVER',
        ], [
            'value' => '50',
            'type'  => 'integer',
            'description' => 'The minimum amount of credits the user would need to make a server.'
        ]);

        //purchasing
        Configuration::firstOrCreate([
            'key' => 'SERVER_LIMIT_AFTER_IRL_PURCHASE',
        ], [
            'value' => '10',
            'type'  => 'integer',
            'description' => 'Sets the users server limit to this amount after purchasing with money, set to 0 to ignore this.',
        ]);
    }
}