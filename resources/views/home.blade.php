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
                            @endforeach
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
