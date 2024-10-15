<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="character_set">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$page['title']}}</title>
    <x-newlayout.cssv3 />
    <style>
        #formValidate .wizard>.content {
            min-height: 25em;
        }

        #example-vertical.wizard>.content {
            min-height: 24.5em;
        }

        /*to reduce the screen size max zoom 1*/
        /* body{
            zoom:0.9 !important;
            -moz-zoom:0.9 !important;
        }*/
        /* #sidebar ul.menu-categories.ps {
            height: calc(140vh - 282px) !important;
        } */

        /* .sidebar-wrapper {
            height: 150vh !important;
        } */

        /* .footer-wrapper{
            display: none;
            }*/
        /*end*/

        #sidebar ul.menu-categories li.menu:first-child a.dropdown-toggle {
            margin-top: 0px;
        }



        .select2-container {
            z-index: 10000 !important;
        }

        /*css for chosen start*/
        .chosen-container {
            width: 100% !important;
        }

        .chosen-single {
            height: 45px !important;
            background: #fff !important;
            padding-top: 10px !important;
            color: #000000ad !important;

        }

        .chosen-container-single .chosen-single div {
            top: 10px !important;
        }

        .chosen-choices {
            padding: 8px !important;
            border-radius: 6px !important;
            border-color: #d4dbe2 !important;

        }

        select.ql-header {
            display: none !important;
        }


        /*css for chosen end*/
        .table>thead>tr>th {
            text-transform: none !important;
        }

        .form-group {
            min-height: 76px !important;
        }

        a {
            text-decoration: none !important;
        }

        /*ul#accordionExample
    {
        overflow-y: scroll !important;
        scrollbar-width: thin !important;
        }*/

        .toastDiv {

            top: 50% !important;
            right: 1% !important;
            left: 40% !important;
        }

        .scrollDiv {
            overflow-y: scroll !important;
            scrollbar-width: thin !important;
        }


        .cke_dialog {
            z-index: 10055 !important;
        }


        .card .card-body ul {
            border-radius: 5px;
            padding: 6px 2px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #3b3f5c !important;
        }
    </style>
</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <x-newlayout.navbarv3 />
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay">--</div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <x-newlayout.sidebarv3 />
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                    @yield('content')
                </div>
            </div>
            <!--  BEGIN FOOTER  -->
            <x-newlayout.footerv3 />
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <x-newlayout.scriptsv3 :page="$page" />
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>