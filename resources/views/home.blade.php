@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Berita Terkini</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($news as $item)
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="#">
                                    <img class="media-object" width="200" src="/image_uploads/{{ $item->image_path }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="{{ route('news.detail', ['id' => $item->slug]) }}">{{ $item->title }}</a></h4>
                                    <h5>Tanggal: <b>{{ $item->post_date->formatLocalized('%d %B %Y') }}</b>, Oleh: <b>{{ $item->created_user->name }}</b>, Kategori: <b>{{ $item->news_category->name }}</b></h5>
                                    {!! str_limit(strip_tags($item->content), 500) !!}
                                    <br><a href="{{ route('news.detail', ['id' => $item->slug]) }}" class="btn btn-info btn-sm" style="margin-top: 15px;">Selengkapnya</a>
                                </div>
                            </div>
                            @endforeach
                            {!! $news->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Pengirim</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group">
                                        @foreach($users as $user)
                                        <a href="#" class="list-group-item">{{ $user->name }} ({{ $user->news_count }})</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Kategori Berita</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group">
                                        @foreach($news_categories as $news_category)
                                        <a href="#" class="list-group-item">{{ $news_category->name }} ({{ $news_category->news_count }})</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
