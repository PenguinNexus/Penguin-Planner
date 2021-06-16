<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks | Penguin Planner</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

@include('layouts.header')

<div class="flex flex-col md:flex-row">

    @include('layouts.sidebar')

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h3 class="font-bold pl-2">Tasks</h3>
            </div>
        </div>

        <div class="flex flex-wrap">
            @include('layouts.wallboard')
        </div>

        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <div class="w-full p-6">
                <!--Table Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600">Ongoing Tasks</h5>
                    </div>
                    <div class="p-5">
                        <table class="w-full p-5 text-gray-700">
                            <thead>
                            <tr>
                                <th class="text-left text-blue-900">Name</th>
                                <th class="text-left text-blue-900">Module</th>
                                <th class="text-left text-blue-900">Complete</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Test</td>
                                <td>CIS0000</td>
                                <td>0%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/table Card-->
            </div>
        </div>

        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <div class="w-full p-6">
                <!--Table Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600">Upcoming Tasks</h5>
                    </div>
                    <div class="p-5">
                        <table class="w-full p-5 text-gray-700">
                            <thead>
                            <tr>
                                <th class="text-left text-blue-900">Name</th>
                                <th class="text-left text-blue-900">Module</th>
                                <th class="text-left text-blue-900">Complete</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Test</td>
                                <td>CIS0000</td>
                                <td>0%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/table Card-->
            </div>
        </div>

    </div>
</div>




<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>


</body>

</html>
