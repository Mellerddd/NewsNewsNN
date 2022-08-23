@extends('layouts.app')

@section('content')
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">


            <div class="form-header">
                <h1 style="color: rgb(160, 160, 235)">Оставить комментарий</h1>
            </div>
            <div class="form-content">
                <form action="{{ route('comment.submit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="description">Содержание</label>
                        <textarea id="description" type="text" name="description" cols="40" rows="3" style="width: 450px; height: 180px;"></textarea>
                        @error('comment')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button style="color: black;margin-top: 15px" type="submit">Прокомментировать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
