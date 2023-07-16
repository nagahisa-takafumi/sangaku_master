@extends('layouts.app')
@section('title', '酒造所情報追加')

@push('css')
<link rel="stylesheet" href="{{ asset('css/formhelper.css') }}">
@endpush

@section('content')

<!-- コンテンツ -->
<div class="container">
    <div class="col-md-8 mt-5 w-75 mx-auto">
        <div class="card">
            <div class="card-header">新規酒造所情報登録</div>
            <div class="card-body">
                <form method="post" action="{{ route('brewery.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="B_name" class="form-label">酒造所名　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="B_name" name="B_name" value="{{old('B_name')}}">
                        </div>
                        <div id="BNameError" class="form-text text-danger">
                            @if ($errors->has('B_name'))
                                {{$errors->first('B_name')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_place_id" class="form-label">店舗情報　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="B_place_id">
                                @if(old('B_place_id') == "")
                                    <option value="0" selected>選択してください</option>
                                @else
                                    <option value="0">選択してください</option>
                                @endif
                                @foreach($places as $place)
                                    @if(old('B_place_id') == $place->P_id)
                                        <option value="{{ $place->P_id }}" selected>{{ $place->camp->C_name }} - {{ $place->P_number }} ( {{ $place->place_kbn() }} )</option>
                                    @else
                                        <option value="{{ $place->P_id }}">{{ $place->camp->C_name }} - {{ $place->P_number }} ( {{ $place->place_kbn() }} )</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div id="BPlaceIdError" class="form-text text-danger">
                            @if ($errors->has('B_place_id'))
                                {{$errors->first('B_place_id')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_description" class="form-label">店舗説明　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" id="B_description" name="B_description" value="{{old('B_description')}}"></textarea>
                        </div>
                        <div id="BDescriptionError" class="form-text text-danger">
                            @if ($errors->has('B_description'))
                                {{$errors->first('B_description')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_mail" class="form-label">メールアドレス　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="B_mail" name="B_mail" value="{{old('B_mail')}}">
                        </div>
                        <div id="BMailError" class="form-text text-danger">
                            @if ($errors->has('B_mail'))
                                {{$errors->first('B_mail')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_tel" class="form-label">電話番号　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="B_tel" name="B_tel" value="{{old('B_tel')}}">
                        </div>
                        <div id="BTelError" class="form-text text-danger">
                            @if ($errors->has('B_tel'))
                                {{$errors->first('B_tel')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_address" class="form-label">住所　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="B_address" name="B_address" value="{{old('B_address')}}">
                        </div>
                        <div id="BAddressError" class="form-text text-danger">
                            @if ($errors->has('B_address'))
                                {{$errors->first('B_address')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_img_file_path" class="form-label">画像　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="B_img_file_path" name="B_img_file_path">
                        </div>
                        <div id="BImgFilePathError" class="form-text text-danger">
                            @if ($errors->has('B_img_file_path'))
                                {{$errors->first('B_img_file_path')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="B_url" class="form-label">URL　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="B_url" name="B_url" value="{{old('B_url')}}">
                        </div>
                        <div id="BAddressError" class="form-text text-danger">
                            @if ($errors->has('B_url'))
                                {{$errors->first('B_url')}}
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
@endpush