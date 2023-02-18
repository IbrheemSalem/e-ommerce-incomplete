@extends('layouts.masterAdmin')
@section('title', 'Edit Language')
@section('content')
    <h1 class="p-relative"><i class="fa-solid fa-right-long mt-1"></i> Edit Language</h1>
    <div class="container">
        <div class="alert alert-primary d-flex" role="alert">
            <a class="me-2 text-decoration-none text-dark fw-bold" href="{{ route('index-admin') }}">index</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <p class="ms-2 text-success m-0">Languages</p>
        </div>
    </div>
    <div class="container w-75">
        <form class="row g-3" action="{{route('admin.languages.update',$language -> id)}}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{$language -> name}}" id="inputEmail4">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Abbreviation</label>
                <input type="text" class="form-control"  value="{{$language -> abbr}}" name="abbr" id="inputPassword4">
                @error('abbr')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Direction</label>
                <select id="inputState" class="form-select" name="direction">
                    <option value="ltr" @if($language ->direction == 'ltr') selected @endif>left to right</option>
                    <option value="rtl" @if($language ->direction == 'rtl' ) selected @endif>right to left</option>
                </select>
                @error('direction')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-12 d-flex">
                <label class="form-check-label me-3" for="flexSwitchCheckChecked">active</label>
                <div class="form-check form-switch ">
                    <input class="form-check-input" type="checkbox" role="switch" value="1" name="active" id="flexSwitchCheckChecked"  @if($language->active == 1 ) checked @endif>
                    @error('active')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
