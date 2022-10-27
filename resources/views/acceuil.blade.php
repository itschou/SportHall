@extends('layouts/dashboard')
@section('content')


<br><br><br>
<main>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text-white">NOTRE SALLE DE SPORT</h2>
                <p class="text-white text-justify" style="width: 60%">{{ config()->get('config.site.Description') }}</p>
            </div>
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="100%" height="100%" viewBox="0 0 892.34963 579.10966" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M837.481,708.97279l46.45777-69.08737-46.36275,76.51984.09695,7.77406q-5.08741.03879-10.076-.16943l2.3042-99.93046-.06313-.77093.085-.149.22054-9.44283-50.87674-73.8671,50.81671,66.79969.18034,1.99592,1.74041-75.50137-43.9438-76.58326,44.06895,63.31984-.46-156.41937.001-.52062.015.512L834.60258,486.732l40.04952-50.07621-39.91841,60.69646.87411,67.53422,36.85379-65.91084-36.71835,75.83953.48658,37.55243,53.59536-91.813L836.39275,625.468Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M993.83068,711.14892l46.45777-69.08736-46.36276,76.51983.09695,7.77406q-5.0874.03879-10.076-.16943l2.3042-99.93046-.06313-.77093.085-.149.22054-9.44282-50.87674-73.86711,50.81671,66.79969.18033,1.99592L988.354,535.32l-43.94379-76.58326,44.06894,63.31984-.46-156.41937.001-.52062.01495.512,2.91709,123.27952,40.04952-50.07621-39.9184,60.69646.8741,67.53422,36.85379-65.91084-36.71834,75.83953.48658,37.55243,53.59536-91.813L992.74239,627.64414Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <rect x="92" width="278.00787" height="376.03942" fill="#e6e6e6" />
                    <rect x="101.79647" y="13.25091" width="258.41494" height="349.5376" fill="#fff" />
                    <path d="M480.07005,235.004H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M480.07005,294.63305H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M480.07005,354.26216H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M480.07005,413.89126H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M480.07005,473.52037H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path d="M446.94277,235.004H289.58819a5.79728,5.79728,0,1,1,0-11.59455H446.94277a5.79728,5.79728,0,0,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M398.08,294.63305H289.58819a5.79727,5.79727,0,1,1,0-11.59455H398.08a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M338.45093,354.26216H289.58819a5.79728,5.79728,0,1,1,0-11.59455h48.86274a5.79728,5.79728,0,0,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M461.85005,413.89126H289.58819a5.79727,5.79727,0,1,1,0-11.59455H461.85005a5.79727,5.79727,0,0,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M423.75367,473.52037H289.58819a5.79728,5.79728,0,1,1,0-11.59455H423.75367a5.79728,5.79728,0,1,1,0,11.59455Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <rect y="563.74025" width="888" height="2" fill="#3f3d56" />
                    <path d="M659.81305,431.35258s-6.28548-46.0935-16.76127-33.52254,0,31.42738,0,31.42738l8.38063,10.47579,8.38064-6.28547Z" transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path d="M684.955,446.01869s-20.95158-23.04675-25.1419-18.85643-16.76127,6.28548-14.66611,14.66611,46.09349,35.6177,46.09349,35.6177Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M684.955,446.01869s-20.95158-23.04675-25.1419-18.85643-16.76127,6.28548-14.66611,14.66611,46.09349,35.6177,46.09349,35.6177Z" transform="translate(-153.82518 -160.44517)" opacity="0.1" />
                    <path d="M804.379,443.92353V460.6848s2.09516,37.71286-10.47579,35.6177S787.61773,462.78,787.61773,462.78l2.09516-18.85643Z" transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path d="M798.09353,565.44274S816.95,594.775,823.23543,596.87012s39.808,20.95159,43.99834,39.808L896.566,674.391l-14.66611,18.85643s-67.04508-71.2354-85.90151-77.52088-37.71286-37.71286-37.71286-37.71286Z" transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path d="M649.33725,517.25409s-39.808,6.28547-33.52254,31.42738,67.04508,77.52088,67.04508,77.52088L684.955,638.7733l23.04675,4.19032,10.47579-10.4758-2.09515-6.28547S691.24043,603.1556,689.14527,594.775s-25.1419-41.90317-35.6177-43.99833l14.66611-8.38064Z" transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path d="M890.28052,674.391s-8.38064-12.57095,4.19031-10.4758,20.95159,4.19032,20.95159,12.571-10.47579,67.04508-23.04675,62.85476-2.09515-23.04675-2.09515-23.04675-6.28548-16.76127-10.4758-18.85643-4.19032-12.57095,0-12.57095S892.37567,678.58132,890.28052,674.391Z" transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <path d="M712.192,628.2975s0-10.47579,8.38063,0,12.571,18.85643,4.19032,25.14191S687.05011,674.391,687.05011,674.391s-31.42738,6.28547-27.23706-8.38064c0,0,20.95159-10.47579,20.95159-18.85643s0-23.04674,6.28547-18.85643S712.192,634.583,712.192,628.2975Z" transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <path d="M752,471.16059s29.33223,4.19032,27.23707,46.0935c0,0,37.71286,37.71286,27.23706,50.28381s-33.52254,35.6177-41.90317,29.33222S731.04845,542.396,731.04845,542.396s-58.66445,20.95159-69.14024,10.4758-20.95159-35.6177-20.95159-35.6177l52.379-27.23707Z" transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <circle cx="516.46366" cy="166.14947" r="25.14191" fill="#9f616a" />
                    <path d="M689.14527,328.6898s14.66611,23.04674,18.85643,25.1419-29.33222,23.04675-29.33222,23.04675,0-27.23707-10.4758-33.52254Z" transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path d="M691.24043,351.73654s33.52254-10.47579,39.808,6.28548S752,406.21067,749.90488,427.16226s-6.28548,16.76127,0,23.04675,10.47579,2.09516,8.38063,10.47579-4.19032,8.38064-2.09516,12.57095-25.1419,18.85643-48.18865,20.95159L684.955,496.3025s0-37.71286-4.19031-46.09349-12.571-25.14191-12.571-31.42739V402.15078a63.6067,63.6067,0,0,1,8.38063-31.55779v0S689.14527,351.73654,691.24043,351.73654Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M716.38234,360.11718s77.52087,6.28547,85.90151,27.23706S814.8548,450.209,806.47416,450.209s-18.85643,4.19031-20.95158,0-10.4758-46.0935-12.571-46.0935S708.0017,397.83,708.0017,397.83,680.76464,364.3075,716.38234,360.11718Z" transform="translate(-153.82518 -160.44517)" fill="<?php echo $secondaryColor ?>" />
                    <path d="M669.27866,320.36163s-6.67194-11.59461-15.01174-1.52364-21.907-8.43622-19.82426-12.38526,9.4377.17757,22.04213-3.94283,36.88462-12.51446,40.951,14.86728-5.61826,24.51117-5.61826,24.51117-4.43915-24.26318-8.45126-17.29375l-4.01211,6.96943-3.48019.85654Z" transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                </svg>
            </div>
        </div>

        <br><br><br>

        <div class="row p-3 d-flex justify-content-center" style="background-color: rgba(65, 87, 104, 0.8); border-radius: 24px;">
            <div class="col">
                <h1 class="text-center"><i class="fa fa-user" style="color: <?php echo $secondaryColor ?>;"></i></h1>
                <!-- <h4></h4> -->
                <h2 class="text-center stats text-white">+{{count($usercount)}} CLIENTS</h2>
            </div>
            <div class="col">
                <h1 class="text-center"><i class="fa fa-certificate" style="color: <?php echo $secondaryColor ?>;"></i></h1>
                <!-- <h4></h4> -->
                <h2 class="text-center stats text-white">+{{count($users)}} INSCRITS</h2>
            </div>

        </div>
    </div>


    <br><br><br>

    <div class="container-fluid" style="background-color:  <?php echo $secondaryColor ?>;">
        <div class="row">

            <div class="col-7 text-center p-3">
                <h1 class="FontInter text-white text-center p-3">LA MEILLEUR SALLE DE SPORT POUR LES MEILLEURS CLIENTS</h1><br><br>
                <button class="btn btn-lg rounded-pill text-white FontInter btnsinscrirediv2" style="background-color: #B800B8;">S'INSCRIRE</button>
            </div>
            <div class="col mb-0 mt-2 d-flex justify-content-center align-item-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="100%" viewBox="0 0 805.04004 651.24669" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M181.20339,329.37224c-10.24371-.68884-15.01477,1.30524-18.09552,3.33612-.98901,.65198-1.96478,1.41541-2.88696,2.24054,4.65588-9.44641,9.42505-18.85083,14.28485-28.18945,.03149,1.2536,.25433,1.84845,.80518,2.14581,1.26013,.68024,4.20001-1.4975,10.0285-5.88043,4.43042-3.33167,4.9964-4.17627,5.32574-4.755,1.15814-2.03461,1.05963-3.71143,.3457-11.0213-1.28125-13.12006-1.61133-14.35168-.99011-17.44971,.21387-1.06683,.79773-3.63751,.38324-3.78497-.42596-.15155-1.08789,2.54535-3.4447,4.30481-2.29706,1.71484-3.91351,.82941-6.00104,1.93335-2.6983,1.427-3.44098,4.72784-4.55804,10.04053-.9892,4.70496-.73676,6.36908-1.32642,15.2337-.16705,2.51111-.32568,4.46503-.4339,6.00317-4.35114,8.31989-8.62091,16.70062-12.81372,25.11383,.05688-.23096,.11011-.44855,.15625-.63763,1.29742-5.31873,.86505-7.77362,.21307-9.49792-1.0564-2.79346-3.1557-4.46594-7.3114-7.69727-4.07227-3.16632-7.51691-4.98938-11.65631-7.1546-5.42603-2.83813-8.13904-4.25732-8.87494-3.84259-1.84808,1.04144-1.57336,6.5-.0296,13.32983-3.51392-1.81287-5.38013-2.66248-5.9704-2.32983-.25421,.14325-.46692,.37268-.64301,.67511-2.62695-.12952-6.10907,.01978-10.09326,.5423,3.14355-1.13678,6.67639-2.6358,10.48187-4.68085,3.29871-1.77271,4.94489-2.67426,4.78699-3.41925-.56519-2.66644-23.08972-2.61249-42.39862,7.52234-9.0907,4.77161-12.11377,8.96686-13.67694,12.30927-.50201,1.07349-.93439,2.23511-1.28876,3.42126-.97357-10.48737-1.82867-20.99799-2.5719-31.49951,.68286,1.05237,1.18396,1.44293,1.80908,1.4082,1.42981-.07947,2.7962-3.47333,5.47083-10.25775,2.03296-5.15704,2.07355-6.17297,2.05151-6.8385-.07727-2.33984-1.03845-3.71741-5.47076-9.57385-7.95526-10.51147-8.88086-11.38849-9.97211-14.35382-.37579-1.02106-1.2229-3.5174-1.65332-3.42621-.44226,.09363,.40436,2.7384-.68384,5.47076-1.06067,2.66309-2.90155,2.75409-4.10309,4.78693-1.55322,2.62775-.45947,5.82941,1.36768,10.94159,1.6181,4.52734,2.70386,5.81354,6.8385,13.67694,1.1712,2.22754,2.05817,3.97583,2.77057,5.34332,.64392,9.36646,1.38892,18.74243,2.21655,28.10608-.07227-.22638-.14062-.43945-.2002-.62463-1.67657-5.21173-3.32928-7.07776-4.78693-8.20624-2.36157-1.82812-5.0257-2.15533-10.25775-2.73535-5.12701-.5683-9.01642-.32007-13.67694,0-6.10907,.41956-9.1637,.62921-9.57391,1.36768-1.12592,2.02649,2.67902,7.22473,8.36462,12.78564-4.64136,.32904-7.00732,.57111-7.36462,1.21436-.93427,1.68152,1.5329,5.55042,5.64362,9.99432-2.8573,.24554-4.36444,.50317-4.64362,1.00568-3.1366,5.64545,31.91113,35.89136,39.66321,30.08936,.58868-.44061,1.00568-1.08771,1.29279-1.8761,.12695,1.06671,.25671,2.13385,.38617,3.20105-9.15778-1.03088-26.74982,1.72949-37.1875,12.65436-5.18878,5.43091-5.97083,10.11932-6.15466,11.62543-.81549,6.67981,2.43512,13.78888,5.13202,14.31116,.7962,4.9729,3.2912,9.08545,5.33881,9.04968,2.56726-.04474,2.11298-6.56738,8.20618-13.677,4.25165-4.96088,9.30756-7.42633,12.30927-8.89001,6.4472-3.1438,10.19318-3.05139,14.8374-5.61212,.09326,.68964,.19263,1.37915,.28693,2.06879-8.50714,1.42749-18.2218,5.07568-24.95593,12.12408-5.18878,5.43091-5.97083,10.11932-6.15466,11.62543-.50238,4.11517,.54297,8.38831,2.0473,11.19452-4.09241,4.29834-5.22382,8.7865-7.47339,17.72644-1.43719,5.71136-1.12329,7.73785,0,8.89001,.92889,.95294,2.39648,1.29254,8.20618,.68384,6.30219-.66028,9.45331-.99054,12.30927-2.05151,4.51764-1.67828,7.6322-4.56091,13.67694-10.25775,2.48566-2.34259,4.58746-4.3327,6.30084-6.06848,.89148,.3042,1.72803,.53577,2.57294,.70245,.09814,.01935,.19489,.03345,.2926,.05133,1.55884,9.23834,3.20593,18.44904,4.93909,27.62152-5.63824,1.25842-10.45575,4.96954-13.10291,10.31085l-20.91888,42.20276c-1.32062,2.66357-2.0188,5.64331-2.0188,8.61694v108.51923c0,10.69971,8.70465,19.40436,19.4043,19.40436h48.82788c10.69965,0,19.4043-8.70465,19.4043-19.40436v-99.92529c0-2.43585-.45123-4.82092-1.34137-7.08905l-19.93677-50.79626c-2.88269-7.34442-9.77155-12.1261-17.62646-12.29858,4.07281-10.74463,8.27454-21.47644,12.62347-32.16461,.67017-.25989,1.26324-.52997,1.7785-.81635,.80225,.87988,2.44623,1.90582,5.93207,3.573,5.71655,2.73401,8.57489,4.10095,11.5639,4.69067,4.72815,.93298,8.8905,.10547,17.02234-1.58765,11.06464-2.30365,16.62061-3.52112,17.77802-6.74054,1.60187-4.45551-3.42249-10.19519-4.80725-11.77698-3.00977-3.43829-6.33191-5.00604-8.38452-5.94879-2.66553-1.2243-10.26251-4.7135-19.44604-2.30719-5.7804,1.51453-9.09082,4.74915-15.71204,11.2182-.63751,.62286-1.18793,1.18933-1.6767,1.71692-.11005-.31647-.23431-.62958-.37067-.93988,.92853-2.23895,1.85724-4.47681,2.797-6.71106,6.78979-6.44135,10.13116-9.98773,9.49689-13.03253-.29767-1.42896-1.19806-2.63086-2.35706-3.63043,1.28796-2.95746,2.57867-5.91248,3.88513-8.85809,.60065-.01385,1.22028-.04211,1.88757-.10504,3.4986-.3299,7.45966-.70325,7.88214-2.38348,.22345-.88885-.54614-2.18842-2.05853-3.65161,2.18549-.61011,5.51459-5.05865,12.98737-7.46667,6.21869-2.00385,11.81732-1.46021,15.14124-1.13745,8.57758,.83289,11.3764,3.61713,19.08832,2.89001,3.4986-.3299,7.45966-.70325,7.88214-2.38354,.1897-.75446-.34064-1.80615-1.42578-3.00061,1.94342,.26801,4.02271,.48083,6.23914,.60815,3.73865,.21478,5.61328,.30756,5.86835-.40997,.91321-2.56812-18.31183-14.30511-40.06976-15.76831-5.28253-.35522-9.10211,.00586-11.99261,.71466,6.95459-2.59576,17.30505-6.54297,28.66821-3.34766,3.91199,1.09998,11.82867,4.13934,23.52582,4.81128,3.73865,.21478,5.61328,.30756,5.86835-.40997,.91284-2.56702-18.29584-14.2948-40.04242-15.76605,5.04742-1.02026,10.70898-1.30536,16.64825,.36475,3.91199,1.09998,11.82867,4.13934,23.52582,4.81128,3.73865,.21478,5.61328,.30756,5.86835-.40997,.91321-2.56812-18.31183-14.30511-40.06976-15.76831Zm-100.51245,44.96552c.29462-.23151,.5835-.46344,.86188-.69507,.49915,.73309,1.02631,1.29694,1.55353,1.65356,.05615,.29419,.11639,.58429,.18372,.87054-.74286-.07953-1.5387-.13361-2.38141-.16156-.07098-.55566-.1474-1.11182-.21771-1.66748Zm42.97211-38.48004c.08496,.48688,.177,.98315,.27844,1.49115-.92957-.17804-1.99426-.30475-3.15857-.38,.92853-.33807,1.88727-.70483,2.88013-1.11115Zm2.21423,9.19958c-.71375-.07172-1.47711-.11902-2.28009-.14404,.62781-.47772,1.24835-.96283,1.82312-1.4455,.14691,.52649,.29889,1.05634,.45697,1.58954Zm-16.46246,15.84619c7.36334-3.4585,11.17657-2.72144,17.21289-7.25818,.56189-.4223,1.13776-.85583,1.69678-1.29236,2.00317,5.34119,4.40063,10.43616,6.87024,14.12903-6.91602-3.4917-16.41779-6.32928-25.77991-5.57849Zm17.72534-44.05536c.22211,2.91449,.93726,6.61896,2.00171,10.60028-.06055-.00049-.12067-.00104-.18195-.00128-2.64246-1.32953-4.09821-1.92065-4.60706-1.63391-.52985,.29858-.88489,.96094-1.08588,1.91394-8.30444,.79108-19.49768,3.32867-29.78015,8.72571-9.0907,4.77161-12.11377,8.96686-13.67694,12.30927-.66638,1.4248-1.21094,3.00439-1.61084,4.59137-.20508-1.84052-.41608-3.67792-.61426-5.52167,4.46887-1.73889,11.2254-18.53296,27.94672-23.27588,3.78693-1.07416,11.73438-2.57458,21.60864-7.70782Zm-48.64569,59.14832c.12323-.0896,.24182-.16779,.36694-.26184,.19073-.14337,.38324-.28815,.57611-.43378,.02899,.22766,.06018,.45551,.08923,.68317-.33917,.00049-.68146,.00366-1.03229,.01245Zm3.70374,9.88495c.53925-.3443,1.0885-.71484,1.66321-1.14679,.86493-.65002,1.7644-1.32648,2.58087-1.99976,.63239,.63715,1.28064,1.01038,1.88995,.99976,.2384-.00415,.44452-.08154,.63849-.19269-.52399,1.56787-.83276,3.10431-.93103,4.46979-1.72046,.06018-3.56018,.21509-5.48291,.48938-.11938-.87335-.24084-1.7464-.35858-2.61969Zm22.00385,74.59833h-6.95258c-.99579,0-1.9762,.08008-2.93823,.22479-1.70416-9.01904-3.32452-18.07501-4.86005-27.1579,4.08856,.45306,8.16809-.36536,15.30634-1.85162,5.05768-1.05298,8.95178-1.87994,11.81348-2.77399-4.25763,10.48865-8.3775,21.01697-12.36896,31.55872Zm16.27789-43.74896c.57172-.53326,1.17706-1.10266,1.80792-1.6969-.38556,.92224-.76086,1.84839-1.14447,2.77142-.21381-.37115-.43634-.72894-.66345-1.07452Zm3.51544-24.5838c-4.36371-1.35583-8.01514-.9541-10.25769-.68384-2.81171,.33881-10.64093,1.2995-17.08954,7.53333-2.15253-.05658-4.5896,.06238-7.18646,.38867,1.38269-.63434,2.81378-1.45856,4.39972-2.65051,2.8092-2.11127,5.98969-4.50159,5.47083-6.1546-.23975-.76361-1.29242-1.39716-2.91998-1.85016,1.83331-1.21484,4.11053-2.46686,7.02698-3.40662,6.21869-2.00391,11.81732-1.46027,15.14124-1.13751,7.1955,.69873,10.33362,2.763,15.70764,2.98334-1.1814,2.66669-2.34705,5.34283-3.51331,8.01923-2.49506-1.7027-5.57867-2.66827-6.77942-3.04132Zm15.82281-13.98981c.04736-.10474,.09363-.21021,.14093-.31494,.37207-.04321,.73944-.08972,1.09772-.14148,.02557,.53992,.09491,1.02771,.2027,1.4624-.44806-.33301-.93494-.66919-1.44135-1.00598Zm11.28967-20.44879c-.03333,.02197-.06616,.04718-.09943,.0694,.07947-.2854,.15393-.55994,.22607-.82874,.61279-.08453,1.31311-.25696,2.09436-.49603-.83722,.40076-1.57031,.82642-2.22101,1.25537Z" fill="#f2f2f2" />
                    <g>
                        <polygon points="241.17251 640.85807 256.4246 640.85658 263.68011 582.02643 241.16945 582.02801 241.17251 640.85807" fill="#ffb6b6" />
                        <path d="M293.42808,640.51208h0c.4749,.79982,.72548,3.38126,.72548,4.31137h0c0,2.85894-2.31759,5.17662-5.17662,5.17662h-47.23394c-1.95035,0-3.53151-1.58107-3.53151-3.53151v-1.9665s-2.33662-5.91036,2.47406-13.19519c0,0,5.97903,5.70414,14.91325-3.23007l2.63462-4.77281,19.07102,13.94758,10.57078,1.30116c2.31267,.28464,4.36307-.04418,5.55268,1.95935h.00019Z" fill="#2f2e41" />
                    </g>
                    <g>
                        <polygon points="325.17251 640.85807 340.4246 640.85658 347.68011 582.02643 325.16945 582.02801 325.17251 640.85807" fill="#ffb6b6" />
                        <path d="M377.42808,640.51208h0c.4749,.79982,.72548,3.38126,.72548,4.31137h0c0,2.85894-2.31759,5.17662-5.17662,5.17662h-47.23394c-1.95035,0-3.53151-1.58107-3.53151-3.53151v-1.9665s-2.33662-5.91036,2.47406-13.19519c0,0,5.97903,5.70414,14.91325-3.23007l2.63462-4.77281,19.07102,13.94758,10.57078,1.30116c2.31267,.28464,4.36307-.04418,5.55268,1.95935h.00019Z" fill="#2f2e41" />
                    </g>
                    <path d="M319.04527,172.54728s17.56693-8,28.78346,0,21.21654,80,9.21654,92c-12,12-32-15-32-15l-6-77Z" fill="#ffb6b6" />
                    <path d="M252.65354,173.5s-17.56693-8-28.78346,0-21.21654,80-9.21654,92,32-15,32-15l6-77Z" fill="#ffb6b6" />
                    <path d="M253.15354,262s-6,27-13,39l51,30,40-26s-19-31-16-40l-62-3Z" fill="#ffb6b6" />
                    <g>
                        <polygon points="600.62661 637.85995 581.03981 637.85804 571.72225 562.30808 600.63055 562.31011 600.62661 637.85995" fill="#ffb6b6" />
                        <path d="M533.51976,637.41563h0c-.60986,1.02713-.93166,4.34223-.93166,5.53669h0c0,3.67146,2.97626,6.64784,6.64784,6.64784h60.65805c2.50465,0,4.53519-2.03042,4.53519-4.53519v-2.52539s3.00069-7.59011-3.1772-16.94533c0,0-7.6783,7.32528-19.15166-4.14808l-3.38339-6.12927-24.4911,17.91155-13.57505,1.67096c-2.96994,.36554-5.60307-.05673-7.13077,2.51621h-.00024Z" fill="#2f2e41" />
                    </g>
                    <g>
                        <polygon points="661.17138 637.85995 641.58458 637.85804 632.26702 562.30808 661.17531 562.31011 661.17138 637.85995" fill="#ffb6b6" />
                        <path d="M594.06453,637.41563h0c-.60986,1.02713-.93166,4.34223-.93166,5.53669h0c0,3.67146,2.97626,6.64784,6.64784,6.64784h60.65805c2.50465,0,4.53519-2.03042,4.53519-4.53519v-2.52539s3.00069-7.59011-3.1772-16.94533c0,0-7.6783,7.32528-19.15166-4.14808l-3.38339-6.12927-24.4911,17.91155-13.57505,1.67096c-2.96994,.36554-5.60307-.05673-7.13077,2.51621h-.00024Z" fill="#2f2e41" />
                    </g>
                    <g>
                        <path d="M559.87774,202.03374s-2.8368,18.25975,.44853,30.04219l-48.24223,85.54714,18.76617,13.67763,62.67044-78.85065,8.68465-38.9589-42.32756-11.45741Z" fill="#ffb6b6" />
                        <ellipse cx="514.78625" cy="336.30896" rx="24.50622" ry="15.13619" transform="translate(-31.019 619.51423) rotate(-60.58023)" fill="#ffb6b6" />
                    </g>
                    <path d="M578.69796,289.07025s-23.06467,16.27694-15.13619,40.57317l-6.48694,81.95791,14.41542,168.66042h31.04991l4.98864-121.08954,20.18159-76.40173,2.61634,197.49127,38.46761-.72077s2.16231-98.74563-.72077-104.5118c-2.88308-5.76617,0-1.14075,0-1.14075l23.78544-115.64119-3.60386-79.26779-109.5572,10.09079Z" fill="#2f2e41" />
                    <polygon points="635.63888 87.97513 593.83416 103.83209 598.15878 115.36443 563.56177 141.31219 586.62645 222.03854 573.65257 294.11565 611.13266 292.67411 691.85902 285.4664 683.20977 197.53233 684.65131 112.48135 652.93738 100.94901 635.63888 87.97513" fill="#b800b8" />
                    <path d="M574.37334,139.14987l-10.81157,2.16231s-5.0454,3.60386-5.0454,16.57773,0,21.62313,1.44154,28.83084c0,0-8.64925,23.06467-5.76617,28.83084,2.88308,5.76617,38.92164,5.76617,38.92164,5.76617l-18.74005-82.1679Z" fill="#b800b8" />
                    <path d="M633.94762,54.52454c0,18.14827-14.71208,32.86035-32.86035,32.86035-18.14827,0-32.86035-14.71208-32.86035-32.86035,0-18.14827,14.71208-32.86035,32.86035-32.86035s32.86035,14.71208,32.86035,32.86035Z" fill="#ffb6b6" />
                    <path d="M621.62253,77.40612s5.82133-22.36488-.38166-18.42126l-9.62679-.9148,6.07816-16.25953s-10.8813-8.15741-15.21991-3.38904c-4.33861,4.76837-3.29898,7.45749-7.24261,1.2545s-12.1839-6.08574-19.73144-1.6223c-7.54754,4.46343-13.44559,5.19813-12.01098-3.08411,1.43461-8.28223,.63035-22.3556,5.11118-20.75956,4.48084,1.59603,3.25239,2.49689,5.66857-3.28675s2.72112-8.99257,8.31423-6.51833,19.64857-9.14175,25.45656-2.11402c5.80799,7.02773,10.8813,8.15741,15.9546,9.28709s25.45656-2.11402,23.75179,29.45547c0,0,13.60518,27.19611-10.90181,39.76167,0,0-6.65081-6.56349-11.29436,1.41381l-3.92555-4.80284Z" fill="#2f2e41" />
                    <path d="M306.15354,148l-32,1-17,21-19,4s-6,56,3,76,5,26,5,26l72-1s-2-13.58268,10-25.29134l6.01784-22.27074c3.21745-11.90708,2.12131-24.5683-3.09461-35.74527l-12.92323-27.69264-11-4-1-12Z" fill="#2f2e41" />
                    <path d="M246.15354,288l-4.5,7.5s-14,19-16,73,14.5,228.73622,14.5,228.73622h22.83465l24.68576-236.40945,32.97959,236.67323,29.5,.5-2.5-241.5s-6-55-22-67c0,0-51.5,46.5-79.5-1.5Z" fill="#2f2e41" />
                    <g>
                        <path d="M204.50705,169.53298c0,10.3817-.62537,18.10648-11.96219,18.79773-10.64788,.64924-11.96219-8.41603-11.96219-18.79773s.24795-18.71364,11.96219-18.79773c13.33682-.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <path d="M271.15354,169.53298c0,10.3817,2.72814,18.10653-11.96219,18.79773-11.30138,.53174-11.96219-8.41603-11.96219-18.79773s1.66011-17.63281,11.96219-18.79773c9.69033-1.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <rect x="194.25374" y="160.98856" width="66.64649" height="15.37996" fill="#b800b8" />
                    </g>
                    <g>
                        <path d="M319.50705,166.53298c0,10.3817-.62537,18.10648-11.96219,18.79773-10.64788,.64924-11.96219-8.41603-11.96219-18.79773s.24795-18.71364,11.96219-18.79773c13.33682-.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <path d="M386.15354,166.53298c0,10.3817,2.72814,18.10653-11.96219,18.79773-11.30138,.53174-11.96219-8.41603-11.96219-18.79773s1.66011-17.63281,11.96219-18.79773c9.69033-1.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <rect x="309.25374" y="157.98856" width="66.64649" height="15.37996" fill="#b800b8" />
                    </g>
                    <g>
                        <path d="M493.50705,330.53298c0,10.3817-.62537,18.10648-11.96219,18.79773-10.64788,.64924-11.96219-8.41603-11.96219-18.79773s.24795-18.71364,11.96219-18.79773c13.33682-.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <path d="M560.15354,330.53298c0,10.3817,2.72814,18.10653-11.96219,18.79773-11.30138,.53174-11.96219-8.41603-11.96219-18.79773s1.66011-17.63281,11.96219-18.79773c9.69033-1.09574,11.96219,8.41603,11.96219,18.79773Z" fill="#b800b8" />
                        <rect x="483.25374" y="321.98856" width="66.64649" height="15.37996" fill="#b800b8" />
                    </g>
                    <ellipse cx="343.08857" cy="169.11815" rx="12.99252" ry="21.03551" fill="#ffb6b6" />
                    <circle cx="281.65354" cy="100.5" r="35.5" fill="#ffb6b6" />
                    <path d="M274.52614,111.65484l8.21357-13.0713,3.69905-17.77667s37.41739,9.12619,27.37858-9.12619c-10.03881-18.25239-35.59215-22.81548-52.93192-9.12619l-7.47342,7.30095s16.59961-15.51453,6.5608-20.99025c-10.03881-5.47572-8.21357-9.12619-13.68929-4.5631-5.47572,4.5631-2.73786,8.21357-9.12619,5.47572-6.38834-2.73786-20.07763-6.38834-18.25239-1.82524s-11.9431,16.42715-6.88417,21.90286,.49583,16.42715,9.62203,13.68929c9.12619-2.73786,4.5631,10.95143,12.77667,5.47572,0,0-6.74164,8.59122-1.26592,14.97955s13.91262,8.87381,13,18,21,11,21,11l-1.70502-26.63978s5.42715-4.44956,9.07763,5.29463Z" fill="#2f2e41" />
                    <g>
                        <path d="M635.952,172.91127s-5.23404,17.72205-3.54078,29.83617l-59.1644,78.39133,16.78586,16.04623,72.57675-69.83999,13.77611-37.46248-40.43354-16.97125Z" fill="#ffb6b6" />
                        <ellipse cx="573.44631" cy="300.01798" rx="24.50622" ry="15.13619" transform="translate(-11.47536 576.99832) rotate(-52.957)" fill="#ffb6b6" />
                    </g>
                    <path d="M678.82781,107.74546s18.43162,6.68681,16.08684,19.36535c-2.34478,12.67854-3.23496,21.03684-3.23496,21.03684,0,0,1.99724,6.92547-.60797,10.37731s-15.98067,43.92576-15.98067,43.92576l-48.10713-16.44165s28.20184-78.04673,51.8439-78.26361Z" fill="#b800b8" />
                    <path d="M805.04004,650.40666h0c0,.46393-.3761,.84003-.84003,.84003H.84003c-.46393,0-.84003-.37609-.84003-.84003H0c0-.46394,.37609-.84003,.84003-.84003H804.20001c.46393,0,.84003,.3761,.84003,.84003Z" fill="#e6e6e6" />
                    <path d="M241.60275,170.07087c0,11.61759-5.81695,21.03551-12.99252,21.03551-7.17557,0-12.99252-9.41792-12.99252-21.03551,0-11.61759,5.81695-21.03551,12.99252-21.03551s12.99252,9.41792,12.99252,21.03551Z" fill="#ffb6b6" />
                </svg>



                
            </div>

        </div>
    </div>

    <div class="container-fluid" style="background-color: <?php echo $backgroundColor ?>;">

    <div class="row">

    </div>

    </div>



