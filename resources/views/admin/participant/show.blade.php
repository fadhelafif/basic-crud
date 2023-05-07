<x-layouts.admin>
    <x-slot:title>
        Laporan Participant
    </x-slot>
    <div class="container pt-5">
        <h2 class="text-center mb-5">Laporan Participant</h2>
        <div class="widget">
            <div class="row mb-1">
                <div class="col-lg-3">
                    <label for="name">Nama</label>
                </div>
                <div class="col-lg-9">
                    <div>{{ $participant->name }}</div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="name">Email</label>
                </div>
                <div class="col-lg-9">
                    <div>{{ $participant->email }}</div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="300">Aspek</th>
                            <th width="175">1</th>
                            <th width="175">2</th>
                            <th width="175">3</th>
                            <th width="175">4</th>
                            <th width="175">5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aspek Intelegensi</td>
                            @for($i=1; $i<=5; $i++)
                            @if ($i==$participant->getIntelligentRate())
                            <td>✓</td>
                            @else
                            <td></td>
                            @endif
                            @endfor
                        </tr>
                        <tr>
                            <td>Aspek Numerical Ability <br>({{ $participant->getNumeric() }} - {{ $participant->getNumericRate() }})</td>
                            @for($i=1; $i<=5; $i++)
                            @if ($i==$participant->getNumericRate())
                            <td>✓</td>
                            @else
                            <td></td>
                            @endif
                            @endfor
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-end">
                <a class="btn btn-outline-secondary" href="{{ route('participant.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</x-layouts.admin>
