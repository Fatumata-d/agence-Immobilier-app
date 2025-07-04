public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::where('email', $request->email)->first();

        if ($client && Hash::check($request->password, $client->password)) {
            session(['client' => $client]);
            return redirect()->route('client.profile');
        }

        return back()->with('error', 'Email ou mot de passe incorrect');
    }