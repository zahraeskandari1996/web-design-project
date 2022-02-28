<main>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div
                class="col-md-6 col-lg-7 fullscreen-md d-flex justify-content-center align-items-center overlay overlay-primary alpha-8 image-background cover"
                style="
                    background-image: url(https://picsum.photos/1920/1200/?random&gravity=south);
                "
            >
                <div class="content text-end">
                    <h2
                        class="display-4 display-md-3 display-lg-2 text-contrast mt-4 mt-md-0"
                    >
                        شروع با <span class="bold d-block">ایده شو</span>
                    </h2>
                    <p class="lead text-contrast">
                        محلی برای پرورش و اجرای ایده ها
                    </p>
                    <hr class="mt-md-6 w-25" />
                    <div class="d-flex flex-column">
                        <p class="small bold text-contrast">
                            یا ثبت نام کنید با
                        </p>
                        <nav class="nav mb-4">
                            <a
                                class="btn btn-circle btn-outline-contrast ms-2"
                                href="#"
                                ><i class="fab fa-facebook-f"></i
                            ></a>
                            <a
                                class="btn btn-circle btn-outline-contrast ms-2"
                                href="#"
                                ><i class="fab fa-twitter"></i
                            ></a>
                            <a
                                class="btn btn-circle btn-outline-contrast"
                                href="#"
                                ><i class="fab fa-linkedin-in"></i
                            ></a>


                        </nav>
                    </div>
                </div>
            </div>


            <div class="col-md-5 col-lg-4 mx-auto">
                <div class="register-form mt-5 mt-md-0 text-end">
                    <img
                        src="img/landing/logo.png"
                        class="logo img-responsive w-10 h-10"
                        alt=""
                    />
                    <h1 class="text-darker bold">ثبت نام</h1>
                    <p class="text-secondary mb-4 mb-md-6">
                        قبلا ثبت نام کردید؟
                        <a
                            href="{{ route('loginView') }}"
                            class="text-primary bold"
                            >وارد شوید</a
                        >
                    </p>
                    <form
                        class="cozy"
                        wire:submit.prevent="submit"
                    >
                        @csrf
                        <div class="form-group @error('name') @else has-icon @enderror">
                            <input
                                type="text"
                                wire:model.defer="name"
                                id="name"
                                name="name"
                                class="form-control form-control-rounded @error('name') is-invalid @enderror"
                                placeholder="نام و نام خانوادگی"
                            />
                            @error('name')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-address-card"></i>
                            @enderror
                        </div>

                        <div class="form-group @error('username') @else has-icon @enderror">
                            <input
                                type="text"
                                wire:model.defer="username"
                                name="username"
                                id="username"
                                class="form-control form-control-rounded @error('username') is-invalid @enderror"
                                placeholder="نام کاربری"
                            />
                            @error('username')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-user-plus"></i>
                            @enderror
                        </div>

                        <div class="form-group @error('email') @else has-icon @enderror">
                            <input
                                type="text"
                                wire:model.defer="email"
                                id="email"
                                name="email"
                                class="form-control form-control-rounded @error('email') is-invalid @enderror"
                                placeholder="ایمیل"
                            />
                            @error('email')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-envelope"></i>
                            @enderror
                        </div>

                        <div class="form-group @error('password') @else has-icon @enderror">
                            <input
                                type="password"
                                wire:model.defer="password"
                                name="password"
                                id="password"
                                class="form-control form-control-rounded @error('password') is-invalid @enderror"
                                placeholder="کلمه عبور"
                            />
                            @error('password')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-lock"></i>
                            @enderror
                        </div>


                        <div
                            class="form-group d-flex align-items-center justify-content-between"
                        >
                            <button
                                type="submit"
                                class="btn btn-primary btn-rounded ms-auto"
                            >
                                ثبت نام
                                <i class="fas fa-long-arrow-alt-right ms-2"></i>
                            </button>
                        </div>
                    </form>


                    <div class="mt-5">
                        <p class="small text-secondary">
                            با تکمیل ثبت نام، شما با
                            <a href="#">قوانین و مقررات</a> موافقت
                            می‌کنید
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
