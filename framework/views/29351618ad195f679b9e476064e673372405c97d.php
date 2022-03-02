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
                            href="<?php echo e(route('loginView')); ?>"
                            class="text-primary bold"
                            >وارد شوید</a
                        >
                    </p>
                    <form
                        class="cozy"
                        wire:submit.prevent="submit"
                    >
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php else: ?> has-icon <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input
                                type="text"
                                wire:model.defer="name"
                                id="name"
                                name="name"
                                class="form-control form-control-rounded <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="نام و نام خانوادگی"
                            />
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><small class="form-text text-danger"><?php echo e($message); ?></small></span>
                            <?php else: ?>
                            <i class="icon fas fa-address-card"></i>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php else: ?> has-icon <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input
                                type="text"
                                wire:model.defer="username"
                                name="username"
                                id="username"
                                class="form-control form-control-rounded <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="نام کاربری"
                            />
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><small class="form-text text-danger"><?php echo e($message); ?></small></span>
                            <?php else: ?>
                            <i class="icon fas fa-user-plus"></i>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php else: ?> has-icon <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input
                                type="text"
                                wire:model.defer="email"
                                id="email"
                                name="email"
                                class="form-control form-control-rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="ایمیل"
                            />
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><small class="form-text text-danger"><?php echo e($message); ?></small></span>
                            <?php else: ?>
                            <i class="icon fas fa-envelope"></i>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php else: ?> has-icon <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input
                                type="password"
                                wire:model.defer="password"
                                name="password"
                                id="password"
                                class="form-control form-control-rounded <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="کلمه عبور"
                            />
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><small class="form-text text-danger"><?php echo e($message); ?></small></span>
                            <?php else: ?>
                            <i class="icon fas fa-lock"></i>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/landing/register.blade.php ENDPATH**/ ?>