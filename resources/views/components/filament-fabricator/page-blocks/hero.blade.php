@aware(['page'])

@props([
	'title',
	'title_extension',
	'paragraph',
	'label',
	'image',
	'alternative',
	'accent',
	'img_contain',
])

<section class="
    mt-12 my-auto
    min-h-[25vh] xl:min-h-[100vh] w-full
    xl:flex justify-center gap-8 px-12 items-center
">

        <div class="h-full xl:max-w-[40%] m-0 flex flex-col gap-6">

            <h2 class="text-6xl m-auto xl:w-full w-[40%]">
                <p class="text-left">
                    {{ $title }}
                </p>
                <p class="text-right">
                    {{ $title_extension }}
                </p>
            </h2>
    
            <p class="text-center text-md tracking-tighter">
                {{ $paragraph }}
            </p>
    
            <div class="flex justify-end bg-red px-6">
                <a href="/menus/drinks" class="border-primary border-2 bg-transparent text-primary rounded-lg py-2 px-6 no-underline w-inline-block">
                    {{ $label }}
                </a>
            </div>
        </div>
    
        <figure 
            class="xl:w-[50%] h-auto relative m-0 overflow-hidden rounded-2xl shadow"
            @class([
                '-order-1' => $alternative
            ])
        >
    
            <x-curator-glider
                :media="$image" 
                sizes="(max-width: 767px) 100vw, (max-width: 991px) 38vw, (max-width: 1279px) 360px, (max-width: 1919px) 28vw, 540px"
                class="home-img"
                @class([
                    $img_contain
                ])
            />
    
        </figure>

        @if($accent)
            <div class="bg-accent"
                style="
                z-index: -10;
                width: 20vw;
                height: 20vw;
                max-height: 330px;
                max-width: 330px;
                filter: contrast(120%)blur(50px);
                border-radius: 50%;
                margin-top: -30vw;
                position: absolute;
                left: 30vw;
            "></div>
        @endif
</section>
