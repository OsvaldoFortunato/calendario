<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendario WebApp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>

<div id="app">


<table class="table-auto border border-gray-300">
    <thead>
    <tr>
        <th v-for="(dia, index) in dias_semanas_ingles" :key="index" class="px-4 py-2 border">
            {{ dia }}
        </th>
    </tr>
    </thead>
    <tbody>
    <tr  v-for="(semana, index) in dias_ordenados" :key="index">
        <td class="px-4 py-2 border"  v-for="(dia, index) in semana.dias_separados" :key="index">
            {{dia}}
        </td>
    </tr>
    </tbody>
</table>


</div>
<script type="module" src="js/app.js"></script>
</body>
</html>