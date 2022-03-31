@extends('layouts.app')
@section('title', 'Zefania | Data contacts')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contact Us</h2>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contact as $index => $contact)
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $contact->nama}}</td>
                                                <td>{{ $contact->email}}</td>
                                                <td>{{ $contact->pesan}}</td>
                                            </tr> 
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {{ $contact->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection