<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD11 Request Modify</title>
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
            bottom: 17.5cm;
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
                <h4>KD11 Request New</h4>
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
                    foreach ($data['kd11'] as $row) {
                        echo '<tr>';
                        // echo "<th align=center; colspan=12; >". "NO : " .$row->no_formmis."</th>";
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=12; style="font-size: 14; font-weight:900">' . 'KD11' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd11no_cust . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Association' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->association_no1 = $row->association_no1 != '' ? $row->association_no1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SD' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sd1 = $row->sd1 != '' ? $row->sd1 : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'SG' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->sg1 = $row->sg1 != '' ? $row->sg1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Conditions' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->conditions1 = $row->conditions1 != '' ? $row->conditions1 : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Central Regu' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->central_regu1 = $row->central_regu1 != '' ? $row->central_regu1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Status' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->status = $row->status == '1' ? "Active" : $row->status = $row->status == '2' ? "Inactive" : '-' . '</td>');
                        echo '</tr>';
                        
                       
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Created By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . 'Approve By' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->created_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->aprv1_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->aprv2_by . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8; word-break:break-all; word-wrap:break-word;">' . $row->inputted_by . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->created_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->aprv1_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->aprv2_date)) . '</td>';
                        echo '<td align=center; colspan=3; style="font-size: 8;">' . date('d-m-Y', strtotime($row->inputed_date)) . '</td>';
                        echo '</tr>';
                        
                        ?>
                </tfoot>
            </table>
        </div>
    </main>

    {{-- <small>FX-KXSA-001 | A.00-1</small> --}}
</body>

</html>
