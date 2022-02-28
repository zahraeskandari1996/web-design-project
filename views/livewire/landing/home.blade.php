@livewire('landing.layout.header')


<main class="overflow-hidden">
    <header
        class="header section text-contrast overlay overlay-primary alpha-7 parallax cover"
        style="background-image: url(img/landing/bg/sunrise.jpg)"
    >
        <div class="container-fluid pb-9">
            <div class="row text-center">
                <div class="col-12 col-lg-6 mx-auto">
                    <img class="w-20 h-20" src="img/landing/logo-light.png" alt="" />
                    <h1
                        class="text-contrast display-4 display-md-3 text-capitalize mt-5"
                        style="font-weight: 700"
                    >
                        ایده شو
                    </h1>
                    <p class="lead bold">
                        جایی برای مطرح و جهانی کردن ایده هایتان
                    </p>
                    <nav class="nav d-flex justify-content-center mb-5 mt-7">
                        <a
                            href="{{route('ideashow')}}"
                            class="btn btn-rounded btn-success text-contrast ms-2 ms-md-5"
                        >
                            ایده جدید
                            <i class="fas fa-long-arrow-alt-right ms-2"></i> </a
                        ><a
                            href="{{route('ideashow')}}"
                            class="btn btn-rounded btn-outline-light scrollto ms-md-4"
                            >مشاهده ایده شو ها</a
                        >
                        <a
                            href="#services"
                            class="btn btn-rounded btn-contrast mt-2 mt-md-0"
                            >قابلیت ها</a
                        >
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="section mt-n6" id="services">
        <div class="container pt-0">
            <div class="shadow bg-contrast p-4 rounded">
                <div class="row gap-y text-center">
                    <div class="col-12 col-md-4 py-4 px-5 d-flex flex-column">
                        <div class="icon-shape mb-4">
                            <img
                                src="img/landing/shps/bullets/1.svg"
                                class="shape shape-xxl icon-xxl"
                                alt=""
                            />
                            <div
                                class="rounded-circle bg-primary shadow-3 p-3 d-flex align-items-center justify-content-center shadow icon-xl center-xy"
                            >
                                <img
                                    src="img/landing/Growth.png"
                                    class="img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                        <h4 class="text-darker bold mt-3">پرورش ایده</h4>
                        <p class="mt-4">
                            ثبت ایده در زمینه‌ی موضوع رویداد ایده‌شو و تکمیل بوم
                            ناب یا کسب و کار به کمک منتورها.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 py-4 px-5 d-flex flex-column">
                        <div class="icon-shape mb-4">
                            <img
                                src="img/landing/shps/bullets/2.svg"
                                class="shape shape-xxl icon-xxl"
                                alt=""
                            />
                            <div
                                class="rounded-circle gradient gradient-blue-purple shadow-4 p-3 d-flex align-items-center justify-content-center shadow icon-xl center-xy"
                            >
                                <img
                                    src="img/landing/coin.svg"
                                    class="img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                        <h4 class="text-darker bold mt-3">سرمایه‌گذاری</h4>
                        <p class="mt-4">
                            فراهم کردن امکان دیده شدن ایده ها به افراد فعال در
                            زمینه های ایده‌پردازی و افراد سرمایه گذار.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 py-4 px-5 d-flex flex-column">
                        <div class="icon-shape mb-4">
                            <img
                                src="img/landing/shps/bullets/3.svg"
                                class="shape shape-xxl icon-xxl"
                                alt=""
                            />
                            <div
                                class="rounded-circle bg-info shadow-4 p-3 d-flex align-items-center justify-content-center shadow icon-xl center-xy"
                            >
                                <img
                                    src="img/landing/equality.svg"
                                    class="img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                        <h4 class="text-darker bold mt-3">داوری ایده‌ها</h4>
                        <p class="mt-4">
                            داوری ایده‌ها توسط افراد متخصص از طریق ویدئو کنفرانس
                            طی عملیات رای گیری.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section">
        <div class="shape-wrapper">
            <div class="shape shape-background shape-right"></div>
            <div
                class="shape shape-background top shape-left bg-info op-1"
            ></div>
        </div>
        <div class="container" id="aboutus">
            <div class="row align-items-centerpb-5">
                <div class="col-md-6">
                    <figure data-aos="fade-left">
                        <img
                            src="img/landing/shps/payments/register.svg"
                            class="img-responsive w-50"
                            alt=""
                        />
                        <img
                            src="img/landing/shps/payments/register-click.svg"
                            class="img-responsive absolute w-50"
                            alt=""
                            style="bottom: 10%; left: 125px"
                            data-aos="fade-up"
                        />
                    </figure>
                </div>
                <div class="col-md-6 text-end">
                    <div class="icon-xxl mb-4">
                        <div class="icon-shape">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow"
                            >
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path
                                            class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z"
                                        />
                                    </g>
                                </g>
                            </svg>
                            <i
                                class="icon fas fa-2x fa-user center-xy text-contrast"
                            ></i>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h2 class="bold text-capitalize">ثبت نام رایگان</h2>
                        <p class="lead text-muted">
                            ثبت نام و استفاده از تمامی امکانات وبسایت کاملا رایگان می باشد، همچنین
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                            نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد.
                        </p>
                    </div>
                    <a href="{{route('register')}}" class="btn btn-rounded btn-primary"
                        > ثبت نام</a
                    >
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6 order-md-2">
                    <figure data-aos="fade-right">
                        <img
                            src="img/landing/shps/payments/configure.svg"
                            class="img-responsive"
                            alt=""
                        />
                    </figure>
                </div>
                <div class="col-md-6 text-end">
                    <div class="icon-xxl mb-4">
                        <div class="icon-shape">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow"
                            >
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path
                                            class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z"
                                        />
                                    </g>
                                </g>
                            </svg>
                            <i
                                class="icon fas fa-2x fa-users-cog center-xy text-contrast"
                            ></i>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h2 class="bold text-capitalize">
                            مشاهده دیدگاه داوران
                        </h2>
                        <p class="lead text-muted">
                          افراد متخصص وظیفه داوری و کیفیت سنجی ایده ها را بر عهده دارند، همچنین
                          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                          صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                          و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                          لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                          کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                          باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                          آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                          نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                          علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                          ایجاد کرد.
                        </p>
                    </div>
                    <a href="javascript:;" class="btn btn-rounded btn-primary"
                        >بیشتر بدانید</a
                    >
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <figure data-aos="fade-left">
                        <img
                            src="img/landing/bg/online-payment.svg"
                            class="img-responsive"
                            alt=""
                        />
                    </figure>
                </div>
                <div class="col-md-6 text-end">
                    <div class="icon-xxl mb-4">
                        <div class="icon-shape">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 219.98 213.35"
                                class="shape shape-xxl drop-shadow"
                            >
                                <defs>
                                    <style>
                                        .cls-shape {
                                            fill: #1fa2ff;
                                        }
                                    </style>
                                </defs>
                                <title>shape-4</title>
                                <g id="layer_1" data-name="layer_1">
                                    <g id="OBJECTS">
                                        <path
                                            class="cls-shape"
                                            d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z"
                                        />
                                    </g>
                                </g>
                            </svg>
                            <i
                                class="icon fas fa-2x fa-user-shield center-xy text-contrast"
                            ></i>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h2 class="bold text-capitalize">
                            جذب سرمایه‌گذار
                        </h2>
                        <p class="lead text-muted">
                            با سرمایه گذاری و همراهی افراد با تجربه، ایده شما بلافاصله در مسیر پیاده سازی قرار می‌گیرد، همچنین
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                            نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد.
                        </p>
                    </div>
                    <a href="javascript:;" class="btn btn-rounded btn-primary"
                        >بیشتر بدانید</a
                    >
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->








</main>

@livewire('landing.layout.footer')

