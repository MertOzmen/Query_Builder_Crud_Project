@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
<div class="container mt-4">

<div class="cold-md-12">
 <h1>Kurslar</h1>
    <div align="right ">
      <a href="{{route('courseInsert')}}">
        <button class="btn btn-success">Yeni Ekle</button>
      </a>
    </div>
    <br>
  <table class="table table-striped">

    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Must</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
       <tr>
         @foreach($course as $key)
        <th>{{$loop->iteration}}</th>
        <th>{{$key->course_title}}</th>
        <th>{{$key->course_content}}</th>
        <th>{{$key->course_must}}</th>
        <th width="10"><a href="{{route('courseUpdate',['id'=>$key->id])}}"><button class="btn btn-primary">Düzenle</button></a></th>
        <th width="10"><a href="{{route('courseDelete',['id'=>$key->id])}}"><button class="btn btn-primary">Sil</button></a></th>
       </tr>
       @endforeach
    </tbody>


  </table>

</div>
</div>
@endsection

