<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $items = Tiket::urut()->paginate(12);

        return view('admin.tiket.index', compact('items'));
    }

    public function create()
    {
        return view('admin.tiket.form', ['tiket' => new Tiket()]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        Tiket::create($data);

        return redirect()
            ->route('admin.tiket.index')
            ->with('sukses', 'Informasi tiket berhasil ditambahkan.');
    }

    public function edit(Tiket $tiket)
    {
        return view('admin.tiket.form', compact('tiket'));
    }

    public function update(Request $request, Tiket $tiket)
    {
        $data = $this->validateData($request);

        $tiket->update($data);

        return redirect()
            ->route('admin.tiket.index')
            ->with('sukses', 'Informasi tiket berhasil diperbarui.');
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();

        return redirect()
            ->route('admin.tiket.index')
            ->with('sukses', 'Informasi tiket berhasil dihapus.');
    }

    protected function validateData(Request $request): array
    {
        return $request->validate([
            'nama'      => ['required', 'string', 'max:255'],
            'icon'      => ['nullable', 'string', 'max:10'],
            'deskripsi' => ['nullable', 'string', 'max:1000'],
            'harga'     => ['required', 'integer', 'min:0'],
            'satuan'    => ['nullable', 'string', 'max:50'],
            'kategori'  => ['required', 'in:tiket_masuk,parkir,wahana,lainnya'],
            'urutan'    => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]) + ['is_active' => $request->boolean('is_active')];
    }
}
