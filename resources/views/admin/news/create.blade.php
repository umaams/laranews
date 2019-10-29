@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buat Berita</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form form-horizontal" action="{{ route('news.store') }}">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Judul Berita</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" class="form-control" placeholder="Judul Berita" value="{{ old('title') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Slug</label>
                                    <div class="col-md-9">
                                        <input type="text" name="slug" class="form-control" placeholder="Slug Berita" value="{{ old('slug') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tanggal Post</label>
                                    <div class="col-md-3">
                                        <input type="date" name="post_date" class="form-control" placeholder="Tanggal" value="{{ old('post_date') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Kategori Berita</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="news_category_id">
                                            <option value="">Pilih Kategori...</option>
                                            @foreach($news_categories as $news_category)
                                            <option value="{{ $news_category->id }}" @if($news_category->id == old('news_category_id')) selected @endif>{{ $news_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Isi Berita</label>
                                    <div class="col-md-9">
                                        <textarea name="content" class="form-control" placeholder="Isi Berita">{{ old('post_date') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Pengirim</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="created_user_id">
                                            <option value="">Pilih Pengirim...</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}" @if($user->id == old('created_user_id')) selected @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
