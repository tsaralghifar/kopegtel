@extends('layouts.admin')
@section('content')

<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Pasang Baru</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Pasang Baru</a></li>
					<li class="breadcrumb-item active">List</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List</h3>

          <div class="text-right">
            <a class="btn btn-primary btn-sm" title="Create" href="{{route('pasang.create')}}">
              Create
            </a>  
            <a class="btn btn-primary btn-sm" title="Print" target="blank" href="">
              Print
            </a>    
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Internet</th>
                <th scope="col">Nama</th>
                <th scope="col">Paket</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telp</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @if($pasang->count() <= 0)
              <tr>
                <td colspan="5" class="text-center">There is no data</td>
              </tr>
              @endif

              @foreach ($pasang as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$data->no_inet}}</td>
                <td>{{$data->nama_pelanggan}}</td>
                <td>{{$data->layanan->nama_layanan}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->telp}}</td>
                <td class="text-center">
                  <a href="{{ route('pasang.edit', $data->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  <form action="{{ route('pasang.destroy', $data->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

    
@endsection