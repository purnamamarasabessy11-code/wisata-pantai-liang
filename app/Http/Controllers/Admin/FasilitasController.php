<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->uploadGambar($request);
        }

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
        $data = $this->validateData($request, updating: true);

        if ($request->hasFile('gambar')) {
            $this->hapusGambarLama($fasilitas->gambar);
            $data['gambar'] = $this->uploadGambar($request);
        }

        $fasilitas->update($data);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('sukses', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        $this->hapusGambarLama($fasilitas->gambar);
        $fasilitas->delete();

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('sukses', 'Fasilitas berhasil dihapus.');
    }

    protected function validateData(Request $request, bool $updating = false): array
    {
        return $request->validate([
            'nama'         => ['required', 'string', 'max:255'],
            'deskripsi'    => ['required', 'string', 'max:1000'],
            'tipe'         => ['required', 'in:gratis,bayar,wahana'],
            'icon'         => ['nullable', 'string', 'max:10'],
            'gambar'       => ['nullable', 'image', 'max:5120'],
            'harga'        => ['nullable', 'integer', 'min:0'],
            'satuan_harga' => ['nullable', 'string', 'max:50'],
            'urutan'       => ['nullable', 'integer', 'min:0'],
            'is_active'    => ['nullable', 'boolean'],
        ], [], [
            'gambar' => 'gambar',
        ]) + ['is_active' => $request->boolean('is_active')];
    }

    protected function uploadGambar(Request $request): string
    {
        $path = $request->file('gambar')->store('fasilitas', 'public');

        return 'storage/' . $path;
    }

    protected function hapusGambarLama(?string $gambarPath): void
    {
        if (! $gambarPath) {
            return;
        }

        // gambar disimpan sebagai "storage/fasilitas/xxx.jpg"
        $relative = preg_replace('#^storage/#', '', $gambarPath);

        if ($relative && Storage::disk('public')->exists($relative)) {
            Storage::disk('public')->delete($relative);
        }
    }
}
