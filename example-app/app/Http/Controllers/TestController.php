<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;//命名空间三元素：常量，方法，类
use Input;
use DB;


class TestController extends Controller
{
    //测试Controller 的route
    public function test1(){
        return phpinfo();
    }

    
    public function test2(){
        echo Input::get('id', '10010');
        $all = Input::all();
        //获取所有
        //dd($all);
        //获取指定的信息
        //dd(Input::get('name'));
        //获取指定几个信息
        //dd(Input::only(['id', 'name']));
        //除
        //dd(Input::except(['name']));
        //判断某个值是否存在
        dd(Input::has('gender'));

    }

    public function add(){
        $db = DB::table('contact');
        $result = $db -> insert([
            [
                'name' => 'Jack',
                'email' => 'jack@jack.com',
                'message' => 'Hello jack'
            ],
            [
                'name' => 'Mike',
                'email' => 'Mike@Mkie.com',
                'message' => 'Hello Mike'
            ],
        ]);
        dd($result);
    }

    public function addone(){
        $db = DB::table('contact');
        $result = $db -> insertGetId([
            
                'name' => 'Json',
                'email' => 'json@json.com',
                'message' => 'Hello json'
            
            
        ]);
        dd($result);
    }

    public function update(){
        $db = DB::table('contact');
        $result = $db -> where('id', '=', '1') -> update([
            'name' => 'Jackie',
            'email' => 'jackie@jackie',
        ]);
        dd($result);
    }

    public function select(){
        $db = DB::table('contact');
        // $data = $db -> get();
        // $data = json_decode($data, true);
        // foreach ($data as $key => $value) {
        //     //{$value -> id}
        //     echo "id is: {$value['id']}, name is: {$value['name']}</br>";
        // }
        $data = $db -> where('id', '=', '1') -> get();
        dd($data);        
    }

    public function delete(){
        $db = DB::table('contact');
        $result = $db -> where('id', '=', '7') -> delete();
        dd($result);
    }  
    
    
    public function test3(){
        $date = date('Y-m-d H:i:s', time());
        $day = date('N');
        $time = strtotime('-4 hour');
        return view('home.test.test3',compact('date', 'day', 'time'));
    }

    public function test4(){
        $data = DB::table('contact') -> get();
        // $data = json_decode($data, true);
        return view('home.test.test4', compact('data'));
    }

    public function test5(){
        return view('home.test.test5');
    }
}
