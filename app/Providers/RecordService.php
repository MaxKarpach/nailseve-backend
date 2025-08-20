<?php

namespace App\Providers;

use App\Models\Record;
use App\Models\Time;

class RecordService
{
    public function getAllRecords()
    {
        return Record::with(['items', 'time'])->get();
    }

    public function createRecord(array $data)
    {
        $time = Time::findOrFail($data['time_id']);
        $time->isAlreadyChosen = true;
        $time->save();

        $record = Record::create([
            'time_id' => $data['time_id'],
        ]);

        $record->items()->attach($data['items']);

        return $record->load(['items', 'time']);
    }
}
