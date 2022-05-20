jQuery(document).ready(function($) {

    var video = document.getElementById('video');
    
    video.addEventListener('play', () => {
        video.currentTime = 0;
    }, { once: true });
    
    $(document).on("click", ".colosseum_video_thumbnails video", function() {
        var allVideos = document.getElementsByClassName('colosseum_thumbnail_video');

        for(i = 0; i < allVideos.length; i++) {
            allVideos[i].classList.remove('active');
        }

        var videoParent = this.closest('div');
        videoParent.classList.add('active');

        var videoTitle = $(this).closest('.colosseum_thumbnail_video').find('.colosseum_thumbnail_title').text();
        var actveVideoTitle = $('.colosseum_video_title');

        actveVideoTitle.text(videoTitle);
        
        video.pause();
        var source = document.getElementById("video_source");
        source.setAttribute('src', $(this).find("source")[0].src.replace("#t=20", ""));
        video.load();
        video.play();
    });
        
    $(document).on('click', '.colosseum_gallery_see_more', function() {
        $(this).closest('.colosseum_images_holder').find('.colosseum_image_holder').removeClass('hidde_image');
        $(this).hide();
    });

});