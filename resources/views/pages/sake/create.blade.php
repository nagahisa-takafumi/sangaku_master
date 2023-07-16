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
            <div class="card-header">新規酒情報登録</div>
            <div class="card-body">
                <form method="post" action="{{ route('sake.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="SK_name" class="form-label">酒名　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="SK_name" name="SK_name" value="{{old('SK_name')}}">
                        </div>
                        <div id="SKNameError" class="form-text text-danger">
                            @if ($errors->has('SK_name'))
                                {{$errors->first('SK_name')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_price" class="form-label">価格　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="SK_price" name="SK_price" value="{{old('SK_price')}}">
                        </div>
                        <div id="SKPriceError" class="form-text text-danger">
                            @if ($errors->has('SK_price'))
                                {{$errors->first('SK_price')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_brewery_id" class="form-label">酒造所情報　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="SK_brewery_id">
                                @if(old('SK_brewery_id') == "")
                                    <option value="0" selected>選択してください</option>
                                @else
                                    <option value="0">選択してください</option>
                                @endif
                                @foreach($breweries as $brewery)
                                    @if(old('SK_brewery_id') == $brewery->B_id)
                                        <option value="{{ $brewery->B_id }}" selected>{{ $brewery->B_name }}</option>
                                    @else
                                        <option value="{{ $brewery->B_id }}">{{ $brewery->B_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div id="SKBreweryIdError" class="form-text text-danger">
                            @if ($errors->has('SK_brewery_id'))
                                {{$errors->first('SK_brewery_id')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_type_id" class="form-label">酒分類　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="SK_type_id">
                                @if(old('SK_type_id') == "")
                                    <option value="0" selected>選択してください</option>
                                @else
                                    <option value="0">選択してください</option>
                                @endif
                                @foreach($sakeTypes as $sakeType)
                                    @if(old('SK_type_id') == $sakeType->SKT_id)
                                        <option value="{{ $sakeType->SKT_id }}" selected>{{ $sakeType->SKT_name }}</option>
                                    @else
                                        <option value="{{ $sakeType->SKT_id }}">{{ $sakeType->SKT_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div id="SKBreweryIdError" class="form-text text-danger">
                            @if ($errors->has('SK_type_id'))
                                {{$errors->first('SK_type_id')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_alcohol" class="form-label">アルコール度数　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="SK_alcohol" name="SK_alcohol" value="{{old('SK_alcohol')}}">
                        </div>
                        <div id="SKAlcohol" class="form-text text-danger">
                            @if ($errors->has('SK_alcohol'))
                                {{$errors->first('SK_alcohol')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_img" class="form-label">画像　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="SK_img" name="SK_img">
                        </div>
                        <div id="SKImgError" class="form-text text-danger">
                            @if ($errors->has('SK_img'))
                                {{$errors->first('SK_img')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_tasting" class="form-label">試飲可能・不可能　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <select class="form-select selectItem" name="SK_tasting">
                                @if(old('SK_tasting') == 0)
                                    <option value="0" selected>試飲不可</option>
                                @else
                                    <option value="0">試飲不可</option>
                                @endif
                                @if(old('SK_tasting') == 1)
                                    <option value="1" selected>試飲可</option>
                                @else
                                    <option value="1">試飲可</option>
                                @endif
                            </select>
                        </div>
                        <div id="SKTastingError" class="form-text text-danger">
                            @if ($errors->has('SK_tasting'))
                                {{$errors->first('SK_tasting')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_description" class="form-label">酒説明　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" id="SK_description" name="SK_description" value="{{old('SK_description')}}"></textarea>
                        </div>
                        <div id="BDescriptionError" class="form-text text-danger">
                            @if ($errors->has('SK_description'))
                                {{$errors->first('SK_description')}}
                            @endif　
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="SK_online_site_url" class="form-label">URL　<span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="SK_online_site_url" name="SK_online_site_url" value="{{old('SK_online_site_url')}}">
                        </div>
                        <div id="SKOnlineSiteUrlError" class="form-text text-danger">
                            @if ($errors->has('SK_online_site_url'))
                                {{$errors->first('SK_online_site_url')}}
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