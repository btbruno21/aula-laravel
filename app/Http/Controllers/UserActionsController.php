<?php

namespace App\Http\Controllers;

use App\Models\{UserActions, User, Actions};
use Illuminate\Http\Request;

class UserActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userActions = UserActions::with(['user', 'action.categories'])->get();
        //dd($userActions[0]->user->name);
        return view('userAction/userActionIndex', compact('userActions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //modificar para que retorne o usuario logado
        //para que o proprio usuario realize o cadastro
        $user=User::all();
        $actions=Actions::all();
        return view('userAction/userActionCreate', compact('user', 'actions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'user' => 'required',
            'action' => 'required',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);
        UserActions::create([
            'user_id' => $request->user,
            'action_id' => $request->action,
            'quantity' => $request->quantity,
            'date' => $request->date,
        ]);

        return redirect()->route('useraction.index')->with('sucess', 'Ações de usuário registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userActions = UserActions::findOrFail($id);

        $action_id = Actions::findOrFail($userActions->action_id);
        $user_id = User::findOrFail($userActions->user_id);
        return view('userAction/userActionShow', compact('userActions','action_id', 'user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userActions = UserActions::findOrFail($id);

        $user = User::all();
        $user_id = User::findOrFail($userActions->user_id);

        $action = Actions::all();
        $action_id = Actions::findOrFail($userActions->action_id);

        return view("userAction/userActionEdit", compact('userActions', 'user', 'user_id', 'action', 'action_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user' => 'required',
            'action' => 'required',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        $userActions = UserActions::findOrFail($id);

        $updated = $userActions->update($request->except(['_token', '_method']));
        if ($updated) {
            return redirect()->route('useraction.index');
        } else {
            return redirect()->back()->with('message', 'Erro na atualização');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserActions $userActions)
    {
        //
    }
}