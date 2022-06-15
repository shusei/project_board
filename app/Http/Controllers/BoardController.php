<?php
// 現在是2022年6月15日，很遺憾，經過昨天的Code Review之後，
// 我們必須重寫，新手尚未了解Laravel之前，需要自己一個一個慢慢刻自己的CRUD function
// 不能使用指令-r
// 故此檔案保留，以待後人補完，聖鈞在此拜謝！

// 此檔案使用指令生出 php artisan make:model Board -rmc
// 指令 -r 會使 BoardController.php 載入 CRUD  預設方法
namespace App\Http\Controllers;

use App\Models\Board;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 列出所有資料
        $boards = Board::get();
        return response(['data' => $boards], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //新增留言
        $board = Board::create($request->all());
        $board = $board->refresh();

        return response($board, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        // 查詢單筆資料
        return response($board, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        // 修改留言，傳入的第一個參數為修改後的留言，第二個參數為修改哪一筆id的留言資料
        $board->update($request->all());
        return response($board, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        // 刪除留言
        $board->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
