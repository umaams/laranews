@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Berita</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">
                            <select class="form-control" id="news_category_id">
                                <option value="">Semua Kategori</option>
                                @foreach ($news_categories as $news_category)
                                <option value="{{ $news_category->id }}" @if ($news_category->id == $news_category_id) selected @endif>{{ $news_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
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
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Tanggal Post</th>
                                            <th class="text-center">Kategori Berita</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($news->count() == 0)
                                        <tr>
                                            <td class="text-center" colspan="4">Tidak ada data</td>
                                        </tr>
                                        @endif
                                        @foreach($news as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td class="text-center">{{ $item->post_date->format('d F Y') }}</td>
                                            <td class="text-center">{{ $item->news_category->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('news.edit', ['id' => $item->id]) }}" class="btn btn-xs btn-success">Edit</a> 
                                                <form class="form-horizontal" style="display: inline;" method="post" action="{{ route('news.destroy', ['id' => $item->id]) }}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
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

@section('script')
<script>
    document.getElementById('news_category_id').onchange = function() {
        window.location = "{{ route('news.index') }}" + (this.value != '' ? '?news_category_id=' + this.value : '');
    };
</script>
@endsection
