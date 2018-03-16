<?php

namespace App\Http\Controllers\Admin;

use App\Prediction;
use App\PredictionNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(empty($request->name)) {
            return abort(404, 'Страница не найдена');
        }
        else {
            $prediction = Prediction::with('numbers')->whereName($request->name)->first();
            if (count($prediction) == 0) {
                return abort(404, 'Страница не найдена');
            }
            else {
                return view('admin.pages.prediction.index', ['predictions' => $prediction]);
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(empty($request->name)) {
            return abort(404, 'Страница не найдена');
        }
        else {
            $prediction = Prediction::whereName($request->name)->first();
            if (count($prediction) == 0) {
                return abort(404, 'Страница не найдена');
            }
            else {
                return view('admin.pages.prediction.add', ['predictions' => $prediction]);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
            'number' => 'required|numeric',
            'name' => 'required'
        ]);
        $pred = Prediction::whereName($request->name)->first();
        $prediction = PredictionNumber::where('prediction_id',$pred->id)
            ->where('number', $request->number)->first();
        if (count($prediction) != 0) {
            return redirect()->back()->withInput()->withErrors(
                [
                    'Ключ '.$request->number.' уже имеется для '.$pred->name_rus.'. Пожалуйста, измените значения ключа, или перейдите в другой раздел'
                ]
            );
        }
        else {
            $status = PredictionNumber::create([
                'prediction_id' => $pred->id,
                'number' => $request->number,
                'text' => $request->text
            ]);
            if ($status) {
                $this->clearCache();
                \Session::flash('flash_message', 'Успешно добавлено');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pred = PredictionNumber::findOrFail($id);
        return view('admin.pages.prediction.edit', ['pred' => $pred]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);
        $pred = PredictionNumber::findOrFail($id);
        $status = $pred->fill([
            'text' => $request->text
        ])->save();
        if ($status) {
            $this->clearCache();
            \Session::flash('flash_message', 'Успешно обновлено');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pred = PredictionNumber::findOrFail($id);
        $status = $pred->delete();
        if($status) {
            $this->clearCache();
            \Session::flash('flash_message','Успешно удалено');
            return redirect()->back();
        }
    }
}
