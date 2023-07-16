@extends('layouts.app')
@section('title', '顧客情報追加')

@push('css')
<link rel="stylesheet" href="{{ asset('css/formhelper.css') }}">
@endpush

@section('content')

<!-- コンテンツ -->
<div class="container">
    <div class="col-md-8 mt-5 w-75 mx-auto">
        <div class="card">
            <div class="card-header">新規酒分類登録</div>
            <div class="card-body">
                <form method="post" action="{{ route('sake_type.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="SKT_name" class="form-label">酒分類名　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="SKT_name" name="SKT_name" value="{{old('SKT_name')}}">
                        </div>
                        <div id="SKTNameError" class="form-text text-danger">
                            @if ($errors->has('SKT_name'))
                                {{$errors->first('SKT_name')}}
                            @endif　
                        </div>
                    </div>
                    <a href="{{ route('sake_type.list') }}" class="btn btn-secondary"><i class="fas fa-chevron-circle-left"></i> 酒分類情報一覧へ戻る</a>　
                    <button type="submit" class="btn btn-dark" id="formButton"><i class="fas fa-plus-circle"></i> 酒分類を新規追加</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /コンテンツ -->
@endsection

@push('js')
<script src="{{ asset('js/formhelper.js') }}"></script>
<script src="{{ asset('js/report/input.js') }}"></script>
@endpush