<section>
    @section('breadcrumb')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="{{route('main')}}">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="{{route('ideashow')}}" class="breadcrumb--active"> ایده‌شو‌ها</a>


    </div>
@endsection
<div class="intro-y flex items-center mt-8  w-full">
    <h2 class="text-lg font-medium ml-auto">ایده‌شو ها</h2>
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

        <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">

            @foreach ($ideashows as $ideashow)
                <a href="{{route('ideashow-show', ['ideashow' => $ideashow->id])}}" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                    <div class="box rounded-md p-3 relative zoom-in">
                        <div class="flex-none pos-image relative block">
                            <div class="pos-image__preview image-fit">
                                <img alt="{{ $ideashow->title }}" src={{ Storage::url($ideashow->image) }}>
                            </div>
                        </div>
                        <div class="block font-medium text-center truncate mt-3">{{ $ideashow->title }}</div>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="flex items-center justify-center mt-5 w-full">
            {{ $ideashows->links('paginate') }}

        </div>

    </div>
    <!-- END: Item List -->

</div>
</section>
