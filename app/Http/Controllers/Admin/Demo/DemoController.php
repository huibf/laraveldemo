<?php

namespace App\Http\Controllers\Admin\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\Common\CommonController;
//use App\Ceshi;
use App\Model\Admin\Ceshi;

class DemoController extends CommonController
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct(); //父类需有构造函数
        // $this->middleware('demoage'); //路由中间件
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $users = DB::table('tbl_ceshi')->get();//查询构造器
        $users = DB::table('ceshi')->get();//查询构造器
        $student = DB::select("select * from tbl_ceshi");//原始方式
        echo '<br>user:';
        var_dump($users);
        echo '<br>student:';
        // dd($student);
        foreach ($users as $user) {
            echo '<br>name:';
            var_dump($user->name);
        }

        $tmp_arr = $users->toArray(); // 转换成数组
        echo '<br>arr:';
        var_dump($tmp_arr);

        $studnetds = Ceshi::all();//Eloquent ORM
        echo '<br>studnetds:';
        foreach ($studnetds as $flight) {
            echo $flight->name;
        }
        // echo '<br>return studnetds:';   return $studnetds;
        // dd($studnetds);


        $id = 10;
        $article = Ceshi::find($id);
        if (is_null($article)) {
            //  abort(404);
        }

        $user = new Ceshi;
        $user->name = "Wruce Bayne";
        $user->age = 10;
        // $user->save();

        echo '<br>cookie:';

        var_dump($this->getCookie());

        $this->setCookie();

        $url = route('login', ['id' => 1]);

        //  return view('admin.demoss', ['name' => 'James','users' => $studnetds, 'cookiett'=>'45689']);
        // return redirect('admin/login');
        // return redirect()->route('login');
        return '<br></br>admin/demo/democontrolller <br>  index ';
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

        // $this->setCookie();
        //  request()->session()->regenerate();
        // request()->session()->flush();
        // $value = request()->session()->get('_token');
        $data = request()->session()->all();
        var_dump($data);

        // dump($data);//对 cookie 有影响；

        $value = session('_token');

        echo $value . '<br>';

        $value = session('_previous.url');

        echo $value . '<br>';
        if (request()->session()->has('_token')) {
            echo 'session has;<br>';
        }
        if (request()->session()->exists('_token')) {
            echo 'session exists;<br>';
        }
        return 'show NO;' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit ;' . $id;
    }

    public function edita($id, $name = null)
    {
        //
        return 'edita;id:' . $id . ';name:' . $name;
    }


    public function editb(Request $request, $id, $name = null)
    {
        var_dump($request->all());
        echo '<br>';
        $music = $request->input('music');
        $book = request()->input('book');
        $str = <<<EOF
id： $id <br>
name： $name <br>
music： $music <br>
book： $book <br>
EOF;
        return $str;

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
}
