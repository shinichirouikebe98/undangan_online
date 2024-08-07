<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invitations = Invitation::where('user_id', auth()->id())->get();
        return view('home', compact('invitations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string'
    ]);

    // Ambil dan bersihkan nomor telepon dari input
    $phone = $request->input('phone');
    $phone = preg_replace('/\D/', '', $phone); // Menghapus karakter non-digit

    // Proses nomor telepon
    if (substr($phone, 0, 1) == '0') {
        $phone = '62' . ltrim($phone, '0'); // Ganti angka nol di depan dengan kode negara
    } elseif (substr($phone, 0, 2) != '62') {
        $phone = '62' . $phone; // Tambahkan kode negara jika belum ada
    }

    // Debug: cek hasil akhir
    // dd($phone);

    // Simpan data ke database
    Invitation::create([
        'name' => $request->name,
        'phone' => $phone,
        'user_id' => auth()->id()
    ]);

    return redirect()->back()->with('message', 'Data berhasil diinput');
}


    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation)
    {
        $invitation = Invitation::where('name', $invitation->name)->firstOrFail();

        return view('index', compact('invitation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invitation = Invitation::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$invitation) {
            return redirect()->back()->with('error', 'You do not have access to edit this invitation.');
        }

        return view('editInvitation', compact('invitation'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invitation $invitation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric'
        ]);

        $invitation->update([
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return redirect()->route('invitation.index')
            ->with('success', 'Updated Invitation');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitation $invitation)
    {
        $invitation->delete();
        return redirect()->back()->with('success', 'Invitation deleted successfully');
    }
}
