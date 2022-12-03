@extends('layout.master')
@section('title')
    fuzzy - Query
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href=" {{ URL::previous() }}" class="btn btn-danger">Kembali</a>
            </div>
    </div>
    <div class="row">
        <h3 style="color : white">Fuzzyfikasi Query</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                     <th>No</th>
                        <th>RT</th>
                        <th>Rata-Rata</th>
                        <th>aksi</th>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($berat as $data)
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->data->RT}}</td> 
                            <td>{{$data->rata}}</td>
                            <td>
                                
                                <form action="{{ url('/data/'.$data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
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
@endsection