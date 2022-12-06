@extends("layouts.admin")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <a href="{{route("admin.yayinevi.index")}}" class="btn btn-warning"><i
                            class="material-icons">keyboard_backspace</i> GERİ DÖN</a>

                    @if(session("status"))
                        <div class="alert alert-info">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span>{{session("status")}}</span>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yayın Evi Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.yayinevi.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" value="{{$data[0]['name']}}" name="name"
                                                   class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">YAYIN EVİ DÜZENLE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
