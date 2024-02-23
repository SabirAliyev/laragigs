<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'First Listing',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, modi.',
            ],
            [
                'id' => 2,
                'title' => 'Second Listing',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, modi.',
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }

        // return collect(self::all())->firstWhere('id', $id);
    }
}