<?php

namespace App\Observers;

use App\Models\NewTableModel;
use App\Models\OldTableModel;

class NewTableObserver
{
    public function created(NewTableModel $newRecord)
    {
        // Synchroniser avec old_table
        OldTableModel::updateOrCreate(
            ['id' => $newRecord->id],
            [
                'ne' => $newRecord->name,
                'phone' => $newRecord->mobile
            ]
        );
    }

    public function updated(NewTableModel $newRecord)
    {
        // Synchroniser avec old_table
        OldTableModel::updateOrCreate(
            ['id' => $newRecord->id],
            [
                'ne' => $newRecord->name,
                'phone' => $newRecord->mobile
            ]
        );
    }
}
