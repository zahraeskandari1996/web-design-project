<div class="flex justify-center">
    @section('breadcrumb')
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a href="{{route('main')}}">داشبورد</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="{{route('idea')}}" > ایده‌ها</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="" class="breadcrumb--active"> {{$idea->title}}</a>
        </div>
    @endsection
    <div class="intro-y mt-4 w-full lg:w-2/3 news">

        <div class="intro-y box mt-4">

            <div
                class="flex justify-between items-center p-5 border-b border-gray-200 dark:border-dark-5 w-full"
            >
                <div class="flex items-center">
                    <h2 class="font-medium text-base ml-auto">
                        {{$idea->title}}
                    </h2>

                </div>

                <a
                role="button"
                href="{{route('ideashow-show', ['ideashow' => $idea->ideashow->id])}}"
                class="flex justify-center items-center m-1 font-medium py-1 px-2 btn btn-dark btn-rounded"
            >
                <div
                    class="text-xs font-normal leading-none max-w-full flex-initial"
                >
                    {{$idea->ideashow->title}}
                </div>
            </a>
            </div>

            <div class="p-5">
                <div class="preview flex flex-col sm:flex-row">
                    <div>
                        <div class="flex items-center flex-col justify-between">
                               <span wire:click.prevent="upVote" class="cursor-pointer {{$idea->userSumRating == 1 ? "disabled" : ""}}">
                            <svg width="36" height="36" style="transform: rotate(180deg);">
                                <path d="M2 10h32L18 26 2 10z" fill="{{$idea->userSumRating == 1 ? "#F59E0B" : "#c7d2fe"}}"></path>
                            </svg>
                        </span>
                            <span style="line-height: normal; direction: ltr;" class="p-1 text-xl font-semibold text-center">{{$idea->sumRating ?? 0}}</span>
                            <span wire:click.prevent="downVote" class="cursor-pointer {{$idea->userSumRating == -1 ? "disabled" : ""}}">
                            <svg width="36" height="36" >
                                <path d="M2 10h32L18 26 2 10z" fill="{{$idea->userSumRating == -1 ? "#F59E0B" : "#c7d2fe"}}"></path>
                            </svg>
                        </span>
                        </div>


                    </div>
                    <div class="leading-relaxed mt-5 pr-4">
                        {!! $idea->content !!}
                    </div>
                </div>


                <!-- BEGIN: IDEA Layout -->
                <div class="intro-y flex relative mt-5 items-center pt-6 border-t border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 flex-none image-fit">
                            <img
                                alt="{{$idea->user->username}}"
                                class="rounded-full"
                                src="{{Storage::url($idea->user->profile_photo_path)}}"
                            />
                        </div>
                        <div class="mr-3 ml-auto">
                            <a
                                href="#"
                                class="font-medium"
                                >{{$idea->user->name}}</a
                            >
                            <div class="text-gray-600">
                                {{$idea->created_at->diffForHumans()}}
                            </div>

                        </div>
                    </div>
                    @if($idea->file_path)
                    <button wire:click="download" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-theme-1 text-white mr-3 mr-auto sm:ml-0" > <i data-feather="share" class="w-3 h-3"></i> </button>

                    @else
                    <button class="cursor-not-allowed bg-opacity-50 intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-theme-1 text-white mr-3 mr-auto sm:ml-0" > <i data-feather="share" class="w-3 h-3"></i> </button>

                    @endif
                </div>
                <!-- END: IDEA Layout -->
                <!-- BEGIN: Comments -->
                <div class="intro-y mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
                    <div class="text-base sm:text-lg font-medium">{{$idea->comments->count()}} پاسخ</div>
                    <form class="news__input relative mt-5 flex items-center justify-center ">

                        <textarea rows="2" wire:model.defer="comment" class="form-control resize-none"placeholder="نظر خود را بنویسید..."></textarea>
                        <button wire:click="saveComment" type="button" class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ارسال</button>

                    </form>
                    @error('comment')
                    <div class="text-theme-6 mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="intro-y mt-5 pb-10">

                    @foreach ($comments as $comment )
                    <div class="mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
                        <div class="flex">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                                <img alt="{{$User::find($comment->user_id)->email}}" class="rounded-full" src="{{Storage::url($User::find($comment->user_id)->profile_photo_path)}}">
                            </div>
                            <div class="mr-3 flex-1">
                                <div class="flex items-center"> <a href="" class="font-medium">{{$User::find($comment->user_id)->name}}</a> <a href="" class="mr-auto text-xs text-gray-600">{{$comment->created_at->diffForHumans()}}</a> </div>
                                <div class="text-gray-600 text-xs sm:text-sm">{{$User::find($comment->user_id)->email}}</div>
                                <div class="mt-2">{{$comment->comment}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="flex items-center justify-center mt-5 w-full">
                    {{ $comments->links('paginate') }}

                </div>
                <!-- END: Comments -->
            </div>

        </div>





    </div>

</div>
