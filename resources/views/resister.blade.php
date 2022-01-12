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
<div>会員登録ありがとうございます</div>
<form action="#">
  @csrf
  <input type="submit" value="ログインする">
</form>

@endsection