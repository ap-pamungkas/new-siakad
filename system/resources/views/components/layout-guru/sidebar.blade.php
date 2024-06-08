<div class="left-side-menu" >


    <div class="user-box">
         <h5>Guru</h5>
    </div>

<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Guru || {{ auth('guru')->user()->nama }}</li>

     <x-layout.sidebar.menu-item url="{{url('guru/siswa')}}" icon="fa fa-users" label="Siswa" />
     <x-layout.sidebar.menu-item url="{{url('guru/nilai')}}" icon="ti-book" label="Nilai" />

       

       

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