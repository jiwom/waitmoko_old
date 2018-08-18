@extends('layouts.app')
<style>
    .table td {
        width: 25%;
        text-align: center;
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
                    <div class="card-body" id="vehicle">
                        {{Form::open()}}
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--<div class="dropdown text-center mb-2">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button"--}}
                        {{--data-toggle="dropdown">--}}
                        {{--Select Time--}}
                        {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">HTML</a></li>--}}
                        {{--<li><a href="#">CSS</a></li>--}}
                        {{--<li><a href="#">JavaScript</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        <input class="timepicker">
                        <div class="row">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Manong Driver</td>
                                    <td></td>
                                    <td><input type="button" v-model="p0a.text" v-bind:class="[p0a.color]"
                                               v-on:click="changeSeatStatus($event, p0a)"></td>
                                    <td><input type="button" v-model="p0b.text" v-bind:class="[p0b.color]"
                                               v-on:click="changeSeatStatus($event, p0b)"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" v-model="p1a.text" v-bind:class="[p1a.color]"
                                               v-on:click="changeSeatStatus($event, p1a)"></td>
                                    <td><input type="button" v-model="p1b.text" v-bind:class="[p1b.color]"
                                               v-on:click="changeSeatStatus($event, p1b)"></td>
                                    <td><input type="button" v-model="p1c.text" v-bind:class="[p1c.color]"
                                               v-on:click="changeSeatStatus($event, p1c)"></td>
                                    <td><input type="button" v-model="p1d.text" v-bind:class="[p1d.color]"
                                               v-on:click="changeSeatStatus($event, p1d)"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" v-model="p2a.text" v-bind:class="[p2a.color]"
                                               v-on:click="changeSeatStatus($event, p2a)"></td>
                                    <td><input type="button" v-model="p2b.text" v-bind:class="[p2b.color]"
                                               v-on:click="changeSeatStatus($event, p2b)"></td>
                                    <td><input type="button" v-model="p2c.text" v-bind:class="[p2c.color]"
                                               v-on:click="changeSeatStatus($event, p2c)"></td>
                                    <td><input type="button" v-model="p2d.text" v-bind:class="[p2d.color]"
                                               v-on:click="changeSeatStatus($event, p2d)"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" v-model="p3a.text" v-bind:class="[p3a.color]"
                                               v-on:click="changeSeatStatus($event, p3a)"></td>
                                    <td><input type="button" v-model="p3b.text" v-bind:class="[p3b.color]"
                                               v-on:click="changeSeatStatus($event, p3b)"></td>
                                    <td><input type="button" v-model="p3c.text" v-bind:class="[p3c.color]"
                                               v-on:click="changeSeatStatus($event, p3c)"></td>
                                    <td><input type="button" v-model="p3d.text" v-bind:class="[p3d.color]"
                                               v-on:click="changeSeatStatus($event, p3d)"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" v-model="p4a.text" v-bind:class="[p4a.color]"
                                               v-on:click="changeSeatStatus($event, p4a)"></td>
                                    <td><input type="button" v-model="p4b.text" v-bind:class="[p4b.color]"
                                               v-on:click="changeSeatStatus($event, p4b)"></td>
                                    <td><input type="button" v-model="p4c.text" v-bind:class="[p4c.color]"
                                               v-on:click="changeSeatStatus($event, p4c)"></td>
                                    <td><input type="button" v-model="p4d.text" v-bind:class="[p4d.color]"
                                               v-on:click="changeSeatStatus($event, p4d)"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary">
                        </div>
                        <input type="hidden" name="p0a.text" v-model="p0a.text">
                        <input type="hidden" name="p0b.text" v-model="p0b.text">
                        <input type="hidden" name="p1a.text" v-model="p1a.text">
                        <input type="hidden" name="p1b.text" v-model="p1b.text">
                        <input type="hidden" name="p1c.text" v-model="p1c.text">
                        <input type="hidden" name="p1d.text" v-model="p1d.text">
                        <input type="hidden" name="p2a.text" v-model="p2a.text">
                        <input type="hidden" name="p2b.text" v-model="p2b.text">
                        <input type="hidden" name="p2c.text" v-model="p2c.text">
                        <input type="hidden" name="p2d.text" v-model="p2d.text">
                        <input type="hidden" name="p3a.text" v-model="p3a.text">
                        <input type="hidden" name="p3b.text" v-model="p3b.text">
                        <input type="hidden" name="p3c.text" v-model="p3c.text">
                        <input type="hidden" name="p3d.text" v-model="p3d.text">
                        <input type="hidden" name="p4a.text" v-model="p4a.text">
                        <input type="hidden" name="p4b.text" v-model="p4b.text">
                        <input type="hidden" name="p4c.text" v-model="p4c.text">
                        <input type="hidden" name="p4d.text" v-model="p4d.text">
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection