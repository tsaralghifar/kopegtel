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
                    <form action="{{route('layanan.store')}}" method="POST">
                        @csrf
                        {{-- @if ($idEdit)
                            wire:submit.prevent="updateLocation"
                        @else
                            wire:submit.prevent="saveLocation"
                        @endif --}}
                    
                        <div class="form-group">
                            <label>Nama Layanan</label>
                            <input type="text"
                                   name="nama_layanan"
                                   value="{{ old('nama_layanan') }}"
                                   class="form-control @error('nama_layanan') is-invalid @enderror"/>
                                   @error('nama_layanan') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="number"
                                   name="biaya"
                                   value="{{ old('biaya') }}"
                                   class="form-control @error('biaya') is-invalid @enderror"/>
                                   @error('biaya') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Desc</label>
                            <input type="text"
                                   name="desc"
                                   value="{{ old('desc') }}"
                                   class="form-control @error('desc') is-invalid @enderror"/>
                                   @error('desc') <div class="text-muted">{{ $message }}</div> @enderror
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