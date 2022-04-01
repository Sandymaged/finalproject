<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Question</title>
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
</head>

<body>
    <div class="page">
        <div class="one">
            <div>
                <nav id="navsize" class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <p class="fs-1">CoV EGY </p>
                        </a>
                        <button id="butt" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a id="home" class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="doctor" aria-current="page" href="{{ url('doctor') }}">Doctor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="doctor" aria-current="page" href="{{ url('phys') }}">Psychological</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="doctor" aria-current="page" href="{{ url('about') }}">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="doctor" aria-current="page" href="{{ url('profile') }}">Profile</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                              {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="intro">
            <p class="text">Covid-19 survey</p>
            <img src="img/vip1.jpg" class="pic">

        </div>
        <div class="all">
            <div class="colordiv">
            </div>
            <form action="{{route('store')}}" method="post">
                @csrf
            <div class="whitediv">
                <div class="pragraph">
                    <h4>Do you work in one field of medical ?</h4>
                    <input type="radio" id="male" name="ques1" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques1" value="no">
                    <label for="no">NO</label>
                    @error('ques1')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you smoke?</h4>
                    <input type="radio" id="male" name="ques2" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques2" value="no">
                    <label for="no">NO</label>
                    @error('ques2')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Have you been traveling during the past four weeks?</h4>
                    <input type="radio" id="male" name="ques3" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques3" value="no">
                    <label for="no">NO</label>
                    @error('ques3')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Have you had contact with someone who is carrying the virus?</h4>
                    <input type="radio" id="male" name="ques4" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques4" value="no">
                    <label for="no">NO</label>
                    @error('ques4')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Have you had suffer from loss of smell and taste?</h4>
                    <input type="radio" id="male" name="ques5" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques5" value="no">
                    <label for="no">NO</label>
                    @error('ques5')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Did you take your temperature during the past days?</h4>
                    <input type="radio" id="male" name="ques6" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques6" value="no">
                    <label for="no">NO</label>
                    @error('ques6')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Have you noticed your temperature rising to a degree (more than 38 degrees Celsius) for a long time?</h4>
                    <input type="radio" id="male" name="ques7" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques7" value="no">
                    <label for="no">NO</label>
                    @error('ques7')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you have Vomiting?</h4>
                    <input type="radio" id="male" name="ques8" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques8" value="no">
                    <label for="no">NO</label>
                    @error('ques8')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you feel weakness, fatigue, physical exhaustion, or any physical pain?</h4>
                    <input type="radio" id="male" name="ques9" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques9" value="no">
                    <label for="no">NO</label>
                    @error('ques9')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you have a persistent cough?</h4>
                    <input type="radio" id="male" name="ques10" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques10" value="no">
                    <label for="no">NO</label>
                    @error('ques10')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you have shortness of breath?</h4>
                    <input type="radio" id="male" name="ques11" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques11" value="no">
                    <label for="no">NO</label>
                    @error('ques11')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you have diarrhea?</h4>
                    <input type="radio" id="male" name="ques12" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques12" value="no">
                    <label for="no">NO</label>
                    @error('ques12')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you have a sore throat?</h4>
                    <input type="radio" id="male" name="ques13" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques13" value="no">
                    <label for="no">NO</label>
                    @error('ques13')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you suffer from severe headaches?</h4>
                    <input type="radio" id="male" name="ques14" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques14" value="no">
                    <label for="no">NO</label>
                    @error('ques14')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="line"></div>
                <div class="pragraph">
                    <h4>Do you suffer from chronic lung disease?</h4>
                    <input type="radio" id="male" name="ques15" value="yes">
                    <label for="yes">YES</label>
                    <input type="radio" id="male" name="ques15" value="no">
                    <label for="no">NO</label>
                    @error('ques15')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div>
                    <button class="btn_submit">Submit</button>
                </div>
            </form>
        
        </div>

        </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>