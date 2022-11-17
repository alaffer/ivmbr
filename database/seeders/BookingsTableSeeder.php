<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bookings')->delete();
        
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-01-01',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '19',
                'paydate' => '2011-01-01',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-01 00:00:00.000',
                'updated_at' => '2022-11-17 14:32:51.647',
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2011-01-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.19',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-01-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-01-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS',
                'support_year' => NULL,
                'payin' => '1284.47',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-01-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1283.12',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-01-31',
                'purpose' => 'Online-Auftrag vom 31.01. Elvir Hodzic',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Hodzic BSc. Elvir-27775',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-31 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-01-31',
                'purpose' => 'Online-Auftrag vom 31.01. Harald Unger',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-01-31 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-02-09',
                'purpose' => 'Online-Auftrag vom 09.02. Thomas Steiner',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Steiner Manfred-14074',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-02-09 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-02-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS',
                'support_year' => NULL,
                'payin' => '1266.55',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-02-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-02-21',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '966.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-02-21 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-03-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS',
                'support_year' => NULL,
                'payin' => '1278.28',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-03-21',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1278.28',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-21 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            13 => 
            array (
                'depot_id' => '5',
                'category_id' => '22',
                'paydate' => '2011-03-30',
                'purpose' => 'Übertrag nach AK-Prüfung',
                'support_year' => NULL,
                'payin' => '60.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            14 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2011-03-30',
                'purpose' => 'Übertrag nach AK-Prüfung',
                'support_year' => NULL,
                'payin' => '6988.33',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '22',
                'paydate' => '2011-03-30',
                'purpose' => 'Übertrag nach AK-Prüfung',
                'support_year' => NULL,
                'payin' => '2000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            16 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2011-03-30',
                'purpose' => 'Übertrag nach AK-Prüfung',
                'support_year' => NULL,
                'payin' => '1885.79',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-03-30',
                'purpose' => 'Online-Auftrag vom 30.03. Kindergeld Weiß',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Weiß Martin-23780',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2011-03-31',
                'purpose' => 'Online-Auftrag vom 30.03. Druck & Grafik',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '192.34',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-03-31 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-04-01',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-04-01',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2011-04-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-04-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.73',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            23 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2011-04-01',
                'purpose' => 'Zinsen Bawag',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            24 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2011-04-01',
                'purpose' => 'KEST Bawag',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2011-04-01',
                'purpose' => 'KEST BA',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-04-01',
                'purpose' => 'Porto BA',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-04-01',
                'purpose' => 'Spesen BA',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-04-01',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.73',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2011-04-04',
                'purpose' => 'Überweisung Rechnung BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '527.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-04 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            30 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2011-04-04',
            'purpose' => '2 Abschöpfer (spb1)',
                'support_year' => NULL,
                'payin' => '2244.83',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-04 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            31 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2011-04-04',
                'purpose' => 'Geld für neues Sparbucvh',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '7000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-04 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            32 => 
            array (
                'depot_id' => '4',
                'category_id' => '22',
                'paydate' => '2011-04-04',
                'purpose' => 'Eröffnung Spb 3',
                'support_year' => NULL,
                'payin' => '9360.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-04 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-04-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS',
                'support_year' => NULL,
                'payin' => '1308.76',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            34 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-04-12',
                'purpose' => 'Auszahlung BR-Essen Zeltweg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '102.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            35 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-04-12',
                'purpose' => 'Betriebsrats-Sitzung  Fabrik Vösendorf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '103.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-04-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '487.37',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-04-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            37 => 
            array (
                'depot_id' => '1',
                'category_id' => '19',
                'paydate' => '2011-05-03',
                'purpose' => 'Geschenk zur Pensionierung  Teubl Gebühren',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-03 00:00:00.000',
                'updated_at' => '2022-11-17 14:32:51.647',
            ),
            38 => 
            array (
                'depot_id' => '1',
                'category_id' => '17',
                'paydate' => '2011-05-03',
                'purpose' => 'Geschenk zur Pensionierung  Teubl',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '219.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            39 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'Taxi retour',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            40 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '61.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            41 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'Br-Erssen Augustiner Bräu - Buffet',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '270.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            42 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'Br-Erssen Augustiner Bräu - Getränke',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '220.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            43 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'Taxi hin',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            44 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-05',
                'purpose' => 'BR-Essen Salzburg Zug HR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '47.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-05-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1279.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-12',
                'purpose' => 'essen alte Schmiede',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '485.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            47 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-12',
                'purpose' => 'Taxi Hausmannstätten/Zug',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '29.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-12',
                'purpose' => 'Taxi hin',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '16.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-12',
                'purpose' => 'BR-Essen Graz - Zug HR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '33.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-19',
                'purpose' => 'Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '41.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-19 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            51 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-19',
                'purpose' => 'Taxi hin',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '7.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-19 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            52 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-19',
                'purpose' => 'BR-Essen Linz Zug H',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-19 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            53 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2011-05-19',
                'purpose' => 'Essen Mondigo',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '470.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-19 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-05-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1279.49',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2011-05-30',
                'purpose' => 'Online-Auftrag vom 30.05. Empfänger: Sascha Schwab Kontonummer: 27210013526 BLZ: 14000 IVM BR Sport- oder Kulturbeitrag',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => 'Schwab Sascha-23669',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-05-30 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-06-01',
                'purpose' => 'Online-Auftrag vom 01.06. Empfänger: Sanel Krupic Kontonummer: 28735417500 BLZ: 20111 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => 'Krupic BSc. Sanel-28951',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-06-01',
                'purpose' => 'Online-Auftrag vom 01.06. Empfänger: Herbert Pamperl Kontonummer: 20010777977 BLZ: 14200 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pamperl Herbert-22816',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-06-01',
                'purpose' => 'Online-Auftrag vom 01.06. Empfänger: Marietta Beltermann-Faber Kontonummer: 00034951792 BLZ: 20111 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2011-06-01',
                'purpose' => 'Online-Auftrag vom 01.06. Empfänger: Michael Maier Kontonummer: 16101800189 BLZ: 20815 IVM BR-Essen Kostenersatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '97.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-06-14',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1274.45',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-14 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-06-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1061.05',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-06-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2011-07-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-07-01',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-07-01',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-07-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2011-07-07',
                'purpose' => 'Online-Auftrag vom 07.07. Empfänger: Druck & Grafik Kontonummer: 00000610808 BLZ: 19520 Re.14739 000000400832',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '215.49',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-07 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-07-13',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage 06/11',
                'support_year' => NULL,
                'payin' => '1280.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-13 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-07-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1063.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-07-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2011-08-01',
                'purpose' => 'Online-Auftrag vom 01.08. Empfänger: Reinhold Wechselberger Kontonummer: 00011349495 BLZ: 32000 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wechselberger Reinhold-32581',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-08-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-08-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1309.97',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-08-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-08-19',
                'purpose' => 'Online-Auftrag vom 19.08. Empfänger: Axel Wildgrube Kontonummer: 22010007589 BLZ: 14900 IVM BR Kinder-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Wildgrube Axel-22930',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-08-19 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-08-22',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1169.97',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-08-22 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-09-08',
                'purpose' => 'Online-Auftrag vom 08.09. Empfänger: Maurer Michael Kontonummer: 20010782059 BLZ: 14200 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-09-08 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-09-08',
                'purpose' => 'Online-Auftrag vom 08.09. Empfänger: Gressl Michael Kontonummer: 14823 102 000 BLZ: 11870 IVM BR Kinder-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Gressl Michael-16033',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-09-08 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-09-13',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1311.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-09-13 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-09-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1161.13',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-09-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2011-10-03',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-10-03',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2011-10-03',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-03 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-10-03',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.73',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-03 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2011-10-05',
                'purpose' => 'Gutschrift  UCGBA/Betriebsservice BS-Kenn: 05959 04.10.2011/1 VPS000069698',
                'support_year' => NULL,
                'payin' => '14.53',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-05 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-10-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1283.17',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            83 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-10-20',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1296.28',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-10-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2011-11-03',
                'purpose' => 'Online-Auftrag vom 02.11. Empfänger: ROGER STARKIE Kontonummer: 05510020199 BLZ: 14000 IVM BR Weiterbildungsunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Starkie Roger-18218',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-03 00:00:00.000',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-11-03',
                'purpose' => 'Online-Auftrag vom 02.11. Empfänger: Gernot Philipp Kontonummer: 32102209222 BLZ: 20320 IVM BR Heirats-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Philipp Gernot-17669',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2011-11-03',
                'purpose' => 'Online-Auftrag vom 02.11. Empfänger: Richard Skriwanek Kontonummer: 28045688200 BLZ: 20111 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2011-11-03',
                'purpose' => 'Online-Auftrag vom 02.11. Empfänger: Peter Usleber Kontonummer: 00604200139 BLZ: 20314 IVM BR Kostenersatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '360.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2011-11-03',
                'purpose' => 'Online-Auftrag vom 02.11. Empfänger: Manfred Pierer Kontonummer: 00000031427 BLZ: 35065 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pierer Manfred-27831',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-03 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-11-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1237.39',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-11-21',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '657.39',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-21 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-11-29',
                'purpose' => 'Online-Auftrag vom 29.11. Empfänger: Rainer Bürgl Kontonummer: 00764 075 958 BLZ: 20151 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bürgl Rainer-30501',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-29 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2011-11-29',
                'purpose' => 'Online-Auftrag vom 29.11. Empfänger: Druck & Grafik Kontonummer: 00000610808 BLZ: 19520 Re.14956/142 000000400832',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '206.25',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-29 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-11-29',
                'purpose' => 'Online-Auftrag vom 29.11. Empfänger: Manfred Wlasak Kontonummer: 00934 017 476 BLZ: 20151 IVM BR Heirats- oder Kinder-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Wlasak Manfred-21671',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-29 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2011-11-29',
                'purpose' => 'Online-Auftrag vom 29.11. Empfänger: Michaela Oberauer Kontonummer: 00701 537 185 BLZ: 20151 IVM BR Heirats- oder Kinder-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Oberauer Michaela-26359',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-11-29 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2011-12-12',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1222.09',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-12-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2011-12-20',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '775.84',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-12-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2011-12-21',
                'purpose' => 'Online-Auftrag vom 21.12. Empfänger: Christine Kendlbacher Kontonummer: 00078424395 BLZ: 60000 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '60.00',
            'person' => 'mehrere MA (siehe Liste)',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-12-21 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2011-12-21',
                'purpose' => 'Online-Auftrag vom 21.12. Empfänger: Ingrid Primus Kontonummer: 00002007391 BLZ: 38102 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '285.00',
            'person' => 'mehrere MA (siehe Liste)',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2011-12-21 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2012-01-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-01-01',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-01 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-01-01',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2012-01-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.67',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-01 00:00:00.000',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            3 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-01-01',
                'purpose' => 'BR-Quartalstreffen ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '125.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-01 00:00:00.000',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-01-11',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1193.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-11 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2012-01-20',
                'purpose' => 'Online-Auftrag vom 20.01. Empfänger: Peter Postmann Kontonummer: 28614188600 BLZ: 20111 IVM BR Event-Unterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '90.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-20 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-01-20',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '847.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2012-01-20',
                'purpose' => 'Online-Auftrag vom 20.01. Empfänger: Peter Usleber Kontonummer: 00604200139 BLZ: 20314 IVM BR Kostenersatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-01-20 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-02-10',
                'purpose' => 'Online-Auftrag vom 10.02. Empfänger: Ana Maria Rodriguez Kontonummer: 29253378300 BLZ: 20111 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rodriguez MSc Ana Maria-33914',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-10 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-02-10',
                'purpose' => 'Online-Auftrag vom 10.02. Empfänger: Gerhard Zvonek Kontonummer: 17710010501 BLZ: 14000 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Zvonek Gerhard-16709',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-10 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-02-10',
                'purpose' => 'Online-Auftrag vom 10.02. Empfänger: Tanja Gnaser Kontonummer: 52101 067 447 BLZ: 12000 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.00',
                'person' => 'Gnaser Tanja-33273',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-10 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-02-10',
                'purpose' => 'Online-Auftrag vom 10.02. Empfänger: Stefan Woehrer Kontonummer: 20461149002 BLZ: 19210 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wöhrer Stefan-18515',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-10 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-02-13',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1170.15',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-13 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-02-20',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '821.15',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-02-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-03-12',
                'purpose' => 'Gutschrift  IVM TECHNICAL CONSULTANTS BR-Umlage',
                'support_year' => NULL,
                'payin' => '1170.89',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2012-03-12',
                'purpose' => 'Online-Auftrag vom 12.03. Empfänger: Michael Maier Kontonummer: 16101800189 BLZ: 20815 IVM BR Kostenersatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '152.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-03-12',
                'purpose' => 'Online-Auftrag vom 12.03. Empfänger: Helmuth Stradner Kontonummer: 10220 089 600 BLZ: 11000 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stradner Helmuth-16909',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2012-03-12',
                'purpose' => 'Online-Auftrag vom 12.03. Empfänger: Manuel Fedrigotti Kontonummer: 32280380000 BLZ: 40850 IVM BR Heirats- oder Kinder-Prämie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Fedrigotti Manuel-16113',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2012-03-12',
                'purpose' => 'Online-Auftrag vom 12.03. Empfänger: ROGER STARKIE Kontonummer: 05510020199 BLZ: 14000 IVM BR Weiterbildungsunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Starkie Roger-18218',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-03-12',
                'purpose' => 'Online-Auftrag vom 12.03. Empfänger: Richard SKRIWANEK Kontonummer: 28045688200 BLZ: 20111 IVM BR Kultur-/Sportunterstützung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-12 00:00:00.000',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-03-20',
                'purpose' => 'Abschöpfer A01 Empfänger: BR F.ANG.IVM TC WIEN GMBH Kontonummer: 00204 046 577 BLZ: 12000 000204046577',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '798.19',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-03-20 00:00:00.000',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2012-04-02',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.67',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:42:05.717',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-04-02',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:05.633',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-04-02',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.35',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:06.877',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2012-04-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:08.380',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:10.070',
                'updated_at' => '2022-11-17 20:27:44.697',
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Tsuchiya-Philipp Manfred-15753',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:11.940',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:13.910',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:21.110',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Paul Yvonne-31554',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:30.677',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2012-04-04',
                'purpose' => 'Online-Auftrag vom 04.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schöllbauer Stefan-18444',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:43:35.320',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2012-04-11',
                'purpose' => 'Online-Auftrag vom 11.04.
Verlag Druck und Grafik',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '215.49',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:44:20.447',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-04-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS',
                'support_year' => NULL,
                'payin' => '1190.41',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:44:32.033',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-04-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '673.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:44:40.553',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            34 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-04-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '673.17',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-04-20 00:00:00.000',
                'updated_at' => '2015-07-02 10:16:35.957',
            ),
            35 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2012-05-09',
                'purpose' => 'handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2012-05-09',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => '3000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-05-09',
                'purpose' => 'abschöpfer 03',
                'support_year' => NULL,
                'payin' => '2817.71',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'depot_id' => '1',
                'category_id' => '13',
                'paydate' => '2012-05-10',
                'purpose' => 'BR-Essen - Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '710.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 08:15:30.760',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-05-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
                'support_year' => NULL,
                'payin' => '1194.84',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:44:58.403',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-05-21',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1194.84',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:45:06.923',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            41 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-24',
                'purpose' => 'Br-Essen wien
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '545.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-24 00:00:00.000',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2012-05-25',
                'purpose' => 'Online-Auftrag vom 25.05.  AUFTRAGSBESTÄTIGUNG
Fahrt Zeltweg - Wein H/R mit dem Auto
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:45:29.237',
                'updated_at' => '2013-05-14 08:33:38.767',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-05-25',
                'purpose' => 'Online-Auftrag vom 25.05.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kapfenberger BSc Michael-35135',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:45:55.550',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2012-05-25',
                'purpose' => 'Online-Auftrag vom 25.05.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:46:16.287',
                'updated_at' => '2013-05-13 16:51:54.613',
            ),
            45 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-30',
                'purpose' => 'BR-Essen Salzburg
Zugfahrt / einfach mit Sitzplatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-30 00:00:00.000',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-30',
                'purpose' => 'BR-Essen Salzburg
Essen. Tisch 1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '385.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-30 00:00:00.000',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-30',
                'purpose' => 'BR-Essen Salzburg
Essen Tisch 2',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-30 00:00:00.000',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-30',
                'purpose' => 'BR-Essen Salzburg
Taxi zum hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-30 00:00:00.000',
                'updated_at' => '2013-05-14 08:55:56.913',
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-31',
                'purpose' => 'BR-Essen Salzburg
Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '85.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-31 00:00:00.000',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-31',
                'purpose' => 'BR-essen Salzburg 
Taxi vom Hotel zum Bhf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-31 00:00:00.000',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-31',
                'purpose' => 'BR-Essen Linz
Taxi Bhf - Lokal',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-31 00:00:00.000',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-31',
                'purpose' => 'BR-Essen Linz
Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '270.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-31 00:00:00.000',
                'updated_at' => '2013-05-14 08:55:26.537',
            ),
            53 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-05-31',
                'purpose' => 'BR-Essen Linz
Zug Salzburg - Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '11.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-05-31 00:00:00.000',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-06-01',
                'purpose' => 'BR-Essen Linz
Zug retour nach Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-06-01 00:00:00.000',
                'updated_at' => '2013-05-14 08:57:42.227',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-06-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
BIC: BKAUATWWXXX 
                'support_year' => NULL,
                'payin' => '1230.36',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:48:26.687',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2012-06-19',
                'purpose' => 'Online-Auftrag vom 19.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '90.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:48:48.827',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-06-19',
                'purpose' => 'Online-Auftrag vom 19.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pauli Adam-36424',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:49:08.973',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-06-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '870.36',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:49:18.117',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-06-27',
                'purpose' => 'Online-Auftrag vom 27.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '36.00',
                'person' => 'Sanchez Recio Juan-36034',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:50:15.277',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-06-27',
                'purpose' => 'Online-Auftrag vom 27.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:50:38.200',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2012-06-27',
                'purpose' => 'Online-Auftrag vom 27.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '219.78',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:50:49.797',
                'updated_at' => '2013-05-13 16:51:40.970',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-06-27',
                'purpose' => 'Online-Auftrag vom 27.06.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:51:25.017',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-07-02',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:51:50.680',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-07-02',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:51:51.487',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2012-07-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:51:52.383',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2012-07-02',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.69',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:51:53.320',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            67 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2012-07-02',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-07-02 00:00:00.000',
                'updated_at' => '2015-07-02 10:16:24.710',
            ),
            68 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2012-07-02',
                'purpose' => 'Kest',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-07-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-07-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
IVM -TC Wien GmbH, 2331 Vösendorf 
Valuta:    10.07
ID:
Betrag:     EUR 1.240,17
                'support_year' => NULL,
                'payin' => '1240.17',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:54:07.397',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2012-07-16',
                'purpose' => 'Online-Auftrag vom 16.07.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Koch Wolfgang-27782',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:54:08.790',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-07-16',
                'purpose' => 'Online-Auftrag vom 16.07.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wechselberger Reinhold-32581',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:54:34.133',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-07-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '752.51',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:54:41.590',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2012-08-06',
                'purpose' => 'Online-Auftrag vom 06.08.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bürgl Rainer-30501',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:55:09.360',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            74 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-08-09',
                'purpose' => 'BR-Essen Wien
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1170.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-08-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2012-08-09',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-08-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2012-08-09',
                'purpose' => 'Abhebung',
                'support_year' => NULL,
                'payin' => '2000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-08-09 00:00:00.000',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-08-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
IVM-TC Wien GmbH, 2331 Vösendorf 
Zahlungsref.:
Valuta:    13.08
                'support_year' => NULL,
                'payin' => '1132.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:56:54.750',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-08-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1092.63',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:07:14.693',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            79 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-08-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1092.63',
                'payout' => '.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-08-20 00:00:00.000',
                'updated_at' => '2013-05-14 13:05:14.197',
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-09-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Auftraggeber: IVM TECHNICAL CONSULTANTS
Valuta:    11.09
                'support_year' => NULL,
                'payin' => '1155.70',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 09:58:31.067',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-09-14',
                'purpose' => 'Online-Auftrag vom 14.09.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schiller Bakk. techn. Leopold-25846',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:10:10.090',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-09-20',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1115.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:10:16.857',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            83 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-09-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1115.70',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-09-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-09-25',
                'purpose' => 'Online-Auftrag vom 25.09.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:12:00.667',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-10-01',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:54.753',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-10-01',
                'purpose' => 'sonst.Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:55.640',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2012-10-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:56.520',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2012-10-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.70',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:57.320',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            89 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2012-10-01',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-10-01 00:00:00.000',
                'updated_at' => '2015-07-02 10:16:15.417',
            ),
            90 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2012-10-01',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-10-01 00:00:00.000',
                'updated_at' => '2015-07-02 10:16:09.810',
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-10-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Belegnr.: 122853.771.003.438
11.10.2012                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf         
IBAN: AT962015100404023509                 BIC: BKAUATWWAMS 
ID:                                       
Zahlungsgrund: BR-Umlage                             
Zahlungsref.:                                       
Zahlungszweck:                                       
Auftraggeber: IVM TECHNICAL CONSULTANTS    Valuta:    11.10
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD 
ID:                                        Betrag:     EUR 1.153,51
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1153.51',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:58.193',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-10-22',
                'purpose' => 'Abschöpfer A01',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1111.63',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:58.993',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            93 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-10-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1111.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-10-22 00:00:00.000',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2012-11-05',
                'purpose' => 'Online-Auftrag vom 05.11.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gartmayer Elisabeth-33001',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:39:59.800',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-11-05',
                'purpose' => 'Online-Auftrag vom 05.11.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => 'Lanzerstorfer Daniel-36533',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:00.560',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-11-16',
                'purpose' => 'Online-Auftrag vom 16.11.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pierer Manfred-27831',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:01.393',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1006.31',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:02.143',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            98 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-11-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1006.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2012-11-26',
                'purpose' => 'Online-Auftrag vom 26.11.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '236.28',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:02.920',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2012-11-26',
                'purpose' => 'Online-Auftrag vom 26.11.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Kompacher Bakk. Georg-32331',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:03.607',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            1 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => '.00',
                'payout' => '1040.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => '2013-05-14 11:56:34.300',
            ),
            2 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Salzburg
Zug hin (westbahn)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Salzburg
Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '240.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Salzburg
Zug retour (öbb)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '21.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Graz
Zug nach Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-28',
                'purpose' => 'BR-Essen Graz
Taxi zum Lokal',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '16.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2012-11-28',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2600.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2012-11-28',
                'purpose' => 'Abhebung vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2600.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-28 00:00:00.000',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Graz / 
Taxi Quartier zum Zug nach Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => '2013-05-14 11:59:38.307',
            ),
            10 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Graz / Linz
Zug Graz - Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Linz
Strassenbahn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Linz
Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '260.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Linz
Zug Linz - wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-11-29',
                'purpose' => 'BR-Essen Linz
Taxi Bhf- Wohnung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-11-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '90.00',
                'person' => 'Kendlbacher Christine-32479',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:04.320',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '21.00',
                'person' => 'Zwettler Sylvia-32446',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:04.977',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fornleitner Julia-36373',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:05.647',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Berger Michael-34394',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:06.273',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Lehner Christoph-36513',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:06.817',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-07',
                'purpose' => 'Online-Auftrag vom 07.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:07.353',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            21 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-12-10',
                'purpose' => '25 Jahre IVM - 
Geschenk A.Laffer teil 1
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-12-10',
                'purpose' => '25 Jahre IVM - 
Geschenk A.Laffer
Reisegutscheine',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '300.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2012-12-10',
                'purpose' => '20 Jahre IVM
Geschenk Dr. Hanus',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '35.98',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2012-12-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT 
Belegnr.: 123472.237.178.398
12.12.2012                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf                             
IBAN: AT962015100404023509       BIC: BKAUATWWAMS     
Zahlungsgrund: BR-Umlage                                                 
Zahlungsref.:                                                           
Zahlungszweck:                                                           
Auftraggeber: IVM TECHNICAL CONSULTANTS  Valuta:    12.12
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD     
Betrag:     EUR 1.119,44
Auftr.geb.Ref:
',
                'support_year' => NULL,
                'payin' => '1119.44',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:07.887',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2012-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '512.16',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:08.353',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            26 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2012-12-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '512.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2012-12-21',
                'purpose' => 'Online-Auftrag vom 21.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rieder Bernhard-35313',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:08.793',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2012-12-21',
                'purpose' => 'Online-Auftrag vom 21.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Weitenthaler Andreas-34562',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:09.193',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2012-12-21',
                'purpose' => 'Online-Auftrag vom 21.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:09.640',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2012-12-21',
                'purpose' => 'Online-Auftrag vom 21.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.00',
                'person' => 'Kothgasser Gerhard-21577',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:10.027',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2012-12-21',
                'purpose' => 'Online-Auftrag vom 21.12.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '210.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:10.467',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2012-12-31',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:10.847',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-12-31',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:11.273',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2012-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:11.663',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2012-12-31',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.68',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:12.040',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            36 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2012-12-31',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '6.77',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-31 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:47.590',
            ),
            37 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2012-12-31',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.69',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2012-12-31 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:56.597',
            ),
            38 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2013-01-02',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-01-02 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:43.607',
            ),
            39 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2013-01-02',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-01-02 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:53.217',
            ),
            40 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-01-10',
                'purpose' => 'BR-Quartalstreffen
Zobel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '78.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-01-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-01-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Belegnr.: 130114.726.021.228
11.01.2013                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf                             
IBAN: AT962015100404023509       BIC: BKAUATWWAMS     
Zahlungsgrund: BR-Umlage                                                 
Auftraggeber: IVM TECHNICAL CONSULTANTS    Valuta:    11.01
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD     
Betrag:     EUR 1.081,79
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1081.79',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:12.420',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-01-21',
                'purpose' => 'Abschöpfer A01 / 00000000641  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '774.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:12.793',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            43 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-01-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '774.18',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-01-21 00:00:00.000',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-01-31',
                'purpose' => 'BR-Essen wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1290.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-01-31 00:00:00.000',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kapfenberger BSc Michael-35135',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:13.133',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '29.00',
                'person' => 'Fürst Bakk.techn. Christoph-34733',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:13.493',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Maier Matthias-31489',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:13.830',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:14.147',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            49 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => 'Hauser Robert-37140',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:14.507',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rieder Bernhard-35313',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:14.810',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.00',
                'person' => 'Lanzerstorfer Daniel-36533',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:15.127',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '65.00',
                'person' => 'Postmann Peter-33927',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:16.350',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wechselberger Reinhold-32581',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:16.643',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:16.920',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:17.227',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.00',
                'person' => 'Vucini Erald-37459',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:17.493',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Tschörch Edwin-19692',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:17.753',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Sea DeLang-27931',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:18.007',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Pagitsch Michael-35492',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:18.283',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-02-06',
                'purpose' => 'Online-Auftrag vom 06.02.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '29.00',
                'person' => 'Kothgasser Gerhard-21577',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:18.617',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-02-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Belegnr.: 130422.144.267.658
