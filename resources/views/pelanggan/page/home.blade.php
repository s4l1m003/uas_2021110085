@extends('pelanggan.layout.index')

@section('content')
    <h4 class="mt-5">Items</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        @if ($data->isEmpty())
            <h1>Belum ada Barang!</h1>
        @else
            @foreach ($data as $p)
                <div class="card" style="width:220px;">
                    <div class="card-header m-auto" style="height:100%;width:100%;">
                        <img src="{{ asset('storage/product/' . $p->foto) }}" alt=""
                            style="width: 100%;height:200px; object-fit: cover; padding:0;">
                    </div>
                    <div class="card-body">
                        <p class="m-0 text-justify"> {{ $p->nama_product }} </p>
                    </div>
                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                        <p class="m-0" style="font-size: 16px; font-weight:600;"><span>IDR
                            </span>{{ number_format($p->harga) }}</p>
                        <form action="{{route('addTocart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="idProduct" value="{{$p->id}}">
                            <button type="submit" class="btn btn-outline-primary" style="font-size:24px">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
    </div>
    <div class="pagination d-flex flex-row justify-content-between">
        <div class="showData">
            Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
        </div>
        <div>
            {{ $data->links() }}
        </div>
    </div>
    @endif

@endsection