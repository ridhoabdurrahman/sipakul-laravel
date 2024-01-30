<x-app-layout>
    <x-slot name="title">Daftar kulit</x-slot>
    <x-alert-error></x-alert-error>
    @if (session()->has('success'))
        <x-alert type="success" message="{{ session()->get('success') }}" />
    @endif
    <x-card>
        <x-slot name="option">
            <div class="btn btn-success add">
                <i class="fas fa-plus mr-1"></i> Tambahkan Kulit
            </div>
        </x-slot>
        <table class="table table-hover border">
            <thead>
                <th>Kode</th>
                <th>Nama kulit</th>
                <th>Pengobatan</th>
                <th></th>
            </thead>
            <tbody>
                @forelse($kulit as $row)
                    <tr>
                        <td><b>{{ $row->kode }}</b></td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ \Str::limit($row->pengobatan, 180) }}</td>
                        <td>
                            <div class="d-flex justify-between-space">
                                <div>
                                    <button class="btn btn-primary btn-sm edit" data-id="{{ $row->id }}"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                                <form action="{{ route('admin.kulit.destroy', $row->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm ml-1 delete"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-card>

    <x-modal title="Tambahkan kulit" id="kulit">
        <form action="{{ route('admin.kulit.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode kulit</label>
                        <input type="text" class="form-control" name="kode">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="nama">Nama kulit</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="pengobatan">Keterangan pengobatan</label>
                        <textarea name="pengobatan" cols="30" rows="6" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </x-modal>

    <x-modal title="Edit kulit" id="edit-kulit">
        <form action="{{ route('admin.kulit.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode kulit</label>
                        <input type="text" class="form-control" name="kode">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="nama">Nama kulit</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="pengobatan">Keterangan pengobatan</label>
                        <textarea name="pengobatan" cols="30" rows="6" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </x-modal>

    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('.add').click(function() {
                $('#kulit').modal('show')
            })

            $('.delete').click(function(e) {
                e.preventDefault()
                Swal.fire({
                    title: 'Hapus data kulit?',
                    text: "Kamu tidak akan bisa mengembalikannya kembali!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).parent().submit()
                    }
                })
            })

            $('.edit').click(function() {
                const id = $(this).data('id')

                $.get(`{{ route('admin.kulit.json') }}?id=${id}`, function(res) {
                    $('#edit-kulit input[name="id"]').val(res.id)
                    $('#edit-kulit input[name="nama"]').val(res.nama)
                    $('#edit-kulit input[name="kode"]').val(res.kode)
                    $('#edit-kulit textarea').text(res.pengobatan)

                    $('#edit-kulit').modal('show')
                })
            })
        </script>
    </x-slot>
</x-app-layout>
