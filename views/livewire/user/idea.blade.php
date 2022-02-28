<div class="cursor-pointer box relative flex items-center py-5 px-0 sm:px-5">
    <div class="w-12 h-12 flex-none image-fit ml-1">
        <img alt="{{$idea->user->name}}" class="rounded-full" src="{{Storage::url($idea->user->profile_photo_path)}}">
        {{-- <div class="w-3 h-3 bg-theme-9 absolute left-0 bottom-0 rounded-full border-2 border-white"></div> --}}
    </div>
    <div class="mr-2 overflow-hidden">
        <div class="flex items-center" style="justify-content: flex-end;">
            <a href="javascript:;" class="font-medium">
                {{$idea->user->name}}
            </a>
            <span style="direction: rtl;" class="pr-2 text-xs text-gray-500 ml-auto">{{$idea->created_at->diffForHumans()}}</span>


        </div>
        <div class="w-full truncate text-gray-600 mt-0.5">{{$idea->title}}</div>
    </div>
    <div class="absolute left-0  md:pl-12">
        <a href="{{route('idea-show', ['idea'=>$idea->id])}}" role="button" class="btn btn-rounded-primary w-18">مشاهده</a>

    </div>
    {{-- <div class="w-5 h-5 flex items-center justify-center absolute top-0 left-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -ml-1">1</div> --}}


</div>
