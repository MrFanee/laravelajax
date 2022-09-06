@extends('layout.layout')

    @section('title')
    <title>Dashboard</title>

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>DASBOARD</label>
                <hr>
                Selamat Datang {{ Auth::user()->name }}
            </div>
        </div>
    </div>
    @endsection
