<div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>

        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full"></div>
        <!--Mobile navbar-->
        <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <!-- Mobile menu toggler icon -->
                    <div class="brand-start">
                        <div class="navbar-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="navbar-item is-brand" href="index.html">
                        <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                        <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
                    </a>

                    <div class="brand-end">
                        <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                            <a class="navbar-link is-arrowless" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                <span class="new-indicator pulsate"></span>
                            </a>
                            <div class="navbar-dropdown is-boxed is-right">
                                <div class="heading">
                                    <div class="heading-left">
                                        <h6 class="heading-title">Notifications</h6>
                                    </div>
                                    <div class="heading-right">
                                        <a class="notification-link" href="#">See all</a>
                                    </div>
                                </div>
                                <div class="inner has-slimscroll">

                                    <ul class="notification-list">
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt="" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg">
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                    <p class="time">1 hour ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt="" src="assets/img/avatars/photos/12.jpg" data-demo-src="assets/img/avatars/photos/12.jpg">
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                    <p class="time">2 hours ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt="" src="assets/img/avatars/photos/13.jpg" data-demo-src="assets/img/avatars/photos/13.jpg">
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                    <p class="time">2 hours ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt="" src="assets/img/avatars/photos/25.jpg" data-demo-src="assets/img/avatars/photos/25.jpg">
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                    <p class="time">3 hours ago</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                            <div class="is-trigger" aria-haspopup="true">
                                <div class="profile-avatar">
                                    <img class="avatar" src="assets/img/avatars/photos/8.jpg" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="assets/img/avatars/photos/8.jpg" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>Erik Kovalsky</span>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Profile</span>
                                            <span>View your profile</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item is-media layout-switcher">
                                        <div class="icon">
                                            <i class="lnil lnil-layout"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Layout</span>
                                            <span>Switch to admin/webapp</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-briefcase"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Projects</span>
                                            <span>All my projects</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-users-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Team</span>
                                            <span>Manage your team</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Settings</span>
                                            <span>Account settings</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                          </span>
                                            <span>Logout</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!--Mobile sidebar-->
        <div class="mobile-main-sidebar">
            <div class="inner">
                <ul class="icon-side-menu">
                    <li>
                        <a href="/admin-dashboards-personal-1.html" id="home-sidebar-menu-mobile" class="is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </a>
                    </li>
                    <li>
                        <a href="/elements-hub.html" id="elements-sidebar-menu-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </a>
                    </li>
                    <li>
                        <a href="/components-hub.html" id="components-sidebar-menu-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        </a>
                    </li>
                    <li>
                        <a href="/messaging-chat.html" id="open-messages-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </a>
                    </li>
                </ul>

                <ul class="bottom-icon-side-menu">
                    <li>
                        <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Webapp navbar regular-->
        <div class="webapp-navbar">
            <div class="webapp-navbar-inner">
                <div class="left">
                    <a href="/" class="brand">
                        <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                        <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
                    </a>
                    <div class="separator"></div>
                    <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-h-green">
                              <span>H</span>
                            </span>
                        </div>
                        <span class="status-indicator"></span>

                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-block">
                                    <div class="h-avatar is-small">
                                        <span class="avatar is-fake is-warning">
                                          <span>D</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <span class="dark-inverted">Delivery App Project</span>
                                        <span>Food For Good</span>
                                    </div>
                                </div>
                                <div class="dropdown-block">
                                    <div class="h-avatar is-small">
                                        <span class="avatar is-fake is-h-green">
                                          <span>H</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <span class="dark-inverted">Health and Fitness Dashboard</span>
                                        <span>Fit'n'Dance</span>
                                    </div>
                                </div>
                                <div class="dropdown-block">
                                    <div class="h-avatar is-small">
                                        <span class="avatar is-fake is-info">
                                          <span>L</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <span class="dark-inverted">Learning Tracker Dashboard</span>
                                        <span>Fit'n'Dance</span>
                                    </div>
                                </div>
                                <div class="dropdown-block">
                                    <div class="h-avatar is-small">
                                        <span class="avatar is-fake is-h-purple">
                                          <span>B</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <span class="dark-inverted">Banking and Finance Dashboard</span>
                                        <span>H Bank</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 id="webapp-page-title" class="title is-5">Tile Grids</h1>
                </div>
                <div class="center">
                    <div id="webapp-navbar-menu" class="centered-links">
                        <a id="dashboards-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="dashboards-webapp-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                            <span>Dashboards</span>
                        </a>
                        <a id="layouts-navbar-menu" class="centered-link centered-link-toggle is-active" data-menu-id="layouts-webapp-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                            <span>Layouts</span>
                        </a>
                        <a id="elements-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="elements-webapp-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Elements</span>
                        </a>
                        <a id="components-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="components-webapp-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                            <span>Components</span>
                        </a>
                        <a href="/webapp-messaging-chat.html" class="centered-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            <span>Chat</span>
                        </a>
                        <a class="centered-link centered-link-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            <span>Search</span>
                        </a>
                    </div>
                    <div id="webapp-navbar-search" class="centered-search is-hidden">
                        <div class="field">
                            <div class="control has-icon">
                                <input type="text" class="input is-rounded search-input" placeholder="Search records...">
                                <div class="form-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </div>
                                <div id="webapp-navbar-search-close" class="form-icon is-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </div>
                                <div class="search-results has-slimscroll"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="toolbar ml-auto">

                        <div class="toolbar-link">
                            <label class="dark-mode ml-auto">
                                <input type="checkbox" checked="">
                                <span></span>
                            </label>
                        </div>

                        <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                            <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                        </a>

                        <div class="toolbar-notifications is-hidden-mobile">
                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                <div class="is-trigger" aria-haspopup="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                    <span class="new-indicator pulsate"></span>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <div class="heading">
                                            <div class="heading-left">
                                                <h6 class="heading-title">Notifications</h6>
                                            </div>
                                            <div class="heading-right">
                                                <a class="notification-link" href="/admin-profile-notifications.html">See all</a>
                                            </div>
                                        </div>
                                        <ul class="notification-list">
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg">
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                        <p class="time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="assets/img/avatars/photos/12.jpg" data-demo-src="assets/img/avatars/photos/12.jpg">
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                        <p class="time">2 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="assets/img/avatars/photos/13.jpg" data-demo-src="assets/img/avatars/photos/13.jpg">
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                        <p class="time">2 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="assets/img/avatars/photos/25.jpg" data-demo-src="assets/img/avatars/photos/25.jpg">
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                        <p class="time">3 hours ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </a>
                    </div>
                    <div class="dropdown profile-dropdown dropdown-trigger is-spaced is-right">
                        <img src="assets/img/avatars/photos/8.jpg" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                        <span class="status-indicator"></span>

                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-head">
                                    <div class="h-avatar is-large">
                                        <img class="avatar" src="assets/img/avatars/photos/8.jpg" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                    </div>
                                    <div class="meta">
                                        <span>Erik Kovalsky</span>
                                        <span>Product Manager</span>
                                    </div>
                                </div>
                                <a href="/admin-profile-view.html" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-user-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Profile</span>
                                        <span>View your profile</span>
                                    </div>
                                </a>
                                <a class="dropdown-item is-media layout-switcher">
                                    <div class="icon">
                                        <i class="lnil lnil-layout"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Layout</span>
                                        <span>Switch to admin/webapp</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-briefcase"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Projects</span>
                                        <span>All my projects</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-users-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Team</span>
                                        <span>Manage your team</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-cog"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Settings</span>
                                        <span>Account settings</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <div class="dropdown-item is-button">
                                    <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                        <span class="icon is-small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                      </span>
                                        <span>Logout</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="webapp-subnavbar">

            <!--src/partials/navbar/webapp/menus/-->
            <div id="dashboards-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
                <div class="tabs-inner">
                    <div class="tabs is-centered is-3">
                        <ul>
                            <li data-tab="dashboard-pages-tab" class="is-active"><a>Dashboards</a></li>
                            <li data-tab="templates-pages-tab"><a>Templates</a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div id="dashboard-pages-tab" class="tab-content is-active">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Personal</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-dashboards-personal-1.html">
                                                    <i class="lnil lnil-analytics-alt-1"></i>
                                                    <span>Personal V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-personal-2.html">
                                                    <i class="lnil lnil-pie-chart"></i>
                                                    <span>Personal V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-personal-3.html">
                                                    <i class="lnil lnil-stats-up"></i>
                                                    <span>Personal V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-lifestyle-1.html">
                                                    <i class="lnil lnil-cardiology"></i>
                                                    <span>Influencer</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-lifestyle-2.html">
                                                    <i class="lnil lnil-cloud-sun"></i>
                                                    <span>Hobbies</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-lifestyle-3.html">
                                                    <i class="lnil lnil-hospital-alt-3"></i>
                                                    <span>Health</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-lifestyle-4.html">
                                                    <i class="lnil lnil-books"></i>
                                                    <span>Writer</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-lifestyle-4.html">
                                                    <i class="lnil lnil-video-alt-1"></i>
                                                    <span>Video</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Finance</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-dashboards-finance-1.html">
                                                    <i class="lnil lnil-analytics-alt-1"></i>
                                                    <span>Analytics</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-finance-2.html">
                                                    <i class="lnil lnil-stats-up"></i>
                                                    <span>Stocks</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-finance-3.html">
                                                    <i class="lnil lnil-credit-card"></i>
                                                    <span>Sales</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-banking-1.html">
                                                    <i class="lnil lnil-bank"></i>
                                                    <span>Banking V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-banking-2.html">
                                                    <i class="lnil lnil-bank"></i>
                                                    <span>Banking V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-banking-3.html">
                                                    <i class="lnil lnil-bank"></i>
                                                    <span>Banking V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Business</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-dashboards-business-1.html">
                                                    <i class="lnil lnil-plane-alt"></i>
                                                    <span>Flights Booking</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-business-2.html">
                                                    <i class="lnil lnil-apartment"></i>
                                                    <span>Company Board</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-business-3.html">
                                                    <i class="lnil lnil-users-alt"></i>
                                                    <span>HR Board</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-business-4.html">
                                                    <i class="lnil lnil-graduate"></i>
                                                    <span>Course Board</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-ecommerce-1.html">
                                                    <i class="lnil lnil-cart"></i>
                                                    <span>Ecommerce V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-map-1.html">
                                                    <i class="lnil lnil-map"></i>
                                                    <span>Map V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-map-2.html">
                                                    <i class="lnil lnil-map"></i>
                                                    <span>Map V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Apps</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-dashboards-apps-1.html">
                                                    <i class="lnil lnil-pizza"></i>
                                                    <span>Food Delivery</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-apps-2.html">
                                                    <i class="lnil lnil-envelope"></i>
                                                    <span>Inbox</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin-messaging-chat.html">
                                                    <i class="lnil lnil-bubble"></i>
                                                    <span>Messaging V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-messaging-chat.html">
                                                    <i class="lnil lnil-bubble"></i>
                                                    <span>Messaging V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="templates-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Sidebars</h4>
                                        <ul>
                                            <li>
                                                <a href="admin-blank-page-1.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Regular Sidebar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-2.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Curved Sidebar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-3.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Colored Sidebar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-4.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Curved Colored</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-5.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Sidebar Labels</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-6.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Hover Labels</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="admin-blank-page-7.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Floating Sidebar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Navbars</h4>
                                        <ul>
                                            <li>
                                                <a href="webapp-blank-page-1.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Regular Navbar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-2.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Fading Navbar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-3.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Colored Navbar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-4.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Drop Navbar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-5.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Colored Drop</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-6.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Clean Navbar</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-7.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Clean Centered</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="webapp-blank-page-8.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Clean Trans.</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Widgets</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-dashboards-charts-apex.html">
                                                    <i class="lnil lnil-pie-chart-alt"></i>
                                                    <span>Apex Charts</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-charts-billboardjs.html">
                                                    <i class="lnil lnil-bar-chart"></i>
                                                    <span>Billboard JS</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-widgets-ui.html">
                                                    <i class="lnil lnil-layout-alt-1"></i>
                                                    <span>UI Widgets</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-widgets-creative.html">
                                                    <i class="lnil lnil-layout-alt-2"></i>
                                                    <span>Creative Widgets</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-widgets-list.html">
                                                    <i class="lnil lnil-layout-alt-1"></i>
                                                    <span>List Widgets</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-dashboards-widgets-stats.html">
                                                    <i class="lnil lnil-layout-alt-1"></i>
                                                    <span>Stat Widgets</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Wizard</h4>
                                        <ul>
                                            <li>
                                                <a href="/wizard-v1.html">
                                                    <span>Wizard V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="/webapp-form-layouts-1.html">
                                                    <span>Form V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="/webapp-form-layouts-2.html">
                                                    <span>Form V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="/webapp-form-layouts-3.html">
                                                    <span>Form V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="/webapp-form-layouts-4.html">
                                                    <span>Form V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="/webapp-form-layouts-5.html">
                                                    <span>Form V5</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--src/partials/navbar/webapp/menus/-->
            <div id="layouts-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper is-active">
                <div class="tabs-inner">
                    <div class="tabs is-centered is-4">
                        <ul>
                            <li data-tab="list-pages-tab" class=""><a>List Views</a></li>
                            <li data-tab="grid-pages-tab" class="is-active"><a>Grid Views</a></li>
                            <li data-tab="app-pages-tab"><a>Pages</a></li>
                            <li data-tab="utility-pages-tab"><a>Utility</a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div id="list-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Lists</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-list-view-1.html">
                                                    <i class="lnil lnil-list-alt"></i>
                                                    <span>List View V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-view-2.html">
                                                    <i class="lnil lnil-list-alt"></i>
                                                    <span>List View V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-view-3.html">
                                                    <i class="lnil lnil-list-alt"></i>
                                                    <span>List View V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-view-4.html">
                                                    <i class="lnil lnil-list-alt"></i>
                                                    <span>List View V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Flex Lists</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-list-flex-1.html">
                                                    <i class="lnil lnil-list-alt-1"></i>
                                                    <span>Flex List V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-flex-2.html">
                                                    <i class="lnil lnil-list-alt-1"></i>
                                                    <span>Flex List V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-flex-3.html">
                                                    <i class="lnil lnil-list-alt-1"></i>
                                                    <span>Flex List V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Datatables</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-list-datatable-1.html">
                                                    <i class="lnil lnil-layout-alt"></i>
                                                    <span>Datatable V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-datatable-2.html">
                                                    <i class="lnil lnil-layout-alt"></i>
                                                    <span>Datatable V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-datatable-3.html">
                                                    <i class="lnil lnil-layout-alt"></i>
                                                    <span>Datatable V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-list-datatable-4.html">
                                                    <i class="lnil lnil-layout-alt"></i>
                                                    <span>Datatable V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <a href="https://cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                            <h3>Support</h3>
                                        </a>
                                        <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                            <h3>Documentation</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="grid-pages-tab" class="tab-content is-active">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Cards</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-grid-cards-1.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Card Grid V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-cards-2.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Card Grid V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-cards-3.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Card Grid V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-cards-4.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Card Grid V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Tiles</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-grid-tiles-1.html">
                                                    <i class="lnil lnil-layout-alt-2"></i>
                                                    <span>Tile Grid V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li class="is-active">
                                                <a href="/webapp-grid-tiles-2.html">
                                                    <i class="lnil lnil-layout-alt-2"></i>
                                                    <span>Tile Grid V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-tiles-3.html">
                                                    <i class="lnil lnil-layout-alt-2"></i>
                                                    <span>Tile Grid V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Users</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-grid-users-1.html">
                                                    <i class="lnil lnil-users-alt"></i>
                                                    <span>User Grid V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-users-2.html">
                                                    <i class="lnil lnil-users-alt"></i>
                                                    <span>User Grid V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-users-3.html">
                                                    <i class="lnil lnil-users-alt"></i>
                                                    <span>User Grid V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-grid-users-4.html">
                                                    <i class="lnil lnil-users-alt"></i>
                                                    <span>User Grid V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <a href="https://cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                            <h3>Support</h3>
                                        </a>
                                        <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                            <h3>Documentation</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="app-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Personal</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-profile-view.html">
                                                    <i class="lnil lnil-user-alt"></i>
                                                    <span>Profile</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-profile-edit-1.html">
                                                    <i class="lnil lnil-pencil"></i>
                                                    <span>Edit Profile</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-profile-notifications.html">
                                                    <i class="lnil lnil-notification"></i>
                                                    <span>Notifications</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-profile-settings.html">
                                                    <i class="lnil lnil-cog"></i>
                                                    <span>Settings</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Pages</h4>
                                        <ul>
                                            <li>
                                                <a href="/auth-login-1.html">
                                                    <i class="lnil lnil-pointer-right"></i>
                                                    <span>Login v1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth-login-2.html">
                                                    <i class="lnil lnil-pointer-right"></i>
                                                    <span>Login v2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth-login-3.html">
                                                    <i class="lnil lnil-pointer-right"></i>
                                                    <span>Login v3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth-signup-2.html">
                                                    <i class="lnil lnil-crown"></i>
                                                    <span>Signup v1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth-signup-3.html">
                                                    <i class="lnil lnil-crown"></i>
                                                    <span>Signup v2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth-signup-1.html">
                                                    <i class="lnil lnil-crown"></i>
                                                    <span>Signup Flow</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Subpages</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-saas-billing.html">
                                                    <i class="lnil lnil-credit-card"></i>
                                                    <span>Saas Billing</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-welcome.html">
                                                    <i class="lnil lnil-door-alt"></i>
                                                    <span>Welcome</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-action-page-1.html">
                                                    <i class="lnil lnil-thunderbolt"></i>
                                                    <span>Action Page V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-action-page-2.html">
                                                    <i class="lnil lnil-thunderbolt"></i>
                                                    <span>Action Page V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-search-results.html">
                                                    <i class="lnil lnil-search-alt"></i>
                                                    <span>Search Results</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-search-empty.html">
                                                    <i class="lnil lnil-search-alt"></i>
                                                    <span>Empty Search</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Projects</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-projects-projects.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Projects V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-projects-projects-2.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Projects V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-projects-projects-3.html">
                                                    <i class="lnil lnil-grid-alt"></i>
                                                    <span>Projects V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-projects-project.html">
                                                    <i class="lnil lnil-layout"></i>
                                                    <span>Project Details</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-kanban-board.html">
                                                    <i class="lnil lnil-layout-alt-1"></i>
                                                    <span>Project Board</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="utility-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Utility</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-utility-account-confirm.html">
                                                    <i class="lnil lnil-thunderbolt"></i>
                                                    <span>Confirm Account</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-utility-promotion.html">
                                                    <i class="lnil lnil-magnet"></i>
                                                    <span>Promotion Page</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-utility-invoice.html">
                                                    <i class="lnil lnil-calculator-alt"></i>
                                                    <span>Invoice</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin-utility-status.html">
                                                    <i class="lnil lnil-checkmark-circle"></i>
                                                    <span>App Status</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Onboarding</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-onboarding-page-1.html">
                                                    <i class="lnil lnil-train"></i>
                                                    <span>Onboarding V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-onboarding-page-2.html">
                                                    <i class="lnil lnil-train-alt"></i>
                                                    <span>Onboarding V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-onboarding-page-3.html">
                                                    <i class="lnil lnil-car"></i>
                                                    <span>Onboarding V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-onboarding-page-4.html">
                                                    <i class="lnil lnil-car-alt"></i>
                                                    <span>Onboarding V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-onboarding-page-5.html">
                                                    <i class="lnil lnil-train-alt"></i>
                                                    <span>Onboarding V5</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Error</h4>
                                        <ul>
                                            <li>
                                                <a href="/error-page-1.html">
                                                    <i class="lnil lnil-cross-circle"></i>
                                                    <span>Error Page V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/error-page-2.html">
                                                    <i class="lnil lnil-cross-circle"></i>
                                                    <span>Error Page V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/error-page-3.html">
                                                    <i class="lnil lnil-cross-circle"></i>
                                                    <span>Error Page V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/error-page-4.html">
                                                    <i class="lnil lnil-cross-circle"></i>
                                                    <span>Error Page V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/error-page-5.html">
                                                    <i class="lnil lnil-cross-circle"></i>
                                                    <span>Error Page V5</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Placeload</h4>
                                        <ul>
                                            <li>
                                                <a href="/webapp-placeload-1.html">
                                                    <i class="lnil lnil-reload"></i>
                                                    <span>Placeload V1</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-placeload-2.html">
                                                    <i class="lnil lnil-reload"></i>
                                                    <span>Placeload V2</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-placeload-3.html">
                                                    <i class="lnil lnil-reload"></i>
                                                    <span>Placeload V3</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/webapp-placeload-4.html">
                                                    <i class="lnil lnil-reload"></i>
                                                    <span>Placeload V4</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--src/partials/navbar/webapp/menus/-->
            <div id="elements-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
                <div class="tabs-inner">
                    <div class="tabs is-centered is-2">
                        <ul>
                            <li data-tab="elements-basic-pages-tab" class="is-active"><a>Basic UI</a></li>
                            <li data-tab="elements-forms-pages-tab"><a>Form Controls</a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div id="elements-basic-pages-tab" class="tab-content is-active">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">General</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-hub.html">
                                                    <i class="lnil lnil-home"></i>
                                                    <span>Elements Hub</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-colors.html">
                                                    <i class="lnil lnil-color-palette"></i>
                                                    <span>Colors</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-helpers.html">
                                                    <i class="lnil lnil-help"></i>
                                                    <span>Helpers</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Icons</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-icons-lnil.html">
                                                    <span>Line Icons Light</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-icons-lnir.html">
                                                    <span>Line Icons Regular</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-icons-fa.html">
                                                    <span>Font Awesome 5</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-icons-feather.html">
                                                    <span>Feather Icons</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Base</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-buttons.html">
                                                    <span>Buttons</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-blocks.html">
                                                    <span>Blocks</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-content.html">
                                                    <span>Content</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-tags.html">
                                                    <span>Tags</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Advanced</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-cards-basic.html">
                                                    <span>Basic Cards</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-cards-advanced.html">
                                                    <span>Advanced Cards</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-cards-bulma.html">
                                                    <span>Bulma Cards</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-table.html">
                                                    <span>Table</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-tooltips.html">
                                                    <span>Tooltips</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="elements-forms-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">Input</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-forms-inputs.html">
                                                    <span>Inputs</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-addons.html">
                                                    <span>Input Addons</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-textarea.html">
                                                    <span>Textarea</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Selects</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-forms-selects.html">
                                                    <span>Regular</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-custom.html">
                                                    <span>Custom</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-file.html">
                                                    <span>File Input</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Toggles</h4>
                                        <ul>
                                            <li>
                                                <a href="/elements-forms-checkboxes.html">
                                                    <span>Checkboxes</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-radios.html">
                                                    <span>Radio Buttons</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements-forms-switch.html">
                                                    <span>Switches</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <a href="https://cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                            <h3>Support</h3>
                                        </a>
                                        <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                            <h3>Documentation</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--src/partials/navbar/webapp/menus/-->
            <div id="components-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
                <div class="tabs-inner">
                    <div class="tabs is-centered is-2">
                        <ul>
                            <li data-tab="components-basic-pages-tab" class="is-active"><a>UI Components</a></li>
                            <li data-tab="components-plugins-pages-tab"><a>JS Plugins</a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div id="components-basic-pages-tab" class="tab-content is-active">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <h4 class="column-heading">General</h4>
                                        <ul>
                                            <li>
                                                <a href="/components-avatars.html">
                                                    <span>Avatars</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-accordion-basic.html">
                                                    <span>Accordion</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-accordion-collapse.html">
                                                    <span>Collapse</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-accordion-images.html">
                                                    <span>Image Accordion</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-breadcrumb.html">
                                                    <span>Breadcrumb</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Interaction</h4>
                                        <ul>
                                            <li>
                                                <a href="/components-loader.html">
                                                    <span>Loader</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-dropdown.html">
                                                    <span>Dropdown</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-modal.html">
                                                    <span>Modal Dialogs</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-tabs-regular.html">
                                                    <span>Regular Tabs</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-tabs-slider.html">
                                                    <span>Slider Tabs</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Presentation</h4>
                                        <ul>
                                            <li>
                                                <a href="/components-icon-box.html">
                                                    <span>Icon Box</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-messages.html">
                                                    <span>Message</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-progress.html">
                                                    <span>Progress</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-snacks.html">
                                                    <span>Snacks</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <h4 class="column-heading">Flex Table</h4>
                                        <ul>

                                            <li>
                                                <a href="/components-table-flex.html">
                                                    <span>Base Table</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-table-flex-compact.html">
                                                    <span>Compact Table</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-table-flex-media.html">
                                                    <span>Media Table</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-table-flex-advanced.html">
                                                    <span>Advanced Table</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="components-plugins-pages-tab" class="tab-content">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">
                                    <div class="column is-3">
                                        <ul>
                                            <li>
                                                <a href="/components-plugins-alertify.html">
                                                    <span>Alertify</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-autocomplete.html">
                                                    <span>Autocomplete</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-datepicker.html">
                                                    <span>Datepicker</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-choices.html">
                                                    <span>Choices JS</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <ul>
                                            <li>
                                                <a href="/components-plugins-filepond.html">
                                                    <span>Filepond</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-lightgallery.html">
                                                    <span>Light Gallery</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-videogallery.html">
                                                    <span>Video Gallery</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-video-player.html">
                                                    <span>Video Player</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <ul>
                                            <li>
                                                <a href="/components-plugins-toasts.html">
                                                    <span>Toast Messages</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-webuipopover.html">
                                                    <span>WebUI Popovers</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-nouislider.html">
                                                    <span>NoUI Slider</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-editor-summernote.html">
                                                    <span>Summernote</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/components-plugins-editor-sun.html">
                                                    <span>Sun Editor</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="column is-3">
                                        <a href="https://cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/buoy.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/buoy-dark.svg" alt="">
                                            <h3>Support</h3>
                                        </a>
                                        <a href="https://docs.huro.cssninja.io" class="column-placeholder">
                                            <img class="light-image" src="assets/img/icons/misc/docs.svg" alt="">
                                            <img class="dark-image" src="assets/img/icons/misc/docs-dark.svg" alt="">
                                            <h3>Documentation</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Languages panel-->
        <div id="languages-panel" class="right-panel-wrapper is-languages">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>Select Language</h3>
                    <a class="close-panel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
                <div class="right-panel-body has-slimscroll">
                    <div class="languages-boxes">
                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection" checked="">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/france.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/spain.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/germany.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/mexico.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/china.svg" alt="">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="img-wrap has-text-centered">
                        <img class="light-image" src="assets/img/illustrations/right-panel/languages.svg" alt="">
                        <img class="dark-image" src="assets/img/illustrations/right-panel/languages-dark.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--Activity panel-->
        <div id="activity-panel" class="right-panel-wrapper is-activity">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>Activity</h3>
                    <a class="close-panel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
                <div class="tabs-wrapper is-triple-slider is-squared">
                    <div class="tabs-inner">
                        <div class="tabs">
                            <ul>
                                <li data-tab="team-side-tab" class="is-active"><a><span>Team</span></a></li>
                                <li data-tab="projects-side-tab"><a><span>Projects</span></a></li>
                                <li data-tab="schedule-side-tab"><a><span>Schedule</span></a></li>
                                <li class="tab-naver"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-panel-body">
                        <div id="team-side-tab" class="tab-content is-active">
                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="assets/img/avatars/photos/12.jpg" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                    <img class="badge" src="assets/img/icons/flags/united-states-of-america.svg" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Joshua S.</span>
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                      Las Vegas, NV
                                  </span>
                                </div>
                                <a class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="assets/img/avatars/photos/25.jpg" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                    <img class="badge" src="assets/img/icons/flags/united-states-of-america.svg" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Melany W.</span>
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                      San Jose, CA
                                  </span>
                                </div>
                                <a class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="assets/img/avatars/photos/18.jpg" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                    <img class="badge" src="assets/img/icons/flags/united-states-of-america.svg" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Esteban C.</span>
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                      Miami, FL
                                  </span>
                                </div>
                                <a class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="assets/img/avatars/photos/13.jpg" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                    <img class="badge" src="assets/img/icons/flags/united-states-of-america.svg" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Tara S.</span>
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                      New York, NY
                                  </span>
                                </div>
                                <a class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </div>

                        <div id="projects-side-tab" class="tab-content">
                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="assets/img/icons/logos/slicer.svg" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">
                                    <div class="meta">
                                        <span>The slicer project</span>
                                        <span>getslicer.io</span>
                                    </div>
                                    <a class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="31" max="100">31%</progress>
                                    <div class="foot-stats">
                                        <span>5 / 24</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/5.jpg" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/8.jpg" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="assets/img/icons/logos/metamovies.svg" data-demo-src="assets/img/icons/logos/metamovies.svg" alt="">
                                    <div class="meta">
                                        <span>Metamovies reworked</span>
                                        <span>metamovies.co</span>
                                    </div>
                                    <a class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="84" max="100">84%</progress>
                                    <div class="foot-stats">
                                        <span>28 / 31</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/13.jpg" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/18.jpg" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="assets/img/icons/logos/fastpizza.svg" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">
                                    <div class="meta">
                                        <span>Fast Pizza redesign</span>
                                        <span>fastpizza.com</span>
                                    </div>
                                    <a class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="60" max="100">60%</progress>
                                    <div class="foot-stats">
                                        <span>25 / 39</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="assets/img/avatars/photos/25.jpg" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="schedule-side-tab" class="tab-content">
                            <!--Timeline-->
                            <div class="icon-timeline">
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Call Danny at Colby's</p>
                                        <span>Today - 11:30am</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <img class="avatar" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                    </div>
                                    <div class="timeline-content">
                                        <p>Meeting with Alice</p>
                                        <span>Today - 01:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Answer Annie's message</p>
                                        <span>Today - 01:45pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Send new campaign</p>
                                        <span>Today - 02:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Project review</p>
                                        <span>Today - 03:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Call Trisha Jackson</p>
                                        <span>Today - 05:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Write proposal for Don</p>
                                        <span>Today - 06:00pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <!--Page body-->

        <div class="mobile-subsidebar">
            <div class="inner">
                <div class="sidebar-title">
                    <h3>Layouts</h3>
                </div>

                <ul class="submenu">
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Lists <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-list-view-1.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-view-2.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-view-3.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-view-4.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>List View V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Flex Lists <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-list-flex-1.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-flex-2.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-flex-3.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>Flex List V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Datatable <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-list-datatable-1.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-datatable-2.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-datatable-3.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-list-datatable-4.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>Datatable V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Placeload <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-placeload-1.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-placeload-2.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-placeload-3.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-placeload-4.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>Placeload V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Card Grid <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-grid-cards-1.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-cards-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-cards-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-cards-4.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Card Grid V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Tile Grid <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-grid-tiles-1.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-tiles-2.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-tiles-3.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Tile Grid V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">User Grid <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-grid-users-1.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-users-2.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-users-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-grid-users-4.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>User Grid V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Personal <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-profile-view.html">
                                    <i class="lnil lnil-user-alt"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-profile-edit-1.html">
                                    <i class="lnil lnil-pencil"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-profile-notifications.html">
                                    <i class="lnil lnil-notification"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-profile-settings.html">
                                    <i class="lnil lnil-cog"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Pages <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/auth-login-1.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/auth-login-2.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/auth-login-3.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>Login v3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/auth-signup-2.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/auth-signup-3.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/auth-signup-1.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>Signup Flow</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-search-results.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>Search Results</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-search-empty.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>Empty Search</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Subpages <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-saas-billing.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>SaaS Billing</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-welcome.html">
                                    <i class="lnil lnil-door-alt"></i>
                                    <span>Welcome</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-action-page-1.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Action Page V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-action-page-2.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Action Page V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Projects <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-projects-projects.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V1</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin is-auto"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-projects-projects-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V2</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin is-auto"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-projects-projects-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>Projects V3</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin is-auto"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-projects-project.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Project Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin is-auto"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-kanban-board.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Kanban Board</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin is-auto"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Utility <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-utility-account-confirm.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>Confirm Account</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-utility-promotion.html">
                                    <i class="lnil lnil-magnet"></i>
                                    <span>Promotion Page</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-utility-invoice.html">
                                    <i class="lnil lnil-calculator-alt"></i>
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-utility-status.html">
                                    <i class="lnil lnil-checkmark-circle"></i>
                                    <span>App Status</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Onboarding <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-onboarding-page-1.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>Onboarding V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-onboarding-page-2.html">
                                    <i class="lnil lnil-train-alt"></i>
                                    <span>Onboarding V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-onboarding-page-3.html">
                                    <i class="lnil lnil-car"></i>
                                    <span>Onboarding V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-onboarding-page-4.html">
                                    <i class="lnil lnil-car-alt"></i>
                                    <span>Onboarding V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-onboarding-page-5.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>Onboarding V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Error Pages <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/error-page-1.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/error-page-2.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/error-page-3.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/error-page-4.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 404 V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/error-page-5.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>Error 500 V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- Content Wrapper -->
        <div id="grid-cards" class="view-wrapper is-webapp" data-page-title="Tile Grids" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered is-webapp">

                        <div class="title-wrap">
                            <h1 class="title is-4">Tile Grid</h1>
                        </div>

                        <div class="toolbar ml-auto">

                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked="">
                                    <span></span>
                                </label>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                                <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </a>

                            <div class="toolbar-notifications is-hidden-mobile">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                        <span class="new-indicator pulsate"></span>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <div class="heading">
                                                <div class="heading-left">
                                                    <h6 class="heading-title">Notifications</h6>
                                                </div>
                                                <div class="heading-right">
                                                    <a class="notification-link" href="/admin-profile-notifications.html">See all</a>
                                                </div>
                                            </div>
                                            <ul class="notification-list">
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="assets/img/avatars/photos/7.jpg" data-demo-src="assets/img/avatars/photos/7.jpg">
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                            <p class="time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="assets/img/avatars/photos/12.jpg" data-demo-src="assets/img/avatars/photos/12.jpg">
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="assets/img/avatars/photos/13.jpg" data-demo-src="assets/img/avatars/photos/13.jpg">
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="assets/img/avatars/photos/25.jpg" data-demo-src="assets/img/avatars/photos/25.jpg">
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                            <p class="time">3 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                            </a>
                        </div>
                    </div>

                    <div class="tile-grid-toolbar">
                        <div class="control has-icon">
                            <input class="input custom-text-filter" placeholder="Search..." data-filter-target=".column">
                            <div class="form-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </div>
                        </div>

                        <div class="buttons">
                            <div class="field h-hidden-mobile">
                                <div class="control">
                                    <div class="h-select">
                                        <div class="select-box">
                                            <span>All Files</span>
                                        </div>
                                        <div class="select-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </div>
                                        <div class="select-drop has-slimscroll-sm">
                                            <div class="drop-inner">
                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>Recently updated</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>My Files</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>Team Files</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="grid_filter">
                                                    <div class="option-meta">
                                                        <span>Deprecated</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="button h-button is-primary is-raised">
                                <span class="icon">
                                  <i aria-hidden="true" class="fas fa-plus"></i>
                              </span>
                                <span>Add File</span>
                            </button>
                        </div>
                    </div>

                    <div class="page-content-inner is-webapp">

                        <div class="tile-grid tile-grid-v2">

                            <!--List Empty Search Placeholder -->
                            <div class="page-placeholder custom-text-filter-placeholder is-hidden">
                                <div class="placeholder-content">
                                    <img class="light-image" src="assets/img/illustrations/placeholders/search-4.svg" alt="">
                                    <img class="dark-image" src="assets/img/illustrations/placeholders/search-4-dark.svg" alt="">
                                    <h3>We couldn't find any matching results.</h3>
                                    <p class="is-larger">Too bad. Looks like we couldn't find any matching results for the
                                        search terms you've entered. Please try different search terms or criteria.</p>
                                </div>
                            </div>

                            <!--Tile Grid v1-->
                            <div class="columns is-multiline">

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/pdf.svg" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Company UX Guide</span>
                                                <span>
                                                  <span>4.7 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 days ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/sheet.svg" data-demo-src="assets/img/icons/files/sheet.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Tech Summit Expenses</span>
                                                <span>
                                                  <span>34 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 1 week ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/doc-2.svg" data-demo-src="assets/img/icons/files/doc-2.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Project Outline</span>
                                                <span>
                                                  <span>77 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 weeks ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/ppt.svg" data-demo-src="assets/img/icons/files/ppt.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">UX Presentation</span>
                                                <span>
                                                  <span>2.3 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 4 days ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/ai.svg" data-demo-src="assets/img/icons/files/ai.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Website Homepage Redesign</span>
                                                <span>
                                                  <span>4.8 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 3 hours ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/doc-2.svg" data-demo-src="assets/img/icons/files/doc-2.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">UX Ramp Up for Interns</span>
                                                <span>
                                                  <span>1.8 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 6 hours ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/pdf.svg" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">2020 Projects Digest</span>
                                                <span>
                                                  <span>8.9 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 days ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/doc-2.svg" data-demo-src="assets/img/icons/files/doc-2.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Financial Report - 2020</span>
                                                <span>
                                                  <span>1.2 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/sheet.svg" data-demo-src="assets/img/icons/files/sheet.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">2020 Supplier Expenses</span>
                                                <span>
                                                  <span>250 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 weeks ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/ai.svg" data-demo-src="assets/img/icons/files/ai.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Website About Page Redesign</span>
                                                <span>
                                                  <span>3.9 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/ai.svg" data-demo-src="assets/img/icons/files/ai.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Website Pricing Page Redesign</span>
                                                <span>
                                                  <span>2.6 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/doc-2.svg" data-demo-src="assets/img/icons/files/doc-2.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Financial Report - 2019</span>
                                                <span>
                                                  <span>1.1 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 8 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/sheet.svg" data-demo-src="assets/img/icons/files/sheet.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">2019 Supplier Expenses</span>
                                                <span>
                                                  <span>34 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 8 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/ai.svg" data-demo-src="assets/img/icons/files/ai.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Website Contact Page Redesign</span>
                                                <span>
                                                  <span>5.8 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 3 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/pdf.svg" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">Company Brand Book</span>
                                                <span>
                                                  <span>5.3 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 3 weeks ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grid item-->
                                <div class="column is-4">
                                    <div class="tile-grid-item">
                                        <div class="tile-grid-item-inner">
                                            <img src="assets/img/icons/files/pdf.svg" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                            <div class="meta">
                                                <span class="dark-inverted">2019 Projects Digest</span>
                                                <span>
                                                  <span>4.7 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 9 months ago</span>
                                                </span>
                                            </div>
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger is-up">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-download"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Download</span>
                                                                <span>Download this file</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-cloud-upload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Upload</span>
                                                                <span>Upload a new version</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-lock"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Permissions</span>
                                                                <span>Manage file permissions</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-share"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Share</span>
                                                                <span>Share this file</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-trash-can-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Delete</span>
                                                                <span>Delete this file</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>

        <!-- Huro js -->
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/main.js" async=""></script>
        <script src="assets/js/components.js" async=""></script>
        <script src="assets/js/popover.js" async=""></script>
        <script src="assets/js/widgets.js" async=""></script>


        <!-- Additional Features -->
        <script src="assets/js/touch.js" async=""></script>

        <!-- Landing page js -->

        <!-- Dashboards js -->

















        <!-- Charts js -->



        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->





        <script src="assets/js/tile-grid.js" async=""></script>






        <script src="assets/js/syntax.js" async=""></script>
    </div>