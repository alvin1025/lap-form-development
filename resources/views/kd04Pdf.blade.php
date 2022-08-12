<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD04 Request Modify</title>
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
            bottom: 16.5cm;
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
                <h4>KD04 Request Modify</h4>
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
                    foreach ($data['kd04'] as $row) {
                        echo '<tr>';
                        // echo "<th align=center; colspan=12; >". "NO : " .$row->no_formmis."</th>";
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD04' . '</td>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD04 Modify' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd4no_cust . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd4no_cust . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Debitor' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_debitor_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Debitor' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->no_debitor = $row->no_debitor != '' ? $row->no_debitor : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Creditor' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_creditor_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Creditor' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->no_creditor = $row->no_creditor != '' ? $row->no_creditor : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Group Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_group_cust_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Group Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->no_group_cust = $row->no_group_cust != '' ? $row->no_group_cust : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->credit_cust_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_cust = $row->credit_cust != '' ? $row->credit_cust : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Valid From' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_from_old = $row->credit_from_old != '' ? date('d-m-Y', strtotime($row->credit_from_old)) : '' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Valid From' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_from = $row->credit_from != '' ? date('d-m-Y', strtotime($row->credit_from)) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Valid To' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_to_old = $row->credit_to_old != '' ? date('d-m-Y', strtotime($row->credit_to_old)) : '' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Valid To' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_to = $row->credit_to != '' ? date('d-m-Y', strtotime($row->credit_to)) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Limit' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->credit_limit_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Limit' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_limit = $row->credit_limit != '' ? $row->credit_limit : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Line Check' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->credit_line_check_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Credit Line Check' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->credit_line_check = $row->credit_line_check != '' ? $row->credit_line_check : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block Delivery' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->block_delivery_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block Delivery' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->block_delivery = $row->block_delivery != '' ? $row->block_delivery : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->block_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->block = $row->block != '' ? $row->block : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block Reason' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->block_reason_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Block Reason' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->block_reason = $row->block_reason != '' ? $row->block_reason : '-' . '</td>');
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                    
                    foreach ($data['kd04'] as $row) {
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
