<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RecordService;

class RecordController extends Controller
{
    private $recordService;

    public function __construct(RecordService $recordService)
    {
        $this->recordService = $recordService;
    }

    public function index()
    {
        return response()->json(
            $this->recordService->getAllRecords()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'time_id' => 'required|integer|exists:times,id',
            'items'   => 'required|array',
            'items.*' => 'integer|exists:service_items,id',
        ]);

        $record = $this->recordService->createRecord($validated);

        return response()->json($record);
    }
}
