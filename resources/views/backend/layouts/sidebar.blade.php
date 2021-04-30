<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset(auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ route('profile') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ URL::to('/home') }}" class="nav-link @if (request()->is('admin/dashboard') || request()->is('blogger/dashboard')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @hasrole('Admin')


				<li class="nav-item @if (request()->is('admin/users') ||
					request()->is('admin/users/create') || request()->is('admin/users/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/users') ||
						request()->is('admin/users/create') || request()->is('admin/users/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.users.create') }}" class="nav-link @if (request()->is('admin/users/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.users.index') }}" class="nav-link @if (request()->is('admin/users')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.categories.index') }}" class="nav-link @if (request()->is('admin/categories')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Categories
						</p>
					</a>
				</li>
				<li class="nav-item @if (request()->is('admin/blogs') ||
					request()->is('admin/blogs/create') || request()->is('admin/blogs/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/blogs') ||
						request()->is('admin/blogs/create') || request()->is('admin/blogs/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-blog"></i>
						<p>
							Blogs
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.blogs.create') }}" class="nav-link @if (request()->is('admin/blogs/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Blog</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.blogs.index') }}" class="nav-link @if (request()->is('admin/blogs')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Blogs</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item @if (request()->is('admin/books') ||
					request()->is('admin/books/create') || request()->is('admin/books/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/books') ||
						request()->is('admin/books/create') || request()->is('admin/books/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Books
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.books.create') }}" class="nav-link @if (request()->is('admin/books/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Book</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.books.index') }}" class="nav-link @if (request()->is('admin/books')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Books</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.supporters') }}" class="nav-link @if (request()->is('admin/supporters')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Supporters
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.faqs.index') }}" class="nav-link @if (request()->is('admin/faqs')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-question-circle"></i>
						<p>
							FAQ
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.galleries.index') }}" class="nav-link @if (request()->is('admin/galleries')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-images"></i>
						<p>
							Gallery
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.contacts') }}" class="nav-link @if (request()->is('admin/contacts')) {{ 'active' }} @endif">
						<i class="nav-icon far fa-address-card"></i>
						<p>
							Contact
						</p>
					</a>
				</li>
			@else
				<li class="nav-item @if (request()->is('blogger/blogs') ||
					request()->is('blogger/blogs/create') || request()->is('blogger/blogs/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('blogger/blogs') ||
						request()->is('blogger/blogs/create') || request()->is('blogger/blogs/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-blog"></i>
						<p>
							Blogs
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('blogger.blogs.create') }}" class="nav-link @if (request()->is('blogger/blogs/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Blog</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('blogger.blogs.index') }}" class="nav-link @if (request()->is('blogger/blogs')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Blogs</p>
							</a>
						</li>
					</ul>
				</li>
            @endhasrole
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
