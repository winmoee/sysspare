<x-app-layout>
    @vite(['resources/css/bootstrap.division.css', 'resources/js/app.js'])
    @vite(['resources/css/app.division.css', 'resources/js/app.js'])
    @vite(['resources/css/semantic.division.css', 'resources/js/app.js'])
    @vite(['resources/css/index.division.css', 'resources/js/app.js'])
    <!-- Ubuntu -->
    <style>
        body{
            background-color: rgba(255, 255, 255);
        }
        .tel {
            color: var(--primary-dark-pale);
            text-decoration: none;
            margin: 0 3px,
        }

        .tel:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }

        .same-height-img {
            height: 200px;
            object-fit: cover;
        }

        .show_all {
            color: var(--primary-dark-pale);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .show_all:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .middot {
            width: 3px;
            height: 3px;
            background-color: rgba(65, 69, 74, 0.75);
            border-radius: 50%;
        }

        /* New style for the backdrop */
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black */
            z-index: 999;
            /* Ensure it's above other content */
            display: none;
            /* Initially hidden */
        }
    </style>

    <!-- jQuery -->



    <div class="">
        <section class="subdivision-container">


        <div class="ui longer modal mx-auto w-md-75 h-75 mt-5 position-fixed overflow-hidden animate__animated animate__fadeIn"
        style="transform: translateX(-50%); left: 50%; display: none;" data-bs-backdrop="static" id="modal_body_container"></div>


        <div class="_ruler my-5">
            <div class="divisions-container my-5">
                <div id="yangon" class="header-container d-flex justify-content-between align-items-center">
                        <h3>
                            {{ __('messages.Yangon_Region') }}
                            {{-- Yangon Regionnn --}}
                        </h3>
                        <a href="#" class="show_all">
                            {{__('messages.Show_all')}}
                            {{-- Show all --}}
                        </a>
                </div>
                <br>
                    <hr class="mt-1 mb-4">
                    <div class="subdivision-wrapper row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ui special cards">
                        <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-pathein-branch6698a17cd1e01" onclick="showSubdivisionModal('seinn-yaung-so-coltd-pathein-branch6698a17cd1e01')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/yangon_showroom.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.,Ltd Pathein Branch_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Seinn_Yaung_So_Manufacturing_Bayintnaung')}}
                                                {{-- Seinn Yaung So Manufacturing Co., Ltd. (Bayintnaung) --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Yangon')}}
                                                    {{-- Bayintnaung --}}

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-pathein-warehouse6698a17d974ef" onclick="showSubdivisionModal('seinn-yaung-so-coltd-pathein-warehouse6698a17d974ef')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/yangon_showroom.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.,Ltd Pathein Branch_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Seinn_Yaung_So_Zone_5_Showroom')}}
                                                {{-- Seinn Yaung So Zone 5 Showroom --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Yangon')}}
                                                    {{-- Yangon--}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="yaankonsetpyinalokyaon-myseinyaawinsetmhuzon6698a17c74153" onclick="showSubdivisionModal('yaankonsetpyinalokyaon-myseinyaawinsetmhuzon6698a17c74153')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/yangon_showroom.jpg" class="img-fluid same-height-img w-100" alt="ရန်ကုန်စက်ပြင်အလုပ်ရုံ (မြစိမ်းရောင်စက်မှုဇုံ)_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{ __('messages.Yangon_workshop') }}
                                                {{-- ရန်ကုန်စက်ပြင်အလုပ်ရုံ (မြစိမ်းရောင်စက်မှုဇုံ) --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Yangon')}}
                                                    {{-- Yangon --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="divisions-container my-5">
                        <div id="pathein" class="header-container d-flex justify-content-between align-items-center">
                            <h3>
                                {{__('messages.Ayeyarwady_Region')}}
                                {{-- Ayeyarwady Region --}}
                            </h3>
                            <a href="#" class="show_all">
                                {{__('messages.Show_all')}}
                                {{-- Show all --}}
                            </a>
                        </div>
                        <br>
                        <hr class="mt-1 mb-4">

                        <div class="subdivision-wrapper row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ui special cards">
                            <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-pathein-branch6698a17cd1e01" onclick="showSubdivisionModal('seinn-yaung-so-coltd-pathein-branch6698a17cd1e01')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_branch_main.jpg" class="img-fluid same-height-img w-100" alt="{{__('messages.Seinn_Yaung_So_Manufacturing_Bayintnaung')}}_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Pathein_Branch')}}
                                                {{-- Seinn Yaung So Co.,Ltd Pathein Branch --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Pathein')}}
                                                    {{-- Pathein --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-pathein-warehouse6698a17d974ef" onclick="showSubdivisionModal('seinn-yaung-so-coltd-pathein-warehouse6698a17d974ef')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_warehouse_1.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.Ltd Pathein Warehouse_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Pathein_Warehouse')}}
                                                {{-- Seinn Yaung So Co.Ltd Pathein Warehouse --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Pathein')}}
                                                    {{-- Pathein --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-pathein-workshop6698a17ddc114" onclick="showSubdivisionModal('seinn-yaung-so-coltd-pathein-workshop6698a17ddc114')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_workshop_1.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.Ltd Pathein Workshop_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Pathein_Workshop')}}
                                                {{-- Seinn Yaung So Co.Ltd Pathein Workshop --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Pathein')}}
                                                    {{-- Pathein --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div id="hinthada" class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-hinthada-branch6698a17e39c56" onclick="showSubdivisionModal('seinn-yaung-so-coltd-hinthada-branch6698a17e39c56')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/hinthda_main.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.,Ltd Hinthada Branch_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Hinthada_Branch')}}
                                                {{-- Seinn Yaung So Co.,Ltd Hinthada Branch --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Hinthada')}}
                                                    {{-- Hinthada --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                    <div class="divisions-container my-5">
                    <div class="header-container d-flex justify-content-between align-items-center">
                        <h3>
                            {{__('messages.Sagaing_Region')}}
                            {{-- Sagaing Region --}}
                        </h3>
                        <a href="#" class="show_all">
                            {{__('messages.Show_all')}}
                            {{-- Show all --}}
                        </a>
                    </div>
                    <br>
                    <hr class="mt-1 mb-4">
                    <div class="subdivision-wrapper row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ui special cards">
                        <div id="shwebo" class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-shwebo-branch6698a17ec6571" onclick="showSubdivisionModal('seinn-yaung-so-coltd-shwebo-branch6698a17ec6571')">
                                                        {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/shwe_bo.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.,Ltd Shwebo Branch_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Shwebo_Branch')}}
                                                {{-- Seinn Yaung So Co.,Ltd Shwebo Branch --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                    {{__('messages.Shwebo')}}
                                                    {{-- Shwebo --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                    <div class="divisions-container my-5">
                        <div class="header-container d-flex justify-content-between align-items-center">
                            <h3>
                                {{__('messages.Southern_Shan_State')}}
                                {{-- Southern Shan State --}}
                            </h3>
                            <a href="#" class="show_all">
                                {{__('messages.Show_all')}}
                                {{-- Show all --}}
                            </a>
                        </div>
                        <br>
                        <hr class="mt-1 mb-4">
                        <div class="subdivision-wrapper row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ui special cards">
                            <div id="taunggyi" class="col px-3 mb-5">
                                    <div class="card w-100 border-0">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer transition hidden">
                                                <div class="content">
                                                    <div class="center">
                                                        <button class="ui inverted button" data-slug="seinn-yaung-so-coltd-taunggyi-branch6698a17f02040" onclick="showSubdivisionModal('seinn-yaung-so-coltd-taunggyi-branch6698a17f02040')">
                                                            {{__('messages.More_details')}}
                                                            {{-- More Details --}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/taunggyi.jpg" class="img-fluid same-height-img w-100" alt="Seinn Yaung So Co.,Ltd Taunggyi Branch_image">
                                        </div>
                                        <div class="content py-3">
                                            <h4 class="header">
                                                {{__('messages.Sys_Taunggyi_Branch')}}
                                                {{-- Seinn Yaung So Co.,Ltd Taunggyi Branch --}}
                                            </h4>
                                            <div class="meta">
                                                <span class="date mt-2 text-muted fs-6">
                                                {{__('messages.Taunggyi')}}
                                                    {{-- Taunggyi --}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </section>
        <div class="modal-backdrop" id="modalBackdrop" onclick="closeModal()" style="display: none;"></div>
        </div>

        <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $('#currentYear').text(new Date().getFullYear());
        </script>
        </div>



        <script>
            function showToast(toast, color) {
                Toastify({
                    text: toast,
                    className: "info",
                    position: "center",
                    style: {
                        background: color,
                    }
                }).showToast();
            }
        </script>






        <script>
            var lang = "en";
        </script>










        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"
        integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script>
            $('.special.cards .image').dimmer({
                on: 'hover'
            });

            var branchesArr = [{"id":1,
                "division_id":1,
                "eng_name":"{{__('messages.Yangon_workshop')}}",
                "mm_name":"{{__('messages.Yangon_workshop')}}",
                "slug":"yaankonsetpyinalokyaon-myseinyaawinsetmhuzon6698a17c74153",
                "type":"workshop",
                "branch_type":"head office",
                "head_office":"true",
                "google_address":"https:\/\/maps.app.goo.gl\/Cmyv7TS6Fh2YhA9t6",
                "eng_address":"{{__('messages.service_workshop_3')}}",
                "mm_address":"{{__('messages.service_workshop_3')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/yangon_showroom.jpg",

                "division":{"id":1,"state_id":1,
                "mm_name":"{{__('messages.Yangon')}}",
                "eng_name":"{{__('messages.Yangon')}}",
                "slug":"yangon",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/yangon_showroom.jpg"},
                "branch_phone":[
                {"id":1,"branch_id":1,"phone":"04222503"},
                {"id":2,"branch_id":1,"phone":"09429000422"},
                {"id":3,"branch_id":1,"phone":"09429717242"},
                {"id":4,"branch_id":1,"phone":"095199759"}]},

                {"id":2,
                "division_id":2,
                "eng_name":"{{__('messages.Sys_Pathein_Branch')}}",
                "mm_name":"{{__('messages.Sys_Pathein_Branch')}}",
                "slug":"seinn-yaung-so-coltd-pathein-branch6698a17cd1e01",
                "type":"showroom",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":"https:\/\/maps.app.goo.gl\/VWKLMcULMAAuVZ7TA",
                "eng_address":"{{__('messages.Pathein_Branch')}}",
                "mm_address":"{{__('messages.Pathein_Branch')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_branch_main.jpg",

                "division":{"id":2,"state_id":2,
                "mm_name":"{{__('messages.Pathein')}}",
                "eng_name":"{{__('messages.Pathein')}}",
                "slug":"pathein",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_branch_main.jpg"},
                "branch_phone":[
                {"id":5,"branch_id":2,"phone":"04222503"},
                {"id":6,"branch_id":2,"phone":"09429000422"},
                {"id":7,"branch_id":2,"phone":"09429717242"},
                {"id":8,"branch_id":2,"phone":"095199759"}]},

                {"id":3,
                "division_id":2,
                "eng_name":"{{__('messages.Sys_Pathein_Warehouse')}}",
                "mm_name":"{{__('messages.Sys_Pathein_Warehouse')}}",
                "slug":"seinn-yaung-so-coltd-pathein-warehouse6698a17d974ef",
                "type":"warehouse",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":"https:\/\/maps.app.goo.gl\/4LajXMU11ub7hUs47",
                "eng_address":"{{__('messages.Dig_industrial')}}",
                "mm_address":"{{__('messages.Dig_industrial')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_warehouse_1.jpg",
                "division":{"id":2,
                "state_id":2,
                "mm_name":"{{__('messages.Pathein')}}",
                "eng_name":"{{__('messages.Pathein')}}",
                "slug":"pathein",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_warehouse_1.jpg"},
                "branch_phone":[
                {"id":9,"branch_id":3,"phone":"04222503"},
                {"id":10,"branch_id":3,"phone":"09429000422"},
                {"id":11,"branch_id":3,"phone":"09429717242"},
                {"id":12,"branch_id":3,"phone":"095199759"}]},

                {"id":4,
                "division_id":2,
                "eng_name":"{{__('messages.Sys_Pathein_Workshop')}}",
                "mm_name":"{{__('messages.Sys_Pathein_Workshop')}}",
                "slug":"seinn-yaung-so-coltd-pathein-workshop6698a17ddc114",
                "type":"workshop",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":"https:\/\/maps.app.goo.gl\/4LajXMU11ub7hUs47",
                "eng_address":"{{__('messages.Dig_industrial')}}",
                "mm_address":"{{__('messages.Dig_industrial')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_workshop_1.jpg",
                "division":{"id":2,
                "state_id":2,
                "mm_name":"{{__('messages.Pathein')}}",
                "eng_name":"{{__('messages.Pathein')}}",
                "slug":"pathein",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/pathein_workshop_1.jpg"},
                "branch_phone":[
                {"id":13,"branch_id":4,"phone":"04222503"},
                {"id":14,"branch_id":4,"phone":"09429000422"},
                {"id":15,"branch_id":4,"phone":"09429717242"},
                {"id":16,"branch_id":4,"phone":"095199759"}]},

                {"id":5,
                "division_id":3,
                "eng_name":"{{__('messages.Sys_Hinthada_Branch')}}",
                "mm_name":"{{__('messages.Sys_Hinthada_Branch')}}",
                "slug":"seinn-yaung-so-coltd-hinthada-branch6698a17e39c56",
                "type":"showroom",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":null,
                "eng_address":"{{__('messages.Hinthada_Leltaw')}}",
                "mm_address":"{{__('messages.Hinthada_Leltaw')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/hinthda_main.jpg",
                "division":{"id":3,
                "state_id":2,
                "mm_name":"{{__('messages.Hinthada')}}",
                "eng_name":"{{__('messages.Hinthada')}}",
                "slug":"hinthada",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/hinthda_main.jpg"},
                "branch_phone":[
                {"id":17,"branch_id":5,"phone":"09455338282"},
                {"id":18,"branch_id":5,"phone":"09784636426"}]},

                {"id":6,
                "division_id":4,
                "eng_name":"{{__('messages.Sys_Shwebo_Branch')}}",
                "mm_name":"{{__('messages.Sys_Shwebo_Branch')}}",
                "slug":"seinn-yaung-so-coltd-shwebo-branch6698a17ec6571",
                "type":"showroom",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":null,
                "eng_address":"{{__('messages.Shwebo_Township')}}",
                "mm_address":"{{__('messages.Shwebo_Township')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/shwe_bo.jpg",
                "division":{"id":4,
                "state_id":5,
                "mm_name":"{{__('messages.Shwebo')}}",
                "eng_name":"{{__('messages.Shwebo')}}",
                "slug":"shwebo",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/shwe_bo.jpg"},
                "branch_phone":[
                {"id":19,"branch_id":6,"phone":"095038903"},
                {"id":20,"branch_id":6,"phone":"09763856556"}]},

                {"id":7,
                "division_id":5,
                "eng_name":"{{__('messages.Sys_Taunggyi_Branch')}}",
                "mm_name":"{{__('messages.Sys_Taunggyi_Branch')}}",
                "slug":"seinn-yaung-so-coltd-taunggyi-branch6698a17f02040",
                "type":"showroom",
                "branch_type":"subdivision",
                "head_office":"false",
                "google_address":null,
                "eng_address":"{{__('messages.Taunggyi_Township')}}",
                "mm_address":"{{__('messages.Taunggyi_Township')}}",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/taunggyi.jpg",
                "division":{"id":5,
                "state_id":6,
                "mm_name":"{{__('messages.Taunggyi')}}",
                "eng_name":"{{__('messages.Taunggyi')}}",
                "slug":"taunggyi",
                "image":"",
                "img_url":"https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/vendor/image/subdivision/branch/taunggyi.jpg"},
                "branch_phone":[
                {"id":21,"branch_id":7,"phone":"09798892668"},
                {"id":22,"branch_id":7,"phone":"09798892669"}]}];
            console.log(branchesArr);

            // Function
            function showSubdivisionModal(slug) {
                document.getElementById('modal_body_container').innerHTML = ``;
                document.getElementById('modalBackdrop').style.display = 'block';

                var branch = branchesArr.find(arr => {
                    return arr.slug === slug;
                });

                if (branch) {
                    document.getElementById('modal_body_container').innerHTML = `
                        <div class="header">
                            <button class="ms-auto d-block cursor-pointer btn text-center" onclick="closeModal()">
                                <i class="close icon w-100"></i>
                            </button>
                        </div>
                        <div class="scrolling image content">
                            <div class="ui medium image">
                                <img src="${branch.img_url}${branch.image}" class="img-fluid same-height-img w-100"
                                    alt="${branch.eng_name + '_image'}">
                            </div>
                            <div class="description">
                                <h4 class="ui header fs-4 mb-4">${branch.eng_name}</h4>
                                <div class="type-container mb-2 d-flex gap-2 fs-6">
                                    <span class="text-capitalize text-primary">${branch.type}</span>
                                    .
                                    <span class="text-capitalize text-primary">${branch.division.eng_name}</span>
                                </div>
                                <div class="ui box-container d-flex">
                                    <p>${branch.eng_address}</p>
                                    <div class="ui branch-phone-container"></div>
                                </div>
                                <a href="${branch.google_address}" class="text-primary mt-1 text-decoration-underline">
                                    <i class="fas fa-location-dot"></i>
                                    ${branch.eng_name}
                                </a>
                                <div class="ui my-3 d-flex">
                                    <span>${lang === 'en' ? 'Contact : ' : 'ဆက်သွယ်ရန် : '}</span>
                                    <div class="phone-wrapper" id="phone_wrapper"></div>
                                </div>
                            </div>
                        </div>
                    `;

                    document.getElementById("phone_wrapper").innerHTML = '';
                    branch.branch_phone.forEach(phone => {
                        document.getElementById("phone_wrapper").innerHTML += `
                            <a href="tel:${phone.phone}" class="ui branch_phone me-1 text-primary">${phone.phone}</a>, `;
                    });
                } else {
                    document.getElementById('modal_body_container').innerHTML = "Sorry, no branch available.";
                }

                document.querySelector('.ui.longer.modal').style.display = "block";
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                document.querySelector('.ui.longer.modal').style.display = "none";
                document.getElementById('modalBackdrop').style.display = 'none';
                document.getElementById('modal_body_container').innerHTML = ``;
                document.body.style.overflow = '';
            }
        </script>



</x-app-layout>
