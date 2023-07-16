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
            <div class="card-header">新規陣登録</div>
            <div class="card-body">
                <form method="post" action="{{ route('camp.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="C_name" class="form-label">陣名　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="C_name" name="C_name" value="{{old('C_name')}}">
                        </div>
                        <div id="SKTNameError" class="form-text text-danger">
                            @if ($errors->has('C_name'))
                                {{$errors->first('C_name')}}
                            @endif　
                        </div>
                    </div>
                    <a href="{{ route('camp.list') }}" class="btn btn-secondary"><i class="fas fa-chevron-circle-left"></i> 陣一覧へ戻る</a>　
                    <button type="submit" class="btn btn-dark" id="formButton"><i class="fas fa-plus-circle"></i> 陣を新規追加</button>
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