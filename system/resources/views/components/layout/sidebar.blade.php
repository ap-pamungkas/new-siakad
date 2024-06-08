<div class="left-side-menu" >


    <div class="user-box">
       <h5>Admin</h5>
    </div>

<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">{{ auth('admin')->user()->nama }}</li>

     <x-layout.sidebar.menu-item url="{{url('admin/beranda')}}" icon="ti-home" label="Beranda" />

       

        <li>
            <a href="javascript: void(0);">
                <i class="ti-light-bulb"></i>
                <span> master-data </span>
                <span class="menu-arrow"></span>
            </a>
   

            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{url('admin/master-data/guru')}}">Guru</a></li>
                <li><a href="{{url('admin/master-data/siswa')}}">Siswa</a></li>
                <li><a href="{{url('admin/master-data/kepsek')}}">Kepsek</a></li>
                <li><a href="{{url('admin/master-data/kelas')}}">Kelas</a></li>
                <li><a href="{{url('admin/master-data/semester')}}">semester</a></li>
                <li><a href="{{url('admin/master-data/mapel')}}">Mata Pelajaran</a></li>
                <li><a href="{{url('admin/master-data/kelas-siswa')}}">Kelas Siswa</a></li>
                <li><a href="{{url('admin/master-data/nilai')}}">Nilai</a></li>
            </ul>
        </li>

        <li>
       
            <form action="{{ url('logout') }}" method="POST" style="display: none;" id="logout-form">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout-variant"></i>
                <span> Log Out</span>
            </a>
        </li>

        

     
      

       

      
    </ul>

</div>
<!-- End Sidebar -->



</div>