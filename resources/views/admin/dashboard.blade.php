@section('title', 'Dashboard Admin')
@section('pages', 'Dashboard')
@extends('layouts.admin.admin-app')
@section('content')
<div class="row">
        <div class="col-lg-7 position-relative z-index-2">
          <div class="card card-plain mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h2 class="font-weight-bolder mb-0">Admin Dashboard</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Data user</p>
                        <h5 class="font-weight-bolder mb-0">
                          {{ $alluser }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Terverifikasi</p>
                        <h5 class="font-weight-bolder mb-0">
                         {{ $allverified }}
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-lg-10">
              <div class="card ">
                <div class="card-header pb-0 p-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Data Peserta Terbaru</h6>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center ">
                    <tbody>
                      @foreach($peserta as $item)
                      <tr>
                        <td class="w-30">
                          <div class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Email:</p>
                            <h6 class="text-sm mb-0">{{ $item->user->email }}</h6>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Username:</p>
                            <h6 class="text-sm mb-0">{{ $item->user->name }}</h6>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Nama Lengkap Peserta:</p>
                            <h6 class="text-sm mb-0">{{ $item->nama_lengkap }}</h6>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Status Peserta:</p>
                             <h6 class="text-sm mb-0">{{ $item->status_all }}</h6>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection