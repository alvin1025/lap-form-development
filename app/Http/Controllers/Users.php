<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class Users extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.register.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $validated = $request->validated();
        //mengencrypt password
        $validated['password'] = Hash::make($validated['password']);

        // memasukan data ke database
        User::create($validated);

        // $request->session()->flash('success', 'Registration Successfully! Please Login Now!');

        return redirect('/dashboard/register')->with('success', 'User Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.register.show', [
            'users' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.register.edit', [
            'users' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, User $register)
    {
        // dd($register->id);
        $validated = $request->validated();
        // if ($request->password) {
        //     $validated['password'] = Hash::make($request->password);
        // } else {
        //     unset($validated['password']);
        // }

        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        // User::update($validateData);
        User::where('id', $register->id)->update($validated);
        return redirect('/dashboard/register')->with('success', 'User Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/dashboard/register')->with('success', 'User Has Been Deleted');
    }

    public function exportexcel()
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }

    public function importexcel(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('UserData', $namafile);


        Excel::import(new UserImport, \public_path('/UserData/' . $namafile));

        return redirect('/dashboard/register')->with('success', 'User Has Been Added!');
    }

    public function exportpdf()
    {
        $data = User::all();

        view()->share('data', $data);
        $pdfUser = PDF::loadView('pdfUser')->setPaper('a4', 'landscape');
        return $pdfUser->download('user.pdf');
    }
}
