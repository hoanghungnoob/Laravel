<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request){
        if($request->is('categories')){
            echo "xin chao hunghoang";
        }
    }
    //hiển thị danh sách chuyên mục GET
    public function index(Request $request){
         // if (isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
        // $dataRequest = $request->all();
        // dd($dataRequest);
        // $path = $request->path();
        // echo $path;
        // $url = $request->url();
        // $fullUrl = $request->fullUrl();
        // $method = $request->method();

        // $ip = $request->ip();
        // echo 'ip'.$ip;
        // $server = $request ->server();
        // dd($server);

        // $header = $request->header();
        // dd($header['']);

        // $id = $request->input('id');

        // $input= $request->input();
        // dd($input);

        // $id=$request->input('id.*.name');
        // $id = $request->id;
        // $name = $request->name;
        // dd($id);

        // $name = request('name','Hungarian');
        // dd($name);

        // $id = $request->query('id');
        // dd($id);

        // $query = $request->query();
        // dd($query);

        // if($request->has('category_name')){
        //     $cateName = $request->category_name;
        //     dd($cateName);
        // }else{
        //     return "không có";
        // }
        return view('clients/categories/list');
    }
    // lấy ra 1 chuyên mục theo id (pt GET)
    public function getCategory($id){
    
        // return view("clients/categories/edit");
        return 'chi tiết chuyên mục'.$id;
    }
    // cập nhật 1 chuyên mục pt POST
    public function updateCategory($id){

    }
    //show form thêm dữ liệu phương thức GET
    public function addCategory(Request $request){
        // $path = $request->path();
        // echo $path;

        $old = $request->old('category_name');
        
        return  view('clients/categories/add',compact('old'));
    }
    //thêm dữ liệu phương thức POST
    public function handleAddCategory(Request $request){
        // $allData = $request->all();
        // dd($allData);
        if($request->has('category_name')){
            $cateName = $request->category_name;
            $request->flash();
            return redirect(route('categories.add'));
        }else{
            return "không có category";
        }
    }
    //xóa dữ liệu
    public function deleteCategory($id){}

    public function getFile(){
        return view('clients/categories/file');
    }
    // xử lý lấy thoong tin file
    public function handleFile(Request $request){
        
        if($request->hasFile('photo')){
            if($request->photo->isValid()){
                $file = $request->photo;
                // $path = $file->path();
                $ext = $file->extension();
                // $path = $file->store('images');
                // $path = $file->storeAs('file-txt','khoa hoc');
                // $fileName = $file->getClientOriginalName();
                
                //đỏii tên
                // $fileName = md5(uniqid()).'.'.$ext;
                // dd($fileName);

            }else{
                return "upload không thành công";
            }
        }else{
            return "not found";
        }
    }
}
