<?php

namespace App\Observers;

use App\Models\OldTableModel;
use App\Models\NewTableModel;

class OldTableObserver
{
    public function created(OldTableModel $oldRecord)
    {
        // Synchroniser avec new_table
        NewTableModel::updateOrCreate(
            ['id' => $oldRecord->id],
            [
                'name' => $oldRecord->ne,
                'mobile' => $oldRecord->phone
            ]
        );
    }

    public function updated(OldTableModel $oldRecord)
    {
        // Synchroniser avec new_table
        NewTableModel::updateOrCreate(
            ['id' => $oldRecord->id],
            [
                'name' => $oldRecord->ne,
                'mobile' => $oldRecord->phone
            ]
        );
    }
}