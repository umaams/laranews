@extends('layouts.app')

@section('style')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Berita</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form form-horizontal" method="post" action="{{ route('news.update', ['id' => $news->id]) }}"  role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Judul Berita</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" class="form-control" placeholder="Judul Berita" value="{{ $news->title }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Slug</label>
                                    <div class="col-md-9">
                                        <input type="text" name="slug" class="form-control" placeholder="Slug Berita" value="{{ $news->slug }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tanggal Post</label>
                                    <div class="col-md-3">
                                        <input type="date" name="post_date" class="form-control" placeholder="Tanggal" value="{{ $news->post_date->format('Y-m-d') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Kategori Berita</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="news_category_id">
                                            <option value="">Pilih Kategori...</option>
                                            @foreach($news_categories as $news_category)
                                            <option value="{{ $news_category->id }}" @if($news_category->id == $news->news_category_id) selected @endif>{{ $news_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Isi Berita</label>
                                    <div class="col-md-9">
                                        <textarea id="content" name="content" class="form-control" placeholder="Isi Berita">{{ $news->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Gambar Berita</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image_file" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Pengirim</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="created_user_id">
                                            <option value="">Pilih Pengirim...</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}" @if($user->id == $news->created_user_id) selected @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ url()->previous() }}" class="btn btn-default">Batal</a>
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

@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>
@endsection
