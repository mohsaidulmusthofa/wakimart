<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->paginate(5);
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // message
        $message = [
            'required'  => 'Kolom Wajib Diisi.'
        ];

        //form validation
        $this->validate(request(), [
            'user_name'  =>  'required',
            'user_email' =>  'required',      
        ], $message);

        $datauser           =   new UserModel();
        $datauser->name     =   $request->user_name;
        $datauser->email    =   $request->user_email;
        $datauser->save();

        if ($datauser) {
            //redirect with success message
            return redirect()->route('vuser')->with(['success' => 'Data Berhasil Disimpan']);
        }else{
             //redirect with error message
             return redirect()->route('vadduser')->with(['error' => 'Data Gagal Disimpan']);
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->User     = new UserModel();
        $data = $this->User->getUser($id);
        return view('edituser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, UserModel $usermodel)
    {
        // message
        $message  = [
            'required'  => "Kolom Wajib diisi"
        ];

        // form validation
        $this->validate(request(), [
            'user_name'     => 'required',
            'user_email'    => 'required'
        ], $message);

        //get all Data Users
        $datauser = UserModel::findorfail($id);
        $datauser->update([
            'name'  => $request->user_name,
            'email'  => $request->user_email,
        ]);

        if ($datauser) {
            //redirect with success message
            return redirect()->route('vuser')->with(['success' => 'Data Berhasil Diedit']);
        }else{
             //redirect with error message
             return redirect()->route('vedituser')->with(['error' => 'Data Gagal Diedit']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $usermodel, $id)
    {
        //get function from model user
        $datauser = $usermodel->deleteUser($id);
        if ($datauser) {
            //redirect with success message
            return redirect()->route('vuser')->with(['success' => 'Data Berhasil Dihapus']);
        }else{
             //redirect with error message
             return redirect()->route('vuser')->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}
