<?php

namespace App\Providers;

use App\Models\Date;

class DateService
{
    public function getAllDates()
    {
        return Date::all();
    }

    public function getChosenDates()
    {
        return Date::where('isAlreadyChosen', true)->get();
    }

    public function chooseDate(int $id)
    {
        $date = Date::findOrFail($id);
        $date->isAlreadyChosen = true;
        $date->save();

        return $date;
    }

        public function createDate(array $data)
    {
        return Date::create($data);
    }

}