11.02.2013                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto  IVM-TC Wien GmbH, 2331 Vösendorf                             
IBAN: AT962015100404023509        BIC: BKAUATWW        
Zahlungsgrund: BR-Umlage                                                 
Auftraggeber: IVM TECHNICAL CONSULTANTS  Valuta:    11.02
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD     
Betrag:     EUR 1.050,50
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1050.50',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:18.870',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '506.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:19.097',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            63 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '506.50',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-02-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-03-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Belegnr.: 130702.291.021.978
11.03.2013                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto  IVM-TC Wien GmbH, 2331 Vösendorf                             
IBAN: AT962015100404023509        BIC: BKAUATWWAMS     
Zahlungsgrund: BR-Umlage                                                 
Auftraggeber: IVM TECHNICAL CONSULTANTS  Valuta:    11.03
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD     
Betrag:     EUR 1.035,81
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1035.81',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:20.217',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-03-20',
                'purpose' => 'Abschöpfer A01 / 00000000641  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1035.81',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:20.480',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            66 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-03-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1035.81',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-03-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2013-04-02',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:20.737',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-04-02',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:20.983',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-04-02',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:21.240',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2013-04-02',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.67',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:21.457',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            71 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2013-04-02',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-02 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:31.510',
            ),
            72 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2013-04-02',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-02 00:00:00.000',
                'updated_at' => '2015-07-02 10:15:25.893',
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2013-04-02',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 11:46:53.213',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Schulter Helmuth-32247',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:21.657',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Koch Wolfgang-27782',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:21.880',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:22.470',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:22.720',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schmelz Wilhelm-34532',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:22.950',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:23.183',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fornleitner Julia-36373',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:23.417',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Knefel BSc. Wolfgang-33397',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:23.657',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Paul Yvonne-31554',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:23.880',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            83 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.00',
                'person' => 'Zvonek Gerhard-16709',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:24.103',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-04-03',
                'purpose' => 'Online-Auftrag vom 03.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Salamon Robert-34204',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:24.337',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-11',
                'purpose' => 'Online-Auftrag vom 11.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pierer Manfred-27831',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:24.567',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-11',
                'purpose' => 'Online-Auftrag vom 11.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '35.00',
                'person' => 'Zwettler Sylvia-32446',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:24.783',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2013-04-11',
                'purpose' => 'Online-Auftrag vom 11.04.  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '234.63',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:25.007',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-04-11',
                'purpose' => ' Gutschrift a/IVM TECHNICAL CONSULTANTS  GUTSCHRIFT
Belegnr.: 131012.930.084.508
11.04.2013                EUR    00404 023 509
Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf                             
IBAN: AT962015100404023509       BIC: BKAUATWW        
ID:                                                           
Zahlungsgrund: BR-Umlage                                                 
Zahlungsref.: 1
Zahlungszweck:                                                           
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta:    11.04
IBAN: AT753225000001451707                 BIC: RLNWATWWGTD     
Betrag:     EUR 1.038,15
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1038.15',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:25.207',
                'updated_at' => '2013-04-30 11:20:50.340',
            ),
            89 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-17',
                'purpose' => 'Br.Essen Salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '420.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-17 00:00:00.000',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-18',
                'purpose' => 'BR-Essen Salzburg
Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '76.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-18 00:00:00.000',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-18',
                'purpose' => 'BR-Essen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '230.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-18 00:00:00.000',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-19',
                'purpose' => 'BR-Essen Linz
Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '41.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-19 00:00:00.000',
                'updated_at' => '2013-05-14 12:21:12.487',
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-04-22',
                'purpose' => 'Abschöpfer A01 / 00000000641',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '190.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2022-11-17 20:13:56.707',
                'created_at' => '2013-04-30 09:07:11.733',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-04-22',
                'purpose' => 'Abschöpfer A01 / 00000000641  AUFTRAGSBESTÄTIGUNG
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '190.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-30 10:40:26.303',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            95 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-04-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '190.62',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-22 00:00:00.000',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-24',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '850.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-24 00:00:00.000',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2013-04-24',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-24 00:00:00.000',
                'updated_at' => '2013-05-14 13:13:52.860',
            ),
            98 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2013-04-24',
                'purpose' => 'Abhebung vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-24 00:00:00.000',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-04-25',
                'purpose' => 'Br-Essen Graz
Taxi Lokal - Quartier',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '24.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-04-25 00:00:00.000',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2013-04-30',
                'purpose' => 'Online-Auftrag vom 30.04.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 131203.948.003.838
30.04.2013 00404 023 509
Empfänger: Martin Mascher
Kontonummer: 00451005707 Bankleitzahl: 17200
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
jeweils max. die Hälfte, max. 50 g
Betrag:
----------
EUR 43,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '43.00',
                'person' => 'Mascher Martin-38024',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 15:22:37.063',
                'updated_at' => '2022-11-17 20:20:32.627',
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2013-04-30',
                'purpose' => 'Online-Auftrag vom 30.04.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 131203.948.003.808
30.04.2013 00404 023 509
Empfänger: Lukas Pöberl
Kontonummer: 20011338527 Bankleitzahl: 14200
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pöberl Lukas-24619',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 15:23:55.103',
                'updated_at' => '2022-11-17 20:20:42.173',
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-04-30',
                'purpose' => 'Online-Auftrag vom 30.04.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 131203.918.076.588
30.04.2013 00404 023 509
Empfänger: Marietta Beltermann-Faber
Kontonummer: 00034951792 Bankleitzahl: 20111
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 15:23:55.687',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2013-04-30',
                'purpose' => 'Online-Auftrag vom 30.04.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 131203.918.076.558
30.04.2013 00404 023 509
Empfänger: Markus Staudinger
Kontonummer: 00007017379 Bankleitzahl: 38346
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR-Essen Kostenersatz
Betrag:
----------
EUR 129,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '129.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 15:23:56.190',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-05-02',
                'purpose' => 'BR-quartals-Treffen 
Hotel Koll. Usleber (sbg)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '75.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-05-02',
                'purpose' => 'BR-Quartalstreffen
Taxi Usleber',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-05-02',
                'purpose' => 'BR-Quartalstreffen
Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '125.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-05-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 131333.018.016.138
13.05.2013 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 13.05
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
Fortsetzung folgt auf Blatt 2
GUTSCHRIFT
Belegnr.: 131333.018.016.138
13.05.2013 EUR 00404 023 509
Fortsetzung:
1.041,22
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1041.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-14 15:23:57.350',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            8 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-05-16',
                'purpose' => 'Betriebsratsessen Wien
Heuriger zum Haydn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '830.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2013-05-16 00:00:00.000',
                'updated_at' => '2013-06-11 12:37:59.447',
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-05-21',
                'purpose' => 'Abschöpfer A01 / 00000000641
131414570155578',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '789.22',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:24:33.453',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            10 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-05-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '789.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:48:51.317',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-06-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
131622912030468',
                'support_year' => NULL,
                'payin' => '1009.06',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:26.233',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-06-20',
                'purpose' => 'Abschöpfer A01 / 00000000641
131712054384998',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1009.06',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:27.177',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            13 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-06-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1009.06',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:50:07.047',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2013-06-25',
                'purpose' => 'Online-Auftrag vom 25.06.
131763069001418
Druck & Grafik',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '253.61',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:28.050',
                'updated_at' => '2014-06-20 12:29:02.953',
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-06-25',
                'purpose' => 'Online-Auftrag vom 25.06.
131763069001388
community-event',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => 'Fladischer Markus-27567',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:28.970',
                'updated_at' => '2014-06-20 12:29:40.847',
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-06-25',
                'purpose' => 'Online-Auftrag vom 25.06.
131763069001358
Kodym',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kodym Daniel-36374',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:29.817',
                'updated_at' => '2014-06-20 12:29:12.713',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2013-07-01',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.16',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:30.673',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-07-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:31.490',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:32.330',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2013-07-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.65',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:33.123',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            21 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2013-07-01',
                'purpose' => 'Habenzinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 13:55:54.627',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            22 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2013-07-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 13:56:38.643',
                'updated_at' => '2014-06-20 14:11:22.200',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-07-10',
                'purpose' => 'Online-Auftrag vom 10.07.
131913651001588',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:33.970',
                'updated_at' => '2014-06-20 12:46:24.783',
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-07-10',
                'purpose' => 'Online-Auftrag vom 10.07.
131913651001558',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Fedrigotti Manuel-16113',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:34.817',
                'updated_at' => '2014-06-20 12:46:09.620',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2013-07-10',
                'purpose' => 'Online-Auftrag vom 10.07.
131913651001528',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ilchevski Lyubomir-37417',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:35.673',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-07-10',
                'purpose' => 'Online-Auftrag vom 10.07.
131913651001498',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Maier Matthias-31489',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:36.547',
                'updated_at' => '2014-06-20 12:46:00.947',
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-07-10',
                'purpose' => 'Online-Auftrag vom 10.07.
131913651001468',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => 'Lanzerstorfer Daniel-36533',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:37.387',
                'updated_at' => '2014-06-20 12:44:20.063',
            ),
            28 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-07-10',
                'purpose' => 'Spesen Usleber',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '75.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:16:20.947',
                'updated_at' => '2014-06-20 14:22:11.273',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-07-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
131923729009948',
                'support_year' => NULL,
                'payin' => '993.75',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:38.290',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            30 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-07-11',
                'purpose' => 'BRTreffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '265.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:15:35.240',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-07-22',
                'purpose' => 'Abschöpfer A01 / 00000000641
132032885223208',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '280.23',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:25:41.177',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            32 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-07-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '280.23',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:50:40.010',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-08-07',
                'purpose' => 'Online-Auftrag vom 07.08.
132193651011608',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '25.00',
                'person' => 'Fladischer Markus-27567',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:32.207',
                'updated_at' => '2014-06-20 12:48:13.403',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-08-07',
                'purpose' => 'Online-Auftrag vom 07.08.
132193651011578',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schmelz Wilhelm-34532',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:33.117',
                'updated_at' => '2014-06-23 11:09:04.340',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-08-09',
                'purpose' => 'Online-Auftrag vom 09.08.
132214273064258',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:33.990',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-08-09',
                'purpose' => 'Online-Auftrag vom 09.08.
132214273064288',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Reiter Simone-34292',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:34.350',
                'updated_at' => '2014-06-23 11:08:11.013',
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-08-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
132244516366328',
                'support_year' => NULL,
                'payin' => '1000.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:34.767',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-08-20',
                'purpose' => 'Abschöpfer A01 / 00000000641
132323111104038',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '675.13',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:35.167',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            39 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-08-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '675.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:52:26.687',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2013-08-22',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:41:18.283',
                'updated_at' => '2014-06-20 10:45:50.140',
            ),
            41 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2013-08-22',
                'purpose' => 'Abhebung vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:42:55.600',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-08-22',
                'purpose' => 'Betriebsratsessen Niederlassung wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '830.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:20:36.450',
                'updated_at' => '2014-06-20 14:24:12.823',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-08-23',
                'purpose' => 'Online-Auftrag vom 23.08.
132354081014558',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:35.587',
                'updated_at' => '2014-06-23 11:13:10.523',
            ),
            44 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-04',
            'purpose' => 'BR-Essen Niederlassung Linz - Hinfahrt (ÖBB)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:26:33.607',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-04',
                'purpose' => 'BR-Essen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '230.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:44:54.873',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-05',
            'purpose' => 'BR-Essen Niederlassung Salzburg -Hinfahrt (ÖBB St. Valentin - Linz)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:47:19.517',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-05',
            'purpose' => 'BR-Essen Niederlassung Salzburg (Hinfahrt VVB Linz)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:48:26.373',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-05',
            'purpose' => 'BR-Essen Niederlassung Salzburg Hinfahrt Vvb Linz (NL-Linz Bhf)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:49:14.223',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-05',
            'purpose' => 'BR-Essen Niederlassung Salzburg Fahrt Linz-Sbg (ÖBB)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '11.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:50:10.827',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-05',
                'purpose' => 'BR-Essen Niederlassung Salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '350.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:50:59.287',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-06',
                'purpose' => 'BR-Essen Niederlassung Salzburg Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '72.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:51:40.337',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-06',
                'purpose' => 'BR-Essen Niederlassung Salzburg Heimfahrt - Taxi sbg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '11.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:52:15.490',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-09-06',
                'purpose' => 'BR-Essen Niederlassung Salzburg Heifahrt Westbahn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '24.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:52:53.497',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-09-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
132542027079908',
                'support_year' => NULL,
                'payin' => '970.52',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:36.000',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-09-20',
                'purpose' => 'Online-Auftrag vom 20.09.
132634351013378',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Ivic Thomas-16723',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:36.403',
                'updated_at' => '2014-06-23 11:16:40.613',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-09-20',
                'purpose' => 'Online-Auftrag vom 20.09.
132634351013348',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => 'Kompacher Bakk. Georg-32331',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:36.823',
                'updated_at' => '2014-06-23 11:16:11.277',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-09-20',
                'purpose' => 'Abschöpfer A01 / 00000000641
132634231113338',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '920.52',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:37.190',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            58 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-09-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '920.52',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:53:17.723',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2013-09-23',
                'purpose' => 'Online-Auftrag vom 23.09.
132664651014288',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14.00',
                'person' => 'Kapfenberger BSc Michael-35135',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:37.593',
                'updated_at' => '2014-06-23 11:19:00.860',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-09-23',
                'purpose' => 'Online-Auftrag vom 23.09.
132664651014258',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ott Philipp-33916',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:37.947',
                'updated_at' => '2014-06-23 11:17:39.857',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2013-10-01',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:38.367',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-10-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:38.707',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:39.090',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2013-10-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:39.423',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            65 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2013-10-01',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 13:57:25.000',
                'updated_at' => '2015-07-02 10:15:02.847',
            ),
            66 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2013-10-01',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 13:58:49.037',
                'updated_at' => '2015-07-02 10:15:08.473',
            ),
            67 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-10-17',
                'purpose' => 'Betriebsratstreffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '140.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:58:15.317',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2013-10-17',
                'purpose' => 'Spesen Peter usleber',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '43.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:44:58.973',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-10-21',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
132944861006968',
                'support_year' => NULL,
                'payin' => '951.38',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:39.797',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-11-05',
                'purpose' => 'Online-Auftrag vom 05.11.
133092283131738',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Steiger MSc Peter-30691',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:40.120',
                'updated_at' => '2014-06-23 11:21:10.283',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2013-11-05',
                'purpose' => 'Online-Auftrag vom 05.11.
133092283131708',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Naemi Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:40.493',
                'updated_at' => '2014-06-23 11:20:40.187',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-11-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
133163576009578',
                'support_year' => NULL,
                'payin' => '956.71',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:40.817',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            73 => 
            array (
                'depot_id' => '1',
                'category_id' => '1',
                'paydate' => '2013-11-17',
            'purpose' => 'bar erlegt -Heirat (Antrag mitte August)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Kupusovic Nedim-38159',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:30:46.987',
                'updated_at' => '2014-06-23 11:21:42.523',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641
133242435102508',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1599.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:41.133',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            75 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-11-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1599.18',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:54:01.897',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2013-12-06',
                'purpose' => 'Online-Auftrag vom 06.12.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 133403.477.041.318
06.12.2013 00404 023 509
Empfänger: Druck & Grafik
Kontonummer: 00000610808 Bankleitzahl: 19520
Auftraggeber: IVM TC Wien BRV DR. Philipp
Zahlungsgrund: Re.16157/142 000000400832
Betrag:
----------
EUR 240,41',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '240.41',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:41.470',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2013-12-10',
                'purpose' => 'Online-Auftrag vom 10.12.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 133443.888.037.198
10.12.2013 00404 023 509
Empfänger: Asif Mujcinovic
Kontonummer: 51259 195 601 Bankleitzahl: 12000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Alles Gute vom IVM-Betriebsrat
Betrag:
----------
EUR 100,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Mujcinovic Asif-29143',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:41.777',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2013-12-10',
                'purpose' => 'Online-Auftrag vom 10.12.
AUFTRAGSBESTÄTIGUNG
Belegnr.: 133443.888.037.168
10.12.2013 00404 023 509
Empfänger: Christian Ruff
Kontonummer: 00077808682 Bankleitzahl: 60000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Event-Unterstützung
Betrag:
----------
EUR 15,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:42.070',
                'updated_at' => '2014-06-23 11:24:30.150',
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2013-12-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 133454.147.007.968
11.12.2013 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 11.12
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
985,19
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '985.19',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:45.493',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            80 => 
            array (
                'depot_id' => '1',
                'category_id' => '2',
                'paydate' => '2013-12-17',
                'purpose' => 'weihnachtsessen TE -Wien Rechnung Berger & Wedl',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:01:33.563',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2013-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
133543342111128',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '629.78',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:31:46.790',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            82 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2013-12-20',
                'purpose' => 'Abschöpfer vom Konto',
                'support_year' => NULL,
                'payin' => '629.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:56:05.697',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2013-12-31',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:46.490',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-12-31',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:47.090',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2013-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:47.483',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2013-12-31',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.73',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:47.793',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            87 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2013-12-31',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '8.84',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:45:57.817',
                'updated_at' => '2015-07-02 10:14:54.357',
            ),
            88 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2013-12-31',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.21',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:47:03.770',
                'updated_at' => '2015-07-02 10:14:49.127',
            ),
            89 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2014-01-02',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 13:59:27.790',
                'updated_at' => '2015-07-02 10:14:37.877',
            ),
            90 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2014-01-02',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:00:02.190',
                'updated_at' => '2015-07-02 10:14:43.757',
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-01-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 140133.909.062.368
13.01.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 13.01
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
981,81
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '981.81',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:48.233',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-01-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 140144.222.019.768
14.01.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage Aufrollung 2013
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 14.01
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
0,80
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '.80',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:49.330',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            93 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-01-16',
                'purpose' => 'BR-Treffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '155.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:03:09.440',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-01-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
140202463137668',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '980.76',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:50.210',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            95 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-01-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '980.76',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:56:50.887',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-02-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 140424.558.279.628
11.02.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 11.02
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
935,74
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '935.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:32:51.220',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-02-14',
                'purpose' => 'Online-Auftrag vom 14.02. zG/ Michael Toth
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140452.687.081.118
14.02.2014 00404 023 509
Empfänger: Michael Toth
Kontonummer: 20011312170 Bankleitzahl: 14200
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:34:13.150',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2014-02-14',
                'purpose' => 'Online-Auftrag vom 14.02. zG/ Clemens Gondowidjaja
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140452.687.081.088
14.02.2014 00404 023 509
Empfänger: Clemens Gondowidjaja
Kontonummer: 00008306789 Bankleitzahl: 32000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Familen-Unterstützung
+ IVM BR Sport-Unterstützung
Betrag:
----------
EUR 140,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '140.00',
                'person' => 'Gondowidjaja Clemens-28352',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:34:13.687',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-02-14',
                'purpose' => 'Online-Auftrag vom 14.02. zG/ DeLang Sea
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140452.687.081.058
14.02.2014 00404 023 509
Empfänger: DeLang Sea
Kontonummer: 00075668903 Bankleitzahl: 60000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Sea DeLang-27931',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:34:14.207',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2014-02-14',
                'purpose' => 'Online-Auftrag vom 14.02. zG/ Andreas Weitenthaler
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140452.687.081.028
14.02.2014 00404 023 509
Empfänger: Andreas Weitenthaler
Kontonummer: 00001752625 Bankleitzahl: 20815
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Event-Unterstützung
Betrag:
----------
EUR 15,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Weitenthaler Andreas-34562',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:34:15.160',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2014-02-14',
                'purpose' => 'Online-Auftrag vom 14.02. zG/ Simone Reiter
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140452.687.080.998
14.02.2014 00404 023 509
Empfänger: Simone Reiter
Kontonummer: 00075307161 Bankleitzahl: 60000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Event-Unterstützung
Betrag:
----------
EUR 120,00

zur Verteilung an die Teilnehmer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => 'Reiter Simone-34292',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:35:01.297',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2014-02-17',
                'purpose' => 'Online-Auftrag vom 17.02. zG/ Philipp Hehenberger
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140482.879.001.148
17.02.2014 00404 023 509
Empfänger: Philipp Hehenberger
Kontonummer: 00001515592 Bankleitzahl: 32250
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Betrag:
----------
EUR 100,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Hehenberger Philipp-36552',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:35:15.303',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 140513.735.099.678
20.02.2014 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.02
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
480,74
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '480.74',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:35:28.613',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            4 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '480.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 10:59:38.377',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2014-02-27',
                'purpose' => 'Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 11:00:22.600',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2014-02-27',
                'purpose' => 'vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 11:00:47.647',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-02-27',
                'purpose' => 'BR-Essen Niederlassung Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '740.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:06:16.080',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-03-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 140704.837.011.868
11.03.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 11.03
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
922,97
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '922.97',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:06:00.323',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            9 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-03-19',
                'purpose' => 'BR-Essen Niederlassung Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '700.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:07:02.330',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-03-19',
                'purpose' => 'BR-Essen Niederlassung Graz Fahrt zum Quartier',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:07:34.347',
                'updated_at' => '2014-06-20 16:05:15.180',
            ),
            11 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-03-19',
                'purpose' => 'BR-Essen Niederlassung graz - Aktiv-Programm',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '135.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:09:53.377',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-03-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 140794.093.100.728
20.03.2014 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
922,97
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '922.97',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:03:39.357',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            13 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-03-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '922.97',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:21:53.347',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2014-04-01',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:00:36.747',
                'updated_at' => '2015-07-02 10:14:18.660',
            ),
            15 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2014-04-01',
                'purpose' => 'Steuer',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 14:01:00.553',
                'updated_at' => '2015-07-02 10:14:24.483',
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2014-04-01',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:04:14.707',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-04-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:04:31.307',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:04:42.403',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2014-04-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.69',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:04:51.587',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Gerhard Kothgasser
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.898
03.04.2014 00404 023 509
Empfänger: Gerhard Kothgasser
Kontonummer: 00000086801 Bankleitzahl: 38103
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kothgasser Gerhard-21577',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:37:22.983',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Markus Fladischer
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.868
03.04.2014 00404 023 509
Empfänger: Markus Fladischer
Kontonummer: 00079458360 Bankleitzahl: 60000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 25,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '25.00',
                'person' => 'Fladischer Markus-27567',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:37:23.480',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Michael Kapfenberger
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.838
03.04.2014 00404 023 509
Empfänger: Michael Kapfenberger
Kontonummer: 00100139035 Bankleitzahl: 44770
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kapfenberger BSc Michael-35135',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:37:24.127',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '17',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Druck & Grafik
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.778
03.04.2014 00404 023 509
Empfänger: Druck & Grafik
Kontonummer: 00000610808 Bankleitzahl: 19520
Auftraggeber: IVM TC Wien BRV DR. Philipp
Zahlungsgrund: Re. 16330 000000400832
Betrag:
----------
EUR 235,46',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '235.46',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:37:45.743',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Lyubomir Ilchevski
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.808
03.04.2014 00404 023 509
Empfänger: Lyubomir Ilchevski
Kontonummer: 20011186514 Bankleitzahl: 14200
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Weiterbildungsunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ilchevski Lyubomir-37417',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 11:46:45.553',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Laffer Andreas
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.958
03.04.2014 00404 023 509
Empfänger: Laffer Andreas
Kontonummer: 00717 401 731 Bankleitzahl: 20151
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
AfrikaAfrika 2014
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 11:46:52.897',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-04-03',
                'purpose' => 'Online-Auftrag vom 03.04. zG/ Andreas Laffer
AUFTRAGSBESTÄTIGUNG
Belegnr.: 140934.303.016.928
03.04.2014 00404 023 509
Empfänger: Andreas Laffer
Kontonummer: 00717 401 731 Bankleitzahl: 20151
Auftraggeber: Laffer Andreas
Angestelltenbetriebsrat d.IVM
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Fitinn-Abo 2013
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 11:47:13.857',
                'updated_at' => '2014-06-23 11:47:35.403',
            ),
            27 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-04-08',
                'purpose' => 'BR-.Treffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '123.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 15:18:10.557',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-04-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 141013.177.027.818
11.04.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 11.04
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
912,08
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '912.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:37:54.507',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-04-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 141122.072.183.178
22.04.2014 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
449,74
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '449.74',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:38:25.617',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            30 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-04-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '449.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:22:54.030',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-05-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 141323.285.016.598
12.05.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 12.05
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
915,22
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '915.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:38:26.040',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-05-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 141402.225.144.398
20.05.2014 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
915,22
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '915.22',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-05-27 10:38:26.553',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            33 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-05-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '915.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:23:19.923',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-05-27',
                'purpose' => 'Online-Auftrag vom 27.05. zG/ Sabine Thomas-Kohlfü rst
AUFTRAGSBESTÄTIGUNG
Belegnr.: 141473.962.010.968
27.05.2014 00404 023 509
Empfänger: Sabine Thomas-Kohlfürst
Kontonummer: 00484017638 Bankleitzahl: 17000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Thomas-Kohlfürst Sabine-38302',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 10:20:25.700',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-05-27',
                'purpose' => 'Online-Auftrag vom 27.05. zG/ Christoph Lehner
AUFTRAGSBESTÄTIGUNG
Belegnr.: 141473.962.010.938
27.05.2014 00404 023 509
Empfänger: Christoph Lehner
Kontonummer: 00000033449 Bankleitzahl: 32930
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
40,-- für 2013
40,-- für 2014
Bitte in Zukunft vor 31.3. d. Folge
Betrag:
----------
EUR 80,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => 'Lehner Christoph-36513',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 10:20:28.177',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-05-27',
                'purpose' => 'Online-Auftrag vom 27.05. zG/ Sabine Thomas-Kohlfü rst
AUFTRAGSBESTÄTIGUNG
Belegnr.: 141473.962.010.968
27.05.2014 00404 023 509
Empfänger: Sabine Thomas-Kohlfürst
Kontonummer: 00484017638 Bankleitzahl: 17000
Auftraggeber: Laffer Andreas
IVM BR
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Betrag:
----------
EUR 40,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2014-06-24 13:57:48.863',
                'created_at' => '2014-06-24 13:56:39.230',
                'updated_at' => '2014-06-24 13:57:48.863',
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-06-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
GUTSCHRIFT
Belegnr.: 141623.777.032.708
11.06.2014 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS Valuta: 11.06
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
886,31
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '886.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 10:20:28.793',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-06-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
141623777032708',
                'support_year' => NULL,
                'payin' => '886.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:10.847',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            39 => 
            array (
                'depot_id' => '1',
                'category_id' => '6',
                'paydate' => '2014-06-20',
                'purpose' => 'förderung kultur und weiterblidung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Tsuchiya-Philipp Manfred-15753',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-20 16:31:30.707',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-06-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 141712.660.504.368
20.06.2014 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.06
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
766,31
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '766.31',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-23 10:20:29.353',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            41 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2014-06-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '766.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2014-06-24 10:23:44.713',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-06-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
141712660504368',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '766.31',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:14.253',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2014-07-01',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:15.317',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-07-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:16.220',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:17.027',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2014-07-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.67',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:17.853',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            47 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2014-07-01',
                'purpose' => 'Haben-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:20:02.743',
                'updated_at' => '2015-06-19 10:21:17.597',
            ),
            48 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2014-07-01',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:21:02.527',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-07-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
141924447065648',
                'support_year' => NULL,
                'payin' => '896.87',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:18.683',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2014-07-16',
                'purpose' => 'Online-Auftrag vom 16.07. zG/ Christoph FÜRST
141972609015938',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fürst Bakk.techn. Christoph-34733',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:19.493',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2014-07-16',
                'purpose' => 'Online-Auftrag vom 16.07. zG/ Druck & Grafik
141972609015908',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '240.41',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:20.317',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-07-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
142023390423168',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '614.51',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:21.157',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            53 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-07-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '614.51',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:52:36.317',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-08-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS
142232361009648',
                'support_year' => NULL,
                'payin' => '888.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:22.037',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-08-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
142324252110088',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '888.43',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:22.893',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            56 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-08-20',
                'purpose' => 'BR-Essen Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '820.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:22:42.023',
                'updated_at' => '2015-06-19 10:24:58.597',
            ),
            57 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-08-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '888.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:53:34.417',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-08-29',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:54:20.080',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2014-08-29',
                'purpose' => 'Sparbuch',
                'support_year' => NULL,
                'payin' => '3000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:03:02.103',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-09-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
142533141011898',
                'support_year' => NULL,
                'payin' => '877.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:24.677',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            61 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-17',
                'purpose' => 'BR-Essen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '180.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:24:29.283',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-17',
                'purpose' => 'BR-Essen Linz Strassenbahn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:26:03.087',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-17',
                'purpose' => 'BR-Essen Linz Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '89.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:27:02.310',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-17',
            'purpose' => 'BR-Essen Linz Hinfahrt (Öbb)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:28:28.117',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-18',
            'purpose' => 'BR-Essen Linz Rückfahrt (Westbahn)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '16.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:29:25.020',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
            'purpose' => 'BR-Essen Graz Hinfahrt (ÖBB)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:30:24.277',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
                'purpose' => 'BR-Essen Graz Taxi',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '9.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:31:09.710',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
                'purpose' => 'BR-Essen Graz AbenteuerGolf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '66.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:31:45.460',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
                'purpose' => 'Br-Essen Graz Clocktower',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '480.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:32:54.760',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
                'purpose' => 'BR-Essen Graz hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '62.41',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:34:57.090',
                'updated_at' => '2015-06-19 13:01:57.333',
            ),
            71 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-09-19',
                'purpose' => 'BR-Essen Graz, Taxi',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-26 12:11:02.657',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-09-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
