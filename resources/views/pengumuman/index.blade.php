@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white text-center bg-success" button class="btn btn-success">List Pengumuman
                <div class="card-body text-left">
                    <a href ="{!! route('pengumuman.create') !!}" button class="btn btn-dark" type="button"> Tambah </button></td></a>
                <div class="col text-center"></div>
                
                <table class="table bg-white table-bordered">
                    <thead class ="text-center bg-warning">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Kategori Pengumuman Id</th>
                                <th scope="col">Create</th>
                                <th scope="col">Update</th>
                                <th scope="col">Aksi</th>
                                
                            </tr>
                    </thead>
                    @foreach ($pengumuman as $item)
                            <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->kategori_pengumuman_id !!}</td>
                            <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                            <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                           
                            
                            <td><a href="{!! route('pengumuman.show',[$item->id]) !!}" button class="btn btn-sm btn-primary" type="button"> Lihat </a>
                            <a href="{!! route('pengumuman.edit',[$item-> id]) !!}" button class="btn btn-sm btn-secondary" type="button">Edit</a>
                            {!! Form::open(['route' => ['pengumuman.destroy', $item-> id],'method'=>'delete']) !!}

                                    {!! Form::submit( 'Hapus',['class'=>'btn btn-danger','onclick'=>"return confirm('Apakah Anda yakin Ingin Menghapus Data Ini?')"] ); !!}

                            {!! Form::close() !!} 

                            </td>

                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection