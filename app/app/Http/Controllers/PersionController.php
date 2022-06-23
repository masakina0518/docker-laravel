<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Scopes\ScopePerson;
use App\Services\TestService;
use Illuminate\Http\Request;

class PersionController extends Controller
{
    public function index(Request $request, TestService $testService) {
        $items = Person::withoutGlobalScope(ScopePerson::class)->get();
        return view('person.index', ['items'=> $items, 'service' => $testService->test()]);
    }


    public function find(Request $request) {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request) {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGeaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

}
