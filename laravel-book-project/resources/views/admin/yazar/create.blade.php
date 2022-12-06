@extends("layouts.admin")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <a href="{{route("admin.yazar.index")}}" class="btn btn-warning"><i
                            class="material-icons">keyboard_backspace</i> GERİ DÖN</a>

                    @if(session("status"))
                        <div class="alert alert-info">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span>{{session("status")}}</span>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yazar Ekle</h4>
                            <p class="category">Yazar oluşturunuz.</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.yazar.create.post')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yazar Adı</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input style="opacity: 1; position: inherit;" type="file" name="image">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yazar Bio</label>
                                            <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">YAZAR EKLE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
