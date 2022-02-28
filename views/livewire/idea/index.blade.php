<section>
    @section('breadcrumb')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="{{route('main')}}">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="" class="breadcrumb--active">ایده‌ها</a>
    </div>
@endsection
    <div class="intro-y flex items-center mt-8  w-full">
        <h2 class="text-lg font-medium ml-auto">ایده ها</h2>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative text-gray-700 dark:text-gray-300">
                    <input wire:model="search" type="search" class="form-control py-3 px-4 w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="جستجو مورد....">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                </div>

            </div>

            <div class="grid grid-cols-1 gap-5 mt-5 pt-5 border-t border-theme-5 lg:grid-cols-2">

                @foreach ($ideas as $idea)
                    @livewire('user.idea', ['idea'=>$idea])
                @endforeach

            </div>
            <div class="flex items-center justify-center mt-5 w-full">
                {{ $ideas->links('paginate') }}

            </div>

        </div>
        <!-- END: Item List -->

    </div>
    </section>
