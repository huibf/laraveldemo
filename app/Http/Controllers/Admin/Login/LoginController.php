<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreRulePost;
use App\Model\Admin\Ceshi;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginRulePost;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'admin/login/loginController <br> index';

        $id = 10;
        $article = Ceshi::find($id);

        $strdemo = demo(); //公共方法;app/service/utils/functions.php

        return view('admin.login.login', ['name' => $strdemo, 'users' => $article, 'cookiett' => '45689']);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   // public function profile(StoreRulePost $request)
   public function profile(LoginRulePost $request)
    {
        /*
                $validatedData = $request->validate([
                    'user' => 'required|max:5',
                    'password' => 'required',
                ]);
        */

      //  $validated = $request->validated();

        echo 'admin/login/loginController <br> profile';
        dd($request->input('user'), $request->input('password'));

    }
}
