<?php

namespace App\Providers;

use App\Models\Time;

class TimeService
{
    public function getAllTimes()
    {
        return Time::all();
    }

    public function getChosenTimes()
    {
        return Time::where('isAlreadyChosen', true)->get();
    }

    public function chooseTime(int $id)
    {
        $time = Time::findOrFail($id);
        $time->isAlreadyChosen = true;
        $time->save();

        return $time;
    }

    public function createTime(array $data)
    {
        return Time::create($data);
    }


}
