<ul class="menu-inner py-1">

    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Dashboard</div>
        </a>
    </li>
<!-- Users Management -->
<li class="menu-item {{ request()->is('dashboard/users*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.users.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div>Users Management</div>
    </a>
</li>
    <!-- Team Management Group -->
    <li class="menu-item {{ request()->is('dashboard/team-members*') || request()->is('dashboard/departments*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-group"></i>
            <div>Team Management</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ request()->is('dashboard/team-members*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.team-members.index') }}" class="menu-link">
                    <div>Team Members</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('dashboard/departments*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.departments.index') }}" class="menu-link">
                    <div>Departments</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Careers Group -->
    <li class="menu-item {{ request()->is('dashboard/career-jobs*') || request()->is('dashboard/job-applications*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-briefcase-alt"></i>
            <div>Careers</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ request()->is('dashboard/career-jobs*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.career-jobs.index') }}" class="menu-link">
                    <div>Career Jobs</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('dashboard/job-applications*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.job-applications.index') }}" class="menu-link">
                    <div>Job Applications</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Content Group -->
    <li class="menu-item {{ request()->is('dashboard/news*') || request()->is('dashboard/client-partners*') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-news"></i>
            <div>Content</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ request()->is('dashboard/news*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.news.index') }}" class="menu-link">
                    <div>News</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('dashboard/client-partners*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.client-partners.index') }}" class="menu-link">
                    <div>Clients & Partners</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Contact Section (Standalone) -->
    <li class="menu-item {{ request()->is('dashboard/contact-submissions*') ? 'active' : '' }}">
        <a href="{{ route('dashboard.contact-submissions.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-mail-send"></i>
            <div>Contact Messages</div>
        </a>
    </li>

</ul>
