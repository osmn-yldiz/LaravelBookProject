@extends("layouts.admin")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <a href="{{route("admin.kitap.index")}}" class="btn btn-warning"><i
                            class="material-icons">keyboard_backspace</i> GERİ DÖN</a>

                    @if(session("status"))
                        <div class="alert alert-info">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span>{{session("status")}}</span>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kitap Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.kitap.edit.post', ["id" => $data[0]["id"]])}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" name="name" value="{{$data[0]['name']}}"
                                                   class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            @if($data[0]["image"] != "")
                                                <img style="width: 125px; height: 125px; margin-bottom: 5px;"
                                                     src="{{asset($data[0]['image'])}}" alt="{{$data[0]['name']}}">
                                            @endif
                                            <input style="opacity: 1; position: inherit;" type="file" name="image">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" name="fiyat" value="{{$data[0]['fiyat']}}"
                                                   class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="yazarid" class="form-control">
                                                @foreach($yazar as $key => $value)
                                                    <option
                                                        @if($value["id"] == $data[0]["yazarid"]) selected
                                                        @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="kategoriid" class="form-control">
                                                @foreach($kategori as $key => $value)
                                                    <option @if($value["id"] == $data[0]["kategoriid"]) selected
                                                            @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="yayineviid" class="form-control">
                                                @foreach($yayinevi as $key => $value)
                                                    <option @if($value["id"] == $data[0]["yayineviid"]) selected
                                                            @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <textarea name="aciklama" class="form-control" cols="30"
                                                      rows="10">{{$data[0]["aciklama"]}}</textarea>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">KİTAP DÜZENLE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
