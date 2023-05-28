<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'lorem ipsum et fd ioure kdou fkdlsu fuifojw jfijuods jioewhjf fjidowui fjidsohf iwfhiods fiowhjf osj fiowj fidowjf diwjfido fjdiowjfi jfkds.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'lorem ipsum et fd ioure kdou fkdlsu fuifojw jfijuods jioewhjf fjidowui fjidsohf iwfhiods fiowhjf osj fiowj fidowjf diwjfido fjdiowjfi jfkds.'
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }