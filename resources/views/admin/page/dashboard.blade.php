@extends('admin.layout.index')

@section('content')
    <div class="d-flex flex-wrap gap-3">
        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded" style="font-size:22px; color:rgb(0, 0, 0); background-color:#ff0000">
                        inventory
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(255, 0, 0)">Total Product</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $totalProduct }}</span>
            </div>
        </div>
        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:#000000; background-color:#ff0000">
                        view_in_ar
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(255, 0, 0)">Total Stock</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $sumStock }}</span>
            </div>
        </div>
        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:#000000; background-color:#ff0000">
                        shopping_cart
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(255, 0, 0)">Transaksi</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $dataTransaksi }}</span>
            </div>
        </div>
        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:#000000; background-color:#ff0000">
                        payments
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(255, 0, 0)">Penghasilan</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ number_format($dataPenghasilan / 1000000, 2) . ' Jt' }}</span>
            </div>
        </div>
    </div>
@endsection
