<nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
    <div class="container">
        <ul class="st-nav-menu nav navbar-nav">
            <li class="st-nav-section nav-item">
                <a href="#main" class="navbar-brand"
                    ><img
                        src="img/landing/logo.png"
                        alt="Dashcore"
                        class="logo logo-sticky d-inline-block d-md-none" />
                    <img
                        src="img/landing/logo-light.png"
                        alt="Dashcore"
                        class="logo d-none d-md-inline-block"
                /></a>
            </li>
            <li class="st-nav-section st-nav-primary nav-item">
                <a class="st-root-link nav-link" href="<?php echo e(route('home')); ?>">صفحه اصلی</a>
                <a class="st-root-link nav-link" href="<?php echo e(route('ideashow')); ?>">ایده‌شوها</a>
                <a class="st-root-link nav-link" href="<?php echo e(route('idea')); ?>">ایده‌ها</a>
                <a class="st-root-link nav-link"href="#aboutus">درباره‌ما</a>
            </li>
            <li class="st-nav-section st-nav-secondary nav-item">
                <a
                    class="btn btn-rounded btn-outline ms-3 px-3"
                    href="<?php echo e(route('loginView')); ?>"
                    ><i
                        class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"
                    ></i>
                    <span class="d-md-none d-lg-inline">ورود</span> </a
                ><a
                    class="btn btn-rounded btn-solid px-3"
                    href="<?php echo e(route('register')); ?>"
                    ><i
                        class="fas fa-user-plus d-none d-md-inline me-md-0 me-lg-2"
                    ></i>
                    <span class="d-md-none d-lg-inline">ثبت نام</span></a
                >
            </li>
            <!-- Mobile Navigation -->
            <li class="st-nav-section st-nav-mobile nav-item">
                <button class="st-root-link navbar-toggler" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="st-popup">
                    <div class="st-popup-container">
                        <a class="st-popup-close-button">بستن</a>
                        <div class="st-dropdown-content-group">
                            <h4 class="text-uppercase regular">صفحات</h4>
                            <a class="regular text-warning" href="#"
                                ><i class="fas fa-home ms-2"></i>
                                صفحه اصلی </a
                            >
                            <a class="regular text-primary" href="<?php echo e(route('ideashow')); ?>"
                                ><i class="fas fa-calendar-alt ms-2"></i> ایده‌شو‌ها </a
                            ><a class="regular text-success" href="<?php echo e(route('idea')); ?>"
                                ><i class="fas fa-lightbulb ms-2"></i>
                                ایده‌ها </a
                            ><a class="regular text-info" href="#"
                                ><i class="far fa-question-circle ms-2"></i>
                                درباره‌ما</a
                            >
                        </div>

                        <div class="st-dropdown-content-group bg-light b-t">
                            <a href="<?php echo e(route('loginView')); ?>"
                                >ورود <i class="fas fa-arrow-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="st-dropdown-root">
        <div class="st-dropdown-bg">
            <div class="st-alt-bg"></div>
        </div>
        <div class="st-dropdown-arrow"></div>
        <div class="st-dropdown-container">
            <div class="st-dropdown-section" data-dropdown="blocks">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="row">
                            <div class="col ms-4">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/call-to-action.html"
                                    >Call to actions</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/contact.html"
                                    >Contact</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/counter.html"
                                    >Counters</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/faqs.html"
                                    >FAQs</a
                                >
                            </div>
                            <div class="col ms-4">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/footer.html"
                                    >Footers</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/form.html"
                                    >Forms</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/navbar.html"
                                    >Navbar</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/navigation.html"
                                    >Navigation</a
                                >
                            </div>
                            <div class="col">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/pricing.html"
                                    >Pricing</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/slider.html"
                                    >Sliders</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/team.html"
                                    >Team</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blocks/testimonial.html"
                                    >Testimonials</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="st-dropdown-content-group">
                        <h3 class="link-title">
                            <i class="fas fa-long-arrow-alt-right icon"></i>
                            Coming soon
                        </h3>
                        <div class="ms-5">
                            <span class="dropdown-item text-secondary"
                                >Dividers </span
                            ><span class="dropdown-item text-secondary"
                                >Gallery </span
                            ><span class="dropdown-item text-secondary"
                                >Screenshots</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="pages">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="mb-4">
                            <h3 class="text-darker light text-nowrap">
                                <span class="bold regular">Useful pages</span>
                                you'll need
                            </h3>
                            <p class="text-secondary mt-0">
                                Get a complete design stack
                            </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="ms-4">
                                    <li>
                                        <h4 class="text-uppercase regular">
                                            Error
                                        </h4>
                                    </li>
                                    <li>
                                        <a target="_blank" href="403.html"
                                            >403 Error</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="404.html"
                                            >404 Error</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="500.html"
                                            >500 Error</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="ms-4">
                                    <li>
                                        <h4 class="text-uppercase regular">
                                            User
                                        </h4>
                                    </li>
                                    <li>
                                        <a target="_blank" href="login.html"
                                            >Login</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="register.html"
                                            >Register</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="forgot.html"
                                            >Forgot</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>
                                        <h4 class="text-uppercase regular">
                                            Extra
                                        </h4>
                                    </li>
                                    <li>
                                        <a target="_blank" href="pricing.html"
                                            >Pricing</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="terms.html"
                                            >Terms</a
                                        >
                                    </li>
                                    <li>
                                        <a target="_blank" href="faqs.html"
                                            >FAQ</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="st-dropdown-content-group">
                        <a class="dropdown-item bold" href="about.html"
                            ><i class="far fa-building icon"></i> About </a
                        ><a class="dropdown-item bold" href="contact.html"
                            ><i class="far fa-envelope icon"></i> Contact </a
                        ><a class="dropdown-item bold" href="pricing.html"
                            ><i class="fas fa-hand-holding-usd icon"></i>
                            Pricing</a
                        >
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="components">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <a
                            class="dropdown-item"
                            target="_blank"
                            href="components/color.html"
                        >
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    class="bg-dark text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fas fa-palette"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">Colors</h3>
                                    <p class="m-0 text-secondary">
                                        Get to know DashCore color options
                                    </p>
                                </div>
                            </div> </a
                        ><a
                            class="dropdown-item"
                            target="_blank"
                            href="components/form-controls.html"
                        >
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    class="bg-secondary text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fab fa-wpforms"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">Forms</h3>
                                    <p class="m-0 text-secondary">
                                        All forms elements
                                    </p>
                                </div>
                            </div> </a
                        ><a
                            class="dropdown-item"
                            target="_blank"
                            href="components/accordion.html"
                        >
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    class="bg-success text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">Accordion</h3>
                                    <p class="m-0 text-secondary">
                                        Useful accordion elements
                                    </p>
                                </div>
                            </div> </a
                        ><a
                            class="dropdown-item"
                            target="_blank"
                            href="components/cookie-law.html"
                        >
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    class="bg-info text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">CookieLaw</h3>
                                    <p class="m-0 text-secondary">
                                        Comply with the hideous EU Cookie Law
                                    </p>
                                </div>
                            </div>
                        </a>
                        <h4 class="text-uppercase regular">
                            Huge components list
                        </h4>
                        <div class="row">
                            <div class="col ms-4">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/alert.html"
                                    >Alerts</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/badge.html"
                                    >Badges</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/button.html"
                                    >Buttons</a
                                >
                            </div>
                            <div class="col ms-4">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/overlay.html"
                                    >Overlay</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/progress.html"
                                    >Progress</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/lightbox.html"
                                    >Lightbox</a
                                >
                            </div>
                            <div class="col ms-4">
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/tab.html"
                                    >Tabs</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/tables.html"
                                    >Tables</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="components/typography.html"
                                    >Typography</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="st-dropdown-content-group">
                        <a
                            class="dropdown-item"
                            target="_blank"
                            href="components/wizard.html"
                            >Wizard </a
                        ><span
                            class="dropdown-item d-flex align-items-center text-muted"
                            >Timeline <i class="fas fa-ban me-auto"></i> </span
                        ><span
                            class="dropdown-item d-flex align-items-center text-muted"
                            >Process <i class="fas fa-ban me-auto"></i
                        ></span>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="blog">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="row">
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">
                                    Full width
                                </h4>
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-post.html"
                                    >Single post</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-grid.html"
                                    >Posts Grid</a
                                >
                            </div>
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">
                                    Sidebar left
                                </h4>
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-post-sidebar-left.html"
                                    >Single post</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-grid-sidebar-left.html"
                                    >Posts Grid</a
                                >
                            </div>
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">
                                    Sidebar right
                                </h4>
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-post-sidebar-right.html"
                                    >Single post</a
                                >
                                <a
                                    class="dropdown-item"
                                    target="_blank"
                                    href="blog/blog-grid-sidebar-right.html"
                                    >Posts Grid</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="shop">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <a
                            class="dropdown-item mb-4"
                            target="_blank"
                            href="shop/"
                        >
                            <div class="d-flex align-items-center">
                                <div
                                    class="bg-success text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fas fa-shopping-basket"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">Home</h3>
                                    <p class="m-0 text-secondary">
                                        Online store home with an outstanding UX
                                    </p>
                                </div>
                            </div> </a
                        ><a
                            class="dropdown-item"
                            target="_blank"
                            href="shop/cart.html"
                        >
                            <div class="d-flex align-items-center">
                                <div
                                    class="bg-info text-contrast icon-md center-flex rounded-circle ms-2"
                                >
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">Cart</h3>
                                    <p class="m-0 text-secondary">
                                        Online store shopping cart
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="st-dropdown-content-group">
                        <h3 class="link-title">
                            <i class="fas fa-money-check-alt icon"></i> Checkout
                        </h3>
                        <div class="ms-5">
                            <a
                                class="dropdown-item text-secondary"
                                target="_blank"
                                href="shop/checkout-customer.html"
                                >Customer
                                <i class="fas fa-angle-right ms-2"></i> </a
                            ><a
                                class="dropdown-item text-secondary"
                                target="_blank"
                                href="shop/checkout-shipping.html"
                                >Shipping Information
                                <i class="fas fa-angle-right ms-2"></i> </a
                            ><a
                                class="dropdown-item text-secondary"
                                target="_blank"
                                href="shop/checkout-payment.html"
                                >Payment Methods
                                <i class="fas fa-angle-right ms-2"></i> </a
                            ><a
                                class="dropdown-item text-secondary"
                                target="_blank"
                                href="shop/checkout-confirmation.html"
                                >Order Review
                                <i class="fas fa-angle-right ms-2"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/landing/layout/header.blade.php ENDPATH**/ ?>