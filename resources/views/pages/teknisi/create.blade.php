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
                    <form action="{{route('teknisi.store')}}" method="POST">
                        @csrf
                        {{-- @if ($idEdit)
                            wire:submit.prevent="updateLocation"
                        @else
                            wire:submit.prevent="saveLocation"
                        @endif --}}
                    
                        <div class="form-group">
                            <label>Nama Teknisi</label>
                            <input type="text"
                                   name="nama_teknisi"
                                   value="{{ old('nama_teknisi') }}"
                                   class="form-control @error('nama_teknisi') is-invalid @enderror"/>
                                   @error('nama_teknisi') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input type="number"
                                   name="telp"
                                   value="{{ old('telp') }}"
                                   class="form-control @error('telp') is-invalid @enderror"/>
                                   @error('telp') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text"
                                   name="alamat"
                                   value="{{ old('alamat') }}"
                                   class="form-control @error('alamat') is-invalid @enderror"/>
                                   @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
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