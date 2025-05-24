@extends('layouts.list')

@section('title', 'Produk grace')
@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nama as $index => $item)
                <tr class="bg-blue-500 border-b border-blue-400">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $item }}</td>
                    <td class="px-6 py-4">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4">{{ $harga[$index] }}</td>
                    <!--data lainnya-->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
