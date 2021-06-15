<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * 初期表示
     */
    public function index() {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    /**
     * 検索
     */
    public function find(Request $request)
    {
        $query = Customer::query();
        //検索条件
        $search1 = $request->input('last_kana');
        $search2 = $request->input('first_kana');
        $search3 = $request->input('gender');
        $search4 = $request->input('pref_id');

        //データの取得
        if ($request->has('last_kana') && $search1 != '') {
            $query->where('last_kana', 'like', '%'.$search1.'%')->get();
        }

        if ($request->has('first_kana') && $search2 != '') {
            $query->where('first_kana', 'like', '%'.$search2.'%')->get();
        }

        if ($request->has('') && $search3 != '') {
            $query->where('', 'like', '%'.$search3.'%')->get();
        }

        if ($request->has('') && $search4 != '') {
            $query->where('', 'like', '%'.$search4.'%')->get();
        }
    }


    /**
     * 新規登録
     */
    public function create()
    {
        return view('customer.create', compact('create'));
    }

    /**
     * 編集
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        return view('customer.edit', compact('edit'));
    }

    /**
     * 詳細
     */
    public function detail(Request $request)
    {
        return view('customer.detail', compact('detail'));
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
