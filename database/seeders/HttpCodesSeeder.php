<?php

namespace Database\Seeders;

use App\Models\Codes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HttpCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'Continue',
            'Switching Protocol',
            'Processing',
            'Early Hints',
            'OK',
            'Created',
            'Accepted',
            'Non-Authoritative Information',
            'No Content',
            'Reset Content',
            'Partial Content',
            'Multi-Status',
            'Already Reported',
            'IM Used',
            'Multiple Choice',
            'Found',
            'See Other',
            'Not Modified',
            'Use Proxy',
            'unused',
            'Temporary Redirect',
            'Permanent Redirect',
            'Bad Request',
            'Unauthorized',
            'Payment Required ',
            'Forbidden',
            'Not Found',
            'Method Not Allowed',
            'Not Acceptable',
            'Proxy Authentication Required',
            'Request Timeout',
            'Conflict',
            'Gone',
            'Length Required',
            'Internal Server Error',
            'Not Implemented',
            'Bad Gateway',
            'Service Unavailable',
            'Gateway Timeout',
            'HTTP Version Not Supported',
            'Variant Also Negotiates',
            'Insufficient Storage ',
        ];
        $code = [
            '100',
            '101',
            '102',
            '103',
            '200',
            '201',
            '202',
            '203',
            '204',
            '205',
            '206',
            '207',
            '208',
            '226',
            '300',
            '302',
            '303',
            '304',
            '305',
            '306',
            '307',
            '308',
            '400',
            '401',
            '402',
            '403',
            '404',
            '405',
            '406',
            '407',
            '408',
            '409',
            '410',
            '411',
            '500',
            '501',
            '502',
            '503',
            '504',
            '505',
            '506',
            '507',
        ];

        DB::table('codes')->insert([
            'status' => $status,
            'code' => $code
        ]);
    }
}
