<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>Customer Data</title>
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

        body {
            background-image: url(https://pngimg.com/uploads/approved/approved_PNG44.png);
            background-position: bottom right;
            background-repeat: no-repeat;
        }

        /* #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        } */

        .page-break {
            page-break-after: always;
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
                bottom:   13.5cm;
                left:     3.5cm;

                /** Change image dimensions**/
                width:    8cm;
                height:   8cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }

            #watermark p {
                font-size: 600%;
                font-weight: bold;
                color: 	#CCD6A6;
                transform:rotate(10deg) translateX(-5%);

            }

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
    <div id="watermark">
        <p>
            APPROVED
        </p>
    </div>

<main>
    <div style="text-align:center; font-size: 24px;">
        <h4> Data Customer</h4>
    </div>
    <div class="col-lg">
        <table id="table">
            <thead>
            </thead>
            <tbody>
                <?php
                foreach ($data['kd03'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD03 CUSTOMER MAIN ADDRESS' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;colspan=2; style="font-weight: 900">' . 'Cust No.' . '</td>';
                    echo '<td align=left; colspan=8;>' . $row->no_cust . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Short Name' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->short_name . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:bolder">' . 'Title' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->title . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Class' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . substr($row->class, 4, 20) . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Nama' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9;">' . $row->nama1 . ' ' . $row->nama2 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Street' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9;">' . $row->street . ' ' . $row->addit . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Country' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->negara . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'City' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->kota . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Postal Code' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->postal_code . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Email' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9; width: 200px; word-break:break-all; word-wrap:break-word;">' . $row->email . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->mobile . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Phone' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->telp . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'PO BOX' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->po_box . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Tax' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->tax . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Fax' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->fax . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'NPWP' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->npwp . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Freight' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9; word-wrap: break-word;">' . $row->kode_county . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                }
                
                foreach ($data['kd04'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD04 DEBTOR DATA' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Creditor No.' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->no_creditor . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Debitor No.' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->no_debitor . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Credit Cust.' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->credit_cust . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Group Cust No.' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->no_group_cust . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Valid From' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->credit_from . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Valid To' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->credit_to . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Credit Line Check' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->credit_line_check . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Block' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->block . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Block Delivery' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->block_delivery . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Block Reason' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->block_reason . '</td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd05'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD05 ADDITIONAL ADDRESSES' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; ; style="font-size: 9; font-weight:900">' . 'Title' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->title1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . '' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . '' . '</td>';
                    echo '<td align=left; ; style="font-size: 9; font-weight:900">' . 'Address Code' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->addresscode1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Name' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9;">' . $row->nama11 . ' ' . $row->nama21 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Street' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9; word-break:break-all; word-wrap:break-word;">' . $row->street1 . ' ' . $row->addit1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Country' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->kd5negara1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'City' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->kota1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Postal Code' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->postal_code1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Email' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9; width: 200px; word-break:break-all; word-wrap:break-word;">' . $row->email1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->mobile1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Phone' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->telp1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'PO BOX' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->po_box1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Tax' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->tax1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Fax' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->fax1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'NPWP' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->npwp1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Freight' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9; word-break:break-all; word-wrap:break-word;">' . $row->kode_county1 . '</td>';
                    echo '</tr>';
                }
                foreach ($data['kd06'] as $row) {
                    echo '<tr>';
                    echo '<td></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD06 SALES CONDITION' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'SD' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->sd . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'SG' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->kd6sg . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Sales' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->sales . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Payterm' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . substr($row->payterm, 5, 20) . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Assignment' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->assigment . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Del Term' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->del_con . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Bisnis Type' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->biz_type_p1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Satuan' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->satuan . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Allowance QtY' . '</td>';
                    echo '<td align=left; style="font-size: 9;">' . $row->allowance_qty . '%' . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Tax' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . substr($row->kd6tax, 10, 20) . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Agent' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9;">' . $row->nama_agent1 . '</td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd11'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD11 ASSOCIATION LIST' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Association' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->association_no1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Central regu' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->central_regu1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'SD' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->sd1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'SG' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->sg1 . '</td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd14'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD14 CONTACT' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Nama' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->nama_cp1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Contact Person' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9;">' . $row->cp1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=2; style="font-size: 9;">' . $row->mobile_cp1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Phone' . '</td>';
                    echo '<td align=left; style="font-size: 9; width: 120px; word-break:break-all; word-wrap:break-word;">' . $row->phone_cp1 . '</td>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Email' . '</td>';
                    echo '<td align=left; colspan=3; style="font-size: 9; word-break:break-all; word-wrap:break-word;">' . $row->email_cp1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; style="font-size: 9; font-weight:900">' . 'Function' . '</td>';
                    echo '<td align=left; colspan=8; style="font-size: 9;">' . $row->function_cp1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '</tr>';
                    echo '<br>';
                    echo '</tr>';
                }
                
                
                ?>
            </tbody>
            <tfoot>
                <?php
                    
                    foreach ($data['kd03'] as $row) {
                    echo '<tr>';
                    echo '<td align=center; style="font-size: 8;">' . 'Request By' . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 8;">' . 'Approve By' . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 8;">' . 'Approve By' . '</td>';
                    echo '<td align=center; style="font-size: 8;">' . 'Approve By' . '</td>';
                    echo '<td align=center; style="font-size: 8;">' . 'Approve By' . '</td>';
                    echo '<td align=center; colspan=2;  style="font-size: 8;">' . 'Approve By' . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=center; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->created_by . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 8;">' . $row->submitted_by . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 8; width: 50px; word-break:break-all; word-wrap:break-word;">' . $row->acknowledged_by . '</td>';
                    echo '<td align=center; style="font-size: 8; width: 120px; word-break:break-all; word-wrap:break-word;">' . $row->aprv1_by . '</td>';
                    echo '<td align=center; style="font-size: 8;">' . $row->aprv2_by . '</td>';
                    echo '<td align=center; colspan=2;  style="font-size: 8;">' . $row->inputted_by . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=center; style="font-size: 7;">' . date('d-m-Y', strtotime($row->created_date)) . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 7;">' . date('d-m-Y', strtotime($row->submited_date)) . '</td>';
                    echo '<td align=center; colspan=2; style="font-size: 7;">' . date('d-m-Y', strtotime($row->ack_date)) . '</td>';
                    echo '<td align=center; style="font-size: 7;">' . date('d-m-Y', strtotime($row->aprv1_date)) . '</td>';
                    echo '<td align=center; style="font-size: 7;">' . date('d-m-Y', strtotime($row->aprv2_date)) . '</td>';
                    echo '<td align=center; colspan=2;  style="font-size: 7;">' . date('d-m-Y', strtotime($row->inputed_date)). '</td>';
                    echo '</tr>';
                }
                    
                    
                    ?>
            </tfoot>
        </table>
    </div>
</main>

    
    {{-- <div class="page-break"></div>
    <h1>Page2</h1>
    <div class="col-lg">
        <table id="table">
            <thead>
            </thead>
            <tbody>
                <?php
                foreach ($data['kd03'] as $row) {
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD03 CUSTOMER MAIN ADDRESS' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;colspan="."2".">' . 'Cust No.' . '</td>';
                    echo '<td align=left>' . $row->no_cust . '</td>';
                    echo '<td align=left;>' . 'Short Name' . '</td>';
                    echo '<td align=left>' . $row->short_name . '</td>';
                    echo '<td align=left;>' . 'Title' . '</td>';
                    echo '<td align=left>' . $row->title . '</td>';
                    echo '<td align=left;>' . 'Class' . '</td>';
                    echo '<td align=left>' . $row->class . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Nama' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->nama1 . ' ' . $row->nama2 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Street' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->street . ' ' . $row->addit . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Country' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->negara . '</font></td>';
                    echo '<td align=left;>' . 'City' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->kota . '</font></td>';
                    echo '<td align=left;>' . 'Postal Code' . '</td>';
                    echo '<td align=left>' . $row->postal_code . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Email' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->email . '</font></td>';
                    echo '<td align=left;>' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->mobile . '</font></td>';
                    echo '<td align=left;>' . 'Phone' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->telp . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'PO BOX' . '</td>';
                    echo '<td align=left>' . $row->po_box . '</td>';
                    echo '<td align=left;>' . 'Tax' . '</td>';
                    echo '<td align=left>' . $row->tax . '</td>';
                    echo '<td align=left;>' . 'Fax' . '</td>';
                    echo '<td align=left>' . $row->fax . '</td>';
                    echo '</tr>';
                
                    echo '<tr>';
                    echo '<td align=left; >' . 'NPWP' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->npwp . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Freight' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->kode_county . '</font></td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd04'] as $row) {
                    echo '<br>';
                    echo '<br>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD04 DEBTOR DATA' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Creditor No.' . '</td>';
                    echo '<td align=left>' . $row->no_creditor . '</td>';
                    echo '<td align=left;>' . 'Debitor No.' . '</td>';
                    echo '<td align=left>' . $row->no_debitor . '</td>';
                    echo '<td align=left;>' . 'Credit Cust.' . '</td>';
                    echo '<td align=left>' . $row->credit_cust . '</td>';
                    echo '<td align=left;>' . 'Group Cust No.' . '</td>';
                    echo '<td align=left>' . $row->no_group_cust . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Valid From' . '</td>';
                    echo '<td align=left>' . $row->credit_from . '</td>';
                    echo '<td align=left;>' . 'Valid To' . '</td>';
                    echo '<td align=left>' . $row->credit_to . '</td>';
                    echo '<td align=left;>' . 'Credit Line Check' . '</td>';
                    echo '<td align=left>' . $row->credit_line_check . '</td>';
                    echo '<td align=left;>' . 'Block' . '</td>';
                    echo '<td align=left>' . $row->block . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Block Delivery' . '</td>';
                    echo '<td align=left; textcolor=white; colspan=' . '4' . "><font color=\"#000000\">" . $row->block_delivery . '</font></td>';
                    echo '<td align=left;>' . 'Block Reason' . '</td>';
                    echo '<td align=left; textcolor=white; colspan=' . '4' . "><font color=\"#000000\">" . $row->block_reason . '</font></td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd05'] as $row) {
                    echo '<br>';
                    echo '<br>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD05 ADDITIONAL ADDRESSES' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Title' . '</td>';
                    echo '<td align=left; textcolor=white; colspan=' . '4' . "><font color=\"#000000\">" . $row->title1 . '</font></td>';
                    echo '<td align=left;>' . 'Address Code' . '</td>';
                    echo '<td align=left; textcolor=white; colspan=' . '4' . "><font color=\"#000000\">" . $row->addresscode1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Name' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->nama11 . ' ' . $row->nama21 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Street' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->street1 . ' ' . $row->addit1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Country' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->kd5negara1 . '</font></td>';
                    echo '<td align=left;>' . 'City' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->kota1 . '</font></td>';
                    echo '<td align=left;>' . 'Postal Code' . '</td>';
                    echo '<td align=left>' . $row->postal_code1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Email' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->email1 . '</font></td>';
                    echo '<td align=left;>' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->mobile1 . '</font></td>';
                    echo '<td align=left;>' . 'Phone' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->telp1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'PO BOX' . '</td>';
                    echo '<td align=left>' . $row->po_box1 . '</td>';
                    echo '<td align=left;>' . 'Tax' . '</td>';
                    echo '<td align=left>' . $row->tax1 . '</td>';
                    echo '<td align=left;>' . 'Fax' . '</td>';
                    echo '<td align=left>' . $row->fax1 . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'NPWP' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->npwp1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<tr>';
                    echo '<td align=left; >' . 'Freight' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->kode_county1 . '</font></td>';
                    echo '</tr>';
                }
                foreach ($data['kd06'] as $row) {
                    echo '<br>';
                    echo '<br>';
                    echo '<tr>';
                    echo '<td></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD06 SALES CONDITION' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'SD' . '</td>';
                    echo '<td align=left>' . $row->sd . '</td>';
                    echo '<td align=left;>' . 'SG' . '</td>';
                    echo '<td align=left>' . $row->kd6sg . '</td>';
                    echo '<td align=left;>' . 'Sales' . '</td>';
                    echo '<td align=left; colspan=' . '4' . "><font color=\"#000000\">" . $row->sales . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Payterm' . '</td>';
                    echo '<td align=left>' . $row->payterm . '</td>';
                    echo '<td align=left;>' . 'Assignment' . '</td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->assigment . '</font></td>';
                    echo '<td align=left;>' . 'Del Term' . '</td>';
                    echo '<td align=left>' . $row->del_con . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Satuan' . '</td>';
                    echo '<td align=left>' . $row->satuan . '</td>';
                    echo '<td align=left;>' . 'Bisnis Type' . '</td>';
                    echo '<td align=left>' . $row->biz_type_p1 . '</td>';
                    echo '<td align=left;>' . 'Tax' . '</td>';
                    echo '<td align=left>' . $row->kd6tax . '</td>';
                    echo '<td align=left;>' . 'Allowance Qty' . '</td>';
                    echo '<td align=left>' . $row->allowance_qty . '%' . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Agent' . '</td>';
                    echo '<td align=left; colspan=' . '8' . "><font color=\"#000000\">" . $row->nama_agent1 . '</font></td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd11'] as $row) {
                    echo '<br>';
                    echo '<br>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD11 ASSOCIATION LIST' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Association' . '</td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->association_no1 . '</font></td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . 'Central regu' . '</font></td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->central_regu1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . 'SD' . '</font></td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->sd1 . '</font></td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . 'SG' . '</font></td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->sg1 . '</font></td>';
                    echo '</tr>';
                }
                
                foreach ($data['kd14'] as $row) {
                    echo '<br>';
                    echo '<br>';
                    echo '<tr>';
                    echo "<td align=left; bgcolor=\"black\"; textcolor=white; colspan=" . '9' . "><font color=\"#ffffff\">" . 'KD14 CONTACT' . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . 'Nama' . '</font></td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->nama_cp1 . '</font></td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . 'Contact Person' . '</font></td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->sgcp11 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left;>' . 'Mobile' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->mobile_cp1 . '</font></td>';
                    echo '<td align=left>' . $row->mobile_cp1 . '</td>';
                    echo '<td align=left>' . 'Phone' . '</td>';
                    echo '<td align=left>' . $row->phone_cp1 . '</td>';
                    echo '<td align=left;>' . 'Email' . '</td>';
                    echo '<td align=left; colspan=' . '3' . "><font color=\"#000000\">" . $row->email_cp1 . '</font></td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td align=left>' . 'Function' . '</td>';
                    echo '<td align=left; colspan=' . '2' . "><font color=\"#000000\">" . $row->function_cp1 . '</font></td>';
                    echo '</tr>';
                }
                
                ?>
            </tbody>
        </table>
    </div> --}}
</body>

</html>
