@extends('layouts.main')

@section('content')
    <table class="table shadow p-3 mb-5 bg-body rounded">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-center">Group 1</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Portugal</td>
                <td class="text-center">0 - 0</td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/CZ/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Croatie</td>
                <td class="text-center">1 - 5</td>
                <td class="text-center">Portugal</td>
                <td class="text-center"><img src="https://www.countryflags.io/PT/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                        width="20px">
                </td>
                <td class="text-center">Pays de Galles</td>
                <td class="text-center">18h</td>
                <td class="text-center">Macédoine du Nord</td>
                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><div class="d-flex justify-content-center">
                    <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
                    </div></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table class="table shadow p-3 mb-5 bg-body rounded">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-center">Group 1</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Portugal</td>
                <td class="text-center">0 - 0</td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/CZ/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Croatie</td>
                <td class="text-center">1 - 5</td>
                <td class="text-center">Portugal</td>
                <td class="text-center"><img src="https://www.countryflags.io/PT/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                        width="20px">
                </td>
                <td class="text-center">Pays de Galles</td>
                <td class="text-center">18h</td>
                <td class="text-center">Macédoine du Nord</td>
                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><div class="d-flex justify-content-center">
                    <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
                    </div></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>



