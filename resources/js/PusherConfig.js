
    import Pusher from 'pusher-js'
    
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1a98df5f5dee736dc809', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('notifications');
    channel.bind('user_new_post_count', function(data) {
      alert(JSON.stringify(data));
    });