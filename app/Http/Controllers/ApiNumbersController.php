<?php

namespace App\Http\Controllers;

use App\Services\NumberService;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class ApiNumbersController extends Controller
{

    private NumberService $NumberService;
    // Constructor for NumberService class
    public function __construct(NumberService $numberService){
        $this->NumberService = $numberService;
    }
    // This function takes the Data from NumberService and returns it in JSON form
    public function NumberArray(): \Illuminate\Http\JsonResponse
    {
        $RandNumbers = $this->NumberService->RandomArr();
        $OrderNumbers = $this->NumberService->OrderArr();
        $EvenNumbers = $this->NumberService->EvenArr();
        $DoubleNumbers = $this->NumberService->DoubleArr();
        $UnevenNumbers = $this->NumberService->UnevenArr();

        return response()->json([
            'Random Numbers' => $RandNumbers,
            'Numbers in order' => $OrderNumbers,
            'Even Numbers' => $EvenNumbers,
            'Double Numbers' => $DoubleNumbers,
            'Uneven Numbers' => $UnevenNumbers

        ]);
    }
}
