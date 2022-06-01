@extends('layouts.app')
@section('title', 'Zefania | Data contacts')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lh-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Contact Us
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('contacts.update', $contacts->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text"name="nf-nama" placeholder="Enter Email.." class="form-control" value="{{ $contacts->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" name="nf-email" placeholder="Enter Email.." class="form-control" value="{{ $contacts->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Pesan</label>
                                                <textarea name="pesan" class="form-control"></textarea>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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