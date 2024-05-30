<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitConverterController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function convertUnits(Request $request)
    {
        $request->validate([
            'value' => 'required|numeric',
            'from_unit' => 'required|string',
            'to_unit' => 'required|string',
        ]);

        $value = $request->input('value');
        $fromUnit = $request->input('from_unit');
        $toUnit = $request->input('to_unit');

        $result = $this->performConversion($value, $fromUnit, $toUnit);

        return response()->json([
            'value' => $value,
            'fromUnit' => $fromUnit,
            'toUnit' => $toUnit,
            'result' => $result,
        ]);
    }

    private function performConversion($value, $fromUnit, $toUnit)
    {
        $conversionRates = [
            'meters' => 1,
            'kilometers' => 0.001,
            'centimeters' => 100,
            'millimeters' => 1000,
            'miles' => 0.000621371,
            'feet' => 3.28084,
            'inches' => 39.3701,
            'liters' => 1,
            'centiliters' => 100,
            'milliliters' => 1000,
        ];

        if (!isset($conversionRates[$fromUnit]) || !isset($conversionRates[$toUnit])) {
            return null;
        }

        $baseValue = $value / $conversionRates[$fromUnit];
        $convertedValue = $baseValue * $conversionRates[$toUnit];

        return $convertedValue;
    }
}
