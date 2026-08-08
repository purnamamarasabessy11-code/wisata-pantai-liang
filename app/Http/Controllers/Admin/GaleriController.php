<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    protected array $kategoriList = [
        'pantai', 'suasana', 'perahu', 'taman', 'warung', 'rumah-adat',
    ];

    public function index()
    {
        $items = Galeri::ordered()->paginate(12);

        return view('admin.galeri.index', compact('items'));
    }

    public function create()
    {
        return view('admin.galeri.form', [
            'galeri' => new Galeri(),
            'kategoriList' => $this->kategoriList,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        $data['image_path'] = $this->uploadFoto($request);

        Galeri::create($data);

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.form', [
            'galeri' => $galeri,
            'kategoriList' => $this->kategoriList,
        ]);
    }

    public function update(Request $request, Galeri $galeri)
    {
        $data = $this->validateData($request, updating: true);

        if ($request->hasFile('foto')) {
            $this->hapusFotoLama($galeri->image_path);
            $data['image_path'] = $this->uploadFoto($request);
        }

        $galeri->update($data);

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        $this->hapusFotoLama($galeri->image_path);
        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Foto galeri berhasil dihapus.');
    }

    protected function validateData(Request $request, bool $updating = false): array
    {
        return $request->validate([
            'foto'            => [$updating ? 'nullable' : 'required', 'image', 'max:5120'],
            'category'        => ['required', 'string', 'max:50'],
            'alt_text'        => ['nullable', 'string', 'max:255'],
            'caption'         => ['nullable', 'string', 'max:1000'],
            'overlay_caption' => ['nullable', 'string', 'max:255'],
            'strip_caption'   => ['nullable', 'string', 'max:255'],
            'order'           => ['nullable', 'integer', 'min:0'],
            'is_featured'     => ['nullable', 'boolean'],
        ], [], [
            'foto' => 'foto',
        ]) + ['is_featured' => $request->boolean('is_featured')];
    }

    protected function uploadFoto(Request $request): string
    {
        $path = $request->file('foto')->store('galeri', 'public');

        return 'storage/' . $path;
    }

    protected function hapusFotoLama(?string $imagePath): void
    {
        if (! $imagePath) {
            return;
        }

        // image_path disimpan sebagai "storage/galeri/xxx.jpg"
        $relative = preg_replace('#^storage/#', '', $imagePath);

        if ($relative && Storage::disk('public')->exists($relative)) {
            Storage::disk('public')->delete($relative);
        }
    }
}
