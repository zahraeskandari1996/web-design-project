<section>
    @section('breadcrumb')
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a href="{{route('main')}}">داشبورد</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="" class="breadcrumb--active">ایده جدید</a>
        </div>
    @endsection
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            ایده جدید
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" wire:submit.prevent="submit">
                <div>
                    <label for="title" class="form-label">عنوان ایده</label>
                    <input wire:model.defer="title" id="title" type="text" class="form-control w-full" placeholder="عنوان ایده‌شو">
                    @error('title')
                    <div class="text-theme-6 mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-3">
                    <label>توضیحات ایده</label>
                    <div class="mt-2" wire:model.defer="content" wire:ignore>
                        <input id="content" value="{{$content}}" type="hidden" name="content">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    @error('content')
                        <div class="text-theme-6 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                    <div class="mt-3" >
                        <label for="file_path" class="form-label">فایل </label>
                            <input
                                id="file_path"
                                name="file_path"
                                type="file"
                                accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed"
                                wire:model.defer="file_path"
                                class="form-control w-full"
                            />
                            @error('file_path')
                            <div class="text-theme-6 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    <div class="text-left mt-5" wire:loading.remove>
                        <a href="#" type="button" class="btn btn-outline-secondary w-24 ml-1">لغو</a>
                        <button type="submit" type="button" class="btn btn-primary w-24">ذخیره</button>
                    </div>
                    <div class="text-left mt-5 flex justify-center align-center ml-2" wire:loading>
                        <i data-loading-icon="tail-spin" class="w-8 h-8"></i>
                    </div>
                </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    </section>
