import Splide from '@splidejs/splide';
import Video from '@splidejs/splide-extension-video';

new Splide( '#image-slider',  {
    'cover'      : true,
    'heightRatio': 0.5,
    type: 'loop',
    rewind: true,
    autoplay: true,
    easing: 'ease',
}).mount();

new Splide( '#videosplide', {
    'cover'      : true,
    'heightRatio': 0.5,
	// video: {
	// 	autoplay: true,
	// 	mute    : true,
	// },
} ).mount( { Video } );

console.log("this is coming from mix");
