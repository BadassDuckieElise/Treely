<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotCommandController extends Controller
{
    private $commands = [
        [
            'name' => 'Search', 
            'description' => 'Search articles from FishWiki.org', 
            'usage' => '/search',
        ],
        [
            'name' => 'Random', 
            'description' => 'Pulls a random article or guide', 
            'usage' => '/random',
        ],
        [
            'name' => 'Convert Liquid', 
            'description' => 'Convert between liters & gallons', 
            'usage' => '/convert-liquid',
        ],
        [
            'name' => 'Convert Temperatures', 
            'description' => 'Convert temperatures between Celsius, Kelvin, & Rankine', 
            'usage' => '/convert-temp',
        ],
        // Add more commands as needed
    ];

    public function index(Request $request)
    {
        $search = $request->input('search');
        $commands = $this->commands;

        if ($search) {
            $commands = array_filter($this->commands, function ($command) use ($search) {
                return stripos($command['name'], $search) !== false || stripos($command['description'], $search) !== false;
            });
        }

        return view('commands', compact('commands', 'search'));
    }
}
