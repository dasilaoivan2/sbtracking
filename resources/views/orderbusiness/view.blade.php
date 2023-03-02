<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Legislative Tracking</title>
</head>
<style>
    body {
        font-family: "Nunito";
        margin: 0px;
    }

    body.long-size {
        width: 8.5in;
        height: 13in;
        /*border: solid 1px black;*/
        page-break-after: always;
    }

    .text {
        font-size: 8px;
    }

    .header {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        /*border: solid black 1px;*/
        /*border-collapse: collapse;*/
    }

    #logo1 {
        position: relative;

    }

    #logo2 {
        position: absolute;
        top: 5px;
        left: 650px;
    }

    .border {
        border: solid black 1px;
        border-collapse: collapse;
    }

    .content {
        width: 100%;
        float: left;
        /*display: block;*/
        font-size: x-large;
    }

    .title {
        font-weight: bold;
        font-size: 14pt;
    }

    .data {
        font-size: 12pt;
    }

    .title-indent {
        text-indent: 30px;
    }

    .data-indent {
        text-indent: 30px;
    }

    ul.d {
        list-style-type: lower-alpha;
    }

    .font-normal {
        font-size: 12pt;
    }

    .font-11 {
        font-size: 11pt;
    }

    .bold {
        font-weight: bold;
    }

    .bolder {
        font-weight: bolder;
    }

    .underline {
        text-decoration: underline;
    }

    .text-justify {
        text-align: justify;
    }

    .text-center {
        text-align: center;
    }

    .bg-gray {
        background-color: lightblue;

    }

    .border-bottom {
        border-bottom: solid 2px black;
    }

    .qr {
        /*border: 1px solid black;*/
        background-repeat: no-repeat;
        display: inline-flex;

    }

    .center {
        margin: auto;
        width: 100%;
        padding: 10px;
    }
</style>

