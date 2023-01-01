<?php

use App\Models\Role;
use App\Models\phone;
use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\mamurjorController;
use App\Http\Controllers\invokableController;
use App\Http\Controllers\ValidationController;
use App\Models\Material;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/home/{name}/{age?}',function($key,$key1=null){
    return ['name'=>$key, 'age'=>$key1];
})->where(['name'=>'[A-Za-z]+']);*/

/*Route::group(['prefix'=>'room'],function(){
    Route::get('create', function() {
        return "create room";

    });

});

Route::get('/{roll}/{reg}/{name}/{district}', function($key1, $key2, $key3, $key4){
    return ['Roll'=>$key1, 'Reg'=>$key2, 'Name'=>$key3, 'District'=>$key4];
})->where(['roll'=>'[0-9]+', 'reg'=>'[0-9]+', 'name'=>'[A-Za-z]+','district'=>'[A-Za-z]+']);

Route::get('/home/{name}/{age?}',[mamurjorController::class, 'dump'])->where('name','[A-Za-z]+');
Route::get('mamurjor', [mamurjorController::class, 'index'])->name('mamurjor.com');

//resource route
Route::resource('student', ResourceCollection::class);

//basic resource route
Route::get('student', [ResourceCollection::class, 'index'])->name('student.index');
Route::get('student/create', [ResourceCollection::class, 'create'])->name('student.create');
Route::post('student/store', [ResourceCollection::class, 'store'])->name('student.store');
Route::get('student/{id}', [ResourceCollection::class, 'show'])->name('student.show');
Route::get('student/{id}/edit', [ResourceCollection::class, 'edit'])->name('student.edit');
Route::put('student/{id}/update', [ResourceCollection::class, 'update'])->name('student.update');
Route::delete('student/{id}/destroy', [ResourceCollection::class, 'destroy'])->name('student.destroy');

Route::post('/study', invokableController::class);*/

//Route::view('asad','test');

/*Route::get('asad', function(){
    $data = 'mamurjor';
    //$data = ['name'=>'mamurjor'];
    return view('test', ['key'=>$data]);
});*/

//Route::get('{name}/{roll?}/{class?}', [ViewController::class, 'index'])->where(['name'=>'[A-Za-z]+', 'roll'=>'[0-9]+', 'class'=>'[A-Za-z]+']);


Route::get('/', [HomepageController::class, 'index'])->name('index');
Route::get('/cart',[CartController::class, 'cart'])->name('cart');
Route::get('/shop',[ShopController::class, 'shop'])->name('shop');
Route::get('/checkout',[CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('student/register', [StudentController::class, 'submit']);



Route::resource('/validation', ValidationController::class);

/*
    orderBy = latest
    latest & oldest
    inRandomOrder
    gorupBy
    having
    skip & take
    offset & limit
*/

//data fatch
Route::get('student/list', function(){
    $student = student::select('id', 'name','roll')->take(5)->get();
    return $student;

});


//data insert
Route::get('student/insert', function(){
     student::create([
        'name' => 'sabuj',
        'roll' => 606,
        'reg' => 909,
        'session' => '2010-11',
        'class' => 10

     ]);
    return 'student data has been saved';

});

//data delete
Route::get('student/delete/{id}', function($id){

   student::findOrFail($id)->delete();

    return 'student data has been delete';

});

// -------------where clause-------------------
/*
    where
    orWhere
    whereBetween
    whereNotBetween
    whereIn
    whereNotIn
    whereDate
    whereDay
    whereMonth
    whereYear
    whereTime
*/

Route::get('where-clause/{date}', function($date){
    //$where = student::where('name', '=', 'Mina Little')->get();
    //$where = student::where('name', 'Mina Littles')->orWhere('reg', 727647)->get();
     //$where = student::whereBetween('id', [12,15])->get();
     //$where = student::whereNotBetween('id', [1,40])->get();
     //$where = student::whereIn('id', [1,40,2,9,10,20,25])->get();
     //$where = student::whereNotIn('id', [10,1,5,20,25,3,])->get();
     //$where = student::whereDate('created_at', $date)->get();
     //$where = student::whereYear('created_at', $date)->get();
     //$where = student::whereMonth('created_at', $date)->get();
     $where = student::whereTime('created_at', $date)->get();
     return $where;
});


//data one to one relationship
Route::get('student/one-relation', function(){
    $student = phone::find(2)->student;
    return $student;

});

//data one to many relationship
Route::get('role', function(){
    $roles = Role::all();
    $users = User::all();
    return view('role', ['roles' => $roles], ['users'=>$users]);

});


//data many to many relationship
Route::get('many-to-many', function(){
    $material = Product::with('material')->find(1);
    dd($material->toArray());

    //return view('home');

});

//attach, detach, sync
Route::get('attach', function(){
    $product = Product::with('material')->find(1);
    $material = [1];
    //$product->material()->attach($material);
    //$product->material()->detach($material);
    $product->material()->sync($material);
});
