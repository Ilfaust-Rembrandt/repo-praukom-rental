@extends('selection.layout')
@section('title', 'Selection')
@section('header')
    <nav style="background-color: #333; padding: 10px;">
    <div style="margin: 0 auto; max-width: 960px;">
        <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">Home</a>
        <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">Seleksi</a>
    </div>
    </nav>

    <h1 style="color: red;">Skyline</h1>
    <h1 style="display: inline; color: black;">Wheels</h1>
@endsection
@section('content')
<div style="display: flex; flex-wrap: wrap; gap: 1rem;">
  <div style="flex: 1 1 300px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 1rem;">
    <img src="https://example.com/images/lamborghini.jpg" alt="Lamborghini" style="width: 100%;">
    <h2 style="margin-top: 0;">Lamborghini</h2>
    <p>Rp 15.000.000</p>
    <p><strong>Rp15.000.000</strong> Full Day</p>
    <p>Bahan Bakar: Pertamax Turbo</p>
    <p>Jumlah Kursi: 2</p>
    <p>Transmisi: Matic</p>
    <button style="background-color: blue; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem;">Sewa</button>
  </div>
  <div style="flex: 1 1 300px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 1rem;">
    <img src="{}" alt="">
    <h2 style="margin-top: 0;">Ferarri</h2>
    <p>Rp 14.500.000</p>
    <p><strong>Rp14.500.000</strong> Full Day</p>
    <p>Bahan Bakar: Pertamax Turbo</p>
    <p>Jumlah Kursi: 2</p>
    <p>Transmisi: Manual</p>
  </div>
  <div style="flex: 1 1 300px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 1rem;">
    <img src="https://example.com/images/mclaren.jpg" alt="Mclaren" style="width: 100%;">
    <h2 style="margin-top: 0;">Mclaren</h2>
    <p>Rp 26.000.000</p>
    <p><strong>Rp26.000.000</strong> Full Day</p>
    <p>Bahan Bakar: Bensin</p>
    <p>Jumlah Kursi: 2</p>
    <p>Transmisi: Matic</p>
    <button style="background-color: blue; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem;">Sewa</button>
  </div>
</div>
@endsection