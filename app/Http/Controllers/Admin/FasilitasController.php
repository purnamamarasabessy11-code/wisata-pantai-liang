<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $items = Fasilitas::orderBy('urutan')->orderBy('id')->paginate(12);

        return view('admin.fasilitas.index', compact('items'));
    }

    public function create()
    {
        return view('admin.fasilitas.form', ['fasilitas' => new Fasilitas()]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        Fasilitas::create($data);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('sukses', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.form', ['fasilitas' => $fasilitas]);
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $data = $this->validateData($request);

        $fasilitas->update($data);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('sukses', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('sukses', 'Fasilitas berhasil dihapus.');
    }

    protected function validateData(Request $request): array
    {
        return $request->validate([
            'nama'         => ['required', 'string', 'max:255'],
            'deskripsi'    => ['required', 'string', 'max:1000'],
            'tipe'         => ['required', 'in:gratis,bayar,wahana'],
            'icon'         => ['nullable', 'string', 'max:10'],
            'harga'        => ['nullable', 'integer', 'min:0'],
            'satuan_harga' => ['nullable', 'string', 'max:50'],
            'urutan'       => ['nullable', 'integer', 'min:0'],
            'is_active'    => ['nullable', 'boolean'],
        ]) + ['is_active' => $request->boolean('is_active')];
    }
}
