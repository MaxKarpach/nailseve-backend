<?php

namespace App\Providers;

use App\Models\Record;

class RecordService
{
    public function getAllRecords()
    {
        return Record::with('items')->get();
    }

    public function createRecord(array $data)
    {
        $record = Record::create([
            'date' => $data['date'],
            'time' => $data['time'],
        ]);

        $record->items()->attach($data['items']);

        return $record->load('items');
    }
}
