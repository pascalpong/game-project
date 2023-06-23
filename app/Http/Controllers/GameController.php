<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function store(Request $request) {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'link' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Process the uploaded image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/imgs');
            $imageUrl = Storage::url($imagePath);
        }

        $game = new Game();
        $game->name = $validatedData['name'] ?? null;
        $game->link = $validatedData['link'] ?? null;
        $game->image = $imageUrl ?? null;
        $game->type = $validatedData['type'] ?? null;
        $game->category_id = 1;
        $game->save();

        return redirect('/dashboard');

    }

    public function allGames() {

        $games = Game::all();
        return view('welcome',['games' => $games]);
    }

    public function gameList() {
        $games = Game::all();
        return json_encode($games);
    }
}
