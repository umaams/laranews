@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Berita</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('news.create') }}" class="btn btn-primary">Buat Berita</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr class="info">
                                            <th>Judul</th>
                                            <th>Tanggal Post</th>
                                            <th>Kategori Berita</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($news->count() == 0)
                                        <tr>
                                            <td class="text-center" colspan="4">Tidak ada data</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
