    <title>Laporan Barang</title>
    <head>
    <link href="{{ asset('admin/css/core.min.css')}}" rel="stylesheet">
    <style>
        table{
            border-collapse:collapse; 
            table-layout:fixed; 
            width:80%;
        }
        table td{
            border:solid 1px; 
            width:100px; 
            word-wrap:break-word;
        }
        .header{
            display:inline;
            vertical-align:text-top;
        }
        .judul{
            display:block;
            text-align:center;
        }
        p{
            display:inline;
        }
        .header-title{
            margin:0px;
            font-size:45px;
        }
        img{
            margin-top:10px;
            float:left;
            margin-left:20px;
            position:relative;
        }
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#212121;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }
        body{font-family:"Times New Roman",Times,Serif;}

        @media print{
            .float{display:none !important;}
        }


    </style>
    </head>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="judul">
            <img src="{{asset('admin/img/logo.jpg')}}" width="140px" alt="logo">
            <p class="header-title">Laporan Barang </p>
            <div class="description">
            <p class="header-company">PT. INTI SOLUSINDO ABADI</p><br>
            <p class="header-description">IT System Intergration Solutions & Maintenance</p> <br>
            <p class="header-description">Ruko Klampis Megah Blok D-18 Surabaya - Indonesia</p>
            </div>
        </div>
        
        <br>

        <hr>
        <br>
      </header><!--/.header -->

      <div class="main-content">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Toolbar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12">
            <div>
              <div>
                <table align="center" border="1px" cellspacing="0" width="100%">
                  <thead>
                    <tr width="100px">
                      <th>No</th>
                      <th>Stok Barang</th>
                      <th>Kategori</th>
                      <th>Merk</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $key => $b)
                    <tr >
                      <th>{{ ++$key }}</th>
                      <td >{{ $b->stok }}</td>
                      <td>{{ $b->category->name  }}</td>
                      <td>{{ $b->merk->nama_merk}}</td>
                      <td>{{ $b->updated_at}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- Code begins here -->

                <button href="#" class="float" onclick="window.print()">
                    <span class="fa fa-print my-float" ></span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </div><!--/.main-content -->