<body class="long-size center">

    <br>
    <br>
    @php
    $numberFormatter = new NumberFormatter('en_US', NumberFormatter::ORDINAL);
    @endphp

    <div class="header">
        <table>
            <tr>
                <td style="font-size: 16pt; font-weight: bold">ORDER OF BUSINESS</td>
            </tr>

            <tr>
                <td style="font-size: 14pt; font-weight: bold">{{$numberFormatter->format($orderbusiness->number_order_sb)}} SANGGUNIANG BAYAN</td>
            </tr>


            <tr>
                <td style="font-size: 14pt; font-weight: bold">{{$numberFormatter->format($orderbusiness->number_order_session)}} {{$orderbusiness->ordercategory->name}}</td>
            </tr>

            <tr>
                <td style="font-size: 12pt; font-weight: bold">{{Carbon\Carbon::parse($orderbusiness->session_date)->format('F d, Y')}}</td>
            </tr>
        </table>
    </div>

    <br>
    <br>

    <div class="content">
        <table>
            <tr>
                <td class="font-normal bold" colspan="4"> I. CALL TO ORDER</td>
            </tr>

        </table>
        <br>
        <table>

            <tr>
                <td class="font-normal bold"> II. INVOCATION:</td>
                <td width="150px"></td>
                <td class="font-normal bold"> {{$orderbusiness->invocation}}</td>
            </tr>

        </table>

        <br>
        <table>

            <tr>
                <td class="font-normal bold" width="350px"> III. SINGING OF THE NATIONAL ANTHEM AND MUNICIPAL HYMN:</td>
                <td class="font-normal bold"></td>
            </tr>

        </table>

        <br>
        <table>

            <tr>
                <td class="font-normal bold"> IV. VICE MAYOR'S AND PCL CREED:</td>
                <td width="150px"></td>
            </tr>

        </table>

        <br>
        <table>

            <tr>
                <td class="font-normal bold"> V. ROLL CALL</td>
            </tr>


        </table>
        <br>

        <table style="margin-left:100px">

            <tr>
                <td width="300px" class="font-normal bold">HON. REYNALDO L. BAGAYAS, JR.</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Municipal Vice Mayor</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. MIGUEL D. DEMATA</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. JAY S. ALBARECE</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Majority Floor Leader</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. RINA EDROTE QUIÑO</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. ELZEVIR A. DAGUNLAY</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. JOY LAVISORES CORDOVEZ</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. CHRISTY LEPARTO SALABE</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. RAQUEL ABALES BAYACAG</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. JUNIDINI J. ARTAJO </td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">Sangguniang Bayan Member</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. FLORAMAE D. PENASO</td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">ABC President</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. ALEX D. PAYANGGA </td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">IPMR</td>
            </tr>
            <tr>
                <td width="300px" class="font-normal bold">HON. JOHN ANTHONY G. LEYSON </td>
                <td width="100px" class="font-normal bold">-</td>
                <td class="font-normal bold">SK Federation Rep.</td>
            </tr>


        </table>
        <br>
        <table>

            <tr>
                <td class="font-normal bold"> VI. {{$orderbusiness->reading}}</td>
            </tr>


        </table>
        <br>
        <table>

            <tr>
                <td class="font-normal bold"> VII. REFERENCE OF BUSINESS</td>
            </tr>


        </table>

        @php
        $count = 1;
        @endphp

        <table style="margin-left: 50px;">

            @foreach($orderbusiness->businessreferences as $reference)

            <tr>
                <td>
                    <table style="margin-left: 20px; margin-top:15px">
                        <tr>
                            <td class="font-normal bold">{{$count++}}. {{ $reference->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-normal"><a href="{{asset('storage/referencefile/'.$reference->referencefile)}}" target="_blank">{{$reference->referencefile}}</a></td>
                        </tr>
                    </table>
                </td>

            </tr>


            @endforeach

        </table>
        <br>


        <table>

            <tr>
                <td class="font-normal bold"> VIII. COMMUNICATIONS</td>
            </tr>


        </table>
        <br>
        @php
        $count = 1;
        @endphp
        <table style="margin-left: 80px;">

            @foreach($orderbusiness->incomingdocuments as $incomingdocument)
            <tr>
                <td class="font-normal bold">{{$count++}}. {{ $incomingdocument->description}}</td>
            </tr>
            @foreach($incomingdocument->referrals as $referral)
            <tr>
                <td>
                    <table style="margin-left: 20px; margin-top:15px">
                        <tr>
                            <td class="font-normal bold">TO THE {{ $referral->referraltype->name}}</td>
                        </tr>

                    </table>
                </td>
            </tr>

            @endforeach
            <tr>
                <td>
                    <table style="margin-top:10px">
                        @if(count($incomingdocument->files) > 0)
                        <tr>
                            <td class="font-normal">FILES:</td>
                        </tr>
                        @foreach($incomingdocument->files as $incdocfile)

                        <tr>
                            <td class="font-normal"><a href="{{asset('storage/incomingdocuments/'.$incdocfile->filename)}}" target="_blank">{{$incdocfile->filename}}</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                    <br>
                </td>
            </tr>



            @endforeach




        </table>
        <br>
        <table>

            <tr>
                <td class="font-normal bold"> IX. COMMITTEE REPORT</td>
            </tr>


        </table>
        <br>



        <table style="margin-left: 80px;">
            @php
            $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l' ,'m', 'n'];
            $row = 0;
            $count = 1;
            @endphp

            @foreach($orderbusiness->activities as $activity)
            <tr>
                <td class="font-normal bold">{{$count++}}. {{ $activity->referral->referraltype->name}}</td>
            </tr>
            <tr>
                <td>

                    <table style="margin-left: 20px; margin-top:15px">
                        <tr>
                            <td class="font-normal bold">{{$letters[$row++]}}. {{ $activity->description}}</td>
                        </tr>
                        <tr>
                            <td class="font-normal bold">Subject: {{ $activity->subject}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-top:10px">
                        @if(count($activity->files) > 0)
                        <tr>
                            <td class="font-normal">FILES:</td>
                        </tr>
                        @foreach($activity->files as $activityfile)

                        <tr>
                            <td class="font-normal"><a href="{{asset('storage/activityfiles/'.$activityfile->filename)}}" target="_blank">{{$activityfile->filename}}</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                    <br>
                </td>
            </tr>
            @endforeach
        </table>
        <br>

        <table>

            <tr>
                <td class="font-normal bold"> X. CALENDAR OF BUSINESS</td>
            </tr>


        </table>
        <br>
        @php
        $count = 1;
        @endphp
        <table style="margin-left: 80px;">
            <tr>
                <td class="font-normal bold">
                    <table style="margin-bottom:10px">
                        <tr>
                            <td>A. UNIFINISHED BUSINESS</td>
                        </tr>
                    </table>
                </td>
            </tr>

            @foreach($orderbusiness->incomingdocuments as $incomingdocument)
            <tr>
                <td class="font-normal bold">{{$count++}}. {{ $incomingdocument->description}}</td>
            </tr>

            <tr>
                <td>
                    <table style="margin-top:10px">
                        @if(count($incomingdocument->files) > 0)
                        <tr>
                            <td class="font-normal">FILES:</td>
                        </tr>
                        @foreach($incomingdocument->files as $incdocfile)

                        <tr>
                            <td class="font-normal"><a href="{{asset('storage/incomingdocuments/'.$incdocfile->filename)}}" target="_blank">{{$incdocfile->filename}}</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                    <br>
                </td>
            </tr>



            @endforeach

            <tr>
                <td class="font-normal bold">
                    <table style="margin-bottom:10px">
                        <tr>
                            <td>B. BUSINESS OF THE DAY</td>
                        </tr>
                    </table>
                </td>
            </tr>




        </table>
        <table>

            <tr>
                <td class="font-normal bold"> XI. OTHER MATTERS</td>
            </tr>



        </table>
        <br>
        @php
        $count = 1;
        @endphp
        <table style="margin-left: 50px;">
            

            @foreach($orderbusiness->othermatters as $othermatters)
            <tr>
                <td class="font-normal bold">{{$count++}}. {{ $othermatters->description}}</td>
            </tr>

            



            @endforeach


        </table>
        <br>

        <table>

            <tr>
                <td class="font-normal bold"> XII. ADJOURNMENT</td>
            </tr>


        </table>
        <br>


        <table>

            <tr>
                <td class="font-normal bold"> ORDER OF BUSINESS FILES</td>
            </tr>



        </table>
        <br>

        <table style="margin-left: 80px;">
            @foreach($orderbusiness->orderbusfiles as $orderbusfile)
            <tr>
                <td class="font-normal"><a href="{{asset('storage/orderbusiness/'.$orderbusfile->filename)}}" target="_blank">{{$orderbusfile->filename}}</a></td>
            </tr>

            @endforeach
        </table>







        <script>
            function printwindow() {
                window.print();
            }
        </script>
</body>

</html>