<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use App\Models\entity;
use Illuminate\Support\Facades\Hash;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('home.profile');
    }

    public function company()
    {
        $data = DB::select('select * from companies');
        $entity = DB::select('select * from entities');
        $i=0;
        return view('home._form-company',['data'=>$data,'i'=>$i,'entity'=>$entity]);
    }

    public function addcompany(Request $request)
    {

        $post = $request->all();

        $company = new Company();

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $company->logo = 'images/' . $imageName;
        }


        $company->name = $post['com']['name'];
        $company->email = $post['com']['email'];
        $company->gst = $post['com']['gst'];
        $company->fy_start = $post['com']['fy-start'];
        $company->fy_end = $post['com']['fy-end'];
        $company->address_1 = $post['com']['add_1'];
        $company->address_2 = $post['com']['add_2'];
        $company->city = $post['com']['city'];
        $company->state = $post['com']['state'];
        $company->pin_code = $post['com']['pin'];
        $company->entity_id = $post['com']['entity'];

        // dd($company);


        if( $company->save()){

            return redirect()->to('company');
        }
    }

    public function entity()
    {
        $model = DB::select('select * from entities');
        $i=0;
        return view('home._form-entity',['model'=>$model,'i'=>$i]);
    }

    public function addentity(Request $request)
    {
        $post = $request->all();

        $model =new entity();

        $model->name = $post['en']['name'];
        $model->alias = $post['en']['alias'];
        $model->url = $post['en']['url'];
        $model->api = $post['en']['api'];
        $model->email = $post['en']['email'];
        $model->address_1 = $post['en']['add_1'];
        $model->address_2 = $post['en']['add_2'];
        $model->city = $post['en']['city'];
        $model->state = $post['en']['state'];
        $model->dev_mode = 1;
        $model->paid_status = 1;
        $model->is_active = 1;
        $model->payment_mode = 'Yearly';

        if( $model->save()){

            return redirect()->to('entity');
        }

    }

    public function user()
    {
        $usergroup = DB::select('select * from user_groups');
        $company = DB::select('select * from companies');

        return view('home._from-user',['group'=>$usergroup,'company'=>$company]);
    }

    public function adduser(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'usergroup' => 'required|string',
            'company' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        $logo = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $logo = 'images/' . $imageName;
        }


        $inserted = DB::insert('insert into users (name, email, password, company_id, status, user_group, logo) values (?, ?, ?, ?, ?, ?, ?)', [
            $data['name'],
            $data['email'],
            Hash::make($data['password']),
            $data['company'],
            '1',
            $data['usergroup'],
            $logo
        ]);

        if($inserted){
            return redirect()->route('user')->with('message', 'User successfully added');
        } else {
            return back()->with('message', 'User could not be added');
        }
    }

}
