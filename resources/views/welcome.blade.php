<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <?php
               $arr = array(1,2,4,5,8,10,14,15,22,44,45);
                foreach( $arr as $key => $value)
                {
                    if($value%5 == 0) {
                        echo $key . '- й єлемент массива = '. $value.'<br>';
                    }
                }
                echo '**********<br>';
                $i = 0;
                do {
                    $a = random_int(0,9);
                    $b = random_int(0,9);
                    $c = random_int(0,9);
                    $i++;
                    echo $i . '<br>';
                }
                while ($a+$b+$c <= 14);
                echo $i . ' колличество итерраций. сумма равна '.$a=$b=$c;
                echo '<br>**********<br>';
                class MyClass {
                    public $e = 'public a';
                    protected $d= 'protected b';
                    private $k = 'private c';
                public function print(){
                    echo $this->e .'<br>';
                    echo $this->d .'<br>';
                    echo $this->k .'<br>';
                }



                }
                $obj = new MyClass();
                echo $obj->print() .'<br>';
                echo '<br>**********<br>';
                abstract class Car {
                    abstract public function speed();

                }
                class BMW extends Car {
                    public function speed() {
                     return  '200';
                    }
                }
                $obj = new BMW();
                echo $obj->speed();
                echo '<br>**********<br>';
                $aa ='1';
                $aa[$aa]= '12';
               echo $aa[0].'====='.$aa[1];
                echo '<br>**********<br>';
                class A {
                    public static $sT = 'static constants';
                    public static function sT()
                    {
                        echo ' =static function sT()=';
                    }

                }
                $objA = new A();
                echo A::$sT;
                A::sT();
                //

                $arrM = array(1,5,6,7,8,9,11,12);

                $n = count($arrM);
                echo $n;
                echoRec($n, $arrM);

                function echoRec($n, $arrM)
                {
                    if($n==1)
                    {
                        $abcd = array_pop($arrM);
                        echo '<br> end'. $abcd;
                        } else {
                        $abcd = array_pop($arrM);
                         echo '<br>'. $abcd;
                        echoRec($n-1,$arrM);
                    }

                }

                interface firstInterface{
                    public function load();
                }
                abstract class firstClass implements firstInterface
                {
                    abstract function load();
                }
                class secondClass extends firstClass
                {
                    public function load() {
                        echo '<br>ssd';
                    }
                }
                $obj = new secondClass();
                echo $obj->load();

                ?>
            </div>
        </div>
    </body>
</html>
