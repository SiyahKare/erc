<?php

use Illuminate\Support\Facades\Route;

use Onurmutlu\Parasut;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

// SSL Enforce
URL::forceScheme('https'); // SSL Enforce URLs

Route::get('/', function () { return view('anasayfa'); });
Route::get('/anasayfa', function () { return view('anasayfa'); });
Route::get('/hakkimizda', function () { return view('hakkimizda'); });

Route::get('/urunler-signia', function () { return view('urunler-signia'); });
Route::get('/urunler-styletto', function () { return view('urunler-styletto'); });
Route::get('/urunler-motiongox', function () { return view('urunler-motiongox'); });
Route::get('/urunler-purecharge', function () { return view('urunler-purecharge'); });
Route::get('/urunler-pure312x', function () { return view('urunler-pure312x'); });
Route::get('/urunler-cros', function () { return view('urunler-cros'); });
Route::get('/urunler-insioiic', function () { return view('urunler-insioiic'); });
Route::get('/urunler-insioitt', function () { return view('urunler-insioitt'); });
Route::get('/urunler-signiasilk', function () { return view('urunler-signiasilk'); });
Route::get('/urunler-signiaassistans', function () { return view('urunler-signiaassistans'); });

Route::get('/urunler-widex', function () { return view('urunler-widex'); });
Route::get('/urunler-widex-evoke', function () { return view('urunler-widex-evoke'); });
Route::get('/urunler-widex-beyondz', function () { return view('urunler-widex-beyondz'); });
Route::get('/urunler-widex-unique', function () { return view('urunler-widex-unique'); });

Route::get('/urunler-temizlik', function () { return view('urunler-temizlik'); });
Route::get('/urunler-piller', function () { return view('urunler-piller'); });

Route::get('/iletisim', function () { return view('contact'); });

Route::get('/subeler-izmit', function () { return view('subeler-izmit'); });
Route::get('/subeler-izmit-plus', function () { return view('subeler-plus'); });
Route::get('/subeler-derince', function () { return view('subeler-derince'); });
Route::get('/subeler-sakarya', function () { return view('subeler-sakarya'); });

Route::get('/erc-tv', function () { return view('erc-tv'); });

Route::get('api/contact', function () {

    set_time_limit(60000);

    $contacts = new Parasut\Account();
    $contactsList = $contacts->list();
    $arr = json_decode($contactsList, true);

    $pageCount = $arr['meta']['total_pages'];

    $k = 1;

    error_reporting(0);

    for ($i = 1; $i <= $pageCount; $i++){

        $contactsList2 = $contacts->list(['page_size' => 25, 'page_number'=> $i]);

        $arr1 = json_decode($contactsList2, true);
        $arr2 = $arr1['data'];

        foreach ($arr2 as $key=>$value){
            // print_r($k.' - '.$value['id'].' '.$value['attributes']['contact_type'].' '.$value['attributes']['name'].' '.$value['attributes']['tax_number'].' '.$value['attributes']['account_type'].' <br />');
            // print_r($k.' - '.$value['id'].' '.$value['attributes']['contact_type'].' '.$value['attributes']['name'].' <br />');

            $contactRecord = App\Models\Contact::updateOrCreate([
                'contact_id' => $value['id'],
                'contact_type' => $value['attributes']['contact_type'],
                'name' => $value['attributes']['name'],
                'email' => $value['attributes']['email'],
                'short_name' => $value['attributes']['short_name'],
                'tax_number' => $value['attributes']['tax_number'],
                'tax_office' => $value['attributes']['tax_office'],
                'account_type' => $value['attributes']['account_type'],
                'city' => $value['attributes']['city'],
                'district' => $value['attributes']['district'],
                'address' => $value['attributes']['address'],
                'phone' => $value['attributes']['phone']
            ]);
            $k++;
            // $contentProducts[$value['id']] = $value['attributes']['name'];
        }

    }
});



Route::get('api/product', function () {

    set_time_limit(60000);

    $products = new Parasut\Product();
    $productsList = $products->list();
    $arr = json_decode($productsList, true);

    // dd($arr);

    $pageCount = $arr['meta']['total_pages'];

    $k = 1;

    error_reporting(0);

    for ($i = 1; $i <= $pageCount; $i++){
        $productsList2 = $products->list(['page_size' => 25, 'page_number'=> $i]);

        $arr1 = json_decode($productsList2, true);
        $arr2 = $arr1['data'];

        foreach ($arr2 as $key=>$value){
            // print_r($k.' - '.$value['id'].' '.$value['attributes']['name'].'<br />');
            $productRecord = App\Models\Product::updateOrCreate([
                'product_id' => $value['id'],
                'code' => $value['attributes']['code'],
                'name' => $value['attributes']['name'],
                'vat_rate' => $value['attributes']['vat_rate'],
                'unit' => $value['attributes']['unit'],
                'list_price' => $value['attributes']['list_price'],
                'list_price_in_trl' => $value['attributes']['list_price_in_trl'],
                'currency' => $value['attributes']['currency'],
                'buying_price' => $value['attributes']['buying_price'],
                'buying_price_in_trl' => $value['attributes']['buying_price_in_trl'],
                'buying_currency' => $value['attributes']['buying_currency'],
                'stock_count' => $value['attributes']['stock_count'],
                'initial_stock_count' => $value['attributes']['initial_stock_count'],
                'critical_stock_count' => $value['attributes']['critical_stock_count']
            ]);

            $k++;
            // $contentProducts[$value['id']] = $value['attributes']['name'];
        }
    }

    // dd($pageSize);


    // $productsList = $products->list(['page_size' => 25, 'page_number'=> 2]);
    // $productsList = $products->list(['page[number]' => 2]);
    // dd($productsList);

    // return $contentProducts;

    // dd($productsList->pluck('name','data.*.attributes'));
    // dd($productsList);

    // dd($productsList->pluck('attributes','data')->pluck('name'));

    // dd($productsList);

    // dd($products->list()->pluck('')->toJson());

    //return redirect('/admin/dashboard');
});





// Auth::routes();
















