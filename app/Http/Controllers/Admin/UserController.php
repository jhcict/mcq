<?php
/**
 * Class: UserController
 *
 * PHP Version: 5
 *
 * @category Category
 * @package  Package
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://link/
 *
 * @see Controller
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;

/**
 * Class: UserController
 *
 * @category Category
 * @package  Package
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://link/
 *
 * @see Controller
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->only('name','email'));
        $user->password = bcrypt($request->get('password'));
        $user->save();
        $user->roles()->detach();
        $role = Role::where('name','=',$request->get('group'))->first();
        $user->attachRole($role);
        return redirect()->to(action('Admin\UserController@index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
    }

    /**
     * Ban Users
     *
     * @param mixed $id User ID
     *
     * @return null
     */
    public function getBan($id)
    {
        if (auth()->user()->hasRole('admin')) {

            $user = User::find($id);
            $user->delete();
        }
        return redirect()->to(action('Admin\UserController@index'));

    }
    public function getUnban($id)
    {
        if (auth()->user()->hasRole('admin')) {

            $user = User::find($id);
            $user->restore();
        }

        return redirect()->to(action('Admin\UserController@index'));
    }
}
