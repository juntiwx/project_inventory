<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 Pro Premium Bootstrap Admin Dashboard Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/images/icon.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0 tw-sticky tw-top-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start me-lg-3">
                    <div>
                        <a class="navbar-brand brand-logo" href="horizontal-default-light/index.html">
                            {{--<img src="{{Vite::asset('resources/images/logo.png')}}" alt="logo"/>--}}
                        </a>
                        <a class="navbar-brand brand-logo-mini" href="horizontal-default-light/index.html">
                            <img src="../images/logo-mini-reverse.svg" alt="logo"/>
                        </a>
                    </div>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown  d-none d-lg-flex">
                            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split"
                               id="selectDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select
                                Category </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                                 aria-labelledby="selectDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">Select category</p>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap
                                            Bundle </p>
                                        <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique
                                            dashboards</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Angular
                                            Bundle</p>
                                        <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular
                                            projects</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                                        <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">React
                                            Bundle</p>
                                        <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin
                                            Dashboard</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item  d-none d-lg-flex">
                            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                  <span class="input-group-addon input-group-prepend border-right">
                    <span class="icon-calendar input-group-text calendar-icon"></span>
                  </span>
                                <input type="text" class="form-control">
                            </div>
                        </li>
                        <li class="nav-item  d-none d-lg-flex">
                            <form class="search-form" action="#">
                                <i class="icon-search"></i>
                                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator" id="notificationDropdown" href="#"
                               data-bs-toggle="dropdown">
                                <i class="icon-mail icon-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                                 aria-labelledby="notificationDropdown">
                                <a class="dropdown-item py-3 border-bottom">
                                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                                    <span class="badge badge-pill badge-primary float-right">View all</span>
                                </a>
                                <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-alert m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                        <p class="fw-light small-text mb-0"> Just now </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                        <p class="fw-light small-text mb-0"> Private message </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-airballoon m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                        <p class="fw-light small-text mb-0"> 2 days ago </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="icon-bell"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                                 aria-labelledby="messageDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                                    <span class="badge badge-pill badge-primary float-right">View all</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Marian
                                            Garner </p>
                                        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Travis
                                            Jenkins </p>
                                        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown  d-none d-lg-flex user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img class="img-xs rounded-circle" src="../images/faces/face8.jpg"
                                     alt="Profile image"> </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                 aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="../images/faces/face8.jpg"
                                         alt="Profile image">
                                    <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                                    <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                                </div>
                                <a class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                                    Profile <span class="badge badge-pill badge-danger">1</span></a>
                                <a class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                                    Messages</a>
                                <a class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                                    Activity</a>
                                <a class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                                    FAQ</a>
                                <a class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                        <span class="ti-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="horizontal-default-light/index.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horizontal-default-light/pages/widgets/widgets.html">
                            <i class="icon-cog menu-icon"></i>
                            <span class="menu-title">Widgets</span>
                        </a>
                    </li>
                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link">
                            <i class="icon-layoutmenu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <div class="col-group-wrapper row">
                                <div class="col-group col-md-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="category-heading">Basic Elements</p>
                                            <div class="submenu-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/accordions.html">Accordion</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/buttons.html">Buttons</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/badges.html">Badges</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/breadcrumbs.html">Breadcrumbs</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/dropdowns.html">Dropdown</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/progress.html">Progress
                                                                    bar</a></li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/pagination.html">Pagination</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/tabs.html">Tabs</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/typography.html">Typography</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/tooltips.html">Tooltip</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-group col-md-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="category-heading">Advanced Elements</p>
                                            <div class="submenu-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/dragula.html">Dragula</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/carousel.html">Carousel</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/clipboard.html">Clipboard</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/context-menu.html">Context
                                                                    Menu</a></li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/loaders.html">Loader</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/slider.html">Slider</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/popups.html">Popup</a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="horizontal-default-light/pages/ui-features/notifications.html">Notification</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-group col-md-4">
                                    <p class="category-heading">Icons</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/icons/flag-icons.html">Flag
                                                Icons</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/icons/mdi.html">Mdi
                                                icons</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/icons/font-awesome.html">Font
                                                Awesome</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/icons/simple-line-icon.html">Simple
                                                Line
                                                Icons</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/icons/themify.html">Themify
                                                Icons</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Forms</span>
                            <i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/basic_elements.html">Basic
                                        Elements</a></li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/advanced_elements.html">Advanced
                                        Elements</a></li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/validation.html">Validation</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/wizard.html">Wizard</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/text_editor.html">Text
                                        Editor</a></li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/forms/code_editor.html">Code
                                        Editor</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Data</span>
                            <i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <div class="col-group-wrapper row">
                                <div class="col-group col-md-6">
                                    <p class="category-heading">Charts</p>
                                    <div class="submenu-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/chartjs.html">Chart
                                                            Js</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/morris.html">Morris</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/flot-chart.html">Flot</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/google-charts.html">Google
                                                            Chart</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/sparkline.html">Sparkline</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/c3.html">C3
                                                            Chart</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/chartist.html">Chartist</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="horizontal-default-light/pages/charts/justGage.html">JustGage</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-group col-md-3">
                                    <p class="category-heading">Table</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/tables/basic-table.html">Basic
                                                Table</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/tables/data-table.html">Data
                                                Table</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/tables/js-grid.html">Js-grid</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/tables/sortable-table.html">Sortable
                                                Table</a></li>
                                    </ul>
                                </div>
                                <div class="col-group col-md-3">
                                    <p class="category-heading">Maps</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/maps/mapael.html">Mapael</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/maps/vector-map.html">Vector
                                                Map</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/maps/google-maps.html">Google
                                                Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Sample Pages</span>
                            <i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <div class="col-group-wrapper row">
                                <div class="col-group col-md-3">
                                    <p class="category-heading">User Pages</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/login.html">Login</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/login-2.html">Login
                                                2</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/register.html">Register</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/register-2.html">Register
                                                2</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/lock-screen.html">Lockscreen</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-group col-md-3">
                                    <p class="category-heading">Error Pages</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/error-400.html">400</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/error-404.html">404</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/error-500.html">500</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/error-505.html">505</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-group col-md-3">
                                    <p class="category-heading">E-commerce</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/pricing-table.html">Pricing
                                                Table</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/orders.html">Orders</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-group col-md-3">
                                    <p class="category-heading">General</p>
                                    <ul class="submenu-item">
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/search-results.html">Search
                                                Results</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/profile.html">Profile</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/news-grid.html">News
                                                grid</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/portfolio.html">Portfolio</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="horizontal-default-light/pages/samples/faq.html">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-ban menu-icon"></i>
                            <span class="menu-title">Apps</span>
                            <i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/apps/email.html">Email</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/apps/calendar.html">Calendar</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/apps/todo.html">Todo
                                        List</a></li>
                                <li class="nav-item"><a class="nav-link"
                                                        href="horizontal-default-light/pages/apps/gallery.html">Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="https://bootstrapdash.com/demo/star-admin2-pro/docs/documentation.html"
                           class="nav-link">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Documentation</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                               href="#overview" role="tab" aria-controls="overview"
                                               aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences"
                                               role="tab" aria-selected="false">Audiences</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                               href="#demographics" role="tab" aria-selected="false">Demographics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more"
                                               role="tab" aria-selected="false">More</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="btn-wrapper">
                                            <a href="#" class="btn btn-otline-dark"><i class="icon-share"></i> Share</a>
                                            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                                Print</a>
                                            <a href="#" class="btn btn-primary text-white me-0"><i
                                                    class="icon-download"></i> Export</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                         aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-primary">
                                                                    <i class="mdi mdi-chart-line"></i>
                                                                </div>
                                                                <h6>Asset all type</h6>
                                                                <p>{{ round($computers['all_inventory']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-primary">{{$computers['all_inventory']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-success">
                                                                    <i class="mdi mdi-arrow-down-bold-hexagon-outline"></i>
                                                                </div>
                                                                <h6>PC Set</h6>
                                                                <p>{{ round($computers['pc']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-success">{{ $computers['pc'] }} </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-info">
                                                                    <i class="mdi mdi-account-outline"></i>
                                                                </div>
                                                                <h6>Notebook</h6>
                                                                <p>{{ round($computers['notebooks']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-info">{{$computers['notebooks']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-danger">
                                                                    <i class="mdi mdi-cube-outline"></i>
                                                                </div>
                                                                <h6>Monitors</h6>
                                                                <p>{{ round($computers['monitors']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-danger">{{ $computers['monitors'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-success">
                                                                    <i class="mdi mdi-wallet"></i>
                                                                </div>
                                                                <h6>All in one</h6>
                                                                <p>{{ round($computers['all_in_one']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-success">{{$computers['all_in_one']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-gradient">
                                                            <div class="card-body">
                                                                <div class="circle-shadow-warning">
                                                                    <i class="mdi mdi-wallet"></i>
                                                                </div>
                                                                <h6>Workstations</h6>
                                                                <p>{{ round($computers['workstations']*100/$computers['all_inventory'],2) }}
                                                                    %</p>
                                                                <h5 class="text-warning">{{$computers['workstations']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">ประเภทคอมพิวเตอร์ แยกอาคาร</h4>
                                                        <canvas id="barChart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">จำนวนคอมพิวเตอร์ แยกประเภท</h4>
                                                        <canvas id="donutChart"></canvas>
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
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script type="text/javascript"
        src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
<script>
    let pc_muic_building = {!! json_encode($computer_with_location['pc_muic_building']) !!};
    let notebooks_muic_building = {!! json_encode($computer_with_location['notebooks_muic_building']) !!};
    let monitors_muic_building = {!! json_encode($computer_with_location['monitors_muic_building']) !!};
    let all_in_one_muic_building = {!! json_encode($computer_with_location['all_in_one_muic_building']) !!};
    let workstations_muic_building = {!! json_encode($computer_with_location['workstations_muic_building']) !!};

    let pc_aditayathorn_building = {!! json_encode($computer_with_location['pc_aditayathorn_building']) !!};
    let notebooks_aditayathorn_building = {!! json_encode($computer_with_location['notebooks_aditayathorn_building']) !!};
    let monitors_aditayathorn_building = {!! json_encode($computer_with_location['monitors_aditayathorn_building']) !!};
    let all_in_one_aditayathorn_building = {!! json_encode($computer_with_location['all_in_one_aditayathorn_building']) !!};
    let workstations_aditayathorn_building = {!! json_encode($computer_with_location['workstations_aditayathorn_building']) !!};

    let pc = {!! json_encode($computers['pc']) !!};
    let notebooks = {!! json_encode($computers['notebooks']) !!};
    let monitors = {!! json_encode($computers['monitors']) !!};
    let all_in_one = {!! json_encode($computers['all_in_one']) !!};
    let workstations = {!! json_encode($computers['workstations']) !!};

    let barData = {
        labels: ["PC Set", "Notebook", "Monitor", "All in one", "Workstation"],
        datasets: [
            {
                label: "อาคารวิทยาลัยนานาชาติ",
                data: [pc_muic_building, notebooks_muic_building, monitors_muic_building, all_in_one_muic_building, workstations_muic_building],
                backgroundColor: [
                    "rgba(10,20,30,0.3)",
                    "rgba(10,20,30,0.3)",
                    "rgba(10,20,30,0.3)",
                    "rgba(10,20,30,0.3)",
                    "rgba(10,20,30,0.3)"
                ],
                borderColor: [
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)"
                ],
                borderWidth: 1
            },
            {
                label: "อาคารวิทยาลัยนานาชาติ",
                data: [pc_aditayathorn_building, notebooks_aditayathorn_building, monitors_aditayathorn_building, all_in_one_aditayathorn_building, workstations_aditayathorn_building],
                backgroundColor: [
                    "rgba(50,150,200,0.3)",
                    "rgba(50,150,200,0.3)",
                    "rgba(50,150,200,0.3)",
                    "rgba(50,150,200,0.3)",
                    "rgba(50,150,200,0.3)"
                ],
                borderColor: [
                    "rgba(50,150,200,1)",
                    "rgba(50,150,200,1)",
                    "rgba(50,150,200,1)",
                    "rgba(50,150,200,1)",
                    "rgba(50,150,200,1)"
                ],
                borderWidth: 1
            }
        ]
    };
    const configBarChart = {
        type: 'bar',
        data: barData,
        options: {
            layout: {
                padding: {
                    top: 15
                }
            },
            plugins: {
                labels: {
                    render: (context) => {
                        // console.log(context.dataset.data)
                        const sum = context.dataset.data.reduce((total, datapoint) => {
                            return total + datapoint;
                        })
                        return `${context.value} of a total`;
                    },
                    position: 'outside',
                    textMargin: 6
                },
                legend: {
                    position: 'bottom',
                    padding: {
                        top: 15
                    }
                },
            }
        }
    }
    const barChart = new Chart(
        document.getElementById('barChart'),
        configBarChart
    );

    let donutData = {
        datasets: [{
            data: [pc, notebooks, monitors, all_in_one, workstations],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: ["PC Set", "Notebook","Monitors", "All in one","Workstations"]
    };

    const configDonutChart = {
        type: 'doughnut',
        data: donutData,
        options: {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 10,
                    bottom: 0
                }
            },
            plugins: {
                labels: {
                    render: (context) => {
                        // console.log(context.dataset.data)
                        const sum = context.dataset.data.reduce((total, datapoint) => {
                            return total + datapoint;
                        })
                        return `${context.value} item`;
                    },
                    position: 'outside',
                    textMargin: 6
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        pointStyle: 'circle',
                        usePointStyle: true
                    }
                },
            }
        },
        plugins: [{
            id: "increase-legend-spacing",
            afterFit: function () {
                this.height = this.height + 50;
            },
        }]
    }
    const donutChart = new Chart(
        document.getElementById('donutChart'),
        configDonutChart
    );


</script>
</body>

</html>
