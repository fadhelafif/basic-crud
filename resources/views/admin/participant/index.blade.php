<x-layouts.admin>
    <x-slot:title>
        Participant
    </x-slot>
    <div class="container pt-5">
        <h2 class="text-center mb-5">Participant</h2>
        <div class="widget">
            <div class="text-end mb-3">
                <a href="{{ route('participant.create') }}" class="btn btn-primary px-5">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="*" rowspan="2">Nama</th>
                            <th width="*" rowspan="2">Email</th>
                            <th width="*" colspan="4" class="text-center">Nilai</th>
                            <th width="300" rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>X</th>
                            <th>Y</th>
                            <th>Z</th>
                            <th>W</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($participants->count())
                    @foreach($participants as $participant)
                        <tr>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->x }}</td>
                            <td>{{ $participant->y }}</td>
                            <td>{{ $participant->z }}</td>
                            <td>{{ $participant->w }}</td>
                            <td>
                                <a href="{{ route('participant.show', $participant->id) }}" class="btn btn-outline-secondary">Lihat Laporan</a>
                                <a href="{{ route('participant.edit', $participant->id) }}" class="btn btn-outline-secondary">Edit</a>
                                <form class="d-inline-block" method="POST" action="{{ route('participant.destroy', $participant->id) }}">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr><td colspan="7" class="text-center">Tidak ada data</td></tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {!! $participants->render('common.pagination') !!}
        </div>
    </div>
</x-layouts.admin>
