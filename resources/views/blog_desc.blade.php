
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name ="Description" content="{{ $posts[0]->description}}" >
       
        <title>{{ $posts[0]->meta}}</title>
        <script type="text/javascript">"{{ $posts[0]->data}}"</script>
        <style>
            * {
            box-sizing: border-box;
            }

            /* Add a gray background color with some padding */
            body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
            }

            /* Header/Blog Title */
            .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
            }

            /* Create two unequal columns that floats next to each other */
            /* Left column */
            .leftcolumn {   
            float: left;
            width: 75%;
            }

            /* Right column */
            .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
            }

            /* Fake image */
            .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
            }

            /* Add a card effect for articles */
            .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Footer */
            .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
            .leftcolumn, .rightcolumn {   
                width: 100%;
                padding: 0;
            }
            }
        </style>
    </head>
    <body>
    @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
    @endif
    @for ($i = 0; $i < sizeof($posts); $i++)
        <div class="header">
        <h2>	{{ $posts[$i]->title}}</h2>
        </div>

        <div class="row">

        <div class="leftcolumn">
            <div class="card">
            <h5>{{ $posts[$i]->name}} <span style="margin-left: 1133px !important;"> {{ $posts[$i]->created_at}}</span></h5>
            <div class="fakeimg"><img src="{{asset('imgs/full/'. $posts[$i]->full_img)}}"  style="width: 100% !important; height: 590px !important;" class="card-img-top" alt="{{$posts[$i]->title}}"></div>
            <p>{!! $posts[$i]->detail !!}</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg"><img src="{{asset('imgs/full/'. $posts[$i]->full_img)}}" style="width: 100% !important;" class="card-img-top" alt="{{$posts[$i]->title}}"></div><br>
            <div class="fakeimg"><img src="{{asset('imgs/full/'. $posts[$i]->full_img)}}" style="width: 100% !important;" class="card-img-top" alt="{{$posts[$i]->title}}"></div><br>
            <div class="fakeimg"><img src="{{asset('imgs/full/'. $posts[$i]->full_img)}}" style="width: 100% !important;" class="card-img-top" alt="{{$posts[$i]->title}}"></div>
            </div>
            <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
            </div>
        </div>
        </div>

        <div class="footer">
        <h2>Footer</h2>
        </div>
    @endfor
    </body>
</html>
