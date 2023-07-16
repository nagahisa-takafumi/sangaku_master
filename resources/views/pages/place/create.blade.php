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
            <div class="card-header">新規店舗情報登録</div>
            <div class="card-body">
                <form method="post" action="{{ route('place.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="P_which" class="form-label">店区分　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="P_which">
                                @if(old('P_which') == "")
                                    <option value="0" selected>選択してください</option>
                                @else
                                    <option value="0">選択してください</option>
                                @endif
                                @if(old('P_which') == "SK")
                                    <option value="SK" selected>SK</option>
                                @else
                                    <option value="SK">SK</option>
                                @endif
                                @if(old('P_which') == "ST")
                                    <option value="ST" selected>ST</option>
                                @else
                                    <option value="ST">ST</option>
                                @endif
                            </select>
                        </div>
                        <div id="PWhichError" class="form-text text-danger">
                            @if ($errors->has('P_which'))
                                {{$errors->first('P_which')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="P_number" class="form-label">店番号　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="P_number" name="P_number" value="{{old('P_number')}}">
                        </div>
                        <div id="SKTNameError" class="form-text text-danger">
                            @if ($errors->has('P_number'))
                                {{$errors->first('P_number')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="P_camp_id" class="form-label">陣　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="P_camp_id">
                                @if(old('P_camp_id') == "")
                                    <option value="0" selected>選択してください</option>
                                @else
                                    <option value="0">選択してください</option>
                                @endif
                                @foreach($camps as $camp)
                                    @if(old('P_camp_id') == $camp->C_id)
                                        <option value="{{ $camp->C_id }}" selected>{{ $camp->C_name }}</option>
                                    @else
                                        <option value="{{ $camp->C_id }}">{{ $camp->C_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div id="PCampIdError" class="form-text text-danger">
                            @if ($errors->has('P_camp_id'))
                                {{$errors->first('P_camp_id')}}
                            @endif　
                        </div>
                    </div>
                    <a href="{{ route('place.list') }}" class="btn btn-secondary"><i class="fas fa-chevron-circle-left"></i> 店舗情報一覧へ戻る</a>　
                    <button type="submit" class="btn btn-dark" id="formButton"><i class="fas fa-plus-circle"></i> 店舗情報を新規追加</button>
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