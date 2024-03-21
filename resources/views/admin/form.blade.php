@extends('admin.layout2')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="" method="post">
                        <div class="mb-4 form-group">
                          <h4>Input Data Paket</h4>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <input type="date" class="form-control" name="" id="">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <input type="file" class="form-control" name="" id="">
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <select name="" id="" class="form-control">
                                <option selected>1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>
                        </div>
                        <div class="mb-4 form-group">
                            <label for="">Kode Antrian</label>
                            <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection