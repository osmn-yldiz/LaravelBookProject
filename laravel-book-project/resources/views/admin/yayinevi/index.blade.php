@extends("layouts.admin")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route("admin.yayinevi.create")}}" class="btn btn-success"><i
                            class="material-icons">add</i> YENİ YAYIN EVİ EKLE</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yayın Evleri</h4>
                            <p class="category">Burada eklenen yayın evleri listesini bulabilirsiniz.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>İsim</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$value['name']}}</td>
                                        <td><a href="{{route('admin.yayinevi.edit',['id'=>$value['id']])}}"
                                               class="btn btn-warning btn-sm"><i
                                                    class="material-icons">mode_edit
                                                </i></a>
                                        </td>
                                        <td><a href="{{route('admin.yayinevi.delete',['id'=>$value['id']])}}"
                                               class="btn btn-danger btn-sm"><i
                                                    class="material-icons">cancel
                                                </i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$data->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
