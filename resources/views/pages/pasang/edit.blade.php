@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        
        <div class="col-md-10 col-sm-12 mt-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Form
                </div>
                <div class="card-body">
                    <form action="{{route('pasang.update', $pasang->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        {{-- @if ($idEdit)
                            wire:submit.prevent="updateLocation"
                        @else
                            wire:submit.prevent="saveLocation"
                        @endif --}}
                    
                        <div class="form-group">
                            <label>No Ineternet</label>
                            <input type="text"
                                   name="no_inet"
                                   value="{{ old('no_inet') ? old('no_inet') : $pasang->no_inet }}"
                                   class="form-control @error('no_inet') is-invalid @enderror"/>
                                   @error('no_inet') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text"
                                   name="nama_pelanggan"
                                   value="{{ old('nama_pelanggan') ? old('nama_pelanggan') : $pasang->nama_pelanggan }}"
                                   class="form-control @error('nama_pelanggan') is-invalid @enderror"/>
                                   @error('nama_pelanggan') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <input type="text"
                                   name="paket"
                                   value="{{ old('paket') ? old('paket') : $pasang->paket }}"
                                   class="form-control @error('paket') is-invalid @enderror"/>
                                   @error('paket') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text"
                                   name="alamat"
                                   value="{{ old('alamat') ? old('alamat') : $pasang->alamat }}"
                                   class="form-control @error('alamat') is-invalid @enderror"/>
                                   @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input type="text"
                                   name="telp"
                                   value="{{ old('telp') ? old('telp') : $pasang->telp }}"
                                   class="form-control @error('telp') is-invalid @enderror"/>
                                   @error('telp') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark text-white btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection