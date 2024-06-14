<?php

namespace App\Http\Controllers;

use App\Models\NewTableModel;
use Illuminate\Http\Request;

class NewTableController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
        ]);

        $newRecord = NewTableModel::create($validated);

        return response()->json($newRecord, 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
        ]);

        $oldRecord = NewTableModel::findOrFail($id);
        $oldRecord->update($validated);

        return response()->json($oldRecord, 200);
    }
}