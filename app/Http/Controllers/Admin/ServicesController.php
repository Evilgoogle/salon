<?php

namespace App\Http\Controllers\Admin;

use App\Http\CrudClass;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    protected $crudClass;
    protected $info;

    public function __construct()
    {
        $this->crudClass = new CrudClass();
        $this->info = (object)[];
        $this->info->head = 'Услуги';
        $this->info->url = 'services';
        $this->info->modelName = 'Service';
        $this->middleware('role:superadmin');
    }

    public function index()
    {
        $items = Service::orderBy('order', 'ASC')->get();
        $info = $this->info;

        return view('admin.services.index', compact(['items', 'info']));
    }

    public function add()
    {
        $info = $this->info;

        return view('admin.services.insert', compact(['info']));
    }

    public function edit($id)
    {
        $info = $this->info;

        try {
            $item = Service::findOrFail($id);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return view('admin.services.insert', compact(['item', 'info']));
    }

    public function remove($id)
    {
        $result = $this->crudClass->remove($this->info->modelName, $id);

        return back()->with($result);
    }

    public function insert(Request $request, $id = null)
    {
        $rules = [
            'title' => 'required',
            'desc' => 'required',
            'icon' => 'required',
            'image' => 'required',
        ];
        $arr = [];
        if (empty($id)) {
            $arr = [
                'title' => 'required',
                'image' => 'required',
            ];
        }

        $rules = [];
        $rules = array_merge($rules, $arr);

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) return back()->withErrors($v->errors())->withInput();

        $result = $this->crudClass->insert($this->info->modelName, $id ,$request, null, null, null);

        if ($result['status'] == 'ok')
            return redirect('/admin/'.$this->info->url)->with('message', 'Запись обновлена');
        else
            return back()->withErrors($result['message']);
    }
}