142652678109698',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '877.08',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:33.077',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            73 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-09-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '877.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:55:28.817',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2014-10-01',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.07',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:46.917',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-10-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:42:55.397',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:43:03.467',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2014-10-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.29',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:43:10.580',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            78 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2014-10-01',
                'purpose' => 'Haben-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:22:11.437',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2014-10-01',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:22:49.520',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-01',
            'purpose' => 'BR-Essen Salzburg Hinfahrt (ÖBB)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '49.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:35:38.860',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-01',
                'purpose' => 'BR-Essen Salzburg, Die Weisse',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:38:39.300',
                'updated_at' => '2015-06-19 10:40:24.243',
            ),
            82 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-01',
                'purpose' => 'BR-Essen Salzburg Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.15',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:40:49.853',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-01',
                'purpose' => 'BR-Essen  Salzburg Taxi',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:41:30.147',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-02',
                'purpose' => 'BR-Essen Taxi',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:37:46.477',
                'updated_at' => '2015-06-19 13:04:34.627',
            ),
            85 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-02',
                'purpose' => 'BR-Essen  Salzburg  Rückfahrt Westbahn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '23.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:42:06.360',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-10-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
142834165288538',
                'support_year' => NULL,
                'payin' => '924.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:43:25.810',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            87 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-10-16',
                'purpose' => 'BR-QuartalsTreffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '140.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:42:52.710',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-10-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
142933048115648',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '922.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:43:33.003',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            89 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-10-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '922.18',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:56:14.353',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-10-31',
                'purpose' => 'Online-Auftrag vom 31.10. zG/ Richard SKRIWANEK
143043066009608',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:43:56.987',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2014-10-31',
                'purpose' => 'Online-Auftrag vom 31.10. zG/ Robert Hauser
143043066009578',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Hauser Robert-37140',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:44:32.747',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-11-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
143152219320648',
                'support_year' => NULL,
                'payin' => '858.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:45:13.633',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2014-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Thomas Luger
143162774035608',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '32.00',
                'person' => 'Luger BSc Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:45:13.953',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
143244405096978',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '686.78',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:45:21.447',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            95 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-11-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '686.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:56:36.737',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-11-24',
                'purpose' => 'Unterstützung Technikerküche
Keramikpfanne
(lidl)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.99',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:43:48.633',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2014-11-26',
                'purpose' => 'Online-Auftrag vom 26.11. zG/ Druck & Grafik
143302702041158',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '237.11',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:45:31.657',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2014-12-05',
                'purpose' => 'BR-Wahl: Post und Material für Wahlkartenaussendung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '596.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:45:30.773',
                'updated_at' => '2015-06-19 10:46:36.327',
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2014-12-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
143452816014828',
                'support_year' => NULL,
                'payin' => '852.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:45:42.407',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2014-12-22',
                'purpose' => 'UEBERW.zG/Bogdan Potocnik REF.FBAWI14121070316
ÜBERWEISUNG
Belegnr.: 143561.000.673.268 Seite 1/2
2014-12-22 EUR 00404 023 509
Zahlungsempf.: Bogdan Potocnik Produkt:
BINNEN
IBAN: SI56031891000334914 BIC: SKBASI2X Referenznummer:
ID: FBAWI14121070316
Zahlungsgrund: IVM BR Vignetten-Aktion
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041412221311153/1ÜBERWEISUNG
Belegnr.: 143561.000.673.268 Seite 2/2
2014-12-22 EUR 00404 023 509
Begünstigter:
ID:
Urspr. Auftraggeber: Laffer Andreas
ID:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Potocnik Bogdan-39442',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:46:07.367',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2014-12-22',
                'purpose' => 'Online-Auftrag vom 22.12. zG/ Martin Mitterer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 143562.225.060.348
22.12.2014 EUR 00404 023 509
Zahlungsempf.: Martin Mitterer
IBAN: AT141400081210001867 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Vignetten-Aktion
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 22.12
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:46:38.527',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2014-12-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
143562009116948',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '615.52',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:46:44.743',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            3 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2014-12-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '615.52',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:57:06.113',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '21',
                'paydate' => '2014-12-31',
                'purpose' => '25,00 % KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.07',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:46:51.807',
                'updated_at' => '2022-11-17 20:07:43.997',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-12-31',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:46:59.797',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2014-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:47:10.277',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2014-12-31',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.28',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:47:17.173',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            8 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2014-12-31',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '13.62',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:57:45.747',
                'updated_at' => '2015-07-02 10:11:55.947',
            ),
            9 => 
            array (
                'depot_id' => '2',
                'category_id' => '13',
                'paydate' => '2014-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.41',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:58:18.203',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2015-01-02',
                'purpose' => 'Haben-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:23:29.613',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2015-01-02',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:24:00.003',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-01-07',
                'purpose' => 'Förderung TechnikerInnen - Neujahrsessen ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '25.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:54:00.967',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-01-09',
                'purpose' => 'Online-Auftrag vom 09.01. zG/ Edenred Austria GmbH 1120 Wien, Wagenseilgasse 14
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150094.888.005.578
09.01.2015 EUR 00404 023 509
Zahlungsempf.: Edenred Austria GmbH 1120 Wien, Wagens
eilgasse 14
IBAN: AT181100009654073700 BIC: BKAUATWW
ID:
Zahlungsgrund:
Zahlungsref.: D8201964
Auftraggeber: Angestelltenbetriebsrat d.Fa Laffer Valuta: 09.01
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
7.903,99
Auftr.geb.Ref: AR56998, Gutscheine BR IVM-TC',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '7903.99',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:47:53.287',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '22',
                'paydate' => '2015-01-09',
                'purpose' => 'Bareinzahlung',
                'support_year' => NULL,
                'payin' => '8000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:48:09.663',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2015-01-09',
                'purpose' => 'Handkassa für Neujahrsgutscheine',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '8000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:58:51.380',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-01-09',
                'purpose' => 'Bareinzahlung Konto für Neujahrsgutscheine',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '8000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:00:48.683',
                'updated_at' => '2015-06-19 12:05:43.970',
            ),
            17 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2015-01-09',
                'purpose' => 'Sparbuch',
                'support_year' => NULL,
                'payin' => '8000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:02:04.737',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-01-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 150122.126.316.658
12.01.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.01
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
850,93
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '850.93',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:48:19.390',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-01-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
150204021108128',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '914.98',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:48:30.077',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            20 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2015-01-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '914.98',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:05:57.477',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150262.489.047.668
26.01.2015 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz km-Geld
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 26.01
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
257,46
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '257.46',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:48:49.623',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2015-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150262.489.047.638
26.01.2015 EUR 00404 023 509
Zahlungsempf.: Maurer Michael
IBAN: AT331420020010782059 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur und Weiterbildung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 26.01
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
50,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:49:08.310',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2015-02-09',
                'purpose' => 'Online-Auftrag vom 09.02. zG/ Nataliya Petrova-Kor udzhiyski
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150402.619.005.758
09.02.2015 EUR 00404 023 509
Zahlungsempf.: Nataliya Petrova-Korudzhiyski
IBAN: AT682020200001232131 BIC: SPAMAT21
ID:
Zahlungsgrund: IVM Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 09.02
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Petrova-Korudzhiyski Nataliya-34174',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:49:35.053',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-02-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 150423.072.016.478
11.02.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage 1/2015
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.02
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
800,43
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '800.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:49:47.437',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150512.228.094.298
20.02.2015 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.02
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
392,97
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '392.97',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:49:53.573',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            26 => 
            array (
                'depot_id' => '2',
                'category_id' => '20',
                'paydate' => '2015-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '392.97',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:06:24.020',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-03-02',
                'purpose' => 'Förderung Technikküche:
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '61.56',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:55:47.873',
                'updated_at' => '2015-06-26 11:49:32.323',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-03-05',
                'purpose' => 'Online-Auftrag vom 05.03. zG/ Ladan NAEMI
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150642.272.031.418
05.03.2015 EUR 00404 023 509
Zahlungsempf.: Ladan NAEMI
IBAN: AT773225000001412386 BIC: RLNWATWWGTD
ID:
Zahlungsgrund: IVM BR Sportförd. 2014+2015 => 2Jahre!!
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 05.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
80,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => 'Naemi Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:50:42.013',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-03-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 150693.021.297.918
10.03.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 10.03
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
786,14
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '786.14',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:50:51.587',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-03-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150792.552.423.418
20.03.2015 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
706,14
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '706.14',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:51:00.147',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            31 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-03-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '706.14',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:07:02.487',
                'updated_at' => '2015-07-02 10:13:01.623',
            ),
            32 => 
            array (
                'depot_id' => '1',
                'category_id' => '6',
                'paydate' => '2015-03-20',
                'purpose' => 'Weiterbildung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Tsuchiya-Philipp Manfred-15753',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-26 12:29:28.757',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-03-23',
                'purpose' => 'Online-Auftrag vom 23.03. zG/ Sabine Thomas-Kohlfü rst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 150822.918.006.428
23.03.2015 EUR 00404 023 509
Zahlungsempf.: Sabine Thomas-Kohlfürst
IBAN: AT351700000484017638 BIC: BFKKAT2K
ID:
Zahlungsgrund: IVM BR-Sitzung Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 23.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
68,04
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '68.04',
                'person' => 'Thomas-Kohlfürst Sabine-38302',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:51:32.557',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-04-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:51:41.730',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:51:48.210',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '14',
                'paydate' => '2015-04-01',
                'purpose' => 'HABENZINSEN',
                'support_year' => NULL,
                'payin' => '.01',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:51:55.490',
                'updated_at' => '2022-11-17 20:09:44.657',
            ),
            37 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2015-04-01',
                'purpose' => 'Haben-Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:25:13.997',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2015-04-01',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 10:26:02.327',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-04-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 151003.921.021.708
10.04.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 10.04
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
803,23
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '803.23',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:52:03.747',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            40 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-04-15',
                'purpose' => 'BR-Essen Wien, Otto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '590.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:01:24.593',
                'updated_at' => '2015-07-02 10:13:27.033',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-04-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151102.762.112.118
20.04.2015 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
732,75
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '732.75',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:52:11.283',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            42 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-04-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '732.75',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:07:41.427',
                'updated_at' => '2015-07-02 10:13:45.727',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-04-30',
                'purpose' => 'Online-Auftrag vom 30.04. zG/ Paul SATLEK
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151202.333.028.688
30.04.2015 EUR 00404 023 509
Zahlungsempf.: Paul SATLEK
IBAN: AT611200050174240900 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 30.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Satlek Paul-28595',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:52:26.077',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-04-30',
                'purpose' => 'Online-Auftrag vom 30.04. zG/ Sabine Thomas-Kohlfü rst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151202.333.028.658
30.04.2015 EUR 00404 023 509
Zahlungsempf.: Sabine Thomas-Kohlfürst
IBAN: AT351700000484017638 BIC: BFKKAT2K
ID:
Zahlungsgrund: IVM BR-Kostenersatz 15.4.2015
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 30.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
152,04
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '152.04',
                'person' => 'Thomas-Kohlfürst Sabine-38302',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:52:40.987',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-04-30',
                'purpose' => 'Online-Auftrag vom 30.04. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151202.333.028.628
30.04.2015 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR-Kostenersatz 15.4.2015
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 30.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
362,36
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '362.36',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:52:57.033',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-04-30',
                'purpose' => 'Online-Auftrag vom 30.04. zG/ Peter Schulz
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151202.333.028.598
30.04.2015 EUR 00404 023 509
Zahlungsempf.: Peter Schulz
IBAN: AT831420020011651055 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 30.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
50,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Schulz Peter-25736',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:53:17.610',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-04-30',
                'purpose' => 'Online-Auftrag vom 30.04. zG/ Christian Plesa
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151202.333.028.568
30.04.2015 EUR 00404 023 509
Zahlungsempf.: Christian Plesa
IBAN: AT291100010365212900 BIC: BKAUATWWBRN
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 30.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Plesa MSc Christian-24996',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:53:35.387',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-05-08',
                'purpose' => 'BR-Essen Graz Hotel
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '81.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:15:51.567',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-05-08',
                'purpose' => 'BR-Essen Graz Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:19:10.580',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-05-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 151314.153.018.198
11.05.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.05
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
780,04
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '780.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:54:03.433',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-05-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151403.096.092.768
20.05.2015 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
135,64
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '135.64',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:54:12.520',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            52 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-05-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '135.64',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:08:07.290',
                'updated_at' => '2015-07-02 10:13:12.787',
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-05-21',
                'purpose' => 'Online-Auftrag vom 21.05. zG/ Clocktower Gastronom ie GmbH 8053 Graz, Kärntnerstr. 173
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151413.726.022.968
21.05.2015 EUR 00404 023 509
Zahlungsempf.: Clocktower Gastronomie GmbH 8053 Graz,
Kärntnerstr. 173
IBAN: AT403843900000121301 BIC: RZSTAT2G439
ID:
Zahlungsgrund:
Zahlungsref.: 2015/28
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 21.05
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
936,70
Auftr.geb.Ref: IVM BR-Essen RechnungReNr. 2015/28',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '936.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:54:29.217',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-10',
                'purpose' => 'BR-Essen Salzburg hinfahrt Westbahn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '24.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:20:11.017',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-10',
                'purpose' => 'BR-Essen Salzburg Taxt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '9.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:20:58.317',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-10',
                'purpose' => 'BR-Essen Salzburg Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '256.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:21:28.517',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-10',
                'purpose' => 'BR-Essen Salzburg Hotal',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '75.25',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:22:54.967',
                'updated_at' => '2015-06-19 12:14:55.570',
            ),
            58 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2015-06-10',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:11:22.987',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2015-06-10',
                'purpose' => 'vom Sparbuch',
                'support_year' => NULL,
                'payin' => '1500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 12:11:54.267',
                'updated_at' => '2015-06-19 12:15:32.070',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-06-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 151624.531.032.298
11.06.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.06
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
800,35
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '800.35',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:54:36.543',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            61 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'BR-Essen linz hinfahrt von Salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:23:29.793',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'BR-Essen Linz, Strassenbahn zur Niederlassung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:23:59.750',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'BR-Essen Linz, Strassenbahn Niederlassung zum U-hof',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:24:42.043',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'BR-Essen Linz, U-Hof',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '315.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:25:27.080',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
            'purpose' => 'BR-Essen linz Kulturaktion (Höhenrausch)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:26:17.460',
                'updated_at' => '2015-06-19 12:15:20.167',
            ),
            66 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'Br-Essen Linz Taxi zum Bahnhof',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '9.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:26:52.910',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-06-11',
                'purpose' => 'BR-Essen Linz Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '16.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-19 11:27:30.100',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2015-06-18',
                'purpose' => 'Online-Auftrag vom 18.06. zG/ Christoph Fürst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151693.144.022.748
18.06.2015 EUR 00404 023 509
Zahlungsempf.: Christoph Fürst
IBAN: AT576000000077995564 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 18.06
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fürst Bakk.techn. Christoph-34733',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:55:00.153',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-06-18',
                'purpose' => 'Online-Auftrag vom 18.06. zG/ Richard SKRIWANEK
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151693.144.022.718
18.06.2015 EUR 00404 023 509
Zahlungsempf.: Richard SKRIWANEK
IBAN: AT622011128045688200 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 18.06
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-06-18 13:55:11.503',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-06-26',
                'purpose' => 'Online-Auftrag vom 26.06. zG/ IVM TC Wien GmbH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 151772.078.006.528
26.06.2015 EUR 00404 023 509
Zahlungsempf.: IVM TC Wien GmbH
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID:
Zahlungsgrund: IVM BR Event-Anteil zu Firmenförderung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa IVM BR Valuta: 26.06
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
120,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-07-02 09:06:30.100',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-07-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-07-02 09:06:30.883',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-07-02 09:06:31.403',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            73 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2015-07-07',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:59:21.593',
                'updated_at' => '2016-07-27 14:07:32.677',
            ),
            74 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2015-07-07',
                'purpose' => 'Zinsen Haben',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 14:07:41.883',
                'updated_at' => '2016-07-27 14:08:21.967',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2015-07-10',
                'purpose' => 'Online-Auftrag vom 10.07. zG/ Hannes Kronreif
151912100031808',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kronreif Hannes-43171',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:08:59.790',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-07-10',
                'purpose' => 'Online-Auftrag vom 10.07. zG/
Hannes Kronreif',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '75.00',
                'person' => 'Kronreif Hannes-43171',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 14:01:16.707',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-07-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
151942319141738',
                'support_year' => NULL,
                'payin' => '806.69',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:25.680',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            78 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-07-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '353.06',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 12:56:19.887',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-07-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
152013885110478',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '353.06',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:30.687',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-08-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
152232981035098',
                'support_year' => NULL,
                'payin' => '817.83',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:31.710',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            81 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-08-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '817.83',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 12:58:27.627',
                'updated_at' => '2015-10-27 12:59:49.893',
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-08-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
152322336102338',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '817.83',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:32.580',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            83 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-08-27',
                'purpose' => 'Mitarbeiter_innen-Essen Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '810.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:01:53.847',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2015-09-02',
                'purpose' => 'Online-Auftrag vom 02.09. zG/ Stefan Pirker
152452484018128',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Pirker BA MA Stefan-39538',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:33.493',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-09-02',
                'purpose' => 'Online-Auftrag vom 02.09. zG/ Bianca Mladek
152452484018098',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mladek Bianca-38151',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:34.310',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-09-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
152544849019288',
                'support_year' => NULL,
                'payin' => '812.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:35.127',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            87 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-09-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '672.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 12:58:55.323',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-09-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
152643954102328',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '672.08',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:36.030',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            89 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-09-22',
                'purpose' => 'Mitarbeiter_innenessen Graz
Hinreise + Reservierung',
                'support_year' => NULL,
                'payin' => '.00',
                'payout' => '18.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:02:47.383',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-09-22',
                'purpose' => 'Taxi zum Quartier',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '25.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:06:04.647',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-09-24',
                'purpose' => 'Mitarbeiterinnenessen Graz, Rückreise',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:05:03.183',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-09-30',
                'purpose' => 'Online-Auftrag vom 30.09. zG/ Grossauer Schlossber g Gastronomie GmbH
152733647041618',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1312.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:36.847',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-10-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:37.647',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:38.493',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            95 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2015-10-01',
                'purpose' => 'Zinsen Haben',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:59:58.717',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2015-10-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:00:30.227',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-10-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
152853219016538',
                'support_year' => NULL,
                'payin' => '822.23',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:39.253',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            98 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-14',
                'purpose' => 'Betriebsratstreffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '47.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:07:51.793',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2015-10-21',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2015-10-27 13:10:03.450',
                'created_at' => '2015-10-27 12:59:52.870',
                'updated_at' => '2015-10-27 13:10:03.450',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2015-10-21',
                'purpose' => 'vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:00:44.767',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-21',
                'purpose' => 'Mitarbeiter_innenessen Salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '475.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:08:24.063',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-21',
                'purpose' => 'Mitarbeiter_innenessen Salzburg - Hotel Drei Kreuz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '62.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:09:04.180',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-21',
                'purpose' => 'Mitarbeiter_innenessen Salzburg: Frühstück und Parkplatz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:10:06.637',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2015-10-21',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:11:14.123',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-22',
                'purpose' => 'Mitarbeiter_innenessen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '360.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:11:57.903',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-10-23',
                'purpose' => 'Mitarbeiter_innenessen Linz Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '64.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-10-27 13:12:42.457',
                'updated_at' => '2015-10-27 13:19:01.943',
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-10-27',
                'purpose' => 'Online-Auftrag vom 27.10. zG/ Sigrid Stieblehner
153003708014748',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stieblehner Sigrid-37139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:40.093',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-10-27',
                'purpose' => 'Online-Auftrag vom 27.10. zG/ Holding Graz Kommuna le Dienstleistung GmbH
153003708014718',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '46.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:40.910',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-11-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
153154560013468',
                'support_year' => NULL,
                'payin' => '841.83',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:41.757',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2015-11-16',
                'purpose' => 'Online-Auftrag vom 16.11. zG/ Holding Graz Kommuna le Dienstleistg. GmbH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153202.631.028.138
16.11.2015 EUR 00404 023 509
Zahlungsempf.: Holding Graz Kommunale Dienstleistg. G
mbH
IBAN: AT213800000100212803 BIC: RZSTAT2G
ID:
Zahlungsgrund:
Zahlungsref.: 183338960
Auftraggeber: Angestelltenbetriebsrat d.Fa Angestell Valuta: 16.11
tenbetriebsrat IVM
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
18,20
Auftr.geb.Ref: Re.183338960KdNr.12505',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:42.620',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '1',
                'category_id' => '2',
                'paydate' => '2015-11-19',
                'purpose' => 'Puschtrinken mit den MA der  NL Wien -> 19 Personen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '178.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-11-19 00:00:00.000',
                'updated_at' => '2015-11-20 09:20:56.257',
            ),
            12 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2015-11-19',
                'purpose' => 'Mitarbeiter_innenessen Niederlassung Wien-Vösendorf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2015-11-19 00:00:00.000',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
153243927092128',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '244.26',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:43.997',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            14 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-11-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '244.26',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:10:32.847',
                'updated_at' => '2016-03-02 11:13:38.627',
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2015-12-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 153452.720.021.968
11.12.2015 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage 11/15
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.12
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
839,30
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '839.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:44.847',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            16 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2015-12-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '839.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:12:39.357',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2015-12-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
153554717102108',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '839.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:45.693',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Wolfgang Winterstell er
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.600.032.128
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Wolfgang Wintersteller
IBAN: AT313501500000037606 BIC: RVSAAT2S015
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
19,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.00',
                'person' => 'Wintersteller Wolfgang-35000',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:46.567',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'UEBERW.zG/Bojan Imperl REF.FBAWI15121043090
ÜBERWEISUNG
Belegnr.: 153571.000.236.818 Seite 1/2
2015-12-23 EUR 00404 023 509
Zahlungsempf.: Bojan Imperl Produkt:
BINNEN
IBAN: SI56340001008877188 BIC: KSPKSI22XXX Referenznummer:
ID: FBAWI15121043090
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041512230845114/1
ÜBERWEISUNG
Belegnr.: 153571.000.236.818 Seite 2/2
2015-12-23 EUR 00404 023 509
Begünstigter:
ID:
Urspr. Auftraggeber: Angestelltenbetriebsrat d. IVM
Andreas Laffer
ID:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Imperl Bojan-42459',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:47.437',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Peter Kurcik
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.025.108
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Peter Kurcik
IBAN: AT723303800000023085 BIC: RLBBAT2E038
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Kurcik Peter-46550',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:48.293',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Martin Mitterer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.025.078
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Martin Mitterer
IBAN: AT141400081210001867 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Mitterer Martin-34625',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:49.180',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Peter Windisch
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.025.048
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Peter Windisch
IBAN: AT241420020010469784 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Windisch Peter-46468',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:50.030',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Andre Bstieler
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.025.018
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Andre Bstieler
IBAN: AT493637800001215128 BIC: RZTIAT22378
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Bstieler Andre-43567',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:50.903',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Harald Birnstingl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.024.988
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Harald Birnstingl
IBAN: AT793843300000011601 BIC: RZSTAT2G433
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Birnstingl Harald-43491',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:51.670',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Hannes Kronreif
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.483.024.958
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Hannes Kronreif
IBAN: AT881420020010214492 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Kronreif Hannes-43171',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:52.527',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-23',
                'purpose' => 'UEBERW.zG/Bojan Mikis REF.FBAWI15121037205
ÜBERWEISUNG
Belegnr.: 153571.000.211.248 Seite 1/2
2015-12-23 EUR 00404 023 509
Zahlungsempf.: Bojan Mikis Produkt:
BINNEN
IBAN: SI56010000003400030 BIC: BSLJSI2XXXX Referenznummer:
ID: FBAWI15121037205
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041512230844052/1
ÜBERWEISUNG
Belegnr.: 153571.000.211.248 Seite 2/2
2015-12-23 EUR 00404 023 509
Begünstigter:
ID:
Urspr. Auftraggeber: Angestelltenbetriebsrat d. IVM
Andreas Laffer
ID:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Mikis Bojan-35197',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:53.367',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ DeLang Sea
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.450.596.428
23.12.2015 EUR 00404 023 509
Zahlungsempf.: DeLang Sea
IBAN: AT856000000075668903 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:54.180',
                'updated_at' => '2022-11-17 20:20:49.757',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2015-12-23',
                'purpose' => 'Online-Auftrag vom 23.12. zG/ Siegfried THOMA
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 153572.450.596.398
23.12.2015 EUR 00404 023 509
Zahlungsempf.: Siegfried THOMA
IBAN: AT413300000001069590 BIC: RLBBAT2E
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Sea DeLang-27931',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:55.030',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2015-12-28',
                'purpose' => 'UEBERW.a/Bojan Mikis REF.FBAWI15121102166
