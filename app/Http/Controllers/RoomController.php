<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = [
            [
                'name' => 'Double Room',
                'description' => 'Comfortable room with two double beds, perfect for families.',
                'price' => 150,
                'image' => 'img/h2.jpg',
            ],
            [
                'name' => 'Single Room',
                'description' => 'A cozy room for solo travelers.',
                'price' => 100,
                'image' => 'img/h3.jpg',
            ],
            [
                'name' => 'Suite',
                'description' => 'Luxurious suite with premium amenities.',
                'price' => 300,
                'image' => 'img/h4.jpg',
            ],
        ];

        return view('home', [
            'rooms' => $rooms,
        ]);
    }
}
