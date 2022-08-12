<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD06 Request Modify</title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td {
            border: 1px solid #ddd;
            /* padding: 3px; */
        }

        #watermark {
            position: fixed;
            /* font-size: 20%; */
            /* font-weight: bold;
                color: red; */

            /**
                    Set a position in the page for your image
                    This should center it vertically
                **/
            bottom: 15.5cm;
            left: 3.5cm;

            /** Change image dimensions**/
            width: 8cm;
            height: 8cm;

            /** Your watermark should be behind every content**/
            z-index: -1000;
        }

        #watermark p {
            font-size: 500%;
            font-weight: bold;
            color: #CCD6A6;
            transform: rotate(8deg) translateX(-3%);

        }

        /* #table tr:nth-child(even){background-color: #f2f2f2;} */

        /* #table tr:hover {background-color: #ddd;} */

        /* #table tr {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            } */
    </style>
</head>

<body>


    <main>
        <div class="col-lg" style="border:black; border-width:0.5px; border-style:solid;">
            <div style="text-align:center; font-size: 24px;">
                <h4>KD06 Request New</h4>
            </div>
            <table id="table">
                <thead>
                    {{-- <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr> --}}
                </thead>
                <tbody>
                    <?php
                    foreach ($data['kd06'] as $row) {
                        echo '<tr>';
                        // echo "<th align=center; colspan=12; >". "NO : " .$row->no_formmis."</th>";
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=12; style="font-size: 14; font-weight:900">' . 'KD06' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; ">' . $row->kd6no_cust . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Sales' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sales = $row->sales != '' ? $row->sales : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SD' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sd = $row->sd != '' ? $row->sd : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SG' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kd6sg = $row->kd6sg != '' ? $row->kd6sg : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Assignment' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->assigment = $row->assigment != '' ? $row->assigment : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Payterm' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->payterm = $row->payterm != '' ? substr($row->payterm, 5, 20) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Del Term' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->del_con = $row->del_con != '' ? $row->del_con : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Tax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->payterm = $row->payterm != '' ? substr($row->kd6tax, 10, 20) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Kurs' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kurs = $row->kurs != '' ? $row->kurs : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Satuan' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->satuan = $row->satuan != '' ? $row->satuan : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Bisnis Type' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->biz_type_p1 = $row->biz_type_p1 != '' ? $row->biz_type_p1 : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Nama Agent' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->nama_agent1 = $row->nama_agent1 != '' ? $row->nama_agent1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Staff Member' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->staff_member = $row->staff_member != '' ? $row->staff_member : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . '%-Com' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->allowance_qty = $row->allowance_qty != '' ? $row->allowance_qty : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Validation From' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->from = $row->from != '' ? date('d-m-Y', strtotime($row->from)) : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Validation To' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->to = $row->to != '' ? date('d-m-Y', strtotime($row->to)) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Print' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->print_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Percent' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->pc = $row->pc != '' ? $row->pc : '-' . '</td>');
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                    foreach ($data['kd06'] as $row) {
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=2;  style="font-size: 8;">' . 'Request By' . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=2;  style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->created_by . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->submitted_by . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->acknowledged_by . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->aprv1_by . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->aprv2_by . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->inputted_by . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=2;  style="font-size: 7;">' . date('d-m-Y', strtotime($row->created_date)) . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 7;">' . date('d-m-Y', strtotime($row->submited_date)) . '</td>';
                        echo '<td align=center; colspan=2; style="font-size: 7;">' . date('d-m-Y', strtotime($row->ack_date)) . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 7;">' . date('d-m-Y', strtotime($row->aprv1_date)) . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 7;">' . date('d-m-Y', strtotime($row->aprv2_date)) . '</td>';
                        echo '<td align=center; colspan=2;  style="font-size: 7;">' . date('d-m-Y', strtotime($row->inputed_date)) . '</td>';
                        echo '</tr>';
                    }
                    
                    ?>
                </tfoot>
            </table>
        </div>
    </main>

    {{-- <small>FX-KXSA-001 | A.00-1</small> --}}
</body>

</html>
