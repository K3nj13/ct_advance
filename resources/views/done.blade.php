@extends('layouts.default')
<style>
  th {
      
    }
    tr:nth-child(odd) td{
      
    td {
      
    }
    button {
      
    }
</style>
@section('title', 'Rese')

@section('content')
<div>ご予約ありがとうございます</div>
<form action="#">
  @csrf
  <input type="submit" value="戻る">
</form>

@endsection