<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/app.css" rel="stylesheet">
</head>

<body>
  <div class="inline-flex items-end justify-end pl-96 pt-52 bg-green-500" style="width: 100%; height: 100%;">
    <div class="relative" style="width: 1223px; height: 874px;">
      <img class="absolute right-0 bottom-0" style="width: 570px; height: 570px;" src="/img/pizza.png">
      <div class="relative absolute left-0 top-0" style="width: 487px; height: 589px;">
        <div class="inline-flex items-start justify-center px-48 pt-0.5 pb-96 absolute left-0 bottom-0 bg-white shadow rounded-lg" style="width: 487px; height: 579px;">
          <div class="absolute left-0 top-0 bg-green-600 rounded-tl-lg rounded-tr-lg" style="width: 487px; height: 126px;">
            <img class="absolute w-24 h-24 left-10 top-3 right-5" src="/img/user.png">
          </div>

        </div>
        <form action="/dashboard" method="post">
          <div class="w-96 h-16 absolute" style="left: 52px; top: 197px;">
            <input class="flex items-end justify-start flex-1 h-full pl-6 pr-28 pt-3 bg-gray-50 border rounded-xl border-black" placeholder="Username" type="text">
            </input>
          </div>
          <div class="w-96 h-16 absolute" style="left: 52px; top: 299px;">
            <input class="flex items-center justify-start flex-1 h-full pl-5 pr-28 py-1.5 bg-gray-50 border rounded-xl border-black" placeholder="Password" type="password">
            </input>
          </div>
          <div class="relative absolute place-items-center" style="width: 290px; height: 63px; left: 152px; top: 423px;">
            <a class="w-44 h-16 absolute left-0 top-0 bg-green-500 border rounded-lg border-black" href="/dashboard">
              <p class="w-24 h-12 absolute left-12 top-3 text-3xl">Login</p>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>