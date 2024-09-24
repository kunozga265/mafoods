<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            color: #272727;
        }

        .nutrition-info {
            /*padding: 20px;*/
            /*border: 1px solid #a2a2a2;*/
            /*background-color: #58bf00;*/
            /*color: white;*/
            /*background: #fbfbfb;*/
            /*border: 1px solid #f3f3f3;*/

        }

        .table_section1, .table_section2 {
            margin-top: 24px;
            /*background: #fbfbfb;*/
            /*background: #f2f2f4;*/
            background-color: #e6f6e6;
            padding: 20px;
        }

        .table_section2 {
            position: absolute;
            left: 50%;
        }

        .table_section1 {
            border-radius: 12px;

            border: 1px solid #f3f3f3;
        }

        table {
            width: 300px;
            /*background-color:gold;*/
        }

        table td {
            /*font-size: 14px;*/
            margin: 0;
        }

        table tr td:last-child {
            /*border-left: 1px solid black;*/
            /*width: 300px;*/
            /*background-color: #f2f2f4;*/
            /*max-width: 50px;*/
            /*font-weight: bold;*/
            /*text-transform: uppercase;*/
        }

        .heading {
            /*text-align: center;*/
        }

        h1 {
            /*text-transform: uppercase;*/
            margin: 0;
            padding: 0;
        }

        p {

        }

        h3 {
            margin: 0;
            /*color: #58bf00;*/
        }

        #yield-factor {
            border-radius: 999px;
            padding: 8px 12px;
            background-color: #e6f6e6;
            color: #00911b;
            font-size: 12px;
        }

        #yield-factor-number {
            font-size: 20px;
            font-weight: bold;
            color: #00911b;
        }

        .footer{
            margin-top: 36px;
        }

        .footer > div{
            margin-bottom: 16px;
        }

        .footer .logos img{
            height: 60px;
        }
    </style>
