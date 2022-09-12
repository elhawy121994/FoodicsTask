@extends('layouts.app')

@section('title')
لوحة التحكم
@endsection
@section('style')
<link href="{{asset('assets/css/pages/dashboard.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-one">
                <div class="widget-heading">
                    <h6 class="">لوحات الانذارات</h6>
                </div>
                <div class="w-chart">
                    <div class="w-chart-section">
                        <div class="w-detail position-relative">
                            <p class="w-title">عدد اللوحات المتصلة</p>
                            <p class="w-stats">423</p>
                        </div>
                        <div class="w-chart-render-one mt-3">
                            <a class="btn btn-warning btn-sm btn-rounded mb-2">عرض اللوحات المتصلة</a>
                        </div>
                    </div>

                    <div class="w-chart-section">
                        <div class="w-detail position-relative">
                            <p class="w-title">عدد اللوحات المعطلة</p>
                            <p class="w-stats">23</p>
                        </div>
                        <div class="w-chart-render-one mt-3">
                            <a class="btn btn-warning btn-sm btn-rounded mb-2">عرض اللوحات المعطلة</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-card-four">
                <div class="widget-content">
                    <div class="w-content">
                        <div class="w-info">
                            <p class="">عدد الإنذارات خلال الشهر الماضي</p>
                        </div>
                        <div class="">
                            <div class="w-icon">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="512" style="fill: #5c1ac3;" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <g>
                                                <path d="m256 55.539c5.523 0 10-4.478 10-10v-35.539c0-5.523-4.477-10-10-10s-10 4.477-10 10v35.539c0 5.523 4.477 10 10 10z" />
                                                <path d="m345.302 77.533c1.894 1.646 4.23 2.453 6.557 2.453 2.794 0 5.574-1.165 7.551-3.438l24.88-28.618c3.624-4.168 3.182-10.484-.986-14.108s-10.483-3.182-14.108.985l-24.88 28.618c-3.623 4.168-3.182 10.484.986 14.108z" />
                                                <path d="m422.621 159.005c1.692 0 3.407-.431 4.979-1.335l32.9-18.935c4.787-2.755 6.434-8.868 3.679-13.655-2.754-4.786-8.867-6.433-13.655-3.679l-32.9 18.935c-4.787 2.755-6.434 8.868-3.679 13.655 1.85 3.215 5.215 5.014 8.676 5.014z" />
                                                <path d="m490.639 235.933h-37.989c-5.523 0-10 4.478-10 10s4.477 10 10 10h37.989c5.523 0 10-4.478 10-10 0-5.523-4.477-10-10-10z" />
                                                <path d="m152.59 76.548c1.978 2.274 4.757 3.438 7.551 3.438 2.326 0 4.663-.808 6.557-2.453 4.168-3.624 4.609-9.94.986-14.108l-24.881-28.618c-3.624-4.168-9.94-4.607-14.108-.985-4.168 3.624-4.609 9.94-.986 14.108z" />
                                                <path d="m51.501 138.735 32.9 18.935c1.572.905 3.287 1.335 4.979 1.335 3.46 0 6.826-1.799 8.676-5.014 2.755-4.787 1.108-10.9-3.679-13.655l-32.9-18.935c-4.788-2.757-10.901-1.109-13.655 3.679-2.755 4.787-1.108 10.9 3.679 13.655z" />
                                                <path d="m69.35 245.933c0-5.522-4.477-10-10-10h-37.99c-5.523 0-10 4.478-10 10s4.477 10 10 10h37.99c5.523 0 10-4.478 10-10z" />
                                                <path d="m439.367 442.955v-12.588c0-19.342-14.183-35.432-32.695-38.418v-164.304c0-82.959-67.492-150.451-150.451-150.451h-.441c-82.959 0-150.451 67.492-150.451 150.451v164.305c-18.512 2.986-32.695 19.076-32.695 38.418v12.588c-11.992 3.608-20.752 14.752-20.752 27.903v31.141c0 5.522 4.477 10 10 10h148.912c5.523 0 10-4.478 10-10s-4.477-10-10-10h-138.912v-21.142c0-5.035 4.097-9.132 9.132-9.132h349.973c5.036 0 9.132 4.097 9.132 9.132v21.142h-138.913c-5.523 0-10 4.478-10 10s4.477 10 10 10h148.913c5.523 0 10-4.478 10-10v-31.142c0-13.151-8.761-24.295-20.752-27.903zm-314.038-215.31c0-71.931 58.52-130.451 130.451-130.451h.441c71.931 0 130.451 58.521 130.451 130.451v163.808h-101.959v-74.381c15.52-9.802 25.246-27.228 25.246-46.036 0-29.677-24.206-53.821-53.959-53.821s-53.959 24.145-53.959 53.821c0 18.808 9.727 36.234 25.246 46.036v74.381h-101.958zm116.21 74.474c-11.663-5.48-19.498-17.971-19.498-31.084 0-18.649 15.234-33.821 33.959-33.821s33.959 15.172 33.959 33.821c0 13.113-7.836 25.604-19.498 31.084-3.508 1.647-5.748 5.175-5.748 9.051v80.282h-17.426v-80.282c0-3.876-2.239-7.403-5.748-9.051zm-129.991 109.333h288.904c10.43 0 18.915 8.485 18.915 18.915v11.359h-326.733v-11.359c0-10.429 8.484-18.915 18.914-18.915z" />
                                                <path d="m265.05 498.18c-1.583-3.865-5.559-6.369-9.726-6.161-4.119.205-7.761 3.003-9.024 6.926-1.312 4.075.204 8.698 3.699 11.181 3.373 2.396 7.921 2.461 11.371.185 3.924-2.59 5.485-7.803 3.68-12.131z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <h3 class="value mt-3">
                            88 إنذار
                        </h3>
                        <a class="btn btn-secondary btn-sm btn-rounded mt-3 w-100">عرض سجل الإنذارات</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-account-invoice-two">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info m-0">
                            <h5 class="">تاريخ اليوم</h5>
                            <p class="inv-balance" style="font-size: x-large;line-height: 0;">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar4-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                </svg>
                            </p>
                        </div>
                        <div class="acc-action">
                            <h2>2020/10/11</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget-four">
                <div class="widget-heading">
                    <h5 class="">اخر تسجيل دخول</h5>
                </div>
                <div class="widget-content">
                    <ul class="list-group list-group-icons-meta">
                        <li class="list-group-item list-group-item-action p-2" style="border: none;">
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                                    </svg>
                                </div>
                                <div class="media-body">
                                    <small class="mg-b-0">الأربعاء 2020/20/01 12:23PM</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->





        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-activity-three">

                <div class="widget-heading">
                    <h5 class="">أخر تسجيل دخول</h5>
                </div>

                <div class="widget-content">

                    <div class="mt-container mx-auto" style="height: fit-content;">
                        <div class="timeline-line">

                            <div class="item-timeline timeline-new">
                                <div class="t-dot">
                                    <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg></div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>الأربعاء</h5>
                                        <span class="">27 Feb, 2020</span>
                                    </div>
                                    <p>12:37</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-new">
                                <div class="t-dot">
                                    <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg></div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>الأربعاء</h5>
                                        <span class="">27 Feb, 2020</span>
                                    </div>
                                    <p>12:37</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-new">
                                <div class="t-dot">
                                    <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg></div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>الأربعاء</h5>
                                        <span class="">27 Feb, 2020</span>
                                    </div>
                                    <p>12:37</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="row widget-statistic">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <p class="w-value">31.6K</p>
                            <h5 class="">عدد العملاء</h5>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers"></div>
                            </div>
                            <div class="row m-0 p-0 w-100 justify-content-center position-absolute" style="bottom: 0;">
                                <a class="btn btn-primary btn-sm btn-rounded mb-2">سجل العملاء</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="widget widget-one_hybrid widget-referral">
                        <div class="widget-heading">
                            <div class="w-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" style="fill:#e7515a;" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                            <p class="w-value">190</p>
                            <h5 class="">عقود العمل النشطة</h5>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers1"></div>
                            </div>
                            <div class="row m-0 p-0 w-100 justify-content-center position-absolute" style="bottom: 0;">
                                <a class="btn btn-danger btn-sm btn-rounded mb-2">سجل عقود العمل</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="widget widget-one_hybrid widget-engagement">
                        <div class="widget-heading">
                            <div class="w-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" style="fill:#8dbf42;" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                </svg>
                            </div>
                            <p class="w-value">18.2%</p>
                            <h5 class="">عقود الصيانة النشطة</h5>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers3"></div>
                            </div>
                            <div class="row m-0 p-0 w-100 justify-content-center position-absolute" style="bottom: 0;">
                                <a class="btn btn-success btn-sm btn-rounded mb-2">سجل عقود الصيانة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-five p-0">
                <div class="widget-content">
                    <div class="w-content">
                        <div class="">
                            <p class="task-left mb-2">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                            </p>
                            <h3>839</h3>
                            <p class="task-completed"><span>عدد المباني</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-five p-0">
                <div class="widget-content">
                    <div class="w-content">
                        <div class="">
                            <p class="task-left mb-2">
                            <svg id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="1em" style="fill: #1b55e2;" xmlns="http://www.w3.org/2000/svg"><g><path d="m241 0h30v72.033h-30z"/><path d="m305.354 34.676h72.033v30h-72.033z" transform="matrix(.372 -.928 .928 .372 168.35 348.115)"/><path d="m376.269 81.01h72.033v30h-72.033z" transform="matrix(.674 -.739 .739 .674 63.554 335.976)"/><path d="m155.63 13.66h30v72.033h-30z" transform="matrix(.928 -.372 .372 .928 -6.238 66.996)"/><path d="m84.714 59.994h30v72.033h-30z" transform="matrix(.739 -.674 .674 .739 -38.658 92.251)"/><path d="m120 364h272v36h-272z"/><path d="m399.167 430h-286.334c-15.324 7.889-25.833 23.861-25.833 42.25v39.75h338v-39.75c0-18.389-10.509-34.361-25.833-42.25z"/><path d="m392 256c0-74.99-61.009-136-136-136s-136 61.01-136 136v78h272zm-121 40.313h-30v-30h30zm0-50.667h-30v-81.333h30z"/></g></svg>
                            </p>
                            <h3>23</h3>
                            <p class="task-completed"><span>عدد الإنذارات المعلقة</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('script')

@endsection