<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Product;
use App\CurrencyUnit;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $shop = $user->userable;
        $paginator = Product::where(['supplier_id' => $user->id])->orderBy('id', 'desc')->paginate(10);
        $products=$paginator->items();

        return view('dashboard.productList', ['products' => $products,'paginator'=>$paginator]);


    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Product::find($id)) {
            return redirect()->back()->withErrors(['messages' => "ürün bulunamadı"]);
        }

        $product = Product::find($id);
        if (Auth::user()->id != $product->supplier_id) {
            return redirect()->back()->withErrors(['messages' => "ürün size ait değil"]);
        }
    }

    public function setAsActive($id)
    {

        if (!Product::find($id)) {
            return redirect()->back()->withErrors(['messages' => "ürün bulunamadı"]);
        }

        $product = Product::find($id);
        if (Auth::user()->id != $product->supplier_id) {
            return redirect()->back()->withErrors(['messages' => "ürün size ait değil"]);
        }

        if($product->isActivable()){
            $product->is_active = true;
            $product->update();

            return redirect()->back()->with(['success' => ["Aktive edildi"]]);
        }else{
            return redirect()->back()->withErrors(['messages'=>['aktif olabilmesi için başlık,fiyat ve para birimi dolu olmalıdır']]);
        }



    }

    public function setAsDeactive($id)
    {

        if (!Product::find($id)) {
            return redirect()->back()->withErrors(['messages' => "ürün bulunamadı"]);
        }
        $product = Product::find($id);
        if (Auth::user()->id != $product->supplier_id) {
            return redirect()->back()->withErrors(['messages' => "ürün size ait değil"]);
        }

        $product->is_active = false;
        $product->update();
        return redirect()->back()->with(['success' => ["Deaktive edildi"]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Product::find($id)) {
            return redirect()->back()->withErrors(['messages' => "ürün bulunamadı"]);
        }
        $product = Product::find($id);
        if (Auth::user()->id != $product->supplier_id) {
            return redirect()->back()->withErrors(['messages' => "ürün size ait değil"]);
        }
        $units = CurrencyUnit::all();
        $categories = Category::all();
        return view('dashboard.productEdit', ['product' => $product, 'currency_units' => $units, 'categories' => $categories]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Product::find($id)) {
            // return view('dashboard.supplierProfileEdit');
            return redirect()->back()->withErrors(['messages' => "ürün bulunamadı"]);
        }
        $product = Product::find($id);
        if (Auth::user()->id != $product->supplier_id) {
            //return view('dashboard.supplierProfileEdit');
            return redirect()->back()->withErrors(['messages' => "ürün size ait değil"]);
        }
        $rules = array(
            'title' => 'required',
            'price' => 'required|numeric',
            'is_active' => 'required',
        );

        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make($request->all(), $rules);

        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // get the error messages from the validator
            $updateProduct = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            // return view('dashboard.supplierProfileEdit');
            return back()->withInput()->withErrors($validator);

        } else {

            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->currency_unit_id = CurrencyUnit::where('unit_short_name','try')->first()->id;
            if ($request->input('is_active') == '1') {
                $product->is_active = ($product->isActivable())?true:false;
            } else {
                $product->is_active = false;
            }

            $product->update();

            $product->categories()->detach();
            foreach ($request->input('categories') as $category) {
                if (Category::find($category)) {
                    $product->categories()->attach(Category::where('id',$category)->first());
                }

            }
            return redirect()->back()->with('success', ['Ürün bilgileri güncellendi']);
        }


    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
