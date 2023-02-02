@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>EDIT DATA MATA PELAJARAN</h2>
    <form method="POST" action="/mapel/update/{{ $mapel->id }}" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">MATA PELAJARAN</td>
                <td width="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button type="submit" class="button-primary">UBAH</button></center>
                   </td>
                   <tr>
                   </table>
        </form>
    </center>
    @endsection
    