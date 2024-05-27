<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

// app/Http/Controllers/ProfileController.php
class ProfileController extends Controller
{
    public function show(User $user)
{
    return view('profile.show', compact('user'));
}

public function edit(User $user)
{
    return view('profile.edit', compact('user'));
}

public function update(Request $request, User $user)
{
    $data = $request->validate([
        'bio' => 'nullable|string',
        'website' => 'nullable|url',
    ]);

    $user->profile()->update($data);

    return redirect()->route('profile.show', $user);
}

}
