<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Office;
use App\Models\User;
use App\Scopes\UserisActiveScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::withoutGlobalScope(UserisActiveScope::class)->with('office')->get();
        $offices = Office::all();

        return view('user.index', compact('users', 'offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = Office::all();

        return view('user.add', compact('offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $model = new User($request->all());
        $model->isAdmin = $request->get('isAdmin') ? $request->get('isAdmin') : 0;
        $model->password = Hash::make($request->get('password'));
        $model->save();

        return redirect()->route('users.index');
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
        $user = User::withoutGlobalScope(UserisActiveScope::class)->findOrFail($id);
        $offices = Office::all();

        return view('user.edit', compact('user', 'id', 'offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $user = User::withoutGlobalScope(UserisActiveScope::class)->findOrFail($id);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user->isAdmin = isset($data['isAdmin']) ? $data['isAdmin'] : 0;
        $user->isActive = isset($data['isActive']) ? $data['isActive'] : 0;
        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::withoutGlobalScope(UserisActiveScope::class)->findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