</head>
<body>
<div class="results">
    <p style="text-align: right; float: right">Malawi Food Data System <br>https://mafoods.luanar.ac.mw</p>
    <img style="height: 80px; margin-bottom: 24px; margin-left: -18px" src="{{storage_path()."/images/usaid-logo.png"}}" alt="">
    <div class="heading">
        <h1><span>{{$recipe}}</span></h1>
        <div>Serving per 100g</div>
        <div><span id="yield-factor-number">{{number_format($yieldFactor,2)}}%</span><span id="yield-factor">Yield Factor</span>
        </div>
    </div>
    {{--        <div class="nutrition-info">--}}
    {{--            Nutrition Information--}}


    {{--        </div>--}}
    <div class="table_section2">
        <table>
            <tr class="">
                <td>K (mg)</td>
                <td class="text-left ">
                    @if($results["k"]  != null)
                        <span>{{ number_format($results["k"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Na (mg)</td>
                <td class="text-left ">
                    @if($results["na"]  != null)
                        <span>{{ number_format($results["na"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Zn (mg)</td>
                <td class="text-left ">
                    @if($results["zn"]  != null)
                        <span>{{ number_format($results["zn"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Cu (mg)</td>
                <td class="text-left ">
                    @if($results["cu"]  != null)
                        <span>{{ number_format($results["cu"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Mn (mcg)</td>
                <td class="text-left ">
                    @if($results["mn"]  != null)
                        <span>{{ number_format($results["mn"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>I (mcg)</td>
                <td class="text-left ">
                    @if($results["i"]  != null)
                        <span>{{ number_format($results["i"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Se (mcg)</td>
                <td class="text-left ">
                    @if($results["se"]  != null)
                        <span>{{ number_format($results["se"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin A (RAE) (mcg)</td>
                <td class="text-left ">
                    @if($results["vitamin_a_rae"]  != null)
                        <span>{{ number_format($results["vitamin_a_rae"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin A (RE) (mcg)</td>
                <td class="text-left ">
                    @if($results["vitamin_a_re"]  != null)
                        <span>{{ number_format($results["vitamin_a_re"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Thiamin (mg)</td>
                <td class="text-left ">
                    @if($results["thiamin"]  != null)
                        <span>{{ number_format($results["thiamin"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Riboflavin (mg)</td>
                <td class="text-left ">
                    @if($results["riboflavin"]  != null)
                        <span>{{ number_format($results["riboflavin"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Niacin (mg)</td>
                <td class="text-left ">
                    @if($results["niacin"]  != null)
                        <span>{{ number_format($results["niacin"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin B6 (mg)</td>
                <td class="text-left ">
                    @if($results["vitamin_b6"]  != null)
                        <span>{{ number_format($results["vitamin_b6"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Folic acid (mcg)</td>
                <td class="text-left ">
                    @if($results["folic_acid"]  != null)
                        <span>{{ number_format($results["folic_acid"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin B12 (mcg)</td>
                <td class="text-left ">
                    @if($results["vitamin_b12"]  != null)
                        <span>{{ number_format($results["vitamin_b12"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Pantothenate (mg)</td>
                <td class="text-left ">
                    @if($results["pantothenate"]  != null)
                        <span>{{ number_format($results["pantothenate"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Biotin (mcg)</td>
                <td class="text-left ">
                    @if($results["biotin"]  != null)
                        <span>{{ number_format($results["biotin"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin C (mg)</td>
                <td class="text-left ">
                    @if($results["vitamin_c"]  != null)
                        <span>{{ number_format($results["vitamin_c"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin D (mcg)</td>
                <td class="text-left ">
                    @if($results["vitamin_d"]  != null)
                        <span>{{ number_format($results["vitamin_d"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Vitamin E (mg)</td>
                <td class="text-left ">
                    @if($results["vitamin_e"]  != null)
                        <span>{{ number_format($results["vitamin_e"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Phytic Acid (mg)</td>
                <td class="text-left ">
                    @if($results["phytic_acid"]  != null)
                        <span>{{ number_format($results["phytic_acid"],2)}}</span>
                    @endif
                </td>
            </tr>
        </table>
    </div>
    <div class="table_section1">
        <table>
            <tr class="">
                <td>Sum of Proximates</td>
                <td class="text-left ">
                    <span>{{ number_format(($results["moisture"] + $results["protein"] + $results["fats"] + $results["cho_avail"] + $results["fibre"] + $results["ash"]),2) }}</span>
                </td>
            </tr>
            <tr class="">
                <td>Moisture (g)</td>
                <td class="text-left ">
                    @if($results["moisture"]  != null)
                        <span>{{ number_format($results["moisture"],2) }}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Energy Calculated (kCal)</td>
                <td class="text-left ">
                    @if($results["energy_kcal"]  != null)
                        <span>{{ number_format(($results["protein"]*4) + ($results["fats"]*9) + ($results["cho_avail"]*4) + ($results["fibre"]*2),2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Energy Calculated (kJ)</td>
                <td class="text-left ">
                    @if($results["energy_kj"]  != null)
                        <span>{{ number_format(($results["protein"]*17) + ($results["fats"]*37) + ($results["cho_avail"]*17) + ($results["fibre"]*8),2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Nitrogen (g)</td>
                <td class="text-left ">
                    @if($results["nitrogen"]  != null)
                        <span>{{ number_format($results["nitrogen"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Total protein (g)</td>
                <td class="text-left ">
                    @if($results["protein"]  != null)
                        <span>{{ number_format($results["protein"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Total Fats (g)</td>
                <td class="text-left ">
                    @if($results["fats"]  != null)
                        <span>{{ number_format($results["fats"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Saturated FA (g)</td>
                <td class="text-left ">
                    @if($results["saturated_fa"]  != null)
                        <span>{{ number_format($results["saturated_fa"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Mono-unsaturated FA (g)</td>
                <td class="text-left ">
                    @if($results["monounsaturated_fa"]  != null)
                        <span>{{ number_format($results["monounsaturated_fa"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Polyunsaturated FA (g)</td>
                <td class="text-left ">
                    @if($results["polyunsaturated_fa"]  != null)
                        <span>{{ number_format($results["polyunsaturated_fa"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Cholesterol (mg)</td>
                <td class="text-left ">
                    @if($results["cholesterol"]  != null)
                        <span>{{ number_format($results["cholesterol"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Total CHO for UDB</td>
                <td class="text-left ">
                    @if($results["cho_udb"]  != null)
                        <span>{{ number_format($results["cho_udb"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Carbohydrate, avail. (g)</td>
                <td class="text-left ">
                    @if($results["cho_avail"]  != null)
                        <span>{{ number_format($results["cho_avail"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Total sugars (g)</td>
                <td class="text-left ">
                    @if($results["sugars"]  != null)
                        <span>{{ number_format($results["sugars"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Added sugar (g)</td>
                <td class="text-left ">
                    @if($results["added_sugar"]  != null)
                        <span>{{ number_format($results["added_sugar"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Total fibre (g)</td>
                <td class="text-left ">
                    @if($results["fibre"]  != null)
                        <span>{{ number_format($results["fibre"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Starch (g)</td>
                <td class="text-left ">
                    @if($results["starch"]  != null)
                        <span>{{ number_format($results["starch"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Ash (g)</td>
                <td class="text-left ">
                    @if($results["ash"]  != null)
                        <span>{{ number_format($results["ash"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Ca (mg)</td>
                <td class="text-left ">
                    @if($results["ca"]  != null)
                        <span>{{ number_format($results["ca"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Fe (mg)</td>
                <td class="text-left ">
                    @if($results["fe"]  != null)
                        <span>{{ number_format($results["fe"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>Mg (mg)</td>
                <td class="text-left ">
                    @if($results["mg"]  != null)
                        <span>{{ number_format($results["mg"],2)}}</span>
                    @endif
                </td>
            </tr>

            <tr class="">
                <td>P (mg)</td>
                <td class="text-left ">
                    @if($results["p"]  != null)
                        <span>{{ number_format($results["p"],2)}}</span>
                    @endif
                </td>
            </tr>
        </table>
    </div>
    <p>Generated by;<br>
        <b>{{$user_name}}</b></p>

    <div class="footer">
{{--        <div>Powered by</div>--}}
        <div class="logos">

            <img style="" src="{{storage_path()."/images/mw-govt.jpg"}}" alt="">
            <img style="" src="{{storage_path()."/images/luanar-logo.png"}}" alt="">
        </div>

    </div>
</div>

</body>
</html>
