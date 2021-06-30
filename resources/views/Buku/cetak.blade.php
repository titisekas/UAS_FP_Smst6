<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token() }}">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Leptop</title>
</head>
<body>
        <div>
            <p align="center"><b>Laporan Data Leptop</b></p>
            <table class="static" align="center" rules"all" border="1px" style="width: 95%">
                <tr>
                    <th>No</th>
                    <th>Merk Leptop</th>
                    <th>Seri Leptop</th>
                    <th>Jumlah Stok</th>
                    
                
                </tr>  
                @php
                $nomor=1;
            @endphp
                @foreach ($bukus as $buku)

                <tr>
                    <td scope="row">
                             {{$nomor++}}    
                    </td>
                    <td>
                        <img src="{{$buku -> gambar}}" height="80px" width="100px" alt="" srcset="">
                    </td>
                    <td>{{$buku -> merk_leptop}}</td>
                    <td>{{$buku -> seri_leptop}}</td>
                    <td>{{$buku -> jumlah_stok}}</td>
                </tr>   

                @endforeach      
            
            </table>
        
        
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    
</body>
</html>