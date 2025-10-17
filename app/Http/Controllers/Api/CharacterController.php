<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    // 🔹 Menampilkan semua karakter
    public function index()
    {
        return response()->json(Character::all());
    }

    // 🔹 Menambahkan karakter baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'crew' => 'required|string|max:255',
            'fruit' => 'nullable|string|max:255',
            'bounty' => 'required|integer',
        ]);

        $character = Character::create($validated);

        return response()->json([
            'message' => 'Character created successfully',
            'data' => $character
        ], 201);
    }

    // 🔹 Menampilkan satu karakter berdasarkan ID
    public function show($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found'], 404);
        }

        return response()->json($character);
    }

    // 🔹 Mengupdate karakter
    public function update(Request $request, $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'crew' => 'sometimes|string|max:255',
            'fruit' => 'nullable|string|max:255',
            'bounty' => 'sometimes|integer',
        ]);

        $character->update($validated);

        return response()->json([
            'message' => 'Character updated successfully',
            'data' => $character
        ]);
    }

    // 🔹 Menghapus karakter
    public function destroy($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found'], 404);
        }

        $character->delete();

        return response()->json(['message' => 'Character deleted successfully']);
    }
}
