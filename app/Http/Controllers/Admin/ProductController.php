<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
//importante
use App\Models\Category;
use App\Models\Product;
use Validator, Str, Config;
use Illuminate\Http\Request; 

class ProductController extends Controller
{
    //
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    public function getHome(){
        $products = Product::with('category')->get();
        return view('admin.products.home', ['products' => $products]);
    }
    public function getProductAdd(){ 
        $categories = Category::all();
        $categories = Category::pluck('name', 'id');
        return view('admin.products.add', ['categories' => $categories]);  
    }
    public function postProductAdd(Request $request){
        $rules = [
            'name' => 'required',
            'Foto' => 'required|image|max:1000|mimes:jpeg,jpg,png',
            'content' => 'required'
        ];

        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'Foto.required' => 'Seleccione una imagen destacada',
            'Foto.image' => 'El archivo debe ser una imagen',
            'Foto.max' => 'El tamaño máximo de la imagen es de 1MB',
            'Foto.mimes' => 'El archivo debe ser de tipo JPEG, JPG o PNG',
            'content.required' => 'Ingrese una breve descripción del producto'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $product = new Product;  
            $product->status = '0';
            $product->name = e($request->input('name'));
            $product->slug = Str::slug($request->input('name'));
            $product->category_id = $request->input('category');
            $product->content = e($request->input('content'));
    
            if($request->hasFile('Foto')):
                $imgPath = $request->file('Foto')->store('uploads', 'public');
                $product->Foto = $imgPath;
            endif;
            
          
            if($product->save()):
                return redirect('/admin/products')->with('message', 'Guardado con éxito')->with('typealert', 'success');
            else:
                return back()->with('message', 'Se ha producido un error al guardar el producto')->with('typealert', 'danger');
            endif;
        endif;
    }

    public function getProductEdit($id){
        $product = Product::find($id);
        $data = ['product' => $product];
        $categories = Category::pluck('name', 'id');
        return view('admin.products.edit', compact('product', 'categories'));
        
    }
    

    public function postProductEdit(Request $request, $id){
        $rules = [
            'name' => 'required',
            'Foto' => 'required|max:1000|mimes:jpeg,jpg,png',
            'content' => 'required'
        ];
        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'Foto.required' => 'Seleccione una imagen destacada',
            'Foto.image' => 'El archivo debe ser una imagen',
            'Foto.max' => 'El tamaño máximo de la imagen es de 1MB',
            'Foto.mimes' => 'El archivo debe ser de tipo JPEG, JPG o PNG',
            'content.required' => 'Ingrese una breve descripción del producto'
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger');
        else:
            $product = Product::find($id);  
            $product->name = e($request->input('name'));
            $product->slug = Str::slug($request->input('name'));
            $product->category_id = $request->input('category');
            $product->content = e($request->input('content'));
            if ($request->hasFile('Foto')) {
                $imgPath = $request->file('Foto')->store('uploads', 'public');
                $product->Foto = $imgPath;
            }
            if($product->save()):
                return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
            else:
                return back()->with('message', 'Se ha producido un error al guardar el producto')->with('typealert', 'danger');
            endif;
        endif;
    }
    
    public function getProductDelete($id){
        $c = Product::find($id);
        if($c->delete()):
            return back()->with('message', 'Eliminado con exito')->with('typealert', 'success');
        endif;
    }

}

