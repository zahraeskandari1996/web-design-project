<!-- BEGIN: General Report -->
<div class="col-span-12 mt-8">
    @section('breadcrumb')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="{{route('home')}}">ایده‌شو</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="#" class="breadcrumb--active"> داشبورد</a>


    </div>
@endsection
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate ml-5">گزارش کلی</h2>
        <a
            href=""
            class="mr-auto flex items-center text-theme-1 dark:text-theme-10"
        >
            <i data-feather="refresh-ccw" class="w-4 h-4 ml-3"></i>به روزرسانی
            داده</a
        >
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i
                            data-feather="cloud"
                            class="report-box__icon text-theme-10"
                        ></i>
                        <div class="mr-auto">
                            <div
                                class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                title="33% بالاتر از ماه گذشته"
                            >
                                33%
                                <i
                                    data-feather="chevron-up"
                                    class="w-4 h-4 mr-0.5"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">
                        {{Auth::user()->ideas->count()}}
                    </div>
                    <div class="text-base text-gray-600 mt-1">ایده‌ها</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i
                            data-feather="message-square"
                            class="report-box__icon text-theme-11"
                        ></i>
                        <div class="mr-auto">
                            <div
                                class="report-box__indicator bg-theme-6 tooltip cursor-pointer"
                                title="2% کمتر از ماه گذشته"
                            >
                                2%
                                <i
                                    data-feather="chevron-down"
                                    class="w-4 h-4 mr-0.5"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">
                        {{ $count_comments }}
                    </div>
                    <div class="text-base text-gray-600 mt-1">
                        نظرات دریافتی
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i
                            data-feather="flag"
                            class="report-box__icon text-theme-12"
                        ></i>
                        <div class="mr-auto">
                            <div
                                class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                title="12% بالاتر از ماه گذشته"
                            >
                                12%
                                <i
                                    data-feather="chevron-up"
                                    class="w-4 h-4 mr-0.5"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">
                        {{Auth::user()->ideas->groupBy('ideashow_id')->count();}}
                    </div>
                    <div class="text-base text-gray-600 mt-1">ایده‌شوها</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i
                            data-feather="percent"
                            class="report-box__icon text-theme-9"
                        ></i>
                        <div class="mr-auto">
                            <div
                                class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                title="22% بالاتر از ماه گذشته"
                            >
                                22%
                                <i
                                    data-feather="chevron-up"
                                    class="w-4 h-4 mr-0.5"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">
                        {{ $sum_rating }}
                    </div>
                    <div class="text-base text-gray-600 mt-1">مجموع امتیاز</div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-2 mt-5 p-5 lg:grid-cols-2">
        <!-- BEGIN: Comments Item -->
        <div class="intro-y box">
            <div
                class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5"
            >
                <h2 class="font-medium text-base ml-auto">
                    آخرین نظرات دریافتی
                </h2>
            </div>
            <div id="single-item-slider" class="p-5">
                <div class="preview">
                    <div class="mx-6">
                        <div class="single-item">
                            @foreach ($comments as $comment )
                            <div>
                                <div class="flex">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit"
                                    >
                                        <img
                                            alt="{{$User::find($comment->user_id)->email}}"
                                            class="rounded-full"
                                            src="{{Storage::url($User::find($comment->user_id)->profile_photo_path)}}"
                                        />
                                    </div>
                                    <div class="mr-3 flex-1 px-2 pt-1">
                                        <div class="flex items-center">
                                            <a
                                                href=""
                                                class="font-medium"
                                                >{{$User::find($comment->user_id)->name}}</a
                                            >
                                        </div>
                                        <div
                                            class="text-gray-600 text-xs sm:text-sm w-full text-left"
                                        >
                                            {{$User::find($comment->user_id)->email}}
                                        </div>
                                        <div class="mt-2">
                                            {{$comment->comment}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Comments Item -->

        <!-- BEGIN: Ideashows -->
        <div class="intro-y box">
            <div
                class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5"
            >
                <h2 class="font-medium text-base ml-auto">آخرین رویدادها</h2>
            </div>
            <div id="center-mode-slider" class="p-5">
                <div class="preview">
                    <div class="mx-6">
                        <div class="center-mode">
                            @foreach ($ideashows as $ideashow)

                            <div
                                class="box rounded-md p-3 relative zoom-in h-32 px-2"
                            >
                                <img
                                    data-action="zoom"
                                    alt="{{ $ideashow->title }}"
                                    src="{{ Storage::url($ideashow->image) }}"/>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Ideashows -->
    </div>

</div>
<!-- END: General Report -->
