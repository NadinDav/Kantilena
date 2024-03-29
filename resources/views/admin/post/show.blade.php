@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $post->title }}</h1>
                        <a href="{{route('admin.post.edit', $post->id)}}" class="text-success"><i class="fas fa-pencil-alt mt-2"></i></a>
                        <form action="{{route('admin.post.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger mt-2 mr-2" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Просмотр новости "{{$post->title}}"</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$post->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$post->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Описание</td>
                                            <td>{{$post->content}}</td>
                                        </tr>
                                        <tr>
                                            <td>Фотографии</td>
                                            <td><img src="{{ asset('storage/' . $post->preview_image)}}" alt="main_image" class="w-25">
                                            <img src="{{ asset('storage/' . $post->main_image)}}" alt="main_image" class="w-25"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                    </div>
                            <!-- /.card -->
                    </div>
                </div>
                <!-- ./col -->

            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
