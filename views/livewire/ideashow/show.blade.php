<div class="flex justify-center">
    @section('breadcrumb')
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a href="{{route('main')}}">داشبورد</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="{{route('ideashow')}}"> ایده‌شو‌ها</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="#" class="breadcrumb--active"> {{$ideashow->title}}</a>

        </div>
    @endsection
    <div class="intro-y mt-4 w-full lg:w-2/3">
        <div class="intro-y box mt-4">
            <div
                class="flex justify-between items-center p-5 border-b border-gray-200 dark:border-dark-5 w-full"
            >
                <div class="flex items-center">
                    <h2 class="font-medium text-base ml-auto">
                        {{$ideashow->title}}
                    </h2>

                    <div
                        class="flex justify-center items-center m-1 font-medium py-1 px-2 @if($ideashow->is_active) btn-success-soft @else btn-danger-soft @endif btn-rounded"
                    >
                        <div class="text-xs font-normal leading-none max-w-full flex-initial"
                        >
                            @if($ideashow->is_active) درحال برگذاری @else پایان یافته @endif
                        </div>
                    </div>
                </div>
                <a rol="button" href="{{route('idea-create', ['ideashow'=>$ideashow->id])}}" class="btn btn-primary shadow-md ml-2 @if($ideashow->is_active)  @else hidden @endif ">عضویت</a>
            </div>
            <div id="image-zoom" class="p-5">
                <div class="preview">
                    <div class="leading-relaxed">
                        <div class="w-full h-64 mt-5 image-fit">
                            <img
                                alt="{{$ideashow->title}}"
                                src="{{Storage::url($ideashow->image)}}"
                                data-action="zoom"
                                class="w-full rounded-md"
                            />
                        </div>
                        <div class="mt-1 mb-5 w-full flex justify-end p-1">
                            <span class="text-xs font-light text-right">{{$ideashow->updated_at->diffForHumans();}}</span>
                        </div>
                        {!! $ideashow->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
