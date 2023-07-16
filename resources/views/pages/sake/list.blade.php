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
        <a href="{{ route('sake.create') }}" class="btn btn-dark"><i class="fas fa-folder-plus"></i> 新規酒情報登録</a>
    </div>
    <table class="table table-striped w-100 mx-auto mt-3 table-bordered">
        <tr class="table-dark">
            <th class="col-1 align-middle text-center">id</th>
            <th class="col-2 align-middle text-center">酒名</th>
            <th class="col-2 align-middle text-center">イメージ</th>
            <th class="col-1 align-middle text-center">価格</th>
            <th class="col-2 align-middle text-center">酒造所名</th>
            <th class="col-2 align-middle text-center">説明</th>
            <th class="col-2 align-middle text-center">URL</th>
        </tr>
        @foreach($sakes as $sake)
            <tr>
                <td class="col-1 align-middle text-center">{{ $sake->SK_id }}</td>
                <td class="col-2 align-middle text-center">{{ $sake->SK_name }}</td>
                <td class="col-2 align-middle text-center">{{ $sake->SK_img_file_path }}</td>
                <td class="col-1 align-middle text-center">{{ $sake->SK_price }}</td>
                <td class="col-2 align-middle text-center">{{ $sake->brewery->B_name }}</td>
                <td class="col-2 align-middle text-center">{{ $sake->SK_description }}</td>
                <td class="col-2 align-middle text-center">{{ $sake->SK_online_site_url }}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $sakes->appends(request()->query())->links('components.pagenate.bottom') }}
    </div>
</div>
<!-- /コンテンツ -->
@endsection

@push('js')
    <script src="{{ asset('js/formhelper.js') }}"></script>
    <script src="{{ asset('js/report/edit.js') }}"></script>
@endpush