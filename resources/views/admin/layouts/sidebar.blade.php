<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">

        <div>
            <h4 class="logo-text"> Smart Care</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title"> Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Pages</li>

        <li>
            <a href="{{route('contact.us.list')}}">
                <div class="parent-icon"><i class="lni lni-phone"></i>
                </div>
                <div class="menu-title"> Contact</div>
            </a>
        </li>

        <li>
            <a href="{{route('blog.review.list')}}">
                <div class="parent-icon"><i class="lni lni-star"></i>
                </div>
                <div class="menu-title"> Blog Review</div>
            </a>
        </li>
        <li>
           <a href="{{route('blog-category')}}">
               <div class="parent-icon"><i class="	fa-solid fa-tags"></i>

               </div>
               <div class="menu-title"> Blog Category</div>
           </a>
       </li>
         <li>
            <a href="{{ route('admin.blog')}}">
                <div class="parent-icon"><i class="fa-solid fa-blog"></i>
                </div>
                <div class="menu-title"> Blogs</div>
            </a>
        </li>

       <li>
            <a href="{{route('brands.index')}}">
                <div class="parent-icon"><i class='bx bxs-badge-check'></i>
                </div>
                <div class="menu-title">Brands</div>
            </a>
        </li>
        <li>
            <a href="{{ route('services.index')}}">
                <div class="parent-icon"><i class='bx bxs-cog'></i>

                </div>
                <div class="menu-title">Services</div>
            </a>
        </li>
        {{-- <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Brand Series</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">FAQs</div>
            </a>
        </li>   --}}


        {{-- <li>
            <a href="#">
                <div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="menu-title"> Home Page Form</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="menu-title"> Service Page Form</div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="parent-icon"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title"> Setting</div>
            </a>
        </li> --}}
        <li>
            <a href="{{ route('logout') }}">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title"> Logout</div>
            </a>
        </li>

    </ul>
</div>
