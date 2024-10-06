<div x-data="{            
    autoplayIntervalTime: 5000,
    slides: [                
        {
            imgSrc: 'https://mtsn1lampungselatan.sch.id/storage/slider/slider2-1721724194.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',  
            title: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',           
        },                
        {                    
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',                    
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',  
            title: 'Back end developers',
            description: 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',            
        },                
        {                    
            imgSrc: 'https://mtsn1lampungselatan.sch.id/storage/slider/slider4-1721724194.webp',                    
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',    
            title: 'Full stack developers',
            description: 'Where &quot;burnout&quot; is just a fancy term for &quot;Tuesday&quot;.',       
        },            
    ],            
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        if (this.currentSlideIndex > 1) {                    
            this.currentSlideIndex = this.currentSlideIndex - 1                
        } else {   
            // If it's the first slide, go to the last slide           
            this.currentSlideIndex = this.slides.length                
        }            
    },            
    next() {                
        if (this.currentSlideIndex < this.slides.length) {                    
            this.currentSlideIndex = this.currentSlideIndex + 1                
        } else {                 
            // If it's the last slide, go to the first slide    
            this.currentSlideIndex = 1                
        }            
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time   
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },    
}" x-init="autoplay" class="relative min-h-[80svh] mb-92 w-full">

    <div class="relative min-h-[80svh] mb-92 w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <div
                    class="absolute inset-x-0 bottom-0 z-10 mx-auto w-full max-w-3xl translate-y-4/5 px-4 sm:translate-y-3/4 sm:px-6 lg:translate-y-1/2">
                    <div
                        class="flex items-center justify-center rounded-2xl bg-slate-200 dark:bg-slate-800 px-5 py-8 shadow-md backdrop-blur-md sm:p-10 sm:shadow-lg md:p-12 lg:p-14">
                        <div class="flex flex-col items-center text-center">
                        <h2 class="text-2xl font-medium tracking-normal  decoration-2 transition duration-300 ease-in-out group-hover:underline sm:text-3xl sm:decoration-3 md:tracking-tight lg:text-4xl lg:leading-tight" 
                        x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1)"></h2>
                        </div>
                    </div>
                </div>
                <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300" x-bind:src="slide.image" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>
</div>
