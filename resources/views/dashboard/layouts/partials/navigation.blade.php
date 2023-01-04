<div class="sidebar-header">
	<div class="d-flex justify-content-between">
		<div class="logo">
			<a href="@if (!Auth::guest()) {{ route('dashboard') }} @else {{ route('dashboard.guest') }}  @endif">{{ config('app.name') }}</a>
		</div>
		<div class="toggler">
			<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
		</div>
	</div>
</div>
<div class="sidebar-menu">
	<ul class="menu">
		<li class="sidebar-title">Menu</li>

		<li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }}">
			<a href="@if (!Auth::guest()) {{ route('dashboard') }} @else {{ route('dashboard.guest') }}  @endif" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
				<span>Dashboard</span>
			</a>
		</li>

		</li>
			<li class="sidebar-item has-sub @if(request()->routeIs('cash-transactions.*')) active @else @endif">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-cash-stack"></i>
				<span>Kas Pemasukan</span>
			</a>
			<ul class="submenu @if(request()->routeIs('cash-transactions.*')) active @else @endif ">
				<li class="submenu-item {{ request()->routeIs('cash-transactions.index') ? 'active' : '' }}">
					<a href="@if (!Auth::guest()) /admin/cash-transactions @else /cash-transactions @endif">Kas Bulan Ini</a>
				</li>
				<li class="submenu-item {{ request()->routeIs('cash-transactions.filter') ? 'active' : '' }}">
					<a href="@if (!Auth::guest()) /admin/cash-transactions/filter @else /cash-transactions/filter @endif">Filter Kas</a>
				</li>
			</ul>
		</li>

		</li>
			<li class="sidebar-item has-sub @if(request()->routeIs('cash-transaction-expenditures.*')) active @else @endif">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-cash-stack"></i>
				<span>Kas Pengeluaran</span>
			</a>
			<ul class="submenu @if(request()->routeIs('cash-transaction-expenditures.*')) active @else @endif ">
				<li class="submenu-item {{ request()->routeIs('cash-transaction-expenditures.index') ? 'active' : '' }}">
					<a href="@if (!Auth::guest()) /admin/cash-transaction-expenditures @else /cash-transaction-expenditures @endif">Pengeluaran Bulan Ini</a>
				</li>
				<li class="submenu-item {{ request()->routeIs('cash-transaction-expenditures.filter') ? 'active' : '' }}">
					<a href="@if (!Auth::guest()) /admin/cash-transaction-expenditures/filter @else /cash-transaction-expenditures/filter @endif">Filter Pengeluaran</a>
				</li>
			</ul>
		</li>

		<li class="sidebar-item {{ request()->is('report*') ? 'active' : '' }}">
			<a href="@if (!Auth::guest()) {{ route('report.index') }} @else {{ route('report.guest.index') }}  @endif" class='sidebar-link'>
				<i class="bi bi-file-earmark-spreadsheet-fill"></i>
				<span>Laporan</span>
			</a>
		</li>

		{{-- <li class="sidebar-title"><i class="bi bi-menu-button-wide"></i></li> --}}

		<li class="sidebar-item {{ request()->routeIs('students.*') ? 'active' : '' }}">
			<a href="@if (!Auth::guest()) /admin/students @else /students @endif" class='sidebar-link'>
				<i class="bi bi-people-fill"></i>
				<span>Warga</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('school-classes.*') ? 'active' : '' }}">
			<a href="@if (!Auth::guest()) /admin/school-classes @else /school-classes @endif" class='sidebar-link'>
				<i class="bi bi-bookmark-fill"></i>
				<span>Blok</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('school-majors.*') ? 'active' : '' }}">
			<a href="@if (!Auth::guest()) /admin/school-majors @else /school-majors @endif" class='sidebar-link'>
				<i class="bi bi-briefcase-fill"></i>
				<span>RT</span>
			</a>

		@auth
		<li class="sidebar-item {{ request()->routeIs('administrators.*') ? 'active' : '' }}">
			<a href="{{ route('administrators.index') }}" class='sidebar-link'>
				<i class="bi bi-person-badge-fill"></i>
				<span>Administrator</span>
			</a>
		</li>

		<li class="sidebar-item">
			<form method="POST" action="{{ route('logout') }}" id="logout">
				@csrf

				<a href="{{ route('logout') }}" class='sidebar-link'>
					<i class="bi bi-box-arrow-left"></i>
					<span>Logout</span>
				</a>
			</form>
		</li>	
		@endauth

	</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
