@extends('AdminLayout/index')
@section('content')


              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/list/update/{{$dosen->id}}">
                @method('patch')
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your NIP</label>
                    <input type="text" class="form-control" id="NPM" name="NIP" value="{{$dosen->NIP}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="{{$dosen->Name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="{{$dosen->Address}}">
                  </div>
                  <div class="form-group">
                        <label>Select Your Mata Kuliah</label>
                        <select class="custom-select" id="matakuliah_id" name="matakuliah_id">
                          <option value="0" {{$dosen->matakuliah_id == "0" ? 'selected' : ''}}>Tidak Ada Matkul</option>
                          <option value="1" {{$dosen->matakuliah_id == "1" ? 'selected' : ''}}>Dasar Pemrograman</option>
                          <option value="2" {{$dosen->matakuliah_id == "2" ? 'selected' : ''}}>PTI</option>
                          <option value="3" {{$dosen->matakuliah_id == "3" ? 'selected' : ''}}>Sistem Digital</option>
                          <option value="4" {{$dosen->matakuliah_id == "4" ? 'selected' : ''}}>PAI</option>
                          <option value="5" {{$dosen->matakuliah_id == "5" ? 'selected' : ''}}>Praktikum DASPRO</option>
                          <option value="6" {{$dosen->matakuliah_id == "6" ? 'selected' : ''}}>Kalkulus 1</option>
                          <option value="7" {{$dosen->matakuliah_id == "7" ? 'selected' : ''}}>Praktikum PWEB</option>
                          <option value="8" {{$dosen->matakuliah_id == "8" ? 'selected' : ''}}>KAPPO</option>
                          <option value="9" {{$dosen->matakuliah_id == "9" ? 'selected' : ''}}>Jaringan Komputer</option>
                          <option value="10" {{$dosen->matakuliah_id == "10" ? 'selected' : ''}}>TBO</option>
                          <option value="11" {{$dosen->matakuliah_id == "11" ? 'selected' : ''}}>Praktikum SISTAL</option>
                          <option value="12" {{$dosen->matakuliah_id == "12" ? 'selected' : ''}}>Praktikum ALSTRUK</option>
                          <option value="13" {{$dosen->matakuliah_id == "13" ? 'selected' : ''}}>Praktikum TBO</option>
                          <option value="14" {{$dosen->matakuliah_id == "14" ? 'selected' : ''}}>Praktikum RPL</option>
                          <option value="15" {{$dosen->matakuliah_id == "15" ? 'selected' : ''}}>MPPL</option>
                          <option value="16" {{$dosen->matakuliah_id == "16" ? 'selected' : ''}}>SOSTEK</option>
                          <option value="17" {{$dosen->matakuliah_id == "17" ? 'selected' : ''}}>Praktikum Jarkom</option>
                          <option value="18" {{$dosen->matakuliah_id == "18" ? 'selected' : ''}}>SISTER</option>
                          <option value="19" {{$dosen->matakuliah_id == "19" ? 'selected' : ''}}>Keamanan Informasi</option>
                          <option value="20" {{$dosen->matakuliah_id == "20" ? 'selected' : ''}}>PKN</option>
                          <option value="21" {{$dosen->matakuliah_id == "21" ? 'selected' : ''}}>Teori Bahasa Otomata</option>
                          <option value="22" {{$dosen->matakuliah_id == "22" ? 'selected' : ''}}>Bahasa Inggris</option>
                          <option value="23" {{$dosen->matakuliah_id == "23" ? 'selected' : ''}}>Ekonomi Rekayasa</option>
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection