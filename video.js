var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '315', // Adjust the height as needed
            width: '560',  // Adjust the width as needed
            videoId: '0l1i_S7G3nM', // Replace with your YouTube video ID
            playerVars: {
                'autoplay': 0, // 1 to autoplay, 0 to disable autoplay
                'controls': 1, // 1 to show video controls, 0 to hide controls
                'rel': 0,      // 1 to show related videos at the end, 0 to hide
            },
        });
    }