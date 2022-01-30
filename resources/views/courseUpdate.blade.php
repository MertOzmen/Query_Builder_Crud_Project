@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
<div class="container">

<div class="cold-md-12 mt-2">
<h1>Kurs Düzenle</h1>
    
@if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        @if($errors->any())
         <div class="alert alert-danger"> 
             <ul>
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
         @endif

         <div align="right ">
             <a href="{{route('courseGet')}}">
                <button type="button" class="btn btn-success">Geri</button>
            </a>
         </div> 
         <br>      
    
<form action="{{route('courseUpdatePost',['id'=>$course->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="from-group  m-2">
        <input class="form-control" type="text" name="course_title" placeholder="Title" value="{{$course->course_title}}">
    </div>
    <div class="from-group m-2">
        <input class="form-control" type="text" name="course_content" placeholder="Content" value="{{$course->course_content}}">
    </div>
    <div class="from-group m-2">
        <input class="form-control" type="number" name="course_must" placeholder="Must" value="{{$course->course_must}}">  
    </div>
    <div class="from-group m-2">
    <input class="form-control" type="submit" value="Kurs Düzenle">
    </div>
</form>
</div>
</div>
@endsection

