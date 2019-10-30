@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Terkini</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>{{ $news->title }}</h4>
                            <h5>Tanggal: <b>{{ $news->post_date->formatLocalized('%d %B %Y') }}</b>, Oleh: <b>{{ $news->created_user->name }}</b>, Kategori: <b>{{ $news->news_category->name }}</b>, Dibaca <b class="text text-success">{{ $news->viewer_count }} kali</b></h5>
                            @if($news->image_path != null)
                            <div align="center">
                                <img align="center" style="max-width: 100%;" class="media-object" src="/image_uploads/{{ $news->image_path }}">
                            </div>
                            @endif
                            <hr>
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