RÜCKLEITUNG-GUTSCHRIFT
Belegnr.: 153581.000.161.568
2015-12-28 EUR 00404 023 509
Zahlungsempf.: Angestelltenbetriebsrat d.Fa
IBAN: AT161200000404023509 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Aktion Vignette
Zahlungsref.:
Auftraggeber: Bojan Mikis
IBAN: SI56010000003400030 BIC: BSLJSI2XXXX
ID: Betrag: EUR
15,00
Auftr.geb.Ref:
urspr.Beg-ID:
urspr.Beg.:
Rückleit-Info: Orig. Ref.FBAWI15121037205
Ext. Ref.
S9999-BP81157200
Grund / Reason:AC01 IBAN fehlerhaft',
                'support_year' => NULL,
                'payin' => '15.00',
                'payout' => NULL,
                'person' => 'Mikis Bojan-35197',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:55.823',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2015-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.24',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:09:29.937',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2015-12-31',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '8.97',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:10:03.113',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-12-31',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:56.620',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2015-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:57.453',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            34 => 
            array (
                'depot_id' => '5',
                'category_id' => '13',
                'paydate' => '2016-01-02',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:24:50.830',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2016-01-02',
                'purpose' => 'Zinesn',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:25:22.530',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2016-01-04',
                'purpose' => 'Zinsen Haben',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:00:56.307',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2016-01-04',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:01:33.900',
                'updated_at' => '2016-07-27 11:04:34.947',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-01-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 160112.558.419.088
11.01.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.01
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
829,59
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '829.59',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:58.277',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            39 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-01-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '623.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:08:49.187',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-01-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
160204948120958',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '623.31',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:59.117',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Matthias Pirstinger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.568
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Matthias Pirstinger
IBAN: AT582081511601002667 BIC: STSPAT2G
ID:
Zahlungsgrund: IVM BR Event-Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Pirstinger BSc Matthias-44194',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:37:59.967',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Harald Birnstingl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.538
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Harald Birnstingl
IBAN: AT161200000404023509 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Event-Vignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Birnstingl Harald-43491',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:00.780',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Peter Kurcik
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.508
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Peter Kurcik
IBAN: AT723303800000023085 BIC: RLBBAT2E038
ID:
Zahlungsgrund: IVM BR Event-WeihnachtsfeierImperl, Kurcik
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
30,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Kurcik Peter-46550',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:01.647',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Hannes Kronreif
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.478
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Hannes Kronreif
IBAN: AT881420020010214492 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Event-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Kronreif Hannes-43171',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:02.447',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.448
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Gerhard Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:03.277',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Alberto Lucas Marisc al
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.418
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Alberto Lucas Mariscal
IBAN: AT346000080310197193 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR Event-Jahresvignette
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Lucas Mariscal Alberto-46112',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:04.110',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Online-Auftrag vom 21.01. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160212.348.066.388
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Christian Ruff
IBAN: AT286000000077808682 BIC: OPSKATWW
ID:
Zahlungsgrund: IVM BR Event-UnterstützungRuff, Maier
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
30,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:04.887',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-01-21',
                'purpose' => 'Gutschrift a/Angestelltenbetriebsrat d.Fa
GUTSCHRIFT
Belegnr.: 160212.348.066.548 Seite 1/2
21.01.2016 EUR 00404 023 509
Zahlungsempf.: Harald Birnstingl
IBAN: AT161200000404023509 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Event-Vignette
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:
GUTSCHRIFT
Belegnr.: 160212.348.066.548 Seite 2/2
21.01.2016 EUR 00404 023 509
Begünstigter:
ID:
Urspr. Auftraggeber: Laffer Andreas IVM
BR
ID:',
                'support_year' => NULL,
                'payin' => '15.00',
                'payout' => NULL,
                'person' => 'Birnstingl Harald-43491',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:05.757',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-01-27',
                'purpose' => 'Betriebsratstreffen in Vösendorf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '150.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:34:31.093',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-02-04',
                'purpose' => 'UEBERW.zG/Niko Starman REF.FBAWI16020218561
ÜBERWEISUNG
Belegnr.: 160351.000.177.608
2016-02-04 EUR 00404 023 509
Zahlungsempf.: Niko Starman Produkt:
BINNEN
IBAN: SI56041240237247620 BIC: KBMASI2XXXX Referenznummer:
ID: FBAWI16020218561
Zahlungsgrund: IVM-BR-Aktion Vignette
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041602040906524/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Starman Niko-46538',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:06.630',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-02-04',
                'purpose' => 'Online-Auftrag vom 04.02. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160352.766.015.688
04.02.2016 EUR 00404 023 509
Zahlungsempf.: Maurer Michael
IBAN: AT331420020010782059 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kulturunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:07.453',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2016-02-04',
                'purpose' => 'Online-Auftrag vom 04.02. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160352.766.015.658
04.02.2016 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR-Meeting Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
369,04
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '369.04',
                'person' => 'Unger Matthias-26305',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:08.333',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-02-04',
                'purpose' => 'Online-Auftrag vom 04.02. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160352.766.015.618
04.02.2016 EUR 00404 023 509
Zahlungsempf.: Adelheid Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:09.247',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-02-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 160424.442.532.528
11.02.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage 1/16
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.02
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
807,44
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '807.44',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:10.060',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-02-12',
                'purpose' => 'Online-Auftrag vom 12.02. zG/ Laffer Andreas
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160432.021.010.348
12.02.2016 EUR 00404 023 509
Zahlungsempf.: Laffer Andreas
IBAN: AT521200000717401731 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Sportunterstützung 2016
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:10.887',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-02-12',
                'purpose' => 'Online-Auftrag vom 12.02. zG/ Laffer Andreas
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160432.021.010.318
12.02.2016 EUR 00404 023 509
Zahlungsempf.: Laffer Andreas
IBAN: AT521200000717401731 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Sportunterstützung 2015
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:11.717',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-02-12',
                'purpose' => 'Online-Auftrag vom 12.02. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160432.021.010.288
12.02.2016 EUR 00404 023 509
Zahlungsempf.: Tatjana Neubauer
IBAN: AT941200000756387700 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:12.550',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-02-12',
                'purpose' => 'Online-Auftrag vom 12.02. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160432.021.010.258
12.02.2016 EUR 00404 023 509
Zahlungsempf.: Tatjana Neubauer
IBAN: AT941200000756387700 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:13.447',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-02-12',
                'purpose' => 'Online-Auftrag vom 12.02. zG/ Dipl.-Ing. Ladan Bol drino-Kainy
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160432.021.010.228
12.02.2016 EUR 00404 023 509
Zahlungsempf.: Dipl.-Ing. Ladan Boldrino-Kainy
IBAN: AT773225000001412386 BIC: RLNWATWWGTD
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.02
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Boldrino-Kainy Bsc Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:14.197',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-02-25',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2200.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:07:41.610',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2016-02-25',
                'purpose' => 'vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2200.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:14:05.877',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-02-25',
                'purpose' => 'BR-Essen Graz 25.02.2016 - Hinfahrt, ÖBB',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:20:53.580',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-02-25',
                'purpose' => 'BR-Essen Graz 25.02.2016 - Essen im GösserBräu',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '970.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:21:52.957',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-02-26',
                'purpose' => 'BR-Essen Graz 25.02.2016, Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '63.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:23:15.440',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-02-26',
                'purpose' => 'BR-Essen Graz 25.02.2016 - Rückfahrt - ÖBB',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-02 11:24:51.210',
                'updated_at' => '2016-07-28 09:37:59.623',
            ),
            66 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-02',
                'purpose' => 'BR-Essen Salzburg 2.3.2016 - Hinfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 10:40:39.200',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-02',
                'purpose' => 'BR-Essen Salzburg 2.3.2016 - Fuxn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '130.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 10:59:22.727',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-02',
                'purpose' => 'BR-Essen Salzburg 2.2.2016 - Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '71.55',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:00:35.070',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-03',
                'purpose' => 'BR-Essen Linz 3.3.2016 - Fahrt von Salzburg nach Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:01:51.533',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-03',
                'purpose' => 'BR-Essen Linz 3.3.2016 - Fahrschein Öffentliche Verkehrsmittel Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:02:44.287',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-03',
                'purpose' => 'BR-Essen Linz  3.3.2016  - Essen in der Pizzeria Mamma Mia',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '310.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:03:27.973',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-04',
                'purpose' => 'BR-Essen Linz 3.3.2016, Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '75.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:06:07.933',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-03-04',
                'purpose' => 'BR-Essen Linz - 3.3.2016, Rückfahrt nach Vösendorf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-03-04 11:06:44.533',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-03-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 160712.603.010.048
11.03.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.03
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
810,12
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '810.12',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:15.023',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-03-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160814.648.392.018
21.03.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
748,52
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '748.52',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:15.790',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            76 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-03-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '748.52',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:00:36.247',
                'updated_at' => '2016-07-26 17:04:13.870',
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-04-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:16.527',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:17.263',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            79 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2016-04-01',
                'purpose' => 'Zinsen Haben',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:58:37.093',
                'updated_at' => '2016-07-27 11:06:32.217',
            ),
            80 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2016-04-01',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => '.00',
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:01:56.163',
                'updated_at' => '2016-07-27 13:51:04.047',
            ),
            81 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-04-07',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:05:37.430',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2016-04-07',
                'purpose' => 'Auffüllen Handkassa vom Sparbuch',
                'support_year' => NULL,
                'payin' => '2000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:06:47.730',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-04-07',
                'purpose' => 'Betriebsratsessen Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '980.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:27:35.803',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Thomas Graser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.298
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Thomas Graser
IBAN: AT846000000072898989 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
14,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14.00',
                'person' => 'Graser Thomas-27173',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:18.013',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.268
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Adelheid Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Sportu. incl. Gerhard Hackl
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
80,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:18.837',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Marietta Beltermann- Faber
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.238
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Marietta Beltermann-Faber
IBAN: AT322011100034951792 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM BR Sport- u- Weiterbildungsu.
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
50,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:19.583',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Manuel Pichler
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.208
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Manuel Pichler
IBAN: AT963415700001014315 BIC: RZOOAT2L157
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Pichler Michael-16283',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:20.310',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Alberto Lucas Marisc al
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.178
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Alberto Lucas Mariscal
IBAN: AT346000080310197193 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Weiterbildungsunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Lucas Mariscal Alberto-46112',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:21.093',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Thomas Graser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.148
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Thomas Graser
IBAN: AT846000000072898989 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kulturunterstützung 2015
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Graser Thomas-27173',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:21.813',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.267.024.118
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Christian Oberpertinger
IBAN: AT581200050587983202 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:22.517',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-04-08',
                'purpose' => 'UEBERW.zG/Zsuzsanna Reith REF.FBAWI16040378722
ÜBERWEISUNG
Belegnr.: 160991.000.280.888 Seite 1/2
2016-04-08 EUR 00404 023 509
Zahlungsempf.: Zsuzsanna Reith Produkt:
BINNEN
IBAN: DE77500105175412820745 BIC: INGDDEFFXXX Referenznummer:
ID: FBAWI16040378722
Zahlungsgrund: IVM-BR-Aktion Vignette
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041604081238357/1
ÜBERWEISUNG
Belegnr.: 160991.000.280.888 Seite 2/2
2016-04-08 EUR 00404 023 509
Begünstigter:
ID:
Urspr. Auftraggeber: Andreas Laffer
Angestelltenbetriebsrat d.IVM
ID:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Reith Zsuzsanna-44027',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:23.190',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Sarah Maria Moser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.240.006.258
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Sarah Maria Moser
IBAN: AT652050500001072560 BIC: SPKIAT2K
ID:
Zahlungsgrund: IVM BR Weiterbildungsunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Moser Sarah-27477',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:23.853',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Christoph Schiefer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.240.006.228
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Christoph Schiefer
IBAN: AT612020508301045293 BIC: SPBDAT21
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schiefer Christoph-40960',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:24.527',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Claudiu Constantin
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.240.006.198
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Claudiu Constantin
IBAN: AT811512000881100366 BIC: OBKLAT2L
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Constantin Claudiu-30645',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:25.117',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Thomas Luger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.240.006.158
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Thomas Luger
IBAN: AT152033400001308279 BIC: SMWRAT21
ID:
Zahlungsgrund: IVM BR Kulturunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
18,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.00',
                'person' => 'Luger BSc Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:25.783',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 160993.240.006.128
08.04.2016 EUR 00404 023 509
Zahlungsempf.: Tatjana Neubauer
IBAN: AT941200000756387700 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM BR Sportunterst. 2015,2016
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
80,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:26.303',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-04-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 161023.420.588.558
11.04.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage 3/2016
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.04
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
831,22
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '831.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:26.837',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            98 => 
            array (
                'depot_id' => '1',
                'category_id' => '5',
                'paydate' => '2016-04-12',
                'purpose' => 'rückzahlung der doppeltüberweisung Tatjana Neubauer vom 8.4.2016',
                'support_year' => NULL,
                'payin' => '80.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 13:03:48.607',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-04-13',
                'purpose' => 'Betriebsrats- Quartalsmeeting',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '80.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:25:01.503',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2016-04-20',
                'purpose' => 'Online-Auftrag vom 20.04. zG/ Ladan Boldrino-Kainy
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161112.984.015.578
20.04.2016 EUR 00404 023 509
Zahlungsempf.: Ladan Boldrino-Kainy
IBAN: AT773225000001412386 BIC: RLNWATWWGTD
ID:
Zahlungsgrund: IVM BR Kultur-/Sportu. Club Danube, Haus d. Meeres
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
50,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Boldrino-Kainy Bsc Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:27.437',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-04-20',
                'purpose' => 'Online-Auftrag vom 20.04. zG/ Hannes Kronreif
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161112.984.015.548
20.04.2016 EUR 00404 023 509
Zahlungsempf.: Hannes Kronreif
IBAN: AT881420020010214492 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
10,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Kronreif Hannes-43171',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:28.053',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-04-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161112.858.108.918
20.04.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
231,62
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '231.62',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:28.647',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            3 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-04-20',
                'purpose' => 'abschöpfer',
                'support_year' => NULL,
                'payin' => '231.62',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:54:37.127',
                'updated_at' => '2016-07-27 10:56:09.537',
            ),
            4 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-04-28',
                'purpose' => 'Betriebsratsessen Graz, Fahrt zum Lokal',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:21:54.087',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-04-28',
                'purpose' => 'Betriebsratsessen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '950.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:22:46.220',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-04-28',
                'purpose' => 'Betriebsratsessen Graz, Fahrt nach Hausmannstätten',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:23:19.920',
                'updated_at' => '2016-07-26 17:24:51.777',
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-05-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 161314.375.016.758
10.05.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage 4/2016
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 10.05
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
829,41
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '829.41',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:29.223',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-05-18',
                'purpose' => 'UEBERW.zG/Bojan Mikis REF.FBAWI16050759052
ÜBERWEISUNG
Belegnr.: 161391.000.247.468
2016-05-18 EUR 00404 023 509
Zahlungsempf.: Bojan Mikis Produkt:
BINNEN
IBAN: SI56340001011872451 BIC: KSPKSI22XXX Referenznummer:
ID: FBAWI16050759052
Zahlungsgrund: IVM-Event Unterstuetzung Vignette 2 016
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref: Überweisungsbetrag: 15,00
Best.Nr.: 00000041605181011236/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Mikis Bojan-35197',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:29.767',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2016-05-18',
                'purpose' => 'Online-Auftrag vom 18.05. zG/ Peter Kurcik
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161393.144.007.168
18.05.2016 EUR 00404 023 509
Zahlungsempf.: Peter Kurcik
IBAN: AT723303800000023085 BIC: RLBBAT2E038
ID:
Zahlungsgrund: IVM BR Event-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 18.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Kurcik Peter-46550',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:30.247',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-05-18',
                'purpose' => 'Online-Auftrag vom 18.05. zG/ Bernd Hold
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161393.144.007.128
18.05.2016 EUR 00404 023 509
Zahlungsempf.: Bernd Hold
IBAN: AT253804100000015503 BIC: RZSTAT2G041
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 18.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
22,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.00',
                'person' => 'Hold MA Bernd-43062',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:30.790',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2016-05-18',
                'purpose' => 'Online-Auftrag vom 18.05. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161393.144.007.098
18.05.2016 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 18.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
373,92
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '373.92',
                'person' => 'Unger Matthias-26305',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:31.310',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-05-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161413.738.087.518
20.05.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
343,49
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '343.49',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:31.807',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            13 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-05-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '343.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:56:14.300',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-05-30',
                'purpose' => 'Online-Auftrag vom 30.05. zG/ Philipp Glatz
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161512.502.814.078
30.05.2016 EUR 00404 023 509
Zahlungsempf.: Philipp Glatz
IBAN: AT624815030783260000 BIC: VHARAT21
ID:
Zahlungsgrund: IVM Heirats-UnterstützungAlles Gute
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Glatz Philipp-41067',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:32.293',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '1',
                'category_id' => '2',
                'paydate' => '2016-06-05',
            'purpose' => 'Fotoworkshop im Tiergarten Schönbrunn (add on zu Campuskurs)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '74.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 17:26:17.183',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-06-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 161652.863.008.548
13.06.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT962015100404023509 BIC: BKAUATWWAMS
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.06
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
834,91
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '834.91',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:32.790',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-06-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161724.531.105.538
20.06.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.06
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
734,91
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '734.91',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:33.253',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            18 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-06-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '734.91',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:56:55.573',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2016-06-30',
                'purpose' => 'Online-Auftrag vom 30.06. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161824.240.919.168
30.06.2016 EUR 00404 023 509
Zahlungsempf.: Christian Ruff
IBAN: AT286000000077808682 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
25,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '25.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:33.693',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-06-30',
                'purpose' => 'Online-Auftrag vom 30.06. zG/ Hafner Kornelia
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161824.240.919.138
30.06.2016 EUR 00404 023 509
Zahlungsempf.: Hafner Kornelia
IBAN: AT606000000085005312 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Pollani Kornelia-42793',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:34.157',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-06-30',
                'purpose' => 'Online-Auftrag vom 30.06. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 161824.240.919.108
30.06.2016 EUR 00404 023 509
Zahlungsempf.: Christian Ruff
IBAN: AT286000000077808682 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:34.557',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-07-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.65',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:34.967',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:35.390',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            24 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2016-07-01',
                'purpose' => 'Zinsen Haben',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:07:12.990',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2016-07-01',
                'purpose' => 'Kest',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 11:07:52.313',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-07-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 161954.237.048.168
13.07.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage 6/2016
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.07
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
823,66
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '823.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:35.903',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-07-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162022.984.109.618
20.07.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.07
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
596,01
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '596.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-26 11:38:36.367',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            28 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-07-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '596.01',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-27 10:57:31.257',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-07-27',
                'purpose' => 'B R-Quartalsmeeting - Essen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '220.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-07-28 08:33:00.617',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-08-01',
                'purpose' => 'Rückzahlung falsch gebuchter Beleg vom 26.2.2016, BR-Essen Graz, Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.70',
                'person' => 'Tsuchiya-Philipp Manfred-15753',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:30:55.303',
                'updated_at' => '2016-09-30 09:32:55.537',
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-08-17',
                'purpose' => 'UEBERW.zG/Bojan Mikis REF.FBAWI16080704884
ÜBERWEISUNG
Belegnr.: 162301.000.153.528
2016-08-17 EUR 00404 023 509
Zahlungsempf.: Bojan Mikis Produkt:
BINNEN
IBAN: SI56340001011872451 BIC: KSPKSI22XXX Referenznummer:
ID: FBAWI16080704884
Zahlungsgrund: IVM BR-Familienunterstuetzung
Zahlungsref.:
Zahlungszweck:
Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen:
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref: Überweisungsbetrag: 100,00
Best.Nr.: 00000041608170830107/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:01.997',
                'updated_at' => '2022-11-17 20:21:58.420',
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-08-17',
                'purpose' => 'Online-Auftrag vom 17.08. zG/ Sabine Thomas-Kohlfü rst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162303.600.524.108
17.08.2016 EUR 00404 023 509
Zahlungsempf.: Sabine Thomas-Kohlfürst
IBAN: AT351700000484017638 BIC: BFKKAT2K
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 17.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
20,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:03.757',
                'updated_at' => '2022-11-17 20:22:24.460',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-08-17',
                'purpose' => 'Online-Auftrag vom 17.08. zG/ Thomas Graser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162303.600.524.078
17.08.2016 EUR 00404 023 509
Zahlungsempf.: Thomas Graser
IBAN: AT846000000072898989 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 17.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
38,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '38.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:04.963',
                'updated_at' => '2022-11-17 20:22:42.500',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-08-17',
                'purpose' => 'Online-Auftrag vom 17.08. zG/ Sandra MAINKA
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162303.600.524.048
17.08.2016 EUR 00404 023 509
Zahlungsempf.: Sandra MAINKA
IBAN: AT972011128536079800 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 17.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:06.020',
                'updated_at' => '2022-11-17 20:22:56.377',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2016-08-17',
                'purpose' => 'Online-Auftrag vom 17.08. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162303.600.524.018
17.08.2016 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz vom 27.07.2016
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 17.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
380,42
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '380.42',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:06.993',
                'updated_at' => '2022-11-17 20:23:37.760',
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-08-18',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 162313.912.008.328
18.08.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 18.08
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
815,92
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '815.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:09.327',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            37 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-08-20',
                'purpose' => '',
                'support_year' => NULL,
                'payin' => '237.50',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2017-07-14 13:36:58.053',
                'created_at' => '2017-07-14 13:33:08.547',
                'updated_at' => '2017-07-14 13:36:58.053',
            ),
            38 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-08-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '237.50',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:51:17.143',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-08-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
162354564495978',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '237.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:10.210',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-09-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 162563.729.515.658
12.09.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.09
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
816,43
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '816.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:11.067',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-09-16',
                'purpose' => 'Online-Auftrag vom 16.09. zG/ Thomas GRASER
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162602.162.015.788
16.09.2016 EUR 00404 023 509
Zahlungsempf.: Thomas GRASER
IBAN: AT846000000072898989 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 16.09
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:11.903',
                'updated_at' => '2022-11-17 20:23:53.760',
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-09-16',
                'purpose' => 'Online-Auftrag vom 16.09. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162602.162.015.758
16.09.2016 EUR 00404 023 509
Zahlungsempf.: Christian Ruff
IBAN: AT286000000077808682 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 16.09
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:12.757',
                'updated_at' => '2022-11-17 20:24:14.470',
            ),
            43 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-19',
                'purpose' => 'Beratung für Kollegen bei Thales bezgl KV',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:33:04.563',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-09-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '616.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:50:46.660',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-09-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
162642789085248',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '616.43',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:16.567',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-22',
                'purpose' => 'BR-Essen Wien Vösendorf',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '370.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:34:48.697',
                'updated_at' => '2016-09-30 09:36:24.013',
            ),
            47 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2016-09-22',
                'purpose' => 'Übertrag Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:48:45.837',
                'updated_at' => '2016-09-30 09:49:29.593',
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2016-09-22',
                'purpose' => 'auffüllen Handkassa vom Sparbuch 00204046577',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:49:31.913',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-28',
                'purpose' => 'BR-Essen Salzburg /linz Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:35:38.140',
                'updated_at' => '2016-09-30 09:36:30.147',
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-28',
                'purpose' => 'BR-Essen Salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '295.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:36:32.827',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-28',
                'purpose' => 'Meeting mit Harald Unger zur fiktiven BR-Umlage bei Porsche AG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:37:07.710',
                'updated_at' => '2016-09-30 09:42:46.420',
            ),
            52 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-28',
                'purpose' => 'BR-Essen Salzburg - hinfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '28.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:38:07.450',
                'updated_at' => '2016-09-30 09:44:58.097',
            ),
            53 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-29',
                'purpose' => 'BR-Essen Linz - Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:42:48.877',
                'updated_at' => '2016-09-30 09:44:34.600',
            ),
            54 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-29',
                'purpose' => 'BR-Essen Linz - Fahrt mondigo-BHF',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:43:20.617',
                'updated_at' => '2016-09-30 09:46:32.577',
            ),
            55 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-29',
                'purpose' => 'BR-Essen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '325.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:45:00.693',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-29',
                'purpose' => 'BR-Essen Linz Fahrt Bhf-Niederlassung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:45:34.227',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-09-30',
                'purpose' => 'BR-Essen Salzburg / Linzt: Fahrt Salzburg - Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-09-30 09:46:35.927',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'depot_id' => '5',
                'category_id' => '13',
                'paydate' => '2016-10-03',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:26:10.570',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2016-10-03',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:26:40.043',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-10-03',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.65',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:18.037',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-10-03',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:18.673',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-10-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 162852.030.013.918
11.10.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.10
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
822,39
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '822.39',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:19.710',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            63 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2016-10-12',
                'purpose' => 'Quartalsmeeting des Betriebsrats',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '170.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-01-19 09:31:41.543',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-10-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '819.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:38:04.873',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2016-10-20',
                'purpose' => 'Online-Auftrag vom 20.10. zG/ s Biergartl SoundSo OG
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 162944.450.287.448
20.10.2016 EUR 00404 023 509
Zahlungsempf.: s Biergartl SoundSo OG
IBAN: AT722081500040040537 BIC: STSPAT2G
ID:
Zahlungsgrund:
Zahlungsref.: BG100
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.10
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
650,00
Auftr.geb.Ref: IVM Wien BR Rechnung BG100',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '650.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:20.623',
                'updated_at' => '2022-11-17 20:24:47.770',
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-10-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
162944426083408',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '819.74',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:21.440',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-11-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 163163.267.020.838
11.11.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage 10/2016
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.11
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
770,30
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '770.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:22.057',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            68 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-11-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '120.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:39:01.980',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-11-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163262.342.095.638
21.11.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.11
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
120,30
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '120.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:22.497',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-12-06',
                'purpose' => 'Online-Auftrag vom 06.12. zG/ Siegfried Thoma
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163413.186.003.398
06.12.2016 EUR 00404 023 509
Zahlungsempf.: Siegfried Thoma
IBAN: AT413300000001069590 BIC: RLBBAT2E
ID:
Zahlungsgrund: IVM BR Kultur-/SportunterstützungYoga
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:22.857',
                'updated_at' => '2022-11-17 20:25:04.810',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-12-06',
                'purpose' => 'Online-Auftrag vom 06.12. zG/ Thomas GRASER
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163413.186.003.368
06.12.2016 EUR 00404 023 509
Zahlungsempf.: Thomas GRASER
IBAN: AT846000000072898989 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützungmax. 40 /Jahr/Art
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
12,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:23.177',
                'updated_at' => '2022-11-17 20:25:25.430',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2016-12-06',
                'purpose' => 'Online-Auftrag vom 06.12. zG/ Richard Skriwanek
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163413.186.003.338
06.12.2016 EUR 00404 023 509
Zahlungsempf.: Richard Skriwanek
IBAN: AT622011128045688200 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:23.490',
                'updated_at' => '2022-11-17 20:25:29.923',
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2016-12-06',
                'purpose' => 'Online-Auftrag vom 06.12. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163413.186.003.308
06.12.2016 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
378,72
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '378.72',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:23.890',
                'updated_at' => '2022-11-17 20:25:45.227',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2016-12-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 163474.171.012.058
12.12.2016 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.12
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
774,08
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '774.08',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:24.573',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            75 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2016-12-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '303.36',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:39:34.447',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2016-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163553.228.142.248
20.12.2016 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.12
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
303,36
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '303.36',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:25.027',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2016-12-22',
                'purpose' => 'Online-Auftrag vom 22.12. zG/ Thomas Strasser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 163574.129.007.508
22.12.2016 EUR 00404 023 509
Zahlungsempf.: Thomas Strasser
IBAN: AT532011130034217171 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.12
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:25.410',
                'updated_at' => '2022-11-17 20:25:59.590',
            ),
            78 => 
            array (
                'depot_id' => '2',
                'category_id' => '13',
                'paydate' => '2016-12-30',
                'purpose' => 'Bank-Spesen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.79',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:40:03.927',
                'updated_at' => '2017-07-14 13:44:47.437',
            ),
            79 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2016-12-30',
                'purpose' => 'Bank-Zinsen',
                'support_year' => NULL,
                'payin' => '7.14',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:40:44.903',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-12-30',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.65',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:25.710',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2016-12-30',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:26.327',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            82 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2017-01-01',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '346.44',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2018-08-14 15:21:57.557',
                'created_at' => '2017-01-01 00:00:00.000',
                'updated_at' => '2018-08-14 15:21:57.557',
            ),
            83 => 
            array (
                'depot_id' => '5',
                'category_id' => '13',
                'paydate' => '2017-01-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 14:57:57.620',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2017-01-02',
                'purpose' => 'Zinsen ',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 14:58:23.680',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-01-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 170104.688.033.038
10.01.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 10.01
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
763,05
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '763.05',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:26.810',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            86 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-01-18',
                'purpose' => 'Quartalsmeeting',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '182.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-01-19 09:30:58.990',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2017-01-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '660.40',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:41:22.703',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-01-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170204.408.094.158
20.01.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.01
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
660,40
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '660.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:27.390',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-02-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 170443.891.012.518
13.02.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage 1/17
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.02
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
719,63
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '719.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:27.710',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            90 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-02-15',
                'purpose' => 'Betriebsratsessen Graz - ÖBB Ticket Hin- und Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '38.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-02-17 13:32:36.143',
                'updated_at' => '2017-02-17 13:33:58.337',
            ),
            91 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-02-16',
                'purpose' => 'Betriebsratsessen Graz - zur Schmiedn',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '440.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-02-17 13:34:04.967',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-02-16',
                'purpose' => 'Betriebsratsessen Graz - taxi zum Quartier in Hausmannstätten ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '17.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-02-17 13:35:07.470',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2017-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '719.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:41:49.687',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170512.627.108.078
20.02.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.02
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
719,63
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '719.63',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:27.967',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2017-03-01',
                'purpose' => 'Online-Auftrag vom 01.03. zG/ Bernd Hold
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170602.065.154.848
01.03.2017 EUR 00404 023 509
Zahlungsempf.: Bernd Hold
IBAN: AT253804100000015503 BIC: RZSTAT2G041
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.03
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:28.250',
                'updated_at' => '2022-11-17 20:26:16.440',
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2017-03-01',
                'purpose' => 'Online-Auftrag vom 01.03. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170602.065.154.818
01.03.2017 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.03
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
374,72
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '374.72',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:28.520',
                'updated_at' => '2022-11-17 20:26:30.777',
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2017-03-01',
                'purpose' => 'Online-Auftrag vom 01.03. zG/ Bernd Hold
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170602.065.154.788
01.03.2017 EUR 00404 023 509
Zahlungsempf.: Bernd Hold
IBAN: AT253804100000015503 BIC: RZSTAT2G041
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.03
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:29.297',
                'updated_at' => '2022-11-17 20:26:47.383',
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2017-03-01',
                'purpose' => 'Online-Auftrag vom 01.03. zG/ Michael Maurer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170602.065.154.758
01.03.2017 EUR 00404 023 509
Zahlungsempf.: Michael Maurer
IBAN: AT331420020010782059 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.03
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:29.900',
                'updated_at' => '2022-11-17 20:27:04.397',
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2017-03-01',
                'purpose' => 'Online-Auftrag vom 01.03. zG/ Elzbieta Bialowas
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170602.241.007.428
01.03.2017 EUR 00404 023 509
Zahlungsempf.: Elzbieta Bialowas
IBAN: AT502011100036066192 BIC: GIBAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.03
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
50,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:30.600',
                'updated_at' => '2022-11-17 20:27:08.363',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-03-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 170724.765.054.538
