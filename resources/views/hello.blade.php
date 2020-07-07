<!DOCTYPE html>
<html>
<head>
  <title>Pusher Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('8ca30240f0dcbbbf4bf1', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      $("#item").html('data.item');
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  <table>
  @foreach($order as $order)
    <tr>
        <td id="item" > <span ></span>{{$order->item}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>