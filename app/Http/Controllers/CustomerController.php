<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{
    /**
     * 初期表示
     */
    public function index() {
        $customers = Customers::all();

        return view('customer.index', compact('customer'));
    }

    /**
     * 検索
     */
    public function find()
    {
        return view('customer.find', compact('find'));
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
    public function edit()
    {
        return view('customer.edit', compact('edit'));
    }

    /**
     * 詳細
     */
    public function detail()
    {
        return view('customer.detail', compact('detail'));
    }

    /**
     * 登録
     */
    public function store()
    {
        return redirect()->route('index');
    }

    /**
     * 更新
     */
    public function update()
    {
        return redirect()->route('index');
    }

    /**
     * 削除
     */
    public function delete()
    {
        return redirect()->route('index');
    }
}
