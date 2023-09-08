<body>
<p>Hello, {{$name}}!</p>
<p>You have generated a recipe. Please click the link below to download the recipe</p>
<a href="https://mafoods.luanar.ac.mw/api/recipes/print/{{$recipe->id}}">{{$recipe->name}} Recipe</a>
<p>Regards</p>
</body>