13.03.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage 2/17
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.03
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
729,49
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '729.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 09:08:31.620',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            1 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2017-03-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '184.77',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:42:16.793',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-03-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170793.480.102.008
20.03.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
184,77
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '184.77',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 08:52:13.837',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            3 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-22',
                'purpose' => 'Betriebsratsessen Salzburg, Hinhfahrt ÖBB',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-03-24 09:25:42.167',
                'updated_at' => '2017-03-24 09:27:11.127',
            ),
            4 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-22',
                'purpose' => 'Betriebsratsessen Salzburg, Die Weisse',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '210.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-03-24 09:27:14.800',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-23',
                'purpose' => 'Betriebsratsessen Salzburg, Übernachtung Hubertushof',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '98.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-03-24 09:27:55.550',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-23',
                'purpose' => 'Betriebsratsessen Salzburg, Taxi zum BahnhofÖBB',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-03-24 09:28:33.113',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-24',
                'purpose' => 'Betriebsratsessen Salzburg, Rückfahrt ÖBB',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '26.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-03-24 09:29:05.513',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-03-30',
                'purpose' => 'Betriebsratsessen Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '560.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-04-04 10:17:46.180',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-04-03',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.65',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:18.017',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-04-03',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:20.747',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            11 => 
            array (
                'depot_id' => '5',
                'category_id' => '13',
                'paydate' => '2017-04-03',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:23:19.110',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2017-04-03',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:23:54.657',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2017-04-04',
                'purpose' => 'Online-Auftrag vom 04.04. zG/ Sarah Maria Moser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170944.325.858.488
04.04.2017 EUR 00404 023 509
Zahlungsempf.: Sarah Maria Moser
IBAN: AT652050500001072560 BIC: SPKIAT2K
ID:
Zahlungsgrund: IVM BR Weiterbildungsunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Moser Sarah-27477',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:21.703',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-04-04',
                'purpose' => 'Online-Auftrag vom 04.04. zG/ DeLang Sea
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 170944.325.858.458
04.04.2017 EUR 00404 023 509
Zahlungsempf.: DeLang Sea
IBAN: AT531420020010557241 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.04
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Sea DeLang-27931',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:24.037',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-04-04',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:43:07.187',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2017-04-04',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:43:36.190',
                'updated_at' => '2017-07-14 13:45:00.347',
            ),
            17 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-04-05',
                'purpose' => 'BR-Essen Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '360.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 12:59:54.047',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-04-06',
                'purpose' => 'BR-Essen Linz, Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '60.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:01:38.460',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-04-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 171013.015.009.928
11.04.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.04
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
734,82
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '734.82',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:24.867',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-04-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171102.060.081.468
20.04.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
652,17
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '652.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:26.200',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-04-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171102.060.081.468
20.04.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
652,17
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '652.17',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2022-11-17 20:13:56.707',
                'created_at' => '2017-07-17 08:42:59.803',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            22 => 
            array (
                'depot_id' => '2',
                'category_id' => '12',
                'paydate' => '2017-04-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '652.17',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 11:23:02.517',
                'updated_at' => '2017-07-17 11:31:49.710',
            ),
            23 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-05-04',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '430.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 12:55:55.257',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-05-04',
                'purpose' => 'BR-essen Graz - Taxiz um Quartier',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '23.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 12:58:13.423',
                'updated_at' => '2017-07-17 10:46:55.060',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '11',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Hans-Peter Scharf
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.658
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Hans-Peter Scharf
IBAN: AT586000020810010992 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Mitarbeiter-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
750,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '750.00',
                'person' => 'Scharf Hans-Peter-37439',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:53:50.873',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Sabine Thomas-Kohlfü rst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.628
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Sabine Thomas-Kohlfürst
IBAN: AT351700000484017638 BIC: BFKKAT2K
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Thomas-Kohlfürst Sabine-38302',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:54:14.587',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.598
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Gerhard Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Weiterbildungsunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
10,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:54:34.177',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Mariam Mosham
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.568
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Mariam Mosham
IBAN: AT441100011871604200 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Mosham Mariam-46021',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:54:50.343',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Michael Maurer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.538
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Michael Maurer
IBAN: AT331420020010782059 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
10,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:55:13.383',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.508
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Gerhard Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:55:51.223',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-05-10',
                'purpose' => 'Online-Auftrag vom 10.05. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171303.750.006.478
10.05.2017 EUR 00404 023 509
Zahlungsempf.: Adelheid Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:55:51.710',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-05-10',
                'purpose' => 'Quartalsmeeting',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '250.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 08:39:50.217',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-05-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 171313.903.018.718
11.05.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.05
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
807,74
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '807.74',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:56:03.547',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-05-16',
                'purpose' => 'Online-Auftrag vom 16.05. zG/ Uwe Schimon
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171364.957.009.588
16.05.2017 EUR 00404 023 509
Zahlungsempf.: Uwe Schimon
IBAN: AT634715020052620000 BIC: VBOEATWWNOM
ID:
Zahlungsgrund: IVM Familen-UnterstützungAlles Gute für Theo
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 16.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schimon Uwe-46587',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:56:18.677',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-05-16',
                'purpose' => 'Online-Auftrag vom 16.05. zG/ Sigrid Stieblehner
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171364.957.009.558
16.05.2017 EUR 00404 023 509
Zahlungsempf.: Sigrid Stieblehner
IBAN: AT281420020011947604 BIC: EASYATW1
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 16.05
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stieblehner Sigrid-37139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:56:36.267',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2017-06-13',
                'purpose' => 'Online-Auftrag vom 12.06. zG/ Otmar Gschroefl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171634.794.007.038
12.06.2017 EUR 00404 023 509
Zahlungsempf.: Otmar Gschroefl
IBAN: AT151490022011215509 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Event-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Gschröfl Otmar-14108',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:57:22.683',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2017-06-13',
                'purpose' => 'Online-Auftrag vom 12.06. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171634.794.007.008
12.06.2017 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
360,52
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '360.52',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:57:24.477',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-06-13',
                'purpose' => 'Online-Auftrag vom 12.06. zG/ PHILIPP GLATZ
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 171634.794.006.978
12.06.2017 EUR 00404 023 509
Zahlungsempf.: PHILIPP GLATZ
IBAN: AT744477030783260000 BIC: VBOEATWWGRA
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.06
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Glatz Philipp-41067',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:57:50.120',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-06-20',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 171713.477.011.468
20.06.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 20.06
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
851,05
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '851.05',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-06-21 11:57:50.473',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            40 => 
            array (
                'depot_id' => '5',
                'category_id' => '13',
                'paydate' => '2017-07-03',
                'purpose' => 'KESt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:16:23.260',
                'updated_at' => '2017-07-14 13:18:35.603',
            ),
            41 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2017-07-03',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-14 13:17:26.657',
                'updated_at' => '2017-07-14 13:18:43.600',
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-07-03',
                'purpose' => 'Porto',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 11:54:47.183',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-07-03',
                'purpose' => 'Kontoauszugsgebühr',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 11:55:26.570',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-07-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 171922.567.022.838
11.07.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.07
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
828,29
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '828.29',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-17 08:43:50.670',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-07-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
172012000141498',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '878.86',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:42.880',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            46 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-07-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '878.86',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-07-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-08-10',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 172224.114.033.348
10.08.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 10.08
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
842,76
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '842.76',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:49.847',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-08-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
172333201114738',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '842.76',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:51.650',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            49 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-08-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '842.76',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-08-21 00:00:00.000',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-08-23',
                'purpose' => 'Online-Auftrag vom 23.08. zG/ Rene Fischer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172353.984.018.448
23.08.2017 EUR 00404 023 509
Zahlungsempf.: Rene Fischer
IBAN: AT264477020047290000 BIC: VBOEATWWGRA
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Fischer Rene-49085',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:52.520',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-08-23',
                'purpose' => 'Online-Auftrag vom 23.08. zG/ Uwe Schimon
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172353.984.018.418
23.08.2017 EUR 00404 023 509
Zahlungsempf.: Uwe Schimon
IBAN: AT634715020052620000 BIC: VBOEATWWNOM
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.08
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schimon Uwe-46587',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:52.800',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-09-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 172542.285.009.428
11.09.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage 8/2017
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.09
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
864,59
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '864.59',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:53.037',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            53 => 
            array (
                'depot_id' => '1',
                'category_id' => '11',
                'paydate' => '2017-09-14',
                'purpose' => 'Selbstbehalt für die REHA nach Krebstherapie',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '425.00',
                'person' => 'Kopp Adriana-43011',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-09-14 09:28:00.680',
                'updated_at' => '2017-10-20 12:44:53.837',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-09-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172634.663.368.468
20.09.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.09
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
664,59
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '664.59',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:53.247',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            55 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-09-20',
                'purpose' => 'Abscöpfer',
                'support_year' => NULL,
                'payin' => '664.59',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-09-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2017-09-21',
                'purpose' => 'Online-Auftrag vom 21.09. zG/ Manfred Stoiser
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172642.132.021.268
21.09.2017 EUR 00404 023 509
Zahlungsempf.: Manfred Stoiser
IBAN: AT583811800000027813 BIC: RZSTAT2G118
ID:
Zahlungsgrund: IVM BR Event-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.09
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Stoiser Manfred-36358',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:53.463',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-10-02',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:53.683',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-10-02',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:53.927',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            59 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2017-10-02',
                'purpose' => 'zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2017-10-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-02 00:00:00.000',
                'updated_at' => '2018-08-14 15:25:40.113',
            ),
            61 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-04',
                'purpose' => 'Betriebsratsmeeting',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '230.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-05 10:21:15.257',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-09',
            'purpose' => 'Auszahlung für vorfinanzierte Bahnkarte zum BR-Essen Salzburg am 18.10.17 (Boldrino-Kainy)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '66.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-13 08:36:54.887',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-10-10',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2018-08-13 17:53:16.873',
                'created_at' => '2017-10-13 08:57:16.790',
                'updated_at' => '2018-08-13 17:53:16.873',
            ),
            64 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2017-10-10',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2018-08-13 17:53:10.270',
                'created_at' => '2017-10-13 08:57:53.150',
                'updated_at' => '2018-08-13 17:53:10.270',
            ),
            65 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-10-10',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2017-10-10',
                'purpose' => 'Aüffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-10 00:00:00.000',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-12',
                'purpose' => 'BR-Essen für MitarbeiterInnen der Niederlassung Wien ',
                'support_year' => NULL,
                'payin' => '.00',
                'payout' => '680.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-13 08:58:35.847',
                'updated_at' => '2017-10-20 12:35:42.130',
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2017-10-12',
                'purpose' => 'Online-Auftrag vom 12.10. zG/ Jacqueline Fischer
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172854.306.011.518
12.10.2017 EUR 00404 023 509
Zahlungsempf.: Jacqueline Fischer
IBAN: AT601921080591170958 BIC: INGDAT21
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fischer BSc Jacqueline-42258',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:54.130',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2017-10-12',
                'purpose' => 'Online-Auftrag vom 12.10. zG/ Zhang Reiter
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172854.276.642.008
12.10.2017 EUR 00404 023 509
Zahlungsempf.: Zhang Reiter
IBAN: AT873812800000008714 BIC: RZSTAT2G128
ID:
Zahlungsgrund: IVM BR Event-Unterstützung Team Building Event
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
15,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Zhang Reiter Ying-46873',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:54.367',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-10-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 172864.606.058.028
13.10.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.10
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
879,80
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '879.80',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:54.630',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2017-10-17',
                'purpose' => 'Online-Auftrag vom 17.10. zG/ Gabriele Krickl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172902.498.012.948
17.10.2017 EUR 00404 023 509
Zahlungsempf.: Gabriele Krickl
IBAN: AT831200050226077886 BIC: BKAUATWW
ID:
Zahlungsgrund: IVM Heirats/Familen-Unterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 17.10
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
100,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Farnberger-Krickl Gabriele-38709',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:54.877',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-18',
                'purpose' => 'BR-Essen Salzburg - Fahrt zum Bahnhof
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:13:11.287',
                'updated_at' => '2018-08-14 14:11:00.740',
            ),
            73 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-18',
                'purpose' => 'BR-Essen Salzburg - Taxi zum Lokal
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '9.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:14:11.637',
                'updated_at' => '2018-08-14 14:10:41.477',
            ),
            74 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-18',
                'purpose' => 'BR-Essen Salzburg
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '250.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:14:50.397',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-19',
                'purpose' => 'BR-Essen Salzburg - Übernachtung
Hotel: 96,5, Ortstaxe 1,5
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '98.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:15:45.477',
                'updated_at' => '2017-10-20 12:19:56.527',
            ),
            76 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-19',
                'purpose' => 'BR-Essen Salzburg - Taxi zum bahnhof
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '7.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:16:21.920',
                'updated_at' => '2018-08-14 14:12:25.420',
            ),
            77 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-19',
                'purpose' => 'Betriebsratsessen Niedlerassung Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '410.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:17:05.480',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-10-20',
                'purpose' => 'BR-Essen Niederlassung Linz - Übernachtung
',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '94.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 12:17:57.113',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-10-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 172933.291.079.898
20.10.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.10
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
707,10
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '707.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:55.110',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            80 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-10-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '707.10',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-10-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-11-08',
                'purpose' => 'Bahnkarte und Reservierung für den 9.11., BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '22.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-10 14:10:17.870',
                'updated_at' => '2017-11-10 14:14:20.057',
            ),
            82 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-11-09',
                'purpose' => 'Fahrt Hotel - Clocktower Graz / BR-Essen Niederlassung Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '13.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-10 14:11:56.753',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-11-09',
                'purpose' => 'Übernachtung, BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '78.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-10 14:13:17.527',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-11-10',
                'purpose' => 'Rückfahrt ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-10 14:14:24.577',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-11-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 173182.511.034.178
14.11.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.11
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
913,16
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '913.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:55.357',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-11-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 173192.856.013.818
15.11.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.11
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
13,56
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '13.56',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:55.577',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2017-11-16',
                'purpose' => 'Online-Auftrag vom 16.11. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 173203.408.006.898
16.11.2017 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kostenersatz
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 16.11
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
371,54
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '371.54',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:55.797',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 173243.885.099.008
20.11.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.11
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
555,18
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '555.18',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:56.020',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            89 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-11-20',
                'purpose' => 'Abscöpfer',
                'support_year' => NULL,
                'payin' => '555.18',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2017-11-30',
            'purpose' => 'Geschenk 30 Jahre IVM (A Laffer)',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '218.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-11-30 00:00:00.000',
                'updated_at' => '2018-08-14 14:14:50.200',
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2017-12-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 173483.708.031.978
14.12.2017 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.12
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
939,79
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '939.79',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:56.253',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2017-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 173542.054.118.288
20.12.2017 EUR 00404 023 509
Zahlungsempf.: SPARBUCH
IBAN: AT261200000204046577 BIC: BKAUATWWXXX
ID:
Zahlungsgrund:
Zahlungsref.: 000204046577
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.12
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
939,79
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '939.79',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:56.480',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            93 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2017-12-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '939.79',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-12-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-12-29',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:56.727',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2017-12-29',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:56.970',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            96 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2017-12-29',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.09',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-12-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2017-12-29',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '8.36',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-12-29 00:00:00.000',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2018-01-02',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-01-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2018-01-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-01-02 00:00:00.000',
                'updated_at' => '2018-08-14 15:25:00.280',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '16',
                'paydate' => '2018-01-09',
                'purpose' => 'Online-Auftrag vom 09.01. zG/ BRF Porsche der Ange stellten
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 180093.072.039.288
09.01.2018 EUR 00404 023 509
Zahlungsempf.: BRF Porsche der Angestellten
IBAN: AT461400051210216972 BIC: BAWAATWW
ID:
Zahlungsgrund: BRF Porsche, Überweisung der IVM BR-Umlage
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
220,22
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '220.22',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:57.277',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-10',
                'purpose' => 'Online-Auftrag vom 10.01. zG/ Sabine Thomas-Kohlfü rst
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 180103.258.007.548
10.01.2018 EUR 00404 023 509
Zahlungsempf.: Sabine Thomas-Kohlfürst
IBAN: AT351700000484017638 BIC: BFKKAT2K
ID:
Zahlungsgrund: IVM BR Mobilität-Förderung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Thomas-Kohlfürst Sabine-38302',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:57.510',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-01-10',
                'purpose' => 'Online-Auftrag vom 10.01. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 180103.258.007.518
10.01.2018 EUR 00404 023 509
Zahlungsempf.: Harald Unger
IBAN: AT766000000077321169 BIC: BAWAATWW
ID:
Zahlungsgrund: IVM BR Kultur-/Sportunterstützung
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
40,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:57.800',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-01-10',
                'purpose' => 'Online-Auftrag vom 10.01. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG
Belegnr.: 180103.258.007.488
10.01.2018 EUR 00404 023 509
Zahlungsempf.: Adelheid Hackl
IBAN: AT883477700007740152 BIC: RZOOAT2L777
ID:
Zahlungsgrund: BR-Beitrag zum Punschtrinken
Zahlungsref.:
Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.01
00404023509;0000012000
IBAN: AT161200000404023509 BIC: BKAUATWW
ID: Betrag: EUR
135,00
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '135.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:58.003',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-01-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 180123.837.065.138
12.01.2018 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.01
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
942,73
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '942.73',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:58.223',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-01-19',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT
Belegnr.: 180192.597.021.778
19.01.2018 EUR 00404 023 509
Zahlungsempf.: Betriebsratskonto IVM
-TC Wien GmbH, 2331 Vösendorf
IBAN: AT161200000404023509 BIC: BKAUATWWXXX
ID:
Zahlungsgrund: BR-Umlage Aufrollung 2017
Zahlungsref.:
Zahlungszweck:
Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 19.01
1 Vösendorf, Schönbrunner Allee
IBAN: AT753225000001451707 BIC: RLNWATWWGTD
ID: Betrag: EUR
1,63
Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:36:58.473',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-01-19',
                'purpose' => 'Online-Auftrag vom 19.01. zG/ Laffer Andreas
180192651009208',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 15:38:11.833',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-19',
                'purpose' => 'Online-Auftrag vom 19.01. zG/ Laffer Andreas
180192627549768',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 15:38:30.320',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-19',
                'purpose' => 'Online-Auftrag vom 19.01. zG/ Sandra Mainka
180192627549738',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mainka Sandra-40575',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 15:39:01.807',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-19',
                'purpose' => 'Online-Auftrag vom 19.01. zG/ Ladan Boldrino-Kainy
180192627549708',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Boldrino-Kainy Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 15:39:11.087',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-01-19',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
180192597021778',
                'support_year' => NULL,
                'payin' => '1.63',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 15:39:19.413',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-01-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
180222951408908',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '346.44',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:37:39.597',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            12 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-01-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '346.44',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-01-22 00:00:00.000',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-01-24',
                'purpose' => 'BR-Quartalsmeeting, Abschied Kohlfürst',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '200.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-01-24 00:00:00.000',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.459.013.878 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Christian Ruff IBAN: AT286000000077808682 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:37:58.143',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Christian Ruff
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.459.013.848 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Christian Ruff IBAN: AT286000000077808682 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 15,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Ruff Christian-32238',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:38:09.367',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Andreas Wenzel
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.402.005.938 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Andreas Wenzel IBAN: AT261420020010516502 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wenzel BSc Andreas-35874',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:38:45.793',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Andreas Wenzel
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.402.005.908 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Andreas Wenzel IBAN: AT261420020010516502 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2017 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 29,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '29.00',
                'person' => 'Wenzel BSc Andreas-35874',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:39:01.693',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'UEBERW.zG/Peter Mlakar REF.FBAWI18011280047
ÜBERWEISUNG Belegnr.: 180261.000.231.508 2018-01-26 EUR 00404 023 509 Zahlungsempf.: Peter Mlakar Produkt: BINNEN IBAN: SI56610000003472947 BIC: HDELSI22XXX Referenznummer: ID: FBAWI18011280047 Zahlungsgrund: IVM-Mobilitaetsfoerderung Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref: Überweisungsbetrag: 40,00 Best.Nr.: 00000041801260919086/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mlakar Peter-27875',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:39:25.080',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Helmuth Schulter
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.918 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Helmuth Schulter IBAN: AT831200021325001800 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schulter Helmuth-32247',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:39:42.917',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Markus Steindl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.888 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Markus Steindl IBAN: AT873837500000019992 BIC: RZSTAT2G375 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Steindl MSc Markus-53219',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:40:09.520',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Susanne Seidinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.858 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Susanne Seidinger IBAN: AT931420020010874875 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Seidinger Susanne-15484',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:40:43.790',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Julia Windhager
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.828 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Julia Windhager IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:41:01.553',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Otmar Gschroefl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.798 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Otmar Gschroefl IBAN: AT151490022011215509 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gschröfl Otmar-14108',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:41:16.577',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Christian Moser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.758 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Christian Moser IBAN: AT171200000949041271 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Moser Christian-23868',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:41:44.717',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Christian Gruber
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.728 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Christian Gruber IBAN: AT063935800000131771 BIC: RZKTAT2K358 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gruber MSc. Christian-53608',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:42:07.870',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.698 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Maurer Michael IBAN: AT331420020010782059 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR 40EUR Kultur-/10 EUR Weiterbildung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:42:36.433',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Martin Kienreich
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.668 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Martin Kienreich IBAN: AT592081500006629315 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kienreich Martin-53000',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:42:56.933',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Lisa Ganauser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.638 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Lisa Ganauser IBAN: AT273293700000142158 BIC: RLNWATWWWRN ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ganauser MA Lisa-52353',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:43:14.543',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Florian Jud
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.608 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Florian Jud IBAN: AT853800000005303359 BIC: RZSTAT2G ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Jud BSc. Florian-53836',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:43:25.410',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Rene Fischer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.578 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Rene Fischer IBAN: AT264477020047290000 BIC: VBOEATWWGRA ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Fischer Rene-49085',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:43:51.787',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Elzbieta Bialowas
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.369.013.548 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Elzbieta Bialowas IBAN: AT502011100036066192 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:44:03.730',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-01-26',
                'purpose' => 'Online-Auftrag vom 26.01. zG/ Marietta Beltermann- Faber
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180264.330.540.568 26.01.2018 EUR 00404 023 509 Zahlungsempf.: Marietta Beltermann-Faber IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Mobilität+sport-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 26.01 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:44:19.283',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2018-01-30',
                'purpose' => 'Online-Auftrag vom 30.01. zG/ Clocktower Gastronom ie GmbH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180302.254.026.088 30.01.2018 EUR 00404 023 509 Zahlungsempf.: Clocktower Gastronomie GmbH IBAN: AT403843900000121301 BIC: RZSTAT2G439 ID: Zahlungsgrund: Zahlungsref.: 2017112 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.01 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 1.200,00 Auftr.geb.Ref: Re. 2017/112',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1200.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:44:44.240',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-02-02',
                'purpose' => 'Online-Auftrag vom 02.02. zG/ Hans-Peter Scharf
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180333.135.006.888 02.02.2018 EUR 00404 023 509 Zahlungsempf.: Hans-Peter Scharf IBAN: AT586000020810010992 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 02.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Scharf Hans-Peter-37439',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:04.277',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-02-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 180452.797.020.218 14.02.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.02 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 911,47 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '911.47',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:13.217',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            36 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-02-15',
                'purpose' => 'Br-Essen Wien Beleg 1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '840.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-02-15 00:00:00.000',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-02-15',
                'purpose' => 'Br-Essen Wien Beleg 2',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-02-15 00:00:00.000',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2018-02-15',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-02-15 00:00:00.000',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-02-15',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-02-15 00:00:00.000',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-02-28',
            'purpose' => 'Fahrtkosten (Zug, Hin - Retour) BR-Essen Graz vom 15.3.2018',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '53.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-02-28 00:00:00.000',
                'updated_at' => '2022-11-17 20:27:24.647',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-03-05',
                'purpose' => 'Online-Auftrag vom 05.03. zG/ Otmar Gschröfl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180644.266.891.418 05.03.2018 EUR 00404 023 509 Zahlungsempf.: Otmar Gschröfl IBAN: AT151490022011215509 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 05.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 15,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Gschröfl Otmar-14108',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:25.407',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-03-05',
                'purpose' => 'Online-Auftrag vom 05.03. zG/ Matej Petak
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180644.266.891.388 05.03.2018 EUR 00404 023 509 Zahlungsempf.: Matej Petak IBAN: AT172032032202880112 BIC: ASPKAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 05.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Petak Matej-49061',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:42.960',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-03-05',
                'purpose' => 'Online-Auftrag vom 05.03. zG/ Elzbieta Bialowas
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180644.266.891.358 05.03.2018 EUR 00404 023 509 Zahlungsempf.: Elzbieta Bialowas IBAN: AT502011100036066192 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 05.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 15,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:51.733',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-13',
                'purpose' => 'BR-Essen Linz, ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '460.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-13 00:00:00.000',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-03-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 180733.644.260.838 14.03.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.03 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 885,40 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '885.40',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:45:59.203',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-14',
                'purpose' => 'BR-Essen salzburg',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '150.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-14 00:00:00.000',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-14',
                'purpose' => 'BR-Essen Salzburg Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '57.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-14 00:00:00.000',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-15',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '490.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-15 00:00:00.000',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-15',
                'purpose' => 'BR-Essen Graz, Taxi ins hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-15 00:00:00.000',
                'updated_at' => '2018-08-16 10:06:53.897',
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-03-15',
                'purpose' => 'BR-Essen Graz, Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '103.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-03-15 00:00:00.000',
                'updated_at' => '2018-08-14 15:13:03.153',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.498 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 1,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:46:30.557',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.468 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2018-Rest Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 39,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '39.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:46:31.327',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.438 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2017 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:46:47.390',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.408 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 10,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:46:59.657',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Thomas Luger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.378 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Thomas Luger IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2017 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Luger MSc Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:47:13.850',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Thomas Luger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.348 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Thomas Luger IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Luger MSc Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:47:27.813',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Patrik Maier
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180792.207.004.318 20.03.2018 EUR 00404 023 509 Zahlungsempf.: Patrik Maier IBAN: AT673810200003019114 BIC: RZSTAT2G102 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maier BSc Patrik-53052',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:47:51.497',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-04-03',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.70',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:47:59.123',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-04-03',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:48:12.163',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            60 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2018-04-03',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-04-03 00:00:00.000',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2018-04-03',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-04-03 00:00:00.000',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-04-04',
                'purpose' => 'Online-Auftrag vom 04.04. zG/ Peter Schulz
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180942.494.011.998 04.04.2018 EUR 00404 023 509 Zahlungsempf.: Peter Schulz IBAN: AT831420020011651055 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 36,90 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '36.90',
                'person' => 'Schulz Peter-25736',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:48:29.957',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-04-04',
                'purpose' => 'Online-Auftrag vom 04.04. zG/ Peter Schulz
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 180942.494.011.968 04.04.2018 EUR 00404 023 509 Zahlungsempf.: Peter Schulz IBAN: AT831420020011651055 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schulz Peter-25736',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:48:45.833',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-04-10',
                'purpose' => 'Online-Auftrag vom 10.04. zG/ Igor Mandic
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 181004.054.005.958 10.04.2018 EUR 00404 023 509 Zahlungsempf.: Igor Mandic IBAN: AT793427600000559484 BIC: RZOOAT2L276 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mandic Igor-35806',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:49:01.353',
                'updated_at' => '2019-02-07 10:02:39.453',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-04-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 181024.537.016.248 12.04.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.04 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 923,60 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '923.60',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:49:09.590',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-04-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 181103.564.081.128 20.04.2018 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.04 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 336,87 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '336.87',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:49:16.020',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            67 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-04-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '336.87',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-04-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-04-23',
                'purpose' => 'Online-Auftrag vom 22.04. zG/ GIS GEBÜHREN INFO SE RVICE GMBH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 181133.900.047.568 23.04.2018 EUR 00404 023 509 Zahlungsempf.: GIS GEBÜHREN INFO SERVICE GMBH IBAN: AT673100000404011011 BIC: RZBAATWW ID: Zahlungsgrund: Zahlungsref.: 119000868499 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.04 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 52,66 Auftr.geb.Ref:
