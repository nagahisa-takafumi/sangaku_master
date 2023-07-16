@extends('layouts.app')
@section('title', '顧客情報一覧')

@push('css')
<link rel="stylesheet" href="{{ asset('css/formhelper.css') }}">
@endpush

@section('content')
<!-- コンテンツ -->
<div class="container">
    @if (session('flashMsg'))
        <div class="alert alert-success mt-3 w-100 mx-auto" role="alert">
            {{session('flashMsg')}}
        </div>
    @endif
    <div class="w-100 mx-auto mt-5 text-end">
        <a href="{{ route('place.create') }}" class="btn btn-dark"><i class="fas fa-folder-plus"></i> 新規店舗情報登録</a>
    </div>
    <table class="table table-striped w-100 mx-auto mt-3 table-bordered">
        <tr class="table-dark">
            <th class="col-1 align-middle text-center">id</th>
            <th class="col-4 align-middle text-center">店区分</th>
            <th class="col-4 align-middle text-center">店番号</th>
            <th class="col-3 align-middle text-center">陣</th>
        </tr>
        @foreach($places as $place)
            <tr>
                <td class="col-1 align-middle text-center">{{ $place->P_id }}</td>
                <td class="col-4 align-middle text-center">{{ $place->place_kbn() }}</td>
                <td class="col-4 align-middle text-center">{{ $place->P_number }}</td>
                <td class="col-3 align-middle text-center">{{ $place->camp->C_name }}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $places->appends(request()->query())->links('components.pagenate.bottom') }}
    </div>
</div>
<!-- /コンテンツ -->
@endsection

@push('js')
    <script src="{{ asset('js/formhelper.js') }}"></script>
    <script src="{{ asset('js/report/edit.js') }}"></script>
@endpush