<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Broadcast;
use function PHPUnit\Framework\returnSelf;

class userController extends Controller
{
    public $roles;

    public function __construct()
    {
        $this->roles = Role::all();
    }

    public function index()
    {
        $users = User::all();
        return view('back-panel.user.index', compact('users'));
    }

    public function create()
    {

        return view('back-panel.user.create')->with('roles', $this->roles);
    }
    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->assignRole($request->role_id);

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }
    public function edit(User $user)
    {
//   return $user;
        return view('back-panel.user.edit', compact('user'))->with('roles', $this->roles);
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->syncRoles($request->role_id);
        return redirect()->route('user.index')->with('success', $user->name . ' updated Successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', $user->name . ' deleted Successfully');
    }
}
