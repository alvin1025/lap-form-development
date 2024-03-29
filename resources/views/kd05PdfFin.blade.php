<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD05 Request Modify</title>
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

        /* #table tr:nth-child(even){background-color: #f2f2f2;} */

        /* #table tr:hover {background-color: #ddd;} */

        /* #table tr {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            } */
        #watermark {
            position: fixed;
            /* font-size: 20%; */
            /* font-weight: bold;
                color: red; */

            /**
                    Set a position in the page for your image
                    This should center it vertically
                **/
            bottom: 14.5cm;
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
                <h4>KD05 Request Modify</h4>
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
                    foreach ($data['kd05'] as $row) {
                        echo '<tr>';
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900"">' . 'KD05' . '</td>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900"">' . 'KD05 Modify' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_cust1 . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_cust1 . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Address Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->addresscode1 . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Address Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->addresscode1 . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Title' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->title1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Title' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->title1 = $row->title1 != '' ? $row->title1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->nama11_old . ' ' . $row->nama21_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->nama11 = $row->nama11 != '' ? $row->nama11 . ' ' . $row->nama21 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; font-weight:900"">' . 'Street' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; word-break:break-all; word-wrap:break-word;">' . $row->street1_old . ' ' . $row->addit1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; font-weight:900"">' . 'Street' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; word-break:break-all; word-wrap:break-word;">' . ($row->street1 = $row->street1 != '' ? $row->street1 . ' ' . $row->addit1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Tax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->tax1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Tax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->tax1 = $row->tax1 != '' ? $row->tax1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Postal Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->postal_code1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Postal Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->postal_code1 = $row->postal_code1 != '' ? $row->postal_code1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Country' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kd5negara1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Country' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kd5negara1 = $row->kd5negara1 != '' ? $row->kd5negara1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Freight' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kode_county1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Freight' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kode_county1 = $row->kode_county1 != '' ? $row->kode_county1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Kota' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->kota1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Kota' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kota1 = $row->kota1 != '' ? $row->kota1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Fax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->fax1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Fax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->fax1 = $row->fax1 != '' ? $row->fax1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'PO Box' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->po_box1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'PO Box' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->po_box1 = $row->po_box1 != '' ? $row->po_box1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td align=left; colspan=3; style="font-size: 10; width:25px; font-weight:900"">' . 'Email' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; word-break:break-all; word-wrap:break-word;">' . $row->email1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; font-weight:900"">' . 'Email' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; width:25px; word-break:break-all; word-wrap:break-word;">' . ($row->email1 = $row->email1 != '' ? $row->email1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->telp1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->telp1 = $row->telp1 != '' ? $row->telp1 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->mobile1_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900"">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->mobile1 = $row->mobile1 != '' ? $row->mobile1 : '-' . '</td>');
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
                    foreach ($data['kd05'] as $row) {
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
                    }
                    
                    ?>
                </tfoot>
            </table>
        </div>
    </main>
    {{-- <small>FX-KXSA-001 | A.00-1</small> --}}
</body>

</html>