--> wurde rückerstattet',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '52.66',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:54:53.360',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-05-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 181342.336.031.968 14.05.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.05 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 914,06 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '914.06',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:04.033',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            70 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-05-17',
                'purpose' => 'BR-Essen wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '700.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-05-17 00:00:00.000',
                'updated_at' => '2018-08-14 15:11:09.277',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-05-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 181424.030.100.608 22.05.2018 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 861,40 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '861.40',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:11.907',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            72 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-05-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '861.40',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-05-22 00:00:00.000',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-07',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '380.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-07 00:00:00.000',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-07',
                'purpose' => 'BR-Essen Graz, Hinfahrt öbb',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-07 00:00:00.000',
                'updated_at' => '2022-11-17 20:27:29.500',
            ),
            75 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-07',
                'purpose' => 'BR-Essen Graz, Hinfahrt ÖBB Reservierung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-07 00:00:00.000',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-07',
                'purpose' => 'BR-Essen Graz Übernachtung Ortstaxe',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-07 00:00:00.000',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-07',
                'purpose' => 'BR-Essen Graz Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '113.16',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-07 00:00:00.000',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-08',
                'purpose' => 'BR-Essen Graz Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '19.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-08 00:00:00.000',
                'updated_at' => '2018-08-16 10:09:18.797',
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-06-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 181653.555.037.328 14.06.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.06 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 921,54 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '921.54',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:22.067',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-06-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 181714.864.078.228 20.06.2018 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 921,54 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '921.54',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:27.880',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            81 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-06-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '921.54',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-06-22',
                'purpose' => 'Förderung Anfahrt zum IVM Sommerfest
Faber, Mainka: jeweils 2.40',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.80',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-06-22 00:00:00.000',
                'updated_at' => '2019-12-04 13:40:41.680',
            ),
            83 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-07-02',
                'purpose' => 'Doppelt eingelesen 
KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:35:07.880',
                'created_at' => '2018-08-13 08:55:38.777',
                'updated_at' => '2019-12-04 14:35:07.880',
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-07-02',
                'purpose' => 'Doppelt eingelesen 
PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:35:16.823',
                'created_at' => '2018-08-13 08:55:39.230',
                'updated_at' => '2019-12-04 14:35:16.823',
            ),
            85 => 
            array (
                'depot_id' => '5',
                'category_id' => '14',
                'paydate' => '2018-07-02',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-07-02 00:00:00.000',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '5',
                'category_id' => '21',
                'paydate' => '2018-07-02',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-07-02 00:00:00.000',
                'updated_at' => '2018-08-14 15:23:21.343',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-07-02',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:17.363',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-07-02',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:17.883',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-07-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 181944.702.061.418 13.07.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.07 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 1.059,64 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '1059.64',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:46.067',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-07-13',
                'purpose' => 'Doppelt eingelesen 
Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
181944702061418',
                'support_year' => NULL,
                'payin' => '1059.64',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:34:56.740',
                'created_at' => '2019-05-22 10:42:16.587',
                'updated_at' => '2019-12-04 14:34:56.740',
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-07-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 182013.411.108.028 20.07.2018 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.07 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 1.056,14 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1056.14',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:55:53.223',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            92 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-07-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '1056.14',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-07-20 00:00:00.000',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-07-20',
                'purpose' => 'Doppelt eingelesen 
Abschöpfer A01 / 00000000641 zG/ SPARBUCH
182013411108028',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1056.14',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:34:31.147',
                'created_at' => '2019-05-22 10:42:16.330',
                'updated_at' => '2019-12-04 14:34:31.147',
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-02',
                'purpose' => 'Online-Auftrag vom 02.08. zG/ GIS GEBÜHREN INFO SE RVICE GMBH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 182143.830.000.348 02.08.2018 EUR 00404 023 509 Zahlungsempf.: GIS GEBÜHREN INFO SERVICE GMBH IBAN: AT673100000404011011 BIC: RZBAATWW ID: Zahlungsgrund: Zahlungsref.: 109004601446 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 02.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 57,92 Auftr.geb.Ref:
--> wurde rückerstattet',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '57.92',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:58:02.827',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-02',
                'purpose' => 'Online-Auftrag vom 02.08. zG/ GIS GEBÜHREN INFO SE RVICE GMBH
182143830000348',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '57.92',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:16.077',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-13',
                'purpose' => 'Fehlbuchung retour Gutschrift a/Ing. Andreas Laffer
Fehler: bei QR-Code-Zahlung wird erstes Konto verwendet',
                'support_year' => NULL,
                'payin' => '57.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:58:13.027',
                'updated_at' => '2019-12-04 14:31:44.227',
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-13',
                'purpose' => 'Fehlbuchung retour Gutschrift a/Ing. Andreas Laffer
Fehler: bei QR-Code-Zahlung wird erstes Konto verwendet',
                'support_year' => NULL,
                'payin' => '52.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-13 08:58:53.997',
                'updated_at' => '2019-12-04 14:31:52.690',
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-13',
                'purpose' => 'Doppelt eingelesen 
Fehlbuchung retour Gutschrift a/Ing. Andreas Laffer
182252942022408',
                'support_year' => NULL,
                'payin' => '52.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:32:48.330',
                'created_at' => '2019-05-22 10:42:15.027',
                'updated_at' => '2019-12-04 14:32:48.330',
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2018-08-13',
                'purpose' => 'Doppelt eingelesen 
Fehlbuchung retour Gutschrift a/Ing. Andreas Laffer
182252942022378',
                'support_year' => NULL,
                'payin' => '57.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:32:55.903',
                'created_at' => '2019-05-22 10:42:15.290',
                'updated_at' => '2019-12-04 14:32:55.903',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-08-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 182263.225.867.368 
EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.05 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 908,35 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '908.35',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-14 00:00:00.000',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-08-14',
                'purpose' => 'Doppelt eingelesen 
Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
182263225867368',
                'support_year' => NULL,
                'payin' => '908.35',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:32:40.000',
                'created_at' => '2019-05-22 10:42:14.770',
                'updated_at' => '2019-12-04 14:32:40.000',
            ),
            2 => 
            array (
                'depot_id' => '5',
                'category_id' => '22',
                'paydate' => '2018-08-17',
                'purpose' => 'Auszahlung in Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '61.64',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-12-04 14:36:39.707',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2018-08-17',
                'purpose' => 'Einzahlung von BAWAG-Konto',
                'support_year' => NULL,
                'payin' => '61.64',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-12-04 14:37:52.177',
                'updated_at' => '2019-12-04 14:38:45.937',
            ),
            4 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-08-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '961.01',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:34:14.147',
                'updated_at' => '2018-11-23 10:50:08.927',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-08-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
182324258094158',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '961.01',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:14.540',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-08-21',
                'purpose' => 'Online-Auftrag vom 21.08. zG/ Bernhard Tscharre
182334663013838',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Tscharre Bernhard-52952',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:13.700',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-09-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 182564.438.262.708 13.09.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.09 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 959,58 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '959.58',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:13.427',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            8 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-09-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '919.58',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:35:03.653',
                'updated_at' => '2018-11-23 10:49:48.940',
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-09-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
182633159399068',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '919.58',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:13.163',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-09-26',
                'purpose' => 'Online-Auftrag vom 26.09. zG/ Wolfgang Schönauer
182694756009078',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Schönauer-Gustenau Wolfgang-49154',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:12.147',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-10-01',
                'purpose' => 'KONTOAUSZUGSGEBÜHR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:11.627',
                'updated_at' => '2022-11-17 20:08:37.700',
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:11.890',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-10-02',
                'purpose' => 'Online-Auftrag vom 02.10. zG/ Richard SKRIWANEK
182753126024948',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:11.380',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-10-10',
                'purpose' => 'Betriebsratstreffen',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '215.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:57:32.633',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-10-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 182882.991.048.358 15.10.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.10 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 825,34 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '825.34',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:10.273',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            16 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-10-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '767.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:35:46.080',
                'updated_at' => '2018-11-23 10:49:57.837',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-10-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
182954747102418',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '767.16',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:10.057',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            18 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-10-23',
                'purpose' => 'BR-Essen Salzburg, Hotel',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '57.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:55:50.460',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-10-23',
                'purpose' => 'BR-Essen Salzburg, Essen in "die Weisse"',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '275.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:56:44.623',
                'updated_at' => '2019-03-21 12:54:12.877',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2018-10-23',
                'purpose' => 'Online-Auftrag vom 23.10. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 182962.153.008.168 23.10.2018 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Kostenersatz Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 23.10 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 411,72 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '411.72',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:09.847',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '16',
                'paydate' => '2018-10-25',
                'purpose' => 'Online-Auftrag vom 25.10. zG/ BRF Porsche der Ange stellten
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 182982.849.005.458 25.10.2018 EUR 00404 023 509 Zahlungsempf.: BRF Porsche der Angestellten IBAN: AT461400051210216972 BIC: BAWAATWW ID: Zahlungsgrund: BRF Porsche, Überweisung der IVM BR-Umlage Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 25.10 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 131,04 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '131.04',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:09.617',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2018-11-06',
                'purpose' => 'Online-Auftrag vom 06.11. zG/ Julia Windhager
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183104.958.010.068 06.11.2018 EUR 00404 023 509 Zahlungsempf.: Julia Windhager IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:08.340',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-11-06',
                'purpose' => 'Online-Auftrag vom 06.11. zG/ Sigrid Stieblehner
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183104.958.010.038 06.11.2018 EUR 00404 023 509 Zahlungsempf.: Sigrid Stieblehner IBAN: AT281420020011947604 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stieblehner Sigrid-37139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:08.617',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-11-06',
                'purpose' => 'Online-Auftrag vom 06.11. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183104.958.010.008 06.11.2018 EUR 00404 023 509 Zahlungsempf.: Gerhard Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:08.883',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2018-11-06',
                'purpose' => 'Online-Auftrag vom 06.11. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183104.958.009.978 06.11.2018 EUR 00404 023 509 Zahlungsempf.: Adelheid Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:09.150',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-11-06',
                'purpose' => 'Online-Auftrag vom 06.11. zG/ Christoph Gerstberge r
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183104.958.009.948 06.11.2018 EUR 00404 023 509 Zahlungsempf.: Christoph Gerstberger IBAN: AT666000040310069258 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität+Sport-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 06.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Gerstberger Christoph-50016',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:09.383',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2018-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Igor Mandic
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183163.435.023.548 12.11.2018 EUR 00404 023 509 Zahlungsempf.: Igor Mandic IBAN: AT793427600000559484 BIC: RZOOAT2L276 ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Mandic Igor-35806',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:06.817',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2018-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Stefan Pirker
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183163.435.023.518 12.11.2018 EUR 00404 023 509 Zahlungsempf.: Stefan Pirker IBAN: AT563503800000016089 BIC: RVSAAT2S038 ID: Zahlungsgrund: IVM Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Pirker Stefan-39538',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:07.140',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Arabela Tircovnicu
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183163.435.023.488 12.11.2018 EUR 00404 023 509 Zahlungsempf.: Arabela Tircovnicu IBAN: AT851921080858200159 BIC: INGBATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Tircovnicu Arabela-56180',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:07.460',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Malte Quenstedt
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183163.435.023.448 12.11.2018 EUR 00404 023 509 Zahlungsempf.: Malte Quenstedt IBAN: AT461921080822488468 BIC: INGBATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Quenstedt Malte-51652',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:07.760',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2018-11-12',
                'purpose' => 'Online-Auftrag vom 12.11. zG/ Paulina Gajarska
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183163.435.023.418 12.11.2018 EUR 00404 023 509 Zahlungsempf.: Paulina Gajarska IBAN: AT862011128851520700 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.11 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gajarska Paulina-52738',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:08.053',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-11-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 183183.931.015.868 14.11.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.11 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 952,85 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '952.85',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:06.487',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            33 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-15',
                'purpose' => 'BR-Essen Linz, Zug nach Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '18.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:51:19.917',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-15',
                'purpose' => 'BR-Essen Linz, Taxi zum Bahnhof',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:51:59.313',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-15',
                'purpose' => 'BR-Essen Linz, Essen in La Ruffa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '550.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:53:03.857',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-15',
                'purpose' => 'BR-Essen Linnz, Taxu zum Lokal La Ruffa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '9.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:54:15.073',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-15',
                'purpose' => 'BR-Essen Linz, Zug Wien Linz + Reservierung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '21.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:54:58.947',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-16',
                'purpose' => 'BR-Essen Linz, Taxi nach Hause',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:50:15.893',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-11-22',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:36:44.987',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2018-11-22',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:37:43.573',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Cafe Einstein',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '510.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:38:59.970',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Punsch - Einsatz, Beleg 9',
                'support_year' => NULL,
                'payin' => '20.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:40:14.890',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 8',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:41:54.243',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 7',
                'support_year' => NULL,
                'payin' => '4.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:42:42.337',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 6',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:43:35.837',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 5',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '8.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:44:07.820',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 4',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:44:38.920',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 3',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '8.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:45:14.580',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 2',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '8.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:45:39.730',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-11-22',
                'purpose' => 'BR-Essen Wien, Christkindl-Markt Beleg 1 ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-23 10:46:11.147',
                'updated_at' => '2019-03-21 12:54:28.453',
            ),
            51 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-12-03',
                'purpose' => 'Briefmarken und Kuverts für BR-Wahl',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '654.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 12:56:04.033',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2018-12-03',
                'purpose' => 'Kuverts BR-Wahl',
                'support_year' => NULL,
                'payin' => '.00',
                'payout' => '14.94',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 12:58:04.870',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2018-12-05',
                'purpose' => 'Online-Auftrag vom 05.12. zG/ Natalia Petrova-Koru dzhiyski
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183393.156.010.608 05.12.2018 EUR 00404 023 509 Zahlungsempf.: Natalia Petrova-Korudzhiyski IBAN: AT682020200001232131 BIC: SPAMAT21 ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 05.12 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Petrova-Korudzhiyski Natalia-34174',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:06.130',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-12-07',
                'purpose' => 'Online-Auftrag vom 07.12. zG/ Christian Gruber
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183413.966.004.548 07.12.2018 EUR 00404 023 509 Zahlungsempf.: Christian Gruber IBAN: AT333900000005131776 BIC: RZKTAT2K ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.12 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 20,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => 'Gruber Christian-53608',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:04.870',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-12-07',
                'purpose' => 'Online-Auftrag vom 07.12. zG/ Liviu Malutan
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183413.966.004.518 07.12.2018 EUR 00404 023 509 Zahlungsempf.: Liviu Malutan IBAN: AT382081500042098228 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.12 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 20,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => 'Malutan Liviu-41234',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:05.243',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2018-12-07',
                'purpose' => 'Online-Auftrag vom 07.12. zG/ Istvan Rusics
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183413.966.004.488 07.12.2018 EUR 00404 023 509 Zahlungsempf.: Istvan Rusics IBAN: AT563812200000062943 BIC: RZSTAT2G122 ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.12 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 20,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => 'Rüsics Istvan-55883',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:05.603',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2018-12-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 183482.547.025.288 14.12.2018 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.12 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 917,98 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '917.98',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:04.477',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2018-12-19',
                'purpose' => 'Online-Auftrag vom 19.12. zG/ Liviu Malutan
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183533.756.020.158 19.12.2018 EUR 00404 023 509 Zahlungsempf.: Liviu Malutan IBAN: AT382081500042098228 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Hilfestellung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 19.12 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 300,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '300.00',
                'person' => 'Malutan Liviu-41234',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:04.067',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2018-12-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '328.07',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:04:06.137',
                'updated_at' => '2019-03-21 13:22:34.963',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2018-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 183543.936.102.118 20.12.2018 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.12 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 328,07 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '328.07',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:03.663',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            61 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2018-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.64',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:20:33.587',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2018-12-31',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '10.54',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:21:15.813',
                'updated_at' => '2019-03-21 13:24:54.893',
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-12-31',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:02.837',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2018-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:03.257',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-01-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 190152.756.715.748 15.01.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.01 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 932,15 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '932.15',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:02.407',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            66 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-01-16',
                'purpose' => 'Konstituierung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '235.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:29:11.390',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-01-18',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 190183.789.009.788 18.01.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage 13/2018 Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 18.01 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 0,78 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:01.980',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            68 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-01-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '929.43',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:25:06.663',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-01-21',
                'purpose' => 'Beratung M. Winter wg. Einstufung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '12.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 14:58:48.183',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-01-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190214.129.102.518 21.01.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.01 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 929,43 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '929.43',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:01.537',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ Sigrid Stieblehner
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.258 29.01.2019 EUR 00404 023 509 Zahlungsempf.: Sigrid Stieblehner IBAN: AT281420020011947604 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stieblehner Sigrid-37139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:58.140',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ JULIA WINDHAGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.228 29.01.2019 EUR 00404 023 509 Zahlungsempf.: JULIA WINDHAGER IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:58.657',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ JULIA WINDHAGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.198 29.01.2019 EUR 00404 023 509 Zahlungsempf.: JULIA WINDHAGER IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:59.157',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ Ladan Boldrino-Kainy
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.168 29.01.2019 EUR 00404 023 509 Zahlungsempf.: Ladan Boldrino-Kainy IBAN: AT922011182928929800 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Boldrino-Kainy Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:59.657',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ Stefan Scheichl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.138 29.01.2019 EUR 00404 023 509 Zahlungsempf.: Stefan Scheichl IBAN: AT051200000786066258 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Scheichl Stefan-15634',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:00.133',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ Igor Mandic
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.108 29.01.2019 EUR 00404 023 509 Zahlungsempf.: Igor Mandic IBAN: AT793427600000559484 BIC: RZOOAT2L276 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mandic Igor-35806',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:00.613',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-01-29',
                'purpose' => 'Online-Auftrag vom 29.01. zG/ Ladan Boldrino-Kainy
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190293.447.022.078 29.01.2019 EUR 00404 023 509 Zahlungsempf.: Ladan Boldrino-Kainy IBAN: AT922011182928929800 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 29.01 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 10,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Boldrino-Kainy Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:42:01.080',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-02-07',
                'purpose' => 'Online-Auftrag vom 07.02. zG/ Laffer Andreas
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190382.772.014.588 07.02.2019 EUR 00404 023 509 Zahlungsempf.: Laffer Andreas IBAN: AT521200000717401731 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.02 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:57.610',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-02-12',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '400.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:38:48.767',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-02-12',
                'purpose' => 'Anfahrt Graz-Puntigam - Bahnkarte + Reservierung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '23.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:42:56.137',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-02-13',
                'purpose' => 'BR-Essen Graz, Rückfahrt',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 14:55:26.860',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-02-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 190454.425.030.338 14.02.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.02 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 914,15 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '914.15',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:57.080',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            83 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '634.15',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:25:40.940',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190512.792.154.328 20.02.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 634,15 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '634.15',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:56.560',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-03-04',
                'purpose' => 'Online-Auftrag vom 04.03. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190632.569.007.988 04.03.2019 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Kultur-Förderung+Mobilität Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:54.920',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-03-04',
                'purpose' => 'Online-Auftrag vom 04.03. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190632.569.007.958 04.03.2019 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:55.467',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-03-04',
                'purpose' => 'Online-Auftrag vom 04.03. zG/ LADAN BOLDRINO-KAINY
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190632.569.007.928 04.03.2019 EUR 00404 023 509 Zahlungsempf.: LADAN BOLDRINO-KAINY IBAN: AT922011182928929800 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Boldrino-Kainy Ladan-15822',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:56.017',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-03-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 190732.288.041.918 14.03.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.03 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 909,22 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '909.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:54.377',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            89 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-03-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '789.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:26:23.437',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-03-20',
                'purpose' => 'Online-Auftrag vom 20.03. zG/ Bianca Lang
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190793.774.007.738 20.03.2019 EUR 00404 023 509 Zahlungsempf.: Bianca Lang IBAN: AT162081500041491986 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Lang Bianca-53012',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:53.280',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-03-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190793.636.074.088 20.03.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 789,22 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '789.22',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:53.830',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            92 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-03-21',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2500.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:26:59.780',
                'updated_at' => '2019-12-04 14:01:54.020',
            ),
            93 => 
            array (
                'depot_id' => '1',
                'category_id' => '22',
                'paydate' => '2019-03-21',
                'purpose' => 'Auffüllen Handkassa',
                'support_year' => NULL,
                'payin' => '2500.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:27:20.887',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-03-21',
                'purpose' => 'BR-Essen Linz, Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '59.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 13:44:30.503',
                'updated_at' => '2019-10-23 14:31:17.747',
            ),
            95 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-03-21',
                'purpose' => 'Hin und Rückfahrt Linz, BR-Essen inkl. Reservierung und LinzTicket',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '47.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-21 15:00:09.237',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-03-22',
                'purpose' => 'BR-Essen Linz, ',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '285.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-03-22 09:23:05.520',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-04-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '2.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:52.147',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:52.723',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Janos Mizser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.267.027.088 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Janos Mizser IBAN: AT292032032302774570 BIC: ASPKAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mizser Janos-57481',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:40.930',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Thomas Felkel
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.267.027.058 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Thomas Felkel IBAN: AT191100013421824700 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Felkel Thomas-54918',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:41.513',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Maciej Glowacki
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.243.004.308 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Maciej Glowacki IBAN: AT131420020012530359 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Glowacki Maciej-56201',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:42.090',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Michael Toth
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.908 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Michael Toth IBAN: AT981921080297463392 BIC: INGBATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:43.780',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Mariam Mosham
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.878 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Mariam Mosham IBAN: AT441100011871604200 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mosham Mariam-46021',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:44.373',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Martin Kraker
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.848 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Martin Kraker IBAN: AT171420020012087773 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Kraker Martin-55836',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:44.947',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Florian Strauß
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.818 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Florian Strauß IBAN: AT343932200000134163 BIC: RZKTAT2K322 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Strauß Florian-55299',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:45.557',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ ALEXANDRA PERNSTICH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.788 08.04.2019 EUR 00404 023 509 Zahlungsempf.: ALEXANDRA PERNSTICH IBAN: AT633800000007822166 BIC: RZSTAT2G ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pernstich Alexandra-49128',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:47.413',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ ALEXANDRA PERNSTICH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.758 08.04.2019 EUR 00404 023 509 Zahlungsempf.: ALEXANDRA PERNSTICH IBAN: AT633800000007822166 BIC: RZSTAT2G ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Pernstich Alexandra-49128',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:47.987',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ THOMAS LUGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.728 08.04.2019 EUR 00404 023 509 Zahlungsempf.: THOMAS LUGER IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 10,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Luger Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:48.570',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Christian Gruber
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.698 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Christian Gruber IBAN: AT333900000005131776 BIC: RZKTAT2K ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gruber Christian-53608',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:49.257',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Sigrid Stieblehner
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.668 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Sigrid Stieblehner IBAN: AT281420020011947604 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stieblehner Sigrid-37139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:49.830',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Michael Toth
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.628 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Michael Toth IBAN: AT981921080297463392 BIC: INGBATWW ID: Zahlungsgrund: IVM BR Kultur-/Sport-/Weiterb.-Förderung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 50,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:50.410',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Julia Anna Rothwein
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.598 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Julia Anna Rothwein IBAN: AT633837000003032687 BIC: RZSTAT2G370 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rothwein Julia-53514',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:50.967',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-08',
                'purpose' => 'Online-Auftrag vom 08.04. zG/ Markus Hofer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190982.207.018.568 08.04.2019 EUR 00404 023 509 Zahlungsempf.: Markus Hofer IBAN: AT643286500000617928 BIC: RLNWATWWNSM ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hofer Markus-53959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:51.543',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-04-09',
                'purpose' => 'Online-Auftrag vom 09.04. zG/ Laffer Andreas
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190992.481.016.828 09.04.2019 EUR 00404 023 509 Zahlungsempf.: Laffer Andreas IBAN: AT521200000717401731 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Sportunterstützung2018+2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:37.970',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-09',
                'purpose' => 'Online-Auftrag vom 09.04. zG/ Manfred Stoiser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190992.472.004.728 09.04.2019 EUR 00404 023 509 Zahlungsempf.: Manfred Stoiser IBAN: AT583811800000027813 BIC: RZSTAT2G118 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Stoiser Manfred-36358',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:38.583',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-04-09',
                'purpose' => 'Online-Auftrag vom 09.04. zG/ Jürgen Steiner
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190992.472.004.698 09.04.2019 EUR 00404 023 509 Zahlungsempf.: Jürgen Steiner IBAN: AT453300000003203130 BIC: RLBBAT2E ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Steiner Jürgen-55163',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:39.170',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-04-09',
                'purpose' => 'Online-Auftrag vom 09.04. zG/ MARIETTA BELTERMANN- FABER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190992.472.004.668 09.04.2019 EUR 00404 023 509 Zahlungsempf.: MARIETTA BELTERMANN-FABER IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:39.760',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-09',
                'purpose' => 'Online-Auftrag vom 09.04. zG/ MARIETTA BELTERMANN- FABER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 190992.472.004.638 09.04.2019 EUR 00404 023 509 Zahlungsempf.: MARIETTA BELTERMANN-FABER IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:40.343',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-11',
                'purpose' => 'Online-Auftrag vom 11.04. zG/ Benjamin Durstmüller
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191013.206.005.368 11.04.2019 EUR 00404 023 509 Zahlungsempf.: Benjamin Durstmüller IBAN: AT166000000078907908 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Durstmüller Benjamin-46796',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:35.390',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-11',
                'purpose' => 'Online-Auftrag vom 11.04. zG/ Gabriele Farnberger- Krickl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191013.206.005.338 11.04.2019 EUR 00404 023 509 Zahlungsempf.: Gabriele Farnberger-Krickl IBAN: AT831200050226077886 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Farnberger-Krickl Gabriele-38709',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:36.757',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-04-11',
                'purpose' => 'Online-Auftrag vom 11.04. zG/ Benjamin Durstmüller
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191013.206.005.308 11.04.2019 EUR 00404 023 509 Zahlungsempf.: Benjamin Durstmüller IBAN: AT166000000078907908 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.04 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Durstmüller Benjamin-46796',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:37.353',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-04-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 191023.479.023.018 12.04.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.04 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 912,92 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '912.92',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:41:33.390',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2019-05-03',
                'purpose' => 'Überweisung zG/Maker Media GmbH Leserser REF.FBAWI19050155002
ÜBERWEISUNG Belegnr.: 191231.000.295.648 2019-05-03 EUR 00404 023 509 Zahlungsempf.: Maker Media GmbH Leserservice Produkt: BINNEN IBAN: DE69250100300477363306 BIC: PBNKDEFFXXX Referenznummer: ID: FBAWI19050155002 Zahlungsgrund: Zahlungsref.: 1012896689 Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 57,00 Auftr.geb.Ref: 4716520293 Überweisungsbetrag: 57,00 Best.Nr.: 00000041905030912217/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '57.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:22.500',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-05-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 191344.330.025.018 14.05.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.05 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 920,37 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '920.37',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:22.147',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-05-15',
                'purpose' => 'Online-Auftrag vom 15.05. zG/ Sebastian Ghisu
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191354.817.017.678 15.05.2019 EUR 00404 023 509 Zahlungsempf.: Sebastian Ghisu IBAN: AT043836700002062503 BIC: RZSTAT2G367 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 15.05 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ghisu Sebastian-55914',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:21.923',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-05-15',
                'purpose' => 'BR-Essen Graz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '448.20',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-23 14:28:51.777',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-05-16',
                'purpose' => 'BR-Essen Graz Übernachtung',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '69.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-23 14:29:53.633',
                'updated_at' => '2019-10-23 14:34:13.860',
            ),
            28 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-05-16',
                'purpose' => 'BR-Essen Wien',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '520.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-23 14:33:24.623',
                'updated_at' => '2019-10-23 14:34:24.387',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-05-20',
                'purpose' => 'Online-Auftrag vom 20.05. zG/ Melanie Lorenz
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191402.702.011.528 20.05.2019 EUR 00404 023 509 Zahlungsempf.: Melanie Lorenz IBAN: AT811420020012698497 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Lorenz Melanie-53038',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:21.007',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2019-05-20',
                'purpose' => 'Online-Auftrag vom 20.05. zG/ Claudia Sello
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191402.702.011.498 20.05.2019 EUR 00404 023 509 Zahlungsempf.: Claudia Sello IBAN: AT331200052214151501 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 39,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '39.00',
                'person' => 'Sello Claudia-56045',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:21.253',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2019-05-20',
                'purpose' => 'Online-Auftrag vom 20.05. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191402.702.011.468 20.05.2019 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: IVM BR-Essen Kostenersatz Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 148,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '148.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:21.477',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-05-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191402.699.595.078 20.05.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 812,79 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '812.79',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-05-22 10:48:21.700',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            33 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-05-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '812.79',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-12-04 13:55:55.217',
                'updated_at' => '2019-12-04 13:57:22.817',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2019-05-22',
                'purpose' => 'Fehlbuchung retour',
                'support_year' => NULL,
                'payin' => '57.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => '2019-12-04 14:22:37.397',
                'created_at' => '2019-05-22 10:48:30.150',
                'updated_at' => '2019-12-04 14:22:37.397',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2019-05-22',
                'purpose' => 'Fehlbuchung retour 
