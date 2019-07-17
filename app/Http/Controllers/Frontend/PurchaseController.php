<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('frontend.purchase.index',[
            'purchases' => $purchases,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('frontend.purchase.create',[
            'products'=> $products,
            'suppliers'=> $suppliers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $productstock = Product::select('stock')->where('id', $request->product_id)->first()->stock+$request->stock;

        $originalDate = $request->dates;
        $date = date("Y-m-d", strtotime($originalDate));

        Purchase::create([
            'product_id'    => $request->product_id,
            'supplier_id'   => $request->supplier_id,
            'stock'         => $request->stock,
            'date'          => $date,
            'note'          => $request->note,
        ]);   
        
        Product::where('id', $request->product_id)->update(array('stock' => $productstock));


        return redirect('purchase')->with('success', 'Data telah terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('frontend.purchase.edit',
        [
            'purchase'=>$purchase,
            'products' => $products,
            'suppliers' => $suppliers,      
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productstock = Product::select('stock')->where('id', $request->product_id)->first()->stock;
        $productsstock = Purchase::select('stock')->where('id', $id)->first()->stock;

        if($productsstock < $request->stock){
            $resultstock = $productstock + ($request->stock - $productsstock);
        }elseif($productsstock > $request->stock){
            $resultstock =  $productstock - ($productsstock - $request->stock);
        }elseif($productsstock == $request->stock){
            $resultstock = $productsstock;
        }

        
        Product::where('id', $request->product_id)->update(array('stock' => $resultstock));

        Purchase::where('id', $id)->update(array('stock' => $request->stock));


        return redirect('purchase')->with('success', 'Data telah terkirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
