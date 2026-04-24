
    document.getElementById('load_video').addEventListener('click', function() {

        var url = document.getElementById('video_url').value;
        var container = document.getElementById('video_container');

        if (!url) {
            container.innerHTML = '<p style="color:red;">Please enter a video URL</p>';
            return;
        }

        // YouTube URL convert to embed
        var embed = '';

        if (url.includes('youtube.com') || url.includes('youtu.be')) {

            var videoId = '';

            if (url.includes('watch?v=')) {
                videoId = url.split('watch?v=')[1];
            } else if (url.includes('youtu.be/')) {
                videoId = url.split('youtu.be/')[1];
            }

            embed = 'https://www.youtube.com/embed/' + videoId;

        } else if (url.includes('vimeo.com')) {

            var videoId = url.split('vimeo.com/')[1];
            embed = 'https://player.vimeo.com/video/' + videoId;

        } else {
            container.innerHTML = '<p style="color:red;">Unsupported video link</p>';
            return;
        }

        // Show player
        container.innerHTML = `
            <div style="position:relative; width:600px; height:340px;">
                <iframe width="100%" height="100%" src="${embed}" frameborder="0" allowfullscreen></iframe>
            </div>
        `;
    });