Gutschrift a/Ing. Andreas Laffer
GUTSCHRIFT Belegnr.: 191423.501.026.198 22.05.2019 EUR 00404 023 509 Zahlungsempf.: Angestelltenbetriebsrat IVM TC Wien IBAN: AT161200000404023509 BIC: BKAUATWW ID: Zahlungsgrund: Fehlbuchung retour Zahlungsref.: Zahlungszweck: Auftraggeber: Ing. Andreas Laffer Valuta: 22.05 IBAN: AT521200000717401731 BIC: BKAUATWW ID: Betrag: EUR 57,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '57.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:09:12.587',
                'updated_at' => '2019-12-04 14:30:26.427',
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-05-24',
                'purpose' => 'Online-Auftrag vom 24.05. zG/ WOLFGANG SCHÖNAUER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191444.075.028.068 24.05.2019 EUR 00404 023 509 Zahlungsempf.: WOLFGANG SCHÖNAUER IBAN: AT963298500000002063 BIC: RLNWATWWZDF ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.05 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schönauer-Gustenau Wolfgang-49154',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:02.867',
                'updated_at' => '2019-10-15 14:16:27.127',
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Überweisung zG/Gabor Bilinovics REF.FBAWI19060533703
ÜBERWEISUNG Belegnr.: 191621.001.414.198 Seite 1/2 2019-06-11 EUR 00404 023 509 Zahlungsempf.: Gabor Bilinovics Produkt: BINNEN IBAN: DE54700202700010343540 BIC: HYVEDEMMXXX Referenznummer: ID: FBAWI19060533703 Zahlungsgrund: IVM BR Mobilitaet-Foerderung Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref: Überweisungsbetrag: 40,00 Best.Nr.: 00000041906111459139/1ÜBERWEISUNG Belegnr.: 191621.001.414.198 Seite 2/2 2019-06-11 EUR 00404 023 509 Begünstigter: ID: Urspr. Auftraggeber: Laffer Andreas IVM BR ID:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bilinovics Gabor-55418',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:16.603',
                'updated_at' => '2019-10-15 14:11:40.220',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Gerold Brunmair
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.758 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Gerold Brunmair IBAN: AT942032020001046481 BIC: ASPKAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => '2019',
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Brunmair Gerold-54298',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:17.187',
                'updated_at' => '2019-10-15 14:12:32.677',
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.728 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Maurer Michael IBAN: AT331420020010782059 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2019',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:17.523',
                'updated_at' => '2019-10-15 14:12:58.283',
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Simon Wasserthal
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.698 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Simon Wasserthal IBAN: AT471860000016567877 BIC: VKBLAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wasserthal Simon-52901',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:17.793',
                'updated_at' => '2019-10-15 14:13:12.753',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Christian Oberpertin ger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.668 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität+Sport-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:18.050',
                'updated_at' => '2019-10-15 14:13:38.827',
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.638 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Maurer Michael IBAN: AT331420020010782059 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:18.323',
                'updated_at' => '2019-10-15 14:13:57.400',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Susanne Seidinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.608 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Susanne Seidinger IBAN: AT931420020010874875 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Seidinger Susanne-15484',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:18.593',
                'updated_at' => '2019-10-15 14:14:25.693',
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Gerold Brunmair
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.578 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Gerold Brunmair IBAN: AT942032020001046481 BIC: ASPKAT2L ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Brunmair Gerold-54298',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:18.857',
                'updated_at' => '2019-10-15 14:14:53.740',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Elzbieta Bialowas
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.548 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Elzbieta Bialowas IBAN: AT502011100036066192 BIC: GIBAATWW ID: Zahlungsgrund: IVM BR Event-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 15,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:19.137',
                'updated_at' => '2019-10-15 14:15:10.137',
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Maurer Michael
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.518 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Maurer Michael IBAN: AT331420020010782059 BIC: EASYATW1 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:19.427',
                'updated_at' => '2019-10-15 14:15:35.677',
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Simon Wasserthal
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.488 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Simon Wasserthal IBAN: AT471860000016567877 BIC: VKBLAT2L ID: Zahlungsgrund: IVM BR Mobilität-Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wasserthal Simon-52901',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:19.747',
                'updated_at' => '2019-10-15 14:15:55.793',
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-06-11',
                'purpose' => 'Online-Auftrag vom 11.06. zG/ Simon Wasserthal
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191624.732.023.448 11.06.2019 EUR 00404 023 509 Zahlungsempf.: Simon Wasserthal IBAN: AT471860000016567877 BIC: VKBLAT2L ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Wasserthal Simon-52901',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:20.537',
                'updated_at' => '2019-10-15 14:16:08.287',
            ),
            49 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2019-06-13',
                'purpose' => 'Online-Auftrag vom 13.06. zG/ Gernot Philipp
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191642.274.019.308 13.06.2019 EUR 00404 023 509 Zahlungsempf.: Gernot Philipp IBAN: AT202050500001407923 BIC: SPKIAT2K ID: Zahlungsgrund: IVM BR-Essen Kostenersatz Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 13.06 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 67,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '67.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:15.330',
                'updated_at' => '2019-10-15 14:10:43.837',
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-06-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 191642.228.035.598 13.06.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.06 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 912,10 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '912.10',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:10:15.963',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-07-01',
                'purpose' => 'Online-Auftrag vom 01.07. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191823.227.031.578 01.07.2019 EUR 00404 023 509 Zahlungsempf.: Gerhard Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:50.637',
                'updated_at' => '2019-10-15 14:19:21.637',
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-07-01',
                'purpose' => 'Online-Auftrag vom 01.07. zG/ Thomas Radl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191823.227.031.548 01.07.2019 EUR 00404 023 509 Zahlungsempf.: Thomas Radl IBAN: AT824501000010037756 BIC: VBOEATWWSAL ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:50.877',
                'updated_at' => '2019-10-15 14:19:50.340',
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-07-01',
                'purpose' => 'Online-Auftrag vom 01.07. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191823.227.031.518 01.07.2019 EUR 00404 023 509 Zahlungsempf.: Adelheid Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 01.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2018',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:51.093',
                'updated_at' => '2019-10-15 14:20:06.143',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-07-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:51.420',
                'updated_at' => '2019-10-15 14:20:16.787',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:52.013',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-07-02',
                'purpose' => 'Online-Auftrag vom 02.07. zG/ Markus Steindl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191833.488.020.728 02.07.2019 EUR 00404 023 509 Zahlungsempf.: Markus Steindl IBAN: AT223804300002619997 BIC: RZSTAT2G043 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2018 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 02.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:50.207',
                'updated_at' => '2019-10-15 14:19:01.847',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-07-02',
                'purpose' => 'Online-Auftrag vom 02.07. zG/ Markus Steindl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191833.488.020.698 02.07.2019 EUR 00404 023 509 Zahlungsempf.: Markus Steindl IBAN: AT223804300002619997 BIC: RZSTAT2G043 ID: Zahlungsgrund: IVM BR Mobilität-Förderung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 02.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:50.420',
                'updated_at' => '2019-10-15 14:24:21.427',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-07-09',
                'purpose' => 'Online-Auftrag vom 09.07. zG/ Janos Zsolt Mizser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191902.228.015.158 09.07.2019 EUR 00404 023 509 Zahlungsempf.: Janos Zsolt Mizser IBAN: AT292032032302774570 BIC: ASPKAT2L ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Mizser Janos-57481',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:49.643',
                'updated_at' => '2019-10-15 14:17:22.287',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2019-07-09',
                'purpose' => 'Online-Auftrag vom 09.07. zG/ Thomas Luger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191902.228.015.128 09.07.2019 EUR 00404 023 509 Zahlungsempf.: Thomas Luger IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: BR-Essen Linz Kostenersatz Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 290,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '290.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:16:49.950',
                'updated_at' => '2019-10-15 14:17:38.127',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '16',
                'paydate' => '2019-07-11',
                'purpose' => 'Online-Auftrag vom 11.07. zG/ BRF Porsche der Ange stellten
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 191922.879.004.168 11.07.2019 EUR 00404 023 509 Zahlungsempf.: BRF Porsche der Angestellten IBAN: AT461400051210216972 BIC: BAWAATWW ID: Zahlungsgrund: Überweisung der IVM BR-Umlage Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.07 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 52,78 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '52.78',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:02.240',
                'updated_at' => '2019-10-15 14:24:12.867',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-07-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 191933.120.039.908 12.07.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.07 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 893,67 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '893.67',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:02.000',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-07-22',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192032.219.086.118 22.07.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.07 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 226,69 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '226.69',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:01.787',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            63 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-07-22',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '226.69',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-12-04 13:58:11.437',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-08-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 192262.114.047.958 14.08.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.08 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 802,09 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '802.09',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:01.570',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-08-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192323.126.197.628 20.08.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 802,09 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '802.09',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:01.360',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            66 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-08-20',
                'purpose' => 'Abschöpfer ',
                'support_year' => NULL,
                'payin' => '802.09',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-12-04 14:00:18.233',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2019-08-30',
                'purpose' => 'Online-Auftrag vom 29.08. zG/ Andreas Laffer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192422.847.563.028 30.08.2019 EUR 00404 023 509 Zahlungsempf.: Andreas Laffer IBAN: AT521200000717401731 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR-Essen Kostenersatz 22.08.2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 30.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 820,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '820.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:01.153',
                'updated_at' => '2019-10-15 14:23:16.720',
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2019-09-09',
                'purpose' => 'Online-Auftrag vom 09.09. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192522.003.010.178 09.09.2019 EUR 00404 023 509 Zahlungsempf.: Gerhard Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: IVM BR Weiterbildungsunterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.09 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:00.747',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-09-09',
                'purpose' => 'Online-Auftrag vom 09.09. zG/ Liviu Malutan
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192522.003.010.148 09.09.2019 EUR 00404 023 509 Zahlungsempf.: Liviu Malutan IBAN: AT382081500042098228 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.09 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Malutan Liviu-41234',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:00.943',
                'updated_at' => '2019-10-15 14:23:36.457',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-09-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 192563.346.055.948 13.09.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.09 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 779,34 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '779.34',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:00.553',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2019-09-19',
                'purpose' => 'Online-Auftrag vom 19.09. zG/ Liviu Malutan
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192624.870.071.548 19.09.2019 EUR 00404 023 509 Zahlungsempf.: Liviu Malutan IBAN: AT382081500042098228 BIC: STSPAT2G ID: Zahlungsgrund: IVM BR Heirats/Familen-Unterstützung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 19.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Malutan Liviu-41234',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:00.347',
                'updated_at' => '2019-10-15 14:22:21.937',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-10-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:20:59.937',
                'updated_at' => '2019-10-15 14:22:03.130',
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:21:00.137',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2019-10-02',
                'purpose' => 'Online-Auftrag vom 02.10. zG/ Michele SORANNO
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192754.853.006.558 02.10.2019 EUR 00404 023 509 Zahlungsempf.: Michele SORANNO IBAN: AT871200052940001141 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Mobilität+Sport Förderung Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 02.10 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 52,00 Auftr.geb.Ref:',
                'support_year' => '2019',
                'payin' => NULL,
                'payout' => '52.00',
                'person' => 'Soranno Michele-57367',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:20:59.743',
                'updated_at' => '2019-10-15 14:21:49.227',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2019-10-15',
                'purpose' => 'Online-Auftrag vom 15.10. zG/ Manuela Wotolen
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192882.051.008.018 15.10.2019 EUR 00404 023 509 Zahlungsempf.: Manuela Wotolen IBAN: AT351100010870356200 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR Kultur-/Sportunterstützung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 15.10 00404023509;0000012000 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wotolen Manuela-60257',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:20:59.297',
                'updated_at' => '2019-10-15 14:21:18.597',
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-10-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 192884.960.496.398 15.10.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.10 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 761,05 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '761.05',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-10-15 14:20:59.530',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            77 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-10-16',
                'purpose' => 'Rechnung für Übernachtung BR-Essen v. 12.02.2019',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '89.15',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-02-03 12:11:33.403',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '1',
                'category_id' => '15',
                'paydate' => '2019-10-16',
                'purpose' => 'Bahnfahrt Wien-Graz zum BR-Essen 14.05.2019',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '23.10',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-02-03 12:18:35.580',
                'updated_at' => '2020-02-03 12:20:44.870',
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-10-21',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 192943.297.591.388 21.10.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 21.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 384,09 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '384.09',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:17.683',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            80 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-10-21',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '384.09',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:00:40.440',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-11-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 193193.517.011.038 15.11.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.11 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 772,16 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '772.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:19.560',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-11-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 193244.531.070.388 20.11.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.11 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 772,16 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '772.16',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:20.497',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            83 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-11-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '772.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:01:45.943',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2019-12-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 193474.376.034.958 13.12.2019 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.12 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 805,13 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '805.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:21.370',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            85 => 
            array (
                'depot_id' => '1',
                'category_id' => '17',
                'paydate' => '2019-12-19',
                'purpose' => 'Weihnachtsessen',
                'support_year' => '2019',
                'payin' => NULL,
                'payout' => '6.72',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:11:55.887',
                'updated_at' => '2020-10-21 13:14:21.563',
            ),
            86 => 
            array (
                'depot_id' => '1',
                'category_id' => '17',
                'paydate' => '2019-12-19',
                'purpose' => 'Weihnachtsessen',
                'support_year' => '2019',
                'payin' => NULL,
                'payout' => '57.21',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:13:12.187',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2019-12-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 193543.066.071.688 20.12.2019 EUR 00404 023 509 Zahlungsempf.: SPARBUCH IBAN: AT261200000204046577 BIC: BKAUATWWXXX ID: Zahlungsgrund: Zahlungsref.: 000204046577 Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 20.12 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 805,13 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '805.13',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:22.107',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            88 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2019-12-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '805.13',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:02:18.407',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-12-31',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:22.870',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2019-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:23.660',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            91 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2019-12-31',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '13.46',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:03:23.343',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2019-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.37',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:03:55.390',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-01-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 100144.204.007.138 14.01.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.01 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 755,31 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '755.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 13:55:24.513',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2020-01-16',
                'purpose' => 'Nach-Bank-Austria-App-Änderung wurden mehrere Überweisungen zusammengefasst!
Datenträger mit 3 Überweisungen Bestandskontrollnummer 55ff5516-bdc6-46
100162000004178',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '479.24',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:11.983',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2020-01-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
100202567096858',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '272.09',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:11.047',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            96 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2020-01-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '272.09',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:04:34.340',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-02-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 100453.111.009.728 14.02.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.02 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 819,49 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '819.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:10.627',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '12',
                'paydate' => '2020-02-20',
                'purpose' => 'Abschöpfer A01 / 00000000641 zG/ SPARBUCH
100514504149778',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '819.49',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:10.510',
                'updated_at' => '2022-11-17 20:13:56.707',
            ),
            99 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2020-02-20',
                'purpose' => 'Abschöpfer',
                'support_year' => NULL,
                'payin' => '819.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 13:05:14.997',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-02-24',
                'purpose' => 'Überweisung zG/Matjaz Vörös REF.FBAWI20021218123
ÜBERWEISUNG Belegnr.: 100551.002.858.528 2020-02-24 EUR 00404 023 509 Zahlungsempf.: Matjaz Vörös Produkt: BINNEN IBAN: SI56024982309422864 BIC: LJBASI2XXXX Referenznummer: ID: FBAWI20021218123 Zahlungsgrund: BR-Foerderungen Mobilitaet, Sport u nd Kultur Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref: Überweisungsbetrag: 70,00 Best.Nr.: 00000032002241236258/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Vörös Matjaz-48462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:06.933',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ MARIAM MOSHAM
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.608 24.02.2020 EUR 00404 023 509 Zahlungsempf.: MARIAM MOSHAM IBAN: AT441100011871604200 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mosham Mariam-46021',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:07.263',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Ada Gromic
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.578 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Ada Gromic IBAN: AT843800000007810633 BIC: RZSTAT2G ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gromic Ada-57995',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:07.590',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ THOMAS LUGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.548 24.02.2020 EUR 00404 023 509 Zahlungsempf.: THOMAS LUGER IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: Zahlungsref.: BR-Kostenersatz Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 620,00 Auftr.geb.Ref: BR-Essen 5.2.2020 Linz',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '620.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:07.883',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.518 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Tatjana Neubauer IBAN: AT941200000756387700 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:08.137',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ MARIAM MOSHAM
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.488 24.02.2020 EUR 00404 023 509 Zahlungsempf.: MARIAM MOSHAM IBAN: AT441100011871604200 BIC: BKAUATWW ID: Zahlungsgrund: BR-Förderung Sport 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mosham Mariam-46021',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:08.397',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Christian Gruber
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.458 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Christian Gruber IBAN: AT333900000005131776 BIC: RZKTAT2K ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gruber Christian-53608',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:08.647',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ PAULINA GAJARSKA
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.428 24.02.2020 EUR 00404 023 509 Zahlungsempf.: PAULINA GAJARSKA IBAN: AT862011128851520700 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gajarska Paulina-52738',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:08.877',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Benjamin Durstmü ller
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.398 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Benjamin Durstmüller IBAN: AT166000000078907908 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Durstmüller Benjamin-46796',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:09.093',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ UWE SCHIMON
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.368 24.02.2020 EUR 00404 023 509 Zahlungsempf.: UWE SCHIMON IBAN: AT634715020052620000 BIC: VBOEATWWNOM ID: Zahlungsgrund: BR-Familie Sohn Adam Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Schimon Uwe-46587',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:09.307',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.338 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Tatjana Neubauer IBAN: AT941200000756387700 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:09.543',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ MARIETTA BELTERM ANN-FABER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.308 24.02.2020 EUR 00404 023 509 Zahlungsempf.: MARIETTA BELTERMANN-FABER IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:09.730',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Juri Schreib
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.278 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Juri Schreib IBAN: AT636000010210166152 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schreib Juri-47306',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:09.907',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Susanne Seidinge r
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.248 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Susanne Seidinger IBAN: AT931420020010874875 BIC: EASYATW1 ID: Zahlungsgrund: BR-Mobilität 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Seidinger Susanne-15484',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:10.073',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ JULIA WINDHAGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.208 24.02.2020 EUR 00404 023 509 Zahlungsempf.: JULIA WINDHAGER IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: Förderung 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:
+BR-Förderung Sport',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:10.223',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-02-24',
                'purpose' => 'Online Überweisung vom 24.02. zG/ Florian STRAUSS
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 100552.354.003.178 24.02.2020 EUR 00404 023 509 Zahlungsempf.: Florian STRAUSS IBAN: AT343932200000134163 BIC: RZKTAT2K322 ID: Zahlungsgrund: BR-Förderung Sport 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 24.02 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Strauß Florian-55299',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:10.370',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '18',
                'paydate' => '2020-03-04',
                'purpose' => 'Gutschrift a/MATJAZ V R S REF.FBAWI20030260282
GUTSCHRIFT Belegnr.: 100641.002.176.178 2020-03-04 EUR 00404 023 509 Zahlungsempf.: ANGESTELLTENBETRIEBSRAT D.FA Produkt: BINNEN IBAN: AT161200000404023509 BIC: BKAUATWW Referenznummer: ID: FBAWI20030260282 Zahlungsgrund: RUCKUBERWEISUNG DER BR FORDERUNG Valuta: 04.03 Zahlungsref.: Zahlungszweck: NOWS Auftraggeber: MATJAZ V R S Spesen: IBAN: SI56024982309422864 BIC: LJBASI2X ID: Betrag: EUR 70,00 Auftr.geb.Ref: Überweisungsbetrag: 70,00',
                'support_year' => NULL,
                'payin' => '70.00',
                'payout' => NULL,
                'person' => 'Vörös Matjaz-48462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:06.610',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-03-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 100734.054.032.738 13.03.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.03 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 819,91 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '819.91',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:06.283',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-04-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:05.643',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:05.970',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-04-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 101062.521.008.238 15.04.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.04 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 942,77 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '942.77',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:05.300',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-05-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 101363.740.370.918 15.05.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.05 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 787,25 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '787.25',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:04.887',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            22 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-06-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 101673.939.731.168 15.06.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.06 1 Vösendorf, Schönbrunner Allee IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 781,10 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '781.10',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:04.527',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            23 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-07-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:00.757',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:24:03.003',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-07-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 101962.138.006.168 14.07.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.07 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 791,26 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '791.26',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:23:54.303',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ THOMAS LUGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.388 10.08.2020 EUR 00404 023 509 Zahlungsempf.: THOMAS LUGER IBAN: AT152033400001308279 BIC: SMWRAT21 ID: Zahlungsgrund: BR-Förderung Kultur/Mobilität 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 62,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '62.00',
                'person' => 'Luger Thomas-29172',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:56.937',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Michael TOTH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.358 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Michael TOTH IBAN: AT981921080297463392 BIC: INGBATWW ID: Zahlungsgrund: BR-Weiterbildung/Sport 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:57.183',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Christian Oberpe rtinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.328 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: EASYATW1 ID: Zahlungsgrund: BR-Förderung Sport/Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:57.453',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Juri Schreib
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.298 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Juri Schreib IBAN: AT636000010210166152 BIC: BAWAATWW ID: Zahlungsgrund: BR-Förderung Kultur 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 10,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10.00',
                'person' => 'Schreib Juri-47306',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:57.700',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ INES LEHNER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.268 10.08.2020 EUR 00404 023 509 Zahlungsempf.: INES LEHNER IBAN: AT193410000000029884 BIC: RZOOAT2L100 ID: Zahlungsgrund: BR-Förderung Sport 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Lehner Ines-59739',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:57.943',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Michael TOTH
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.228 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Michael TOTH IBAN: AT981921080297463392 BIC: INGBATWW ID: Zahlungsgrund: BR-Förderung Sport/Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Toth Michael-34445',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:58.253',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Markus Steindl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.198 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Markus Steindl IBAN: AT223804300002619997 BIC: RZSTAT2G043 ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Steindl Markus-53219',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:58.580',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2020-08-10',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Juri Schreib
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102232.857.003.168 10.08.2020 EUR 00404 023 509 Zahlungsempf.: Juri Schreib IBAN: AT636000010210166152 BIC: BAWAATWW ID: Zahlungsgrund: BR-Förderung Kultur 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 10.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 20,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '20.00',
                'person' => 'Schreib Juri-47306',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:59.030',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-08-11',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Stefan Ursin
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102243.048.032.978 11.08.2020 EUR 00404 023 509 Zahlungsempf.: Stefan Ursin IBAN: AT943848700001119577 BIC: RZSTAT2G487 ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Ursin Stefan-60744',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:56.217',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2020-08-11',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Natalia Petrova- Korudzhiyski
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102243.048.032.948 11.08.2020 EUR 00404 023 509 Zahlungsempf.: Natalia Petrova-Korudzhiyski IBAN: AT682020200001232131 BIC: SPAMAT21 ID: Zahlungsgrund: BR-Förderung Kultur 2019 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 28,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '28.00',
                'person' => 'Petrova-Korudzhiyski Natalia-34174',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:56.457',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-08-11',
                'purpose' => 'Online Überweisung vom 10.08. zG/ Natalia Petrova- Korudzhiyski
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102243.048.032.918 11.08.2020 EUR 00404 023 509 Zahlungsempf.: Natalia Petrova-Korudzhiyski IBAN: AT682020200001232131 BIC: SPAMAT21 ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 11.08 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Petrova-Korudzhiyski Natalia-34174',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:56.700',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-08-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 102274.078.079.238 14.08.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.08 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 779,83 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '779.83',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:55.953',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-09-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 102592.612.019.888 15.09.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.09 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 636,47 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '636.47',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:55.687',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-10-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:55.137',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.68',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-08 14:30:55.430',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2020-10-12',
                'purpose' => 'Überweisung zG/Rezo Black REF.FBAWI20100631983
ÜBERWEISUNG Belegnr.: 102861.003.030.858 2020-10-12 EUR 00404 023 509 Zahlungsempf.: Rezo Black Produkt: BINNEN IBAN: DE70100110012623778132 BIC: NTSBDEB1XXX Referenznummer: ID: FBAWI20100631983 Zahlungsgrund: IVM BR-Foerderung Sport 2020 Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref: Überweisungsbetrag: 40,00 Best.Nr.: 00000032010121135157/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Black Rezo-64318',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:50:45.763',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-10-12',
                'purpose' => 'Überweisung zG/Emanuel Kirchengast REF.FBAWI20100631391
ÜBERWEISUNG Belegnr.: 102861.003.029.738 2020-10-12 EUR 00404 023 509 Zahlungsempf.: Emanuel Kirchengast Produkt: EUROEILE IBAN: DE67120300001060754940 BIC: BYLADEM1001 Referenznummer: ID: FBAWI20100631391 Zahlungsgrund: BR-Foerderungen 2019 Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: EUR 7,00 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref: Überweisungsbetrag: 70,00 Best.Nr.: 00000032010121143016/0',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Kirchengast Emanuel-59377',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:52:17.680',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-10-12',
                'purpose' => 'SPESEN REF.FBAWI20100631391
SPESENANZEIGE Spesen zu Auslandüberweisung FBAWI20100631391 abgerechnet auf Konto 00404 023 509 EUR',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '7.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:52:26.817',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2020-10-12',
                'purpose' => 'Online Überweisung vom 12.10. zG/ Natalia Petrova- Korudzhiyski
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102863.069.012.498 12.10.2020 EUR 00404 023 509 Zahlungsempf.: Natalia Petrova-Korudzhiyski IBAN: AT682020200001232131 BIC: SPAMAT21 ID: Zahlungsgrund: IVM BR-Förderung Weiterbildung 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Petrova-Korudzhiyski Natalia-34174',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:52:49.450',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-10-12',
                'purpose' => 'Online Überweisung vom 12.10. zG/ Michele SORANNO
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102863.069.012.468 12.10.2020 EUR 00404 023 509 Zahlungsempf.: Michele SORANNO IBAN: AT871200052940001141 BIC: BKAUATWW ID: Zahlungsgrund: IVM BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Soranno Michele-57367',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:53:10.797',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-10-12',
                'purpose' => 'Online Überweisung vom 12.10. zG/ David Blüher
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102863.069.012.438 12.10.2020 EUR 00404 023 509 Zahlungsempf.: David Blüher IBAN: AT521919000055040760 BIC: BSSWATWW ID: Zahlungsgrund: IVM BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Blüher David-54707',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:53:30.953',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-10-12',
                'purpose' => 'Online Überweisung vom 12.10. zG/ Andre Bstieler
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102863.069.012.408 12.10.2020 EUR 00404 023 509 Zahlungsempf.: Andre Bstieler IBAN: AT493637800001215128 BIC: RZTIAT22378 ID: Zahlungsgrund: IVM BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bstieler Andre-43567',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:53:51.017',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-10-12',
                'purpose' => 'Online Überweisung vom 12.10. zG/ Stefan Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 102863.069.012.378 12.10.2020 EUR 00404 023 509 Zahlungsempf.: Stefan Hackl IBAN: AT512050200001890052 BIC: SPIMAT21 ID: Zahlungsgrund: IVM BR-Förderung Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 12.10 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Stefan-61573',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:54:10.057',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-10-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 102894.103.632.388 15.10.2020 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.10 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 773,68 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '773.68',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-10-21 12:50:19.780',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-11-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
103184970010498',
                'support_year' => NULL,
                'payin' => '777.21',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:19.893',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2020-12-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
103503201006518',
                'support_year' => NULL,
                'payin' => '758.17',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:19.360',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-12-16',
                'purpose' => 'Online Überweisung vom 16.12. zG/ Adelheid Hackl
