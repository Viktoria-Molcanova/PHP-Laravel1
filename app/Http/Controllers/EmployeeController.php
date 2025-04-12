<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $position = $request->input('position');
        $address = $request->input('address');
        $email = $request->input('email');
        $workData = $request->input('workData');
        $jsonData = $request->input('jsonData');

        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        if ($jsonData) {
            $data = json_decode($jsonData, true);
            $street = $data['address']['street'] ?? null;
            $city = $data['address']['city'] ?? null;
        }


        return "Данные успешно получены!";
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');


        return "Данные пользователя с ID $id успешно обновлены!";
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
