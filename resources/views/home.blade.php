@extends('layouts.app')
<style>
    .table td {
        width: 25%;
        text-align: center;
    }

    .checkbox {
        width: 30px;
        height: 30px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">Alabang</div>
                            <div class="col text-right">00:00-00:00</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="dropdown text-center mb-2">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown">
                                    Select Time
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">HTML</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">JavaScript</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Manong Driver</td>
                                        <td></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                        <td><input type="checkbox" class="checkbox"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection