@extends("layouts.admin")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <a href="{{route("admin.kategori.index")}}" class="btn btn-warning"><i
                            class="material-icons">keyboard_backspace</i> GERİ DÖN</a>

                    @if(session("status"))
                        <div class="alert alert-info">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span>{{session("status")}}</span>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kategori Ekle</h4>
                            <p class="category">Kategori oluşturunuz.</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.kategori.create.post')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Kategori Adı</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">KATEGORİ EKLE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