103513674003588',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:18.130',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '6',
                'paydate' => '2020-12-16',
                'purpose' => 'Online Überweisung vom 16.12. zG/ Gerhard Hackl
103513674003558',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:18.253',
                'updated_at' => '2022-11-17 20:05:53.620',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-12-16',
                'purpose' => 'Online Überweisung vom 16.12. zG/ Andreas Laffer
103513674003528',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:18.357',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2020-12-16',
                'purpose' => 'Online Überweisung vom 16.12. zG/ Dominic Jamnik
103513674003498',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Jamnik Dominic-61276',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:18.463',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-12-31',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.827',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2020-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.997',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            58 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2020-12-31',
                'purpose' => 'Zinsen',
                'support_year' => NULL,
                'payin' => '17.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-28 12:11:14.323',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2020-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '4.45',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-28 12:12:06.697',
                'updated_at' => '2021-10-28 12:12:48.133',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-01-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
110153773023548',
                'support_year' => NULL,
                'payin' => '760.93',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.663',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Maurer Michael
110222560010758',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:16.200',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Florian Strauß
110222560010728',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Strauß Florian-55299',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:16.443',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Maurer Michael
110222560010698',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Andreas-25235',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:16.653',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Dr. Mariam Mosha m
110222560010668',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:16.847',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Dominic Jamnik
110222560010638',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Jamnik Dominic-61276',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.157',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Florian Strauß
110222560010608',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Strauß Florian-55299',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.327',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-01-22',
                'purpose' => 'Online Überweisung vom 22.01. zG/ Janos Zsolt Mizs er
110222560010578',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '50.00',
                'person' => 'Mizser Janos-57481',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:17.510',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '22',
                'paydate' => '2021-01-25',
                'purpose' => 'Bareinzahlung
Abhebung Sparbuch Bank Austria',
                'support_year' => NULL,
                'payin' => '14000.00',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:15.950',
                'updated_at' => '2021-10-28 11:53:35.117',
            ),
            69 => 
            array (
                'depot_id' => '2',
                'category_id' => '22',
                'paydate' => '2021-01-25',
                'purpose' => 'Abhebung Sparbuch Bank Austria',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '14000.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:56:12.230',
                'updated_at' => '2021-10-28 11:53:09.313',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-02-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
110434629033378',
                'support_year' => NULL,
                'payin' => '730.58',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:15.700',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2021-02-19',
                'purpose' => 'Online Überweisung vom 18.02. zG/ Services Austria GmbH
110503324015268',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '10029.88',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:15.353',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-09',
                'purpose' => 'Online Überweisung vom 09.03. zG/ David Semlitsch
110684589012328',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Semlitsch David-65209',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:15.063',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Überweisung zG/Matjaz Vörös REF.FBAWI21030637950
ÜBERWEISUNG Belegnr.: 110691.002.439.238 2021-03-10 EUR 00404 023 509 Zahlungsempf.: Matjaz Vörös Produkt: BINNEN IBAN: SI56024982309422864 BIC: LJBASI2XXXX Referenznummer: ID: FBAWI21030637950 Zahlungsgrund: BR-Mobilitaet/Sport 2021 Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref: Überweisungsbetrag: 70,00 Best.Nr.: 00000032103100825513/1',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Vörös Matjaz-48462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:39:21.300',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ JULIA WINDHAGER
110694865004368',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:11.707',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Michael Maurer
110694865004338',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:12.060',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Juri Schreib
110694865004308',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schreib Juri-47306',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:12.497',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Christian Gruber
110694865004278',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Gruber Christian-53608',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:12.823',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Michael Maurer
110694865004248',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Maurer Michael-33181',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:13.187',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Julia Anna Rothw ein
110694844005808',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rothwein Julia-53514',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:13.527',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Julia Anna Rothw ein
110694844005778',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Rothwein Julia-53514',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:13.863',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Elzbieta Bialowa s
110694844005738',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '15.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:14.167',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ Elzbieta Bialowa s
110694844005708',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:14.467',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-03-10',
                'purpose' => 'Online Überweisung vom 10.03. zG/ JULIA ROTHWEIN
110694844005678',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rothwein Julia-53514',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:55:14.763',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-03-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
110712497017288',
                'support_year' => NULL,
                'payin' => '736.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:38:15.667',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            85 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-04-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.30',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:37:56.757',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:38:04.100',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            87 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-04-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 111044.063.012.708 14.04.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.04 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 729,31 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '729.31',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:37:21.897',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            88 => 
            array (
                'depot_id' => '3',
                'category_id' => '15',
                'paydate' => '2021-05-04',
                'purpose' => 'Online Überweisung vom 04.05. zG/ MANFRED TSUCHIYA -PHILIPP
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111242.937.016.118 04.05.2021 EUR 00404 023 509 Zahlungsempf.: MANFRED TSUCHIYA-PHILIPP IBAN: AT376000000006518273 BIC: BAWAATWW ID: Zahlungsgrund: Zahlungsref.: BR-Kostenersatz Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 04.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 248,90 Auftr.geb.Ref: Rechnung f. Geschenk Prein',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '248.90',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:37:12.757',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-05-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 111342.231.050.578 14.05.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.05 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 736,59 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '736.59',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:36:24.697',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            90 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.005.118 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2020 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:33:41.673',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ GERHARD HACKL
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.005.088 27.05.2021 EUR 00404 023 509 Zahlungsempf.: GERHARD HACKL IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: BR-Förderung Sport/Kultur/Weiterbildung 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:34:00.320',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Waltraud Götz
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.005.058 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Waltraud Götz IBAN: AT751420020011035249 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Götz Waltraud-59638',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:34:22.177',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.005.028 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Adelheid Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:34:37.143',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Susanne Seidinge r
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.004.998 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Susanne Seidinger IBAN: AT931420020010874875 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Seidinger Susanne-15484',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:34:48.383',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Hannes Wolf
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.004.968 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Hannes Wolf IBAN: AT502081527501394616 BIC: STSPAT2G ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Wolf Hannes-64700',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:35:10.480',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.004.938 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Tatjana Neubauer IBAN: AT941200000756387700 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:35:21.160',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ MARIETTA BELTERM ANN-FABER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.004.908 27.05.2021 EUR 00404 023 509 Zahlungsempf.: MARIETTA BELTERMANN-FABER IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:36:01.030',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-05-27',
                'purpose' => 'Online Überweisung vom 27.05. zG/ Harald Unger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 111472.114.004.878 27.05.2021 EUR 00404 023 509 Zahlungsempf.: Harald Unger IBAN: AT766000000077321169 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 27.05 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Unger Harald-27959',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:36:15.343',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-06-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 111663.154.049.158 15.06.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.06 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 698,89 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '698.89',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:33:27.557',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
        ));
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-07-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:33:17.663',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:33:19.200',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            2 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-07-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 111954.405.219.158 14.07.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.07 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 677,16 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '677.16',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:33:00.120',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            3 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-08-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 112242.681.042.678 12.08.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 12.08 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 694,27 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '694.27',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:32:48.280',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            4 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-09-08',
                'purpose' => 'Online Überweisung vom 08.09. zG/ Oliver Gründonne r
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 112513.348.018.648 08.09.2021 EUR 00404 023 509 Zahlungsempf.: Oliver Gründonner IBAN: AT512011100037121049 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Gründonner Oliver-18394',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:30:47.973',
                'updated_at' => '2022-10-11 11:40:29.703',
            ),
            5 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-09-08',
                'purpose' => 'Online Überweisung vom 08.09. zG/ Christian Oberpe rtinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 112513.348.018.618 08.09.2021 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:31:11.873',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2021-09-08',
                'purpose' => 'Online Überweisung vom 08.09. zG/ Christian Oberpe rtinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 112513.348.018.588 08.09.2021 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: BAWAATWW ID: Zahlungsgrund: BR-Familien Heiratsurkunde 18.06.2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:31:32.120',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2021-09-08',
                'purpose' => 'Online Überweisung vom 08.09. zG/ Martina Wieser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 112513.348.018.558 08.09.2021 EUR 00404 023 509 Zahlungsempf.: Martina Wieser IBAN: AT061420020011440496 BIC: BAWAATWW ID: Zahlungsgrund: BR-Familien Heiratsurkunde vom 13.08.21 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 100,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Wieser Martina-66075',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:32:11.593',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2021-09-08',
                'purpose' => 'Online Überweisung vom 08.09. zG/ Dominic Jamnik
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 112513.348.018.528 08.09.2021 EUR 00404 023 509 Zahlungsempf.: Dominic Jamnik IBAN: AT041200010016567652 BIC: BKAUATWW ID: Zahlungsgrund: BR-Förderung Sport 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 08.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Jamnik Dominic-61276',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:32:35.377',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-09-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 112574.655.989.608 14.09.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.09 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 689,36 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '689.36',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:29:58.810',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            10 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-10-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:29:03.210',
                'updated_at' => '2021-10-27 15:29:39.760',
            ),
            11 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-10-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:29:48.130',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            12 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-10-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 112873.183.012.008 14.10.2021 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.10 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 677,66 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '677.66',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-27 15:28:44.260',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            13 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-11-12',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
113163747009188',
                'support_year' => NULL,
                'payin' => '690.30',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:47.193',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            14 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2021-11-29',
                'purpose' => 'Überweisung zG/Matjaz Vörös REF.FBAWI21111940386
ÜBERWEISUNG Belegnr.: 113331.003.495.238 2021-11-29 EUR 00404 023 509 Zahlungsempf.: Matjaz Vörös Produkt: BINNEN IBAN: SI56024982309422864 BIC: LJBASI2XXXX Referenznummer: ID: FBAWI21111940386 Zahlungsgrund: BR-Foerderung Kultur 2021 Zahlungsref.: Zahlungszweck: Auftraggeber: Angestelltenbetriebsrat d.Fa Spesen: IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 30,00 Auftr.geb.Ref: Überweisungsbetrag: 30,00 Best.Nr.: 00000032111291041119/1',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '30.00',
                'person' => 'Vörös Matjaz-48462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:43.993',
                'updated_at' => '2022-10-11 12:52:49.897',
            ),
            15 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2021-11-29',
                'purpose' => 'Online Überweisung vom 29.11. zG/ Samanta Kovacevi c Filipcic
113334629011948',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Kovacevic Filipcic Samanta-67643',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:44.633',
                'updated_at' => '2022-10-11 12:52:06.300',
            ),
            16 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-11-29',
                'purpose' => 'Online Überweisung vom 29.11. zG/ Stefan Hackl
113334629011918',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Stefan-61573',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:45.273',
                'updated_at' => '2022-10-11 12:52:28.490',
            ),
            17 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2021-11-29',
                'purpose' => 'Online Überweisung vom 29.11. zG/ Michael Enser
113334629011888',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '100.00',
                'person' => 'Enser Michael-58712',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:45.907',
                'updated_at' => '2022-10-11 12:53:11.867',
            ),
            18 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2021-11-29',
                'purpose' => 'Online Überweisung vom 29.11. zG/ Michele Soranno
113334629011858',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Soranno Michele-57367',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:46.547',
                'updated_at' => '2022-10-11 12:53:33.257',
            ),
            19 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2021-12-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
113484967012508',
                'support_year' => NULL,
                'payin' => '688.04',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:43.323',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            20 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-12-31',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:41.883',
                'updated_at' => '2022-10-11 12:50:16.090',
            ),
            21 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2021-12-31',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:42.633',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            22 => 
            array (
                'depot_id' => '2',
                'category_id' => '14',
                'paydate' => '2021-12-31',
                'purpose' => 'ZINSEN',
                'support_year' => NULL,
                'payin' => '1.62',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-16 10:45:05.957',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'depot_id' => '2',
                'category_id' => '21',
                'paydate' => '2021-12-31',
                'purpose' => 'KEST',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '.41',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-16 10:46:04.127',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-01-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 120132.918.007.418 13.01.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.01 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 663,18 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '663.18',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:41.107',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            25 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-02-01',
                'purpose' => 'BusinessNet Smart Gebühr 01/2022
LASTSCHRIFT Belegnr.: 120320.500.303.633 01.02.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 01/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 20320030363 Ausstellungsdatum: 01.02.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:40.290',
                'updated_at' => '2022-10-11 12:49:50.727',
            ),
            26 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-02-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 120464.950.001.968 15.02.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.02 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 654,38 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '654.38',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:39.443',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            27 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-03-01',
                'purpose' => 'BusinessNet Smart Gebühr 02/2022
120600500301633',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:38.497',
                'updated_at' => '2022-10-11 12:49:34.090',
            ),
            28 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Waltraud Götz
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.025.018 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Waltraud Götz IBAN: AT751420020011035249 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Götz Waltraud-59638',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:25.443',
                'updated_at' => '2022-10-11 12:26:41.927',
            ),
            29 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Kevin Rautner
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.978 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Kevin Rautner IBAN: AT341921080453091441 BIC: SPBAATWWB99 ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Rautner Kevin-61379',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:25.907',
                'updated_at' => '2022-10-11 12:27:02.900',
            ),
            30 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Andreas Bauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.948 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Andreas Bauer IBAN: AT543200000011840774 BIC: RLNWATWW ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bauer Andreas-14907',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:26.427',
                'updated_at' => '2022-10-11 12:35:10.737',
            ),
            31 => 
            array (
                'depot_id' => '3',
                'category_id' => '8',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ MARIETTA BELTERM ANN-FABER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.918 07.03.2022 EUR 00404 023 509 Zahlungsempf.: MARIETTA BELTERMANN-FABER IBAN: AT322011100034951792 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Beltermann-Faber Marietta-16981',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:26.843',
                'updated_at' => '2022-10-11 12:34:03.827',
            ),
            32 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ JULIA WINDHAGER
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.888 07.03.2022 EUR 00404 023 509 Zahlungsempf.: JULIA WINDHAGER IBAN: AT673400000001634773 BIC: RZOOAT2L ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Windhager Julia-50531',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:27.247',
                'updated_at' => '2022-10-11 12:36:26.917',
            ),
            33 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Sandra Mainka
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.858 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Sandra Mainka IBAN: AT972011128536079800 BIC: GIBAATWW ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mainka Sandra-40575',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:27.640',
                'updated_at' => '2022-10-11 12:38:10.507',
            ),
            34 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Mag. Dr. Mariam Mosham
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.828 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Mag. Dr. Mariam Mosham IBAN: AT441100011871604200 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mosham Mariam-46021',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:28.023',
                'updated_at' => '2022-10-11 12:38:55.377',
            ),
            35 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Richard SKRIWANE K
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.798 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Richard SKRIWANEK IBAN: AT622011128045688200 BIC: GIBAATWW ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:28.437',
                'updated_at' => '2022-10-11 12:39:16.453',
            ),
            36 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Bruno Pritsch
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.768 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Bruno Pritsch IBAN: AT362031405501186273 BIC: SKBIAT21 ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pritsch Bruno-68671',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:28.820',
                'updated_at' => '2022-10-11 12:39:38.883',
            ),
            37 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Bruno Pritsch
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.738 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Bruno Pritsch IBAN: AT362031405501186273 BIC: SKBIAT21 ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pritsch Bruno-68671',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:29.177',
                'updated_at' => '2022-10-11 12:49:26.213',
            ),
            38 => 
            array (
                'depot_id' => '3',
                'category_id' => '8',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Andreas Laffer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.708 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Andreas Laffer IBAN: AT521200000717401731 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Laffer Andreas-12495',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:29.530',
                'updated_at' => '2022-10-11 12:49:03.477',
            ),
            39 => 
            array (
                'depot_id' => '3',
                'category_id' => '2',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Elzbieta Bialowa s
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.678 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Elzbieta Bialowas IBAN: AT502011100036066192 BIC: GIBAATWW ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 31,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '31.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:31.963',
                'updated_at' => '2022-10-11 12:48:38.757',
            ),
            40 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ David Semlitsch
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.648 07.03.2022 EUR 00404 023 509 Zahlungsempf.: David Semlitsch IBAN: AT522081500006093710 BIC: STSPAT2G ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Semlitsch David-65209',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:32.793',
                'updated_at' => '2022-10-11 12:48:14.937',
            ),
            41 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Janos Zsolt Mizs er
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.618 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Janos Zsolt Mizser IBAN: AT292032032302774570 BIC: ASPKAT2L ID: Zahlungsgrund: BR-Mobilität 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Mizser Janos-57481',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:33.643',
                'updated_at' => '2022-10-11 12:47:51.957',
            ),
            42 => 
            array (
                'depot_id' => '3',
                'category_id' => '8',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ BR-Mobilität/Spo rt 2022
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.588 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Bialowas Elzbieta BR-Mobilität/Sport 2022 IBAN: AT502011100036066192 BIC: GIBAATWW ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bialowas Elzbieta-41770',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:34.457',
                'updated_at' => '2022-10-11 12:47:13.310',
            ),
            43 => 
            array (
                'depot_id' => '3',
                'category_id' => '7',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ David Semlitsch
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.558 07.03.2022 EUR 00404 023 509 Zahlungsempf.: David Semlitsch IBAN: AT522081500006093710 BIC: STSPAT2G ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Semlitsch David-65209',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:35.513',
                'updated_at' => '2022-10-11 12:43:16.603',
            ),
            44 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Janos Zsolt Mizs er
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.528 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Janos Zsolt Mizser IBAN: AT292032032302774570 BIC: ASPKAT2L ID: Zahlungsgrund: Geburt eines Kindes Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 140,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '140.00',
                'person' => 'Mizser Janos-57481',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:36.393',
                'updated_at' => '2022-10-11 12:42:43.057',
            ),
            45 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2022-03-07',
                'purpose' => 'Online Überweisung vom 07.03. zG/ Richard SKRIWANE K
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120663.963.024.498 07.03.2022 EUR 00404 023 509 Zahlungsempf.: Richard SKRIWANEK IBAN: AT622011128045688200 BIC: GIBAATWW ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 07.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Skriwanek Richard-21014',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:37.467',
                'updated_at' => '2022-10-11 12:42:00.143',
            ),
            46 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-03-15',
                'purpose' => 'Online Überweisung vom 15.03. zG/ Tatjana Neubauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 120743.036.023.468 15.03.2022 EUR 00404 023 509 Zahlungsempf.: Tatjana Neubauer IBAN: AT941200000756387700 BIC: BKAUATWW ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 15.03 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Neubauer Tatjana-21139',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:24.487',
                'updated_at' => '2022-10-11 12:21:14.077',
            ),
            47 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-03-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 120742.868.007.048 15.03.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.03 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 640,81 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '640.81',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:24.947',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            48 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-04-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.50',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:22.883',
                'updated_at' => '2022-10-11 12:20:19.440',
            ),
            49 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-04-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:23.407',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            50 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-04-01',
                'purpose' => 'BusinessNet Smart Gebühr 03/2022
LASTSCHRIFT Belegnr.: 120910.500.340.248 01.04.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 03/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 20910034024 Ausstellungsdatum: 01.04.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:23.977',
                'updated_at' => '2022-10-11 12:19:59.690',
            ),
            51 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-04-19',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 121092.189.139.288 19.04.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 19.04 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 634,78 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '634.78',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:22.383',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            52 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-05-02',
                'purpose' => 'BusinessNet Smart Gebühr 04/2022
LASTSCHRIFT Belegnr.: 121220.500.298.557 02.05.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 04/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 21220029855 Ausstellungsdatum: 02.05.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:21.883',
                'updated_at' => '2022-10-11 12:17:06.270',
            ),
            53 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-05-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 121332.423.526.038 13.05.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.05 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 639,22 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '639.22',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:21.323',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            54 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-06-01',
                'purpose' => 'BusinessNet Smart Gebühr 05/2022
LASTSCHRIFT Belegnr.: 121520.500.296.924 01.06.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 05/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 21520029692 Ausstellungsdatum: 01.06.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:20.710',
                'updated_at' => '2022-10-11 12:16:17.427',
            ),
            55 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Bruno Pritsch
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.348 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Bruno Pritsch IBAN: AT362031405501186273 BIC: SKBIAT21 ID: Zahlungsgrund: BR-Mobilität 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Pritsch Bruno-68671',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:02:42.717',
                'updated_at' => '2022-10-11 12:26:13.800',
            ),
            56 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Alois Grasmugg
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.318 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Alois Grasmugg IBAN: AT402081500043189927 BIC: STSPAT2G ID: Zahlungsgrund: BR-Familien 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 140,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '140.00',
                'person' => 'Grasmugg Alois-51828',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:02:58.700',
                'updated_at' => '2022-10-11 12:26:03.807',
            ),
            57 => 
            array (
                'depot_id' => '3',
                'category_id' => '1',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Michael Enser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.288 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Michael Enser IBAN: AT881511000921128989 BIC: OBKLAT2L ID: Zahlungsgrund: BR-Familien 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 140,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '140.00',
                'person' => 'Enser Michael-58712',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:16.090',
                'updated_at' => '2022-10-11 12:20:47.213',
            ),
            58 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Michael Enser
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.258 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Michael Enser IBAN: AT881511000921128989 BIC: OBKLAT2L ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2021 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Enser Michael-58712',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:16.810',
                'updated_at' => '2022-10-11 12:25:57.053',
            ),
            59 => 
            array (
                'depot_id' => '3',
                'category_id' => '4',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Andreas Bauer
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.228 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Andreas Bauer IBAN: AT543200000011840774 BIC: RLNWATWW ID: Zahlungsgrund: Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Bauer Andreas-14907',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:17.507',
                'updated_at' => '2022-10-11 12:21:57.577',
            ),
            60 => 
            array (
                'depot_id' => '3',
                'category_id' => '9',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Christian Oberpe rtinger
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.198 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Christian Oberpertinger IBAN: AT611420020012443553 BIC: BAWAATWW ID: Zahlungsgrund: BR-Mobilität/Sport 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Oberpertinger Christian-39458',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:18.127',
                'updated_at' => '2022-10-11 12:21:47.650',
            ),
            61 => 
            array (
                'depot_id' => '3',
                'category_id' => '9',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Julia Rothwein
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.168 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Julia Rothwein IBAN: AT633837000003032687 BIC: RZSTAT2G370 ID: Zahlungsgrund: BR-Mobilität/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Rothwein Julia-53514',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:18.753',
                'updated_at' => '2022-10-11 12:21:40.193',
            ),
            62 => 
            array (
                'depot_id' => '3',
                'category_id' => '10',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Gerhard Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.138 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Gerhard Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: BR-Förderung Sport/Kultur/Weiterbildung 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 70,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '70.00',
                'person' => 'Hackl Gerhard-17462',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:19.523',
                'updated_at' => '2022-10-11 12:21:33.167',
            ),
            63 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2022-06-09',
                'purpose' => 'Online Überweisung vom 09.06. zG/ Adelheid Hackl
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 121602.493.005.108 09.06.2022 EUR 00404 023 509 Zahlungsempf.: Adelheid Hackl IBAN: AT883477700007740152 BIC: RZOOAT2L777 ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 09.06 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2022',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Hackl Adelheid-24765',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:04:20.130',
                'updated_at' => '2022-10-11 12:21:26.577',
            ),
            64 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-06-15',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 121663.759.551.908 15.06.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 15.06 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 644,57 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '644.57',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:02:09.117',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            65 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-07-01',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:47.917',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-07-01',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:49.340',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            67 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-07-01',
                'purpose' => 'BusinessNet Smart Gebühr 06/2022
LASTSCHRIFT Belegnr.: 121820.500.335.713 01.07.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 06/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 21820033571 Ausstellungsdatum: 01.07.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:59.677',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-07-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 121954.636.035.368 14.07.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM-TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.07 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 639,20 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '639.20',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:01.943',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            69 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-07-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 121954.636.035.368 14.07.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.07 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 639,20 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '639.20',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:02.687',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            70 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-08-01',
                'purpose' => 'BusinessNet Smart Gebühr 07/2022
LASTSCHRIFT Belegnr.: 122130.500.294.364 01.08.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 07/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 22130029436 Ausstellungsdatum: 01.08.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:01.217',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-08-11',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 122232.513.030.208 11.08.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 11.08 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 662,89 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '662.89',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:01:00.503',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            72 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-09-01',
                'purpose' => 'BusinessNet Smart Gebühr 08/2022
LASTSCHRIFT Belegnr.: 122440.500.292.593 01.09.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 08/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 22440029259 Ausstellungsdatum: 01.09.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:59.730',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-09-14',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 122574.357.056.578 14.09.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 14.09 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 653,49 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '653.49',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:58.913',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
            74 => 
            array (
                'depot_id' => '3',
                'category_id' => '5',
                'paydate' => '2022-09-22',
                'purpose' => 'Online Überweisung vom 22.09. zG/ Ralph Schmuck
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 122653.534.030.108 22.09.2022 EUR 00404 023 509 Zahlungsempf.: Ralph Schmuck IBAN: AT222011129266505700 BIC: GIBAATWW ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Schmuck Ralph-40726',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:57.477',
                'updated_at' => '2022-10-11 12:03:22.687',
            ),
            75 => 
            array (
                'depot_id' => '3',
                'category_id' => '3',
                'paydate' => '2022-09-22',
                'purpose' => 'Online Überweisung vom 22.09. zG/ Yvonne Paul
SEPA-AUFTRAGSBESTÄTIGUNG Belegnr.: 122653.534.030.078 22.09.2022 EUR 00404 023 509 Zahlungsempf.: Yvonne Paul IBAN: AT252081502301454084 BIC: STSPAT2G ID: Zahlungsgrund: BR-Förderung Sport/Kultur 2022 Zahlungsref.: Auftraggeber: Angestelltenbetriebsrat d.Fa Valuta: 22.09 IBAN: AT161200000404023509 BIC: BKAUATWW ID: Betrag: EUR 40,00 Auftr.geb.Ref:',
                'support_year' => '2021',
                'payin' => NULL,
                'payout' => '40.00',
                'person' => 'Paul Yvonne-31554',
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:58.197',
                'updated_at' => '2022-10-11 12:05:15.003',
            ),
            76 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-10-03',
                'purpose' => 'ENTGELT FÜR ANLASSBEZOGENEN KONTOAUSZUG',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '3.60',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:36.847',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-10-03',
                'purpose' => 'PORTO',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '1.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:54.837',
                'updated_at' => '2022-11-17 20:09:03.307',
            ),
            78 => 
            array (
                'depot_id' => '3',
                'category_id' => '13',
                'paydate' => '2022-10-03',
                'purpose' => 'BusinessNet Smart Gebühr 09/2022
LASTSCHRIFT Belegnr.: 122760.500.331.597 03.10.2022 00404 023 509 Zahlungspfl.: Angestelltenbetriebsrat d.Fa Ivm Zahlungsempf.: UniCredit Bank Austria AG Kontonummer: 00009 050 099 Bankleitzahl: 12000 Zahlungsgrund: BusinessNet Smart lt. Vereinbarung Monatsgebühr 09/22 EUR 5,00 +20% USt EUR 1,00 Rechnungsnummer BN 22760033159 Ausstellungsdatum: 03.10.2022 Betrag: ---------- EUR 6,00',
                'support_year' => NULL,
                'payin' => NULL,
                'payout' => '6.00',
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-11 12:00:56.660',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'depot_id' => '3',
                'category_id' => '20',
                'paydate' => '2022-10-13',
                'purpose' => 'Gutschrift a/IVM TECHNICAL CONSULTANTS WIEN GMBH2331
GUTSCHRIFT Belegnr.: 122862.549.036.958 13.10.2022 EUR 00404 023 509 Zahlungsempf.: Betriebsratskonto IVM -TC Wien GmbH, 2331 Vösendorf IBAN: AT161200000404023509 BIC: BKAUATWWXXX ID: Zahlungsgrund: BR-Umlage Zahlungsref.: Zahlungszweck: Auftraggeber: IVM TECHNICAL CONSULTANTS WIEN GMBH233 Valuta: 13.10 IBAN: AT753225000001451707 BIC: RLNWATWWGTD ID: Betrag: EUR 635,71 Auftr.geb.Ref:',
                'support_year' => NULL,
                'payin' => '635.71',
                'payout' => NULL,
                'person' => NULL,
                'remarks' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-10-16 10:57:39.140',
                'updated_at' => '2022-11-17 20:11:56.460',
            ),
        ));
        
        
    }
}