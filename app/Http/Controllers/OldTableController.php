<?php

namespace App\Http\Controllers;

use App\Models\OldTableModel;
use Illuminate\Http\Request;

class OldTableController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ne' => 'required|string',
            'phone' => 'required|string',
        ]);

        $oldRecord = OldTableModel::create($validated);

        return response()->json($oldRecord, 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ne' => 'required|string',
            'phone' => 'required|string',
        ]);

        $oldRecord = OldTableModel::findOrFail($id);
        $oldRecord->update($validated);

        return response()->json($oldRecord, 200);
    }
}