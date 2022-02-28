<main>
    @if (Session::has('error'))
    <div
        class="alert alert-icon alert-danger"
        style="position: fixed; top: 0; left: 0; z-index: 99; width: 100%"
        role="alert"
    >
        <i class="icon fas fa-exclamation-circle"></i>
        {{ Session::get('error') }}
    </div>

    @endif
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
                        class="display-4 display-md-3 display-lg-2 text-contrast mt-5 mt-md-0"
                    >
                        به <span class="bold d-block">ایده‌شو</span> خوش آمدید
                    </h2>
                    <p class="lead text-contrast">ورود به حساب کاربری</p>
                    <hr class="mt-md-6 w-25" />
                    <div class="d-flex flex-column">
                        <p class="small bold text-contrast">یا وارد شدن با</p>
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
                <div class="login-form mt-5 mt-md-0 text-end">
                    {{-- <img
                        src="img/landing/logo.png"
                        class="logo img-responsive mb-4 mb-md-6"
                        alt=""
                    /> --}}
                    <h1 class="text-darker bold">ورود</h1>
                    <p class="text-secondary mt-0 mb-4 mb-md-6">
                        حساب کاربری ندارید؟
                        <a
                            href="{{ route('register') }}"
                            class="text-primary bold"
                            >ثبت نام کنید</a
                        >
                    </p>


                    <form class="form cozy" wire:submit.prevent="submit">
                        @csrf <!-- {{ csrf_field() }} -->
                        {{-- Login Fields --}}
                            <label class="form-label">نام کاربری</label>
                            <div class="form-group @error('username') @else has-icon @enderror">
                                <input
                                    wire:model.defer="username"
                                    type="text"
                                    id="username"
                                    name="username"
                                    class="form-control form-control-rounded @error('username') is-invalid @enderror"
                                    placeholder="نام کاربری"
                                />
                                @error('username')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-user"></i>
                            @enderror

                            </div>


                        <label class="form-label">کلمه عبور</label>
                        <div class="form-group @error('password') @else has-icon @enderror">
                            <input
                                wire:model.defer="password"
                                type="password"
                                id="password"
                                name="password"
                                class="form-control form-control-rounded  @error('password') is-invalid @enderror"
                                placeholder="کلمه عبور"
                            />
                            @error('password')
                                <span><small class="form-text text-danger">{{$message}}</small></span>
                            @else
                            <i class="icon fas fa-lock"></i>
                            @enderror
                        </div>

                        {{-- End Login Fields --}}

                        <div
                            class="form-group d-flex align-items-center justify-content-between"
                        >
                            <a href="forgot.html" class="text-dark small"
                                >بازیابی کلمه عبور</a
                            >

                            <div class="ajax-button">
                                <div
                                    class="fas fa-check btn-status text-success success"
                                ></div>
                                <div
                                    class="fas fa-times btn-status text-danger failed"
                                ></div>
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-rounded"
                                >
                                    ورود
                                    <i
                                        class="fas fa-long-arrow-alt-right ms-2"
                                    ></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
