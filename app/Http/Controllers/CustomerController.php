<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Pref;

class CustomerController extends Controller
{
    /**
     * 初期表示
     */
    public function index() {
        $customers = Customer::all();
        $prefs = Pref::all();
        $input = [
            'last_kana' => '',
            'first_kana' => '',
            'gender1' => '',
            'gender2' => '',
            'pref_id' => '',
        ];

        return view('customer.index', compact('customers', 'prefs', 'input'));
    }

    /**
     * 検索
     */
    public function find(Request $request)
    {
        $input = $request->input();
        // dd($input);
        $query = Customer::query();

        //データの取得
        if (!empty($input['last_kana'])){
            $query->where('last_kana', 'like', '%'.$input['last_kana'].'%');
        }
        if (!empty($input['first_kana'])){
            $query->where('first_kana', 'like', '%'.$input['first_kana'].'%');
        }
        if (!empty($input['gender1']) || !empty($input['gender2'])){
            $gender = [];
            if(!empty($input['gender1'])){
                $gender[] = $input['gender1'];
            }
            if(!empty($input['gender2'])){
                $gender[] = $input['gender2'];
            }
            $query->whereIn('gender', $gender);
        }

        if (!empty($input['pref_id'])){
            $query->where('pref_id', '=' , $input['pref_id']);
        }



        $customers = $query->get();
        $prefs = Pref::all();

        return view('customer.index', compact('customers', 'prefs', 'input'));
    }


    /**
     * 新規登録
     */
    public function create()
    {
        $prefs = Pref::all();
        return view('customer.create', compact('prefs'));
    }

    /**
     * 編集
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $customer = Customer::find($id);
        $prefs = Pref::all();
        return view('customer.edit', compact('customer', 'prefs'));
    }

    /**
     * 詳細
     */
    public function detail(Request $request)
    {
        $id = $request->id;
        $customer = Customer::find($id);
        return view('customer.detail', compact('customer'));
    }

    /**
     * 登録
     */
    public function store(Request $request)
    {
        return redirect()->route('index');
    }

    /**
     * 更新
     */
    public function update(Request $request)
    {
        return redirect()->route('index');
    }

    /**
     * 削除
     */
    public function delete(Request $request)
    {
        return redirect()->route('index');
    }
}