</main>






































<!-- <main>

    <div class="container-fluid main px-0">
        <br>
        <h1 class="welcome text-center">
            <span class="welcome text-dark">{{ config()->get('config.site.Nom')}}</span>
        </h1>
        <h3 class="welcome text-center">
            <span class="welcome text-dark">Votre salle de sport !</span>
            <span class="welcome text-dark">Votre bien être !</span>
            <span class="welcome text-dark">Votre transformation !</span>

        </h3><br><br><br>
        <div class="justify-content-center text-center">
            <button class="btn btn-success ">EN SAVOIR PLUS</button>
        </div>
        <br><br>
    </div>
    <br><br>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-8 px-0">

                <img class="d-block w-100 h-100 img-responsiv" src="bg.jpg">
            </div>

            <div class="col">
                <h1 class="text-center text-light ">Rejoignez-nous et devenez l'un de nos chers clients !</h1>
                <br>
                <ul class="list-group">
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item">UNE SALLE DE SPORT BIEN ÉQUIPÉ !</h4>
                    </li>
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item bg-success">UN ABONNEMENT A PARTIR DE {{ min(config()->get('config.sports'))}}DH/MOIS.</h4>
                    </li>
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item">DES COACHS PRÊTS À VOUS AIDER POUR BIEN ÉVOLUER.</h4>
                    </li>
                </ul>
                <br><br>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        <h5 class="text-center text-success word"></h5>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <br><br>

    <div class="container">

        <div class="row text-center">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-user-o fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($usercount)}}" data-speed="1500"></h2>
                    <p class="count-text ">Clients</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-users fa-3x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($users)}}" data-speed="1500"></h2>
                    <p class="count-text ">Personnes inscrites sur le site</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-smile-o fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($users)*3}}" data-speed="1500"></h2>
                    <p class="count-text ">Clients satisfaits</p>
                </div>
            </div>
        </div>

    </div>


    <br>
    <div class="container-fluid">

        <h2 class="text-center bg-dark text-light rounded m-3 p-2">Notre emplacement</h2>

        <iframe src="https://www.google.com/{{config()->get('config.site.Map')}}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</main> -->



@endsection