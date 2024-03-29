<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" href="<?php echo base_url('assets/'); ?>
    img/Favico.ico" type="favico.ico"> --}}

    <title>KD03 Request Modify</title>
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
    {{-- <div id="watermark">
        <p>
            APPROVED
        </p>
    </div> --}}


    <main>
        <div class="col-lg" style="border:black; border-width:0.5px; border-style:solid;">
            <div style="text-align:center; font-size: 24px;">
                <h4>KD03 Request Modify</h4>
            </div>
            <table id="table">
                <thead>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['kd03'] as $row) {
                        echo '<tr>';
                        echo '</tr>';
                        echo '<br>';
                        echo '<br>';
                        echo '<tr>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD03' . '</td>';
                        echo '<td align=center; colspan=6; style="font-size: 14; font-weight:900">' . 'KD03 Modify' . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_cust . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'No Customer' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->no_cust . '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Short Name' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->short_name_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Short Name' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->short_name = $row->short_name != '' ? $row->short_name : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Title' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->title_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Title' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->title = $row->title != '' ? $row->title : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Class' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . substr($row->class_old, 4, 20) . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Class' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->class = $row->class != '' ? substr($row->class, 4, 20) : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->nama1_old . ' ' . $row->nama2_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Nama' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->nama1 = $row->nama1 != '' ? $row->nama1 . ' ' . $row->nama2 : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Street' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; word-break:break-all; word-wrap:break-word;">' . $row->street_old . ' ' . $row->addit_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Street' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; word-break:break-all; word-wrap:break-word;">' . ($row->street = $row->street != '' ? $row->street . ' ' . $row->addit : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Tax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->tax_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Tax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->tax = $row->tax != '' ? $row->tax : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Postal Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->postal_code_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Postal Code' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->postal_code = $row->postal_code != '' ? $row->postal_code : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Fax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->fax_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Fax' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->fax = $row->fax != '' ? $row->fax : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'PO Box' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->po_box_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'PO Box' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->po_box = $row->po_box != '' ? $row->po_box : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->telp_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Phone' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->telp = $row->telp != '' ? $row->telp : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->mobile_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Mobile' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->mobile = $row->mobile != '' ? $row->mobile : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Home' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->home_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Home' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->home = $row->home != '' ? $row->home : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Country' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->negara_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Country' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->negara = $row->negara != '' ? $row->negara : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Freight' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; word-break:break-all; word-wrap:break-word;">' . $row->kode_county_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Freight' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; word-break:break-all; word-wrap:break-word;">' . ($row->kode_county = $row->kode_county != '' ? $row->kode_county : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Kota' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; ">' . $row->kota_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Kota' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->kota = $row->kota != '' ? $row->kota : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'NPWP' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . $row->npwp_old . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'NPWP' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->npwp = $row->npwp != '' ? $row->npwp : '-' . '</td>');
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Status' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->status_old = $row->status_old == '1' ? "Active" : $row->status_old = $row->status_old == '2' ? "Inactive" : '-' . '</td>');
                        echo '<td align=left; colspan=3; style="font-size: 10; font-weight:900">' . 'Status' . '</td>';
                        echo '<td align=left; colspan=3; style="font-size: 10;">' . ($row->status = $row->status == '1' ? "Active" : $row->status = $row->status == '2' ? "Inactive" : '-' . '</td>');
                        echo '</tr>';
                        echo '<br>';
                    
                    }
                    ?>
                </tbody>
                <tfoot>
                    <?php
                    foreach ($data['kd03'] as $row) {
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
