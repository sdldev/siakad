<div x-data="{            
     autoplayIntervalTime: 4000,
     sliders: [],  // Awalnya kosong, akan diisi melalui fetch
     currentSlideIndex: 1,
     isPaused: false,
     autoplayInterval: null,

     // Fungsi untuk memuat sliders dari route
     loadSliders() {
         fetch('/slider')
             .then(response => response.json())
             .then(data => {
                 this.sliders = data;  // Mengisi sliders dengan data dari route
             })
             .catch(error => {
                 console.error('Error fetching sliders:', error);
             });
     },
     previous() {                
         if (this.currentSlideIndex > 1) {                    
             this.currentSlideIndex = this.currentSlideIndex - 1;                
         } else {   
             this.currentSlideIndex = this.sliders.length;                
         }            
     },            
     next() {                
         if (this.currentSlideIndex < this.sliders.length) {                    
             this.currentSlideIndex = this.currentSlideIndex + 1;                
         } else {                 
             this.currentSlideIndex = 1;                
         }            
     },    
     autoplay() {
         this.autoplayInterval = setInterval(() => {
             if (! this.isPaused) {
                 this.next();
             }
         }, this.autoplayIntervalTime);
     },
     setAutoplayInterval(newIntervalTime) {
         clearInterval(this.autoplayInterval);
         this.autoplayIntervalTime = newIntervalTime;
         this.autoplay();
     },    
 }" x-init="loadSliders(); autoplay()" class="relative w-full overflow-hidden">

     <div class="relative min-h-[80svh] w-full">
         <template x-for="(slide, index) in sliders" :key="index">
             <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                 <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                     <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.text" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                 </div>
                 <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300" x-bind:src="slide.image" x-bind:alt="slide.text" />
             </div>
         </template>
     </div>

 </div>
