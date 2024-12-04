<!-- Modal Tambah Lowongan -->
<div x-show="openTambahLowongan"
    x-effect="document.body.style.overflow = openTambahLowongan ? 'hidden' : 'auto'"
    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full overflow-y-auto max-h-[90vh] p-6 relative"
        @click.away="openTambahLowongan = false">

        <!-- Close Button -->
        <button @click="openTambahLowongan = false"
            class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-xl font-bold">&times;</button>

        <!-- Modal Header -->
        <h2 class="text-xl font-bold text-gray-800 mb-4">Tambah Lowongan Bisnis</h2>

        <!-- Form Tambah Lowongan -->
        <form action="{{ route('tambah.lowongan') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Input Fields -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Lowongan</label>
                <input type="text" name="nama_lowongan" class="w-full mt-1 p-2 border rounded-md"
                    placeholder="Masukkan judul lowongan">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Jumlah Lowongan</label>
                <input type="number" name="jumlah" min="1" class="w-full mt-1 p-2 border rounded-md"
                    placeholder="Masukkan jumlah lowongan">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Modal Usaha</label>
                <input type="number" name="modal_usaha" min="1" class="w-full mt-1 p-2 border rounded-md"
                    placeholder="Masukkan modal usaha">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Requirement</label>
                <textarea name="requirement" rows="3" class="w-full mt-1 p-2 border rounded-md"
                    placeholder="Tuliskan persyaratan"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Benefit</label>
                <textarea name="benefit" rows="2" class="w-full mt-1 p-2 border rounded-md"
                    placeholder="Tuliskan manfaat"></textarea>
            </div>

            <!-- Lokasi -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Provinsi</label>
                <select name="provinsi" id="provinsi" class="w-full mt-1 p-2 border rounded-md" required>
                    <option value="">Pilih Provinsi</option>
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                    <select name="kota" id="kota" class="w-full mt-1 p-2 border rounded-md" required>
                        <option value="">Pilih Kabupaten/Kota</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="w-full mt-1 p-2 border rounded-md" required>
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Tag</label>
                <div class="flex flex-wrap gap-3 mt-2">
                    @foreach ($tag as $tags)
                        <div class="flex items-center">
                            <input type="checkbox" name="tags[]" value="{{ $tags->id }}"
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-600">{{ $tags->nama_tag }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end mt-4 space-x-3">
                <button type="button" @click="openTambahLowongan = false"
                    class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md text-sm">Batal</button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>


<div x-show="openEditLowongan"
x-effect="document.body.style.overflow = openEditLowongan ? 'hidden' : 'auto'"
class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
<div class="bg-white rounded-lg shadow-lg max-w-3xl w-full overflow-y-auto max-h-[90vh] p-6 relative"
    @click.away="openTambahLowongan = false">
    <button @click="openEditLowongan = false"
        class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">&times;</button>
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Lowongan Bisnis</h2>