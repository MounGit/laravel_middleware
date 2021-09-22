
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Back Office</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href=>
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
        <a href="">
          <i class='bx bxl-tux' ></i>
          <span class="links_name">Header</span>
        </a>
        <span class="tooltip">Header</span>
      </li>
     <li>
       <a href="">
        <i class='bx bx-photo-album'></i>
         <span class="links_name">Portfolio</span>
       </a>
       <span class="tooltip">Portfolio</span>
     </li>
     <li>
       <a href="">
        <i class='bx bxs-pizza' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
      <a href="">
        <i class='bx bx-chat' ></i>
        <span class="links_name">Messages</span>
      </a>
      <span class="tooltip">Messages</span>
    </li>
     <li>
       <a href="">
        <i class='bx bxs-bug'></i>
         <span class="links_name">Footer</span>
       </a>
       <span class="tooltip">Footer</span>
     </li>
     <li>
       <a href="">
        <i class='bx bx-left-arrow-alt' ></i>
          <span class="links_name">Retour Front</span>
       </a>
       <span class="tooltip">Retour Front</span>
     </li>




     <li>
        <a href="#">
            <form method="POST" class="nav-link py-3 px-0 px-lg-3 rounded" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </a>

        <span class="tooltip">Log Out</span>
    </li>
    </ul>
  </div>
 
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

