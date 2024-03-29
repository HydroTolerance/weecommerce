<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
        @include('components.header')
    <div  class="flex flex-row-reverse ">
        
        <div class="border rounded p-4 shadow-sm ">
            <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" alt="" style="width: 200px; height: 100px;" class="mx-auto">
            @foreach ($products as $product)
                <div class="">
                    <div>
                        {{$product->product_name}} 
                    </div>
                    <div>
                        {{$product->price}} 
                    </div>
                    <div>
                        {{$product->qty}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>