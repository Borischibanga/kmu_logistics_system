<div class="sidebar">
      <div class="logo-details">
        <i class="bx bx-user"></i>
        <span class="logo_name">Chief Driver</span>
      </div>
      <ul class="side-nav">
        <li>
        <a href="#" onclick="setActiveClass(this)">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
        <a href="#" onclick="setActiveClass(this)">
            <i class="bx bx-box"></i>
            <span class="links_name">Available Computers</span>
          </a>
        </li>
        <li>
        <a href="#" onclick="setActiveClass(this)">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Assigned Computers</span>
    </a>
</li>
        <li>
        <a href="#" onclick="setActiveClass(this)">
          <i class='bx bx-add-to-queue' ></i>
            <span class="links_name">Register Class</span>
          </a>
        </li>
        <li>
        <a href="#" onclick="setActiveClass(this)">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">View Active User</span>
          </a>
        </li>
        <li>
        <a href="#" onclick="setActiveClass(this)">
            <i class="bx bx-message"></i>
            <span class="links_name">Report Issues</span>
          </a>
        </li>
        <li class="log_out">
          <a href="{{ route('logout') }}">
              <i class="bx bx-log-out"></i>
              <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
