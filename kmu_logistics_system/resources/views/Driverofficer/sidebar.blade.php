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
        <a href="{{route('bookings')}}" onclick="setActiveClass(this)">
            <i class="bx bx-box"></i>
            <span class="links_name">Manage Booking</span>
          </a>
        </li>
        <li>
        <a href="{{route('setTrips')}}" onclick="setActiveClass(this)">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Set Trips</span>
    </a>
</li>
        <li>
        <a href="{{route('controlSeats')}}" onclick="setActiveClass(this)">
          <i class='bx bx-add-to-queue' ></i>
            <span class="links_name">Control Seats</span>
          </a>
        </li>
        <li>
        <a href="{{route('bookingList')}}" onclick="setActiveClass(this)">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Booking List</span>
          </a>
        </li>
        <li>
        <li class="log_out">
          <a href="{{ route('logout') }}">
              <i class="bx bx-log-out"></i>
              <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
