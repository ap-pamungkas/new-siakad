<div class="left-side-menu" >


    <div class="user-box ">
    
            
       <h5 class="mr-2"><strong>Kepala Sekolah</strong></h5>
       
   
    </div>

<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

      

     <x-layout.sidebar.menu-item url="{{url('kepsek/beranda')}}" icon="ti-home" label="Beranda" />
     <x-layout.sidebar.menu-item url="{{url('kepsek/siswa')}}" icon="fa fa-users" label="Siswa" />
     <x-layout.sidebar.menu-item url="{{url('kepsek/nilai')}}" icon="ti-book" label="Nilai" />
     <x-layout.sidebar.menu-item url="{{url('kepsek/guru')}}" icon="fa fa-chalkboard-teacher" label="Guru" />
     <x-layout.sidebar.menu-item url="{{url('kepsek/kelas-siswa')}}" icon="fa fa-chalkboard-teacher" label="Data Kelas" />

       



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

<div class="clearfix"></div>


</div>