@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Data
@endsection
@section('item')
Data
@endsection
@section('item-active')
Edit Berkala Data Anak Tinggi / Berat
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
@foreach ($dataAnak as $data)   
<form method="post" action="{{route('admin.updateDataAnak',$data->id)}}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="col">
            <label>Umur {{$data->bln}} Bulan</label>
            <div class="form-group">
                <label>Tinggi Badan</label>
                <input type="number" name="tb" value="{{$data->tb}}" class="form-control" require>
                <label>Berat Badan</label>
                <input type="number" name="bb" value="{{$data->bb}}" class="form-control" require>
                <label>Posisi</label>
                <select name="posisi" class="form-control" require>
                    <option value="H" @if($data->posisi == 'H') selected @endif>H</option>
                    <option value="L" @if($data->posisi == 'L') selected @endif>L</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @endforeach
</div>
@endsection
@section('custom_scripts')
@endsection