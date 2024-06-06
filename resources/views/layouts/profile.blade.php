          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                      <div class="px-2">
                          <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                              {{ ucwords(Auth::user()->name) }}

                          </div>
                      </div>
                      <div>
                          @if (Auth::user()->gambar)
                              <div class="w-20 h-20 rounded-full overflow-hidden">
                                  <img src="{{ Storage::url(Auth::user()->gambar) }}" alt="image"
                                      class="img-profile rounded-circle ">
                              </div>
                          @else
                              <!-- Tampilkan gambar default jika tidak ada gambar profil -->
                              <img src="{{ asset('assets/img/boy(2).png') }}" alt="img"
                                  class="img-profile rounded-circle">
                          @endif

                      </div>
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="{{ route('profile.edit') }}">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                      </a>
                  </div>
              </li>
          </ul>
