<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $rows = [
        [
            'title' => 'HTML 與CSS 修改',
            'category' => '程式',
            'description' => '修改 ghost blog theme, ghost blog 使用handlebar模板引擎，不懂的話我可以教你，所以只要幫忙將原本相關的HTML與CSS修改好即可'
        ],
        [
            'title' => '2/字_筆_中譯英_摘要_666字_20170717',
            'category' => '翻譯',
            'description' => '[必]所屬領域：工程 [必]文件類型：論文摘要'
        ],
        [
            'title' => '菜單設計',
            'category' => '設計',
            'description' => '菜單設計排版 插圖 （拍照）'
        ],
    ];

    return view('welcome', compact('rows'));
});
