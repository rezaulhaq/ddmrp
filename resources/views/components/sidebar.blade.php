<div class="drawer drawer-mobile">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content p-20">
      <!-- Page content here -->
      {{ $slot }}
    
    </div> 
    <div class="drawer-side">
      <label for="my-drawer-2" class="drawer-overlay"></label> 
      <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content border-r-2">
        <!-- Sidebar content here -->
        <li><a>BOM</a></li>
        <li><a>MOQ</a></li>
        <li><a>PNCE</a></li>
        <li><a>INVENTORY</a></li>
      </ul>
    
    </div>
  </div>