<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD14 Request Modify</title>
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

    <div id="watermark">
        <p>
            APPROVED
        </p>
    </div>

    <main>
        <div class="col-lg" style="border:black; border-width:0.5px; border-style:solid;">
            <div style="text-align:center; font-size: 24px;">
                <h4>KD14 Request Modify</h4>
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
                    foreach ($data['kd14'] as $row) {
                        echo '<tr>';
                        // echo "<th align=center; colspan=12; >". "NO : " .$row->no_formmis."</th>";
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD14' . '</td>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD14 Modify' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd14no_cust . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd14no_cust . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Contact Person' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Contact Person' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->cp1 = $row->cp1 != '' ? $row->cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->nama_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->nama_cp1 = $row->nama_cp1 != '' ? $row->nama_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Email' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->email_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Email' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->email_cp1 = $row->email_cp1 != '' ? $row->email_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->phone_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->phone_cp1 = $row->phone_cp1 != '' ? $row->phone_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->mobile_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->mobile_cp1 = $row->mobile_cp1 != '' ? $row->mobile_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Function' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->function_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Function' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->function_cp1 = $row->function_cp1 != '' ? $row->function_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Since' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->sinc_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Since' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sinc_cp1 = $row->sinc_cp1 != '' ? $row->sinc_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SD' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->sd_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SD' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sd_cp1 = $row->sd_cp1 != '' ? $row->sd_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SG' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->sg_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SG' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sg_cp1 = $row->sg_cp1 != '' ? $row->sg_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Add Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->add_addr_cp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Add Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->add_addr_cp1 = $row->add_addr_cp1 != '' ? $row->add_addr_cp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Status' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->status_old = $row->status_old == '1' ? "Active" : $row->status_old = $row->status_old == '2' ? "Inactive" : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Status' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->status = $row->status == '1' ? "Active" : $row->status = $row->status == '2' ? "Inactive" : '-' . '</td>');
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                    foreach ($data['kd14'] as $row) {
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Created By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . $row->created_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . $row->aprv1_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . $row->aprv2_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . $row->inputted_by . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->created_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->aprv1_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->aprv2_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->inputed_date)) . '</td>';
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
